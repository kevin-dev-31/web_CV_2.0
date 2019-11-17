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

<ul id="menu">
	<li data-menuanchor="un"><a href="#un"> </a></li>
	<li data-menuanchor="deux"><a href="#deux"> </a></li>
	<li data-menuanchor="trois"><a href="#trois"> </a></li>
	<li data-menuanchor="quatre"><a href="#quatre"> </a></li>
	<li data-menuanchor="cinque"><a href="#cinque"> </a></li>
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
				<h2><a href="pages/skiLls.php">Mes compétences</a></h2>
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
				<h2><a href="pages/works.php">Portofolio</a></h2>
			</div>	
		</div>

		<div class="ms-section" id="right5">	
		</div>


	</div>	
</div>

	<?php require 'inc/footer.php'; ?>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script type="text/javascript" src="scroll/jquery.easings.min.js"></script>
	<script type="text/javascript" src="scroll/jquery.multiscroll.min.js"></script>
	<script type="text/javascript">
	 $(document).ready(function() {
            $('#myContainer').multiscroll({
            	anchors: ['un', 'deux', 'trois','quatre','cinque'],
            	menu: '#menu',
            	loopTop: true,
            	loopBottom: true
            });
        });
    </script>

</body>
</html>
