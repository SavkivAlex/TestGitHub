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
echo "<br>В灨瀊੩昨楳獥琨⑟䍏佋䥅嬧瑥獴❝⤩੻ਠ†․瑥獴㴤彃住䭉䕛❴敳琧崻ਠ†⁳整捯潫<br>";
?>