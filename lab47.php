<?php
    $img = imagecreatefromjpeg('./dir1/coffee.jpg');

    $yellow = imagecolorallocate($img,255,255,0);
    imagefttext($img, 25, 0, 50,350,$yellow,'./dir1/HanyiSentyBubbleTea.ttf','早安朋友來杯咖啡，認同請分享');

    header('content-type: image/jpeg');
    imagejpeg($img);
    imagejpeg($img,'./dir1/myCoffee.jpg');
    imagedestroy($img);
?>


//圖檔上傳 銜接浮水印