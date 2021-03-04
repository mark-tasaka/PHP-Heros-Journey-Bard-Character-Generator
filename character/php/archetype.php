<?php

function getEndurance($level, $resolveMod)
{
    $bonusEndurance = ($level * $resolveMod);
    $endurance = 0;

    $enduranceLevel1 = 6;
    $enduranceLevel2 = 6 + rand(1, 6);
    $enduranceLevel3 = 6 + rand(1, 6) + rand(1, 6);

    switch ($level) 
    {
        case "1":
            $endurance = $enduranceLevel1;
          break;

        case "2":
            $endurance = $enduranceLevel2;
        break;
        
        case "3":
            $endurance = $enduranceLevel3;
        break;
        
        case "4":
            $endurance = $enduranceLevel3 + 2;
        break;
        
        case "5":
            $endurance = $enduranceLevel3 + 3;
        break;
        
        case "6":
            $endurance = $enduranceLevel3 + 4;
        break;        

        case "7":
            $endurance = $enduranceLevel3 + 6;
        break;
                
        case "8":
            $endurance = $enduranceLevel3 + 7;
        break;
                
        case "9":
            $endurance = $enduranceLevel3 + 8;
        break;
                
        case "10":
            $endurance = $enduranceLevel3 + 10;
        break;

        default:
          $endurance = 0;
      }

      $endurance += $bonusEndurance;

      return $endurance;

}

function getAttackBonus($level)
{
    $bonus = 0;

    if($level >= 4 && $level <= 5)
    {
        $bonus = 1;
    }
    else if($level >= 6 && $level <= 7)
    {
        $bonus = 2;
    }
    else if($level == 8)
    {
        $bonus = 3;
    }
    else if($level == 9)
    {
        $bonus = 4;
    }
    else if($level == 10)
    {
        $bonus = 5;
    }
    else
    {
        $bonus = 0;
    }

    return $bonus;
}

function minimumClassScore($score)
{
    if($score < 8)
    {
        $score = 8;
    }

    return $score;
}



function getSavingThrow($level)
{
    $levelInt = (int)$level;
    $save = (16 - $levelInt);

    return $save;

}

function getXPBonus($abilityScore)
{
    $bonus = "";

    if($abilityScore > 14)
    {
        $bonus = "+5% bonus to Experience Points";
    }

    return $bonus;
}

function bardSaveMessage()
{
    $message = "<span class='archetypeBold'>Saving Throw:</span> Advantage on saving throws to resist magic spells or the effects of magic items.<br/><br/>";

    return $message;
}


function bardAbilityCharmer($score)
{
    $message = "";

    if($score >= 15)
    {
        $message = "<span class='archetypeBold'>Charmer:</span> The target(s) suffer disadvantage of saving throws when the Bard casts the <span class='archetypeBold'>Breathed in Siver</span> spell.<br/><br/>";
    }

    return $message;
}

function bardAbilityInspire($score)
{
    $message = "";

    if($score >= 13)
    {
        $message = "<span class='archetypeBold'>Inspiring Performer:</span> Through the Bard's performance, allies within 60' receive +2 on attacks rolls and saving throws.<br/><br/>";
    }

    return $message;
}


function bardAbilityThief($score, $level)
{
    $message = "";

    if($score >= 15 && $level >= 4)
    {
        $message = "<span class='archetypeBold'>Bardic Thievery:</span> Thievery abilities of a Burglar at 3 levels lower than the Bard's level.<br/><br/>";
    }

    return $message;
}


function lineageBardLore($level)
{
    if($level == "1" || $level == "2")
    {
        $lore = "<span class='archetypeBold'>Lore: 1</span><br/><br/>";
    }
    else if($level == "3" || $level == "4")
    {
        $lore = "<span class='archetypeBold'>Lore: 2</span><br/><br/>";
    }
    else if($level == "5" || $level == "6")
    {
        $lore = "<span class='archetypeBold'>Lore: 3</span><br/><br/>";
    }
    else if($level == "7" || $level == "8")
    {
        $lore = "<span class='archetypeBold'>Lore: 4</span><br/><br/>";
    }
    else
    {
        $lore = "<span class='archetypeBold'>Lore: 5</span><br/><br/>";
    }

    return $lore;
}


?>