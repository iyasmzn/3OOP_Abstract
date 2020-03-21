<?php
/**
 *
 */
abstract class Player {
	public $nama, $goals;
	public function __construct($nama) {
		$this->nama = $nama;
	}
	abstract public function goal_msg();
}

class Goal extends Player {
	public function set_score($score) {
		$this->goals = $score;
	}
	public function goal_msg() {
		echo "$this->nama made $this->goals goals!";
	}
}

$Ronaldinho = new Goal('Ronaldinho');
$Ronaldinho->set_score(100);
$Ronaldinho->goal_msg();
?>