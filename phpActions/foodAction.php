<?php

include("../includes/conn.php");

if($_POST){
    $name = $_POST['name'];

    $sql = "INSERT INTO foods (name) VALUES ('$name')";
    
    $query = mysqli_query($conn, $sql);
    if($query){
        header("Location: ../foods.php");
        exit(); 
    } else {
        echo "Error: " . $conn->error;;
    }
}
?>
