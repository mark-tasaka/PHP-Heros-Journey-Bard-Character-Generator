<?php

function getHumanProfession($input)
{
    $profession = "";

    if($input >= 1 && $input <= 4)
    {
        $profession = "Armourer";
    }
    else if($input >= 5 && $input <= 8)
    {
        $profession = "Bowyer";
    }
    else if($input >= 9 && $input <= 12)
    {
        $profession = "Cartographer";
    }
    else if($input >= 13 && $input <= 16)
    {
        $profession = "Cook";
    }
    else if($input >= 17 && $input <= 20)
    {
        $profession = "Farmer";
    }
    else if($input >= 21 && $input <= 24)
    {
        $profession = "Fisherman";
    }
    else if($input >= 25 && $input <= 28)
    {
        $profession = "Forester";
    }
    else if($input >= 29 && $input <= 32)
    {
        $profession = "Gambler";
    }
    else if($input >= 33 && $input <= 36)
    {
        $profession = "Groom";
    }
    else if($input >= 37 && $input <= 40)
    {
        $profession = "Hunter";
    }
    else if($input >= 41 && $input <= 44)
    {
        $profession = "Jeweler";
    }
    else if($input >= 45 && $input <= 48)
    {
        $profession = "Miner";
    }
    else if($input >= 49 && $input <= 52)
    {
        $profession = "Navigator";
    }
    else if($input >= 53 && $input <= 56)
    {
        $profession = "Sailor";
    }
    else if($input >= 57 && $input <= 60)
    {
        $profession = "Scribe";
    }
    else if($input >= 61 && $input <= 64)
    {
        $profession = "Stonemason";
    }
    else if($input >= 65 && $input <= 68)
    {
        $profession = "Tailor";
    }
    else if($input >= 69 && $input <= 72)
    {
        $profession = "Tanner";
    }
    else if($input >= 73 && $input <= 76)
    {
        $profession = "Teamster";
    }
    else if($input >= 77 && $input <= 80)
    {
        $profession = "Trapper";
    }
    else if($input >= 81 && $input <= 84)
    {
        $profession = "Unskilled";
    }
    else if($input >= 85 && $input <= 88)
    {
        $profession = "Urchin";
    }
    else if($input >= 89 && $input <= 92)
    {
        $profession = "Weaponsmith";
    }
    else if($input >= 93 && $input <= 96)
    {
        $profession = "Woodworker";
    }
    else if($input >= 97 && $input <= 100)
    {
        $profession = "Nobility";
    }
    else
    {
        $profession = "ERROR";
    }

    return $profession;
}


function getChangelingProfession($input)
{
    $profession = "";

    if($input == 1)
    {
        $profession = "Armourer";
    }
    else if($input >= 2 && $input <= 4)
    {
        $profession = "Bowyer";
    }
    else if($input >= 5 && $input <= 7)
    {
        $profession = "Cartographer";
    }
    else if($input >= 8 && $input <= 12)
    {
        $profession = "Cook";
    }
    else if($input >= 13 && $input <= 18)
    {
        $profession = "Farmer";
    }
    else if($input >= 19 && $input <= 20)
    {
        $profession = "Fisherman";
    }
    else if($input >= 21 && $input <= 24)
    {
        $profession = "Forester";
    }
    else if($input >= 25 && $input <= 35)
    {
        $profession = "Gambler";
    }
    else if($input == 36)
    {
        $profession = "Groom";
    }
    else if($input >= 37 && $input <= 38)
    {
        $profession = "Hunter";
    }
    else if($input >= 39 && $input <= 41)
    {
        $profession = "Jeweler";
    }
    else if($input >= 42 && $input <= 45)
    {
        $profession = "Miner";
    }
    else if($input >= 46 && $input <= 48)
    {
        $profession = "Navigator";
    }
    else if($input >= 49 && $input <= 53)
    {
        $profession = "Sailor";
    }
    else if($input >= 54 && $input <= 55)
    {
        $profession = "Scribe";
    }
    else if($input >= 56 && $input <= 57)
    {
        $profession = "Stonemason";
    }
    else if($input >= 58 && $input <= 60)
    {
        $profession = "Tailor";
    }
    else if($input >= 61 && $input <= 63)
    {
        $profession = "Tanner";
    }
    else if($input == 64)
    {
        $profession = "Teamster";
    }
    else if($input >= 65 && $input <= 71)
    {
        $profession = "Trapper";
    }
    else if($input >= 72 && $input <= 81)
    {
        $profession = "Unskilled";
    }
    else if($input >= 82 && $input <= 91)
    {
        $profession = "Urchin";
    }
    else if($input >= 92 && $input <= 95)
    {
        $profession = "Weaponsmith";
    }
    else if($input >= 96 && $input <= 99)
    {
        $profession = "Woodworker";
    }
    else if($input == 100)
    {
        $profession = "Nobility";
    }
    else
    {
        $profession = "ERROR";
    }

    return $profession;
}



