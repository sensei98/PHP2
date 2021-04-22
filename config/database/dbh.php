<?php

    class Database{
        private $servername;
        private $username;
        private $password;
        private $dbname;

        public function __construct(){
            //put connection in database
        }

        public function getPDOConnection(){
            $this->servername = "localhost";
            $this->username ="root";
            $this->password = "root";
            $this->dbname = "UsersDB";
            $this->charset = "utf8mb4";

            try{
               $dsn = "mysql:host=".$this->servername.";dbname=".$this->dbname.";charset=".$this->charset;
               $pdo = new PDO($dsn,$this->username, $this->password);
               $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
                
            }
            catch(\PDOException $e){
               throw new \PDOException("connection failed:" .$e->getMessage());
            }
            return $pdo;
        }
        
        public function getConnection(){
            // $this->servername = "localhost";
            // $this->username ="root";
            // $this->password = "root";
            // $this->dbname = "PHP2DB";

            $conn = mysqli_connect($this->servername,$this->username,$this->password,$this->dbname);        
            return $conn;
        }
}