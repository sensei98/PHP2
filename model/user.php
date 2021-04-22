<?php
include '../config/database/dbh.php';
class User{
    // public $db;
    public function GetAllUsers(){
        $db = new Database();
        $sql = "SELECT * FROM users";
        $result = $db->getPDOConnection()->query($sql);
        return $result;

    }
    public function getUserById(){ //NOT NEEDED
        
        $db = new Database();
        // $pdo = $db->getPDOConnection();

        $sql = "SELECT * FROM users ORDER BY ID DESC";
        $result = $db->getPDOConnection()->query($sql);
        return $result;
    }

    public function getUserInfo(){
        $db = new Database();

        $sql = "SELECT id,name,username,email FROM users ORDER BY ID ASC";
        $result = $db->getPDOConnection()->query($sql);
        return $result;
        
    }
    public function UpdateUsers($ID,$name,$username,$password){
        $db = new Database();
        $sql = "UPDATE users SET name = '$name', username = '$username', password = '$password' WHERE id = '$ID' ";
        $result = $db->getPDOConnection()->query($sql);
        return $result;
        
                                 
    }
    public function InsertIntoUsers($data1,$data2,$data3,$data4){
        $db = new Database();
        $sql = "INSERT INTO users(ID,name,username,email,password) VALUES ('$data1','$data2','$data3','$data4')";
        $stmt = $db->getPDOConnection()->prepare($sql);

        // $stmt->bindParam(':name',$data[1]);
        // $stmt->bindParam(':username',$data[2]);
        // $stmt->bindParam(':email',$data[3]);
        // $stmt->bindParam(':password',$data[4]);

        $stmt->execute();
        $stmt->closeCursor();
        return $stmt;

    }
    public function getInsertQuery(){ // insert

    }



    // protected function getAllImages(){
    //     $sql = "SELECT * FROM gallery;";
    //     $result = $this->getPDOConnection()->query($sql);
    //     // while($row = $result->fetch()){
    //     //     return $row;
    //     // }
    //     return $result;
        
        
    // }
}
