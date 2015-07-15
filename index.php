<?php




echo "<br><br>";
echo "<br><a href='index.php?id=1'>index</a></br>";
echo "<a href='index.php?id=2'>other</a>";



switch($_GET['id'])
{
    case 1 :  header( 'Location: http://localhost:/TestGitHub/Index.html' ); break;
    case 2 :  header( 'Location: http://localhost:/TestGitHub/other.html' ); break;
    default: break;
}

?>