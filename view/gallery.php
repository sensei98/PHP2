<?php 

    include '../database/dbh.php';
    // $contr = new gallery_controller();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href ="../css/style.css">
    <title>Gallery</title>
</head>
<body>
    <?php
        if(isset($_POST['submit'])){

            $newFileName = $_POST['filename'];
            if(empty($newFileName)){ //if the filename input is empty, assign a randomID to it
                $newFileName = "gallery";
            }
            else{
                $ewFileName = strtolower(str_replace(" ","-",$newFileName)); //replacing spaces with dash
            }
            $imageTitle = $_POST['filetitle'];
            $imageDesc = $_POST['filedesc'];

            $file = $_FILES["file"];

            $fileName = $file['name'];
            $fileType = $file['type'];
            $fileTmpName = $file['tmp_name'];
            $fileErr = $file['error'];
            $fileSize = $file['size'];

            $fileExt = explode(".", $fileName); //getting the lastpart of filename where name has .jpg eg
            $fileActualExt = strtolower(end($fileExt)); //grabbing actual file extension

            $allowed = array("jpg", "jpeg", "png"); //allowed image types

            if(in_array($fileActualExt, $allowed)){
                if($fileErr == 0){ //no errors
                    if($fileSize < 2000000){
                        $imgFullName = $newFileName . "." . uniqid("",true) . ".". $fileActualExt;//creating a unique ID
                        $fileDestination = "../img/gallery/" . $imgFullName;

                        if(empty($imageTitle) || empty($imageDesc)){
                            header("Location: gallery.php?upload=empty");
                            exit();
                        }
                        else{
                            
                            // $getQuery = $contr->getAllImages();
                            $db = new DB();
                            $stmt = $db->getPDOConnection()->query("SELECT * FROM gallery;");
                            
                            if(!$stmt){
                                echo "Connection failed";
                            }
                            else{
                                $stmt->execute();
                                // $result = $stmt->fetchAll();
                                $result = mysqli_stmt_get_result($stmt);
                                $rowCount = mysqli_num_rows($result);
                                $setImageOrder = $rowCount + 1;

                                // $insertItem = $contr->InsertIntoGallery($imageTitle,$imageDesc,$imgFullName,$setImageOrder);
                                // $db = new DB();
                                $stmt = $db->getPDOConnection()->query("INSERT into gallery (titleGallery,descGallery,imgFullNameGallery,orderGallery) VALUES (? ,? ,?, ?);");
                                $stmt->execute([$imageTitle,$imageDesc,$imgFullName,$setImageOrder]);
                                $result = $stmt->fetch();
                                if(!$result){
                                    echo " Connection failed";
                                }
                                else{
                                    move_uploaded_file($fileTmpName,$fileDestination);
                                    header("Location: gallery.php?upload=success");
                                }
                            }
                        }
                    }
                    else{
                        echo " File size too big";
                        exit();
                    }
                }
                else{
                    echo "you had an error";
                    exit();
                }
               
            }
            else{
                echo "You need to upload the proper file type";
                exit();
            }
           
        }
    ?>

    <section class="gallery-links">
        <div class="wrapper">
            <h2>Gallery</h2>
            <div class="gallery-container">
                <?php
                    // $getQuery = $contr->getAllImagesByOrder();
                    $db = new DB();
                    $stmt = $db->getPDOConnection()->query("SELECT * FROM gallery ORDER BY orderGallery DESC");
                    
                    if(!$result){
                        echo "connection failed!";
                    }
                    else{
                        while($row = $stmt->fetch()){
                            echo '<a href="#">
                        <div style = "background-image:url(../img/gallery/'.$row['imgFullNameGallery'].') ;" ></div> 
                        <h3> ' .$row['titleGallery']. '</h3>
                        <p>' .$row['descGallery'].'</p>
                        </a>';
                        
                        // var_dump($row);
                        }
                           
                        
                    }
                ?>
            </div>
            <?php
                echo '<div class="gallery-upload">
                <form action = "gallery.php" method="post" enctype="multipart/form-data">
                    <input type="text" name="filename" placeholder="File name...">
                    <input type="text" name="filetitle" placeholder="Image title...">
                    <input type="text" name="filedesc" placeholder="Description...">
                    <input type="file" name="file">
                    <button type="submit" name="submit">Upload</button>
                </form>
            </div>';
            ?>
        </div>
    </section>
</body>
</html>