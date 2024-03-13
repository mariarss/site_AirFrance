<?php
    /*
    Dans ce fichier, on réalise toutes les fonctions de connexion à la BDD, 
    deconnexion de la BDD et éxecution de l'ensemble des requêtes sur les tables de la BDD: insert, 
    delete, update, select.
    */
    function connexion (){
        $connexion = mysqli_connect ("localhost3606", "root","", "Air_France_284");
        if ($connexion == null){
            echo "Erreur de connexion au serveur Mysql.";
        }
        return $connexion;
    }
    function deconnexion ($connexion){
            mysqli_close ($connexion);
    }
        /** * Gestion des pilote **/
    function insertPilote ($tab){
        $requete = "insert into pilote values (null, '"
        .$tab['nom']."', '"
        .$tab['prenom']."', '"
        .$tab['email']."', '"
        .$tab['mdp']."', '"
        .$tab['bip']."', '"
        .$tab['statut']."') ; ";
        $con = connexion (); // appel de la connexion
        mysqli_query($con, $requete); // execution de la requete
        deconnexion($con); // deconnexion de la base de données
    }
    function selectAllPilotes (){
        $requete ="select * from pilote;"; // ecrire la requete
        $con = connexion ();// connexion à la base de donnee
        $lesPilotes = mysqli_query($con, $requete);
        deconnexion($con);
        return $lesPilotes;
        // requete qui permet d'extraire les lignes

    }
    function deletePilote ($idpilote){
        $requete ="delete from ligne where idpilote=".$idpilote;
        $con= connexion();
        mysqli_query($con, $requete);
        deconnexion($con);
    }
    function updatePilote ($tab){
        $requete="update pilote set nom='"
        .$tab['nom']        ."' , prenom='"
        .$tab['prenom']       ."' , email='"
        .$tab['email']         ."' , mdp='"
        .$tab['mdp']         ."' , bip='"
        .$tab['bip']         ."' , statut='"
        .$tab['statut']         ."'  where idpilote="
        .$tab['idpilote'];

        $con= connexion();
        mysqli_query($con, $requete);
        deconnexion($con);

    }
    function selectWherePilote ($idpilote){
        $requete="select * from pilote where idpilote=".$idpilote;

        $con= connexion();
        $resultats=mysqli_query($con, $requete);
        $unpilote = mysqli_fetch_assoc($resultats);
        deconnexion($con);
        return $unpilote;

}

    /************** Gestion des avion *****************/
    function insertAvion ($tab){
        $requete = "insert into avion values (null, '"
        .$tab['designation']."', '"
        .$tab['constructeur']."', '"
        .$tab['ndp']."') ; ";
        $con = connexion (); // appel de la connexion
        mysqli_query($con, $requete); // execution de la requete
        deconnexion($con); // deconnexion de la base de données
    }
    function selectAllAvion (){
        $requete ="select * from avion;"; // ecrire la requete
        $con = connexion ();// connexion à la base de donnee
        $lesAvions = mysqli_query($con, $requete);
        deconnexion($con);
        return $lesAvions;
        // requete qui permet d'extraire les lignes

    }
    function deleteAvion ($idavion){
        $requete ="delete from avion where idavion=".$idavion;
        $con= connexion();
        mysqli_query($con, $requete);
        deconnexion($con);
    }
    function updateAvion ($tab){
        $requete="update avion set designation='"
        .$tab['designation']        ."' , constructeur='"
        .$tab['constructeur']         ."' , nbplaces='"
        .$tab['nbplaces']         ."'  where idavion="
        .$tab['idavion'];
//echo $requete;
        $con= connexion();
        mysqli_query($con, $requete);
        deconnexion($con);

    }
    function selectWhereAvion ($idavion){
        $requete="select * from avion where idavion=".$idavion;

        $con= connexion();
        $resultats=mysqli_query($con, $requete);
        $unavion = mysqli_fetch_assoc($resultats);
        deconnexion($con);
        return $unavion;

}

    /************** Gestion des vol *****************/
    function insertVol ($tab){
         $requete = "insert into vol values (null, '"
        .$tab['designation']."', '"
        .$tab['datevol']."', '"
        .$tab['heurevol']."', '"
        .$tab['idpilote1']."', '"
        .$tab['idpilote2']."', '"
        .$tab['idavion']."') ; ";
        $con = connexion (); // appel de la connexion
        mysqli_query($con, $requete); // execution de la requete
        deconnexion($con); // deconnexion de la base de données
    }
        function selectAllvol (){
            $requete ="select * from vol;"; // ecrire la requete
            $con = connexion ();// connexion à la base de donnee
            
            $lesVols = mysqli_query($con, $requete);
            deconnexion($con);
            return $lesVols;
            // requete qui permet d'extraire les lignes
    
        }
        function deleteVol ($idvol){
            $requete ="delete from vol where idvol=".$idvol;
            $con= connexion();
            mysqli_query($con, $requete);
            deconnexion($con);
        }
        function updateVol ($tab){
            $requete="update vol set designation='"
            .$tab['designation']."', datevol='"
            .$tab['datevol']."' , heurevol='"
            .$tab['heurevol']."', idpilote1="
            .$tab['idpilote1']."', idpilote2="
            .$tab['idpilote2']."' where idavion="
            .$tab['idavion'];
            //echo $requete;
            $con= connexion();
            mysqli_query($con, $requete);
            deconnexion($con);
    
        }
        function selectWhereVol ($idvol){
            $requete="select * from vol where idvol=".$idvol;
    
            $con= connexion();
            $resultats=mysqli_query($con, $requete);
            $unVol = mysqli_fetch_assoc($resultats);
            deconnexion($con);
            return $unVol;
    
    }
    
        

  
?>