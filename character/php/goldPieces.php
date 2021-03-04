<?php


function getGoldPieces($input)
{
    $d6a = rand(1, 6);
    $d6b = rand(1, 6);
    $d6c = rand(1, 6);
    $d8a = rand(1, 8);
    $d8b = rand(1, 8);
    $d8c = rand(1, 8);
    $d8d = rand(1, 8);

    if($input == 1)
    {
        $gold = $d8a + $d8b + $d8c + $d8d;
        $goldPieces = strval($gold) . " gold pieces";
    } 
    else if($input == 2)
    {
        $gold = ($d6a + $d6b) * 5;
        $goldPieces = strval($gold) . " gold pieces";
    } 
    else if($input == 3)
    {
        $gold = ($d6a + $d6b + $d6c) * 10;
        $goldPieces = strval($gold) . " gold pieces";
    }
    else if($input == 4)
    {
        $gold = ($d8a + $d8b + $d8c + $d8d) * 20;
        $goldPieces = strval($gold) . " gold pieces";
    }
    else
    {
        $goldPieces = "";
    }

    return $goldPieces;
}

?>