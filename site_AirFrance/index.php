<?php
    require_once("modele/modele.php"); //inclus le fichier
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <link href="style.css" rel="stylesheet">
</head>

    <head>
        <title> Site Air France </title>
    </head>
    <body>
        <center>
            <h1> Gestion des vols Air France </h1>
            <a href="index.php?page=1">
                <img src="images/logojpg.jpg" height="100" width="100"> </a>
            <a href="index.php?page=3">
                <img src="images/pilotejpg.jpg" height="100" width="100"> </a>
                <a href="index.php?page=4">
                <img src="images/avionpng.png" height="100" width="100"> </a>
            <a href="index.php?page=5">
                <img src="images/voljpg.jpg" height="100" width="100"> </a>
                

            <?php
            if (isset($_GET['page'])){
                $page = $_GET['page'];
            }else{
                $page =1;
            }
            switch ($page){
                case 1 : require_once ("controleur/home.php"); break;
                case 3 : require_once ("controleur/gestion_pilote.php"); break;
                case 4 : require_once ("controleur/gestion_avion.php"); break;
                case 5 : require_once ("controleur/gestion_vol.php"); break;
                
            }
            ?>
        </center>
    </body>
</html>