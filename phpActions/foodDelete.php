<?php

include("../includes/conn.php");

if(isset($_GET['id'])){
    $id = $_GET['id'];
    
    $sql = "DELETE FROM foods WHERE id = '$id'";
    
    $query = mysqli_query($conn, $sql);
    if($query){
        header("Location: ../foods.php");
        exit(); 
    } else {
        echo "Error: " . $conn->error;;
    }
} else {
    echo "ID not provided.";
}

?>
