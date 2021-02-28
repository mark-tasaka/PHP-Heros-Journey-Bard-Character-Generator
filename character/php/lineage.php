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

?>