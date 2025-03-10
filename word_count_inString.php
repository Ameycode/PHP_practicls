<?php
$string = "Hello World This is PHP";
$count=1;
for($i=0;$i<=strlen($string);$i++)
{
	if($string[$i]==" "){
	$count+=1;
}
}
echo"Lenght: $count";
?>
