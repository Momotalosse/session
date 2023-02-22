<?php

session_start(); 
$_SESSION["langue"] = "en";

if(isset($_POST['delete']))
{
    session_destroy();
    echo "
        <p>Session deleted, you can return to the index menu.</p>
    ";
}

?>

<head>
  <meta charset="utf-8">
  <title>SESSION - En</title>
  <link rel="shortcut icon" href="images/cadena.png" type="image/x-icon">
  <link rel="stylesheet" href="style.css">
</head>

<html>

    <body>
        <p>
            I am the English page.
        </p>

        <a href="index.php">
            > index <
        </a>

        <form method='post'> 
            <button name='delete' value='delete'>Delete session</button>
        </form>
    </body>

</html>