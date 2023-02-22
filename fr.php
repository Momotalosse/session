<?php

session_start(); 
$_SESSION["langue"] = "fr";


if(isset($_POST['delete']))
{
    session_destroy();
    echo "
        <p>Session suprimée, vous pouvez retourner sur le menu index.</p>
    ";
}

?>

<head>
  <meta charset="utf-8">
  <title>SESSION - Fr</title>
  <link rel="shortcut icon" href="images/cadena.png" type="image/x-icon">
  <link rel="stylesheet" href="style.css">
</head>

<html>

    <body>
        <p>
            Je suis la page française!
        </p>

        <a href="index.php">
            > index <
        </a>

        <form method='post'> 
            <button name='delete' value='delete'>Delete session</button>
        </form>
    </body>

</html>