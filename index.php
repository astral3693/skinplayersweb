<?php
include "config.php";
$steamid = $_GET['id'];
$rs = $_GET['rs'];
$t_model =  $_GET['t_model'];
$ct_model =  $_GET['ct_model'];


   


$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica a conexão
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

$sql  = mysqli_query($conn, "SELECT * FROM playermodelchanger");
?>
<!DOCTYPE html>
<html lang="en"<?php if(WEB_STYLE_DARK) echo 'data-bs-theme="dark"'?>>

<head>
<title>select</title>



<meta charset="utf-8">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="style.css">
</head>
<body>

<hr>
<form action="update.php" method="get">
<div class='card-header'>
<h5 class='card-title item-name'>Skin Players Custom Admin & VIP</p></h5>

<div class="card-footer">
<table style="width:50%" >
<tr>

<th><?php if ($ct_model<>""){echo "<font color=grey> CT: ".strtoupper($ct_model)."</font>";}else{echo "<font color=grey> CT: Default</font>";} ?> <img id="image" height="200" src="img/counter-strike-2-changes.jpg" alt=""></th>
<th> <?php if ($t_model<>""){echo "</font><font color=grey>T: ".strtoupper($t_model)."</font>";}else{echo "<font color=grey> T: Default</font>";} ?><img id="image2" height="200" src="img/Is-Counter-Strike.jpg" alt=""></th>
</tr>

<tr><th>Skin Select CT:
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

<th>Skin Select T:
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
			<label for="cars">Id steam64:</label>
			<select  name="steamid" id="steamid"><option value="<?php echo $steamid;?>"><?php echo $steamid;?>
		   <?php
              while($resultado = mysqli_fetch_array($sql)){ ?>  
					
                  <option value="<?=  $resultado['steamid'] ?>"><?php echo $resultado['steamid']; ?></option>
				 
                  <?php } ?> </select></option> <input type="submit"></th>
				  
				  <th>
				 <?php  echo "<font color=green>".$rs."</font><br/>Steam " .$steamid;?>
    </th>
			
</tr>


</table>
</div>
</div>

<input type='hidden' id='t_model' name='t_model' value=''>
<input type='hidden' id='ct_model' name='ct_model' value=''>
</form>
<hr>

<!--LINK JQUERY-->
<script type="text/javascript" src="skins.js"></script>
<!--PERSONAL SCRIPT JavaScript-->


<div class="container">
		<footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
			<div class="col-md-4 d-flex align-items-center">
				<span class="mb-3 mb-md-0 text-body-secondary">© 2024 Skins Player Web v2.0 by Astral</span>
			</div>
		</footer>
	</div>
</body>
<html>