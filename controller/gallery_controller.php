<?php

if(isset($_POST['submit'])){
    include '../model/gallery_model.php';

    $targetDir = '../public/img/gallery/';
    $allowTypes = array('jpg' , 'png' , 'jpeg', 'gif');
    $statusMsg = $errorMsg = $insertValuesSQL = $errorUpload = $errorUploadType = '';
    $fileNames = array_filter($_FILES['files']['name']);

    if(!empty($fileNames)){
        foreach($_FILES['files']['name'] as $key=>$value){
            $fileName = basename($_FILES['files']['name'][$key]);
            
            $targetFilePath = $targetDir . $fileName;

            $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);
            if(in_array($fileType, $allowTypes)){
                if(move_uploaded_file($_FILES['files']['tmp_name'][$key],$targetFilePath)){
                    $insertValuesSQL .= "('".$fileName."', NOW()),";
                }
                else{
                    $errorUpload .= $_FILES['files']['name'][$key] .' | ';
                }
            }
            else{
                $errorUploadType .= $_FILES['files']['name'][$key].' | ';
            }
        }
    }
    if(!empty($insertValuesSQL)){
        $insertValuesSQL = trim($insertValuesSQL, ',');

        $model = new Gallery_Model;
        $insert = $model ->InsertIntoImages($insertValuesSQL);
        if($insert){
            $errorUpload = !empty($errorUpload)?'Upload Error: '.trim($errorUpload, ' | '): '';
            $errorUploadType = !empty($errorUpload)?'File Type Error: '.trim($errorUploadType, ' | '):'';
            $errorMsg = !empty($errorUpload)?'<br/>'.$errorUpload. '<br/>'.$errorUploadType:'<br/>'.$errorUploadType;
            $statusMsg = "<script>window.alert('Files are uploaded sucessfully.')</script>".$errorMsg;
        }
        else{
            $statusMsg = "<script>window.alert('Sorry, there was an error uploading your file.')</script>";
        }
    }

    else{
        $statusMsg = "<script>window.alert('Please select a file to upload.')</script> ";
    }
    echo $statusMsg;

}

