<?php
	$key=$_GET["key"];
	$nmfile="enkripsi.txt";
	$fp = fopen($nmfile, "r");
	$isi = fread($fp, filesize($nmfile));

	for ($i=0; $i < strlen($isi); $i++) { 
		# code...
		$kode[$i]=ord($isi[$i]);
		$b[$i]=($kode[$i]-$key)%256;
		$c[$i]=chr($b[$i]);
	}

	echo "kalimat chipertext : ";
	for ($i=0; $i < strlen($isi); $i++) { 
		# code...
		echo $isi[$i];
	}
	echo "<br";
	echo "hasil dekripsi : ";
	for ($i=0; $i < strlen($isi); $i++) { 
		# code...
		echo $c[$i];
	}
	echo "<br>";
?>