<h2> Gestion des Avions</h2>
<?php
$unavion = null;

if (isset($_GET['action']) && isset($_GET['idavion']))
{
    $action = $_GET['action'];
    $idavion = $_GET['idavion'];
    switch ($action){
        case "supp" : deleteAvion ($idavion) ; break;
        case "edit" :
        $unavion = selectWhereAvion($idavion) ;

        break;
    }
}
require_once ("vue/vue_insert_avion.php");
if (isset($_POST['Valider'])){
     //insertion de la ligne dans la table avion
     insertAvion($_POST);
     echo "<br> Insertion de l'avion réussi.";

}

if (isset($_POST['Modifier']))
{
   updateAvion ($_POST);
   //recharger la page
   
   header(("location: index.php?page=4"));
}
    $lesAvions = selectAllAvion();
    require_once("vue/vue_select_avion.php");
    ?>