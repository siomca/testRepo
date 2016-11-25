<?php

class maClasse {

	protected $valeur;

	function __construct($val)
	{
		$this->valeur = $val;
	}

	function affValeur()
	{
		echo $this->valeur;
	}

}

class maClasse2 extends maClasse {

	function __construct($val)
	{
		$this->valeur1 = $val*10;
	}
}

$a = new maClasse2(10);
$a->affvaleur(); 
echo $a->valeur1;
?>