
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
                                <a href="#costumModal12" data-toggle="modal" class="paynow-btn pay-btn"><button type="button" class="btn btn-outline-success"> Book Space</button></a>
                                  
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
	  
	
	  <div class="container wrapper bok-space">
	  <div class="col-md-8 col-md-offset-2">  
    	<div class="row">
    		<div class="w3layouts_main_grid">
				
					<form id="regform" name="table_form" action="validation.php" method="post" class="w3_form_post" autocomplete="off">
					
					<div class="w3_agileits_main_grid w3l_main_grid">
							<span class="agileits_grid">
								<label>Email Address<span class="star">*</span></label>
								<input type="email" name="email" placeholder="Your Email Address" required="">
							</span>
						</div>
						<div class="w3_agileits_main_grid w3l_main_grid">
							<span class="agileits_grid">
								<label>Name <span class="star">*</span></label>
								<input type="text" name="name" placeholder="Name" required="">
							</span>
						</div>
						
						<div class="w3_agileits_main_grid w3l_main_grid">
							<span class="agileits_grid">
								<label>Company Name <span class="star">*</span></label>
								<input type="text" name="cname" placeholder="Company Name" required="">
							</span>
						</div>
						
						<div class="w3_agileits_main_grid w3l_main_grid sel-indu bok-spce">
							<span class="agileits_grid">
								<label>Industry <span class="star">*</span></label></span>
									<div class="form-input add">
										
											<select class="js-example-basic-single" name="industry" required="">
                                                  <option value="">------ Select Industry ------</option>
                                                  <option value="Advertising">Advertising</option>
                                                  <option value="Architecture">Architecture</option>
                                                  <option value="Blogging">Blogging</option>
                                                  <option value="Consulting">Consulting</option>
                                                  <option value="Design">Design</option>
                                                  <option value="Entrepreneurship">Entrepreneurship</option>
                                                  <option value="Fashion">Fashion</option>
                                                  <option value="Film/TV">Film/TV</option>
                                                  <option value="Graphic/Digital Design">Graphic/Digital Design</option>
                                                  <option value="Healthcare">Healthcare</option>
                                                  <option value="Hospitality">Hospitality</option>
                                                  <option value="Investment Banking">Investment Banking</option>
                                                  <option value="Journalism">Journalism</option>
                                                  <option value="Law">Law</option>
                                                  <option value="Marketing">Marketing</option>
                                                  <option value="NGO">NGO</option>
                                                  <option value="Photography">Photography</option>
                                                  <option value="Programming, Software Development, IT">Programming, Software Development, IT</option>
                                                  <option value="Public Relations">Public Relations</option>
                                                  <option value="Real Estate">Real Estate</option>
                                                  <option value="Space Rental">Space Rental</option>
                                                  <option value="Tourism">Tourism</option>
                                                  <option value="Other">other</option>
                                                  
                                                            
                                                </select> 
									 </div>
							   </div>
							   
							  <div class="clearfix"></div>
						
						<div class="w3_agileits_main_grid w3l_main_grid">
							<span class="agileits_grid">
								<label>Mobile No <span class="star">*</span></label>
								<input type="text" name="mno" placeholder="Mobile No " required="">
							</span>
						</div>
						
						<div class="w3_agileits_main_grid w3l_main_grid">
							<span class="agileits_grid">
								<label>Starting Date <span class="star">*</span></label>
								  
								  <input type="text" name="sdate" id="demoDatepicker" placeholder="Starting Date">
                                       
							</span>
						</div>
						<div class="w3_agileits_main_grid w3l_main_grid">
							<span class="agileits_grid">
								<label>Ending Date <span class="star">*</span></label>
								
								<input type="text" id="demoDatepicker2" name="edate" placeholder="Ending Date">
								
							</span>
						</div>
						
						<div class="w3_agileits_main_grid w3l_main_grid">
							<span class="agileits_grid">
								<label>From Time <span class="star">*</span></label>
								
								<input type="text"  name="timepicker-one" class="timepicker"/>
								
							</span>
						</div>
						
						<div class="w3_agileits_main_grid w3l_main_grid">
							<span class="agileits_grid">
								<label>To Time <span class="star">*</span></label>
								
								<input type="text"  name="timepicker-two" class="timepicker"/>
								
							</span>
						</div>
						
						
						
						<!-- <div class="agileits_w3layouts_main_grid w3ls_main_grid">
							<span class="agileinfo_grid">
								<label>Date / Time <span class="star">*</span></label>
								<div class="agileits_w3layouts_main_gridl">
									<input class="date" id="datepicker" name="Text" type="text" value="mm/dd/yyyy" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}" required="">
								</div>
								<div class="agileits_w3layouts_main_gridr">
									<input type="time" name="Time" required="">
								</div>
								<div class="clear"> </div>
							</span>
						</div> -->
					
					<div class="w3_main_grid">
						<div class="w3_main_grid_right">
							<input type="submit" value="Submit">
						</div>
					</div>
				</form>
			</div>
    	</div>
    </div>
   </div> 
    
    <!-- footer first -->
    
   
        
        <!-- main footer -->
	  <footer class="footer_area">
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
	<!-- _____________________________________________________________________________________ -->		
		
		
        <!-- jquery library -->
        <script src="js/vendor/jquery-1.11.2.min.js"></script>
        <!-- bootstrap -->
        <script src="js/bootstrap.min.js"></script>
		<!-- rev slider -->
        <script src="js/rev-slider/rs-plugin/jquery.themepunch.plugins.min.js"></script>
        <script src="js/rev-slider/rs-plugin/jquery.themepunch.revolution.js"></script>
        <script src="js/rev-slider/rs.home.js"></script>
        <!-- uikit -->
        <script src="js/uikit.min.js"></script>
        <!-- easing -->
		<script src="js/jquery.easing.1.3.min.js"></script>
        <script src="js/datepicker.js"></script>
        <!-- scroll up -->
        
        <script src="js/select2.js"></script>
        
        <script src="js/additional-methods.min.js"></script>
         <script src="js/jquery.validate.min.js"></script>
        
        <script type="text/javascript" src="js/bootstrap-datetimepicker.js"></script>
        
        <script src="js/jquery.scrollUp.min.js"></script>
        <!-- owlcarousel -->
        <script src="js/owl.carousel.min.js"></script>
        <!-- lightslider -->
        <script src="js/lightslider.js"></script>
        
         <script src="js/wickedpicker.js"></script>
         <script src="js/jquery.iconmenu.js"></script>
        
        <!-- model fade js -->
	<script type="text/javascript" src="js/velocity.min.js"></script>
	<script type="text/javascript" src="js/velocity.ui.min.js"></script>
        
        <!-- wow Animation -->
        <script src="js/wow.min.js"></script>
        <!--Activating WOW Animation only for modern browser-->
        <!--[if !IE]><!-->
        <script type="text/javascript">new WOW().init();</script>
        <!--<![endif]-->

      

        <!-- my js -->
        <script src="js/main.js"></script>
        
        <!-- model fade js -->
        <script type="text/javascript">
