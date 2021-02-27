<?php

function getHumanAbilityScores()
{
    $m = (rand(1, 6)) + (rand(1, 6)) + (rand(1, 6));
    $f = (rand(1, 6)) + (rand(1, 6)) + (rand(1, 6));
    $r = (rand(1, 6)) + (rand(1, 6)) + (rand(1, 6));
    $i = (rand(1, 6)) + (rand(1, 6)) + (rand(1, 6));
    $b = (rand(1, 6)) + (rand(1, 6)) + (rand(1, 6));
    $w = (rand(1, 6)) + (rand(1, 6)) + (rand(1, 6));

    $abilityScores = array($m, $f, $r, $i, $b, $w);

    return $abilityScores;
}


function getChangelingAbilityScores()
{
    $m = (rand(1, 6)) + (rand(1, 6)) + (rand(1, 6));
    $f = (rand(1, 6)) + (rand(1, 6)) + 6;
    $r = (rand(1, 6)) + (rand(1, 6)) + (rand(1, 6));
    $i = (rand(1, 6)) + (rand(1, 6)) + (rand(1, 6));
    $b = (rand(1, 6)) + (rand(1, 6)) + 1;
    $w = (rand(1, 6)) + (rand(1, 6)) + (rand(1, 6));

    $abilityScores = array($m, $f, $r, $i, $b, $w);

    return $abilityScores;
}


function getDwarfAbilityScores()
{
    $m = (rand(1, 6)) + (rand(1, 6)) + 6;
    $f = (rand(1, 6)) + (rand(1, 6)) + 1;
    $r = (rand(1, 6)) + (rand(1, 6)) + 6;
    $i = (rand(1, 6)) + (rand(1, 6)) + (rand(1, 6));
    $b = (rand(1, 6)) + (rand(1, 6)) + 1;
    $w = (rand(1, 6)) + (rand(1, 6)) + (rand(1, 6));

    $abilityScores = array($m, $f, $r, $i, $b, $w);

    return $abilityScores;
}


function getElfAbilityScores()
{
    $m = (rand(1, 6)) + (rand(1, 6)) + (rand(1, 6));
    $f = (rand(1, 6)) + (rand(1, 6)) + 6;
    $r = (rand(1, 6)) + (rand(1, 6)) + 1;
    $i = (rand(1, 6)) + (rand(1, 6)) + 6;
    $b = (rand(1, 6)) + (rand(1, 6)) + 6;
    $w = (rand(1, 6)) + (rand(1, 6)) + 1;

    $abilityScores = array($m, $f, $r, $i, $b, $w);

    return $abilityScores;
}


function getHalfElfAbilityScores()
{
    $m = (rand(1, 6)) + (rand(1, 6)) + (rand(1, 6));
    $f = (rand(1, 6)) + (rand(1, 6)) + (rand(1, 6));
    $r = (rand(1, 6)) + (rand(1, 6)) + (rand(1, 6));
    $i = (rand(1, 6)) + (rand(1, 6)) + (rand(1, 6));
    $b = (rand(1, 6)) + (rand(1, 6)) + 6;
    $w = (rand(1, 6)) + (rand(1, 6)) + (rand(1, 6));

    $abilityScores = array($m, $f, $r, $i, $b, $w);

    return $abilityScores;
}


function getHalflingAbilityScores()
{
    $m = (rand(1, 6)) + (rand(1, 6)) + 1;
    $f = (rand(1, 6)) + (rand(1, 6)) + 6;
    $r = (rand(1, 6)) + (rand(1, 6)) + (rand(1, 6));
    $i = (rand(1, 6)) + (rand(1, 6)) + 1;
    $b = (rand(1, 6)) + (rand(1, 6)) + (rand(1, 6));
    $w = (rand(1, 6)) + (rand(1, 6)) + 6;

    $abilityScores = array($m, $f, $r, $i, $b, $w);

    return $abilityScores;
}



function getAbilityScores($input)
{
    $abilityScores = array();

    if($input == 0)
    {
        $abilityScores = getHumanAbilityScores();
    }
    
    if($input == 1)
    {
        $abilityScores = getChangelingAbilityScores();
    }
    
    if($input == 2)
    {
        $abilityScores = getDwarfAbilityScores();
    }
    
    if($input == 3)
    {
        $abilityScores = getElfAbilityScores();
    }
    
    if($input == 4)
    {
        $abilityScores = getHalfElfAbilityScores();
    }
    
    if($input == 5)
    {
        $abilityScores = getHalflingAbilityScores();
    }

    return $abilityScores;


}



function getAbilityScoreMod($abilityScore)
{
    
    if($abilityScore <= 3)
    {
        $modifier = -2;
    }
    else if($abilityScore >= 4 && $abilityScore <= 6)
    {
        $modifier = -1;
    }
    else if($abilityScore >= 15 && $abilityScore <= 17)
    {
        $modifier = 1;
    }
    else if($abilityScore >= 18)
    {
        $modifier = 2;
    }
    else
    {
        $modifier = 0;
    }

    return $modifier;

}

function getAbilityScoreModString($abilityScore)
{
    $score = getAbilityScoreMod($abilityScore);

    if($score == -2)
    {
        $scoreString = "-2";
    }
    else if($score == -1)
    {
        $scoreString = "-1";
    }
    else if($score == 1)
    {
        $scoreString = "+1";
    }
    else if($score == 2)
    {
        $scoreString = "+2";
    }
    else
    {
        $scoreString = "+0";

    }


    return $scoreString;
}

?>