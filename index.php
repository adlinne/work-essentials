<?php include('connection.php') ?> <!-- CONNECTION TO THE DB -->

<!DOCTYPE html>
<html>
<head lang="en">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<link rel="stylesheet" type="text/css" href="css/style.css">
  	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
	<!-- <script src="JS/myscripts.js"></script> -->
  
	<title>&hearts;Work Essentials&hearts;</title>

  <style type="text/css"> 
.content {
  padding: 16px;
}

/* The sticky class is added to the navbar with JS when it reaches its scroll position */
.sticky {
  position: fixed;
  top: 0;
  width: 100%;
}

/* Add some top padding to the page content to prevent sudden quick movement (as the navigation bar gets a new position at the top of the page (position:fixed and top:0) */
.sticky + .content {
  padding-top: 60px;
}
</style>
 


</head>
<body>
	<section class="bg-black">
        
		<img src="img/flatlay.jpg" class="img-fluid" alt="Responsive image"> <!-- IMAGE AT THE TOP (FIRST FLATLAY IMAGE) -->
    
   <!-- <nav class="navbar navbar-default navbar-fixed-top"> -->
	</section>

	<nav class="navbar navbar-expand-sm bg-dark navbar-dark" id = "navbar">
  
  		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
   			 <span class="navbar-toggler-icon"></span>
  		</button>
  			<div class="collapse navbar-collapse" id="collapsibleNavbar">
    			<ul class="navbar-nav">
      				<li class="nav-item">
        				<a class="nav-link" href="#">Home</a>
      				</li>
      				<li class="nav-item">
        				<a class="nav-link" href="#about">About</a>
      				</li>
     	 			<li class="nav-item">
        				<a class="nav-link" href="#gallery">Gallery</a>
      				</li>
      				<li class="nav-item">
        				<a class="nav-link" href="login.php" target="_blank">Product</a>
      				</li> 
      				<li class="nav-item">
        				<a class="nav-link" href="#contact">Contact</a>
      				</li>     
    			</ul>
  			</div>  
		</nav>

	<div id=about>
		<p>	<img src="img/workdesk.jpg" alt="home"> </p>
	</div>

	<div id =para>

			<h2>Looking for stationery work-desk items everywhere, in different shops and places?</h2> 
     <!--  </br>
  </br>  -->
			<p>Well, the Work Essentials is where you should be looking at. </br>
			At Work Essentials we believe in providing the best of products with variety of range in price, colours, items etc. so the you get to decide the best suitable items for you!
		</br> </br>

			Its a user friendly platform where you can place your orders, so that we deliver them to you at your doorstep.We, at Work Essentials believe in giving you the best user experience. 
		 </br> </br>

		 	Its a user friendly platform where you can place your orders, so that we deliver them to you at your doorstep.We, at Work Essentials believe in giving you the best user experience. 
		 </br> </br>

			We also have a special section of creative items like notepads and stickers. Do visit the "special" in the product section!!

		<!-- </br> </br>
    </br> </br>
    </br> </br> -->
			Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. 

			 Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem.
		</p>

	</div>	
	<div id=gallery>
		<h2 align="center">Glance of our products!</h2>
		<!-- <div class="container"> -->
  		<div class="row">
  			<div class="column">
    			<img src="img/stationery.jpg" alt="stationery" class="gal-image" style="width:100%">
    			<!-- <div class="middle">
    				<div class="text">John Doe</div>
  				</div> -->
  			</div>
  			<div class="column">
      			<img src="img/files.jpg" alt="files" class="gal-image" style="width:100%">
      			<!-- <div class="middle">
    				<div class="text">John Doe</div>
  				</div> -->
    		</div>
      		<div class="column">
    			<img src="img/notepad.jpg" alt="notepad" class="gal-image" style="width:98%">
    			<!-- <div class="middle">
    				<div class="text">John Doe</div>
  				</div> -->
  			</div>
		</div>

		<div class="row">
  			<div class="column">
    			<img src="img/1.jpg" alt="stationery" class="gal-image" style="width:100%">
    			<!-- <div class="middle">
    				<div class="text">John Doe</div>
  				</div> -->
  			</div>
  			<div class="column">
      			<img src="img/2.jpg" alt="files" class="gal-image" style="width:100%">
      			<!-- <div class="middle">
    				<div class="text">John Doe</div>
  				</div> -->
    		</div>
      		<div class="column">
    			<img src="img/3.jpg" alt="notepad" class="gal-image" style="width:98%">
    			<!-- <div class="middle">
    				<div class="text">John Doe</div>
  				</div> -->
  			</div>
		</div>
	</div>

	<div id="contact">
		<h2 align="center">You Can Contact us At!</h2>



	 	<p align="center"> Interacting with our customers is our greatest joy! Please feel free to pay a visit to our branches in various places located at: <br><br></p>
	 	<p style="margin-left: 215px;"> Work-Essentials Pvt. Ltd.<br>
            						32/3, Crescent Road, High Grounds<br>
            						Off Race Course Road<br>
             						Bangalore - 560 001 <br><br>
     	</p>
     	<p style="margin-left: 215px;"> Work Essentials <br>
            						3-61 "Diamond" <br>
            						Red Building Lane <br>
            						Kankanady Post<br>
            						Mangalore - 575 002 </p>
     	</p>



     	<p align="center">Thank you for your interest in Work Essentials. </br>For more information, feel free to get in touch with me at,<br>	</p>
	 	<p align="center"><a href="mailto:adlinedsouza59@gmail.com">Adline Dsouza</a> & <a href="mailto:alfridam@gmail.com">Alfrida Ferrao</a> </p>
</div>
</div>
  <!-- Footer -->
	<footer class="page-footer font-small cyan darken-3">

    <!-- Footer Elements -->
    	<div class="container">

      <!-- Grid row-->
      	<div class="row">

        <!-- Grid column -->
        	<div class="col-md-12 py-5" style="margin-left: 357px;">
          	<div class="mb-5 flex-center">

            <!-- Facebook -->
            <a class="fb-ic">
              <i class="fa fa-facebook fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
            </a>
            <!-- Twitter -->
            <a class="tw-ic">
              <i class="fa fa-twitter fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
            </a>
            <!-- Google +-->
            <a class="gplus-ic">
              <i class="fa fa-google-plus fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
            </a>
            <!--Linkedin -->
            <a class="li-ic">
              <i class="fa fa-linkedin fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
            </a>
            <!--Instagram-->
            <a class="ins-ic">
              <i class="fa fa-instagram fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
            </a>
            <!--Pinterest-->
            <a class="pin-ic">
              <i class="fa fa-pinterest fa-lg white-text fa-2x"> </i>
            </a>
          </div>
        </div>
        <!-- Grid column -->

      </div>
      <!-- Grid row-->

    </div>
    <!-- Footer Elements -->

    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">© 2018 Copyright:
      <a href="index.php"> WorkEssentials</a>
    </div>
    <!-- Copyright -->

  </footer>
  <!-- Footer -->

 <script>
window.onscroll = function() {myFunction()};

var navbar = document.getElementById("navbar");
var sticky = navbar.offsetTop;

function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}
</script>
</body>
</html>
