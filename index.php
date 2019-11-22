<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">	
	<title>test cv</title>
	<meta name="description" content="" />
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="scroll/jquery.multiscroll.css">		
	<link rel="stylesheet" type="text/css" href="style.css">		

</head>
<body id="index">
	<!-- The video -->
	<video autoplay muted loop id="myVideo">
	  <source src="img/Science.mp4" type="video/mp4">
	</video>


	<ul id="menu">
		<li data-menuanchor="index"><a href="#index"> </a></li>
		<li data-menuanchor="about"><a href="#about"> </a></li>
		<li data-menuanchor="skills"><a href="#skills"> </a></li>
		<li data-menuanchor="works"><a href="#works"> </a></li>
		<li data-menuanchor="contact"><a href="#contact"> </a></li>
	</ul>

	<div id="myContainer">    


		<div class="ms-left">
			<div class="ms-section" id="left1">
				<div class="cont">
					<h2>ricou kévin</h2>
					<h1>Développeur web</h1>
				</div>			
			</div>

			<div class="ms-section" id="left2">		
			</div>

			<div class="ms-section" id="left3">
				<div class="cont">
					<h2><a href="pages/skills.php">Mes compétences</a></h2>
				</div>			
			</div>
			<div class="ms-section" id="left4">	
			</div>

			<div class="ms-section" id="left5">
				<div class="cont">
					<h2><a href="pages/contact.php">Contact</a></h2>
				</div>			
			</div>
		
		</div>
		
		<div class="ms-right">
			<div class="ms-section" id="right1">		
			</div>

			<div class="ms-section" id="right2">
				<div class="cont">
					<h2><a href="pages/about.php">A propos de moi</a></h2>				
				</div>
			</div>

			<div class="ms-section" id="right3">		
			</div>
			<div class="ms-section" id="right4">
				<div class="cont">
					<h2><a href="pages/works.php">Portfolio</a></h2>
				</div>	
			</div>

			<div class="ms-section" id="right5">	
			</div>


		</div>	
	</div>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script type="text/javascript" src="scroll/jquery.easings.min.js"></script>
	<script type="text/javascript" src="scroll/jquery.multiscroll.min.js"></script>
	<script type="text/javascript">
	 $(document).ready(function() {
            $('#myContainer').multiscroll({
            	anchors: ['index', 'about', 'skills','works','contact'],
            	menu: '#menu',
            	loopTop: true,
            	loopBottom: true
            });
        });
    </script>

</body>
</html>
