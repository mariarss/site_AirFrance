<h3> Liste des avions</h3>

<table border="1">
    <tr>
        <td> ID avion </td>
        <td> Designation </td>
        <td> constructeur  </td>
        <td> Nombres de places  </td>
        <td> Opérations</td>
        
</tr>

<?php
    foreach($lesAvions as $unAvion){
        echo"<tr>";
        echo"<td>".$unAvion['idavion']."</td>";
        echo"<td>".$unAvion['designation']."</td>";
        echo"<td>".$unAvion['constructeur']."</td>";
        echo"<td>".$unAvion['nbplaces']."</td>";    
        echo"<td>";
        echo"<a href='index.php?page=4&action=supp&idavion=".$unAvion['idavion']."'>
        <img src='images/supp.png' height='50' witdh='50'></a>";

        echo"<a href='index.php?page=4&action=edit&idavion=".$unAvion['idavion']."'>
        <img src='images/edit.png' height='50' witdh='50'></a>";
        
        echo"</td>";
        echo"</tr>";
    }
?>
</table>
