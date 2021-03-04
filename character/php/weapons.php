<?php


    function getWeapon($input)
    {
        $a00 = array("Axe, battle", "1d10", "-", "Two-Handed", "15 lb");
        $a01 = array("Axe, hand", "1d6", "20 ft.", "Throw", "5 lb");
        $a02 = array("Blade, long", "1d8", "-", "-", "10 lb");
        $a03 = array("Blade, short", "1d6", "-", "Agile", "5 lb");
        $a04 = array("Club", "1d6", "-", "-", "10 lb");
        $a05 = array("Dagger", "1d4", "20 ft.", "Throw", "3 lb");
        $a06 = array("Flail", "1d6", "-", "Chain", "8 lb");

        $a07 = array("Lance", "1d10", "-", "Horseback", "15 lb");
        $a08 = array("Mace", "1d6", "-", "-", "10 lb");
        $a09 = array("Morning Star", "1d8", "-", "Two-Handed", "15 lb");
        $a10 = array("Polearm", "1d10", "-", "Two-Handed", "15 lb");
        $a11 = array("Quarterstaff", "1d6", "-", "Two-Handed", "10 lb");
        $a12 = array("Spear", "1d6", "10 ft.", "Throw", "10 lb");
        $a13 = array("Sword, two-handed", "1d10", "-", "Two-Handed", "15 lb");
        $a14 = array("War Hammer", "1d6", "10 ft.", "Throw", "10 lb");

        $a15 = array("Bow, long", "1d8", "70 ft.", "-", "5 lb");
        $a16 = array("Bow, short", "1d6", "50 ft.", "-", "5 lb");
        $a17 = array("Crossbow, heavy", "1d12", "80 ft.", "-", "10 lb");
        $a18 = array("Crossbow, light", "1d8", "60 ft.", "-", "5 lb");
        $a19 = array("Sling", "1d4", "30 ft.", "-", "2 lb");


        $array1= array($a00, $a01, $a02, $a03, $a04, $a05, $a06, $a07, $a08, $a09, $a10, $a11, $a12, $a13, $a14, $a15, $a16, $a17, $a18, $a19);
        
        return $array1[$input];
        
    }

    
function getRandomWeapons()
{
    $weaponsArray = array(1, 2, 3, 4, 5, 6, 8, 12, 14, 15, 16, 17, 18, 19);
    $weaponsHas = array();
/*
    for($i = 0; $i <= 19; ++$i)
    {
        array_push($weaponsArray, $i);
    }*/

    //shuffle $weaponsArray
    shuffle($weaponsArray); 

    $numberOfWeapons = rand (2, 8);

    for($j = 0; $j < $numberOfWeapons; ++$j)
    {
        $weapon = $weaponsArray[$j];
        array_push($weaponsHas, $weapon);
    }

    return $weaponsHas;
}






?>