<?php 
session_start();
?>
<!DOCTYPE html>
<html>

<head>

     <title>Donate Now</title>

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

</head>
<style>
     #btn {
          margin: 10px;
     }

     #snackbar {
          visibility: hidden;
          min-width: 250px;
          margin-left: -125px;
          background-color: #333;
          color: #fff;
          text-align: center;
          border-radius: 2px;
          padding: 16px;
          position: fixed;
          z-index: 1;
          left: 50%;
          bottom: 30px;
          font-size: 17px;
     }

     #snackbar.show {
          visibility: visible;
          -webkit-animation: fadein 0.5s, fadeout 0.5s 2.5s;
          animation: fadein 0.5s, fadeout 0.5s 2.5s;
     }

     @-webkit-keyframes fadein {
          from {
               bottom: 0;
               opacity: 0;
          }

          to {
               bottom: 30px;
               opacity: 1;
          }
     }

     @keyframes fadein {
          from {
               bottom: 0;
               opacity: 0;
          }

          to {
               bottom: 30px;
               opacity: 1;
          }
     }

     @-webkit-keyframes fadeout {
          from {
               bottom: 30px;
               opacity: 1;
          }

          to {
               bottom: 0;
               opacity: 0;
          }
     }

     @keyframes fadeout {
          from {
               bottom: 30px;
               opacity: 1;
          }

          to {
               bottom: 0;
               opacity: 0;
          }
     }
</style>

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

                    <div class="col-md-4 col-sm-3">
                         <p>Welcome to a Professional Health Care</p>
                    </div>

                    <div class="col-md-8 col-sm-9 text-align-right">
                         <span class="phone-icon"><i class="fa fa-phone"></i> 76 577 084</span>
                         <span class="date-icon"><i class="fa fa-calendar-plus-o"></i> 6:00 AM - 10:00 PM
                              (Mon-Fri)</span>

                    </div>

               </div>
          </div>
     </header>


     <!-- MENU -->
     

     <section id="news-detail" data-stellar-background-ratio="0.5">
          <div class="container">
               <div class="row">

                    <div class="col-md-8 col-sm-7">

                         <div class="news-detail-thumb">
                              <div class="news-image">
                                   <img src="./images/news-image3.jpg" class="img-responsive" alt="">
                              </div>
                              <link rel="stylesheet" href="./css/bootstrap.min.css">
                              <link rel="stylesheet" href="./css/font-awesome.min.css">
                              <link rel="stylesheet" href="./css/animate.css">
                              <link rel="stylesheet" href="./css/owl.carousel.css">
                              <link rel="stylesheet" href="./css/owl.theme.default.min.css">

                              <link rel="stylesheet" href="./css/tooplate-style.css">
                              <section class="content">
                                   <div class="row">
<div id="calendar" class="col-md-12 col-sm-12">
<div class="box box-primary">
<div class="box-body no-padding">

<form method="post" action="php/register.php">

     <div class="container-fluid">

          <div class="row clearfix">
               <div>
                    <center><label>Enter Below the required
                         Fields to sign up</label></center>
                    <div class="col-md-12 col-sm-12">
                         <div class="col-md-12 col-sm-12">
                              <input autocomplete="off"
                                   type='text' name="fullname"
                                   class="form-control"
                                   placeholder="Full name"
                                   required>
                              <br />
                             
                              <input autocomplete="off"
                                   type='text' name="email"
                                   class="form-control"
                                   placeholder="Email"
                                   required>
                              <br />
                              <input autocomplete="off"
                                   type='password' name="password"
                                   class="form-control"
                                   placeholder="Password"
                                   required>
                              <br />
                              
                         </div>
                    </div>
               </div>
          </div>
          <div class="col-md-12 col-sm-12">
          <span class="error" aria-live="polite"></span>
               <input autocomplete="off" type="submit"
                    onclick="myFunction()" id="btn" name="submit"
                    class="btn btn-danger" value="Register">
               <script>
                    
                    function myFunction() {
                         var x = document.getElementById("snackbar");
                         x.className = "show";
                         setTimeout(function () { x.className = x.className.replace("show", ""); }, 6000);
                    }
               </script>
          </div>
     </div>
     <?php  if(isset($_SESSION['status_donators'])){ echo '<h5 style="color: red">'.$_SESSION['status_donators'].'</h5>'; unset($_SESSION['status_donators']);}?> 
</form>



<!-- FOOTER -->
<footer data-stellar-background-ratio="5">
     <div class="container">
          <div class="row">

               <div class="col-md-4 col-sm-4">
                    <div class="footer-thumb">
                         <h4 class="wow fadeInUp"
                              data-wow-delay="0.4s">Contact Info
                         </h4>
                         <p>Fusce at libero iaculis, venenatis
                              augue quis, pharetra lorem.
                              Curabitur ut dolor eu elit
                              consequat ultricies.</p>

                         <div class="contact-info">
                              <p><i class="fa fa-phone"></i>76
                                   577 084</p>

                         </div>
                    </div>
               </div>

               <div class="col-md-4 col-sm-4">
                    <div class="footer-thumb">
                         <h4 class="wow fadeInUp"
                              data-wow-delay="0.4s">Latest News
                         </h4>
                         <div class="latest-stories">
                              <div class="stories-image">
                                   <a href="#"><img
                                             src="./images/news-image.jpg"
                                             class="img-responsive"
                                             alt=""></a>
                              </div>
                              <div class="stories-info">
                                   <a href="#">
                                        <h5>Amazing Technology
                                        </h5>
                                   </a>
                                   <span>March 08, 2018</span>
                              </div>
                         </div>

                         <div class="latest-stories">
                              <div class="stories-image">
                                   <a href="#"><img
                                             src="./images/news-image.jpg"
                                             class="img-responsive"
                                             alt=""></a>
                              </div>
                              <div class="stories-info">
                                   <a href="#">
                                        <h5>New Healing Process
                                        </h5>
                                   </a>
                                   <span>February 20, 2018</span>
                              </div>
                         </div>
                    </div>
               </div>

               <div class="col-md-4 col-sm-4">
                    <div class="footer-thumb">
                         <div class="opening-hours">
                              <h4 class="wow fadeInUp"
                                   data-wow-delay="0.4s">Opening
                                   Hours</h4>
                              <p>Monday - Friday <span>06:00 AM -
                                        10:00 PM</span></p>
                              <p>Saturday <span>09:00 AM - 08:00
                                        PM</span></p>
                              <p>Sunday <span>Closed</span></p>
                         </div>

                         <ul class="social-icon">
                              <li><a href="#"
                                        class="fa fa-facebook-square"
                                        attr="facebook icon"></a>
                              </li>
                              <li><a href="#"
                                        class="fa fa-twitter"></a>
                              </li>
                              <li><a href="#"
                                        class="fa fa-instagram"></a>
                              </li>
                         </ul>
                    </div>
               </div>

               <div class="col-md-12 col-sm-12 border-top">
                    <div class="col-md-4 col-sm-6">
                         <div class="copyright-text">
                              <p>Copyright &copy; 2022 Your
                                   Company

                                   | Design: Tooplate</p>
                         </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                         <div class="footer-link">
                              <a href="#">Laboratory Tests</a>

                         </div>
                    </div>
                    <div
                         class="col-md-2 col-sm-2 text-align-center">
                         <div class="angle-up-btn">
                              <a href="#top"
                                   class="smoothScroll wow fadeInUp"
                                   data-wow-delay="1.2s"><i
                                        class="fa fa-angle-up"></i></a>
                         </div>
                    </div>
               </div>

          </div>
     </div>
</footer>


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