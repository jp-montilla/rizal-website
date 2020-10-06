<!DOCTYPE html>
  <html>
    <head>

      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <link rel="shortcut icon" type="image/x-icon" href="images/home/logo.png" />

      <link rel="stylesheet" type="text/css" href="styles/style3.css">
      <link rel="stylesheet" type="text/css" href="styles/period.css">
      <link rel="stylesheet" type="text/css" href="aos_styles/aos.css">
      <title>RIZAL-KUN Works</title>
      <style>
        .user-view{
          height: 200px;
        }
        #side_link:hover{
          font-size: 20px;
          color: red;
          transition: 0.3s
        }
        a{
          font-size: 20px;
        }
        a:hover{
          color: red
        }
      </style>
    </head>
    <body>
      <?php include("preloader.php"); ?> 
      

      <div class="fixed-action-btn" >
        <a href="#" data-target="slide-out" class="sidenav-trigger btn-floating btn-large pulse"><i class="material-icons">menu</i></a>
      </div>
       <ul id="slide-out" class="sidenav">
          <li><div class="user-view">
            <div class="background">
              <img src="images/home/rizal_kun.jpg" class="responsive-img">
            </div>
          </div></li>
            
          <li><a id="side_link" href="index.php"><i class="material-icons">home</i>HOME</a></li>
          <li><a id="side_link" href="biography.php"><i class="material-icons">book</i>BIOGRAPHY</a></li>
          <li><a id="side_link" href="works.php"><i class="material-icons">work</i>WORK</a></li>
          <li><a id="side_link" href="influence.php"><i class="material-icons">assignment</i>INFLUENCE</a></li>
          <li><a id="side_link" href="game.php"><i class="material-icons">videogame_asset</i>GAME</a></li>
          <li><a id="side_link" href="team.php"><i class="material-icons">group</i>TEAM</a></li>
          <li><a id="side_link" href="citations.php"><i class="material-icons">bookmark</i>CITATIONS</a></li>
          
        </ul>
     

        <div class="container">
          <h1 data-aos="fade-down-right">CITATIONS</h1><hr><br/>
          <div data-aos="fade-left">
            <a href="https://www.biography.com/people/jos%C3%A9-rizal-39486">https://www.biography.com/people/jos%C3%A9-rizal-39486</a><br/>
            <a href="https://www.thoughtco.com/jose-rizal-hero-of-the-philippines-195677">https://www.thoughtco.com/jose-rizal-hero-of-the-philippines-195677</a><br/>
            <a href="https://www.britannica.com/biography/Jose-Rizal">https://www.britannica.com/biography/Jose-Rizal</a><br/>
            <a href="https://owlcation.com/humanities/jose-rizal">https://owlcation.com/humanities/jose-rizal</a><br/>
            <a href="https://www.geni.com/projects/Rizal-Family-of-the-Philippines/3704">https://www.geni.com/projects/Rizal-Family-of-the-Philippines/3704</a><br/>
            <a href="http://www.joserizal.ph/in01.html">http://www.joserizal.ph/in01.html</a><br/>
            <a href="https://www.tagaloglang.com/noli-tangere-english-summary/">https://www.tagaloglang.com/noli-tangere-english-summary/</a><br/>
            <a href="https://shairaleasprd.wordpress.com/2016/03/08/summary-el-filibusterismo/">https://shairaleasprd.wordpress.com/2016/03/08/summary-el-filibusterismo/</a><br/>
            <a href="http://laongdimasalang.blogspot.com/2013/03/a-painting-on-pair-of-mother-of-pearl.html">http://laongdimasalang.blogspot.com/2013/03/a-painting-on-pair-of-mother-of-pearl.html</a><br/>
            <a href="https://www.joserizal.com/rizals-paintings/">https://www.joserizal.com/rizals-paintings/</a><br/>
            <a href="https://ourhappyschool.com/history/saturnina-rizal-heros-second-mother">https://ourhappyschool.com/history/saturnina-rizal-heros-second-mother</a><br/>
            <a href="https://reyangco.blogspot.com/">https://reyangco.blogspot.com/</a><br/>
            <a href="https://www.joserizal.com/sa-kabataang-pilipino/">https://www.joserizal.com/sa-kabataang-pilipino/</a><br/>
            <a href="https://www.joserizal.com/my-last-farewell/">https://www.joserizal.com/my-last-farewell/</a><br/>
            <a href="https://www.joserizal.com/rizal-monuments-in-the-philippines/">https://www.joserizal.com/rizal-monuments-in-the-philippines/</a><br/>
            <a href="https://en.wikipedia.org/wiki/List_of_places_named_after_Jos%C3%A9_Rizal">https://en.wikipedia.org/wiki/List_of_places_named_after_Jos%C3%A9_Rizal</a><br/>
          </div>
        </div>
        



      <!--Import jQuery before materialize.js-->
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
