<!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="utf-8">	
	<title>Ricou Kévin</title>
	<meta name="description" content="Kévin Ricou 31 ans développeur web à Toulouse en recherche de poste. Apprenez en plus sur moi grace à mon site. Vous y découvrirez mes compétences et mes réalisations. Si mon profil vous intéresse n'hesitez pas à me contacter!">
	<meta property="og:image" content="https://www.ricou-kevin.fr/img/logo.png">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- fontawesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">	
	<link rel="stylesheet" type="text/css" href="scroll/jquery.multiscroll.css">	
	<link rel="icon" type="image/png" href="img/fav.png">
	<link rel="stylesheet" type="text/css" href="styles/style.css">

	<meta name="description" content="CV de kévin ricou, développeur web et web mobile, Toulouse">	

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
					<div class="big">
						<h1>Développeur web</h1>
					</div>
				</div>			
			</div>

			<div class="ms-section" id="left2">	
				<div>
					<div class="img1">
						<img src="img/me.serious.png" class="img-fluid" alt="Moi serieux">
					</div>
					<div class="img2">
						<img src="img/me.forest.png" class="img-fluid" alt="Moi décontracté">
					</div>
				</div>
			</div>

			<div class="ms-section" id="left3">
				<div class="cont">
					<h2>Compétences</a></h2>
				</div>			
			</div>
			<div class="ms-section" id="left4">	
			</div>

			<div class="ms-section" id="left5">
				<div class="cont">
					<h2><a href="pages/contact.php"><i class="fas fa-share fa-xs last"></i> Contact</a></h2>
				</div>			
			</div>
		
		</div>
		
		<div class="ms-right">

			<div class="ms-section" id="right1">		
			</div>

			<div class="ms-section" id="right2">
				<div class="cont">
					<h2><a href="pages/about.php">A propos de moi <i class="fas fa-share fa-xs"></i></a></h2>				
				</div>
			</div>

			<div class="ms-section" id="right3">
				<div class="cont">
					<div class="row">

						<div class="col-12 d-flex center">
							<div class="col-4 disp">
								<figure class="img-competence">
									<img src="img/skills/html5.jpeg" alt="logo de HTML 5" class="img-fluid">
								</figure>
							</div>
							<div class="col-4 disp">
								<figure class="img-competence">
									<img src="img/skills/css3.jpg" alt="logo de CSS 3" class="img-fluid">
								</figure>
							</div>
							<div class="col-4 disp">
								<figure class="img-competence">
									<img src="img/skills/jquery.png" alt="logo de jQuery" class="img-fluid">
								</figure>
							</div>
						</div>

						<div class="col-12 d-flex center">
							<div class="col-4 disp">
								<figure class="img-competence ">
									<img src="img/skills/php.png" alt="logo de PHP" class="img-fluid">
								</figure>
							</div>
							<div class="col-4 disp">
								<figure class="img-competence">
									<img src="img/skills/bootstrap.png" alt="logo de Bootstrap" class="img-fluid">
								</figure>
							</div>
							<div class="col-4 disp">
								<figure class="img-competence">
									<img src="img/skills/wp.png" alt="logo de WordPress" class="img-fluid">
								</figure>
							</div>
						</div>

						<div class="col-12 d-flex center">
							<div class="col-4 disp">
								<figure class="img-competence">
									<img src="img/skills/github.jpg" alt="logo de GitHub" class="img-fluid">
								</figure>
							</div>
							<div class="col-4 disp">
								<figure class="img-competence">
									<img src="img/skills/drupal.jpg" alt="logo de Drupal" class="img-fluid">
								</figure>
							</div>

							<div class="col-4 disp">
								<figure class="img-competence">
									<img src="img/skills/ps.jpg" alt="logo de Photoshop" class="img-fluid">
								</figure>
							</div>
						</div>

					</div>

				</div>
			</div>
			<div class="ms-section" id="right4">
				<div class="cont">
					<h2><a href="pages/works.php">Portfolio <i class="fas fa-share fa-xs"></i></a></h2>
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
	<script type="text/javascript" id="cookieinfo"
		src="//cookieinfoscript.com/js/cookieinfo.min.js"
		data-bg="#645862"
		data-fg="#FFFFFF"
		data-link="#3ad9e8"
		data-divlinkbg="#3ad9e8"
		data-message="Nous utilisons des 🍪 pour améliorer votre expérience. En poursuivant votre navigation sur ce site, vous acceptez notre utilisation des 🍪. Plus d'informations"
		data-linkmsg="En savoir plus"
	    data-close-text="J'adore les 🍪"
	    data-moreinfo="https://fr.wikipedia.org/wiki/Cookie_(informatique)">
	</script>



</body>
</html>
