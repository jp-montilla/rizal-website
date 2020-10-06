<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>A La Juventud Filipina</title>
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
      <p class="bigger">A La Juventud Filipina</p>
    </div>
    <hr/>
     
    <br>

    <div class="has-animation animation-ltr " data-delay="2000">
      <p class="text">Itaas ang iyong<br/>
                      Malinis na noo<br/>
                      Sa araw na ito,<br/>
                      Kabataang Pilipino!<br/>
                      Igilas mo na rin ang kumikinang mong<br/>
                      Mayamang sanghaya<br/>
                      Magandang pag-asa ng Bayan kong Mutya!

      </p>
    </div>
        
    <br/>
    <div class="has-animation animation-ltr" data-delay="2100">
      <p class="text">Makapangyarihang wani’y lumilipad,<br/>
                      At binibigyang ka ng muning mataas,<br/>
                      Na maitutulad ng ganap na lakas,<br/>
                      Mabilis na hangin, sa kanyang paglipad,<br/>
                      Malinis na diwa, sa likmuang hangad.

      </p>
    </div>
    <br>
    <div class="has-animation animation-ltr" data-delay="2200">
      <p class="text">Ikaw ay bumaba<br/>
                      Na taglay ang ilaw<br/>
                      Ng sining at agham<br/>
                      Sa paglalabanan,<br/>
                      Bunying kabataan,<br/>
                      At iyong kalagiun ang gapos mong iyang<br/>
                      Tanikalang bakal na kinatalian<br/>
                      Ng matulain mong waning kinagisnan.


      </p>
    </div>
    <br>
    <div class="has-animation animation-ltr" data-delay="2300">
      <p class="text">Ikaw na lagi nang pataas nag lipad,<br/>
                      Sa pakpak ng iyong Mayamang pangarap,<br/>
                      Na iyong Makita sa Ilimpong ulap<br/>
                      Ang lalong matamis<br/>
                      Na mag tulaing pinakananais,<br/>
                      Ng higit ang sarap <br/>
                      Kaysa “ambrosia” at “nectar” na awagas <br/>
                      Ng mga bulaklak.

      </p>
    </div>
    <br>
    <div class="has-animation animation-ltr" data-delay="2400">
      <p class="text">Ikaw na may tinig<br/>
                      Na buhat sa langit,<br/>
                      Kaagaw sa tamis<br/>
                      Na kay Filomenang Malinis na hiomig,<br/>
                      Sa gabing tahimik<br/>
                      Ay pinaparam mo ang sa taong sakit,<br/>
                      Ikaw, na ang batong sukdulan ng tigas<br/>
                      Sa lakas ng iyong diwa’y nagagawad<br/>
                      Ng buhay at gilas,<br/>
                      At ang alaalang makislap<br/>
                      Ay nabibigayan ng kamay mong masikap<br/>
                      Ng buhay na walang masasabing wakes.

      </p>
    </div>
    <br>


    <div class="has-animation animation-ltr" data-delay="2500">
      <p class="text">At ikaw, na siyang<br/> 
                      Sa may iba’t ibang<br/>
                      Balani ni Febong kay Apelas mahal,<br/>
                      Gayundin sa lambong ng katalagahan,<br/>
                      Na siayng sa guhit ng pinsel mong tanga’y<br/>
                      Nakapaglilipat sa kayong alinman;

      </p>
    </div>
    <br>

    <div class="has-animation animation-ltr" data-delay="2600">
      <p class="text">Let the moon with soft, gentle light me descry,<br/>
                      Let the dawn send forth its fleeting, brilliant light,<br/>
                      In murmurs grave allow the wind to sigh,<br/>
                      And should a bird descend on my cross and alight,<br/>
                      Let the bird intone a song of peace o’er my site.
      </p>
    </div>
    <br>

    <div class="has-animation animation-ltr" data-delay="2700">
      <p class="text">Hayo na’y tumakbo! Sapagka’t ang banal<br/>
                      Na ningas ng wani’y nais maputungan <br/>
                      Kayong naglalama’y,<br/>
                      At maipamansag ng tambuling tangan,<br/>
                      Saan man humanggan,<br/>
                      Ang ngalan ng tao, sa di matulusang<br/>
                      Lawak ng palibot na nakasasaklaw.


      </p>
    </div>
    <br> 
    <div class="has-animation animation-ltr" data-delay="2800">
      <p class="text">Malwalhating araw,<br/>
                      Ito, Pilipinas, sa lupang tuntungan!<br/>
                      Ang Lumikha’y dapat na pasalamatan,<br/>
                      Dahilan sa kanyang mapagmahal,<br/>
                      Na ikaw’y pahatdan.

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