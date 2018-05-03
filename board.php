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
		$this->board = [
			["","",""], 
			["","",""],
			["","",""],
		];
	}
	
	/**
	* Position and Symbol is given by the $_GET method
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
	* Returns the current board.
	*/
	public function getBoard(){
		return($this->board);
	}
}
	
?>