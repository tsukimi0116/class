<?php
    $a = '10';

    //case對了就輸出，不會因為B2比較準就跳B2
    //case用值比對，他會自己轉換
    //case內可運算
    //case內可有相同case，但比誰先輸出
    
    switch($a){
        case 1:
            echo 'A';
            break;
        case 9+1:
            echo 'B1';
            break;
        case '10':
            echo 'B2';
            break;
        case 100:
            echo 'C';
            break;
        default: //沒case才會讀到這個
            echo 'D';
            break;
    }
    
    echo '<hr>';
    echo gettype($a);





?>
