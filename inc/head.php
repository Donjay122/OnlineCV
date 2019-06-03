	<head>
		<title><?php echo $pageTitle ; ?></title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width , initial-scale=1">
		<meta name="author" content="Adediran Ayodeji">
		<meta name="description" content="Ayodeji's Online CV">
		<meta name="keywords" content="Ayodeji Adediran , Online CV , Codespace challenge ">
        <script src="lottie.js" type="text/javascript"></script>
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
                            <a href="index.php"><div id="blink"></div></a>
                            <script src="blink.js"></script>
							<ul class="nav-list">
								<li><a href="index.php?directory=contact"  style="<?php if($pageTitle == 'Contact'){echo "color:violet"; } ?>"><i class="fas fa-envelope"></i>&nbsp;Contact</a></li>
                                
                                
								<li><a href="index.php?directory=about"  style="<?php if($pageTitle == 'About'){echo "color:violet"; } ?>"><i class="far fa-address-card"></i>&nbsp;About me</a></li>
                                
                                
								<li><a href="index.php?directory=portfolio"  style="<?php if($pageTitle == 'Portfolio'){echo "color:violet"; } ?>"><i class="fas fa-layer-group"></i>&nbsp;Portfolio</a></li>
                                
                                
								<li><a href="index.php?directory=home" style="<?php if($pageTitle == 'Home'){echo "color:violet"; } ?>"><i class="fas fa-home"></i>&nbsp;Home</a></li>
							</ul>
                            
                            <div class="bar-icons">
                                <i class="fas fa-bars"></i>
                            </div>
                            
						</div><!--main-nav-->
					</nav>

