<?php

/*
		   <span class="formIputDescription">Lineage:</span>	
			  <select id="lineageV3" name="theLineage" class="alignmentBox">	
				<option value="0" selected>Human</option>
				<option value="1">Changeling</option>
				<option value="2">Dwarf</option>
				<option value="3">Elf</option>
				<option value="4">Half-Elf</option>
				<option value="5">Halfling</option>
        </select>*/

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

?>