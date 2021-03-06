﻿<?php
session_start();
?>

<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en">
<!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <title>Toast!t</title>
    <!--REQUIRED STYLE SHEETS-->
    <!-- BOOTSTRAP CORE STYLE CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLE CSS -->
    <link href="assets/css/font-awesome.min.css" rel="stylesheet" />
       <!-- CUSTOM STYLE CSS -->
    <link href="assets/css/style.css" rel="stylesheet" />
    <!-- GOOGLE FONT -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]--></head>
<body>
     <!-- NAV SECTION -->
         <div class="navbar navbar-inverse navbar-fixed-top">
       
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"><img src="assets/img/toaster-logo.png" width="30" height="30" alt=""/> Toast!t</a>
            </div>
            
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#home-sec">HOME</a></li>
                    <li><a href="#products">PRODUCT</a></li>
                     <li><a href="#about">ABOUT</a></li>
                    <li><a href="#contact">CONTACT</a></li>
                </ul>
            </div>
			<?php
				if(!empty($_SESSION['username'])) {
					echo 'Welcome ' . $_SESSION['username'] . '! <a id="logout">Log Out</a>';
				}
				else {
					echo '<h2 id="loginbar"><a id="loginform">Login</a> | <a id="registerform">Register</a></h2>';
				}
			?>
			
			<div class="login" id="loginPopup">
              <div class="arrow-up"></div>
              <div class="formholder">
                <div class="randompad">
                   <fieldset>
                     <label name="username">Username</label>
                     <input type="text" id="loginname"/>
                     <label name="password">Password</label>
                     <input type="password" id="loginpass"/>
                     <input type="submit" value="Login" id="login"/>

                   </fieldset>
                </div>
              </div>
            </div>
			
			<div class="login" id="registerPopup">
              <div class="arrow-up" style="margin-left: 50px;"></div>
              <div class="formholder">
                <div class="randompad">
                   <fieldset>
                     <label name="email">Username</label>
                     <input type="text" id="registername"/>
                     <label name="password">Password</label>
                     <input type="password" id="registerpass"/>
					 <label name="password">Confirm Password</label>
                     <input type="password" id="registerpassconfirm"/>
                     <input type="checkbox" id="registeragree"/>
					 <label name="password">I agree to the <a>terms and conditions</a></label>
                     <input type="submit" value="Sign Up" id="register"/>

                   </fieldset>
                </div>
              </div>
            </div>
            
        </div>
    </div>
     <!--END NAV SECTION -->
    
    <!--HOME SECTION-->
     
    <div id="home-sec">   
    <div class="container"  >
        <div class="row text-center">
            <div  class="col-md-12" >
         <div id="carousel-example" class="carousel slide" data-ride="carousel">

                    <div class="carousel-inner">
                        <div class="item active">

                            <img src="assets/img/1.jpg" width="720" height="450" alt="" />
                            <div class="carousel-caption" >
                                <h4 class="back-light">Stay connected</h4>
                            </div>
                        </div>
                        <div class="item">
                            <img src="assets/img/2.jpg" width="720" height="450" alt="" />
                            <div class="carousel-caption ">
                                <h4 class="back-light">Toast any time</h4>
                            </div>
                        </div>
                        <div class="item">
                            <img src="assets/img/3.jpg" width="720" height="450" alt="" />
                            <div class="carousel-caption ">
                                <h4 class="back-light">Coming soon</h4>
                            </div>
                        </div>
                    </div>

                    <ol class="carousel-indicators">
                        <li data-target="#carousel-example" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-example" data-slide-to="1"></li>
                        <li data-target="#carousel-example" data-slide-to="2"></li>
                    </ol>
                </div>
                 
            </div>
        </div>
    </div>
         </div>
    
    
    <section  >
        <div class="container">
            

         <div class="row text-center">
             <div class="col-md-4 col-sm-4  icon-big" >
                 <i class="fa fa-fax fa-4x"></i>
                  <h1>Awesome Service </h1>
                      <p>
                                We take great pride in delivering the best possible service
                                to our customers. Each product comes with a detailed
                                user manual outlining all of the products features.
                                Should you still need assistance, feel free to call the 
                                customer service hotline at 1-985-655-2500
                            </p>
             </div>
             <div class="col-md-4 col-sm-4  icon-big" >
                 <i class="fa fa-tree fa-4x"></i>
                 <h1>24x7 Support </h1>
                      <p>
                                Call us anytime, we have support representatives
                                on standby 24x7 ready to help out at a moments notice.
                                Our trained staff will ensure that your Toast!t 
                                device is working properly. Call here free: 1-985-655-2500
                            </p>
             </div>
             <div class="col-md-4 col-sm-4  icon-big" >
                 <i class="fa fa-lock fa-4x"></i>
                 <h1>Unique Design </h1>
                      <p>
                                Guaranteed unique products like you've never seen
                                before. Bringing the best of both kitchen appliances
                                and the internet together.
                            </p>
             </div>
         </div>
          

        </div>
    </section>

     <!--END HOME SECTION-->


    <div class="container">
        <div class="row text-center">
             <span class="line-sep ">
        ----------X------------X----------X-------------
    </span>
        </div>
    </div>
   
 <!--PRODUCTS SECTION-->

      <section  id="products">
           <div class="container">
