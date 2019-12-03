<?php require '../inc/header.php'; ?>
<title>Portfolio</title>
</head>
<body id="works">
<main>

	<section class="container">
		<div class="indexLink">
			<a href="../index.php"><img src="../img/logo.png" alt="logo du site, lien vers l'accueil"></a>
		</div>
		<article id="portfolio" class="text-center">		
			<h1>Mes réalisations</h1>
			<div class="row">
				<div class="col-md-4 col-sm-6 portfolio-item">
					<a class="portfolio-link" data-toggle="modal" href="#portfolioModal1">
						<div class="portfolio-hover">
							<div class="portfolio-hover-content">
								<i class="fas fa-plus fa-3x"></i>
							</div>
						</div>
						<img src="../img/portfolio/meteo/meteoLink.png" alt="My météo"  class="img-fluid photo-portfolio">
					</a>
					<div class="portfolio-caption">
						<h4>My météo</h4>
						<p class="text-muted">Application météo</p>
					</div>
				</div>
				<div class="col-md-4 col-sm-6 portfolio-item">
					<a class="portfolio-link" data-toggle="modal" href="#portfolioModal2">
						<div class="portfolio-hover">
							<div class="portfolio-hover-content">
								<i class="fas fa-plus fa-3x"></i>
							</div>
						</div>
						<img src="../img/portfolio/rkdev/rkdevLink.png" alt="photo de my meteo"  class="img-fluid photo-portfolio">
					</a>
					<div class="portfolio-caption">
						<h4>RK-CompagnyWEB</h4>
						<p class="text-muted">Site CV</p>
					</div>
				</div>
				
				<div class="col-md-4 col-sm-6 portfolio-item">
					<a class="portfolio-link" data-toggle="modal" href="#portfolioModal3">
						<div class="portfolio-hover">
							<div class="portfolio-hover-content">
								<i class="fas fa-plus fa-3x"></i>
							</div>
						</div>
						<img src="../img/portfolio/sofro/sofroLink.png" alt="Site de sofrologie"  class="img-fluid photo-portfolio">
					</a>
					<div class="portfolio-caption">
						<h4>Site de sofrologie</h4>
						<p class="text-muted">Site wordpress</p>
					</div>
				</div>
				<div class="col-md-4 col-sm-6 portfolio-item">
					<a class="portfolio-link" data-toggle="modal" href="#portfolioModal4">
						<div class="portfolio-hover">
							<div class="portfolio-hover-content">
								<i class="fas fa-plus fa-3x"></i>
							</div>
						</div>
						<img src="../img/portfolio/shoes/shoesLink.png" alt="Site de vente de sneakers"  class="img-fluid photo-portfolio">
					</a>
					<div class="portfolio-caption">
						<h4>Shoes wall</h4>
						<p class="text-muted">E-commerce</p>
					</div>
				</div>
				<div class="col-md-4 col-sm-6 portfolio-item">
					<a class="portfolio-link" data-toggle="modal" href="#portfolioModal5">
						<div class="portfolio-hover">
							<div class="portfolio-hover-content">
								<i class="fas fa-plus fa-3x"></i>
							</div>
						</div>
						<img src="../img/portfolio/gamer/gamerLink.png" alt="Site Au vieux gamer"  class="img-fluid photo-portfolio">
					</a>
					<div class="portfolio-caption">
						<h4>Au vieux gamer</h4>
						<p class="text-muted">Site de jeux</p>
					</div>
				</div>
			</div>
		</article>
	</section>
</main>
<!-- Portfolio Modals -->
<!-- Modal 1 WF3Event -->
<div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog modal-xl">
		<div class="modal-content">
			<div class="close-modal" data-dismiss="modal">
				<div class="lr">
					<div class="rl"></div>
				</div>
			</div>
			<div class="container color_modal">
				<div class="row">
					<div class="col-lg-10 mx-auto">
						<div class="modal-body">
							<!-- Project Details-->
							<h2 class="text-uppercase">My météo</h2>
							<p class="item-intro text-muted">Application météo</p>
							
							<div>
								<img src="../img/portfolio/meteo/meteo.png" alt="photo de l'application my météo">
							</div>
							
							<p class="mt-5">----------------------  </p>
							<ul class="list-inline">
								<li>Client: WF3 projet</li>
								<li>Category: Application mobile</li>
							</ul>
							<button class="btn btn-info" data-dismiss="modal" type="button">
							<i class="fas fa-times"></i>
							Close Project</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Modal 2 My meteo -->
