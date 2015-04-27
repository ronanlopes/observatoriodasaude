<?php
	include("conexao_mysql.php");
?>	

<section class="cols2">
	<div class="col2">
		<div class="col-cnt2">

			<form class="form-horizontal" action="#">
				<fieldset>

					<!-- Form Name -->
					<legend>Filtros</legend>

					<!-- Search input-->
					<div class="control-group">
					  <label class="control-label" for="autor"><strong>Nome de usuário do autor: </strong></label>
					  <div class="controls">
						<input id="autor" name="autor" type="text">
					  </div>
					</div>

					<!-- Textarea -->
					<div class="control-group">
					  <label class="control-label" for=""><strong>Texto do Tweet:</strong></label>
					  <div class="controls">                     
						<textarea id="texto" name="texto"></textarea>
					  </div>
					</div>
					
					<!-- Select Basic -->
					<div class="control-group">
					  <label class="control-label" for="idioma"><strong>Idioma:</strong></label>
					  <div class="controls">
						<select id="idioma" name="idioma">
						  <option value="" selected="selected">-Selecione-</option>
						  <option value="es">Espanhol</option>
						  <option value="en">Inglês</option>
						  <option value="pt">Português</option>
						</select>
					  </div>
					</div>
					
					<!-- Button -->
					<div class="control-group">
					  <label class="control-label" for="pesquisar"></label>
					  <div class="controls">
							<input type=submit class=submit value="Pesquisar">
					  </div>
					</div>

				</fieldset>
			</form>

		</div>
	</div>
	<div class="col2">
		<div class="col-cnt2">

			<div id="resultados">
				<div class="titulo">
						Tweets 
				</div>
					<?php 
							if (isset($_GET['autor'])&&!empty($_GET['autor'])){
									$autor = $_GET['autor'];
							}
							if (isset($_GET['texto'])&&!empty($_GET['texto'])){
									$texto = $_GET['texto'];
							}
							if (isset($_GET['idioma'])&&!empty($_GET['idioma'])){
									$idioma = $_GET['idioma'];
							}

		
							if (basename($_SERVER["SCRIPT_FILENAME"])=="cancerdemama.php"){
								$tabela="twitter_cancerdemama";
							}else if (basename($_SERVER["SCRIPT_FILENAME"])=="cancerdepele.php"){
								$tabela="twitter_cancerdepele";
							}else if (basename($_SERVER["SCRIPT_FILENAME"])=="dengue.php"){
								$tabela="twitter_dengue";
							}else{
								$tabela="twitter_ebola";
							}


							//Definindo a consulta de acordo com os parâmetros disponíveis
							if (!empty($_GET['autor'])&&!empty($_GET['texto'])&&!empty($_GET['idioma'])){
								$sql = "SELECT `user.screen_name`, `user.profile_image_url`, `text` FROM `".$tabela."` WHERE `user.screen_name`='".$_GET['autor']."' and `text` LIKE '%".$_GET['texto']."%' and `user.lang`='".$_GET['idioma']."' LIMIT 10";
							}else if (!empty($_GET['autor'])&&!empty($_GET['texto'])){
								$sql = "SELECT `user.screen_name`, `user.profile_image_url`, `text` FROM `".$tabela."` WHERE `user.screen_name`='".$_GET['autor']."' and `text` LIKE '%".$_GET['texto']."%' LIMIT 10";
							}else if (!empty($_GET['texto'])&&!empty($_GET['idioma'])){
								$sql = "SELECT `user.screen_name`, `user.profile_image_url`, `text` FROM `".$tabela."` WHERE `text` LIKE '%".$_GET['texto']."%' and `user.lang`='".$_GET['idioma']."' LIMIT 10";
							}else if (!empty($_GET['autor'])&&!empty($_GET['idioma'])){
								$sql = "SELECT `user.screen_name`, `user.profile_image_url`, `text` FROM `".$tabela."` WHERE `user.screen_name`='".$_GET['autor']."' and `user.lang`='".$_GET['idioma']."' LIMIT 10";
							}else if (!empty($_GET['autor'])){
								$sql = "SELECT `user.screen_name`, `user.profile_image_url`, `text` FROM `".$tabela."` WHERE `user.screen_name`='".$_GET['autor']."' LIMIT 10";
							}else if (!empty($_GET['texto'])){
								$sql = "SELECT `user.screen_name`, `user.profile_image_url`, `text` FROM `".$tabela."` WHERE `text` LIKE '%".$_GET['texto']."%' LIMIT 10";
							}else if (!empty($_GET['idioma'])){	
								$sql = "SELECT `user.screen_name`, `user.profile_image_url`, `text` FROM `".$tabela."` WHERE `user.lang`='".$_GET['idioma']."' LIMIT 10";
							}else{
								$sql = "SELECT `user.screen_name`, `user.profile_image_url`, `text` FROM `".$tabela."` LIMIT 10";
							}


	
							// Perform Query
							$result = mysql_query($sql);

							// Check result
							// This shows the actual query sent to MySQL, and the error. Useful for debugging.
							if (!$result) {
							    $message  = 'Invalid query: ' . mysql_error() . "\n";
							    $message .= 'Whole query: ' . $sql;
							    die($message);
							}

							while ($row = mysql_fetch_assoc($result)) {
								echo "<div class='tweet'>";

								$linkimg=$row['user.profile_image_url'];

								echo "<img src=\"".$linkimg."\" onerror=imgError(this);>";
								echo "<a class=\"twitteruser\" href=http://www.twitter.com/".$row['user.screen_name']."><strong>@".$row['user.screen_name']."</strong></a><br>";
								$texto= (strlen($row['text']) > 130) ? substr($row['text'],0,130).'(...)' : $row['text'];
								echo $texto."</div>";					

							}
					?>

			</div>

		</div>
	</div>
	<div class="cl">&nbsp;</div>
</section>
