<?php
session_start();

  require_once 'includes/conn.php';

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
function isAuthenticated() {
    return isset($_SESSION["authenticated"]) && $_SESSION["authenticated"] === true;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $_SESSION["authenticated"] = true;
    
    // Redirect to a secure page
    header("Location: secure_page.php");

    $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $_SESSION['username'] = $username;
        header("Location: Index.php");
    } else {
        echo "Invalid username or password.";
    }
}

$conn->close();
?>