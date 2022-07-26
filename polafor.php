<?php
	$star=(int)readline("masukkan angka pola :  " );
	for( $a=0;$a<$star;$a++){
	for($b=0; $b<=$a; $b++){
		echo "*";
	}
	echo "\n";

}
	for ($h=0; $h < $star; $h++) { 
	for($j=0;$j<$star-$h;$j++){
		echo "@";
	}
	echo "\n";
	}
?>