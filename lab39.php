<table border="1" width=100%>
    <tr>
        <th>Filename</th>
        <th>Size</th>
        <th>MTime</th>

        <?php
        $fp = opendir(".") or die('server busy');

        while ($fname = readdir($fp)) {
            echo '<tr>';
            echo "<td>{$fname}</td>";
            echo '<td>' . filesize($fname) . 'byte </td>';
            echo '<td>' . filemtime($fname) . '</td>';
            echo '</tr>';
        }


        closedir($fp);
        ?>

</table>