<?php

class Board
{
	/**
	* @var array $board the board
	*/
	private $board;
	
	/**
	* Sets $board
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
		for($col = 0; $col < 3; $col++){
			for($row = 0; $row < 3; $row++){
				if(isset($_GET["cell-".$col."-".$row])) {
					if(empty($this->board[$col][$row])) {
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