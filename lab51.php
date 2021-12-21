<?php
    $upload = $_FILES['upload'];
    // var_dump($upload);
    foreach ($upload as $k => $v){
        echo $k . '<br>';
        foreach ($v as $i =>$data){
            echo "{$i} => {$data}<br>";
        }
        echo '<hr>';
    }

    foreach ($upload['error'] as $i => $errCode){
        if ($errCode == 0){
            // $i
            move_uploaded_file($upload['tmp_name'][$i],
            "upload/{$upload['name']}");
        }
    }
?>