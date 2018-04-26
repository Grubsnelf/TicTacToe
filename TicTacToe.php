<?php

class TicTacToe
{
	/**
	* Is needed to use player1 in TicTacToe
	*/
	public $player1;

	/**
	* Is needed to use player2 in TicTacToe
	*/
	public $player2;
	
	/**
	* Is needed to use $board in TicTacToe
	*/
	public $board;
	
	/**
	* Represents the current player.
	*/
	public $currentPlayer;
	
	/**
	*
	*/
	public function __construct ($player1, $player2, $board){
		$this->player1 = $player1;
		$this->player2 = $player2;
		$this->currentPlayer = $this->player1;
		$this->board = $board;
	}
	
	/**
	* Changes the current Player
	*/
	public function switchPlayer(){
		if($this->currentPlayer === $this->player1){
			$this->currentPlayer = $this->player2;
		} else {
			$this->currentPlayer = $this->player1;
		}
		print_r($this->currentPlayer);
	}
	
	/**
	* 
	*/
	public function move(){
		$this->board->placeSymbol();
		$this->currentStatus();
	}
	
	/**
	*
	*/
	public function currentStatus(){
		$symbol = $this->currentPlayer->getSymbol();
		$zaehler = 0;
		for($col = 0; $col <= 2; $col++){
			for($row = 0; $row <= 2; $row++){
				if($board[$col][row] == $symbol){
					$zaehler += 1;
				}	
			}
		}
		print_r($zaehler);
	}
	
}
	
?>