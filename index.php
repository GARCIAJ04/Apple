<?php
$severname = "localhost";
$username = "root";
$password = "";
$dbname = "jovelyn";


$conn = new mysqli($severname, $username, $password,$dbname);    


if (!$conn->connect_error){
  
  echo $conn->connect_error;
}

$sql = "SELECT * FROM bsis";
$bsis = $conn->query($sql) or die ($conn->error);
$row = $bsis->fetch_assoc();

//   do{

//      echo $row['first_name']." " .$row['Last_name'] . "</br>";

//    }while($row = $bsis->fetch_assoc());
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <mete http-equiv="X-UA-Compatible">

    <!-- Navbar -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
      
   <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  

  <!-- data tables -->
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css" />

<!-- Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<title>Installment Deal</title>

<style>
            body {
               font-family: "Arial";
              background-color: #2F4F4F;
              min-height: 100vh;
            }
           
            h1{
              text-align: center;
              font-family: "Serif";
              color: white;
              
            }
          table {
            border: 1px solid black;
            border-collapse: collapse;
            width: 100%;
            color: white;
          }
             th {
              border: 1px solid black;
              text-align: center;
              padding : 8px;
              border-bottom: 1px solid #ddd;
              font-family: "Georgia";
              color: #000000;
              background-color:#778899;
            }

             td{
            border: 1px solid black;
            text-align: center;
            padding : 8px;
            border-bottom: 1px solid #ddd;
            font-family: "Georgia";
            color:black;
          }
            tr:nth-child(even) {
              background-color: #f2f2f2;
             
            }
            
    
          </style>
</head>

<body style=" background-color:#696969; font-family: 'poppins';">
<?php include 'navbar.php'?>



<div class="container">

    <?php
    if (isset($_GET["msg"])) {
      $msg = $_GET["msg"];
      echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
      ' . $msg . '
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
  }
  ?>
 
      <h1>Apple iPhone</h1>
      <a href="add-new.php" class="btn btn-dark mb-3">Add Product</a>

    <table id="myTable" class="table-hover text-center">
       <thead class="table-dark">
          <tr>
              <th>ID</th>
              <th>Brand</th>
              <th>Price</th>
              <th>Gigabytes</th>
              <th>Screen Size</th>
              <th>Front Camera</th>
              <th>Action</th>  
          </tr>
        </thead>
            <tbody>
            <?php 
            $sql = "SELECT * FROM `bsis`";
            $students = $conn->query($sql) or die ($conn->error);
            $row = $students->fetch_assoc();
              ?>
             
             <?php do{ ?>
            <tr>
              <td><?php echo $row['Id']; ?></td>
              <td><?php echo $row['Brand']; ?></td>
              <td><?php echo $row['Price']; ?></td>
              <td><?php echo $row['Gigabytes']; ?></td>
              <td><?php echo $row['Screen_Size']; ?></td>
              <td><?php echo $row['Front_Camera']; ?></td>
              <td>
              <a href="edit.php?id=<?php echo $row["Id"] ?>" class="link-dark"><i class="fa-solid fa-pen-to-square fs-10 me-3"></i></a>
              <a href="delete.php?id=<?php echo $row["Id"] ?>" class="link-dark"><i class="fa-solid fa-trash fs-10"></i></a>
              </td>
            </tr>
           
            <?php }while($row = $students->fetch_assoc())?>

         </tbody>   
      </table>   
       <!-- Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.7.0.js"></script>

  <!-- Navbar -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  <!-- data tables -->
  <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
  <script>
     $(document).ready( function () {
       $('#myTable').DataTable();
     });
  </script>


</body>
</html>