<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>RIZAL-KUN</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700i" rel="stylesheet">
    <link rel="shortcut icon" type="image/x-icon" href="images/home/logo.png" />
    
    <link rel="stylesheet" type="text/css" href="styles/style3.css">
    

    <style>
        body{
            padding: 0;
            margin: 0;
        }
        html {
          font-family: 'Roboto Condensed', sans-serif;
        }
        #mainnav {
          position: absolute;
          font-family: 'Roboto Condensed', sans-serif;
          z-index: 1;
            
        }
        #mainnav li {
          margin: 45px 0;
          left: -550px;
          position: relative;
          display: none;
            
        }
        #mainnav a {
          color: white;   
          text-decoration: none;
          font-size: 20px;
        } 
         #mainnav a:hover {
          color: black;
          font-weight: bolder;
          font-size: 2em;
          transition: 0.3s
         }

        ul li{
            list-style: none;
            margin-top: -50px;
            
        }
        .hamb {
          position: absolute;
          top: 20px;
          left: 20px;
          font-size: 2.5em;
          z-index: 1;
        }
        .hamb a {
          color: #fff;
          text-decoration: none;
        }
        html, body, .hero {
          height: 100%;
        }
        .hero {
          width: 100%;
          min-height: 600px;
          background-image:url('images/home/rizal_m.jpg');
          background-size: cover;
        }
        h1 {
          font-size: 5em;
          color: orange;
          text-align: center;
          font-weight: 700;
          font-family: 'Roboto Condensed', sans-serif;
          width: 100%;
          position: absolute;
          top: 42%;
          left: 50%;
          -webkit-transform: translate(-50%, -50%);
          transform: translate(-50%, -50%);
        }
        #bubble {
          width: 100%;
          height: 100%;
          opacity: 0.9;
          position: fixed;
          display: none;
          z-index: 1;
          background: rgba(0, 0, 0, .5);
        }
                
        .gap{
            color: white;
            margin-top: 10px;
            width: 300px;
        }
                
        #sur{
            text-align: center;
            font-size: 80px;
            letter-spacing: 4;
            color: orange;
        }
        #sub{
            text-align: center;
            font-size: 40px;
            letter-spacing: 4;
            color: black;
        }
    </style>
</head>
<body>
    <?php include("preloader.php"); ?> 

    <nav role='navigation' id="mainnav">
      <br><br><br>
      <ul class="gap">
        <li><a href="index.php">HOME</a></li>
        <li><a href="biography.php">BIOGRAPHY</a></li>
        <li><a href="works.php">WORKS</a></li>
        <li><a href="influence.php">INFLUENCE</a></li>
        <li><a href="game.php">GAMES</a></li>
        <li><a href="team.php">TEAM</a></li>
        <li><a href="citations.php">CITATIONS</a></li>
     
      </ul>
    </nav>  

    <div class="hamb">
      <a href="#"><i class="fa fa-bars" style="color: black"></i></a>
    </div>

    <div class="hero">
        <h1>José Protacio Rizal Mercado <br> <span id="sur">y Alonso Realonda</span><br/><span id="sub">Philippine National Hero</span></h1>
    </div>

    <canvas id="bubble"></canvas>

    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.10.3/jquery-ui.js"></script>
    <script>
      
        var w = window.innerWidth,
            h = window.innerHeight,
            canvas = document.getElementById('bubble'),
            ctx = canvas.getContext('2d'),
            rate = 60,
            arc = 100,
            time,
            count,
            size = 7,
            speed = 20,
            lights = new Array,
            colors = ['#d59254','#ffffff','#1f2839','#cf7693'];

        canvas.setAttribute('width',w);
        canvas.setAttribute('height',h);

        function init() {
          time = 0;
          count = 0;

          for(var i = 0; i < arc; i++) {
            lights[i] = {
              x: Math.ceil(Math.random() * w),
              y: Math.ceil(Math.random() * h),
              toX: Math.random() * 5 + 1,
              toY: Math.random() * 5 + 1,
              c: colors[Math.floor(Math.random()*colors.length)],
              size: Math.random() * size
            }
          }
        }

        function bubble() {
          ctx.clearRect(0,0,w,h);

          for(var i = 0; i < arc; i++) {
            var li = lights[i];
            
            ctx.beginPath();
            ctx.arc(li.x,li.y,li.size,0,Math.PI*2,false);
            ctx.fillStyle = li.c;
            ctx.fill();
            
            li.x = li.x + li.toX * (time * 0.05);
            li.y = li.y + li.toY * (time * 0.05);
            
            if(li.x > w) { li.x = 0; }
            if(li.y > h) { li.y = 0; }
            if(li.x < 0) { li.x = w; }
            if(li.y < 0) { li.y = h; }
          }
          if(time < speed) {
            time++;
          }
          timerID = setTimeout(bubble,1000/rate);
        }
        init();
        bubble(); 

        //navigation (this is my code)
        var animation = 'easeOutCubic';
            delay     = 60;

        $(document)
          .on('click', '.fa-bars', function(){
            var i = 0;
            $('nav').before($('#bubble'));
            $('#bubble').fadeIn();
            $('#mainnav').find('li').each(function(){
              var that = $(this);
              i++;
              (function(i, that){
                  setTimeout(function(){
                    that
                      .animate(
                        { 'left'   : '20px' }, 
                        { duration : 350, 
                          easing   : animation })
                      .fadeIn({queue: false});
                  }, delay * i)
              }(i, that))
            }); 
            $('.fa-bars').fadeOut(100,function(){
              $(this)
                .removeClass('fa-bars')
                .addClass('fa-times')
                .fadeIn(); 
            });
          })
          .on('click', '#bubble, .fa-times', function(){ 
            $('#bubble').fadeOut();
            $('#mainnav').find('li')
              .animate(
                { 'left'   : '-550px' }, 
                { duration : 250 })
              .fadeOut({queue: false});
            
            $('.hamb').fadeOut(100, function(){
              $(this)
                .find($('i'))
                .removeClass('fa-times')
                .addClass('fa-bars')
                .end()
                .fadeIn();
            });
          }) 
        
    </script>
</body>
</html>