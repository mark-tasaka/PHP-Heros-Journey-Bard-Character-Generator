<?php


function getGear($input)
{
    
        $a00 = array("Animal Trap");
        $a01 = array("Backpack");
        $a02 = array("Bedroll");
        $a03 = array("Belladonna (bunch)");
        $a04 = array("Belt Pouch");
        $a05 = array("Bottle of Wine");
        $a06 = array("Candles (12) ");
        $a07 = array("Case (map or scroll)");
        $a08 = array("Cloak");
        $a09 = array("Cloth (bolt)");
        $a10 = array("Clothing (Commoner)");
        $a11 = array("Clothing (Traveling)");
        $a12 = array("Clothing (Fine)");
        $a13 = array("Compass");
        $a14 = array("Crowbar");
        $a15 = array("Deck of Cards");
        $a16 = array("Dice (bone, pair)");
        $a17 = array("Falcon (trained)");
        $a18 = array("Fishing Tackle");
        $a19 = array("Fishing Pole");
        $a20 = array("Flint and Steel");
        $a21 = array("Frying Pan");
        $a22 = array("Garlic (1 lb.)");
        $a23 = array("Grappling Hook");
        $a24 = array("Hammer (small)");
        $a25 = array("Healer’s Kit");
        $a26 = array("Helmet");
        $a27 = array("Jeweler’s Glass");
        $a28 = array("Journal (blank)");
        $a29 = array("Lantern");
        $a30 = array("Mirror (handheld)");
        $a31 = array("Music Instrument");
        $a32 = array("Net (10 ft. x 10 ft.)");
        $a33 = array("Oil (pint)");
        $a34 = array("Pole (10 ft.)");
        $a35 = array("Rations (trail, 5 days)");
        $a36 = array("Rations (dried, 5 days)");
        $a37 = array("Hemp rope (50 ft.)");
        $a38 = array("Silk rope (50 ft.)");
        $a39 = array("Sack (15 lbs. capacity)");
        $a40 = array("Sack (30 lbs. capacity)");
        $a41 = array("Shovel");
        $a42 = array("Spellbook (blank)");
        $a43 = array("Iron spikes (12)");
        $a44 = array("Wooden spikes (12)");
        $a45 = array("Tent");
        $a46 = array("Tool Kit");
        $a47 = array("Torches (6)");
        $a48 = array("Waterskin");
        $a49 = array("Whetstone");
        $a50 = array("Wolfsbane");        
        $a51 = array("Arrows (20)");
        $a52 = array("Silver Arrows (5)");
        $a53 = array("Bolts (30)");
        $a54 = array("Stones (20)");


        $arr = array($a00, $a01, $a02, $a03, $a04, $a05, $a06, $a07, $a08, $a09, $a10, $a11, $a12, $a13, $a14, $a15, $a16, $a17, $a18, $a19, $a20, $a21, $a22, $a23, $a24, $a25, $a26, $a27, $a28, $a29, $a30, $a31, $a32, $a33, $a34, $a35, $a36, $a37, $a38, $a39, $a40, $a41, $a42, $a43, $a44, $a45, $a46, $a47, $a48, $a49, $a50, $a51, $a52, $a53, $a54);
        
        return $arr[$input];
}


function getRandomGear()
{
        $gearArray = array(1, 2, 10, 14, 20, 31, 35, 42);

        $numberOfGear = rand(8, 18);

        $addToArray = array(0, 3, 4, 5, 6, 7, 8, 9, 11, 12, 13, 15, 16, 17, 18, 19, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 32, 33, 34, 36, 37, 38, 39, 40, 41, 43, 44, 45, 46, 49, 50);

        shuffle($addToArray);

        for($j = 0; $j <= $numberOfGear; ++$j)
        {
                $gear = $addToArray[$j];
                array_push($gearArray, $gear);
        }

        return $gearArray;

}


?>