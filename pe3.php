<?php
$a=600851475143;
$prime=array();
function isnotprime($a){
	for($i=2;$i<=$a/2;$i++){
		if($a%$i==0){
			$prime[$a]=0;
			return 0;
		}
	}
	return 1;
}
	for($i=0;$i<=$a/2;$i++){
		array_push($prime, $i);
		//$prime[$i]=1;
	}
	
	$in=1;
	for($i=2;$i<=$a/2;$i++){
		if($a%$i==0)if($prime[$i]==1)if(isnotprime($i)==1)$in=$i;
	}
	echo $in;	

?>