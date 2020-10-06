<!doctype html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Rizal Puzzle Game</title>
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <script src="https://d309knd7es5f10.cloudfront.net/createjs_1.1_min.js"></script>
    <script>
        var zon = true;
        var zns = false;
    </script>
    <script src="https://d309knd7es5f10.cloudfront.net/zim_6.9.0.js"></script>

    <script>
        function shuffle(array) {
            var currentIndex = array.length, temporaryValue, randomIndex;
            while (0 !== currentIndex) {
                randomIndex = Math.floor(Math.random() * currentIndex);
                currentIndex -= 1;
                temporaryValue = array[currentIndex];
                array[currentIndex] = array[randomIndex];
                array[randomIndex] = temporaryValue;
            }
            return array;
        }
        var scaling = "fit";
        var width = 1024;
        var height = 768;
        var countPieces = 0;
        var totalPieces = 0;
        var frame = new Frame(scaling, width, height);
        frame.on("ready", function(){
            zog("ready from ZIM Frame");

            var stage = frame.stage;
            var stageW = frame.width;
            var stageH = frame.height;

            var puzzleX;
            var puzzleY;
            frame.outerColor = "#444";
            frame.color = "#ddd";

            var con = new Container

            var pictures = ["rcbc.jpg","tallest.jpg","twopeso.jpg","twopesos.jpg"];
            var indexes = [0, 1, 2, 3];
            pictures = shuffle(pictures);
            indexes = shuffle(indexes);

            var imageObj = [];
            var piecesArrayObj = [];
            frame.loadAssets([pictures[indexes[0]]], "assets/");

            var label = new Label({
               text:"CLICK",
               size:60,
               font:"courier",
               color:"orange",
               rollColor:"red",
               fontOptions:"italic bold"
            });
            stage.addChild(label);
            label.x = label.y = 20;
            label.on("click", function(){zog("clicking");});

            frame.on("complete", function(){

                imageObj = frame.asset(pictures[indexes[0]]).clone();
                imageObj.addTo(con);
                imageObj.alpha = 0.2;

                var piecesArray = new Array();
                var horizontalPieces = 5;
                var verticalPieces = 4;
                var obj = getQueryString();
                zog(obj)
                if(obj){
                   horizontalPieces = obj.row;
                   verticalPieces = obj.column;
                }
                var imageWidth = imageObj.width;
                var imageHeight = imageObj.height;
                var pieceWidth = Math.round(imageWidth / horizontalPieces);
                var pieceHeight = Math.round(imageHeight / verticalPieces);
                var gap = 40;
                totalPieces = horizontalPieces*verticalPieces;

                puzzleX = frame.width/2-imageWidth/2;
                puzzleY = frame.height/2-imageHeight/2;
                imageObj.pos(puzzleX,puzzleY);
                zog(puzzleX,puzzleY);

                label.text = "Rizal's Puzzle "+countPieces+"/"+totalPieces;


                for (j = 0; j < verticalPieces; j++){
                    piecesArrayObj[j] = [];
                    for (i = 0; i < horizontalPieces; i++){
                        var n = j + i * verticalPieces;

                        var offsetX = pieceWidth * i;
                        var offsetY = pieceHeight * j;

                        var x8 = Math.round(pieceWidth / 8);
                        var y8 = Math.round(pieceHeight / 8);

                        piecesArrayObj[j][i] = new Object();
                        piecesArrayObj[j][i].right = Math.floor(Math.random() * 2);
                        piecesArrayObj[j][i].down = Math.floor(Math.random() * 2);

                        if (j > 0){
                            piecesArrayObj[j][i].up = 1 - piecesArrayObj[j - 1][i].down;
                        }
                        if (i > 0){
                            piecesArrayObj[j][i].left = 1 - piecesArrayObj[j][i - 1].right;
                        }

                        piecesArray[n] = new Rectangle({
                            width: pieceWidth,
                            height: pieceHeight,

                        });

                        var tileObj = piecesArrayObj[j][i];
                        var s = new Shape

                        var context = s.graphics;
                        s.drag();
                        s.mouseChildren = false;
                        s.addEventListener("pressup", function(e){
                            var mc = e.currentTarget;

                            var xx = Math.round(mc.x);
                            var yy = Math.round(mc.y);

                            if (xx < puzzleX+gap / 2 && xx > puzzleX-gap / 2 && yy < puzzleX+gap / 2 && yy > puzzleY-gap / 2){
                                 mc.x = puzzleX;
                                mc.y = puzzleY;
                                mc.noDrag();
                                mc.addTo(mc.parent,0);
                                mc.mouseChildren = false;
                                mc.mouseEnabled = false;
                                mc.hint.visible = false;
                                countPieces++;
                                label.text = "Rizal's Puzzle "+countPieces+"/"+totalPieces;
                                zog("countPieces",countPieces);
                                if(countPieces == totalPieces){
                                    var pane = new Pane({width:600,label:"You Solved The Puzzle!", height:250, modal:false, displayClose:false});
                                    var confirm = new Button(200, 40, "Play Again!", "green").center(pane).mov(0,70);
                                    confirm.on("click", function(){
                                        pane.hide();
                                        window.location.replace(window.location.pathname + window.location.search + window.location.hash);
                                    });
                                    pane.show();
                                }
                                stage.update();
                            }
                        });
                        context.setStrokeStyle(3,"round");
                        var commandi1 = context.beginStroke(createjs.Graphics.getRGB(0, 0, 0)).command;
                        var commandi = context.beginBitmapFill(imageObj.image).command;
                        context.moveTo(offsetX, offsetY);

                        if (j != 0) {
                            context.lineTo(offsetX + 3 * x8, offsetY);
                            if (tileObj.up == 1) {
                                context.curveTo(offsetX + 2 * x8, offsetY - 2 * y8, offsetX + 4 * x8, offsetY - 2 * y8);
                                context.curveTo(offsetX + 6 * x8, offsetY - 2 * y8, offsetX + 5 * x8, offsetY);
                            } else {
                                context.curveTo(offsetX + 2 * x8, offsetY + 2 * y8, offsetX + 4 * x8, offsetY + 2 * y8);
                                context.curveTo(offsetX + 6 * x8, offsetY + 2 * y8, offsetX + 5 * x8, offsetY);
                            }
                        }
                        context.lineTo(offsetX + 8 * x8, offsetY);
                        if (i != horizontalPieces - 1) {
                            context.lineTo(offsetX + 8 * x8, offsetY + 3 * y8);
                            if (tileObj.right == 1) {
                                context.curveTo(offsetX + 10 * x8, offsetY + 2 * y8, offsetX + 10 * x8, offsetY + 4 * y8);
                                context.curveTo(offsetX + 10 * x8, offsetY + 6 * y8, offsetX + 8 * x8, offsetY + 5 * y8);
                            } else {
                                context.curveTo(offsetX + 6 * x8, offsetY + 2 * y8, offsetX + 6 * x8, offsetY + 4 * y8);
                                context.curveTo(offsetX + 6 * x8, offsetY + 6 * y8, offsetX + 8 * x8, offsetY + 5 * y8);
                            }
                        }
                        context.lineTo(offsetX + 8 * x8, offsetY + 8 * y8);
                        if (j != verticalPieces - 1) {
                            context.lineTo(offsetX + 5 * x8, offsetY + 8 * y8);
                            if (tileObj.down == 1) {
                                context.curveTo(offsetX + 6 * x8, offsetY + 10 * y8, offsetX + 4 * x8, offsetY + 10 * y8);
                                context.curveTo(offsetX + 2 * x8, offsetY + 10 * y8, offsetX + 3 * x8, offsetY + 8 * y8);
                            } else {
                                context.curveTo(offsetX + 6 * x8, offsetY + 6 * y8, offsetX + 4 * x8, offsetY + 6 * y8);
                                context.curveTo(offsetX + 2 * x8, offsetY + 6 * y8, offsetX + 3 * x8, offsetY + 8 * y8);
                            }
                        }
                        context.lineTo(offsetX, offsetY + 8 * y8);
                        if (i != 0) {
                            context.lineTo(offsetX, offsetY + 5 * y8);
                            if (tileObj.left == 1) {
                                context.curveTo(offsetX - 2 * x8, offsetY + 6 * y8, offsetX - 2 * x8, offsetY + 4 * y8);
                                context.curveTo(offsetX - 2 * x8, offsetY + 2 * y8, offsetX, offsetY + 3 * y8);
                            } else {
                                context.curveTo(offsetX + 2 * x8, offsetY + 6 * y8, offsetX + 2 * x8, offsetY + 4 * y8);
                                context.curveTo(offsetX + 2 * x8, offsetY + 2 * y8, offsetX, offsetY + 3 * y8);
                            }
                        }
                        context.lineTo(offsetX, offsetY);
                        s.addTo(con);

                        var fill = new createjs.Graphics.Fill("red");

                        var hint = new Shape();
                        hint.mouseChildren = false;
                        hint.mouseEnabled = false;
                        s.hint = hint;
                        hint.graphics = context.clone(true);
                        hint.pos(puzzleX,puzzleY);
                        hint.graphics._fill = fill;
                        hint.graphics._fill.style = null;
                        hint.addTo(con,0);
                        s.animate({obj:{x:rand(-offsetX,frame.width-offsetX-pieceWidth),y:rand(-offsetY,frame.height-offsetY-pieceHeight)}, time:700});
                    }
                }
                con.addTo(stage);
                stage.update();
            });
            stage.update();
        });
    </script>
    <meta name="viewport" content="width=device-width, user-scalable=no" />
</head>

<body>
    <!-- canvas with id="myCanvas" is made by zim Frame -->
</body>

</html>
