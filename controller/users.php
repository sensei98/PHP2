<?php

include '../../PHP-2/model/user.php';
// include '../../PHP-1/model/db_conn.php';

// $host = "localhost";     
// $user = "root";
// $password = "root";
// $dbName = "UsersDB";


// $connect = mysqli_connect($host, $user, $password, $dbName);

// if(!$conn){
//     die("Connection failed : " .mysqli_connect_error());
// }

$usermodel = new User();
        $db = new Database();
        if(isset($_POST['import'])){
            $file = $_FILES['import_file'];
            $fileName = $file['name'];
            $fileTmpName = $file['tmp_name'];

            if($_FILES['import_file']['name']){
                $filename = explode(".",$fileName);
                if(end($filename) == "csv"){
                    $handle = fopen($fileTmpName,"r");
                    while(($data = fgetcsv($handle,1000,",")) !== FALSE){

                        // $usermodel->InsertIntoUsers($data[1],$data[2],$data[3],$data[4]);

                        // $db = new Database();
                        // $id = mysqli_real_escape_string($connect,$data[1]);
                        // $name = mysqli_real_escape_string($connect,$data[2]);
                        // $username = mysqli_real_escape_string($connect,$data[3]);
                        // $email = mysqli_real_escape_string($connect,$data[4]);
                        // $password = mysqli_real_escape_string($connect,$data[5]);

                        $sql = "INSERT INTO users (name,username,email,password) VALUES ('$data[1]','$data[2]','$data[3]','$data[4]')";

                        // mysqli_query($connect,$sql);
                        $stmt = $db->getPDOConnection()->prepare($sql);

                        // $stmt->bindParam(':id', $data[0]);
                        // $stmt->bindParam(':name',$data[0]);
                        // $stmt->bindParam(':username',$data[1]);
                        // $stmt->bindParam(':email',$data[2]);
                        // $stmt->bindParam(':password',$data[3]);

                        $stmt->execute();
                        $stmt->closeCursor();
                        
                       
                    }
                    fclose($handle);
                    header("location: ../../PHP-1/view/home.php?update=1");
                }   
                else{
                    echo "please select CSV files only";
                }
            }
            else{
                echo "Please select a file";
            }
        }
class Users{
    
    public function ExportToCSV(){
        $usermodel = new User();
        if(isset($_POST['export'])){
            header('Content-Type: text/csv; charset=utf-8');
            header('Content-Disposition: attachment; filename=data.csv');

            $output = fopen("php://output" , "w");
            fputcsv($output,array('ID','Name','Username','Email'));

            $user = $usermodel->getUserInfo();

            foreach($user as $row){
                fputcsv($output,$row);
            }
            fclose($output);
            
        }

    }
            //........
        //check URLROOT out
    public function importToCSV(){
        
    }
}


