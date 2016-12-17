<div align='center'>
    Page d'accueil
</div>
<br />
<table align='center' border="1">
    <tr>
        <?php
            foreach($array as $key=>$val){
                echo "<th>";
                    echo $key;
                echo "</th>";
                echo "<td>";
                    echo $val;
                echo "</td>";
            }
        ?>
    </tr>

</table>
