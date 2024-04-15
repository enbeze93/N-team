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

</script>
</head>
<BODY>
<?php


if (isset($_SESSION["felhasznalo_jl"]) && isset($_GET["id"])) {
	$c=db();
	$query=DB_idopont.$_GET["id"]." order by 1";
	$stid = oci_parse($c, $query);
	$r = oci_execute($stid);
	$row = oci_fetch_row($stid);
	if (isset($row[0])) {
		?>
		<div class="container">
		<h3>A kurzus hallgatói és időpontjai:</h3>
		<table class="table table-bordered" id="kurzus_adatok" >
		<tr><th>Hallgató</th>
		<?php
			do {
				echo "<th>".$row[0]."-".$row[1]."</th>";
			} while (($row = oci_fetch_row($stid)) != false);
		echo "</tr>";
		$query=DB_hallg.$_GET["id"]." order by 1";
		$stid = oci_parse($c, $query);
		$r = oci_execute($stid);
		$row = oci_fetch_row($stid);
		if (isset($row[0])) {
			do {
				echo "<tr><td>".$row[0]."</td></tr>";
			} while (($row = oci_fetch_row($stid)) != false);
		}
		echo "</table></div>";
	}
	oci_close($c);
} else { 
	header('Location: https://toneptun.uni-eszterhazy.hu/jelenlet/index.php');
}
?>




</body>
</html>


