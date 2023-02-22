<?php

session_start(); 
$_SESSION["langue"] = "deu";

if(isset($_POST['delete']))
{
    session_destroy();
    echo "
        <p>Sitzung gelöscht, Sie können zum Indexmenü zurückkehren.</p>
    ";
}

?>

<!doctype html>

<head>
  <meta charset="utf-8">
  <title>SESSION - Deu</title>
  <link rel="shortcut icon" href="images/cadena.png" type="image/x-icon">
  <link rel="stylesheet" href="style.css">
</head>

<html>
    <body>
        <p>
            Ich bin die deutsche Seite.
        </p>

        <a href="index.php">
            > index <
        </a>

        <form method='post'> 
            <button name='delete' value='delete'>Delete session</button>
        </form>
    </body>
</html>