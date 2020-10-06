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
      <p class="bigger">Mi Ultimo Adios</p>
    </div>
    <hr/>
     
    <br>

    <div class="has-animation animation-ltr " data-delay="2000">
      <p class="text">Farewell, my adored Land, region of the sun caressed,<br/>
                      Pearl of the Orient Sea, our Eden lost,<br/>
                      With gladness I give you my Life, sad and repressed;<br/>
                      And were it more brilliant, more fresh and at its best,<br/>
                      I would still give it to you for your welfare at most.
      </p>
    </div>
        
    <br/>
    <div class="has-animation animation-ltr" data-delay="2100">
      <p class="text">On the fields of battle, in the fury of fight<br/>
                      Others give you their lives without pain or hesitancy,<br/>
                      The place does not matter: cypress laurel, lily white,<br/>
                      Scaffold, open field, conflict or martyrdom’s site,<br/>
                      It is the same if asked by home and Country.
      </p>
    </div>
    <br>
    <div class="has-animation animation-ltr" data-delay="2200">
      <p class="text">I die as I see tints on the sky b’gin to show<br/>
                      And at last announce the day, after a gloomy night;<br/>
                      If you need a hue to dye your matutinal glow,<br/>
                      Pour my blood and at the right moment spread it so,<br/>
                      And gild it with a reflection of your nascent light!

      </p>
    </div>
    <br>
    <div class="has-animation animation-ltr" data-delay="2300">
      <p class="text">My dreams, when scarcely a lad adolescent,<br/>
                      My dreams when already a youth, full of vigor to attain,<br/>
                      Were to see you, gem of the sea of the Orient,<br/>
                      Your dark eyes dry, smooth brow held to a high plane<br/>
                      Without frown, without wrinkles and of shame without stain<br/>
      </p>
    </div>
    <br>
    <div class="has-animation animation-ltr" data-delay="2400">
      <p class="text">My life’s fancy, my ardent, passionate desire,<br/>
                      Hail! Cries out the soul to you, that will soon part from thee;<br/>
                      Hail! How sweet ’tis to fall that fullness you may acquire;<br/>
                      To die to give you life, ‘neath your skies to expire,<br/>
                      And in your mystic land to sleep through eternity!
      </p>
    </div>
    <br>


    <div class="has-animation animation-ltr" data-delay="2500">
      <p class="text">If over my tomb some day, you would see blow,<br/>
                      A simple humble flow’r amidst thick grasses,<br/>
                      Bring it up to your lips and kiss my soul so,<br/>
                      And under the cold tomb, I may feel on my brow,<br/>
                      Warmth of your breath, a whiff of your tenderness.
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
      <p class="text">Let the burning sun the raindrops vaporize<br/>
                      And with my clamor behind return pure to the sky;<br/>
                      Let a friend shed tears over my early demise;<br/>
                      And on quiet afternoons when one prays for me on high,<br/>
                      Pray too, oh, my Motherland, that in God may rest I.

      </p>
    </div>
    <br> 
    <div class="has-animation animation-ltr" data-delay="2800">
      <p class="text">Pray thee for all the hapless who have died,<br/>
                      For all those who unequalled torments have undergone;<br/>
                      For our poor mothers who in bitterness have cried;<br/>
                      For orphans, widows and captives to tortures were shied,<br/>
                      And pray too that you may see your own redemption.
      </p>
    </div>
    <br>
    <div class="has-animation animation-ltr" data-delay="2900">
      <p class="text">And when the dark night wraps the cemet’ry<br/>
                      And only the dead to vigil there are left alone,<br/>
                      Don’t disturb their repose, don’t disturb the mystery:<br/>
                      If you hear the sounds of cittern or psaltery,<br/>
                      It is I, dear Country, who, a song t’you intone.
      </p>
    </div>
    <br>
    <div class="has-animation animation-ltr" data-delay="3000">
      <p class="text">And when my grave by all is no more remembered,<br/>
                      With neither cross nor stone to mark its place,<br/>
                      Let it be plowed by man, with spade let it be scattered<br/>
                      And my ashes ere to nothingness are restored,<br/>
                      Let them turn to dust to cover your earthly space.
      </p>
    </div>
    <br>
    <div class="has-animation animation-ltr" data-delay="3100">
      <p class="text">Then it doesn’t matter that you should forget me:<br/>
                      Your atmosphere, your skies, your vales I’ll sweep;<br/>
                      Vibrant and clear note to your ears I shall be:<br/>
                      Aroma, light, hues, murmur, song, moanings deep,<br/>
                      Constantly repeating the essence of the faith I keep.

      </p>
    </div>
    <br>
    <div class="has-animation animation-ltr" data-delay="3200">
      <p class="text">My idolized Country, for whom I most gravely pine,<br/>
                      Dear Philippines, to my last goodbye, oh, harken<br/>
                      There I leave all: my parents, loves of mine,<br/>
                      I’ll go where there are no slaves, tyrants or hangmen<br/>
                      Where faith does not kill and where God alone does reign.

      </p>
    </div>
    <br>
    <div class="has-animation animation-ltr" data-delay="3300">
      <p class="text">Farewell, parents, brothers, beloved by me,<br/>
                      Friends of my childhood, in the home distressed;<br/>
                      Give thanks that now I rest from the wearisome day;<br/>
                      Farewell, sweet stranger, my friend, who brightened my way;<br/>
                      Farewell, to all I love. To die is to rest.

      </p>
    </div>
    <br> 
     
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