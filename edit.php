<?php
include "db_conn.php";
$id = $_GET["id"];

if (isset($_POST["submit"])) {
  $brand = $_POST['Brand'];
  $price = $_POST['Price'];
  $gigabytes = $_POST['Gigabytes'];
  $screen_size = $_POST['Screen_Size'];
  $front_camera = $_POST['Front_Camera'];

  $sql = "UPDATE `bsis` SET `Brand`='$brand',`Price`='$price',`Gigabytes`='$gigabytes',`Screen_Size`='$screen_size',`Front_Camera`='$front_camera' WHERE id = $id";

  $result = mysqli_query($conn, $sql);

  if ($result) {
    header("Location: index.php?msg=Data updated successfully");
  } else {
    echo "Failed: " . mysqli_error($conn);
  }
}

?>




<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <title>Student Management System</title>
</head>

<body style=" background-color:teal; font-family: 'poppins';">
  
<?php include 'navbar.php'?>
 

  <div class="container">
    <div class="text-center mb-4">
      <h3>Edit Phone Information</h3>
    </div>

    <?php
    $sql = "SELECT * FROM `bsis` WHERE id = $id LIMIT 1";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    ?>

    <div class="container d-flex justify-content-center">
      <form action="" method="post" style="width:50vw; min-width:300px;">
        <div class="row mb-3">
          <div class="col">
            <label class="form-label">Brand</label>
            <input type="text" class="form-control" name="Brand" value="<?php echo $row['Brand'] ?>">
          </div>

          <div class="col">
            <label class="form-label">Price</label>
            <input type="text" class="form-control" name="Price" value="<?php echo $row['Price'] ?>">
          </div>
        </div>

        <div class="mb-3">
          <label class="form-label">Gigabytes</label>
          <input type="address" class="form-control" name="Gigabytes" value="<?php echo $row['Gigabytes'] ?>">
        </div>

        <div class="mb-3">
          <label class="form-label">Screen Size</label>
          <input type="age" class="form-control" name="Screen_Size" value="<?php echo $row['Screen_Size'] ?>">
        </div>

        <div class="mb-3">
          <label class="form-label">Front Camera</label>
          <input type="gender" class="form-control" name="Front_Camera" value="<?php echo $row['Front_Camera'] ?>">
        </div>

       

        <div>
          <button type="submit" class="btn btn-success" name="submit">Update</button>
          <a href="index.php" class="btn btn-danger">Cancel</a>
        </div>
      </form>
    </div>
  </div>

  <!-- Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>

</html>