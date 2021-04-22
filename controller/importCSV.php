<?php
    include '../../PHP-2/model/user.php';
    
$usermodel = new User();
$db = new Database();

if(isset($_POST['import'])){


    $file = $_FILES['import_file'];
    $fileName = $file['name'];
    $fileTmpName = $file['tmp_name'];

    if($_FILES['import_file']['name']){
            $filename = explode(".",$fileName);
            if(end($filename) == "csv"){
                $handle = fopen($fileTmpName,"r");
                while(($data = fgetcsv($handle,1000,",")) !== FALSE){
                    $sql = "INSERT INTO users (name,username,email,password) VALUES ('$data[1]','$data[2]','$data[3]','$data[4]')";
                    $stmt = $db->getPDOConnection()->prepare($sql);
                    $stmt->execute();
                    $stmt->closeCursor();
                        
                }
                    fclose($handle);
                    header("location: ../../PHP-1/view/home.php?update=1");
                }   
                else{
                    echo "please select CSV files only";
                }
            }
            else{
                echo "Please select a file";
            }
}