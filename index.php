<?php



$pageTitle = 'Ayodeji Adediran';
if($_GET["directory"] == "home"){
   $pageTitle = "Home";
}elseif($_GET["directory"] == "portfolio"){
   $pageTitle = "Portfolio";
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

    <?php require('inc/head.php'); ?>

			<div class="container">




			<?php if($pageTitle == "Home" || $pageTitle == ''){?>
                
                
                

            <?php   require('inc/home.php');   ?>
                
                
                
                
                
<!------PORTFOLIO  PORTFOLIO  PORTFOLIO  PORTFOLIO  PORTFOLIO  PORTFOLIO----> 
<!------PORTFOLIO  PORTFOLIO  PORTFOLIO  PORTFOLIO  PORTFOLIO  PORTFOLIO---->
<!------PORTFOLIO  PORTFOLIO  PORTFOLIO  PORTFOLIO  PORTFOLIO  PORTFOLIO---->
                
                
                
                
                
                
                
                

			<?php }elseif($pageTitle == "Portfolio"){?>



             
             <div id="portfoliodiv">
                 <img src="image/timekeepermobile.png" id="mobilelaptopng" >
	             <img src="image/laptop.png" width="50%" id="laptopng"> 
	             <div id="portfoliodesc">
	             	<span><i class="fas fa-asterisk"></i>&nbsp;&nbsp;Title :&nbsp;&nbsp;TimeKeeper</span><br><br>
	                <span><i class="fas fa-asterisk"></i>&nbsp;&nbsp;Desc :&nbsp;&nbsp; Todo App project.</span><br><br>
	                <span><i class="fas fa-asterisk"></i>&nbsp;&nbsp;Author:&nbsp;&nbsp;Ayodeji Adediran</span><br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	                <span><a class="button" href="https://godonwebtimekeeper.herokuapp.com"  target="_blank">Demo</a></span>
	                <span><a class="button" href="https://github.com/Donjay122/TimeKeeper" target="_blank">Github</a></span><br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
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
                 <img src="image/spacebotmobile.png" id="mobilelaptopng" >
	             <img src="image/laptop2.png" width="50%" id="laptopng"> 
	             <div id="portfoliodesc">
	             	<span><i class="fas fa-asterisk"></i>&nbsp;&nbsp;Title :&nbsp;&nbsp;SpaceBot</span><br><br>
	                <span><i class="fas fa-asterisk"></i>&nbsp;&nbsp;Desc :&nbsp;&nbsp;Built with pure javascript, this app was made to answer questions regarding crypto market and show latest prices.</span><br><br>
	                <span><i class="fas fa-asterisk"></i>&nbsp;&nbsp;Author:&nbsp;&nbsp;Ayodeji Adediran</span><br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	                <span><a class="button" href="https://spacebot.netlify.com" target="_blank">Demo</a></span>
	                <span><a class="button" href="https://github.com/Donjay122/SpaceBot" target="_blank">Github</a></span><br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
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
                 <img src="image/travelmobile.png" id="mobilelaptopng" >
	             <img src="image/laptop3.png" width="50%" id="laptopng"> 
	             <div id="portfoliodesc">
	             	<span><i class="fas fa-asterisk"></i>&nbsp;&nbsp;Title :&nbsp;&nbsp;Travel Booking</span><br><br>
	                <span><i class="fas fa-asterisk"></i>&nbsp;&nbsp;Desc :&nbsp;&nbsp;Codespace Travel Booking App project. Built during MySQL database course.</span><br><br>
	                <span><i class="fas fa-asterisk"></i>&nbsp;&nbsp;Author:&nbsp;&nbsp;Ayodeji Adediran</span><br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	                <span><a class="button" href="https://godonwebookings.herokuapp.com/" target="_blank">Demo</a></span>
	                <span><a class="button" href="https://github.com/Donjay122/HotelBooking" target="_blank">Github</a></span><br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
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
                 <img src="image/musicbankmobile.png" id="mobilelaptopng" >
	             <img src="image/laptop4.png" width="50%" id="laptopng"> 
	             <div id="portfoliodesc">
	             	<span><i class="fas fa-asterisk"></i>&nbsp;&nbsp;Title :&nbsp;&nbsp;MusicBank</span><br><br>
	                <span><i class="fas fa-asterisk"></i>&nbsp;&nbsp;Desc :&nbsp;&nbsp;Blockchain Crypto Account for Music artiste</span><br><br>
	                <span><i class="fas fa-asterisk"></i>&nbsp;&nbsp;Author:&nbsp;&nbsp;Ayodeji Adediran</span><br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	                <span><a class="button" href="https://godonwebmusicbank.herokuapp.com/" target="_blank">Demo</a></span>
	                <span><a class="button" href="https://github.com/Donjay122/MusicBank" target="_blank">Github</a></span><br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
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
                 <img src="image/quizmobile.png" id="mobilelaptopng" >
	             <img src="image/laptop5.png" width="50%" id="laptopng"> 
	             <div id="portfoliodesc">
	             	<span><i class="fas fa-asterisk"></i>&nbsp;&nbsp;Title :&nbsp;&nbsp;Quiz Challenge</span><br><br>
	                <span><i class="fas fa-asterisk"></i>&nbsp;&nbsp;Desc :&nbsp;&nbsp;Codespace javascript quiz challenge</span><br><br>
	                <span><i class="fas fa-asterisk"></i>&nbsp;&nbsp;Author:&nbsp;&nbsp;Ayodeji Adediran</span><br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	                <span><a class="button" href="https://onlinequiz.netlify.com/" target="_blank">Demo</a></span>
	                <span><a class="button" href="https://github.com/Donjay122/QuizChallenge" target="_blank">Github</a></span><br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	                <span id="technologies"><i class="fab fa-js"></i></span>
	             </div>
             </div>

             <div id="next">
             	 <a href="index.php?directory=portfolio4"><span id="nextleft"><i class="fas fa-arrow-left"></i></span></a>
                 <a href="index.php?directory=portfolio"><span id="nextright"><i class="fas fa-arrow-right"></i></span></a>
             </div>


             <style type="text/css">.container{padding: 8.2% 0; }</style> 
                
                
                
                


<!------PORTFOLIO  PORTFOLIO  PORTFOLIO  PORTFOLIO  PORTFOLIO  PORTFOLIO---->
<!------PORTFOLIO  PORTFOLIO  PORTFOLIO  PORTFOLIO  PORTFOLIO  PORTFOLIO---->
                
                
                
                



        <?php }elseif($pageTitle == "About" ){ ?>


        <?php require('inc/about.php'); ?>


        <?php }else if($pageTitle == "Contact"){ ?>
                
                
     
        <?php require('inc/contact.php'); ?>
                
                
                
        <?php } ?>
			</div><!--container------------------------------------------------------------------------->	

        <?php require('inc/footer.php'); ?>
</html>