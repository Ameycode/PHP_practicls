<?php
//using interface
class first
{
	function d1()
	{
		echo "Grandparent...<br>";
	}
}
interface second
{
	public function d2();
}
class third extends first implements second
{
	function d2()
	{
		echo "Parent...<br>";
	}
	function d3($n)
	{
		echo "Child $n<br>";
	}
}
$ob=new third();
$ob->d1();
$ob->d2();
$ob->d3(1);

//using trait
/*
class first
{
	function d1()
	{
		echo "Grandparent...<br>";
	}
}
trait second
{
	public function d2()
	{
		echo "Parent...<br>";
	}
}
class third extends first
{
	use second;
	function d3($n)
	{
		echo "Child $n<br>";
	}
}
$ob=new third();
$ob->d1();
$ob->d2();
$ob->d3(1);*/
?>