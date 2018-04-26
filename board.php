<?php

class Board
{
	/**
	* Array
	*/
	private $board;
	
	/**
	*
	*/
	public function __construct (){
		if($_SESSION['board'] == ""){
			$this->board = [
				["","",""], 
				["","",""],
				["","",""],
			];
		} else {
			$this->board = $_SESSION['board'];
		}
	}
	
	/**
	* Postion gibt es über den Link und Symbol über die Session
	*/
	public function placeSymbol(){
		for($col = 0; $col <= 2; $col++){
			for($row = 0; $row <= 2; $row++){
				if($_GET["cell-".$col."-".$row] !== "") {
					if($this->board[$col][$row] == "") {
						$this->board[$col][$row] = $_GET["cell-".$col."-".$row];
					}
				}
			}
		}
	}
	
	/**
	*
	*/
	public function getBoard(){
		return($this->board);
	}
}
	
?>