<div class="row text-center">
                <div class="text-center">
                    <div class="col-md-4 col-sm-4 alert-info">
                            <h4>Our Products</h4>
                       <p>
                                Toast!t offers the best in internet connected kitchen devices.
                                Our products strive to help users become more connected with their
                                homes and to save precious time at home. No need to start cooking when 
                                you get back from work, start cooking before you even leave
                                by accessing your connected devices online.
                            </p>
                            
                        
                    </div>
                    <div class="col-md-4 col-sm-4 text-center">
                     <h4>Internet Toaster</h4>
                       <p>
                                The internet toaster is the centerpiece of Toast!t innovation.
                                
                            </p>  
                                &nbsp;&nbsp;  <img class="img-responsive" src="assets/img/1.jpg" alt="">
                    </div>
                </div>
                  </div>
               </div>
      </section>

    <!--END PRODUCTS SECTION-->
    <div class="container">
        <div class="row text-center">
             <span class="line-sep ">
        ----------X------------X----------X-------------
    </span>
        </div>
    </div>
    <!--ABOUT SECTION-->
    <section  id="about">
           <div class="container">
<div class="row text-center">
                <div class="text-center">
                   
                     <div class="col-md-4 col-sm-4 alert-success">
                            <h4>Who We Are ?</h4>
                       <p>
                               Toast!t is a small team from Toronto, Canada who strive to bring
                               the best quality products to their customers. We specialize in 
                               creating internet connected kitchen devices that really bring your
                               home to life. The team is dedicated to completing the companies vision
                               of connecting every home in the world to the internet, and are working
                               night and day to bring that vision to life. Here's a look at our leading 
                               team members.
                            </p>
                            
                            
                    </div>
                    <div class="col-md-4 col-sm-4 ">
                        <img class="img-circle" src="assets/img/kristen_santos.jpg" alt="">
                           <h3><strong>Kristen Santos</strong> </h3>
                       <p>
                                Lead System Software Engineer
                            </p>
                            
                    </div>
                   
                    <div class="col-md-4 col-sm-4 ">
                        <img class="img-circle" src="assets/img/leonard_rushin.jpg" alt="">
                           <h3><strong>Leonard Rushin</strong> </h3>
                           <p>
                                Lead Electrical Engineer
                            </p>
                          
                    </div>
                    
                    <div class="col-md-4 col-sm-4 ">
                        <img class="img-circle" src="assets/img/frank_harrison.jpg" alt="">
                           <h3><strong>Frank Harrison</strong> </h3>
                           <p>
                                Lead Traffic Technician
                            </p>
                          
                    </div>
                    
                    <div class="col-md-4 col-sm-4 ">
                        <img class="img-circle" src="assets/img/nora_brown.jpg" alt="">
                           <h3><strong>Nora Brown</strong> </h3>
                           <p>
                                Lead Gaming Investigator
                            </p>
                          
                    </div>
                </div>
                  </div>
               </div>
      </section>
    <!--END ABOUT SECTION-->
    <div class="container">
        <div class="row text-center">
             <span class="line-sep ">
        ----------X------------X----------X-------------
    </span>
        </div>
    </div>
    <!--CONTACT SECTION-->
    <section  id="contact">
           <div class="container">
<div class="row text-center">
                <div class="text-center">
                    <div class="col-md-6 col-sm-6">
                   <iframe class="cnt" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d184551.8085836535!2d-79.51814092538646!3d43.71840381090889!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89d4cb90d7c63ba5%3A0x323555502ab4c477!2sToronto%2C+ON%2C+Canada!5e0!3m2!1sen!2sus!4v1480122131348" s=""></iframe>

                </div>
                   <div class="col-md-6 col-sm-6 alert-danger">
                            <h4>OUR LOCATION</h4>
                 
                    <p>
                         <strong> Address: </strong> &nbsp;Toronto, Canada 
                        <br>
                        Send us feedback through this form
                                      
                    </p>
                        <div class="row">
                            <div class="col-md-6 ">
                                <div class="form-group">
                                    <input type="text" class="form-control" required="required" placeholder="Name">
                                </div>
                            </div>
                            <div class="col-md-6 ">
                                <div class="form-group">
                                    <input type="text" class="form-control" required="required" placeholder="Email address">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 ">
                                <div class="form-group">
                                    <textarea name="message" id="message" required="required" class="form-control" rows="3" placeholder="Message"></textarea>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-danger">Submit Request</button>
                                </div>
                            </div>
                        </div>
                            
                            
                    </div>
                    
                     
                </div>
                  </div>
               </div>
      </section>
    <!--END CONTACT SECTION-->
  
    <!--FOOTER SECTION -->
    <div id="footer">
        2016 www.team1.toast.it | All Right Reserved  
         
    </div>
    <!-- END FOOTER SECTION -->

    <!-- JAVASCRIPT FILES PLACED AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
    <!-- CORE JQUERY  -->
    <script src="assets/plugins/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP CORE SCRIPT   -->
    <script src="assets/plugins/bootstrap.min.js"></script>  
    <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    </body>
</html>
