<?php

class TicTacToe
{
	/**
	* Wird benötigt um den Spieler1 in TicTacToe aufrufen zu können.
	*/
	public $player1;

	/**
	* Wird benötigt um den Spieler2 in TicTacToe aufrufen zu können.
	*/
	public $player2;
	
	/**
	* Wird benötigt um das Board in TicTacToe aufrufen zu können.
	*/
	public $board;
	
	/**
	*
	*/
	public $currentPlayer;
	
	/**
	*
	*/
	public function __construct ($player1, $player2, $board){
		$this->player1 = $player1;
		$this->player2 = $player2;
		$this->board = $board;
	}
	
	/**
	* Wechselt den aktuellen Spieler
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
	}
	
	/**
	*
	*/
	public function currentStatus(){

	}
	
}
	
?>