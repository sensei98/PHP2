<?php
include '../config/database/dbh.php';

class Confirm_Model{

    private $db;
    public function __construct(){
        $this->db = new Database();
    }
    
    public function getQuery($payment_id,$status,$description){
        $sql = "INSERT INTO payments (id,status,description) values ($payment_id,$status,$description)";
        $stmt = $this->db->getPDOConnection()->query($sql);
        $stmt->execute();
        return $stmt;
    }
    public function getAllPayments(){
        $sql = "SELECT * FROM payments";
        $stmt = $this->db->getPDOConnection()->query($sql);
        $stmt->execute();
        return $stmt;
    }
}