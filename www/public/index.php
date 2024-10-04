<!doctype html>
<html lang="sv">

<head>
	<meta charset="utf-8">
	<title>Länka in sidor med PHP</title>
	<link href="css/styleSheet.css" rel="stylesheet" type="text/css">
</head>

<body>
	<div id="wrapper">
		<!-- header -->
		 <?php include 'inc/header.php'; ?>
		<section id="leftColumn">
			<nav>
				<h1>Innehåll</h1>
				<ul>
					<li><a href="index.php">Hem</a></li>
					<li><a href="pages/blogg.php">Blogg</a></li>
					<li><a href="pages/bilder.php">Bilder</a></li>
					<li><a href="pages/Kontakt.php">Kontakt</a></li>
				</ul>
			</nav>
			<aside>
				<h1>Namn</h1>
				<p>
					Lorem ipsum dolor sit amet, consectetur adipiscing elit.
					Nulla tristique elementum nisl, et vehicula neque laoreet ut.
					Praesent sed ultrices purus.
				</p>
			</aside>
		</section>
		<!-- End leftColumn -->

		<main role="main">
			<section>
			<?php
           $page = "start";
           if(isset($_GET['page']))
              $page = $_GET['page'];
              
              switch($page){
                 case 'blogg': include('pages/blogg.php');
                         break;
                 case 'bilder': include('pages/bilder.php');  
                         break;
                 case 'kontakt':include('pages/kontakt.php'); 
                         break;
                
                 default: include('pages/start.php');
            } 
       ?>
			</section>
		</main>
		<!-- End main -->

		<footer>
			<span id="footerLeft">© Sidlayoutarna</span>
			<span id="footerRight"><a href="mailto:xxx@doman">xxx@doman</a></span>
		</footer>
		<!-- End footer -->
	</div>
	<!-- End wrapper -->
</body>

</html>