<?php
include "db_conn.php";

if (isset($_POST["submit"])) {
   $brand = $_POST['Brand'];
   $price = $_POST['Price'];
   $gigabytes = $_POST['Gigabytes'];
   $screen_size = $_POST['Screen_Size'];
   $front_camera = $_POST['Front_Camera'];
   

   $sql = "INSERT INTO `bsis`(`Brand`, `Price`, `Gigabytes`, `Screen_Size`, `Front_Camera`) VALUES
    ('$brand','$price','$gigabytes','$screen_size','$front_camera')";

   $result = mysqli_query($conn, $sql);

   if ($result) {
      header("Location: index.php?msg=New record created successfully");
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

   <title>Installment Deal</title>
   <style>
       body {
          background-color: #2F4F4F;
          min-height: 100vh;
         }
   </style>
</head>

<body style="background-color:teal; font-family:'garamond';">
<?php include 'navbar.php'?>
   

   <div class="container">
      <div class="text-center mb-4">
         <h3>Add Product</h3>
      </div>

      <div class="container d-flex justify-content-center">
         <form action="" method="post" style="width:50vw; min-width:300px;">
            <div class="row mb-3">
               <div class="col">
                  <label class="form-label">Brand</label>
                  <input type="text" class="form-control" name="Brand" placeholder="brand">
               </div>

               <div class="col">
                  <label class="form-label">Price</label>
                  <input type="text" class="form-control" name="Price" placeholder="price">
               </div>
            </div>
          
            <div class="mb-3">
               <label class="form-label">Gigabytes</label>
               <input type="address" class="form-control" name="Gigabytes" placeholder="gigabytes">
            </div>


            <div class="col">
                  <label class="form-label">Screen Size</label>
                  <input type="text" class="form-control" name="Screen_Size" placeholder="screen_size">
               </div>
              
             <div class="col">
                  <label class="form-label">Front Camera</label>
                  <input type="text" class="form-control" name="Front_Camera" placeholder="front_camera">
               </div>


            <div>
               <button type="submit" class="btn btn-success" name="submit">Save</button>
               <a href="index.php" class="btn btn-danger">Cancel</a>
            </div>
         </form>
      </div>
   </div>

   <!-- Bootstrap -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
   <!-- SweetAlert
   <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script> -->

</body>

</html>