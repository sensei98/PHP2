<?php
    include '../../PHP-2/model/user.php';
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
