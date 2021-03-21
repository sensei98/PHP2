<?php
include '../database/dbh.php';

class gallery_model extends DB{

    protected function getAllImages(){
        $sql = "SELECT * FROM gallery;";
        $result = $this->getPDOConnection()->query($sql);
        // while($row = $result->fetch()){
        //     return $row;
        // }
        return $result;
        
        
    }

    protected function InsertIntoGallery($imageTitle,$imageDesc, $imageFullName, $setImageOrder){
        $sql  = "INSERT INTO gallery (titleGallery,descGallery,imgFullNameGallery,orderGallery) 
                    VALUES (?,?,?,?);";
        $result = $this->getPDOConnection()->query($sql);
        $result->execute([$imageTitle, $imageDesc, $imageFullName, $setImageOrder]);
        
    }

    
    protected function getAllImagesByOrder(){
        $sql = "SELECT * FROM gallery ORDER BY orderGallery DESC;";
        $result = $this->getPDOConnection()->query($sql);
       
            return $result;
        
        
    }


}