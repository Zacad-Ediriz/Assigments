


<?php

include("includes/conn.php");
include("includes/header.php");
include("includes/sidebar.php");


if(isset($_GET['id'])){
    $id = $_GET['id'];
}

$sql = "select * from foods where id = $id";
$query = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($query);
?>

<main id="main" class="main">

<div class="pagetitle">
  <h1>Form Elements</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.html">Home</a></li>
      <li class="breadcrumb-item">Forms</li>
      <li class="breadcrumb-item active">Elements</li>
    </ol>
  </nav>
</div><!-- End Page Title -->

<section class="section">
  <div class="row">
    <div class="col-lg-12">

      <div class="card">
        <div class="card-body">
          <h5 class="card-title">General Form Elements</h5>

          <!-- General Form Elements -->
          <form action="phpActions/foodUpdate.php" method="post">
            <div class="row mb-3">
              <label for="inputText" class="col-sm-2 col-form-label">Name</label>
              <div class="col-sm-10">
                <input type="hidden" name="id" value= "<?php echo $row['id'] ?>" class="form-control">
                <input type="text" name="name" value="<?php echo $row['name']?>" class="form-control">
              </div>
            </div>
            

            <div class="row mb-3">
              <label class="col-sm-2 col-form-label">Submit Button</label>
              <div class="col-sm-10">
                <button type="submit" class="btn btn-primary">Submit Form</button>
              </div>
            </div>

          </form><!-- End General Form Elements -->

        </div>
      </div>

    </div>

   
  </div>
</section>
</div>
</main><!-- End #main -->





<?php

include("includes/footer.php");

?>