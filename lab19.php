<?php
$month = rand(1, 12);
$day = '';

switch ($month) {
    case 1:
        case 3: case 5 :case 7: case 8: case 10: case 12:
        $day = 31;
        break;
    case 4: case 6: case 9: case 11:
        $day = 30;
        break;
    default:
        $day = 28;
        break;
}

echo "{$month}月有{$day}天";
