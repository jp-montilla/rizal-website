<!DOCTYPE html>
  <html>
    <head>

      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <link rel="shortcut icon" type="image/x-icon" href="images/home/logo.png" />

      <link rel="stylesheet" type="text/css" href="styles/style3.css">
      <link rel="stylesheet" type="text/css" href="styles/period.css">
      <link rel="stylesheet" type="text/css" href="styles/family.css">
      <link rel="stylesheet" type="text/css" href="aos_styles/aos.css">
      <title>RIZAL-KUN Game</title>
      <style>
        .user-view{
          height: 200px;
        }
        ul li a:hover{
          font-size: 20px;
          color: red;
          transition: 0.3s
        }
        .collection a{
          font-size: 30px;
          height: 50px
        }
        .content_view{
          margin: 40px;
        }
        #left_most{
          background:#f3e5f5;
        }
        #right_most{
          background: #e3f2fd;
        }
        .head_er{
          margin-top: 50px;
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
          
        </ul>
     

      
      <div class="content_view">
        <h1 data-aos="fade-down-right" class="head_er">RIZAL GAME</h1>
        <hr><br/>
        <a href=""></a>
      

        <div class="row">

          <div class="col s12 m12 l3" id="left_most" data-aos="fade-right">
            <h4>Choose Game</h4><hr/><br/><br/>
            <div class="collection">
              <a href="quiz_game.php" class="collection-item"><i class="material-icons">create</i> Quiz Game</a>
              <a href="jigsaw.php" class="collection-item"><i class="material-icons">create</i> Puzzle Game</a>
            </div>
          </div>

          <div class="col s12 m12 l9" id="right_most" data-aos="fade-left">
            <h4>Game Details</h4><hr/>
            <div class="main-timeline-one">
              <div class="timeline" >
                <span><i class="material-icons" >assignment</i></span> 
                <a class="timeline-content"  >
                  <h3 class="title">QUIZ GAME DESCRIPTION</h3>
                  <br/>
                  <p class="description">
                    Answer a quiz game about Dr. Jose Rizal's life, work and writings!
                  </p>
                </a>    
              </div>
              <div class="timeline">
                  <span><i class="material-icons" >assignment</i></span> 
                  <a class="timeline-content"  >
                    <h3 class="title">PUZZLE GAME DESCRIPTION</h3>
                    <br/>
                    <p class="description">
                      Solve puzzle game with Dr. Jose Rizal's legacy!
                    </p>
                  </a>    
                </div>

            </div>
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
