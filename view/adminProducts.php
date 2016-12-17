<form name="formulaire" method="post" action="../Model/AdminProductsTraitement.php">
    <!-- L'action va vers une page ok mais dans quelle page ??? -->
    <table border='1'>
    <?php
        $tableau = array("nom","description","prix","quantite");
        foreach($tableau as $nom){
            echo "<tr>";
                echo "<th>";
                    echo ucwords($nom)." : ";
                echo "</th>";
                echo "<td>";
                    echo "<input type='text' name='products_".$nom."' />";
                echo "</td>";
            echo "</tr>";
        }
    ?>
    <tr>
        <td colspan="2">
            <input type="submit" />
        </td>
    </tr>
    </table>
</form>