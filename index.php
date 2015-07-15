<?php

if(isset($_COOKIE['test']))
{
    $test=$_COOKIE['test'];
    setcookie('test', $test += 1);
}
else
{
    setcookie('test', 0);
}
echo "<a href='index.php'>Button</a>";
$test += 1;

echo "<br>Вы видели страницу $test раз!<br>";
?>