
<?php
session_start();
include("includes/header.php");
include("includes/sidebar.php");


// Check if the user is authenticated
if (!isAuthenticated()) {
    // User is not authenticated, redirect to login page
    header("Location: login.php");
    exit;
}

?>


  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->


  </main><!-- End #main -->


  <?php

include("includes/footer.php");

?>
