//Version 3: Hide unhide character's name field


                
function hideCharacterName()               
 {    

    if ($('#checkBoxRandomNameV3').is(":checked"))
    {
      $('#characterNameV3').hide();
    }
    else
    {
      $('#characterNameV3').show();
    }


}

function hideGear()        
{

    if ($('#checkBoxRandomGearV3').is(":checked"))
    {
      $('#gearSelectionV3').hide();
    }
    else
    {
      $('#gearSelectionV3').show();
    }

}
  


function hideWeapons()        
{

    if ($('#checkBoxRandomWeaponsV3').is(":checked"))
    {
      $('#weaponsSelectionV3').hide();
    }
    else
    {
      $('#weaponsSelectionV3').show();
    }

}

function hideLevelSelect()
{

  $('#levelLimitSelection1').hide();
  $('#levelLimitSelection2').hide();
  $('#levelLimitSelection3').hide();

  if( $('#lineageV3') == "0" || $('#lineageV3') == "4")
  {
        $('#levelLimitSelection1').show();
        $('#levelLimitSelection2').hide();
        $('#levelLimitSelection3').hide();
  }
  else if( $('#lineageV3') == "5")
  {
        $('#levelLimitSelection1').hide();
        $('#levelLimitSelection2').hide();
        $('#levelLimitSelection3').show();
  }
  else
  {
    $('#levelLimitSelection1').hide();
    $('#levelLimitSelection2').show();
    $('#levelLimitSelection3').hide();

  }

}