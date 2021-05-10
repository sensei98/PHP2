<?php
include '../config/database/dbh.php';

class Confirm_Model{
    
    public function getQuery($payment_id,$status,$description){
        $pdo = new Database();
        $sql = "INSERT INTO payments (id,status,description) values ($payment_id,$status,$description)";
        $stmt = $pdo->getPDOConnection()->query($sql);
        $stmt->execute();
        // $stmt->execute([
        //     'id' => $payment_id,
        //     'status' => $status,
        //     'description' => $description
        // ]);
        return $stmt;

    }
    public function getAllPayments(){
        $pdo = new Database();
        $sql = "SELECT * FROM payments";
        $stmt = $pdo->getPDOConnection()->query($sql);
        $stmt->execute();
        return $stmt;
    }
}