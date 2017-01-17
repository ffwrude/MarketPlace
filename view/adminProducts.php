<form name="formulaire" method="post" action="">
    <table border='1'>
        <?php
            $tableau = array("nom","description","prix","quantite");
            foreach($tableau as $nom){
                echo "<tr>";
                    echo "<th>";
                        echo ucwords($nom)." : ";
                    echo "</th>";
                    echo "<td>";
                        $value = "";
                        if(is_array($array)){
                            $value = $array[$nom];
                        }
                        echo "<input type='text' name='".$nom."' value='".$value."' />";
                    echo "</td>";
                echo "</tr>";
            }
            if(is_array($array)){
                echo "<input type='hidden' name='id' value='".$array["id"]."' />";
            }
        ?>
        <tr>
            <td colspan="2">
                <input type="submit" />
            </td>
        </tr>
    </table>
</form>