<html>
	<head>
		<title>Sorteador Online</title>
		<style>



		</style>
	</head>
	<body style="margin:0px; font-family:Verdana, Arial">
		<div class="topo_inf" style="width:100%; height:50px; background-color:white; border-bottom:0.5px solid #d1d1d1;">
			<div class="topo_left" style="width:50%; height:50px; float:left;">
				<div class="nome_site_topo" style="color:#FF8C00; float:left; font-size:30px; padding-left:10px;
				line-height:50px;">Sorteador Online</div>
			</div>
			<div class="topo_right" style="width:50%; height:50px; float:right;">
				<a href="contato.php"><div class="contato_topo_right" style="color:#afafaf; float:right; font-size:15px; line-height:50px;padding-right:15px;">Contate-nos!</div></a>
				<a href="cara_coroa.php"><div class="cara_ou_coroa_topo_right" style="color:#afafaf; float:right; font-size:15px; line-height:50px; padding-right:15px;">Cara ou Coroa</div></a>
			</div>
		</div>
		<br/>
		<div class="nome_logo" style="width:100%; max-width:1200px; min-height:100px; margin:auto; font-size:130px; text-align:center; color:#FF8C00;">Sorteador
			<img src="images/orange_lucky.png" style="width:110px; height:110px; margin:auto;"/>
		</div>
		<form method="POST">
			<div class="conteudo_sorteador" style="width:100%; max-width:1200px; min-height:10px; margin:auto;">
				<div class="sorteador_geral" style="width:100%; height:150px; background-color:#f2f2f2; border-radius:5px; line-height:150px;">
					<div class="sortear_quantidade" style="width:10%; height:150px; color:#333333; font-size:30px; line-height:150px; 
					text-align:center; float:left; padding-left:180px;">Sortear</div>
					<input type="number" name="number_q" value="1" min="1" max="10000" style="width:100px; height:60px; color:#333333; font-size:30px; font-family:Verdana; text-align:center; float:left;"/>
					<div class="numero_quantidade" style="width:10%; height:150px; color:#333333; font-size:30px; line-height:150px; 
					text-align:center; float:left;">numero</div>
					<div class="entre_entrelinhas" style="width:10%; height:150px; color:#333333; font-size:30px; line-height:150px; 
					text-align:center; float:left;">entre</div>
					<input type="number" name="number_min" value="1" min="1" max="10000" style="width:100px; height:60px; color:#333333; font-size:30px; font-family:Verdana; text-align:center; float:left;"/>
					<div class="e_entrelinhas" style="width:10%; height:150px; color:#333333; font-size:30px; line-height:150px; 
					text-align:center; float:left;">e</div>
					<input type="number" name="number_max" value="100" min="1" max="10000" style="width:100px; height:60px; color:#333333; font-size:30px; font-family:Verdana; text-align:center; float:left;"/>	
				</div>
			</div>
			<div class="ajeitar" style="width:100%; height:70px; margin:auto;">
				<input type="submit" name="sortear" value="Sortear" style="width:100%; height:70px; background-color:#EEE; font-size:50px; border-radius:5px; border:0.5px solid #CCC;"/>
			</div>
		</form>
		<div class="resultado" style="width:80%; min-height:60px; background-color:#EFEFEF; color:#373737; margin:auto; line-height:60px; text-align:center; font-size:35px; border-radius:5px;">
			<?php
				require "sorteador_resultado.php";
			?>
		</div>
	</body>
</html>