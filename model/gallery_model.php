<?php
include '../config/database/dbh.php';
class Gallery_Model{
    public function InsertIntoImages($insertVal){
        $db = new Database;
        $query = "INSERT INTO images (file_name, uploaded_on) VALUES $insertVal";
        $stmt = $db->getPDOConnection()->query($query);
        $stmt->execute();
        return $stmt;
    }
    public function GetAllImages(){
        $db = new Database;
        $query = "SELECT * FROM images ORDER BY id DESC";
        $stmt = $db->getPDOConnection()->query($query);
        $stmt->execute();
        return $stmt;
    }
}