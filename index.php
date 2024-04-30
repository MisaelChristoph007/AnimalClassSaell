<?php

require_once('Animal.php');
require_once('Frog.php');
require_once('Ape.php');

$sheep = new Animal("Shaun");
echo "<b>Name:</b> " . $sheep->name . "</br>";
echo "<b>Legs:</b> " . $sheep->legs . "</br>";
echo "<b>Cold Blooded:</b> " . $sheep->cold_blooded . "</br>";
echo "</br>";

$kodok = new Frog("Buduk");
echo "<b>Name:</b> " . $kodok->name . "</br>";
echo "<b>Legs:</b> " . $kodok->legs . "</br>";
echo "<b>Cold Blooded:</b> " . $kodok->cold_blooded . "</br>";
echo "" . $kodok->jump() . "</br>";
echo "</br>";

$sungokong = new Ape("Kera Sakti");
echo "<b>Name:</b> " . $sungokong->name . "</br>";
echo "<b>Legs:</b> " . $sungokong->legs . "</br>";
echo "<b>Cold Blooded:</b> " . $sungokong->cold_blooded . "</br>";
echo "". $sungokong->yell() . "</br>";
echo "</br>";
