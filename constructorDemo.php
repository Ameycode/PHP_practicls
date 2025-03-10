<?php
//Default Constructor...
/*class first
{
	public $n1;
	function __construct()
	{
		$this->n1=10;
	}
	function add()
	{
		echo "value: $this->n1";
	}
}
$ob=new first();
$ob->add();*/

//parameterized Constructor

class first
{
	public $n1;
	function __construct($no)
	{
		$this->n1=$no;
	}
	function add()
	{
		echo "value: $this->n1";
	}
}
$ob=new first(55);
$ob->add();
?>