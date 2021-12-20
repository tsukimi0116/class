<?php
    $fp = fopen('./dir1/file2','r');

    while($line = fgets($fp)){
        echo $line .'<br>';
    } ;
    fclose($fp);

?>