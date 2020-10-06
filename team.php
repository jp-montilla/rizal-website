 <!DOCTYPE html>
	<html lang="en" class="no-js">
	<head>
		  
		<title>RIZAL-KUN Team</title>
      	<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    	<link rel="shortcut icon" type="image/x-icon" href="images/home/logo.png" />

      	<link rel="stylesheet" type="text/css" href="styles/style3.css">
		
		<script src="styles/modernizr.custom.js"></script>
		<style>
        	*, *:after, *:before { 
        		-webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box; 
        	}

			body {
				/*background: #fbc73b;*/
				background: url(images/team/team_bg.jpg); 
				background-size: cover; 
				font-family: 'Lato', Arial, sans-serif;
				color: #fff;
			}

			.wrapper {
				margin: 0 auto 30px auto;
				max-width: 960px;
			}

			.stage {
				list-style: none;
				padding: 0;
			}

			/*************************************
			Build the scene and rotate on hover
			**************************************/

			.scene {
				width: 260px;
				height: 400px;
				margin: 30px;
				float: left;
				-webkit-perspective: 1000px;
				-moz-perspective: 1000px;
				perspective: 1000px;
			}

			.hero_container {
				width: 260px;
				height: 400px;
				-webkit-transform-style: preserve-3d;
				-moz-transform-style: preserve-3d;
				transform-style: preserve-3d;
				-webkit-transform: translateZ(-130px);
				-moz-transform: translateZ(-130px);
				transform: translateZ(-130px);
				-webkit-transition: -webkit-transform 350ms;
				-moz-transition: -moz-transform 350ms;
				transition: transform 350ms;
			}

			.hero_container:hover {
				-webkit-transform: rotateY(-78deg) translateZ(20px);
				-moz-transform: rotateY(-78deg) translateZ(20px);
				transform: rotateY(-78deg) translateZ(20px);
			}

			/*************************************
			Transform and style the two planes
			**************************************/

			.hero_container .poster, 
			.hero_container .info {
				position: absolute;
				width: 260px;
				height: 400px;
				background-color: #fff;
				-webkit-backface-visibility: hidden;
				-moz-backface-visibility: hidden;
				backface-visibility: hidden;
			}

			.hero_container .poster  {
				-webkit-transform: translateZ(130px);
				-moz-transform: translateZ(130px);
				transform: translateZ(130px);
				background-size: cover;
				background-repeat: no-repeat;
			}

			.hero_container .info {
				-webkit-transform: rotateY(90deg) translateZ(130px);
				-moz-transform: rotateY(90deg) translateZ(130px);
				transform: rotateY(90deg) translateZ(130px);
				border: 4px solid #fff;
				font-size: 0.75em;
			}

			/*************************************
			Shadow beneath the 3D object
			**************************************/

			.csstransforms3d .hero_container::after {
				content: '';
				width: 260px;
				height: 260px;
				position: absolute;
				bottom: 0;
				box-shadow: 0 30px 50px rgba(0,0,0,0.3);
				-webkit-transform-origin: 100% 100%;
				-moz-transform-origin: 100% 100%;
				transform-origin: 100% 100%;
				-webkit-transform: rotateX(90deg) translateY(130px);
				-moz-transform: rotateX(90deg) translateY(130px);
				transform: rotateX(90deg) translateY(130px);
				-webkit-transition: box-shadow 350ms;
				-moz-transition: box-shadow 350ms;
				transition: box-shadow 350ms;
			}

			.csstransforms3d .hero_container:hover::after {
				box-shadow: 20px -5px 50px rgba(0,0,0,0.3);
			}

			/*************************************
			hero_container information
			**************************************/

			.info header {
				color: #FFF;
				padding: 7px 10px;
				font-weight: bold;
				height: 195px;
				background-size: contain;
				background-repeat: no-repeat;
				text-shadow: 0px 1px 1px rgba(0,0,0,1);
			}

			.info header h1 {
				margin: 0 0 2px;
				font-size: 1.4em;
			}

			.info header .rating {
				border: 1px solid #FFF;
				padding: 0px 3px;
			}

			.info p {
				padding: 1.2em 1.4em;
				margin: 2px 0 0;
				font-weight: 700;
				color: #666;
				line-height: 1.4em;
				 
			}

			/*************************************
			Generate "lighting" using box shadows
			**************************************/

			.hero_container .poster,
			.hero_container .info,
			.hero_container .info header {
				-webkit-transition: box-shadow 350ms;
				-moz-transition: box-shadow 350ms;
				transition: box-shadow 350ms;
			}

			.csstransforms3d .hero_container .poster {
				box-shadow: inset 0px 0px 40px rgba(255,255,255,0);
			}

			.csstransforms3d .hero_container:hover .poster {
				box-shadow: inset 300px 0px 40px rgba(255,255,255,0.8);
			}

			.csstransforms3d .hero_container .info, 
			.csstransforms3d .hero_container .info header {
				box-shadow: inset -300px 0px 40px rgba(0,0,0,0.5);
			}

			.csstransforms3d .hero_container:hover .info, 
			.csstransforms3d .hero_container:hover .info header {
				box-shadow: inset 0px 0px 40px rgba(0,0,0,0);
			}

			/*************************************
			Posters and still images
			**************************************/

			.scene:nth-child(1) .hero_container .poster {
			  background-image: url(images/team/jp_out.jpg);
			}

			.scene:nth-child(2) .poster {
			  background-image: url(images/team/lanz_new.jpg);
			}

			.scene:nth-child(3) .poster {
			  background-image: url(images/team/char.jpg);
			}

			.scene:nth-child(1) .info header {
				background-image: url(images/team/jp_out2.jpg);
			}

			.scene:nth-child(2) .info header {
				background-image: url(images/team/lanz_in.jpg);
			}

			.scene:nth-child(3) .info header {
				background-image: url(images/team/charlone_in.jpg);
			}

			/*************************************
			Fallback
			**************************************/
			.no-csstransforms3d .hero_container .poster, 
			.no-csstransforms3d .hero_container .info {
				position: relative;
			}

			/*************************************
			Media Queries
			**************************************/
			@media screen and (max-width: 60.75em){
				.scene {
					float: none;
					margin: 30px auto 60px;
				}
			}

        	.user-view{
	          height: 200px;
	        }
	        ul li a:hover{
	          font-size: 20px;
	          color: red;
	          transition: 0.3s
	        }
        </style>
	</head>
	<body>
		<?php include("preloader.php"); ?> 

	    <div class="fixed-action-btn">
	        <a href="#" data-target="slide-out" class="sidenav-trigger btn-floating btn-large pulse"><i class="material-icons">menu</i></a>
	    </div>
       <ul id="slide-out" class="sidenav">
          <li><div class="user-view">
            <div class="background">
              <img src="images/home/rizal_kun.jpg" class="responsive-img">
            </div>
          </div></li>
            
          <li><a href="index.php"><i class="material-icons">home</i>HOME</a></li>
          <li><a href="biography.php"><i class="material-icons">book</i>BIOGRAPHY</a></li>
          <li><a href="works.php"><i class="material-icons">work</i>WORK</a></li>
          <li><a href="influence.php"><i class="material-icons">assignment</i>INFLUENCE</a></li>
          <li><a href="game.php"><i class="material-icons">videogame_asset</i>GAME</a></li>
          <li><a href="team.php"><i class="material-icons">group</i>TEAM</a></li>
          <li><a id="side_link" href="citations.php"><i class="material-icons">bookmark</i>CITATIONS</a></li>
          
          
        </ul>
        <h1 class="center" >Meet the team</h1>
        <p class="center" >Individual commitment to a group effort--that is what makes a team work, a company work, a society work, a civilization work.</p>
		<div class="containers">
			 
			<div class="wrapper">
				<ul class="stage clearfix">

					<li class="scene">
						<div class="hero_container" onclick="return true">
							<div class="poster"></div>
							<div class="info">
								<header>
									<h1>John Paul P Montilla</h1>
								</header>
								<p>
									John Paul Montilla<br/><br/>
									Bachelor of Science in Computer Science<br/><br/>
									Technological University of the Philippines
								</p>
							</div>
						</div>
					</li>

					<li class="scene">
						<div class="hero_container" onclick="return true">
							<div class="poster"></div>
							<div class="info">
								<header>
									<h1>Lanz Navarro</h1>
								</header>
								<p>
									Lanz Navarro<br/><br/>
									Bachelor of Science in Computer Science<br/><br/>
									Technological University of the Philippines
								</p>
							</div>
						</div>
					</li>

					<li class="scene">
						<div class="hero_container" onclick="return true">
							<div class="poster"></div>
							<div class="info">
								<header>
									<h1>Charlone Feliep Poserio</h1>
								</header>

								<p>
									Charlone Feliep Poserio<br/><br/>
									Bachelor of Science in Computer Science<br/><br/>
									Technological University of the Philippines
								</p>
							</div>
						</div>
					</li>

				</ul>
			</div><!-- /wrapper -->
		</div><!-- /container -->

	<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
	<script>
        $(document).ready(function(){
          $('.sidenav').sidenav();
        });
    </script>
	</body>
</html>