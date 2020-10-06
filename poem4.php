<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Mi Ultimo Adios</title>
  <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

  <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="styles/style3.css">

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

  <style>
        body {
        font-family: "Roboto Condensed", sans-serif;
        text-align: center;

      }
      div {
        display: inline-block;
      }
      .bigger {
        margin: 0;
        font-size: 60px;
        font-weight: 800;
        padding: 10px;
        text-transform: uppercase;
        color: #202020;
        display: inline-block;
        position: relative;
      }
      .text {
        max-width: 1000px;
        width: 100%;
        line-height: 24px;
        color: #404040;
        padding: 0;
        
      }
      .has-animation {
        position: relative;
      }
      .has-animation p, .has-animation img {
        opacity: 0;
      }
      .has-animation.animate-in p, .has-animation.animate-in img {
        animation: textHidden 0.1s 1.1s forwards;
      }
      .has-animation.animate-in:before, .has-animation.animate-in:after {
        content: '';
        position: absolute;
        top: 0;
        right: 0;
        height: 100%;
        z-index: 10;
      }
      .has-animation.animate-in:before {
        background-color: #f5047d;
      }
      .has-animation.animate-in:after {
        background-color: #20447c;
        animation-delay: 0.5s;
      }
      .has-animation.animation-ltr.animate-in:before {
        animation: revealLTR 1.8s ease;
      }
      .has-animation.animation-ltr.animate-in:after {
        animation: revealLTR 1s 0.6s ease;
      }
      .has-animation.animation-rtl.animate-in:before {
        animation: revealRTL 1.8s ease;
      }
      .has-animation.animation-rtl.animate-in:after {
        animation: revealRTL 1s 0.6s ease;
      }
      @keyframes revealRTL {
        0% {
          width: 0;
          right: 0;
        }
        65% {
          width: 100%;
          right: 0;
        }
        100% {
          width: 0;
          right: 100%;
        }
      }
      @keyframes revealLTR {
        0% {
          width: 0;
          left: 0;
        }
        65% {
          width: 100%;
          left: 0;
        }
        100% {
          width: 0;
          left: 100%;
        }
      }
      @keyframes textHidden {
        0% {
          opacity: 0;
        }
        100% {
          opacity: 1;
        }
      }
      .back_btn{
         padding: 10px;
      }
  </style>
</head>
<body>
  <?php include("preloader.php"); ?> 
  <br>
  <div class="back_btn">
    <a href="works.php" class="btn-floating btn-large pulse"><i class="material-icons">arrow_back</i></a>
  </div><br/>
    <div class="has-animation animation-ltr" data-delay="10">
      <p class="bigger">Kundiman</p>
    </div>
    <hr/>
     
    <br>

    <div class="has-animation animation-ltr " data-delay="2000">
      <p class="text">Truly hushed today<br/>
                      Are my tongue and heart<br/>
                      Harm is discerned by love<br/>
                      And joy flies away,<br/>
                      'Cause the Country was<br/>
                      Vanquished and did yield<br/>
                      Through the negligence<br/>
                      Of the one who led.
      </p>
    </div><br/>
    <div class="has-animation animation-ltr " data-delay="2200">
      <p class="text">But the sun will return to dawn;<br/>
                      In spite of everything<br/>
                      Subdued people<br/>
                      Will be liberated;<br/>
                      The Filipino name<br/>
                      Will return perhaps<br/>
                      And again become<br/>
                      In vogue in the world.
      </p>
    </div><br/>
    <div class="has-animation animation-ltr " data-delay="2400">
      <p class="text">We shall shed<br/>
                      Blood and it shall flood<br/>
                      Only to emancipate<br/>
                      The native land;<br/>
                      While the designated time<br/>
                      Does not come,<br/>
                      Love will rest<br/>
                      And anxiety will sleep.

      </p>
    </div>
        
     
    <br>
    <br>
   
    <br>


<script>
  
  $(document).ready(function() {
  $('.has-animation').each(function(index) {
    $(this).delay($(this).data('delay')).queue(function(){
      $(this).addClass('animate-in');
    });
  });
});

</script>
</body>
</html>