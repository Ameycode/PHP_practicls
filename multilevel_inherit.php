<?php
class first
{
	function d1()
	{
		echo "Grandparent...<br>";
	}
}
class second extends first
{
	function d2()
	{
		echo "Parent...<br>";
	}
}
class third extends second
{
	function d3($n)
	{
		echo "Child $n<br>";
	}
}
$ob=new third();
$ob->d1();
$ob->d2();
$ob->d3(1);
?>