<?php
function result ($a, $b, $z)
{
    switch ($z)

    {
        case '+':
        {
            $rez = $a + $b;
            break;
        }
        case '-':
        {
            $rez = $a - $b;
            break;
        }
        case '*':
        {
            $rez = $a * $b;
            break;
        }
        case '/':
        {
            if($b == 0)
                $rez = "Error!";
            else
                $rez = $a / $b;
            break;
        }
    }
    return $rez;
}

$rez = result($_POST['a'], $_POST['b'], $_POST['z']);

?>

<form action="index.php" method="post">
    <input type="text" name="a" value="<?php echo $_POST['a'];?>">

    <select name="z">
        <option value="+" <?php if($_POST['z'] == '+') echo 'selected'; ?>>+</option>
        <option value="-" <?php if($_POST['z'] == '-') echo 'selected'; ?>>-</option>
        <option value="*" <?php if($_POST['z'] == '*') echo 'selected'; ?>>*</option>
        <option value="/" <?php if($_POST['z'] == '/') echo 'selected'; ?>>/</option>
    </select>

    <input type="text" name="b" value="<?php echo $_POST['b'];?>">
    <input type="submit" value="=" >
    <input type="text" name="rez" value="<?php echo $rez;?>" disabled >
</form>