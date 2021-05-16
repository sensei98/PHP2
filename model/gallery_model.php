<?php
include '../config/database/dbh.php';
class Gallery_Model{

    private $db;
    public function __construct(){
        $this->db = new Database();
    }

    public function InsertIntoImages($insertVal){
        $query = "INSERT INTO images (file_name, uploaded_on) VALUES $insertVal";
        $stmt = $this->db->getPDOConnection()->query($query);
        $stmt->execute();
        return $stmt;
    }
    public function GetAllImages(){
        $query = "SELECT * FROM images ORDER BY id DESC";
        $stmt = $this->db->getPDOConnection()->query($query);
        $stmt->execute();
        return $stmt;
    }
}