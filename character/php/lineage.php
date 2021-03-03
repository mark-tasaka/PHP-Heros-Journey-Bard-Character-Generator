<?php


function getLineage($input)
{
            $lineage = "";

            switch($input)
            {
                case 0:
                    $lineage = "Human";
                    break;

                case 1:
                    $lineage = "Changeling";
                    break;
                
                case 2:
                    $lineage = "Dwarf";
                    break;
    
                case 3:
                    $lineage = "Elf";
                    break;
                
                case 4:
                    $lineage = "Half-Elf";
                    break;
        
                case 5:
                    $lineage = "Halfling";
                    break;
                                            
                default:
                $lineage = "";

            }

            return $lineage;
}

function lineageReduction($lineage)
{
    if($lineage == 2)
    {
        $reduction = 1;
    }
    else
    {
        $reduction = 0;
    }

    return $reduction;

}


function levelLimit($lineage, $level)
{
    if($lineage == "2" && $level > 4)
    {
        $level = 4;
    }

    if($lineage == "1" || $lineage == "3" || $lineage == "5")
    {
        if($level > 7)
        {
            $level = 7;
        }
    }

    return $level;

}

function levelLimitMessage($lineage)
{
    if($lineage == "2")
    {
        $message = "<span class='lineageBold'>Lineage Level Limit: 4</span>";
    }
    else if($lineage == "1" || $lineage == "3" || $lineage == "5")
    {
        $message = "<span class='lineageBold'>Lineage Level Limit: 7</span>";
    }
    else
    {
        $message = " ";
    }

    return $message;
}


function lineageAbilities($lineage)
{
    $message = "";

    switch($lineage)
    {
        case 0:
            $message = "<span class='lineageBold'>Combat Training:</span> Select one weapon regardless of archetype restrictions.<br/><br/><span class='lineageBold'>Extraordinary Learner:</span> +15% bonus to XP.<br/><br><span class='lineageBold'>Uncanny Adaptability:</span> Advantage on a saving throw, once per day.";
            break;

        case 1:
            $message = "<span class='lineageBold'>Basic Arms:</span> Select any one-handed melee or ranged weapon regardless of archetype restrictions.<br/><br/><span class='lineageBold'>Just Beyond the Reach of Time:</span> +1 bonus to initiative<br/><br><span class='lineageBold'>See the Unseen</span><br/><br><span class='lineageBold'>Star Sight</span><br/><br><span class='lineageBold'>To Be Ignored is to Be Forgotten</span><br/><br><span class='lineageBold'>Unnatural Presence</span>";
            break;

        case 2:
            $message = "<span class='lineageBold'>By Axe and Hammer:</span> Weild axes and hammers regardless of archetype.<br/><br/><span class='lineageBold'>Artisan's Eye</span><br/><br><span class='lineageBold'>Touch As Nails:</span> Natural Reduction Value of 1.<br/><br><span class='lineageBold'>Underground Senses</span><br/><br><span class='lineageBold'>Magic & Poison Resistance</span><br/><br><span class='lineageBold'>Dark Vision</span>";
            break;

        case 3:
            $message = "<span class='lineageBold'>Blade and Bow:</span> Wield bows regardless of archetype.<br/><br/><span class='lineageBold'>Ageless</span><br/><br><span class='lineageBold'>Friend of the Woodland Realm</span><br/><br><span class='lineageBold'>Forest Walker</span><br/><br><span class='lineageBold'>Elvish Senses</span><br/><br><span class='lineageBold'>Star Sight</span>";
            break;

        case 4:
            $message = "<span class='lineageBold'>Martial Amateur:</span> Select one weapon regardless of archetype<br/><br/><span class='lineageBold'>Arcane Dabbler:</span> One Apprentice spell.<br/><br><span class='lineageBold'>Fast Learner:</span> +5% bonus to XP.<br/><br><span class='lineageBold'>Star Sight</span>";
            break;

        case 5:
            $message = "<span class='lineageBold'>Flick of the Wrist:</span> +2 bonus of attack rolls made with sling or throwing weapon.<br/><br/><span class='lineageBold'>Silent and Unseen</span><br/><br><span class='lineageBold'>Stout Heart</span><br/><br><span class='lineageBold'>Small Size:</span> +2 bonus to Defense.<br/><br><span class='lineageBold'>Keen Senses</span>";
            break;

        default:
            $message = "";

    }

    return $message;

}


function lineageDefenseBonus($lineage)
{
    $bonus = 0;
    
    if($lineage == "5")
    {
        $bonus = 2;
    }

    return $bonus;
}






?>