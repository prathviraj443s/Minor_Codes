<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Online &mdash; Sports Club mangement System</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Website Template by freehtml5.co" />
	<meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
	<meta name="author" content="freehtml5.co" />

	

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<link href="https://fonts.googleapis.com/css?family=Work+Sans:300,400,500,700,800" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">

	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->
     
     <style type="text/css">
     	
   .animate{
   	animation: animate 14s ease-in-out infinite;
   }
   @keyframes animate{
        0%,100%{
            background-image:url(images1/bg1.png);
        }
       25%{
   	       background-image:url(images1/bg2.jpg);
        }
      50%{
      	 background-image:url(images1/bg3.jpg);
       }
       75%{
       	background-image:url(images1/bg4.jpg);
       }

              }

       #font{

  	
    animation:fontText 1.5s infinite;
}

@keyframes fontText{
    0%,100%%{   color: red;    }
    25%{    color: transparent; }
    50%{    color: green; }
    75%{    color:red;  }
   
}       
     </style>


	</head>
	<body>
		
	
	
	<div id="page">
	<nav class="fh5co-nav" role="navigation">
		
		
	<?php include('./commonpages/loginheader.php');?>
	</nav>


	<!-- <header id="fh5co-header" class="fh5co-cover animate" role="banner" style="" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center">
					<div class="display-t">
						<div class="display-tc animate-box" data-animate-effect="fadeIn">
							<h1>WELCOME Sports Club mangement System</h1>
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</header> -->
	


	<div id="fh5co-services" class="fh5co-bg-section" style="height: 40px; padding: 4em;">
		<H1 align="center"><font color="black"><span id="font"><u>TEAM DETAILS</u></span></font></H1>
		
		</div>
     
      <div id="fh5co-blog" class="fh5co-bg-section" style="padding: 4em;">
		<div class="container">
			
			<div class="row row-bottom-padded-md">
 <?php
           $id=$_SESSION['id'];
            include('./PHP/connection_db.php');
              $sql="SELECT team_id, team_name, team_captian, total_player, participate_player, extra_player FROM team_detail WHERE user_id='$id'";
               $query=mysqli_query($con,$sql);
              while($row=mysqli_fetch_array($query)){
              	
             ?>
                 
				<div class="col-lg-11 col-md-12">
					<div class="fh5co-blog animate-box">
						  
						<h1></h1>
						<h1></h1>
						<div class="blog-text" style="margin-top:-2em;">
							
							<h1 align="center"><a href=""><?=$row['team_name']?></a></h1>
				
							<span class="posted_on">Welcome To Sports Club</span>
							<hr>
							<center>
							<table width="90%" style="margin-left: -25px;">
						
					<tr>
                        <td><h4 align="left">Team Captian</h4></td>
                        <td><h4 align="left">Total Players</h4></td>
                        <td><h4 align="left">Participate Players</h4></td>
                        <td><h4 align="left">Extra Players</h4></td>
                        
                    </tr>
                    <tr>
                       <td><span><?=$row['team_captian']?></span></td>
                       <td><span><?=$row['total_player']?></span></td>
                       <td><span><?=$row['participate_player']?></span></td>
                       <td><span><?=$row['extra_player']?></span></td>
                    </tr>
                    
					</table>
				</center>
							<hr>
					
						</div> 
						
					</div>
				</div>
				
				<?php
                    }
			      ?>

			</div>
		</div>
	</div>

	</div>
	
	<!-- <div id="fh5co-started" class="fh5co-bg" style="background-image: url(images1/img-03_002.jpg);">
		<div class="overlay"></div>
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center">
					<h2>Sports Classes this Summer<br><span>Play Now </span></h2>
				</div>
			</div>
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center">
					
				</div>
			</div>
		</div>
	</div> -->

	<!-- <div id="fh5co-blog" class="fh5co-bg-section">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box">
					<h2>Turnament <span><h3>Schedule</h3></span></h2>
				</div>
			</div>
			<div class="row row-bottom-padded-md">
				<div class="col-lg-4 col-md-4">
					<div class="fh5co-blog animate-box">
						<a href="#"><img class="img-responsive" height="100%" src="images1/img-03_003.jpg" alt=""></a>
						<h1></h1>
						<h1></h1>
						<div class="blog-text">
							<h1></h1>
							<h3><a href=""#>45 Minimal Worksspace Rooms for Web Savvys</a></h3>
							<span class="posted_on">Sep. 15th</span>
							<span class="comment"><a href="">21<i class="icon-speech-bubble"></i></a></span>
							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
							<a href="#" class="btn btn-primary">Read More</a>
						</div> 
						
					</div>
				</div>
				<div class="col-lg-4 col-md-4">
					<div class="fh5co-blog animate-box">
						<a href="#"><img class="img-responsive"  src="images1/images3.jpg" alt=""></a>
						<div class="blog-text">
							<h3><a href=""#>45 Minimal Worksspace Rooms for Web Savvys</a></h3>
							<span class="posted_on">Sep. 15th</span>
							<span class="comment"><a href="">21<i class="icon-speech-bubble"></i></a></span>
							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
							<a href="#" class="btn btn-primary">Read More</a>
						</div> 
					</div>
				</div>
				<div class="col-lg-4 col-md-4">
					<div class="fh5co-blog animate-box">
						<a href="#"><img class="img-responsive" src="images1/images4.jpg" alt=""></a>
						<div class="blog-text">
							<h3><a href=""#>45 Minimal Worksspace Rooms for Web Savvys</a></h3>
							<span class="posted_on">Sep. 15th</span>
							<span class="comment"><a href="">21<i class="icon-speech-bubble"></i></a></span>
							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
							<a href="#" class="btn btn-primary">Read More</a>
						</div> 
					</div>
				</div>

			</div>
		</div>
	</div> -->
			
	<?php
         include("commonpages/footer.php")
		?>
	
	

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>
	
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Stellar Parallax -->
	<script src="js/jquery.stellar.min.js"></script>
	<!-- Carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- countTo -->
	<script src="js/jquery.countTo.js"></script>
	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>
	<!-- Main -->
	<script src="js/main.js"></script>

	

	</body>
</html>

