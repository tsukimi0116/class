<?php
$i = 0 ;
for (init(); $i < 10; drawline()) {
    echo "{$i} <br>";
    $i++;
}

function init(){
    echo "Peter123 <br>";
}

function drawline(){
    echo '<hr>';
}