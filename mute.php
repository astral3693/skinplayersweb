<?php
include "config.php";

if (isset($_GET["id"], $_GET["rs"], $_GET["t_model"], $_GET["ct_model"])) {
	
$steamid = $_GET['id']; $rs = $_GET['rs']; $t_model =  $_GET['t_model']; $ct_model =  $_GET['ct_model'];

}else{
	
$steamid = ''; $rs = ''; $t_model =  ''; $ct_model =  '';

}

   


$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica a conexão
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}
define('WEB_STYLE_DARK', 'data-bs-theme="dark"');
$sql  = mysqli_query($conn, "SELECT * FROM sa_mutes");
?>

<!DOCTYPE html>
<html lang="en"<?php if(WEB_STYLE_DARK) echo 'data-bs-theme="dark"'?>>

<head>
<title>LIST MUTE Gamier NO MORE</title>

<meta charset="utf-8">
	<link rel="icon" href="favicon.ico">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="style3.css">
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
<form action="mute.php" method="get">
<div class='card-header'>
<h5 class='card-title item-name'><img src="OIG2.jpg" width="120" height="105" /><font color='#4682B4'>Gamier NO MORE LIST MUTE </font></img></p></h5>
<table style="width:70%" class="drop-down__button">
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
</tr></table>
<hr>
<table style="width:100%" >
<tr bgcolor=#708090>
<div class="card-footer">
<h3><center><font color='#4682B4'>LIST MUTE</font></center></h3>
<hr>

<th>Player_name</th><th>Player_steamid</th>	<th>Admin_steamid</th>	<th>Admin_name</th>	<th>Reason</th>	<th>Duration</th>	<th>Ends</th><th>Status</th>
</div></tr>

<div class="card-footer">
<?php echo $steamid;
              while($resultado = mysqli_fetch_array($sql)){  
			  echo "<tr><th><font color='#4682B4'>".$resultado['player_name']."</font></th>";  
			  echo "<th><a href='https://steamcommunity.com/profiles/".$resultado['player_steamid']."'>".$resultado['player_steamid']."</a></th>";
			  echo "<th><a href='https://steamcommunity.com/profiles/".$resultado['admin_steamid']."'>".$resultado['player_steamid']."</a></th>";
			  echo "<th><font color='#4682B4'>".$resultado['admin_name']."</font></th>";
			  echo "<th><font color='#4682B4'>".$resultado['reason']."</font></th>";
			  echo "<th><font color='#4682B4'>".$resultado['duration']."</font></th>";
			  echo "<th><font color='#4682B4'>".$resultado['ends']."</font></th>";
			  echo "<th><font color='#4682B4'>".$resultado['status']."</font></th></tr>";
			  
			  } 
			  ?> 

<input type='hidden' id='t_model' name='t_model' value=''>
<input type='hidden' id='ct_model' name='ct_model' value=''>

</table>
</form>
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