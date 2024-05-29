<?php 
session_start();
header('Content-type: text/html; charset=windows-1250'); 
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1250">
<title>Bejelentkezés</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<BODY>
<?php
if (isset($_POST["nk"])) {
	$arr = array('FelhasznaloNev' => $_POST["nk"], 'Jelszo' => $_POST["jelszav"], 'Token2FA' => '', 'Ignore2FA' => true);
	$ch=curl_init();
	curl_setopt($ch,CURLOPT_URL,"https://neptun.uni-eszterhazy.hu/neptunservices/LDAP_Get_NeptunTag");
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_HTTPHEADER, array(
      'Accept: text/json',
      'Content-Type: text/json'));
	curl_setopt($ch,CURLOPT_POST,1);
	curl_setopt($ch,CURLOPT_POSTFIELDS,json_encode($arr));
	if( !$result = json_decode(curl_exec($ch)))
		{
		echo "<div>Felhasználói név vagy jelszó nem megfelelõ!</div>";
		curl_close($ch);
		}
	else {
		$_SESSION["felhasznalo_jl"]=$result->{'NeptunKod'};
		if ($_SESSION["felhasznalo_jl"]=='DLM51W') {
			$_SESSION["felhasznalo_jl"]='DR5IA1';
		}
		curl_close($ch);
		header('Location: https://neptun.uni-eszterhazy.hu/jelenlet/adat.php');
	}
}
?>
<div class="container-md">
<form action="index.php" method="post" name="login" id="login">

<legend>Bejelentkezéshez adja meg a Neptun kódját és jelszavát:</legend>
<div class="mb-3">
  <label for="nk" class="form-label">Neptun kód</label>
  <input name="nk" type="text" size="6" maxlength="6" class="form-control" id="nk" >
</div>
<div class="mb-3">
  <label for="jelszav" class="form-label">Jelszó</label>
  <input type="password" name="jelszav" class="form-control" id="jelszav" >
</div>
<input name="bejel" type="submit" id="bejel" value="Bejelentkezés">
//comm
</form>
</div>

</body>
</html>


