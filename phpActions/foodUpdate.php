<?php

include("../includes/conn.php");

if($_POST){
    $id = $_POST['id'];
    $name = $_POST['name'];
    
    $sql = "UPDATE foods SET name = '$name' WHERE id = '$id'";
    
    $query = mysqli_query($conn, $sql);
    if($query){
        header("Location: ../foods.php");
        exit(); 
    } else {
        echo "Error: " . $conn->error;
    }
}

?>
