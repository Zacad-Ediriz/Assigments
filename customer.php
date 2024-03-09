


<?php

include("includes/conn.php");
include("includes/header.php");
include("includes/sidebar.php");

?>

<main id="main" class="main">



<section class="section">
  <div class="row">
    <div class="col-lg-12">

      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Create new customer</h5>

          <!-- General Form Elements -->
          <form action="phpActions/customerAtions.php" method="post">
            <div class="row mb-3">
              <label for="inputText" class="col-sm-2 col-form-label">Name</label>
              <div class="col-sm-10">
                <input type="text" name="name" class="form-control">
              </div>
            </div>
            <div class="row mb-3">
              <label for="inputText" class="col-sm-2 col-form-label">Phone</label>
              <div class="col-sm-10">
                <input type="text" name="phone" class="form-control">
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

<div class="card">
  <div class="card-body">
    <h5 class="card-title">Customers List</h5>

    <!-- Table with stripped rows -->
    <table class="table datatable">
      <thead>
        <tr>
          <th>
          ID
          </th>
          <th>Name</th>
          <th>Phone</th>
          
        </tr>
      </thead>
      <tbody>
      <?php
      $counter = 1;
$sql = "SELECT * FROM customers ";
$query = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_array($query)){

    ?>



        <tr>
          <td><?php echo $counter++ ; ?></td>
          <td><?php echo $row['name'] ?></td>
          <td><?php echo $row['phone'] ?></td>
          
        </tr>
       <?php
       }
       ?>
       
      </tbody>
    </table>
    <!-- End Table with stripped rows -->

  </div>
</div>
</main><!-- End #main -->





<?php

include("includes/footer.php");

?>