$(".modal").each(function(l){$(this).on("show.bs.modal",function(l){var o=$(this).attr("data-easein");"shake"==o?$(".modal-dialog").velocity("callout."+o):"pulse"==o?$(".modal-dialog").velocity("callout."+o):"tada"==o?$(".modal-dialog").velocity("callout."+o):"flash"==o?$(".modal-dialog").velocity("callout."+o):"bounce"==o?$(".modal-dialog").velocity("callout."+o):"swing"==o?$(".modal-dialog").velocity("callout."+o):$(".modal-dialog").velocity("transition."+o)
})
		});
</script>
       <script type="text/javascript">
$(function(){
	$('.carousel').carousel({
	    loop:true,
	    margin:10,
	    nav:true,
	    
	    responsive:{
	        0:{
	            items:1
	        },
	        600:{
	            items:3
	        },
	        1000:{
	            items:5
	        }
	    },
	   
	    autoplay:true,
	    autoplayTimeout:1000,
	    autoplayHoverPause:true
	});
	
	/* $( ".owl-prev").html('<img src="items/pre.png">');
	 $( ".owl-next").html('<img src="items/next.png">'); */
});


</script>
		
		<script>
		$(function() {  
		    $("#demoDatepicker").datepicker({
		        dateFormat: 'dd/mm/yy',
		        changeMonth: true,
		        changeYear: true,
		        constrainInput: false
		    });
		});
	</script>
	
	<script>
		$(function() {  
		    $("#demoDatepicker2").datepicker({
		        dateFormat: 'dd/mm/yy',
		        changeMonth: true,
		        changeYear: true,
		        constrainInput: false
		    });
		});
	</script>
	<script type="text/javascript">
	$(document).ready(function() {
	    $('.js-example-basic-single').select2();
	});
	</script>
	
	<!-- <script type="text/javascript">
  $(function() {
    $('#datetimepicker3').datetimepicker({
      pickDate: false
    });
  });
</script> -->

<script type="text/javascript">
$('.timepicker').wickedpicker();
</script>
		<script type="text/javascript">
			$(function() {
				$('#sti-menu').iconmenu();
			});
		</script>
	
<!-- ------------------------------form validation js---------------------- -->		
  <script type="text/javascript" > 

  $(function(){
    $('form#regform').validate({
    	 onsubmit : true
    });
    
    var msg = getParameterByName('msg');
    if(msg=='Enquiry sent successfully. Thankyou!'){
      $('.table_form').hide();
      $('.alert-success').removeClass('hidden');
    }
    else if(msg=='Message sending failed. Please contact admin.'){
        $('.table_form').hide();
        $('.alert-danger').removeClass('hidden');
    }
    else{
        $('.table_form').show();
    }

    $('form#regform').submit(function(e){
    	e.preventDefault();
        var $form = $(this);
     	// check if the input is valid
        if(! $form.valid()) return false;
    	$.ajax({
    			type: "POST",
	  		  url: $(this).attr('action'),
	  		  data: $(this).serialize(),
	  			dataType : "json",
	  		  success: function(data){
	  			if(data.success){
	  				$('form#regform')[0].reset();
	  				  $('#regform').hide();
		  		      $('.alert-success').empty().append(data.message).removeClass('hidden');
	  			}
	  			else if(data.error){
	  				$('#regform').hide();
	  		        $('.alert-danger').empty().append(data.message).removeClass('hidden');
	  			}
	  			else{
	  		        $('#regform').show();
	  		    }
	  		  }
    	});
    });
});



function getParameterByName(name, url) {
    if (!url) url = window.location.href;
    name = name.replace(/[\[\]]/g, "\\$&");
    var regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)"),
        results = regex.exec(url);
    if (!results) return null;
    if (!results[2]) return '';
    return decodeURIComponent(results[2].replace(/\+/g, " "));
}

</script>

<!-- ------------------------------../ form validation js---------------------- -->	
		
    </body>
</html>