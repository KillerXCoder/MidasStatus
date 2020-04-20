<?php
/*
#===================================================================
# Názov: Web interface pre zobrazenie online hráčov
# Autor: KillerXCoder (Peter Federl)
# E-Mail: peter.federl@gmail.com
#===================================================================
*/
$servername = '';
$username = '';
$password = '';
$dbname = '';
$conn = new mysqli($servername, $username, $password, $dbname);
$conn -> set_charset("utf8");

$sql = "SELECT * FROM online_hraci WHERE server = 'Bungee'";
$result = $conn->query($sql);
if($result->num_rows > 0){
	while($row = $result->fetch_assoc()) {
		$bungee = $row['hraci'];
		if ($row['online'] == 0){
			$bungee_offline = 1;
		}
		else{
			$bungee_offline = 0;
		}
	}
}

$sql = "SELECT * FROM online_hraci WHERE server = 'RPG'";
$result = $conn->query($sql);
if($result->num_rows > 0){
	while($row = $result->fetch_assoc()) {
		$rpg = $row['hraci'];
		if ($row['online'] == 0){
			$ŕpg_offline = 1;
		}
		else{
			$rpg_offline = 0;
		}
	}
}

$sql = "SELECT * FROM online_hraci WHERE server = 'Survival'";
$result = $conn->query($sql);
if($result->num_rows > 0){
	while($row = $result->fetch_assoc()) {
		$survival = $row['hraci'];
		if ($row['online'] == 0){
			$survival_offline = 1;
		}
		else{
			$survival_offline = 0;
		}
	}
}

$sql = "SELECT * FROM online_hraci WHERE server = 'Slimefun'";
$result = $conn->query($sql);
if($result->num_rows > 0){
	while($row = $result->fetch_assoc()) {
		$slimefun = $row['hraci'];
		if ($row['online'] == 0){
			$slimefun_offline = 1;
		}
		else{
			$slimefun_offline = 0;
		}
	}
}

$sql = "SELECT * FROM online_hraci WHERE server = 'Creative'";
$result = $conn->query($sql);
if($result->num_rows > 0){
	while($row = $result->fetch_assoc()) {
		$creative = $row['hraci'];
		if ($row['online'] == 0){
			$creative_offline = 1;
		}
		else{
			$creative_offline = 0;
		}
	}
}	

$sql = "SELECT * FROM online_hraci WHERE server = 'Vanilla'";
$result = $conn->query($sql);
if($result->num_rows > 0){
	while($row = $result->fetch_assoc()) {
		$vanilla = $row['hraci'];
		if ($row['online'] == 0){
			$vanilla_offline = 1;
		}
		else{
			$vanilla_offline = 0;
		}
	}
}	



echo '<style>
	.swal-button {
	  padding: 7px 19px;
	  border-radius: 0px !IMPORTANT;
	  background-color: #ff0000 !IMPORTANT;
	  font-size: 12px;
	  text-shadow: 0px -1px 0px rgba(0, 0, 0, 0.3);
	  border-radius: 0.5em !IMPORTANT;
	}
	.logo{
	border:none !important; 
	width:3em;
	vertical-align:middle;
	color:black !IMPORTANT;
	text-decoration:none;
	text-align:center;
	}
	.hover1{
	color:white !IMPORTANT;
	text-decoration:none !IMPORTANT;
	}
	.divclass{
	cursor: pointer;
	background-color: #303030;
	padding:0.5em; 
	border-radius: 1em; 
	max-width:100%;  
	font-size:1.1em; 
	font-family:Work Sans; 
	font-weight:bold; 
	color:white;
	margin-left: 3em;
	margin-bottom: 0.3em;
	}
	.divclass1{
	cursor: pointer;
	background-color: #303030;
	padding:0.5em; 
	border-radius: 1em; 
	max-width:100%;  
	font-size:1.1em; 
	font-family:Work Sans; 
	font-weight:bold; 
	color:white;
	margin-bottom: 0.3em;
	}
	div.divclass:hover{
	cursor: pointer;
	background-color: black;
	padding:0.5em; 
	border-radius: 1em; 
	max-width:100%;  
	font-size:1.1em; 
	font-family:Work Sans; 
	font-weight:bold; 
	color:white;
	}
	div.divclass1:hover{
	cursor: pointer;
	background-color: black;
	padding:0.5em; 
	border-radius: 1em; 
	max-width:100%;  
	font-size:1.1em; 
	font-family:Work Sans; 
	font-weight:bold; 
	color:white;
	}
	a.hover1:hover{
	color:red !IMPORTANT;
	text-decoration:none !IMPORTANT;
	}
