<?php
$f1=function()
{
	echo "Anonymous Function 1 <br>";
};

$f2=function($v1)
{
	echo "Anonymous Function2 value: $v1";
};

$f1();
$f2(10);

?>