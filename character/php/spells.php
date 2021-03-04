<?php

function getApprenticeSpells($spellCount)
{
    $spells = array('Breathed in Silver', 'Errant Pilgrim', 'Insight of the Wise', 'Lingering Starlight', 'Simple and Goodly Blessings', 'Songs of Hope and Resolve', 'Stand Against the Adversary');

    shuffle($spells);

    $spellsKnown = array();

    for($i = 0; $i < $spellCount; ++$i)
    {
        array_push($spellsKnown, $spells[$i]);
    }

    return $spellsKnown;
}


function apprenticeSpellsKnown($level, $lineage)
{
    $spellCount = 0;

    if($lineage == '4')
    {
        $spellCount += 1;
    }

    if($level >= 2 && $level <= 4)
    {
        $spellCount += 1;
    }    
    else if($level >= 5 && $level <= 7)
    {
        $spellCount += 2;
    }   
    else if($level >= 8 && $level <= 10)
    {
        $spellCount += 3;
    }

    return $spellCount;
}


?>