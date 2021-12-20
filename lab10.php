<?php

$result = $x = $y = $op = '';
//預設值的觀念(存錢筒，因為ubdefined會報錯就先給他空字串)
if (isset($_GET['x']) && ($_GET['y'])) {
    $x = $_GET['x'];
    $y = $_GET['y'];
    $op = $_GET['op'];
    //lab10.php?x=12&op=4&y=3 ->抓url這串;
    switch ($op) {
        case '1':
            $result = $x + $y;
            break;
        case '2':
            $result = $x - $y;
            break;
        case '3':
            $result = $x * $y;
            break;
        case '4':
            $result = $x / $y;
            break;
    }

    // $result = $x + $y;
    //echo "{$x} + {$y} = {$result}";
}
// if (isset($_GET['op'])){
//     echo $_GET['op'];
// }
?>

<form>
    <input name="x" value="<?php echo $x; ?>">
    <select name="op">
        <option value="1" <?php echo $op == '1' ? 'selected' : '' ?>>+</option>
        <option value="2" <?php echo $op == '2' ? 'selected' : '' ?>>-</option>
        <option value="3" <?php echo $op == '3' ? 'selected' : '' ?>>*</option>
        <option value="4" <?php echo $op == '4' ? 'selected' : '' ?>>/</option>
    </select>
    <input name="y" value="<?php echo $y; ?>">
    <input type="submit" value="=">
    <?php
        echo $result;
    ?>
</form>