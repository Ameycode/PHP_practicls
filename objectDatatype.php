<?php
class first
{
	function get_info()
	{
		$name=readline("Enter name: ");
	}
	function show_info()
	{
		echo "Hello".$name." welcome to php";
	}
}

$f=new first();
$f -> get_info();
$f -> show_info();

?>