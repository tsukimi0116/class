<?php
$isLeap = ' ';
if (isset($_GET['year'])) {
    $year = $_GET['year'];
    //判斷兩次，先判斷前面再判斷||後面，達成其中一樣為閏年
    // %%->and, ||->or
    if (($year % 4 == 0&&$year % 100 !== 0) || $year % 400 == 0) {
        $isLeap = true; //閏
    }else
        $isLeap = false; //平
    }

?>
<form>
    年:<input type="number" name="year" value="<?php echo $year; ?>">
    <input type="submit" value="判斷">
    <?php
    if ($isLeap == true) {
        echo '閏年';
    } else if ($isLeap == false) {
        echo '平年';
    }
    ?>
</form>