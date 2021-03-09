<!DOCTYPE html>
<html>
<head>
<title>Launch Page: The Hero's Journey 2e Bard Character Generator Version 3</title>
    
	<meta charset="UTF-8">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="Mark Tasaka 2021">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>  
    
	<link rel="stylesheet" href="css/githubMCC.css"/> 
	<link rel="stylesheet" href="css/bf_additions.css"/> 
	<link rel="stylesheet" href="css/bf_additions2.css"/> 
	<link rel="stylesheet" href="css/general.css"/> 
	<link rel="stylesheet" href="css/basic_style.css"/> 
	<script type="text/javascript" src="js/characterMenu.js"></script>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta charset="utf-8" />
	

	</head>
	
	
<body>
    

	
	<section>
		
		<h1><img src="images/title.png" alt="The Hero's Journey 2e Bard Character Generator Version 3" class="image" /></h1>
		
				
			
		
                                
                
            <br/>
            <br/>
        
        <p>The Hero's Journey 2e Bard Character Generator is designed with PHP. The Launch Page has a series of drop-down menus, input fields and checkboxes, where alignments, weapons, armour, gear, character level, etc., are added to the character sheet. When the submit button is entered, the information (variables) is collected through POST methods and added to the character sheet. Several of the variables POSTED modify the values on the character sheet; therefore, PHP functions have been created to make these adjustments possible.</p>    

        <p>Several of PHP functions are stored in external files, as a means of creating greater design efficiency, with the goal of designing a program with high cohesion and low coupling. In this way, this program replicates Object-Oriented design.</p>
 
        <p>A Live version of the Character Generator are found at:</p>

        <p><a href="https://www.oldschooladventures.org/hero/more/classes/bard/"  class="text_link" target="_blank"><span class="bold">Humble Beginnings and Bold Adventures: A Hero's Journey Fan Site</span></a></p>


        <br/>
        <br/>
            
 
            
		<form action="" id ="BardFormV3"  target="_blank" method="post">
    
    <div class="content9">


                
  
          <div id="characterNameV3">
            <span class="formIputDescription">Character's Name:</span>
            <span id="characterNameV3"> <input type="text" name="theCharacterName" value="" class="nameBox"></span>
           

           
           <br/>
           <br/>
            </div>
           

                  
           <div class="formIputDescription">
           <span class="footnote3"><input type="checkbox" id="checkBoxRandomNameV3" value="1" name="theCheckBoxRandomName" onClick="hideCharacterName()">Use Randomly Generated Name</span>
           </div>

           <br/>

           <div id="PlayerNameV3">
            <span class="formIputDescription">Player's Name:</span>
            <span id="PlayerNameV3"> <input type="text" name="thePlayerName" value="" class="nameBox"></span>
           
            </div>

           <br/>

		   <span class="formIputDescription">Lineage:</span>	
			  <select id="lineageV3" name="theLineage" class="alignmentBox">	
				<option value="0" selected>Human</option>
				<option value="1">Changeling</option>
				<option value="2">Dwarf</option>
				<option value="3">Elf</option>
				<option value="4">Half-Elf</option>
				<option value="5">Halfling</option>
        </select>
        
        <br/>
        <br/>
                  
                           
        <span class="formIputDescription">Gender:</span>	
			  <select id="genderV3" name="theGender" class="alignmentBox">	
				<option value="Male">Male</option>
				<option value="Female" selected>Female</option>
				<option value="Other">Other</option>
				<option value="Blank">Blank</option>
        </select>
        
        <br/>
        <br/>


            <span class="formIputDescription">Character Level:</span>	
			  <select id="levelV3" name="theLevel" class="alignmentBox">	
				<option value="1" selected>Level 1</option>
				<option value="2">Level 2</option>
				<option value="3">Level 3</option>
				<option value="4">Level 4</option>
				<option value="5">Level 5</option>
				<option value="6">Level 6</option>
				<option value="7">Level 7</option>
				<option value="8">Level 8</option>
				<option value="9">Level 9</option>
				<option value="10">Level 10</option>
			  </select>
            
            <br/>
            <br/>

       

                            
            <span class="formIputDescription">Armour:</span>	
			  <select id="armourV3" name="theArmour" class="alignmentBox">			
                <option value="0">No Armour</option>
				<option value="1"  selected>Jerkin</option>
				<option value="2">Brigandine</option>
				<option value="3">Hauberk</option>
			  </select>

        <br/>
		<br/>

    
                            
    <span class="formIputDescription">Shield:</span>	
			  <select id="shieldV3" name="theShield" class="alignmentBox">			
                <option value="0">No Shield</option>
				<option value="1"  selected>Buckler</option>
				<option value="2">Small Shield</option>
			  </select>

        <br/>
		<br/>
		                            
    <span class="formIputDescription">Gold Pieces:</span>	
			  <select id="goldV3" name="theGold" class="alignmentBox">			
                <option value="0"selected>No gold pieces</option>
				<option value="1"  >4d8 gold pieces</option>
				<option value="2">2d6 X 5 gold pieces</option>
				<option value="3">3d6 X 10 gold pieces</option>
				<option value="4">4d8 X 20 gold pieces</option>
			  </select>

        <br/>
		<br/>
                 

                <div class="formIputDescription2">
                  <span class="weaponBoxHeader"><input type="checkbox" id="checkBoxRandomWeaponsV3" value="1" name="thecheckBoxRandomWeaponsV3" onClick="hideWeapons()">&nbsp&nbspRandomly Generate Weapons</span>
                  </div>
       
                  <br/>


                <div id="weaponsSelectionV3">

                <span class="weaponBoxHeader">Weapons:</span>
                <br/><br/>



                <div id="weaponsGroupingsV3">
                <input type="checkbox" name="theWeapons[]" value="1"> Axe, hand<br/>  
                <input type="checkbox" name="theWeapons[]" value="2"> Blade, long<br/>  
                <input type="checkbox" name="theWeapons[]" value="3"> Blade, short<br/>  
                <input type="checkbox" name="theWeapons[]" value="4"> Club<br/> 
                <input type="checkbox" name="theWeapons[]" value="5"> Dagger<br/>   
                <input type="checkbox" name="theWeapons[]" value="6"> Flail<br/> 
                <input type="checkbox" name="theWeapons[]" value="8"> Mace<br/> 
                <input type="checkbox" name="theWeapons[]" value="11"> Quarterstaff<br/> 
                <input type="checkbox" name="theWeapons[]" value="12"> Spear<br/>  
                <input type="checkbox" name="theWeapons[]" value="14"> War Hammer<br/> 
                <input type="checkbox" name="theWeapons[]" value="15"> Bow, long<br/> 
                <input type="checkbox" name="theWeapons[]" value="16"> Bow, short<br/> 
                <input type="checkbox" name="theWeapons[]" value="17"> Crossbow, heavy<br/> 
                <input type="checkbox" name="theWeapons[]" value="18"> Crossbow, light<br/> 
                <input type="checkbox" name="theWeapons[]" value="19"> Sling<br/> 
                </div>


                <br/>
                <br/>

                </div>
   

                <div class="formIputDescription2">
                  <span class="weaponBoxHeader"><input type="checkbox" id="checkBoxRandomGearV3" value="1" name="theCheckBoxRandomGear" onClick="hideGear()">&nbsp&nbspRandomly Generate Gear</span>
                  </div>
       


                <div id="gearSelectionV3">
                  <br/>
                
                <span class="weaponBoxHeader">Equipment/Ammo:</span>
                <br/><br/>
                
            <div id="gearGroupingsV3">
      <input type="checkbox" name="theGear[]" value="0"> Animal Trap<br/>
                <input type="checkbox" name="theGear[]" value="1"> Backpack<br/>  
                <input type="checkbox" name="theGear[]" value="2"> Bedroll<br/>  
                <input type="checkbox" name="theGear[]" value="3"> Belladonna<br/>  
                <input type="checkbox" name="theGear[]" value="4"> Belt Pouch<br/>  
                <input type="checkbox" name="theGear[]" value="5"> Bottle of Wine<br/>   
                <input type="checkbox" name="theGear[]" value="6"> Candles (12) <br/>  
                <input type="checkbox" name="theGear[]" value="7"> Case (map or scroll)<br/>  
                <input type="checkbox" name="theGear[]" value="8"> Cloak<br/> 
                <input type="checkbox" name="theGear[]" value="9"> Cloth (bolt)<br/> 
                <input type="checkbox" name="theGear[]" value="10"> Clothing (Commoner)<br/> 
                <input type="checkbox" name="theGear[]" value="11"> Clothing (Traveling)<br/> 
                <input type="checkbox" name="theGear[]" value="12"> Clothing (Fine)<br/> 
                <input type="checkbox" name="theGear[]" value="13"> Compass<br/> 
                <input type="checkbox" name="theGear[]" value="14"> Crowbar<br/> 
                <input type="checkbox" name="theGear[]" value="15"> Deck of Cards<br/>
                <input type="checkbox" name="theGear[]" value="16"> Dice (bone, pair)<br/> 
                <input type="checkbox" name="theGear[]" value="17"> Falcon (trained)<br/> 
                <input type="checkbox" name="theGear[]" value="18"> Fishing Tackle<br/> 
                <input type="checkbox" name="theGear[]" value="19"> Fishing Pole<br/> 
                <input type="checkbox" name="theGear[]" value="20"> Flint and Steel<br/> 
                <input type="checkbox" name="theGear[]" value="21"> Frying Pan<br/> 
                <input type="checkbox" name="theGear[]" value="22"> Garlic (1 lb.)<br/> 
                <input type="checkbox" name="theGear[]" value="23"> Grappling Hook<br/> 
                <input type="checkbox" name="theGear[]" value="24"> Hammer (small)<br/> 
                <input type="checkbox" name="theGear[]" value="25"> Healer’s Kit<br/> 
                <input type="checkbox" name="theGear[]" value="26"> Helmet<br/> 
                <input type="checkbox" name="theGear[]" value="27"> Jeweler’s Glass<br/> 
                <input type="checkbox" name="theGear[]" value="28"> Journal (blank)<br/> 
                <input type="checkbox" name="theGear[]" value="29"> Lantern<br/> 
                <input type="checkbox" name="theGear[]" value="30"> Mirror (handheld)<br/> 
                <input type="checkbox" name="theGear[]" value="31"> Music Instrument<br/> 
                <input type="checkbox" name="theGear[]" value="32"> Net (10 ft. x 10 ft.)<br/> 
                <input type="checkbox" name="theGear[]" value="33"> Oil (pint)<br/> 
                <input type="checkbox" name="theGear[]" value="34"> Pole (10 ft.)<br/> 
                <input type="checkbox" name="theGear[]" value="35"> Rations (trail)<br/> 
                <input type="checkbox" name="theGear[]" value="36"> Rations (dried)<br/> 
                <input type="checkbox" name="theGear[]" value="37"> Rope, hemp (50 ft.)<br/> 
                <input type="checkbox" name="theGear[]" value="38"> Rope, silk (50 ft.)<br/> 
                <input type="checkbox" name="theGear[]" value="39"> Sack (15 lbs. cap)<br/> 
                <input type="checkbox" name="theGear[]" value="40"> Sack (30 lbs. cap)<br/> 
                <input type="checkbox" name="theGear[]" value="41"> Shovel<br/> 
                <input type="checkbox" name="theGear[]" value="42"> Spellbook (blank)<br/> 
                <input type="checkbox" name="theGear[]" value="43"> Iron spikes (12)<br/> 
                <input type="checkbox" name="theGear[]" value="44"> Wooden spikes (12)<br/> 
                <input type="checkbox" name="theGear[]" value="45"> Tent<br/> 
                <input type="checkbox" name="theGear[]" value="46"> Tool Kit<br/> 
                <input type="checkbox" name="theGear[]" value="47"> Torches (6)<br/> 
                <input type="checkbox" name="theGear[]" value="48"> Waterskin<br/> 
                <input type="checkbox" name="theGear[]" value="49"> Whetstone<br/> 
                <input type="checkbox" name="theGear[]" value="50"> Wolfsbane<br/> 

                <br/>
                <span class="weaponSubHead">Ammo:</span><br/><br/>
                <input type="checkbox" name="theGear[]" value="51"> Arrows (20)<br/>  
                <input type="checkbox" name="theGear[]" value="52"> Silver Arrows (5)<br/>  
                <input type="checkbox" name="theGear[]" value="53"> Bolts (30)<br/>  
                <input type="checkbox" name="theGear[]" value="54"> Stones (20)<br/>  

                </div>


                </div>
                <br/>

            
		<div class="content8">
            

            
			  
    <br/>
            <br/>
    
            
			  
            			  
			<div class="generatorButtonA2">
			
			     <span class="generatorbuttonsC1">

				
                    <input type="submit" value="" id="generate_charactersWarriorV3"/>
			     
                </span>
				
			     <span class="generatorbuttonsC1">
				
                     <input type="reset"  value="" id="reset_generator3"/>
		
				</span>
                
		
            </div>
            </div>
            
				
            </div>
            
            </form>
            
                	

            <br/>
            <br/>
            <br/>
            <br/>
            

            
            
                
                
                	
                <script>
        

        $("#generate_charactersWarriorV3").click(function(){
         
    
         $("#BardFormV3").attr('action', "character/hjBard.php");

     });


                    
                </script>
        
                
                
      
                
 
                
    </section>


</body>
</html>