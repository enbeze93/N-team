<!DOCTYPE html>
<?php
session_start();
header('Content-type: text/html; charset=windows-1250'); 
require_once './vedett/adatok.php';
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1250">
<title>Kurzus jelenlét nyilvántartás</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script>
function ment(x) {
		let form = document.getElementById("jelen");
		document.getElementById("f_h").value=x.name;
		if (x.tagName=="SELECT") {
			document.getElementById("f_j").value=x.selectedIndex;
		} else {
			document.getElementById("f_e").value=x.value;
		}
		let bment=document.createElement("button");
		bment.type="submit";
		form.appendChild(bment);
		bment.click();
	}

</script>
</head>
<BODY>
<?php
if (isset($_SESSION["felhasznalo_jl"])) {
	include './vedett/mentes.php';
if (isset($_GET["id"])) {
	$c=db();
	$query=DB_idopont.$_GET["id"]." order by 1";
	$stid = oci_parse($c, $query);
	$r = oci_execute($stid);
	$row = oci_fetch_row($stid);
	$ido=0;
	if (isset($row[0])) {
		?>
		<div class="container-fluid">
		<h3>A kurzus hallgatói és időpontjai:</h3>
		
	<nav aria-label="idopont">
	<ul class="pagination justify-content-center">
  		<?php
			$fej=$row[0].". ".$row[1]."-".$row[2];
			$ido=$row[3];
			do {
				$aktiv='';
				if (isset($_GET["ido"]) && $_GET["ido"]==$row[3]) {
					$ido=$_GET["ido"];
					$fej=$row[0].". ".$row[1]."-".$row[2];
					$aktiv='  active';
				}
				echo '<li class="page-item'.$aktiv.'"><a class="page-link" href="kurzus.php?id='.$_GET["id"].'&ido='.$row[3].'"><div class="row justify-content-center">'.$row[0].'</div><div class="row justify-content-center">'.$row[1]."-".$row[2]."</div></a></li>";

			} while (($row = oci_fetch_row($stid)) != false);
		?>
	</ul>
	</nav>
	<form action="kurzus.php" method="post" name="jelen" id="jelen" hidden>
		<input type="text" id="f_k" name="f_k" value="<?php echo $_GET["id"]?>">
		<input type="text" id="f_h" name="f_h">
		<input type="text" id="f_i" name="f_i" value="<?php echo $ido?>">
		<input type="text" id="f_j" name="f_j" value="10">
		<input type="text" id="f_e" name="f_e" value="10">
	</form>	
		<div class="table-responsive">
		<table class="table table-bordered table-hover" id="kurzus_adatok" >
		<tr><th>Hallgató</th><th>
	<?php
		echo $fej.'</th><th>Összesítés</th></tr>';
		$query=DB_hallg.$_GET["id"]." and j.i_id=".$ido.DB_hallg2.$_GET["id"]." order by 1";
		$stid = oci_parse($c, $query);
		$r = oci_execute($stid);
		$row = oci_fetch_row($stid);
		if (isset($row[0])) {
			do {
				echo "<tr><td>".$row[0].'</td>';
				echo '<td><select name="'.$row[1].'" onchange="ment(this);"><option';
				if ($row[2]==0) { echo " selected";}
				echo '>Jelen</option><option';
				if ($row[2]==1) { echo " selected";}
				echo '>Hiányzás</option><option';
				if ($row[2]==2) { echo " selected";}
				echo '>Igazolt</option></select> <input type="number" name="'.$row[1].'" onchange="ment(this);" min="0" max="5" style="width:80px" value="'.$row[3].'"></td>';
				echo '<td>'.$row[4].' hiányzás';
				if ($row[5]>0) { echo ' ('.$row[5].' igazolt)'; }
				if ($row[6]>0) { echo ', jegyek átlaga:'.$row[6]; }
				echo '</td></tr>';
			} while (($row = oci_fetch_row($stid)) != false);
		}
		echo "</table></div></div>";
	}
	oci_close($c);
	
} 
}
else { 
	header('Location: https://neptun.uni-eszterhazy.hu/jelenlet/index.php');
}
?>




</body>
</html>


