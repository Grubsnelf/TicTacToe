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
	* Position and Symbol is given by the $_GET method
	*/
	public function placeSymbol(){
		for($col = 0; $col < 3; $col++){
			for($row = 0; $row < 3; $row++){
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