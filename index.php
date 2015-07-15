<?php

$test = 0;


echo "<a href='index.php?id=1'>   Button   </a>";


$text += $_GET['id'];

echo "<br>Пришло $text<br>";


echo "<br><br>";


echo "<br><a href='index.php?id=1'>index</a></br>";

echo "<a href='index.php?id=2'>other</a>";

switch($_GET['id'])
{
    case 1 :  header( 'Location: http://localhost:63343/TestGitHub/Index.html' ); break;

    case 2 :  header( 'Location: http://localhost:63343/TestGitHub/other.html' );; break;
    default: break;
}

?>