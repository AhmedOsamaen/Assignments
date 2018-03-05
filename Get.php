<html>
<head><title>Movie Report of <?php echo $_GET['t']; ?> </title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/3/w3.css">
	<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
</head>
<style>
html, body, h1, h2, h3, h4, h5, h6 {
  font-family: "Comic Sans MS", cursive, sans-serif;
}
</style>
<body>




<?php
error_reporting(0);
$get = json_decode(file_get_contents('http://ip-api.com/json/'),true);
date_default_timezone_set($get['timezone']);
$movie = $_GET['t'];
$moviei=$_GET['i'];
if($movie==null&&$moviei!=null)
{$string="http://www.omdbapi.com/?i=".$moviei."&apikey=ad8c2d0f";}
else{
 $string = "http://www.omdbapi.com/?t=".$movie."&apikey=ad8c2d0f";
}
 
 $data = json_decode(file_get_contents($string),true);


 
 
 
 $title = "<b>Title:".$data['Title']."</b><br>";
 $rating="<b>IMDB rating:".$data['imdbRating']."</b><br>";
 $year  = "<b>Year:".$data['Year']."</b><br>";
 $released ="<b>Released:".$data['Released']."</b><br>";
 $runtime ="<b>Runtime:".$data['Runtime']."</b><br>";
 $genre ="<b>Genre:".$data['Genre']."</b><br>";
 $director ="<b>Director:".$data['Director']."</b><br>";
 $actors = "<b>Actors:".$data['Actors']."</b><br>";
 $plot = "<b>Plot:".$data['Plot']."</b><br>";
 $poster2="<b>Poster:".$data['Poster']."</b><br>";
 $imageData = base64_encode(file_get_contents($poster2));
 
 
?>

	<div class="w3-display-container w3-wide">
		<img src="http://www.designbolts.com/wp-content/uploads/2014/03/Blue-Blur-Background1.jpg" style="width:100%;height:100%;" class="w3-image">
		  <div class="w3-display-topmiddle w3-margin-top">
				
		  </div>
	
	
	<div class="w3-display-middle w3-margin-top w3-padding-top">
		<div class="w3-animate-left w3-margin-top"><br><br><br>
<h1 class="w3-xlarge">

			<?php echo '<img src="data:image/jpeg;base64,'.$imageData.'">';?>
			<?php echo $title; ?>
			<?php echo $rating;?>
			<?php echo $year; ?>
			<?php echo $released; ?>
			<?php echo $runtime; ?>
			<?php echo $genre; ?>
			<?php echo $director; ?>
			<?php echo $actors; ?>
			<?php echo $plot; ?>
			</h2>
		</div>
		
	</div>
	
	</div>
</body>
</html>
