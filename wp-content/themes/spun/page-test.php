<form action="" method="post">
 
Which buildings do you want access to?<br />
<input type="checkbox" name="sticker[]" value="Scientist" />Acorn Building<br />
<input type="checkbox" name="sticker[]" value="Athlete" />Brown Hall<br />
<input type="checkbox" name="sticker[]" value="C" />Carnegie Complex<br />
<input type="checkbox" name="sticker[]" value="D" />Drake Commons<br />
<input type="checkbox" name="sticker[]" value="E" />Elliot House
 
<input type="submit" name="formSubmit" value="Submit" />
 
</form>

<?php
  $aDoor = $_POST['sticker'];
  if(empty($aDoor)) 
  {
    echo("You didn't select any buildings.");
  } 
  else
  {
    $N = count($aDoor);
 
    echo("You selected $N door(s): ");
    for($i=0; $i < $N; $i++)
    {
      echo($aDoor[$i] . " ");
    }
  }
?>
