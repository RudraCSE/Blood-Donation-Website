<?php
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

    <title>About</title>
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="css/modern-business.css" rel="stylesheet">
    <style>
    .navbar-toggler {
        z-index: 1;
    }

    @media (max-width: 576px) {
        nav > .container {
            width: 100%;
        }
    }
    .carousel-item.active,
    .carousel-item-next,
    .carousel-item-prev {
        display: block;
    }


   
    .t {
  border: 1px solid #ddd;
  border-radius: 4px;
  padding: 5px;
  width: 80px;
}
 .r {
  border: 2px solid #ddd;
  border-radius: 4px;
  padding: 5px;
  width: 350px;
  height:350px;
}

 .rr {
  border: 2px  solid #FF0000;

  padding: 0px;
  width: 200px;
 
}
  .ak {
  border: 2px solid #ddd;
  border-radius: 4px;
  padding: 5px;
  width: 350px;
  height:350px;


}

.pc {
  border: 2px solid #ddd;
  border-radius: 4px;
  padding: 5px;
  width: 350px;
  height:350px;

}

  .aa {
  border: 2px  solid #FF0000;

  padding: 0px;
  width: 350px;
 
}


.b {
  border: 2px  solid #FF0000;

  padding: 0px;
  width: 350px;
 
}

.pp {
  border: 2px  solid #FF0000;

  padding: 0px;
  width: 350px;
 
}
    </style>

</head>

<body>

    <!-- Navigation -->
<?php include('includes/header.php');?>




    <!-- Page Content -->
    <div class="container">

        <h1 class="my-4">About Us</h1>
        <hr class="red-bar">


 <div class="container">
    
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="index.php">Home</a>
            </li>
            <li class="breadcrumb-item active">Become a Donor</li>
        </ol>
            <?php if($error){?><div class="errorWrap"><strong>ERROR</strong>:<?php echo htmlentities($error); ?> </div><?php }
        else if($msg){?><div class="succWrap"><strong>SUCCESS</strong>:<?php echo htmlentities($msg); ?> </div><?php }?>

        <!-- 
        <div class="row">
            
                <div class="card">

                <h3  class="card-header" style="display: inline; background-color: #5860FF;"><img class="t" src="images/log.png" alt="" style=" background-color: white;" ><p style="color: white;">Portcity International University</p>
                </h3>
                

                        <p class="card-text" style="padding-left:2%">We have created this website for the purpose of a project of our university. Our course teacher asked everyone in our class to work on different projects. And divided into different teams to complete the project.</p>

                        <p class="card-text" style="padding-left:2%">That's why we choose this project, because "blood" is a very important thing. The need for blood in various emergency operations is very immense, so to meet the demand for blood online so that people can easily find blood, this website was created.</p>
                </div>  -->
 <br> <br>
  <!--  <div class="card">

                <h3  class="card-header" style="display: inline; background-color: #C541DF;"><img class="t" src="images/log.png" alt="" style=" background-color: white;" ><p style="color: white;"> Portcity International University</p>
                </h3>
                

                        <p class="card-text" style="padding-left:2%">We have created this website for the purpose of a project of our university. Our course teacher asked everyone in our class to work on different projects. And divided into different teams to complete the project.</p>

                        <p class="card-text" style="padding-left:2%">That's why we choose this project, because "blood" is a very important thing. The need for blood in various emergency operations is very immense, so to meet the demand for blood online so that people can easily find blood, this website was created.</p>
                </div>  -->
<div class="container-fluid size">
    
                <div class="container">
                <div class="row">
                <div class="col-md-5"><img src="images/log.png" alt="portcity" class="pc"></div>
                <div class="col-md-5">
                <h2 class="text-center">Portcity International University</h2>
                <hr class="pp">
                     <p>We have created this website for the purpose of a project of our university. Our course teacher asked everyone in our class to work on different projects. And divided into different teams to complete the project.</p>
                            <p>That's why we choose this project, because "blood" is a very important thing. The need for blood in various emergency operations is very immense, so to meet the demand for blood online so that people can easily find blood, this website was created.</p>
                          </div>
                     </div>
                </div>
           </div>


