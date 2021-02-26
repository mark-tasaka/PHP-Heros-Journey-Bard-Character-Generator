<!DOCTYPE html>
<html>
<head>
<title>Hero's Journey Bard Character Generator Version 3</title>
 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    
	<meta charset="UTF-8">
	<meta name="description" content="Hero's Journey Bard Character Generator. Gallant Knight Games.">
	<meta name="keywords" content="Hero's Journey, Gallant Knight Games,HTML5,CSS,JavaScript">
	<meta name="author" content="Mark Tasaka 2021">
    
    <link rel="icon" href="../../../images/favicon/favicon.png" type="image/png" sizes="16x16"> 
		

	<link rel="stylesheet" type="text/css" href="css/bard.css">
    
    
</head>
<body>
    
    <?php
    
    include 'php/armour.php';
    include 'php/checks.php';
    include 'php/weapons.php';
    include 'php/gear.php';
    include 'php/classDetails.php';
    include 'php/clothing.php';
    include 'php/abilityScoreGen.php';
    include 'php/randomName.php';
    include 'php/xp.php';
    include 'php/profession.php';
    include 'php/lineage.php';
    

        if(isset($_POST["theCharacterName"]))
        {
            $characterName = $_POST["theCharacterName"];
    
        }

        
        if(isset($_POST["thePlayerName"]))
        {
            $playerName = $_POST["thePlayerName"];
    
        }
        
        if(isset($_POST["theLineage"]))
        {
            $lineageNumber = $_POST["theLineage"];
    
        }

        $lineage = getLineage($lineageNumber);
        

        if(isset($_POST["theGender"]))
        {
            $gender = $_POST["theGender"];
        }


        if(isset($_POST['theCheckBoxRandomName']) && $_POST['theCheckBoxRandomName'] == 1) 
        {
            $characterName = getRandomName($gender) . " " . getSurname();
        } 
  
        if(isset($_POST["theLevel"]))
        {
            $level = $_POST["theLevel"];
        
        } 

        $xpNextLevel = getXPNextLevel ($level);
        
        if(isset($_POST["theAbilityScore"]))
        {
            $abilityScoreGen = $_POST["theAbilityScore"];
        
        }

        $abilityScoreArray = array();
        
/*
        for($i = 0; $i < 6; ++$i)
        {
            $abilityScore = rollAbilityScores ($abilityScoreGen);

            array_push($abilityScoreArray, $abilityScore);

        }

        if(isset($_POST['theOptimizeAbilityScore']) && $_POST['theOptimizeAbilityScore'] == 1) 
        {
            rsort($abilityScoreArray);

            $strengthBase = $abilityScoreArray[0];
            $agility = $abilityScoreArray[2];
            $stamina = $abilityScoreArray[1];
            $personality = $abilityScoreArray[4];
            $intelligence = $abilityScoreArray[5];
            $luck = $abilityScoreArray[3];

            $optimizeAbilityScoreMessage = "Ability Scores optimized in the order of Str, Sta, Agi, Luck, Per, Int.";
        }
        else
        {
            $strength = $abilityScoreArray[0];
            $agility = $abilityScoreArray[1];
            $stamina = $abilityScoreArray[2];
            $personality = $abilityScoreArray[3];
            $intelligence = $abilityScoreArray[4];
            $luck = $abilityScoreArray[5];
            
            $optimizeAbilityScoreMessage = "";
        } 

       // $strength = $strengthBonusFromArtifact + $strengthBase;

        $strengthMod = getStrengthModifier($strength);
        $agilityMod = getAbilityModifier($agility);
        $staminaMod = getAbilityModifier($stamina);
        $personalityMod = getAbilityModifier($personality);
        $intelligenceMod = getAbilityModifier($intelligence);
        $luckMod = getAbilityModifier($luck);
    
        $generationMessage = generationMesssage ($abilityScoreGen);
    */
        if(isset($_POST["theArmour"]))
        {
            $armour = $_POST["theArmour"];
        }

        $armourName = getArmour($armour)[0];
        
        $armourACBonus = getArmour($armour)[1];
        $armourFumbleDie = getArmour($armour)[2];

        if(isset($_POST['theCheckBoxShield']) && $_POST['theCheckBoxShield'] == 1) 
        {
            $shieldName = getArmour(7)[0];
            $shieldACBonus = getArmour(7)[1];
            $shieldFumbleDie = getArmour(7)[2];
        }
        else
        {
            $shieldName = getArmour(8)[0];
            $shieldACBonus = getArmour(8)[1];
            $shieldFumbleDie = getArmour(8)[2];
        } 

     //  $totalAcDefense = $armourACBonus + $shieldACBonus + $totalArtifactAC;

       $speed = 30;

       $reflexBase = savingThrowReflex($level);
       $fortBase = savingThrowFort($level);
       $willBase = savingThrowWill($level);

       $criticalDie = criticalDie($level);


       $actionDice = actionDice($level);


       $title = title($level);

         
        $weaponArray = array();
        $weaponNames = array();
        $weaponDamage = array();
    
    

    //For Random Select gear
    if(isset($_POST['thecheckBoxRandomWeaponsV3']) && $_POST['thecheckBoxRandomWeaponsV3'] == 1) 
    {
        $weaponArray = getRandomWeapons();

    }
    else
    {
        if(isset($_POST["theWeapons"]))
        {
            foreach($_POST["theWeapons"] as $weapon)
            {
                array_push($weaponArray, $weapon);
            }
        }
    }

    
    foreach($weaponArray as $select)
    {
        array_push($weaponNames, getWeapon($select)[0]);
    }
        
    foreach($weaponArray as $select)
    {
        array_push($weaponDamage, getWeapon($select)[1]);
    }
        
        $gearArray = array();
        $gearNames = array();



    //For Random Select gear
    if(isset($_POST['theCheckBoxRandomGear']) && $_POST['theCheckBoxRandomGear'] == 1) 
    {
        $gearArray = getRandomGear();

        $weaponCount = count($weaponArray);
        $hasSling = false;
        $hasSlingStaff = false;

        for($i = 0; $i < $weaponCount; ++$i)
        {
            if($weaponArray[$i] == "18" && $hasSlingStaff == false)
            {
                array_push($gearArray, 25);
                
                $hasSling = true;
            }

            if($weaponArray[$i] == "19" && $hasSling == false)
            {
                array_push($gearArray, 25);

                $hasSlingStaff = true;
            }

            if($weaponArray[$i] == "12")
            {
                array_push($gearArray, 24);
            }


        }

    }
    else
    {
        //For Manually select gear
        if(isset($_POST["theGear"]))
            {
                foreach($_POST["theGear"] as $gear)
                {
                    array_push($gearArray, $gear);
                }
            }

    }

    
        foreach($gearArray as $select)
        {
            array_push($gearNames, getGear($select)[0]);
        }

    $profession = getProfession();

    
    
    ?>

    
	
