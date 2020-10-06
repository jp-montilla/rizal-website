<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>RIZAL-KUN Influence</title>
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
      <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700i" rel="stylesheet">
	  <link rel="shortcut icon" type="image/x-icon" href="images/home/logo.png" />

      <link rel="stylesheet" type="text/css" href="styles/style3.css">
      <link rel="stylesheet" type="text/css" href="aos_styles/aos.css">

    
    <style>
		body{    
	        background-image: url(pexels-photo-691569.jpeg);
	        background-position: center;
	        background-size: cover;
		    font-family: 'Roboto Condensed', sans-serif;
		    
		}
	    *{
		  margin: 0;
		  padding: 0;
		  -webkit-box-sizing: border-box;
          box-sizing: border-box;
		}
		 
		.wrapper_new{
		  width: 100%;
		  margin: 0 auto;
		  max-width: 80rem;
		  margin-top: 20px;
		  margin-bottom: 20px;
		}

		.col_newumnsss{
		  display: -webkit-box;   
		  display: flex;
		  flex-wrap: wrap;
		  -webkit-box-pack: center;
		  justify-content: center;
		    
		}

		.col_new{
		  width: calc(50% - 2rem);
		  margin: 1rem;
		  cursor: pointer;
		  margin-left: -5px;
		  margin-bottom: -5px;
		}

		.container_new{
		        transform-style: preserve-3d;
			    perspective: 1000px;
		}

		.front,
		.back{
		  background-size: cover;
			background-position: center; 
			transition: transform .7s cubic-bezier(0.4, 0.2, 0.2, 1);
		     backface-visibility: hidden;
			text-align: center;
			min-height: 500px;
			height: auto; 
			col_newor: #fff;
			font-size: 1rem;
		}

		.back{
		  background: #fff;  
		  background: linear-gradient(45deg,  #fd0d44 0%,#1463e2 100%);
		}

		.front:after{
			position: absolute;
		    top: 0;
		    left: 0;
		    z-index: 1;
		    width: 100%;
		    height: 100%;
		    content: '';
		    display: block;
		        
		    backface-visibility: hidden;
		     
		}
		.container_new:hover .front,
		.container_new:hover .back{
		     
		    transition: transform .7s cubic-bezier(0.4, 0.2, 0.2, 1);
		     
		}

		.back{
		    position: absolute;
		    top: 0;
		    left: 0;
		    width: 100%;
		}

		.inner{
		  
		    transform: translateY(-50%) translateZ(60px) scale(0.94);
		    top: 50%;
		    position: absolute;
		    left: 0;
		    width: 100%;
		    padding: 2rem;     
		    box-sizing: border-box;
		    outline: 1px solid transparent;     
		    perspective: inherit;
		    z-index: 2;
		}

		.container_new .back{    
		    transform: rotateY(180deg);     
		    transform-style: preserve-3d;
		}

		.container_new .front{
		    transform: rotateY(0deg);
		    transform-style: preserve-3d;
		}

		.container_new:hover .back{
		   transform: rotateY(0deg);
		   transform-style: preserve-3d;
		}

		.container_new:hover .front{
		      transform: rotateY(-180deg);
		      transform-style: preserve-3d;
		}

		.front .inner p{
		  font-size: 1rem;
		  margin-bottom: 2rem;
		  position: relative;
		}

		.front .inner p:after{
		  content: '';
		  width: 4rem;
		  height: 2px;
		  position: absolute;
		  background: #fff;
		  display: block;
		  left: 0;
		  right: 0;
		  margin: 0 auto;
		  bottom: -.75rem;
		}

		.front .inner span{
		  col_newor: fff;   
		  font-family: 'Roboto Condensed', sans-serif;   
		  font-weight: 300;
		}

		@media screen and (max-width: 64rem){
		  .col_new{
		    width: calc(33.333333% - 2rem);
		  }
		}

		@media screen and (max-width: 48rem){
		  .col_new{
		    width: calc(50% - 2rem);
		  }
		}

		@media screen and (max-width: 32rem){
		  .col_new{
		    width: 100%;
		    margin: 0 0 2rem 0;
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
        p{
        	color: white;
        	font-size: 20px;
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


    <div class="container">
    	<h1  data-aos="fade-down-right">RIZAL's INFLUENCE</h1><hr/>
    	<h6  data-aos="fade-left">Jose Rizal is remembered today throughout the Philippines for his brilliance, his courage, his peaceful resistance to tyranny, and his compassion. He is deeply loved by the Filipinos that he was hailed as a national hero and commemorated him by building him monuments, naming him after businesses and imbuing his ideals in schools, all in honor of his contributions in building a nationalistic nation.</h6><br/>
    	<h4  data-aos="fade-right">Rizal Law</h4>
    	<h6  data-aos="fade-left">Republic Act No. 1425, House Bill No. 5561, Senate Bill No. 438 also known as Rizal law mandates the teaching of life, works and writings of Rizal in all schools in the country. It was sponsored by Sen. Jose P. Laurel so to imbibe the great ideals and principles for which Rizal has died.</h6><br/>


    	<h4  data-aos="fade-right">Monuments</h4>
	    <div class="wrapper_new">   
	  		<div class="col_newumnsss">
				<div class="col_new" data-aos="fade-right">
					<div class="container_new">
						<div class="front" style="background-image: url(images/influence/monument-daet.jpg)">
						</div>
						<div class="back">
							<div class="inner">
							  <p>Lt. Colonel Antonio Sanz designed the First Rizal Monument which was erected in Daet, Camarines Norte in 1898 and completed in 1899.</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col_new" data-aos="fade-left">
					<div class="container_new">
						<div class="front" style="background-image: url(images/influence/luneta.jpg);">
						 </div>
						<div class="back">
							<div class="inner">
								<p>On December 30, 1913, Rizal’s Monument in Luneta was unveiled. It consists of Rizal’s bronze sculpture with an obelisk backdrop where his remains are stored. A plaque saying “To the memory of Jose Rizal, patriot and martyr, executed on Bagumbayan Field December 30 1896.” was included.</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col_new"  data-aos="fade-right">
					<div class="container_new">
						<div class="front" style="background-image: url(images/influence/tallest.jpg);">
							 
						</div>
						<div class="back">
							<div class="inner">
								<p>In Sta. Cruz, Laguna lies Rizal’s Tallest Monument, which was unveiled only in 2014 during the opening of National Games same year. the bronze statue was 7.9 meters tall.</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col_new"  data-aos="fade-left">
					<div class="container_new">
						<div class="front" style="background-image: url(images/influence/biggest.jpg)">
							 
						</div>
						<div class="back">
							<div class="inner">
								<p>In Calamba, Laguna lies Rizal’s Biggest Monument, which was unveiled in 2011. It’s 6.7 hectares big and 22 ft high.</p>
								<p>Lastly, there are also monuments of Rizal outside the country. Some are in Seattle, Washington, Madrid, Spain, Paris, France and even Sydney, Australia. Rizal was truly honored across the world.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div><br/><br/>


    	<h4  data-aos="fade-right">Places</h4>
    	<h6  data-aos="fade-left">There are many placed named after Jose Rizal. There was a province named after him (Rizal) and also municipalities namely: Rizal, Cagayan, Rizal, Kalinga, Rizal, Laguna, Rizal, Nueva Ecija, Rizal, Occidental Mindoro, Rizal, Palawan, and Rizal, Zamboanga del Norte.</h6><br/><br/>

    	<h4  data-aos="fade-right">Schools</h4>
    	<h6  data-aos="fade-left">There are many placed named after Jose Rizal. There was a province named after him (Rizal) and also municipalities namely: Rizal, Cagayan, Rizal, Kalinga, Rizal, Laguna, Rizal, Nueva Ecija, Rizal, Occidental Mindoro, Rizal, Palawan, and Rizal, Zamboanga del Norte.</h6>
		<div class="wrapper_new">   
	  		<div class="col_newumnsss">
				<div class="col_new"  data-aos="fade-right">
					<div class="container_new">
						<div class="front" style="background-image: url(images/influence/rnshs.jpg)">
							 
						</div>
						<div class="back">
							<div class="inner">
								<p>Rizal National Science High School</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col_new"  data-aos="fade-left">
					<div class="container_new">
						<div class="front" style="background-image: url(images/influence/rtu_new.png)">
							  
						</div>
						<div class="back">
							<div class="inner">
								<p>Rizal Technological University</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div><br/><br/>

		<h4  data-aos="fade-right">Bank</h4>
    	<h6  data-aos="fade-left">A leading national bank called RCBC or Rizal Commercial Banking Corporation</h6>
		<div class="wrapper_new">   
	  		<div class="col_newumnsss">
				<div class="col_new">
					<div class="container_new"  data-aos="fade-right">
						<div class="front" style="background-image: url(images/influence/rcbc_new.jpg)">
						 
						</div>
						<div class="back">
							<div class="inner">
								<p>RCBC or Rizal Commercial Banking Corporation</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div><br/><br/>
		<h4>Currency</h4>
		<div class="wrapper_new">   
	  		<div class="col_newumnsss">
				<div class="col_new"  data-aos="fade-right">
					<div class="container_new">
						<div class="front" style="background-image: url(images/influence/piso.jpg)">
							 
						</div>
						<div class="back">
							<div class="inner">
								<p>Philippine's current one peso coin.</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col_new" data-aos="fade-left">
					<div class="container_new">
						<div class="front" style="background-image: url(images/influence/two_peso_new.jpg)">
							 
						</div>
						<div class="back">
							<div class="inner">
								<p>Sample two peso bill.</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col_new"  data-aos="fade-right">
					<div class="container_new">
						<div class="front" style="background-image: url(images/influence/two_pesos.jpg)">
							 
						</div>
						<div class="back">
							<div class="inner">
								<p>Sample two peso bill.</p>
							</div>
						</div>
					</div>
				</div>

			</div>
	 	</div>
    </div>

	<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
 	<script src="aos_styles/aos.js"></script>
	<script>
	    AOS.init({
	      duration: 1000,
	    });
	</script>
 	<script>
        $(document).ready(function(){
          $('.sidenav').sidenav();
        });
    </script>
</body>
</html>