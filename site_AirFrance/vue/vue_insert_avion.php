<h3> Ajout d'un Avion </h3>

<form method="post">
    <table>
        <tr>
            <td> designation </td>
            <td> <input type="text" name="designation" value="<?php if($unavion!=null) echo $unavion['designation'] ?>"></td>
        </tr>
        <tr>
            <td> constructeur </td>
            <td> <input type="text" name="constructeur" value="<?php if($unavion!=null) echo $unavion['constructeur'] ?>"></td>
        </tr>
        <tr>
            <td> nombres de places </td>
            <td> <input type="text" name="ndp" value="<?php if($unavion!=null) echo $unavion['nbplaces'] ?>"></td>
        </tr>
        <tr>
            <td> <input type="reset" name="Annuler" value="Annuler"> </td>
            <td> <input type="submit"

            <?php if($unavion !=null) {
                echo ' name = "Modifier" value = "Modifier"';
            }else {
                echo 'name="Valider" value="Valider"';
            }
            ?>
            ></td>

        </tr>
    </table>
    <?php
    if($unavion !=null){
        echo "<input type ='hidden' name='idavion' value ='".$unavion ['idavion']."'>";
    }
    ?>
</form>