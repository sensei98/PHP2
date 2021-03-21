<?php
include '../model/gallery_model.php';



class gallery_controller extends gallery_model{
    
    public function getAllImages(){

        $contr = new gallery_model();
        $row = $contr->getAllImages();

        return $row;
    }

    public function InsertIntoGallery($imageTitle,$imageDesc,$imageFullName,$setImageOrder){
        return $this->InsertIntoGallery($imageTitle,$imageDesc,$imageFullName,$setImageOrder);
    }

    public function getAllImagesByOrder(){
    //    $row = $this->getAllImagesByOrder();
        $contr = new gallery_model();
        $row = $contr->getAllImagesByOrder();

        return $row;
       
    }

}