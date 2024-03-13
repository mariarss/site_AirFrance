<h3> Liste des pilotes</h3>

<table border="1">
    <tr>
        <td> ID pilote </td>
        <td> Nom </td>
        <td> Prenom </td>
        <td> Email </td>
        <td> Mdp </td>
        <td> Bip </td>
        <td> Statut </td>
        <td> Operations</td>

</tr>

<?php
    foreach($lesPilotes as $unpilote){
        echo"<tr>";
        echo"<td>".$unpilote['idpilote']."</td>";
        echo"<td>".$unpilote['nom']."</td>";
        echo"<td>".$unpilote['prenom']."</td>";
        echo"<td>".$unpilote['email']."</td>";
        echo"<td>".$unpilote['mdp']."</td>";
        echo"<td>".$unpilote['bip']."</td>";
        echo"<td>".$unpilote['statut']."</td>";
        echo"<td>";
        echo"<a href='index.php?page=3&action=supp&idpilote=".$unpilote['idpilote']."'>
        <img src='images/supp.png' height='50' witdh='50'></a>";

        echo"<a href='index.php?page=3&action=edit&idpilote=".$unpilote['idpilote']."'>
        <img src='images/edit.png' height='50' witdh='50'></a>";
        
        echo"</td>";
        echo"</tr>";
    }
?>
</table>