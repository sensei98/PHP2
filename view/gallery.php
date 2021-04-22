<?php include './inc/header.php';
    include '../model/gallery_model.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery</title>
</head>
<body>
    <section class='gallery-container'>
        <h2>GALLERY</h2>
        <section class="gallery-inner-container">
        <?php
            
            $model = new Gallery_Model;
            $result = $model->GetAllImages(); 

            if($result){
                foreach($result as $row){
                    $imageURL = '../public/img/gallery/'.$row['file_name'];
                    // $imageURL = imagefilter($imageURL, IMG_FILTER_BRIGHTNESS, 10);
        ?>
                
                <img src="<?php echo $imageURL; ?>" alt="">
                <?php }
            }
            else{ ?>
                <p>NO images found</p>
            <?php }?>

        


                <form action="../controller/gallery_controller.php" method="post" enctype="multipart/form-data">
                    Select images to Upload
                    <input type="file" name="files[]" multiple>
                    <input type="submit" name="submit" value=UPLOAD> 
                </form>
        </section>
    </section>
</body>
</html>