<?php

$p = array(1 => 0, 0, 0, 0, 0, 0);

for ($i = 0; $i < 100000; $i++) {
    $point = rand(1, 9);
    $p[$point > 6 ? $point - 3 : $point]++;
    //第七行是把$p[1~6]拉出來加次數
    // if ($point == 1) $p[1] += 1;
    // if ($point == 2) $p[2] += 1;
    // if ($point == 3) $p[3] += 1;
    // if ($point == 4) $p[4] += 1;
    // if ($point == 5) $p[5] += 1;
    // if ($point == 6) $p[6] += 1;
}

for ($i = 1; $i <= 6; $i++) {
    echo "{$i}點出現{$p[$i]}次<br />";
}

echo '<br>';

foreach($p as $k => $v){
    echo "{$k}點出現{$v}次<br />";
}
