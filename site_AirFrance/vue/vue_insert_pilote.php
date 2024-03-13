<h3> Ajout d'une pilote </h3>

<form method="post">
    <table>
        <tr>
            <td> Nom </td>
            <td><input type="text" name="nom" value="<?php if($unpilote!=null) echo $unpilote['nom'] ?>"></td>
        </tr>
        <tr>
            <td> Prénom </td>
            <td><input type="text" name="prenom" value="<?php if($unpilote!=null) echo $unpilote['prenom'] ?>"></td>
        </tr>
        <tr>
            <td> Email </td>
            <td><input type="text" name="email" value="<?php if($unpilote!=null) echo $unpilote['email'] ?>"></td>
        </tr>
        <tr>
            <td> mdp </td>
            <td><input type="password" name="mdp" value="<?php if($unpilote!=null) echo $unpilote['mdp'] ?>"></td>
        </tr>
        <tr>
            <td> bip </td>
            <td><input type="text" name="bip" value="<?php if($unpilote!=null) echo $unpilote['bip'] ?>"></td>
        </tr>
        <tr>
            <td> Statut </td>
            <td><input type="text" name="statut" value="<?php if($unpilote!=null) echo $unpilote['statut'] ?>"></td>
        </tr>
        
        <tr>
            <td><input type="reset" name="Annuler"  value="Annuler"></td>
            <td><input type="submit"
            <?php if($unpilote !=null) {
                echo ' name = "Modifier" value = "Modifier"';
            }else {
                echo 'name="Valider" value="Valider"';
            }
            ?>
            ></td>
        </tr>
    </table>
    <?php
    if($unpilote !=null){
        echo "<input type ='hidden' name='idvol' value ='".$unpilote ['idpilote']."'>";
    }
    ?>
</form>