function getDwarfProfession($input)
{
    $profession = "";

    if($input >= 1 && $input <= 15)
    {
        $profession = "Armourer";
    }
    else if($input >= 16 && $input <= 17)
    {
        $profession = "Bowyer";
    }
    else if($input >= 18 && $input <= 19)
    {
        $profession = "Cartographer";
    }
    else if($input >= 20 && $input <= 24)
    {
        $profession = "Cook";
    }
    else if($input >= 25 && $input <= 26)
    {
        $profession = "Farmer";
    }
    else if($input == 27)
    {
        $profession = "Fisherman";
    }
    else if($input == 28)
    {
        $profession = "Forester";
    }
    else if($input >= 29 && $input <= 30)
    {
        $profession = "Gambler";
    }
    else if($input == 31)
    {
        $profession = "Groom";
    }
    else if($input >= 32 && $input <= 33)
    {
        $profession = "Hunter";
    }
    else if($input >= 34 && $input <= 44)
    {
        $profession = "Jeweler";
    }
    else if($input >= 45 && $input <= 60)
    {
        $profession = "Miner";
    }
    else if($input >= 61 && $input <= 62)
    {
        $profession = "Navigator";
    }
    else if($input == 63)
    {
        $profession = "Sailor";
    }
    else if($input >= 64 && $input <= 65)
    {
        $profession = "Scribe";
    }
    else if($input >= 66 && $input <= 75)
    {
        $profession = "Stonemason";
    }
    else if($input == 76)
    {
        $profession = "Tailor";
    }
    else if($input >= 77 && $input <= 79)
    {
        $profession = "Tanner";
    }
    else if($input == 80)
    {
        $profession = "Teamster";
    }
    else if($input >= 81 && $input <= 82)
    {
        $profession = "Trapper";
    }
    else if($input >= 83 && $input <= 84)
    {
        $profession = "Unskilled";
    }
    else if($input == 85)
    {
        $profession = "Urchin";
    }
    else if($input >= 86 && $input <= 96)
    {
        $profession = "Weaponsmith";
    }
    else if($input >= 97 && $input <= 99)
    {
        $profession = "Woodworker";
    }
    else if($input == 100)
    {
        $profession = "Nobility";
    }
    else
    {
        $profession = "ERROR";
    }

    return $profession;
}



function getElfProfession($input)
{
    $profession = "";

    if($input >= 1 && $input <= 4)
    {
        $profession = "Armourer";
    }
    else if($input >= 5 && $input <= 14)
    {
        $profession = "Bowyer";
    }
    else if($input >= 15 && $input <= 16)
    {
        $profession = "Cartographer";
    }
    else if($input == 17)
    {
        $profession = "Cook";
    }
    else if($input >= 18 && $input <= 20)
    {
        $profession = "Farmer";
    }
    else if($input == 21)
    {
        $profession = "Fisherman";
    }
    else if($input >= 22 && $input <= 27)
    {
        $profession = "Forester";
    }
    else if($input == 28)
    {
        $profession = "Gambler";
    }
    else if($input >= 29 && $input <= 32)
    {
        $profession = "Groom";
    }
    else if($input >= 33 && $input <= 39)
    {
        $profession = "Hunter";
    }
    else if($input >= 40 && $input <= 41)
    {
        $profession = "Jeweler";
    }
    else if($input == 42)
    {
        $profession = "Miner";
    }
    else if($input >= 43 && $input <= 44)
    {
        $profession = "Navigator";
    }
    else if($input >= 45 && $input <= 48)
    {
        $profession = "Sailor";
    }
    else if($input >= 49 && $input <= 56)
    {
        $profession = "Scribe";
    }
    else if($input == 57)
    {
        $profession = "Stonemason";
    }
    else if($input >= 58 && $input <= 64)
    {
        $profession = "Tailor";
    }
    else if($input >= 65 && $input <= 68)
    {
        $profession = "Tanner";
    }
    else if($input == 69)
    {
        $profession = "Teamster";
    }
    else if($input >= 70 && $input <= 73)
    {
        $profession = "Trapper";
    }
    else if($input >= 74 && $input <= 78)
    {
        $profession = "Unskilled";
    }
    else if($input == 79)
    {
        $profession = "Urchin";
    }
    else if($input >= 80 && $input <= 89)
    {
        $profession = "Weaponsmith";
    }
    else if($input >= 90 && $input <= 99)
    {
        $profession = "Woodworker";
    }
    else if($input == 100)
    {
        $profession = "Nobility";
    }
    else
    {
        $profession = "ERROR";
    }

    return $profession;
}


