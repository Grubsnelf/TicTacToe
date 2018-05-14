<?php

class Player
{
	/**
	* @var string $name the name
	*/
	private $name;
	/**
	* @var string $symbol the symbol
	*/
	private $symbol;
	
	/**
	* Sets $name / $symbol
	* @param $name as string
	* @param $symbol as string
	*/
	public function __construct ($name, $symbol){
		$this->name = $name;
		$this->symbol = $symbol;
	}
	
	/**
	* Returns the name
	*/
	public function getName(){
		return($this->name);
	}
	
	/**
	* Returns the symbol
	*/
	public function getSymbol(){
		return($this->symbol);
	}
}
	
?>