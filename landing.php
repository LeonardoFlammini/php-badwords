<?php
$badWord = $_GET["badWord"];
$paragraph = $_GET["paragraph"];
$censoredParagraph = str_replace("$badWord", "", "$paragraph");

var_dump($badWord,$paragraph);


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>LANDING PAGE</title>
</head>
<body>
  <h2>Parola da censurare:</h2>
  <span style="display: block;"><?php echo $badWord ?></span>
  <h2>Paragrafo censurato:</h2>
  <p style="display: block;"><?php echo $censoredParagraph ?></p>
</body>
</html>