<div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog modal-xl">
		<div class="modal-content">
			<div class="close-modal" data-dismiss="modal">
				<div class="lr">
					<div class="rl"></div>
				</div>
			</div>
			<div class="container color_modal">
				<div class="row">
					<div class="col-lg-8 mx-auto">
						<div class="modal-body">
							<!-- Project Details Go Here -->
							<h2 class="text-uppercase">RK-CompagnyWEB</h2>
							<p class="item-intro text-muted">Mon premier site cv.</p>
							<div>
								<img src="../img/portfolio/rkdev/rkdev.png" alt="photo du site RK-CompagnyWEB">
							</div>
							<p class="mt-5">--------------------------</p>
							<ul class="list-inline">
								<li>Client: WF3 projet</li>
								<li>Category: Site web</li>
							</ul>
							
							<button class="btn btn-info" data-dismiss="modal" type="button">
							<i class="fas fa-times"></i>
							Close Project</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Modal 3 Site de sofrologie-->
<div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog modal-xl">
		<div class="modal-content">
			<div class="close-modal" data-dismiss="modal">
				<div class="lr">
					<div class="rl"></div>
				</div>
			</div>
			<div class="container color_modal">
				<div class="row">
					<div class="col-lg-8 mx-auto">
						<div class="modal-body">
							<!-- Project Details Go Here -->
							<h2 class="text-uppercase">Elise Dautrey Sophrologue</h2>
							<p class="item-intro text-muted">Site web de sophrologie.</p>
							<div>
								<img src="../img/portfolio/sofro/sofro.png" alt="photo du site Elise Dautrey Sophrologue">
							</div>
							<p class="mt-5">------------------------ </p>
							<ul class="list-inline">
								<li>Client: Elise DAUTREY</li>
								<li>Category: Site web WordPress</li>
							</ul>
							<button class="btn btn-info" data-dismiss="modal" type="button">
							<i class="fas fa-times"></i>
							Close Project</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Modal 4 Shoes wall -->
<div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog modal-xl">
		<div class="modal-content">
			<div class="close-modal" data-dismiss="modal">
				<div class="lr">
					<div class="rl"></div>
				</div>
			</div>
			<div class="container color_modal">
				<div class="row">
					<div class="col-lg-8 mx-auto">
						<div class="modal-body">
							<!-- Project Details Go Here -->
							<h2 class="text-uppercase">South West Store</h2>
							<p class="item-intro text-muted">Projet professionnel de soutenance.</p>
							<div>
								<img src="../img/portfolio/shoes/shoes.png" alt="photo du site South West Store">
							</div>
							<p class="mt-5">---------------------</p>
							<ul class="list-inline">
								
								<li>Client: Projet professionnel</li>
								<li>Category: Site de e-comerce sous symfony</li>
							</ul>
							<button class="btn btn-info" data-dismiss="modal" type="button">
							<i class="fas fa-times"></i>
							Close Project</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Modal 4 Au vieux gamer -->
<div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog modal-xl">
		<div class="modal-content">
			<div class="close-modal" data-dismiss="modal">
				<div class="lr">
					<div class="rl"></div>
				</div>
			</div>
			<div class="container color_modal">
				<div class="row">
					<div class="col-lg-8 mx-auto">
						<div class="modal-body">
							<!-- Project Details Go Here -->
							<h2 class="text-uppercase">Au vieux gamer</h2>
							<p class="item-intro text-muted">Site personnel de jeux vidéo.</p>
							<div>
								<img src="../img/portfolio/gamer/gamer.png" alt="photo du site Au vieux gamer">
							</div>
							<p class="mt-5">--------------------------------------------.</p>
							<ul class="list-inline">
								
								<li>Client: Projet personnel</li>
								<li>Category: Site de jeux</li>
							</ul>
							<button class="btn btn-info" data-dismiss="modal" type="button">
							<i class="fas fa-times"></i>
							Close Project</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php require '../inc/footer.php'; ?>
</body>
</html>