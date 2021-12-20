<?php
$sum = '';
if (isset($_GET['n'])) {
    $n = $_GET['n'];
    $i = 1;
    $sum = 0;
    while ($i <= $n) {
        $sum += $i++;
    }
}
?>
<form>
    <span>1+2+.....+</span>
    <input type="number" name="n" value="<?php echo $_GET['n'] ?>">
    <input type="submit" value="=">
    <span><?php echo $sum; ?></span>
</form>