</style>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script type="text/javascript">

function copyText(){

	navigator.clipboard.writeText("game.midascraft.sk");
	swal("Hotovo!", "IP adresa bola skopírovaná!", "success");
}

</script>
<script>
function schovanie(){
	var xx = document.getElementById("schovat2");
	if (xx.style.display === "none") {
		xx.style.display = "block";
	} else {
		xx.style.display = "none";
  }
}
</script>
';




echo '<br><link href="https://fonts.googleapis.com/css?family=Montserrat:900, 800|Work+Sans:300" rel="stylesheet">';
echo '<div class="divclass1" onclick="schovanie();" style="">';
echo '<table style="position:relative;top:50%; bottom:50%;border:none !important;margin:0px;">';
echo '
  <tr>';
if($bungee_offline == 0){
	echo '<td class="logo" rowspan="2" style=""><img src="https://midascraft.sk/wp-content/uploads/2019/10/zelena.png" style="max-width:2em; height:2em; "></td>';
}
else{
	echo '<td class="logo" rowspan="2" style=""><img src="https://midascraft.sk/wp-content/uploads/2019/10/cervena.png" style="max-width:2em; height:2em; "></td>';
}
echo '
    <td class="" style="text-shadow: 0px 0px 1px #000000;text-transform: uppercase;font-weight:bolder !IMPORTANT;border:none !important; padding-bottom:0.1em; padding-left:0.1em "><a href="#" class="hover1" onclick="copyText();return false;" id="copy1">game.midascraft.sk</a></td>
	<td rowspan="2" style="border:none !important;vertical-align:middle;text-align:center;color:white;"><i class="fas fa-plus fa-lg"></i></td>
  </tr>
  <tr>';
if($bungee_offline == 0)  {
	echo '<td class="" style="overflow: hidden;white-space: nowrap;border:none !important; padding-top:0.1em; padding-left:0.1em">Práve je online ';	
	echo '<div style="color:#ff0000;display: inline-block;">' .  $bungee . '</div>' ;
	echo ' hráčov</td>
	  </tr>
	  ';
}
else{
	echo '<td class="" style="overflow: hidden;white-space: nowrap;border:none !important; padding-top:0.1em; padding-left:0.1em; color:#ff0000;">OFFLINE</td></tr>';
}
echo '</table>';
echo '</div>';

echo '<div id="schovat2" style="display:none;">';
echo '<div class="divclass" id="schovat" onclick="copyText();return false;" style="">';
echo '<table style="position:relative;top:50%; bottom:50%;border:none !important;margin:0px;">';
echo '
  <tr>
	<td class="logo" rowspan="2" style=""><img src="https://gamepedia.cursecdn.com/minecraft_gamepedia/b/ba/Book_and_Quill.png" style="max-width:2.5em; height:2.5em; "></td>
    <td class="" style="text-shadow: 0px 0px 1px #000000;text-transform: uppercase;font-weight:bolder !IMPORTANT;border:none !important; padding-bottom:0.1em; padding-left:0.1em "><a href="#" class="hover1" onclick="copyText();return false;" id="copy1">RPG</a></td>
  </tr>';
if($rpg_offline == 0)  {
	echo '<td class="" style="overflow: hidden;white-space: nowrap;border:none !important; padding-top:0.1em; padding-left:0.1em">Práve je online ';	
	echo '<div style="color:#ff0000;display: inline-block;">' .  $rpg . '</div>' ;
	echo ' hráčov</td>
	  </tr>
	  ';
}
else{
	echo '<td class="" style="overflow: hidden;white-space: nowrap;border:none !important; padding-top:0.1em; padding-left:0.1em; color:#ff0000;">OFFLINE</td></tr>';
}
echo '</table>';
echo '</div>';


echo '<div class="divclass" id="schovat" onclick="copyText();return false;" style="">';
echo '<table style="position:relative;top:50%; bottom:50%;border:none !important;margin:0px;">';
echo '
  <tr>
	<td class="logo" rowspan="2" style=""><img src="https://midascraft.sk/wp-content/uploads/2019/10/580b57fcd9996e24bc43c301.png" style="transform: scaleX(-1);max-width:2.5em; height:2.5em; "></td>
    <td class="" style="text-shadow: 0px 0px 1px #000000;text-transform: uppercase;font-weight:bolder !IMPORTANT;border:none !important; padding-bottom:0.1em; padding-left:0.1em "><a href="#" class="hover1" onclick="copyText();return false;" id="copy1">Survival</a></td>
  </tr>
  <tr>';
