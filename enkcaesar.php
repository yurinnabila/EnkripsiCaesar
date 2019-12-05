<?php
	$kalimat = $_GET["kata"];
	$key = $_GET["key"];
		for ($i=0; $i<strlen($kalimat);$i++) { 
			# code...
			$kode[$i]=ord($kalimat[$i]);
			$b[$i]=($kode[$i]+$key)%256;
			$c[$i]=chr($b[$i]);
		}
	echo "kalimat ASLI : ";
	for ($i=0; $i<strlen($kalimat);$i++) { 
		# code...
		echo $kalimat[$i];
	}
	echo "<br>";
	echo "hasil enkripsi : ";
	$hsl = '';
	for ($i=0; $i<strlen($kalimat); $i++) { 
		# code...
		echo $c[$i];
		$hsl=$hsl.$c[$i];
	}
	echo "<br>";
	//simpan data di file
	$fp = fopen("enkripsi.txt", "w");
	fputs($fp,$hsl);
	fclose($fp);
?>