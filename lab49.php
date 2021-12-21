<?php
    $upload = $_FILES['upload'];
    // foreach($upload as $k => $v){
    //     echo "{$k} => {$v} <br>";
    // }查看檔案陣列結構

    if($upload['error'] ==0){
        if(move_uploaded_file($upload['tmp_name'],
        "upload/{$upload['name']}")){
            echo 'Upload Success';
        }else{
            //copy failure
        }
    }else{
        echo $upload['error'];
        //upload failure
    }
?>