<br><br><br>


      


            <div class="container-fluid size">
    
                <div class="container">
                <div class="row">
                <div class="col-md-5"><img src="images/aaa.jpg" alt="akib" class="ak"></div>
                <div class="col-md-5">
                <h2 class="text-center">Anisur Rahman Akib</h2>
                <hr class="aa">
                       <p>
                I, <b>Anisur Rahman Akib,</b>am a graphic designer and Front-End Web designer living in Chittagong, Bangladesh. I am doing my undergradute program in Computer Science Engineering at Portcity international University.
                         </p>
                     <p>I am an energetic,ambitious person who has developed a mature responsible approach to any task that I undertake or situation that I am presented with. To work in a dynamic,intensive enviroment,where the creativity and interest can be found to develop the skills as soon as the career with a strong emphasis on sustained and development. </p>
                          <!--   <p>
                        I am also a good communicator with proven inter personal skills and am used to working in a team whilst also being capable of using own initiative. I am skilled in dealing with problems in a resourceful manner and negotiating to achieve beneficial agreement. I am always enthusiastic to learn and undertake new challenge
                       </p> -->
                          </div>
                     </div>
                </div>
           </div>
         </table>

   <br> <br>



             <div class="container-fluid size">
    
                <div class="container">
                <div class="row">
                <div class="col-md-5"><img src="images/palok.jpg" alt="palok" class="r"></div>
                <div class="col-md-6">
                <h2 class="text-center">Palok Das</h2>
                <hr class="rr">
                       <p>
                <b>Palok Das</b> holds knowledge of databse from the Port City Inernational University. Since 2018, he has worked as an obidient student,involves into the CSE in B.SC course of the university.
                         </p>
                     <p>
                As a CSE student, Palok worked at his level best to make this Blood Bank project happening.
                When not involving in such projects, PALOK enjoys Cracking, playing Football and practising Theatre. For up-to-date information of blood related occurances,keep looking at this website, email him at palokdas11@gmail.com.
                       </p>
                          </div>
                     </div>
                </div>
           </div>


       <!--

            </div>
            <br> <br>
            <div class="b" align="center;">
                <div class="bg">
                    <h4 class="card-header" style="padding-left:2%">Blood Tips</h4>
                </div>
            </div> -->

        <!--    <div class="col-lg-4 mb-4">
                <div class="card">
                    <h4 class="card-header">Who you could Help</h4>

                        <p class="card-text" style="padding-left:2%">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                </div>
            </div>
        </div>
        <!-- /.row -->

        <!-- Portfolio Section -->
       

       <!--<table>
          <tr>
        <td><img class="t" src="images/log.png" alt="" style=" background-color: white;" ></td>
        <td>text</td>
          </tr>
         </table>

            --
        </div>
        <!-- /.row -->

        <!-- Features Section -->
        <!--
        <div class="row">
            <div class="col-lg-5">
                <h2>BLOOD GROUPS</h2>
          <p>  blood group of any human being will mainly fall in any one of the following groups.</p>
                <ul>


              <li>A positive or A negative</li>
              <li>B positive or B negative</li>
              <li>O positive or O negative</li>
              <li>AB positive or AB negative.</li>
                </ul>
                <p>A healthy diet helps ensure a successful blood donation, and also makes you feel better! Check out the following recommended foods to eat prior to your donation.</p>
            </div>
            <div class="col-lg-6">
                <img class="img-fluid rounded" src="images/log.png" alt="">
            </div>
        </div>
    -->
        <!-- /.row -->
    



        <hr>

        <!-- Call to Action Section -->
           <center>
            <div class="col-md-4">
                 <a class="btn btn-lg btn-secondary btn-block bg-success" href="become-donar.php"><strong style="color: white;">Become A DONOR</strong></a> 

            </div>
            </center>
        </div>


      
    </div>
     <br>
    <!-- /.container -->

    <!-- Footer -->
  <?php include('includes/footer.php');?>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/tether/tether.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

</body>

</html>
