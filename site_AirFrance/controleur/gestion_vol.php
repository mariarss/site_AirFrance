<h2>Gestion des vols</h2>
<?php
$unvol = null;

if (isset($_GET['action']) && isset($_GET['idvol']))
{
    $action = $_GET['action'];
    $idvol = $_GET['idvol'];
    switch ($action){
        case "supp" : deleteVol ($idvol) ; break;
        case "edit" :
        $unvol = selectWhereVol($idvol) ;

        break;
    }
}
     require_once ("vue/vue_insert_vol.php");
     if (isset($_POST['Valider'])){
          //insertion de la ligne dans la table ligne
          insertVol ($_POST);
          echo "<br> Insertion réussie du vol.";

     }
     if (isset($_POST['Modifier']))
{
   updateVol ($_POST);
   //recharger la page
   
    header(("location: index.php?page=3"));
    }
     $lesVols = selectAllvol();
     require_once ("vue/vue_select_vol.php");
    
?>