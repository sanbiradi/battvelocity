<?php
include_once "db.php";
session_start();
$name = $email = $mobile = $subject = $message = "";
if ($_SERVER["REQUEST_METHOD"] == 'POST') {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $mobile = $_POST["mobile"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];
    $noerrors = true;

    if (empty($name)) {
        $noerrors = false;
    }
    if (empty($email)) {
        $noerrors = false;
    }
    if (empty($mobile)) {
        $noerrors = false;
    }
    if (empty($subject)) {
        $noerrors = false;
    }
    if (empty($message)) {
        $noerrors = false;
    }
    if($noerrors){
        $query = "INSERT INTO `responses`( `name`, `email`, `phone`, `subject`, `message`) VALUES ('{$name}','{$email}','{$mobile}','{$subject}','{$message}')";
        if($conn->query($query)){
            header("location:index.php?msg=Form submitted successfully!");
        }
    }
}
