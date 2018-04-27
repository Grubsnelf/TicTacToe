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
		$this->switchPlayer();
		$this->board = $board;
	}
	
	/**
	* Changes the current Player
	*/
	public function switchPlayer(){
		for($col = 0; $col <= 2; $col++){
			for($row = 0; $row <= 2; $row++){
				if($this->player1->getSymbol() == $_GET["cell-".$col."-".$row]) {
					$this->currentPlayer = $this->player1;
				}
				if($this->player2->getSymbol() == $_GET["cell-".$col."-".$row]) {
					$this->currentPlayer = $this->player2;
				}
			}
		}
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
		$winner = $this->currentStatus();
		print_r($winner);
	}
	
	/**
	*
	*/
	public function currentStatus(){
		//symbol
		if($this->currentPlayer === $this->player1){
			$symbol = $this->player2->getSymbol();
		} else {
			$symbol = $this->player1->getSymbol();
		}
		$board = $this->board->getBoard();
		
		//col
		$zaehler = 0;
		for($col = 0; $col <= 2; $col++){
			$zaehler = 0;
			for($row = 0; $row <= 2; $row++){
				if($board[$col][$row] == $symbol){
					$zaehler += 1;
					if($zaehler === 3) {
						return (1);
					}
				}	
			}
		}
		
		//row
		$zaehler = 0;
		for($row = 0; $row <= 2; $row++){
			$zaehler = 0;
			for($col = 0; $col <= 2; $col++){
				if($board[$col][$row] == $symbol){
					$zaehler += 1;
					if($zaehler === 3) {
						return (1);
					}
				}	
			}
		}
		
		//diagonal (\)
		$zaehler = 0;
		$row = 0;
		for($col = 0; $col <= 2; $col++){
			echo($board[$col][$row]);
			if($board[$col][$row] == $symbol){
				$zaehler += 1;
				if($zaehler === 3) {
					return (1);
				}
			}
			$row++;
		}
		
		//diagonal (/)
		$zaehler = 0;
		$row = 2;
		for($col = 0; $col <= 2; $col++){
			echo($board[$col][$row]);
			if($board[$col][$row] == $symbol){
				$zaehler += 1;
				if($zaehler === 3) {
					return (1);
				}
			}
			$row--;
		}
	}
	
		/**
	* 
	*/
	public function getCurrentPlayerSymbol(){
		return ($this->currentPlayer->getSymbol());
	}
	
}
	
?>