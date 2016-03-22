<?php

require_once('config.php');
//$rodzaj = mysql_real_escape_string(htmlspecialchars($_GET['rodzaj']));

$rodzaj = $db -> real_escape_string(htmlspecialchars($_GET['rodzaj']));
if($rodzaj==-1){	 // -1 to odczytuje wszystkie !
	$sql = "SELECT * from cennik";
	
	$wynik = $db->query($sql);
	if ($wynik === false){
	$db -> close();
	return false;
	}
	else {
		$rows = array();
		while (($row = $wynik -> fetch_assoc()) !== null){
			$rows[] = $row;
	}
	print json_encode($rows);
	$db -> close();
	}
}
else { // DLA POJEDYNCZEGO REKORDU
	$sql ="SELECT * from cennik WHERE rodzaj='$rodzaj'";
	
	$wynik = $db -> query($sql);
	print json_encode($wynik -> fetch_assoc());
	$wynik -> close();
	$db -> close();
	
}return false;
?>