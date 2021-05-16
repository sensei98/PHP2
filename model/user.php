<?php
include '../config/database/dbh.php';
class User{

    private $db;
    public function __construct() {
        $this->db = new Database();
    }

    public function GetAllUsers(){
        $sql = "SELECT * FROM users";
        $result = $this->db->getPDOConnection()->query($sql);
        return $result;

    }
    public function getUserById(){ //NOT NEEDED
        $sql = "SELECT * FROM users ORDER BY ID DESC";
        $result = $this->db->getPDOConnection()->query($sql);
        return $result;
    }

    public function getUserInfo(){
        $sql = "SELECT id,name,username,email FROM users ORDER BY ID ASC";
        $result = $this->db->getPDOConnection()->query($sql);
        return $result;
    }
    public function UpdateUsers($ID,$name,$username,$password){
        $sql = "UPDATE users SET name = '$name', username = '$username', password = '$password' WHERE id = '$ID' ";
        $result = $this->db->getPDOConnection()->query($sql);
        return $result;
        
                                 
    }
    public function InsertIntoUsers($data1,$data2,$data3,$data4){
        $sql = "INSERT INTO users(ID,name,username,email,password) VALUES ('$data1','$data2','$data3','$data4')";
        $stmt = $this->db->getPDOConnection()->prepare($sql);
        $stmt->execute();
        $stmt->closeCursor();
        return $stmt;

    }
}