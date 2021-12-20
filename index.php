<?php

$string = "Ciao, questa è una stringa in php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>First php</title>
</head>
<body>
    <h2><?php echo $string ?> ed è lunga <?php echo strlen($string) ?> lettere.</h2>
    <h2><?php echo str_replace($_GET["censured"], "***", $string)?> ed è lunga <?php echo strlen(str_replace($_GET["censured"], "***", $string))?> lettere.</h2>
</body>
</html>