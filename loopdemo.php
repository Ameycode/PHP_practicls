<?php
for($i=1; $i<=30; $i++)
	if($i%2==0)
		echo "Even 1: $i <br>";

$a=1;
while($a<=30){
	if($a%2==0){
		echo "Even 2: $a <br>";
	}
	$a++;
}
$a=1;
do{
	if($a%2==0){
		echo "Even 3: $a <br>";	
	}
	$a++;
	
}while($a<=30);
?>