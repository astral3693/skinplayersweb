<?php
include "config.php";

if (isset($_GET["id"], $_GET["rs"], $_GET["t_model"], $_GET["ct_model"], $_GET["img"], $_GET["img2"])) {
	
$steamid = $_GET['id']; $rs = $_GET['rs']; $t_model =  $_GET['t_model']; $ct_model =  $_GET['ct_model']; $img =  $_GET['img']; $img2 =  $_GET['img2'];

}else{
	
$steamid = ''; $rs = ''; $t_model =  ''; $ct_model =  ''; $img =  ''; $img2 =  '';

}

   


$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica a conexão
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}
define('WEB_STYLE_DARK', 'data-bs-theme="dark"');
$sql  = mysqli_query($conn, "SELECT * FROM playermodelchanger");
?>
<!DOCTYPE html>
<html lang="en"<?php if(WEB_STYLE_DARK) echo 'data-bs-theme="dark"'?>>

<head>
<title>Skin Players Custom Admin & VIP</title>



<meta charset="utf-8">
<link rel="icon" href="favicon.ico">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"></script>

	<link rel="stylesheet" href="style2.css">
	
	<script>	
	$(document).ready(function(){
  $('#dropDown').click(function(){
    $('.drop-down').toggleClass('drop-down--active');
  });
});</script>
</head>
<body>
<?php include "home.php";  ?>
<hr>
<form action="update.php" method="get">
<div class='card-header'>
<h5 class='card-title item-name'><font color='#4682B4'><img src="OIG2.jpg" width="120" height="105" />Skin Players Custom Admin & VIP</img></p></h5>


<table style="width:70%" class="drop-down__button"><font color="white">
<tr><th><font color="white">Server</font></th>	<th><font color="white">Players</font></th>	<th><font color="white">IP</font></th>	<th><font color="white">Port</font></th>	<th><font color="white">Map</font></th>	<th>.</th></tr>
<tr>
<?php
    $link = "Server.xml";
    $xml = simplexml_load_file($link) -> channel;


    foreach($xml -> item as $item){?>
		
       <th><marquee><font color='white'><?php echo utf8_decode($item -> title); ?></font></marquee></th>";
		
        <th><font color='white'><?php echo utf8_decode($item -> playes); ?></font></th>";
		<th><font color='white'><?php echo utf8_decode($item -> ip); ?></font></th>";
		<th><font color='white'><?php echo utf8_decode($item -> port); ?></font></th>";
		<th><font color='white'><?php echo utf8_decode($item -> map); ?></font></th>";
		<th><button onclick="document.location='steam://connect/<?php echo utf8_decode($item -> ip).":".utf8_decode($item -> port); ?>'">Connect</button></th></tr>
		
   <?php } 
?>
</tr>
</table>
<div class="card-footer">

<center>
<table style="width:50%" >
<tr>

<th><?php if ($ct_model<>""){echo "<font color=grey> CT: ".strtoupper($ct_model)."</font><img id='image' height='200' src='".$img."' alt=''>";}else{echo "<font color=grey> CT: Default</font><img id='image' height='200' src='img/counter-strike-2-changes.jpg' alt=''>";} ?> </th>
<th> <?php if ($t_model<>""){echo "</font><font color=grey>T: ".strtoupper($t_model)."</font><img id='image2' height='200' src='".$img2."' alt=''>";}else{echo "<font color=grey> T: Default</font><img id='image2' height='200' src='img/Is-Counter-Strike.jpg' alt=''>";} ?></th>
</tr>

<tr><th><font color='#4682B4'>Skin Select CT:</font>
           <select onchange="changingSelection(this)"><option value="">Default</option>				  
				  <?php
    $link = "Skin_Players.xml";
    $xml = simplexml_load_file($link) -> channel;


    foreach($xml -> item as $item){
		if (utf8_decode($item -> side)== "CT" or utf8_decode($item -> side)== "ALL" ){
        echo "<option value="
        .utf8_decode($item -> title)." ";
        echo ">".utf8_decode($item -> title)."</option>";
    } 
}
?>
				  
				  
            </select> 
			
			
			
</th>

<th><font color='#4682B4'>Skin Select T:</font>
           <select onchange="changingSelection2(this)"><option value="">Default</option>				  
				  <?php
    $link = "Skin_Players.xml";
    $xml = simplexml_load_file($link) -> channel;


    foreach($xml -> item as $item){
		if (utf8_decode($item -> side)== "T" or utf8_decode($item -> side)== "ALL" ){
        echo "<option value="
        .utf8_decode($item -> title)." ";
        echo ">".utf8_decode($item -> title)."</option>";
		}
    } 
?>
				  
				  
            </select> 
</th>
			
			
			</tr>
			<tr>
			<th>
			<label for="cars"><font color='#4682B4'>Id steam64:</font></label>
			<select  name="steamid" id="steamid"><option value="<?php echo $steamid;?>"><?php echo $steamid;?>
		   <?php
              while($resultado = mysqli_fetch_array($sql)){ ?>  
					
                  <option value="<?=  $resultado['steamid'] ?>"><?php echo $resultado['steamid']; ?></option>
				 
                  <?php } ?> </select></option> <input type="submit"></th>
				  
				  <th>
				 <?php  echo "<font color=green>".$rs."</font><br/><font color='#4682B4'>Steam</font> " .$steamid;?>
    </th>
			
</tr>


</table></center>
</div>
</div>

<input type='hidden' id='t_model' name='t_model' value=''>
<input type='hidden' id='ct_model' name='ct_model' value=''>
<input type='hidden' id='img' name='img' value=''>
<input type='hidden' id='img2' name='img2' value=''>
</form>
<div style='text-align:left'>
<font color='#4682B4'>Useful commands:</font><p><textarea cols="70" rows="8" disabled>!rcon pmc_resynccache
!modeladmin reload
!rcon sv_cheats 1
thirdperson
!rcon sv_cheats 0
!rcon css_addadmin 76561198115162119 Astral #pmc/admin 99 99999
</textarea></p></div>
<hr>

<!--LINK JQUERY-->
<script type="text/javascript" src="skins.js"></script>
<!--PERSONAL SCRIPT JavaScript-->


<div class="container">
		<footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
			<div class="col-md-4 d-flex align-items-center">
				<span class="mb-3 mb-md-0 text-body-secondary"><font color='#4682B4'>© 2024 GAMIER NO MORE Web v2.0 by Astral</font></span>
			</div>
		</footer>
	</div>
</body>
<html>