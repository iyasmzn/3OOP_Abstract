<?php
/**
 *
 */
trait pesan {
	public function pesan1() {
		echo "$this->nama is awesome!";
	}
	public function pesan2() {
		echo "$this->nama is fantastic!";
	}
	public function pesan3() {
		echo "$this->nama is monster!";
	}
}

class Player {
	use pesan;
	public $nama;
	function __construct($name) {
		$this->nama = $name;
	}
}

$messi = new Player('Messi');
$messi->pesan1();
$messi->pesan2();
$messi->pesan3();
?>