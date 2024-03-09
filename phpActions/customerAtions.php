<?php
session_start();
include("../includes/conn.php");

if($_POST){
    $name = $_POST['name'];
    $phone = $_POST['phone'];

    $sql = "INSERT INTO customers (name, phone) VALUES ('$name','$phone')";
    $query = mysqli_query($conn, $sql);
    if($query){
        header("Location: ../customer.php");
        exit();
    }else{
        echo "Error:" . $conn->error;}
    }
        ?>
