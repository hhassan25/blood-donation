<!DOCTYPE html>
<html>
<head>

     <title>Health Center</title>

     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="author" content="Tooplate">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

     <link rel="stylesheet" href="./css/bootstrap.min.css">
     <link rel="stylesheet" href="./css/font-awesome.min.css">
     <link rel="stylesheet" href="./css/animate.css">
     <link rel="stylesheet" href="./css/owl.carousel.css">
     <link rel="stylesheet" href="./css/owl.theme.default.min.css">

     <link rel="stylesheet" href="./css/tooplate-style.css">



<style>



#myBtn{
position:absolute;
}

#google-map{margin:60px;}
</style>


</head>
<body id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">

     <section class="preloader">
          <div class="spinner">

               <span class="spinner-rotate"></span>
               
          </div>
     </section>


     <!-- HEADER -->
     <header>
          <div class="container">
               <div class="row">

                    <div class="col-md-4 col-sm-5">
                         <p>Welcome to a Professional Health Care</p>
                    </div>
                         
                    <div class="col-md-8 col-sm-7 text-align-right">
                         <span class="phone-icon"><i class="fa fa-phone" ></i><a href="tel:+96176577084"> 76577084</a></span>
                         <span class="date-icon"><i class="fa fa-calendar-plus-o"></i> 6:00 AM - 10:00 PM (Mon-Fri)</span>
                         <span class="email-icon"><i class="fa fa-envelope-o"></i> <a href="mailto:maa014@muc.edu.lb">info@healthmedical.com</a></span>
                    </div>

               </div>
          </div>
     </header>


     <!-- MENU -->
     
 
     <!-- MAKE AN APPOINTMENT -->

     
    <form action="passdata.php">
    <br>
        <div class="col-md-12 col-sm-12">
            <label for="email">Welcome</label>
            <?php
                session_start();
                echo $_SESSION['email'];
                if(!$_SESSION['auth']){
                    header('location:index.php');
                }
                
            ?>
        </div>

    </form>

     <section id="appointment" data-stellar-background-ratio="3">
          <div class="container">
               <div class="row">

                    <div class="col-md-6 col-sm-6">
                         <img src="images/appointment-image.jpg" class="img-responsive" alt="">
                    </div>

                    <div class="col-md-6 col-sm-6">

                         <form id="appointment-form" role="form" method="post" action="php/sendcontact.php">

                              <div class="section-title wow fadeInUp" data-wow-delay="0.4s">
                                   <h2>Make an appointment</h2>
                              </div>
                              
                             

                              <div class="wow fadeInUp" data-wow-delay="0.8s">
                                   <div class="col-md-12 col-sm-12">
                                        <label for="name">Name</label>
                                        <input autocomplete="off" type="text" class="form-control" id="name" name="name" placeholder="Full Name" required>
                                   </div>

                                   <div class="col-md-12 col-sm-12">
                                        <label for="date">Select Date</label>
                                        <input autocomplete="off" type="date" id="text" name="date" value="" class="form-control" required>
                                   </div>
                            
                                  <div class="col-md-12 col-sm-12">
                                        <label for="phone">Phone Number</label>
                                        <input autocomplete="off" type="tel" class="form-control" id="phone" name="phone" placeholder="Phone" required>
                                        <label for="message">Message</label>
                                        <input autocomplete="off" type="text" class="form-control" rows="5" id="message" name="message" placeholder="Message" required>
                                        <button type="submit" class="form-control" id="cf-submit" name="submit">Submit</button>
                                   </div>
                              </div>
                        </form>
                    </div>

               </div>
          </div>
     </section>


               


     

     <!-- SCRIPTS -->
     <script src="./js/jquery.js"></script>
     <script src="./js/bootstrap.min.js"></script>
     <script src="./js/jquery.sticky.js"></script>
     <script src="./js/jquery.stellar.min.js"></script>
     <script src="./js/wow.min.js"></script>
     <script src="./js/smoothscroll.js"></script>
     <script src="./js/owl.carousel.min.js"></script>
     <script src="./js/custom.js"></script>

</body>
</html>