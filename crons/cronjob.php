<?php
include '../model/user.php';

$users = new User;
$users->GetAllUsers(); //gettting all users from the database

foreach($users as $data){
    $row = "\r\n\r\nName : ".$data->name." ";
    $row .= "\r\n\r\nEmail : ".$data->email." ";
    $row .= "\r\n\r\nUsername : ".$data->username." ";
}
$to = "641496@student.inholland.nl";
$subject = "Registered users";
$message = "Hello ,\r\n\r\n These are your registered users. \r\n";
$message .= $row."\r\n"; 
$message .= "\r\n\r\nNext User list will be sent after 24 hours at 10:00 AM.\r\n\r\n"; 
 
$headers = "From <tsaglisamuel.000webhost.com>";

mail($to,$subject,$message,$headers);