function getHalfElfProfession($input)
{
    $profession = "";

    if($input >= 1 && $input <= 2)
    {
        $profession = "Armourer";
    }
    else if($input >= 3 && $input <= 10)
    {
        $profession = "Bowyer";
    }
    else if($input >= 11 && $input <= 17)
    {
        $profession = "Cartographer";
    }
    else if($input >= 18 && $input <=20)
    {
        $profession = "Cook";
    }
    else if($input >= 21 && $input <= 23)
    {
        $profession = "Farmer";
    }
    else if($input >= 24 && $input <= 27)
    {
        $profession = "Fisherman";
    }
    else if($input >= 28 && $input <= 34)
    {
        $profession = "Forester";
    }
    else if($input >= 35 && $input <= 42)
    {
        $profession = "Gambler";
    }
    else if($input >= 43 && $input <= 44)
    {
        $profession = "Groom";
    }
    else if($input >= 45 && $input <= 50)
    {
        $profession = "Hunter";
    }
    else if($input >= 51 && $input <= 52)
    {
        $profession = "Jeweler";
    }
    else if($input == 53)
    {
        $profession = "Miner";
    }
    else if($input >= 54 && $input <= 60)
    {
        $profession = "Navigator";
    }
    else if($input >= 61 && $input <= 66)
    {
        $profession = "Sailor";
    }
    else if($input >= 67 && $input <= 68)
    {
        $profession = "Scribe";
    }
    else if($input >= 69 && $input <= 70)
    {
        $profession = "Stonemason";
    }
    else if($input >= 71 && $input <= 73)
    {
        $profession = "Tailor";
    }
    else if($input >= 74 && $input <= 75)
    {
        $profession = "Tanner";
    }
    else if($input >= 76 && $input <= 78)
    {
        $profession = "Teamster";
    }
    else if($input >= 79 && $input <= 82)
    {
        $profession = "Trapper";
    }
    else if($input >= 83 && $input <= 88)
    {
        $profession = "Unskilled";
    }
    else if($input >= 89 && $input <= 92)
    {
        $profession = "Urchin";
    }
    else if($input >= 93 && $input <= 96)
    {
        $profession = "Weaponsmith";
    }
    else if($input >= 97 && $input <= 99)
    {
        $profession = "Woodworker";
    }
    else if($input == 100)
    {
        $profession = "Nobility";
    }
    else
    {
        $profession = "ERROR";
    }

    return $profession;
}


function getHalflingProfession($input)
{
    $profession = "";

    if($input == 1)
    {
        $profession = "Armourer";
    }
    else if($input >= 2 && $input <= 7)
    {
        $profession = "Bowyer";
    }
    else if($input >= 8 && $input <= 13)
    {
        $profession = "Cartographer";
    }
    else if($input >= 14 && $input <= 25)
    {
        $profession = "Cook";
    }
    else if($input >= 26 && $input <= 33)
    {
        $profession = "Farmer";
    }
    else if($input >= 34 && $input <= 40)
    {
        $profession = "Fisherman";
    }
    else if($input >= 41 && $input <= 44)
    {
        $profession = "Forester";
    }
    else if($input >= 45 && $input <= 47)
    {
        $profession = "Gambler";
    }
    else if($input == 48)
    {
        $profession = "Groom";
    }
    else if($input >= 49 && $input <= 52)
    {
        $profession = "Hunter";
    }
    else if($input == 53)
    {
        $profession = "Jeweler";
    }
    else if($input == 54)
    {
        $profession = "Miner";
    }
    else if($input >= 55 && $input <= 56)
    {
        $profession = "Navigator";
    }
    else if($input == 57)
    {
        $profession = "Sailor";
    }
    else if($input == 58)
    {
        $profession = "Scribe";
    }
    else if($input == 59)
    {
        $profession = "Stonemason";
    }
    else if($input >= 60 && $input <= 67)
    {
        $profession = "Tailor";
    }
    else if($input >= 68 && $input <= 70)
    {
        $profession = "Tanner";
    }
    else if($input >= 71 && $input <= 74)
    {
        $profession = "Teamster";
    }
    else if($input >= 75 && $input <= 79)
    {
        $profession = "Trapper";
    }
    else if($input >= 80 && $input <= 87)
    {
        $profession = "Unskilled";
    }
    else if($input >= 88 && $input <= 90)
    {
        $profession = "Urchin";
    }
    else if($input == 91)
    {
        $profession = "Weaponsmith";
    }
    else if($input >= 92 && $input <= 99)
    {
        $profession = "Woodworker";
    }
    else if($input == 100)
    {
        $profession = "Nobility";
    }
    else
    {
        $profession = "ERROR";
    }

    return $profession;
}


function getProfession($input)
{
    $profession = "";

    $d100 = rand(1, 100);

    if($input == 0)
    {
        $profession = getHumanProfession($d100);
    }
    else if($input == 1)
    {
        $profession = getChangelingProfession($d100);
    }
    else if($input == 2)
    {
        $profession = getDwarfProfession($d100);
    }
    else if($input == 3)
    {
        $profession = getElfProfession($d100);
    }
    else if($input == 4)
    {
        $profession = getHalfElfProfession($d100);
    }
    else if($input == 5)
    {
        $profession = getHalflingProfession($d100);
    }
    else
    {
        $profession = "error";
    }

    return $profession;

}

?>