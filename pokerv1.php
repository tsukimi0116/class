<?php

$poker = array();
for ($i = 0; $i < 52; $i++) {
    $temp = rand(0, 51);

    // 檢查 $temp 是否已經產生過了?
    $isRepeat = false;
    for ($j = 0; $j < $i; $j++) {
        if ($poker[$j] == $temp) {
            // 重複了
            $isRepeat = true;
            break;
        }
    }

    if (!$isRepeat){//!是相反的意思 true跳開 false繼續執行 
        $poker[$i] = $temp;
        echo "{$poker[$i]}<br />";
    } else {
        $i--;
    }
}
?>