<?php

function getArmour($input)
{
        $a00 = array("", 0, 0);
        $a01 = array("Jerkin", 1, 20);
        $a02 = array("Brigandine", 2, 30);
        $a03 = array("Hauberk", 3, 50);
        $a04 = array("Corslet", 4, 65);
        $a05 = array("Plate", 5, 75);

        $array1= array($a00, $a01, $a02, $a03, $a04, $a05);
        
        return $array1[$input];
        
}

function getShield($input)
{
        $a00 = array("", 0, 0);
        $a01 = array("Buckler", 2, 2);
        $a02 = array("Small Shield", 4, 5);
        $a03 = array("Large Shield", 8, 10);

        $array1= array($a00, $a01, $a02, $a03);
        
        return $array1[$input];
        
}

?>