<!DOCTYPE html>
<html>
<head>
	<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<title>RIZAL-KUN Final</title>
</head>
<body>
	

<?php
if (isset($_POST['insert'])) {
	$num1 = $_POST['group1'];
	$num2 = $_POST['group2'];
	$num3 = $_POST['group3'];
	$num4 = $_POST['group4'];
	$num5 = $_POST['group5'];
	$num6 = $_POST['group6'];
	$num7 = $_POST['group7'];
	$num8 = $_POST['group8'];
	$num9 = $_POST['group9'];
	$num10 = $_POST['group10'];
	$a=array("b","c","d","a","c","b","a","c","b","b");
	$b=array();
	$score = 0;
	if ($num1==$a[0]){
		$score++;
		array_push($b,"correct");
	}
	else{
		array_push($b,"wrong");
	}
	if ($num2==$a[1]){
		$score++;
		array_push($b,"correct");
	}
	else{
		array_push($b,"wrong");
	}
	
	if ($num3==$a[2]){
		$score++;
		array_push($b,"correct");
	}
	else{
		array_push($b,"wrong");
	}
	if ($num4==$a[3]){
		$score++;
		array_push($b,"correct");
	}
	else{
		array_push($b,"wrong");
	}
	if ($num5==$a[4]){
		$score++;
		array_push($b,"correct");
	}
	else{
		array_push($b,"wrong");
	}
	if ($num6==$a[5]){
		$score++;
		array_push($b,"correct");
	}
	else{
		array_push($b,"wrong");
	}
	if ($num7==$a[6]){
		$score++;
		array_push($b,"correct");
	}
	else{
		array_push($b,"wrong");
	}
	if ($num8==$a[7]){
		$score++;
		array_push($b,"correct");
	}
	else{
		array_push($b,"wrong");
	}
	if ($num9==$a[8]){
		$score++;
		array_push($b,"correct");
	}
	else{
		array_push($b,"wrong");
	}
	if ($num10==$a[9]){
		$score++;
		array_push($b,"correct");
	}
	else{
		array_push($b,"wrong");
	}

}
?>
<?php
	$que_arr=array(
		"Who among the following influenced Rizal to keep falling in love with other women?",
		"Rizals work which received the highest award in a competition in arts and literature. It specifically encourages the youth to improve so it could uplift its country.",
		"Monument consisting of Rizal’s bronze sculpture with an obelisk backdrop where his remains are store. It was also unveiled on December 30, 1913.",
		"Law mandating to teach the life works and writings of Rizal.",
		"Why was Crisostomo Ibarra exocommunicated in the novel, Noli Me Tangere?",
		"The daughter of Capitan Tiago whom Crisostomo Ibarra loves.",
		"The outlaw who helped Ibarra escaped after he was chased by civil guards.",
		"How did Simoun’s plan to assassinate high ranking officials and friars prevented?",
		"Jose Rizal’s Full Name",
		"The period of Rizal’s life that developed his industriousness and creativeness?"
	);
	$ans_arr=array(
		"Leonor Rivera",
		"A La Juventud Filipina",
		"Luneta’s Rizal Monument",
		"Republict Act No. 1425",
		"because he tried to kill Fray Damaso",
		"Maria Clara",
		"Elias",
		"Basilio saw Isagani and out of pity, he told all Simoun’s plan",
		"Dr. José Protasio Rizal Mercado y Alonso Realonda",
		"First Period(1861-1872)"
	);
?>


	<div class="container">
		<h1>QUIZ RESULT</h1><hr/>
		<h3>TOTAL SCORE: <?php echo $score?></h3>
		<div class="row">
			<div class="col s12">
				<?php
					for ($i=0; $i < 10; $i++) { 
						$nums = $i+1;
						echo "<p> $nums. $que_arr[$i]</p>";
						if ($b[$i]=="correct") {?>
							<p><i class="material-icons" style="color: green">check_circle</i>Your Answer: <?php echo $ans_arr[$i]?></p><br/>
						<?php }
						if ($b[$i]=="wrong") {?>
							<p><i class="material-icons" style="color: red">close</i>Correct Answer: <?php echo $ans_arr[$i]?></p><br/>
						<?php }
				} ?>
			</div>
		</div>
		<hr/>
		<a href="quiz_game.php" class="btn-large blue">Play Again</a>
		<a href="game.php" class="btn-large red">Quit</a>
		<br/><br/>
		
		
	</div>
	


	<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script>
      $(document).ready(function(){
	    $('.modal').modal();
	  });
         
    </script>

</body>
</html>




