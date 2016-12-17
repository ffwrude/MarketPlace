<div align='center'>
    Page d'accueil
</div>
<br />
<table align='center' border="1">
    <tr>
        <?php
            $x=0;
            foreach($array as $data){
                echo "<tr>";
                    echo "<th>";
                        echo $x;
                    echo "</th>";
                    foreach($data as $key=>$val){
                        echo "<td>";
                            echo $val;
                        echo "</td>";
                    }
                echo "</tr>";
                $x++;
            }
        ?>
    </tr>

</table>
