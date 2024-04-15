<?php 
session_start();
header('Content-type: text/html; charset=windows-1250'); 
require_once './vedett/adatok.php';
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1250">
<title>Jelenléti adatok kezelése</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</head>
<BODY>
<?php
if (!isset($_SESSION["felhasznalo_jl"])) {
	header('Location: https://neptun.uni-eszterhazy.hu/jelenlet/index.php');
} else {
	$c=db();
	$query=DB_KURZUS.$_SESSION["felhasznalo_jl"]."' order by 1,2,3";
	$stid = oci_parse($c, $query);
	$r = oci_execute($stid);
	$row = oci_fetch_row($stid);
	if (isset($row[4])) {
		?>
		<div class="container">
		<h3>Kedves <?php echo $row[4]; ?>, itt találhatóak a 2023/24/2-es kurzusok, a kurzuskódra kattintva lehet továbbhaladni.</h3>
		<table class="table table-bordered" id="adatok" >
		<tr><th>Tárgynév</th><th>Tárgykód</th><th>Kurzuskód</th><th>Létszám</th></tr>
		<?php
		do
		{
			echo '<tr><td>'.$row[0].'</td><td>'.$row[1].'</td><td> <a href="kurzus.php?id='.$row[5].'">'.$row[2].'</a></td><td>'.$row[3].'</td></tr>';
		} while (($row = oci_fetch_row($stid)) != false);
		echo '</table>';
	} else {
		echo '<h3>Nincs ebben a félévben kurzus Önhöz rendelve!</h3>';
	}
oci_close($c);
}?>
</div>
</body>
</html>


