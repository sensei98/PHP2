<?php
class Validate{
    // public function __construct($data){
        
    // }    
    public function ValidateData($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

}

