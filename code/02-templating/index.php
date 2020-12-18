<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP in HTML</title>
</head>
<body>
  <h1>Templating</h1>
  <hr>

  <h3>Conditional</h3>

<?php 

$daytime = date("a");

if ($daytime == "am") {
?>
  <p>Definetely a nice <strong>morning</strong>!</p>

<?php } else {  ?>
  
  <p>Surely a nice <strong>afternoon</strong>!</p>

<?php } ?>

  <h3>Iterations</h3>
  <ul>

<?php 

$movies = [
  "Inception", 
  "Deadpool", 
  "Big trouble in Little China", 
  "Ghostbusters"
];

foreach( $movies as $movie ) {
  echo("<li>$movie</li>");
}

?>
  
  </ul>

</body>
</html>