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
		for($col = 0; $col < 3; $col++){
			for($row = 0; $row < 3; $row++){
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
	}
	
	/**
	* 
	*/
	public function move(){
		$this->board->placeSymbol();
		$winner = $this->currentStatus();
		if($winner === 1){
			if($this->currentPlayer === $this->player1){
				$this->currentPlayer = $this->player2;
			} else {
				$this->currentPlayer = $this->player1;
			}
			echo($this->currentPlayer->getName().' wins!');
			echo("<br>New Game in 5 seconds");
			session_destroy();
			header("Refresh:5;url=index.php");
		}
		if($winner === 2){
			echo("DRAW");
			session_destroy();
			header("Refresh:5;url=index.php");	
		}
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
			if($board[$col][$row] == $symbol){
				$zaehler += 1;
				if($zaehler === 3) {
					return (1);
				}
			}
			$row--;
		}
		
		//fullboard (3x3)
		$zaehler = 0;
		for($col = 0; $col <= 2; $col++){
			for($row = 0; $row <= 2; $row++){
				if($board[$col][$row] != ""){
					$zaehler += 1;
					if($zaehler === 9) {
						return (2);
					}
				}	
			}
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