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
        $message = "Level Limit: 4";
    }
    else if($lineage == "1" || $lineage == "3" || $lineage == "5")
    {
        $message = "Level Limit: 7";
    }
    else
    {
        $message = " ";
    }

    return $message;
}

?>