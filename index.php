<html>
<head>
<?php
if (isset($_POST['LightON']))
{
exec("sudo python /home/pi/final-project/motorleft.py");
}
if (isset($_POST['LightOFF']))
{
exec("sudo python /home/pi/final-project/motorright.py");
}
 if (isset($_POST['RobotDemo']))
{
exec("sudo python /home/pi/final-project/motorforward.py");
}
?>
 <P>
    
 <center>
  <P>
   roboto on</P>
<form method="post">
<button class="btn" name="LightON">robot left</button> <P>
 <button class="btn" name="LightOFF">robot right</button><br><br>
 <P>
    <P>
     <button class="btn" name="RobotDemo">Robot forward</button>
 </center>
 
    <br><br><br><br>
</form>
</html>
