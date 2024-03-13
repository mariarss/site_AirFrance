<h2> Gestion du Pilote</h2>
<?php
$unpilote = null;

if (isset($_GET['action']) && isset($_GET['idpilote']))
{
    $action = $_GET['action'];
    $idpilote = $_GET['idpilote'];
    switch ($action){
        case "supp" : deletePilote ($idpilote) ; break;
        case "edit" :
        $unpilote = selectWherePilote($idpilote) ;

        break;
    }
}
    require_once("vue/vue_insert_pilote.php");
    if(isset($_POST['Valider'])){
        insertPilote($_POST);
        echo"<br> Insertion réussie du Pilote";
        
}

if (isset($_POST['Modifier']))
{
   updatePilote ($_POST);
   //recharger la page
   
    header(("location: index.php?page=3"));
    }
    $lesPilotes = selectAllPilotes();
    require_once("vue/vue_select_pilote.php");
?>