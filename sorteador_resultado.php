<?php

	if(isset($_POST['number_q']) && !empty($_POST['number_q']) && isset($_POST['number_max']) && !empty($_POST['number_max']) && isset($_POST['number_min']) && !empty($_POST['number_min'])) {

			$quant_sorteado = $_POST['number_q'];

			$quant_min = $_POST['number_min'];
			
			$quant_max = $_POST['number_max'];
			
			for($i=0 ;$i<$quant_sorteado ;$i++) {

		echo rand($quant_min, $quant_max).";";
	}
		}

?>