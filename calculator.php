x<?php


	// $x = $_POST['Opreator'];

	// function x();


	// if x(add) {
	// 	echo $_POST['First'] + $_POST['Second'];
	// } else if x(multiply) {

	// 	echo $_POST['First'] * $_POST['Second'];
	// 	} else if x(subtract) {

	// 		echo $_POST['First'] - $_POST['Second'];
	// 			} else if x(devision) {
				
	// 			echo $_POST['First'] / $_POST['Second'];
	// 				} 

	function add($x, $y) {
		return $x + $y;
	}
	function subtract($x, $y) {
		return $x - $y;
	}
	function multiply($x, $y) {
		return $x * $y;
	}
	function devision($x, $y) {
		return $x / $y;
	}
	
	if ($_POST['Opreator'] == "+") {

		echo add($_POST['First'], $_POST['Second']);
	} elseif ($_POST['Opreator'] == "-") {

		echo subtract($_POST['First'], $_POST['Second']);
	} elseif ($_POST['Opreator'] == "*") {

		echo multiply($_POST['First'], $_POST['Second']);
	} elseif ($_POST['Opreator'] == "/") {

		echo devision($_POST['First'], $_POST['Second']);
	} else {
		echo "error";
	}
	

?>