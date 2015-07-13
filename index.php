<?php
$arr = array(
    'Ukraine' => array('Kiev', 'Lviv'),
    'France'  => array('Paris', 'Lion'),
    'England' => array('London', 'Liverpool'));
foreach($arr as $name => $country)
{
    echo "<h1>$name: </h1>";
    foreach($country as $town)
    {
        echo $town."  ";
    }
    echo "<br/>";
}
?>
