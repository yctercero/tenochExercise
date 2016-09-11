<?php

	if(isset($_GET['b'])){
			include $_GET['b'] . ".php";
		}
		else{
			include "home.php";
		}

?>