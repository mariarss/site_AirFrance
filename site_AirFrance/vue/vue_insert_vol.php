<h3> Ajout d'un vol </h3>

<form method="post">
    <table>
        <tr>
            <td> designation </td>
            <td><input type="text" name="designation" value="<?php if($unvol!=null) echo $unvol['designation'] ?>"></td>
        </tr>
        <tr>
            <td> date du vol </td>
            <td><input type="text" name="datevol" value="<?php if($unvol!=null) echo $unvol['datevol'] ?>"></td>
        </tr>
        <tr>
            <td> heure du vol </td>
            <td><input type="text" name="heurevol" value="<?php if($unvol!=null) echo $unvol['heurevol'] ?>"></td>
        </tr>
        <tr>
            <td> id pilote 1 </td>
            <td><input type="text" name="idpilote1" value="<?php if($unvol!=null) echo $unvol['idpilote1'] ?>"></td>
        </tr>
        <tr>
            <td>id pilote 2 </td>
            <td><input type="text" name="idpilote2" value="<?php if($unvol!=null) echo $unvol['idpilote2'] ?>"></td>
        </tr>
        <tr>
            <td> id avion  </td>
            <td><input type="text" name="idavion" value="<?php if($unvol!=null) echo $unvol['idavion'] ?>"></td>
        </tr>

        <tr>
            <td><input type="reset" name="Annuler"  value="Annuler"></td>
            <td><input type="submit" 
            <?php if($unvol !=null) {
                echo ' name = "Modifier" value = "Modifier"';
            }else {
                echo 'name="Valider" value="Valider"';
            }
            ?>
            ></td>
            
        </tr>
    </table>
    <?php
    if($unvol !=null){
        echo "<input type ='hidden' name='idvol' value ='".$unvol ['idvol']."'>";
    }
    ?>
</form>