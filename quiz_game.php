<!DOCTYPE html>
  <html>
    <head>

      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <title>RIZAL-KUN Final</title>
    </head>
    <style>
    body{
      text-align: center;
      padding-top: 30px; 
    }
    .container p{
      margin-bottom: 50px;
    }
    </style>
    <body>


      <div class="container">
        <a href="game.php" class="btn-floating btn-large pulse" id="center"><i class="material-icons">arrow_back</i></a>
        <h1>QUIZ GAME</h1>
       
      </div>
      <div class="container">
        <form action="quiz.php" method="POST">
        <hr/>
        <p>1) Who among the following influenced Rizal to keep falling in love with other women? </p>
          <p class="row">
            <label class="col s3">
              <input class="with-gap" name="group1" value = "a" type="radio" required />
              <span>Consuelo Ortiga</span>
            </label>
          
            <label class="col s3">
              <input class="with-gap" name="group1" value = "b" type="radio" required />
              <span>Leonor Rivera</span>
            </label>
          
            <label class="col s3">
              <input class="with-gap" name="group1" value = "c" type="radio"  required />
              <span>Saturnina Rizal</span>
            </label>

            <label class="col s3">
              <input class="with-gap" name="group1" value = "d" type="radio"  required />
              <span>Teodora Alonso</span>
            </label>
          </p><hr>
          <p>2) Rizal’s work which received the highest award in a competition in arts and literature. It specifically encourages the youth to improve so it could uplift its country.</p>
          <p class="row">
            <label class="col s3">
              <input class="with-gap" name="group2" value = "a" type="radio"  required/>
              <span>A Pair of Mother of Pearl</span>
            </label>
          
            <label class="col s3">
              <input class="with-gap" name="group2" value = "b" type="radio"  required/>
              <span>El Filibusterismo</span>
            </label>
          
            <label class="col s3">
              <input class="with-gap" name="group2" value = "c" type="radio"   required/>
              <span>A La Juventud Filipina</span>
            </label>

            <label class="col s3">
              <input class="with-gap" name="group2" value = "d" type="radio"   required/>
              <span>Mi Ultimo Adios</span>
            </label>
          </p><hr>
          <p>3) Monument consisting of Rizal’s bronze sculpture with an obelisk backdrop where his remains are store. It was also unveiled on December 30, 1913.</p>
          <p class="row">
            <label class="col s3">
              <input class="with-gap" name="group3" value = "a" type="radio"  required/>
              <span>First Rizal Monument in Daet</span>
            </label>
          
            <label class="col s3">
              <input class="with-gap" name="group3" value = "b" type="radio"  required/>
              <span>Rizal’s Biggest Monument in Calamba</span>
            </label>
          
            <label class="col s3">
              <input class="with-gap" name="group3" value = "c" type="radio"   required/>
              <span>Rizal’s Tallest Monument in Sta.Cruz</span>
            </label>

            <label class="col s3">
              <input class="with-gap" name="group3" value = "d" type="radio"   required/>
              <span>Luneta’s Rizal Monument</span>
            </label>
          </p><hr>
          <p>4) Law mandating to teach the life works and writings of rizal.</p>
          <p class="row">
            <label class="col s3">
              <input class="with-gap" name="group4" type="radio" value="a"  required/>
              <span>Republic Act No. 1425</span>
            </label>
          
            <label class="col s3">
              <input class="with-gap" name="group4" type="radio" value="b"  required/>
              <span>Republic Act No. 1228</span>
            </label>
            <label class="col s3">
              <input class="with-gap" name="group4" type="radio" value="c"  required/>
              <span>House Bill No. 5563</span>
            </label>
          
            <label class="col s3">
              <input class="with-gap" name="group4" type="radio" value="d"   required/>
              <span>Senate Bill No. 428</span>
            </label>
          </p><hr>
          <p>5) Why was Crisostomo Ibarra exocommunicated in the novel, Noli Me Tangere?</p>
          <p class="row">
            <label class="col s3">
              <input class="with-gap" name="group5" type="radio" value="a"  required/>
              <span>because he planned to assassinate the higher officials in the banquet</span>
            </label>
          
            <label class="col s3">
              <input class="with-gap" name="group5" type="radio" value="b" required />
              <span>because he collaborated with dealers of drugs</span>
            </label>
          
            <label class="col s3">
              <input class="with-gap" name="group5" type="radio" value="c"  required/>
              <span>because he tried to kill Fray Damaso</span>
            </label>

            <label class="col s3">
              <input class="with-gap" name="group5" type="radio"  value="d" required />
              <span>because he was caught planning a revolution against the Spaniards</span>
            </label>
          </p><hr>

          <p>6) The daughter of Capitan Tiago whom Crisostomo Ibarra loves.</p>
          <p class="row">
            <label class="col s3">
              <input class="with-gap" name="group6" type="radio" value="a"  required/>
              <span>Dona Victorina</span>
            </label>
          
            <label class="col s3">
              <input class="with-gap" name="group6" type="radio" value="b" required />
              <span>Maria Clara</span>
            </label>
          
            <label class="col s3">
              <input class="with-gap" name="group6" type="radio" value="c"  required/>
              <span>Basilio</span>
            </label>

            <label class="col s3">
              <input class="with-gap" name="group6" type="radio"  value="d" required />
              <span>Sisa</span>
            </label>
          </p>
          <hr>
          <p>7) The outlaw who helped Ibarra escaped after he was chased by civil guards.</p>
          <p class="row">
            <label class="col s3">
              <input class="with-gap" name="group7" type="radio" value="a"  required/>
              <span>Elias</span>
            </label>
          
            <label class="col s3">
              <input class="with-gap" name="group7" type="radio" value="b" required />
              <span>Basilio</span>
            </label>
          
            <label class="col s3">
              <input class="with-gap" name="group7" type="radio" value="c"  required/>
              <span>Don Anastacio</span>
            </label>

            <label class="col s3">
              <input class="with-gap" name="group7" type="radio"  value="d" required />
              <span>Padre Salvi</span>
            </label>
          </p>
          <hr>
          <p>8) How did Simoun’s plan to assassinate high ranking officials and friars prevented?</p>
          <p class="row">
            <label class="col s3">
              <input class="with-gap" name="group8" type="radio" value="a"  required/>
              <span>The civil guards noticed the abnormalities in the Kerosene lamp</span>
            </label>
          
            <label class="col s3">
              <input class="with-gap" name="group8" type="radio" value="b" required />
              <span>Padre Damaso recognized Simoun’s disguise and eventually figured out his vicious plan</span>
            </label>
          
            <label class="col s3">
              <input class="with-gap" name="group8" type="radio" value="c"  required/>
              <span>Basilio saw Isagani and out of pity, he told all Simoun’s plan</span>
            </label>

            <label class="col s3">
              <input class="with-gap" name="group8" type="radio"  value="d" required />
              <span>Elias revealed Simoun’s identity</span>
            </label>
          </p><hr/>

          <p>9) Jose Rizal’s Full Name</p>
          <p class="row">
            <label class="col s3">
              <input class="with-gap" name="group9" value = "a" type="radio" required />
              <span>Jose Rizal Mercardo Realonda</span>
            </label>
          
            <label class="col s3">
              <input class="with-gap" name="group9" value = "b" type="radio" required />
              <span>Dr. José Protasio Rizal Mercado y Alonso Realonda</span>
            </label>
          
            <label class="col s3">
              <input class="with-gap" name="group9" value = "c" type="radio"  required />
              <span>José Protasio Rizal Realonda Mercado y Alonso</span>
            </label>

            <label class="col s3">
              <input class="with-gap" name="group9" value = "d" type="radio"  required />
              <span>Dr. Jose Protasio Rizal</span>
            </label>
          </p><hr>

          <p>10) The period of Rizal’s life that developed his industriousness and creativeness?</p>
          <p class="row">
            <label class="col s3">
              <input class="with-gap" name="group10" value = "a" type="radio" required />
              <span>Second Period(1872 -1882)</span>
            </label>
          
            <label class="col s3">
              <input class="with-gap" name="group10" value = "b" type="radio" required />
              <span>First Period(1861-1872)</span>
            </label>
          
            <label class="col s3">
              <input class="with-gap" name="group10" value = "c" type="radio"  required />
              <span>Fourth Period(1892 - 1896)</span>
            </label>

            <label class="col s3">
              <input class="with-gap" name="group10" value = "d" type="radio"  required />
              <span>Third Period (1882 -1892)</span>
            </label>
          </p><hr>





            <input type="submit" name="insert" value="SUBMIT" class="btn red right pulse">
        </form>
      </div>
                 

      <div style="height:100px"></div>

     


      <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script>
      $(document).ready(function(){

        $('.tabs').tabs();
      });
    </script>
  </body>
</html>
