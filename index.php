<?php



$pageTitle = 'Ayodeji Adediran';
if($_GET["directory"] == "home"){
   $pageTitle = "Home";
}elseif($_GET["directory"] == "timekeeper"){
   $pageTitle = "Timekeeper";
}elseif($_GET["directory"] == "factimes"){
   $pageTitle = "Factimes";
}elseif($_GET["directory"] == "treehouse"){
   $pageTitle = "Treehouse";
}elseif($_GET["directory"] == "reactgiffy"){
   $pageTitle = "ReactGiffy";
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




			<?php if($pageTitle == "Home" || $pageTitle == 'Ayodeji Adediran'){?>
                
                
                

            <?php   require('inc/home.php');   ?>
                
                
                
                
                
<!------PORTFOLIO  PORTFOLIO  PORTFOLIO  PORTFOLIO  PORTFOLIO  PORTFOLIO----> 
<!------PORTFOLIO  PORTFOLIO  PORTFOLIO  PORTFOLIO  PORTFOLIO  PORTFOLIO---->
<!------PORTFOLIO  PORTFOLIO  PORTFOLIO  PORTFOLIO  PORTFOLIO  PORTFOLIO---->
                
                
                
                
                
                
                
                

			<?php }elseif($pageTitle == "Factimes"){?>

             <div id="portfoliodiv">
                 <img src="image/factimesicon.png" id="mobilelaptopng">
	             <img src="image/factimes.png" width="50%" id="laptopng"> 
	             <div id="portfoliodesc">
	             	<span><i class="fas fa-asterisk"></i>&nbsp;&nbsp;Title :&nbsp;&nbsp;FacTIMES</span><br><br>
	                <span><i class="fas fa-asterisk"></i>&nbsp;&nbsp;Desc :&nbsp;&nbsp;Search for news and verify if its fake. News are reviewed by people who live at the location. First product  i built after learning VueJS and Node JS basics. I have new updates and ideas on this. Contact me if you'll like to know more</span><br><br>
	                <span><i class="fas fa-asterisk"></i>&nbsp;&nbsp;What i learnt :&nbsp;&nbsp;After sleepless nights I learnt how http request and response works.</span><br><br>
	                <span>How to work with external API .</span><br><br>
					 <span>How to think like a user to satisfy their experience .</span><br><br>
	                <span><i class="fas fa-asterisk"></i>&nbsp;&nbsp;Author:&nbsp;&nbsp;Ayodeji Adediran</span><br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	                <span><a class="button" href="http://factimes.herokuapp.com" target="_blank">Demo</a></span>
	                <span><a class="button" href="https://github.com/Donjay122/factimes" target="_blank">Github</a></span><br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					 <div>
	                 <span id="technologies"><i class="fab fa-vuejs"></i></span>&nbsp;&nbsp;
					 <span id="technologies"><i class="fab fa-node-js"></i></span>
					</div>
	             </div>
            <style>
				     #portfoliodesc{color: black}
				    .wrapper{background-image: linear-gradient(white,white);}
                    .nav-list a{color: black;}
                    .fa-bars{color: black;}
            </style>				 
             </div>
				

             <div id="next">
                 <a href="index.php?directory=timekeeper"><span id="nextright"><i class="fas fa-arrow-right"></i></span></a>
             </div>


             <style type="text/css">.container{padding: 8.2% 0; }</style>




            <?php }elseif($pageTitle == "Timekeeper") { ?>





             <div id="portfoliodiv">
                 <img src="image/timekeepermobile.png" id="mobilelaptopng" >
	             <img src="image/timekeeper.png" width="50%" id="laptopng"> 
	             <div id="portfoliodesc">
	             	<span><i class="fas fa-asterisk"></i>&nbsp;&nbsp;Title :&nbsp;&nbsp;TimeKeeper</span><br><br>
	                <span><i class="fas fa-asterisk"></i>&nbsp;&nbsp;Desc :&nbsp;&nbsp; Todo App project from days at Codespace Academy.</span><br><br>
	                <span><i class="fas fa-asterisk"></i>&nbsp;&nbsp;What i learnt :&nbsp;&nbsp; How to build applications with PHP.</span><br><br>				<span>Working with SQL Database , Writing queries.</span><br><br>
					 <span>Basic understanding of Authentication.</span><br><br>
	                <span><i class="fas fa-asterisk"></i>&nbsp;&nbsp;Author:&nbsp;&nbsp;Ayodeji Adediran</span><br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	                <span><a class="button" href="https://godonwebtimekeeper.herokuapp.com"  target="_blank">Demo</a></span>
	                <span><a class="button" href="https://github.com/Donjay122/TimeKeeper" target="_blank">Github</a></span><br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					 <div>
	                <span id="technologies"><i class="fab fa-php"></i></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					 <span id="technologies"><i class="fas fa-database"></i></span>
				    </div>
	             </div>
            <style>
				     #portfoliodesc{color: black}
				    .wrapper{background-image: linear-gradient(white,white);}
                    .nav-list a{color: black;}
                    .fa-bars{color: black;}
            </style>				 
             </div>

             <div id="next">
             	 <a href="index.php?directory=factimes"><span id="nextleft"><i class="fas fa-arrow-left"></i></span></a>
                 <a href="index.php?directory=treehouse"><span id="nextright"><i class="fas fa-arrow-right"></i></span></a>
             </div>


             <style type="text/css">.container{padding: 8.2% 0; }</style>






             <?php }elseif($pageTitle == "Treehouse") {  ?>





             <div id="portfoliodiv">
                 <img src="image/treehouseicon.png" id="mobilelaptopng" >
	             <img src="image/treehouse1.png" width="50%" id="laptopng"> 
	             <div id="portfoliodesc">
	             	<span><i class="fas fa-asterisk"></i>&nbsp;&nbsp;Title :&nbsp;&nbsp;Treehouse Student Finder</span><br><br>
	                <span><i class="fas fa-asterisk"></i>&nbsp;&nbsp;Desc :&nbsp;&nbsp;Search for any user by username on Treehouse Online Learning platform.</span><br><br>
					 <span><i class="fas fa-asterisk"></i>&nbsp;&nbsp;What i learnt :&nbsp;&nbsp;How to use Express framework for Node JS</span><br><br>
	                <span><i class="fas fa-asterisk"></i>&nbsp;&nbsp;Author:&nbsp;&nbsp;Ayodeji Adediran</span><br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	                <span><a class="button" href="https://godonwebtreehouse.herokuapp.com/" target="_blank">Demo</a></span>
	                <span><a class="button" href="#">Github</a></span><br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					 <div>
	                <span id="technologies"><i class="fab fa-node-js"></i></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				   </div>
	             </div>
            <style>
				     #portfoliodesc{color: black}
				    .wrapper{background-image: linear-gradient(white,white);}
                    .nav-list a{color: black;}
                    .fa-bars{color: black;}
            </style>				 
             </div>

             <div id="next">
             	 <a href="index.php?directory=factimes"><span id="nextleft"><i class="fas fa-arrow-left"></i></span></a>
                 <a href="index.php?directory=reactgiffy"><span id="nextright"><i class="fas fa-arrow-right"></i></span></a>
             </div>


             <style type="text/css">.container{padding: 8.2% 0; }</style>

          


          <?php }elseif($pageTitle == "ReactGiffy") {   ?>



             <div id="portfoliodiv">
                 <img src="image/reactgiffyicon.png" id="mobilelaptopng" >
	             <img src="image/reactgiffy.png" width="50%" id="laptopng"> 
	             <div id="portfoliodesc">
	             	<span><i class="fas fa-asterisk"></i>&nbsp;&nbsp;Title :&nbsp;&nbsp;ReactGiffy</span><br><br>
	                <span><i class="fas fa-asterisk"></i>&nbsp;&nbsp;Desc :&nbsp;&nbsp;Search and download Gif images </span><br><br>
					 <span><i class="fas fa-asterisk"></i>&nbsp;&nbsp;What i learnt :&nbsp;&nbsp;How to use React framework to build solutions </span><br><br>
	                <span><i class="fas fa-asterisk"></i>&nbsp;&nbsp;Author:&nbsp;&nbsp;Ayodeji Adediran</span><br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	                <span><a class="button" href="https://reactgiffy.herokuapp.com/" target="_blank">Demo</a></span>
	                <span><a class="button" href="#">Github</a></span><br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	                <span id="technologies"><i class="fab fa-react"></i></span>
					 <span id="technologies"><i class="fab fa-bootstrap"></i></span>
	             </div>
            <style>
				     #portfoliodesc{color: black}
				    .wrapper{background-image: linear-gradient(white,white);}
                    .nav-list a{color: black;}
                    .fa-bars{color: black;}
            </style>				 
             </div>

             <div id="next">
             	 <a href="index.php?directory=treehouse"><span id="nextleft"><i class="fas fa-arrow-left"></i></span></a>
                 <a href="index.php?directory=factimes"><span id="nextright"><i class="fas fa-arrow-right"></i></span></a>
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