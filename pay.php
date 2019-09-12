<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Payment</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="icon" href="img/favicon.png">
		
        <!-- fonts -->
		<link href='http://fonts.googleapis.com/css?family=Playfair+Display:400,700,900' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Karla:700,400' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Lora:400,700' rel='stylesheet' type='text/css'>

        
		<link rel="stylesheet" href="css/font-awesome.css" />
        <link rel="stylesheet" href="css/bootstrap.min.css" />
		<link rel="stylesheet" href="css/animate.css" />
        <link rel="stylesheet" href="css/lightslider.css">
        <link rel="stylesheet" href="css/reset.css">
        <link rel="stylesheet" href="style.css" />
        <link rel="stylesheet" href="css/responsive.css" />
		
		</head>
	  <body>
	  
	  <!-- -------------------------------main content----------------- -->
	  
  <!-- <header>
  	<div class="container wrapper">
	  <div class="row">
	     <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		  <div class="page-header">
			  <a href="index.html"><img alt="studiocowork" src="img/logoblack.png"> </a>
		  </div>
		</div>  
	 </div>	
	</div>	
  </header> -->
  <header class="header_area">

            <!-- start main header -->
            <div class="main_header_area pay-header-area">
                <div class="container">
                    <!-- start mainmenu & logo -->
                    <div class="mainmenu">
                        <div id="nav">
                            <nav class="navbar navbar-default">
                                <!-- Brand and toggle get grouped for better mobile display -->
                                <div class="navbar-header">
                                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                  </button>
                                  <div class="site_logo fix">
                                      <a id="brand" class="clearfix navbar-brand border-right-whitesmoke" href="index.html"><img src="img/studiocoworklogo3.png" alt="Trips"></a>
                                      <div class="header_login floatleft">
                                       <!---    <ul>
                                             <li><a href="#">Login</a></li>
                                              <li><a href="booking.html">Register</a></li>
                                          </ul> --->
                                      </div>
                                  </div>
                                </div>
                                
                                

                                <!-- Collect the nav links, forms, and other content for toggling -->
                                <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
                                  <ul class="nav navbar-nav">
                                   <!-- <li role="presentation" class="dropdown">
                                        <a id="drop-one" href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" role="button" aria-expanded="false">
                                          Home
                                        </a>
                                        <ul id="menu1" class="dropdown-menu" role="menu">
                                          <li role="presentation"><a role="menuitem" tabindex="-1" href="index-two.html">Home Page two</a></li>
                                        </ul>
                                    </li>        
                                     <li><a href="accomodation.html">Accomodation</a></li>
                                    <li><a href="gallery.html">Gallery</a></li> 
                                    <li role="presentation" class="dropdown">
                                        <a id="drop2" href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" role="button" aria-expanded="false">
                                          Features
                                        </a>
                                        <ul id="menu2" class="dropdown-menu" role="menu">
                                          <li role="presentation"><a role="menuitem" tabindex="-1" href="about-us.html">About US</a></li>
                                          <li role="presentation"><a role="menuitem" tabindex="-1" href="booking.html">Booking</a></li>
                                          <li role="presentation"><a role="menuitem" tabindex="-1" href="room-details.html">Room Details</a></li>
                                          <li role="presentation"><a role="menuitem" tabindex="-1" href="staff.html">Our Staff</a></li>
                                          <li role="presentation"><a role="menuitem" tabindex="-1" href="404.html">404 Page</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="blog.html">News</a></li>
                                    <li><a href="contact-us.html">Contacts</a></li> -->
                                    
                                   
			                       
			                            
			                                <li class="fb"><a href="https://www.facebook.com/studiocowork1/" target="_blank"><i class="fa fa-facebook"></i></a></li>
			                                <li class="ins"><a href="https://www.instagram.com/studio_cowork/?hl=en" target="_blank"><i class="fa fa-instagram"></i></a></li>
			                                <li class="gp"><a href="#" target="_blank"><i class="fa fa-google-plus"></i></a></li>
			                                <li class="link"><a href="https://www.linkedin.com/feed/" target="_blank"><i class="fa fa-linkedin"></i></a></li>
			                           
                                  </ul>
                                 <!-- <a href="enquiry.php" class="paynow-btn pay-btn"><button type="button" class="btn btn-outline-success"> Book Now</button></a> -->
                                  
                                  <div class="emergency_number">
                                      <a href="tel:+91-9830144508"><img src="img/call-icon.png" alt="">+91-9830144508</a>
                                  </div>
                                </div><!-- /.navbar-collapse -->
                            </nav>
                        </div>
                    </div>
                    <!-- end mainmenu and logo -->
                </div>
            </div>
            <!-- end main header -->

        </header>
	  
	  
	  <div class="container wrapper">
    	<div class="row">
    		<form id="customerData" method="post" name="customerData" action="ccavRequestHandler.php" class="form-horizontal">
    			<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12  col-md-offset-3 col-sm-offset-3 pay-amt-mr-top">
    				<!--SHIPPING METHOD-->
                    <div class="panel panel-success form-pay-rs">
                        <div class="panel-heading">Enquiry Form</div>
                        <div class="panel-body">
                     
                     
                       <div class="col-md-12 col-xs-12 amt">
                         <div class="paymt">   
                          <div class="form-group form-inline">
                              <label for="inputEmail3" class="col-sm-4 control-label">Enter Amount</label>
							   <div class="col-sm-8">
							      <input type="text" class="form-control" id="amount" name="amount" placeholder="Enter Amount" value="<?php echo @$_POST['amount']; ?>" required>
							      <input type="hidden" name="tid" id="tid" readonly />
									<input type="hidden" name="merchant_id" value="185054"/>
									<input type="hidden" name="order_id" value="<?php echo time(); ?>"/>
									
									<input type="hidden" name="currency" value="INR"/>
									<input type="hidden" name="redirect_url" value="http://www.studiocowork.in/ccavResponseHandler.php"/>
									<input type="hidden" name="cancel_url" value="http://www.studiocowork.in/ccavResponseHandler.php"/><input type="hidden" name="language" value="EN"/>
							    
							    </div>
							 </div>
						   </div> 
						  </div>
						    
						   <div class="clearfix"></div>
						  
						 <div class="alldetail hidden">    
                            <div class="form-group">
                                <div class="col-md-6 col-xs-12">
                                    <strong>First Name:</strong>
                                    <input type="text" id="orderBillName" name="billing_name" class="form-control" value="<?php echo @$_POST['billing_name'].' '.@$_POST['billing_surname'] ;?>" required>
                                </div>
                                <div class="span1"></div>
                                <div class="col-md-6 col-xs-12">
                                    <strong>Last Name:</strong>
                                    <input type="text" id="orderBillName" name="billing_surname" class="form-control" value="<?php echo @$_POST['billing_surname'];?>" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-6 col-xs-12"><strong>Phone Number:</strong>
                                <input type="text" id="orderBillTel" name="billing_tel" class="form-control" value="<?php echo @$_POST['billing_tel'];?>" required>
                                </div>
                                <div class="col-md-6 col-xs-12"><strong>Email Address:</strong>
                                <input type="email" id="orderBillEmail" name="billing_email" class="form-control" value="<?php echo @$_POST['billing_email'];?>" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12"><strong>Address:</strong></div>
                                <div class="col-md-12">
                                    <input type="text" id="orderBillAddress" name="billing_address" class="form-control" value="<?php echo @$_POST['billing_address'];?>" required>
                                </div>
                            </div>
                            <div class="form-group">
                            	<div class="col-md-6 col-xs-12">
                                	<strong>City:</strong>
                                    <input type="text" id="orderBillCity" name="billing_city" class="form-control" value="<?php echo @$_POST['billing_city'];?>" required>
                                </div>
                                <div class="col-md-6 col-xs-12">
                                	<strong>State:</strong>
                                    <input type="text" id="orderBillState" name="billing_state" class="form-control" value="<?php echo @$_POST['billing_state'];?>" required>
                                </div>
                                
                            </div>
                            <div class="form-group">
                                <div class="col-md-6 col-xs-12">
                                	<strong>Zip / Postal Code:</strong>
                                    <input type="text" id="orderBillZip" name="billing_zip" class="form-control" value="<?php echo @$_POST['billing_zip'];?>" required>
                                </div>
                                
                                <div class="col-md-6 col-xs-12">
                                   <strong>Country:</strong>
                                     <input type="text" id="orderBillCountry" name="billing_country" class="form-control" value="<?php echo @ucwords($_POST['billing_cust_country']);?>" required>  
                                   </div>
                                 
                                </div>
                             </div>
                        
                        <div class="form-group">
                                <div class="col-md-6 col-sm-6 col-xs-12 pay-sub-btn">
                                    <button type="submit" class="btn btn-success btn-submit-fix">Submit</button>
                                </div>
                            </div>
                    </div>
                   </div> 
                    <!--SHIPPING METHOD END-->
                    
    			</div>
    		</form>
    	</div>
    </div>
    
    
    <!-- footer first -->
    
   
        
        <!-- main footer -->
	  <footer class="footer_area ft-pay">
            <div class="container">
                <div class="footer">
                    <!--  <div class="footer_top padding-top-80 clearfix">
                        <div class="col-lg-4 col-md-4 col-sm-4">
                            <div class="footer_widget">
                              <div class="footer_logo">
                                    <a href="#"><img src="img/footer-logo-one.png" alt=""></a>
                                </div>
                                <p>Lorem ipsum dolor sit amet, conser adipiscing elit. In consectetur tincidunt dolor.</p>
                            </div>
                         </div>
                        <div class="col-lg-4 col-md-4 col-sm-4">
                            <div class="row">
                                <div class="footer_widget clearfix">
                                    <h5 class="padding-left-15">Quick Links</h5>
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <ul>
                                            <li><a href="#">Rooms</a></li>
                                            <li><a href="#">Food & Drinks</a></li>
                                            <li><a href="#">Beach Venues</a></li>
                                            <li><a href="#">Amenities</a></li>
                                        </ul>  
                                    </div>
                                    <div class="col-lg-6 col-md-6 sol-sm-6">
                                        <ul>
                                            <li><a href="#">Noordwijk</a></li>
                                            <li><a href="#">Wellness</a></li>
                                            <li><a href="#">Manifesto</a></li>
                                            <li><a href="#">Contact</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4">
                            <div class="footer_widget">
                                <h5>We Are Global</h5>
                                <div class="footer_map">
                                    <a href="#"><img src="img/footer-map-two.jpg" alt=""></a>
                                </div>
                            </div>
                        </div>
                    </div> -->
                    <div class="row">
                        <div class="container">
                          <div class="footer2">
                             <p> <i class="fa fa-map-marker"></i> <strong>Address : </strong> 230 A, A.J.C  Bose Road 65, 66
 								Chitrakoot Building, 6th Floor, Kolkata-700020, Opp. Minto Park. |  <a href="https://www.google.com/maps/place/Studio+CoWork/@22.4008716,88.3663416,17z/data=!4m12!1m6!3m5!1s0x0:0x89b30dfb26ecd5a6!2sStudio+CoWork!8m2!3d22.4008716!4d88.3685303!3m4!1s0x0:0x89b30dfb26ecd5a6!8m2!3d22.4008716!4d88.3685303" target="_blank" class="footer-map">Map Location <i class="fa fa-location-arrow"></i></a> </p>
 								
                          </div>
                          
                        
                            <div class="footer_copyright margin-tb-50 content-center">
                                <p>&copy 2018 <a href="#">Studio CoWork</a>. All rights reserved</p> Powered by <a href="https://www.itarsia.com" target="_blank">Itarsia India </a>
                            </div>
                            
                           
                            
                        </div>
                    </div>
                </div>
            </div>
        </footer>
	  
	  
	  <!-- -------------------.js------------------------------------- -->
	   <script src="js/vendor/jquery-1.11.2.min.js"></script>
        <!-- bootstrap -->
        <script src="js/bootstrap.min.js"></script>
         <script src="js/json.js"></script>
         
         <script>
	    window.onload = function() {
		var d = new Date().getTime();
		document.getElementById("tid").value = d;
	};
    </script>
    
    
    
	  </body>
	 </html> 	
		