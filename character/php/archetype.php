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

    if($level >= 4 && $bonus <= 5)
    {
        $bonus = 1;
    }
    else if($level >= 6 && $bonus <= 7)
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
        $bonus = 4;
    }
    else
    {
        $bonus = 0;
    }

    return $bonus;
}


function getSavingThrow($level)
{
    $levelInt = (int)$level;
    $save = (16 - $levelInt);

    return $save;

}


?>