<!-- JQuery -->
  <img id="character_sheet"/>
   <section>
       
           
		<span id="strength"></span>
		<span id="agility"></span> 
		<span id="stamina"></span> 
		<span id="intelligence"></span>
		<span id="personality"></span>
       <span id="luck"></span>
       
       
           
		<span id="strengthMod"></span>
		<span id="agilityMod"></span> 
		<span id="staminaMod"></span> 
		<span id="intelligenceMod"></span>
		<span id="personalityMod"></span>
       <span id="luckMod"></span>

       <span id="reflex"></span>
       <span id="fort"></span>
       <span id="will"></span>

       <span id="lineage">
       <?php
       echo $lineage;
       ?>
       </span>
		  
       
       <span id="gender">
           <?php
           echo $gender;
           ?>
       </span>
       
       




        <span id="maxTech"></span>

       
       <span id="class">Bard</span>
       
       <span id="armourClass"></span>

       <span id="baseAC"></span>
       
       <span id="hitPoints"></span>

       <span id="languages"></span>
       <span id="level">
           <?php
                echo $level;
           ?>
        </span>
       
       <span id="xpNextLevel">
           <?php
                echo $xpNextLevel;
           ?>
        </span>

       
       <span id="characterName">
           <?php
                echo $characterName;
           ?>
        </span>

        
       <span id="playerName">
           <?php
                echo $playerName;
           ?>
        </span>
       
       
              
        <span id="speed"></span>



              
       <span id="armourName">
           <?php
           if($armourName == "")
           {
               echo $shieldName;
           }
           else if($shieldName == "")
           {
                echo $armourName;
           }
           else
           {
            echo $armourName . " & " . $shieldName;
           }
           ?>
        </span>




        <span id="fumbleDie">
            <?php
            if($armourName == "")
            {
                echo $shieldFumbleDie;
            }
            else
            {
                echo $armourFumbleDie;
            }
            ?>
        </span>

        <span id="criticalDieTable">
            <?php
                echo $criticalDie;
            ?>
        </span>
        
        <span id="initiative">
        </span>
        
        <span id="actionDice">
            <?php
                echo $actionDice;
            ?>
        </span>

        
        <span id="title">
            <?php
                echo $title;
            ?>
        </span>



        
		<p id="birthAugur"><span id="luckySign"></span>: <span id="luckyRoll"></span> (<span id="LuckySignBonus"></span>)</p>

        
        <span id="melee"></span>
        <span id="range"></span>
        
        <span id="meleeDamage"></span>
        <span id="rangeDamage"></span>

       
       
       <span id="weaponsList">
           <?php
           
           foreach($weaponNames as $theWeapon)
           {
               echo $theWeapon;
               echo "<br/>";
           }
           
           ?>  
        </span>

       <span id="weaponsList2">
           <?php
           foreach($weaponDamage as $theWeaponDam)
           {
               echo $theWeaponDam;
               echo "<br/>";
           }
           ?>        
        </span>
       

       <span id="gearList">
           <?php

           $gearCount = count($gearNames);
           $counter = 1;
           
           foreach($gearNames as $theGear)
           {
              echo $theGear;

              if($counter == $gearCount-1)
              {
                  echo " and ";
              }
              elseif($counter > $gearCount-1)
              {
                  echo ".";
              }
              else
              {
                  echo ", ";
              }

              ++$counter;
           }
           ?>
       </span>


       <span id="profession">
            <?php
           echo $profession;;
           ?>
       </span>
       

       
	</section>
	

		
  <script>

        let imgData = "images/bard.png";
      
         $("#character_sheet").attr("src", imgData);
   
  </script>
		
	
    
</body>
</html>