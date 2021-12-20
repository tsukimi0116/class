<?php
    // 陣列 Array => 電腦 => X空間觀念 => 資料放在記憶體 => 位址 => 線性觀念
    $a[] = 12;
    $a[] = 12.3;
    $a[] = 'Brad';
    $a[] = true;

    var_dump($a);
?>

<hr>
<?php
    $c = array();
    var_dump($c);   

?>
<hr>
<?php
    $b = array(1,2,3,123,'Brad');
    var_dump($b);   
?>
<hr>
<?php
    $var1[0] = 1;
    $var1[2] = 22;
    $var1[1000] = 'Brad';
    var_dump($var1);   
?>