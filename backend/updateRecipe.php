<?php
include "config.php";
$input = file_get_contents('php://input');
$data = json_decode($input,true);
$message = array();
$recipeName = $data['recipeName'];
$description = $data['description'];
$id = $_GET['id'];

$q = mysqli_query($con, "UPDATE `recipe` SET (`recipeName`, `description`) VALUES ('$recipeName', '$description') WHERE `id` = '{$id}' LIMIT 1");

if($q){
    http_response_code(201);
    $message['status'] = "Success";
} else {
    http_response_code(422);
    $message['status'] = "Error";
}

echo json_encode($message);
echo mysqli_error($con);