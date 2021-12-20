<table border="1" width = "100%">
<?php
    $fp = fopen('./dir1/maskdata.csv','r');
    $header = fgets($fp);
    $head = explode(',',$header); //字串切割explode('用什麼切',elm)
    echo '<tr>';
    echo "<th>{$head[1]}</th>";
    echo "<th>{$head[2]}</th>";
    echo "<th>{$head[4]}</th>";
    echo "<th>{$head[5]}</th>";

    while($line = fgets($fp)){
        $data = explode(',',$line);
        echo '<tr>';
        echo "<td>{$data[1]}</td>";
        echo "<td>{$data[2]}</td>";
        echo "<td>{$data[4]}</td>";
        echo "<td>{$data[5]}</td>";
        echo '</tr>';
    } ;
    fclose($fp);

?>
</table>
