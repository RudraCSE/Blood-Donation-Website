<?php
session_start();
error_reporting(0);
include('includes/config.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Why Become Donor</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="css/modern-business.css" rel="stylesheet">

    <!-- Temporary navbar container fix -->
    <style>
    .navbar-toggler {
        z-index: 1;
    }
    
    @media (max-width: 576px) {
        nav > .container {
            width: 100%;
        }
    }

    .img-fluid{

  display: block;
  margin-left: 10px;
  margin-right: auto;
  width: 50%;

    }

    </style>

</head>

<body>


  
<?php include('includes/header.php');?>
    <!-- Page Content -->
    <div class="container">
                    <?php 
$pagetype=$_GET['type'];
$sql = "SELECT type,detail,PageName from tblpages where type=:pagetype";
$query = $dbh -> prepare($sql);
$query->bindParam(':pagetype',$pagetype,PDO::PARAM_STR);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{ ?>        

        <h1 class="mt-4 mb-3"><?php   echo htmlentities($result->PageName); ?> </h1>

        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="index.php">Home</a>
            </li>
            <li class="breadcrumb-item active"><?php   echo htmlentities($result->PageName); ?></li>
           
        </ol>
      
              <div class="col-lg-4">
             <img class="img-fluid rounded" src="images/log.png" alt="" align="center" >
               
         <p class="para">We have created this website for the purpose of a project of our university. Our course teacher asked everyone in our class to work on different projects. And divided into different teams to complete the project.

        That's why we choose this project, because "blood" is a very important thing. The need for blood in various emergency operations is very immense, so to meet the demand for blood online so that people can easily find blood, this website was created </p>
            
          </div>

        

    </div>
    <!-- /.container -->

  

    <?php } } ?>

    <!-- Footer -->
   <?php include('includes/footer.php');?>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/tether/tether.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

</body>

</html>