if($survival_offline == 0)  {
	echo '<td class="" style="overflow: hidden;white-space: nowrap;border:none !important; padding-top:0.1em; padding-left:0.1em">Práve je online ';	
	echo '<div style="color:#ff0000;display: inline-block;">' .  $survival . '</div>' ;
	echo ' hráčov</td>
	  </tr>
	  ';
}
else{
	echo '<td class="" style="overflow: hidden;white-space: nowrap;border:none !important; padding-top:0.1em; padding-left:0.1em; color:#ff0000;">OFFLINE</td></tr>';
}
echo '</table>';
echo '</div>';


echo '<div class="divclass" id="schovat" onclick="copyText();return false;" style="">';
echo '<table style="position:relative;top:50%; bottom:50%;border:none !important;margin:0px;">';
echo '
  <tr>
	<td class="logo" rowspan="2" style=""><img src="https://www.pngkey.com/png/full/136-1362375_slime-crafting-slime-ball-minecraft-png.png" style="max-width:2.5em; height:2.5em; "></td>
    <td class="" style="text-shadow: 0px 0px 1px #000000;text-transform: uppercase;font-weight:bolder !IMPORTANT;border:none !important; padding-bottom:0.1em; padding-left:0.1em "><a href="#" class="hover1" onclick="copyText();return false;" id="copy1">Slimefun</a></td>
  </tr>
  <tr>';
if($slimefun_offline == 0)  {
	echo '<td class="" style="overflow: hidden;white-space: nowrap;border:none !important; padding-top:0.1em; padding-left:0.1em">Práve je online ';	
	echo '<div style="color:#ff0000;display: inline-block;">' .  $slimefun . '</div>' ;
	echo ' hráčov</td>
	  </tr>
	  ';
}
else{
	echo '<td class="" style="overflow: hidden;white-space: nowrap;border:none !important; padding-top:0.1em; padding-left:0.1em; color:#ff0000;">OFFLINE</td></tr>';
}
echo '</table>';
echo '</div>';

echo '<div class="divclass" id="schovat" onclick="copyText();return false;" style="">';
echo '<table style="position:relative;top:50%; bottom:50%;border:none !important;margin:0px;">';
echo '
  <tr>
	<td class="logo" rowspan="2" style=""><img src="https://midascraft.sk/wp-content/uploads/2019/10/Beacon.png" style="max-width:2.6em; height:2.6em; "></td>
    <td class="" style="text-shadow: 0px 0px 1px #000000;text-transform: uppercase;font-weight:bolder !IMPORTANT;border:none !important; padding-bottom:0.1em; padding-left:0.1em "><a href="#" class="hover1" onclick="copyText();return false;" id="copy1">Creative</a></td>
  </tr>
  <tr>';
if($creative_offline == 0)  {
	echo '<td class="" style="overflow: hidden;white-space: nowrap;border:none !important; padding-top:0.1em; padding-left:0.1em">Práve je online ';	
	echo '<div style="color:#ff0000;display: inline-block;">' .  $creative . '</div>' ;
	echo ' hráčov</td>
	  </tr>
	  ';
}
else{
	echo '<td class="" style="overflow: hidden;white-space: nowrap;border:none !important; padding-top:0.1em; padding-left:0.1em; color:#ff0000;">OFFLINE</td></tr>';
}
echo '</table>';
echo '</div>';

echo '<div class="divclass" id="schovat" onclick="copyText();return false;" style="">';
echo '<table style="position:relative;top:50%; bottom:50%;border:none !important;margin:0px;">';
echo '
  <tr>
	<td class="logo" rowspan="2" style=""><img src="https://midascraft.sk/wp-content/uploads/2019/10/Grass_Block_Revision_6.png" style="max-width:2.6em; height:2.6em; "></td>
    <td class="" style="text-shadow: 0px 0px 1px #000000;text-transform: uppercase;font-weight:bolder !IMPORTANT;border:none !important; padding-bottom:0.1em; padding-left:0.1em "><a href="#" class="hover1" onclick="copyText();return false;" id="copy1">SemiVanilla</a></td>
  </tr>
  <tr>';
if($vanilla_offline == 0)  {
	echo '<td class="" style="overflow: hidden;white-space: nowrap;border:none !important; padding-top:0.1em; padding-left:0.1em">Práve je online ';	
	echo '<div style="color:#ff0000;display: inline-block;">' .  $vanilla . '</div>' ;
	echo ' hráčov</td>
	  </tr>
	  ';
}
else{
	echo '<td class="" style="overflow: hidden;white-space: nowrap;border:none !important; padding-top:0.1em; padding-left:0.1em; color:#ff0000;">OFFLINE</td></tr>';
}
echo '</table>';
echo '</div>';



echo '</div>';

?>