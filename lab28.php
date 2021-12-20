<?php
    $ary = array(4 => 1,2,3, 9=> 4,5,6);
    var_dump($ary);

    for($i = 4;$i <= 11;$i++){
        echo "{$i} : {$ary[$i]}<br>";
    }

    echo '<hr>';

    foreach($ary as $key => $value){
        echo "{$key} :{$value}<br>";
    }
?>
<hr>
<?php
    $person['name'] = 'Leo';
    $person['age'] = 23;
    $person['weight'] = 65;
    $person['height'] = 177;

    foreach($person as $a => $v){
        echo "{$a} :{$v}<br>";
    }
?>