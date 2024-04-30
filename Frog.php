<?php

require_once('Animal.php');

class Frog extends Animal
{
    public function jump()
    {
        echo "<b>Jump: Hop Hop</b>";
    }
}