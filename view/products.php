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
                        echo "<td onclick='document.location.href=\"index.php?pg=adminProducts&id=".$data["id"]."\";' style='cursor:pointer;'>";
                            echo $val;
                        echo "</td>";
                    }
                echo "</tr>";
                $x++;
            }
        ?>
    </tr>

</table>
