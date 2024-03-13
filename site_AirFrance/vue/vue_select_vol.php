<h3> Liste des vols</h3>

<table border="1">
    <tr>
        <td> ID Vol </td>
        <td> designation </td>
        <td> datevol  </td>
        <td> heurevol  </td>
        <td> idpilote1  </td>
        <td> idpilote2   </td>
        <td> idavion   </td>
        <td> Operations</td>
</tr>
<?php
    foreach($lesVols as $unVol){
        echo"<tr>";
        echo"<td>".$unVol['idvol']."</td>";
        echo"<td>".$unVol['designation']."</td>";
        echo"<td>".$unVol['datevol']."</td>";
        echo"<td>".$unVol['heurevol']."</td>";
        echo"<td>".$unVol['idpilote1']."</td>";
        echo"<td>".$unVol['idpilote2']."</td>";
        echo"<td>".$unVol['idavion']."</td>";
        echo"<td>";
        echo"<a href='index.php?page=5&action=supp&idvol=".$unVol['idvol']."'>
        <img src='images/supp.png' height='50' witdh='50'></a>";

        echo"<a href='index.php?page=5&action=edit&idvol=".$unVol['idvol']."'>
        <img src='images/edit.png' height='50' witdh='50'></a>";
        
        echo"</td>";
        echo"</tr>";
    }
?>

</table>
