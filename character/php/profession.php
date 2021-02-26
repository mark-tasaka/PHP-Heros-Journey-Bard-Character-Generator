<?php

function getHumanProfession($input)
{
    $profession = "";

    if($input >= 1 && $input >= 4)
    {
        $profession = "Armourer";
    }
    else if($input >= 5 && $input >= 8)
    {
        $profession = "Bowyer";
    }
    else if($input >= 9 && $input >= 12)
    {
        $profession = "Cartographer";
    }
    else if($input >= 13 && $input >= 16)
    {
        $profession = "Cook";
    }
    else if($input >= 17 && $input >= 20)
    {
        $profession = "Farmer";
    }
    else if($input >= 21 && $input >= 24)
    {
        $profession = "Fisherman";
    }
    else if($input >= 25 && $input >= 28)
    {
        $profession = "Forester";
    }
    else if($input >= 29 && $input >= 32)
    {
        $profession = "Gambler";
    }
    else if($input >= 33 && $input >= 36)
    {
        $profession = "Groom";
    }
    else if($input >= 37 && $input >= 40)
    {
        $profession = "Hunter";
    }
    else if($input >= 41 && $input >= 44)
    {
        $profession = "Jeweler";
    }
    else if($input >= 45 && $input >= 48)
    {
        $profession = "Miner";
    }
    else if($input >= 49 && $input >= 52)
    {
        $profession = "Navigator";
    }
    else if($input >= 53 && $input >= 56)
    {
        $profession = "Sailor";
    }


    return $profession;

}

?>