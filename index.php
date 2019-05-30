<?php
session_start();
//session_destroy();
$pageTitle = '';



if($_GET["directory"] == "home"){
   $pageTitle = "Home";
}elseif($_GET["directory"] == "portfolio"){
   $pageTitle = "TimeKeeper";
}elseif($_GET["directory"] == "portfolio2"){
   $pageTitle = "Spacebot";
}elseif($_GET["directory"] == "portfolio3"){
   $pageTitle = "Booking";
}elseif($_GET["directory"] == "portfolio4"){
   $pageTitle = "Musicbank";
}elseif($_GET["directory"] == "portfolio5"){
   $pageTitle = "Quiz";
}elseif($_GET["directory"] == "about"){
   $pageTitle = "About";
}elseif($_GET["directory"] == "contact"){
   $pageTitle = "Contact";
}


?>











<!DOCTYPE html>
<html lang="en">
	<head>
		<title><?php echo $pageTitle ; ?></title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width , initial-scale=1">
		<meta name="author" content="Adediran Ayodeji">
		<meta name="description" content="Ayodeji's Online CV">
		<meta name="keywords" content="Ayodeji Adediran , Online CV , Codespace challenge ">
		<script src="js/index.js" type="text/javascript"></script>
        <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Nanum+Gothic" rel="stylesheet">
		<link rel="stylesheet" href="css/normalize.css">
		<link rel="stylesheet" href="css/dejicv.css">
	</head>
		<body>
			<div class="wrapper">
				<nav>
						<div class="main-nav">
							<ul class="nav-list">
								<li><a href="index.php?directory=contact"><i class="fas fa-envelope"></i>&nbsp;Contact</a></li>
								<li><a href="index.php?directory=about"><i class="far fa-address-card"></i>&nbsp;About me</a></li>
								<li><a href="index.php?directory=portfolio"><i class="fas fa-layer-group"></i>&nbsp;Portfolio</a></li>
								<li><a href="index.php?directory=home"><i class="fas fa-home"></i>&nbsp;Home</a></li>
							</ul>
						</div><!--main-nav-->
					</nav>

			<div class="container">




			<?php if($pageTitle == "Home" || $pageTitle == ''){?>




					<header>
						<div class="main-header">
							<h1>Ayodeji Adediran</h1>
							<p>Fullstack Developer&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p><br>
							<a href="index.php?directory=portfolio" id="project-button"><p class="button"><i class="far fa-eye"></i>&nbsp;View project</p></a>
							<a href="#"><p class="button"><i class="fas fa-envelope"></i>&nbsp;Contact</p></a><br>
						</div>
					</header>
				
				
				<div class="affiliates">
					<img src="image/treehouse.png">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<img src="image/codespace-primary-logo.svg">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<div id="stanford-logo">
					<img src="image/stanford.png" id="stanford-logo">
					<p id="stanford-tweak">| ONLINE</p>
					</div>
				</div>




			<?php }elseif($pageTitle == "TimeKeeper"){?>



             
             <div id="portfoliodiv">
	             <img src="image/laptop.png" width="50%" id="laptopng"> 
	             <div id="portfoliodesc">
	             	<span><i class="fas fa-asterisk"></i>&nbsp;&nbsp;Title :&nbsp;&nbsp;TimeKeeper</span><br><br>
	                <span><i class="fas fa-asterisk"></i>&nbsp;&nbsp;Desc :&nbsp;&nbsp;Codespace Todo App project.</span><br><br>
	                <span><i class="fas fa-asterisk"></i>&nbsp;&nbsp;Author:&nbsp;&nbsp;Ayodeji Adediran</span><br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	                <span><a class="button" href="https://godonwebtimekeeper.herokuapp.com"  target="_blank">Demo</a></span>
	                <span><a class="button" href="#">Github</a></span><br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	                <span id="technologies"><i class="fab fa-php"></i></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	                <span id="technologies"><i class="fab fa-js"></i></span>
	             </div>
             </div>

             <div id="next">
                 <a href="index.php?directory=portfolio2"><span id="nextright"><i class="fas fa-arrow-right"></i></span></a>
             </div>


             <style type="text/css">.container{padding: 8.2% 0; }</style>




            <?php }elseif($pageTitle == "Spacebot") { ?>





             <div id="portfoliodiv">
	             <img src="image/laptop2.png" width="50%" id="laptopng"> 
	             <div id="portfoliodesc">
	             	<span><i class="fas fa-asterisk"></i>&nbsp;&nbsp;Title :&nbsp;&nbsp;SpaceBot</span><br><br>
	                <span><i class="fas fa-asterisk"></i>&nbsp;&nbsp;Desc :&nbsp;&nbsp;Built with pure javascript, this app was made to answer questions regarding Codespace Academy. Going  open source soon for student contribution.</span><br><br>
	                <span><i class="fas fa-asterisk"></i>&nbsp;&nbsp;Author:&nbsp;&nbsp;Ayodeji Adediran</span><br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	                <span><a class="button" href="https://spacebot.netlify.com" target="_blank">Demo</a></span>
	                <span><a class="button" href="#">Github</a></span><br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	                <span id="technologies"><i class="fab fa-js"></i></span>
	             </div>
             </div>

             <div id="next">
             	 <a href="index.php?directory=portfolio"><span id="nextleft"><i class="fas fa-arrow-left"></i></span></a>
                 <a href="index.php?directory=portfolio3"><span id="nextright"><i class="fas fa-arrow-right"></i></span></a>
             </div>


             <style type="text/css">.container{padding: 8.2% 0; }</style>






             <?php }elseif($pageTitle == "Booking") {  ?>





             <div id="portfoliodiv">
	             <img src="image/laptop3.png" width="50%" id="laptopng"> 
	             <div id="portfoliodesc">
	             	<span><i class="fas fa-asterisk"></i>&nbsp;&nbsp;Title :&nbsp;&nbsp;Travel Booking</span><br><br>
	                <span><i class="fas fa-asterisk"></i>&nbsp;&nbsp;Desc :&nbsp;&nbsp;Codespace Travel Booking App project. Built during &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MySQL database course.</span><br><br>
	                <span><i class="fas fa-asterisk"></i>&nbsp;&nbsp;Author:&nbsp;&nbsp;Ayodeji Adediran</span><br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	                <span><a class="button" href="#">Demo</a></span>
	                <span><a class="button" href="#">Github</a></span><br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	                <span id="technologies"><i class="fab fa-php"></i></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	                <span id="technologies"><i class="fas fa-server"></i></span>
	             </div>
             </div>

             <div id="next">
             	 <a href="index.php?directory=portfolio2"><span id="nextleft"><i class="fas fa-arrow-left"></i></span></a>
                 <a href="index.php?directory=portfolio4"><span id="nextright"><i class="fas fa-arrow-right"></i></span></a>
             </div>


             <style type="text/css">.container{padding: 8.2% 0; }</style>

          


          <?php }elseif($pageTitle == "Musicbank") {   ?>



             <div id="portfoliodiv">
	             <img src="image/laptop4.png" width="50%" id="laptopng"> 
	             <div id="portfoliodesc">
	             	<span><i class="fas fa-asterisk"></i>&nbsp;&nbsp;Title :&nbsp;&nbsp;MusicBank</span><br><br>
	                <span><i class="fas fa-asterisk"></i>&nbsp;&nbsp;Desc :&nbsp;&nbsp;Blockchain Crypto Account for Music artiste</span><br><br>
	                <span><i class="fas fa-asterisk"></i>&nbsp;&nbsp;Author:&nbsp;&nbsp;Ayodeji Adediran</span><br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	                <span><a class="button" href="#">Demo</a></span>
	                <span><a class="button" href="#">Github</a></span><br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	                <span id="technologies"><i class="fab fa-php"></i></span>
	             </div>
             </div>

             <div id="next">
             	 <a href="index.php?directory=portfolio3"><span id="nextleft"><i class="fas fa-arrow-left"></i></span></a>
                 <a href="index.php?directory=portfolio5"><span id="nextright"><i class="fas fa-arrow-right"></i></span></a>
             </div>


             <style type="text/css">.container{padding: 8.2% 0; }</style>


  



         <?php } elseif($pageTitle == "Quiz" ){?>





             <div id="portfoliodiv">
	             <img src="image/laptop5.png" width="50%" id="laptopng"> 
	             <div id="portfoliodesc">
	             	<span><i class="fas fa-asterisk"></i>&nbsp;&nbsp;Title :&nbsp;&nbsp;Quiz Challenge</span><br><br>
	                <span><i class="fas fa-asterisk"></i>&nbsp;&nbsp;Desc :&nbsp;&nbsp;Codespace javascript quiz challenge</span><br><br>
	                <span><i class="fas fa-asterisk"></i>&nbsp;&nbsp;Author:&nbsp;&nbsp;Ayodeji Adediran</span><br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	                <span><a class="button" href="#">Demo</a></span>
	                <span><a class="button" href="#">Github</a></span><br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	                <span id="technologies"><i class="fab fa-js"></i></span>
	             </div>
             </div>

             <div id="next">
             	 <a href="index.php?directory=portfolio4"><span id="nextleft"><i class="fas fa-arrow-left"></i></span></a>
                 <a href="index.php?directory=portfolio"><span id="nextright"><i class="fas fa-arrow-right"></i></span></a>
             </div>


             <style type="text/css">.container{padding: 8.2% 0; }</style>   






        <?php }elseif($pageTitle == "About" ){ ?>






        <div id="profilediv">
        	  <img src="image/profile.png" class="profilepic"><br>
              <i>Founder <br></i><span> GODONWEB </span>
        </div>











        <?php } ?>
			</div><!--container------------------------------------------------------------------------->	

		</div><!--wrapper-->	
	        <footer>
				<div class="footer">
					<p class="copyright"><i class="fab fa-twitter-square"></i>&nbsp;&nbsp;&nbsp;&nbsp;<i class="fab fa-linkedin"></i>&nbsp;&nbsp;&nbsp;&nbsp;<i class="fab fa-github-square"></i></p>&nbsp;&nbsp;&nbsp;<span class="copyrightname">&copy; 2019 Adediran Ayodeji</span><form><input type="text" name="name" placeholder="Medium updates...">&nbsp;<button>Subscribe&nbsp;&nbsp;<i class="fab fa-medium"></i></button></form>
				</div>
			</footer>
		</body>
</html>