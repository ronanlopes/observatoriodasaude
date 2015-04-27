<?php
	include("conexao_mysql.php");
	if (basename($_SERVER["SCRIPT_FILENAME"])=="cancerdemama.php"){
		$tabela="facebook_cancerdemama";
	}else if (basename($_SERVER["SCRIPT_FILENAME"])=="cancerdepele.php"){
		$tabela="facebook_cancerdepele";
	}else if (basename($_SERVER["SCRIPT_FILENAME"])=="dengue.php"){
		$tabela="facebook_dengue";
	}else{
		$tabela="facebook_ebola";
	}

	
	$sql = "SELECT `message` FROM `".$tabela."`";

	// Perform Query
	$result = mysql_query($sql);

	// Check result
	// This shows the actual query sent to MySQL, and the error. Useful for debugging.
	if (!$result) {
	    $message  = 'Invalid query: ' . mysql_error() . "\n";
	    $message .= 'Whole query: ' . $sql;
	    die($message);
	}

	echo "	<section class='cols'>
						<div class='col'>
							<div class='termosfrequentes'>
								<div class='titulopost'>
									<a href='http://www.facebook.com'><img src='images/facebook.png'></a>Facebook
								</div>
								<div class='conteudotermos'>";
	
	while ($row = mysql_fetch_assoc($result)) {	
		if (array_key_exists("message",$row)){
			$text = $row['message'];
			$text = str_replace(array('#','?','.','!', ',', ':', ';', '%', '$', '@', '(', ')', '[', ']', '-', '_'), '',$text);
			$text = strtolower($text);
			$text = explode(' ',$text);
			foreach ($text as $key => $word ) {
				if (strlen($word) >4) {
					$words[] = $word;
				}
			}
		}
	}
	
	$count = array_count_values($words);

	array_multisort($count,SORT_DESC);

	$i = 1;
	foreach ($count as $key => $value) {

		if( $i <= 15 ) {

			$keyword[] = $key;

			echo "<div class = 'posts' style='font-size:15px;border-radius:0px;'>
						<b>".$key."</b><br>Número de ocorrências: ".$value."<br>
					</div>";
			$i++;
		}
	}
	
	echo "						</div>
						</div>
					</div>";












	if (basename($_SERVER["SCRIPT_FILENAME"])=="cancerdemama.php"){
		$tabela="instagram_cancerdemama";
	}else if (basename($_SERVER["SCRIPT_FILENAME"])=="cancerdepele.php"){
		$tabela="instagram_cancerdepele";
	}else if (basename($_SERVER["SCRIPT_FILENAME"])=="dengue.php"){
		$tabela="instagram_dengue";
	}else{
		$tabela="instagram_ebola";
	}

	
	$sql = "SELECT `caption.text` FROM `".$tabela."";

	// Perform Query
	$result = mysql_query($sql);

	// Check result
	// This shows the actual query sent to MySQL, and the error. Useful for debugging.
	if (!$result) {
	    $message  = 'Invalid query: ' . mysql_error() . "\n";
	    $message .= 'Whole query: ' . $sql;
	    die($message);
	}



	echo "					<div class='col'>
							<div class='termosfrequentes'>
								<div class='titulopost' style='background-color:#A57258;'>
									<a href='http://www.instagram.com'><img src='images/instagram.png'></a>Instagram
								</div>
								<div class='conteudotermos'>";
	
	while ($row = mysql_fetch_assoc($result)) {	
		$text = $row['caption.text'];
		$text = str_replace(array('#','?','.','!', ',', ':', ';', '%', '$', '@', '(', ')', '[', ']', '-', '_'), '',$text);
		$text = strtolower($text);
		$text = explode(' ',$text);
		foreach ($text as $key => $word ) {
			if (strlen($word) >4) {
				$words2[] = $word;
			}
		}
	}
	
	$count = array_count_values($words2);

	array_multisort($count,SORT_DESC);

	$i = 1;
	foreach ($count as $key => $value) {

		if( $i <= 15 ) {

			$keyword[] = $key;

			echo "<div class = 'posts' style='font-size:15px;border-radius:0px;'>
						<b>".$key."</b><br>Número de ocorrências: ".$value."<br>
					</div>";
			$i++;
		}
	}
	
	echo "						</div>
						</div>
					</div>";
	
	










	if (basename($_SERVER["SCRIPT_FILENAME"])=="cancerdemama.php"){
		$tabela="twitter_cancerdemama";
	}else if (basename($_SERVER["SCRIPT_FILENAME"])=="cancerdepele.php"){
		$tabela="twitter_cancerdepele";
	}else if (basename($_SERVER["SCRIPT_FILENAME"])=="dengue.php"){
		$tabela="twitter_dengue";
	}else{
		$tabela="twitter_ebola";
	}

	
	$sql = "SELECT `text` FROM `".$tabela."";

	// Perform Query
	$result = mysql_query($sql);

	// Check result
	// This shows the actual query sent to MySQL, and the error. Useful for debugging.
	if (!$result) {
	    $message  = 'Invalid query: ' . mysql_error() . "\n";
	    $message .= 'Whole query: ' . $sql;
	    die($message);
	}


	echo "					<div class='col'>
							<div class='termosfrequentes'>
								<div class='titulopost' style='background-color:#5EAADE;'>
									<a href='http://www.twitter.com'><img src='images/twitter.png'></a>Twitter 
								</div>
								<div class='conteudotermos'>";
	
	while ($row = mysql_fetch_assoc($result)) {	
		if (array_key_exists("text",$row)){
			$text = $row['text'];
			$text = str_replace(array('#','?','.','!', ',', ':', ';', '%', '$', '@', '(', ')', '[', ']', '-', '_'), '',$text);
			$text = strtolower($text);
			$text = explode(' ',$text);
			foreach ($text as $key => $word ) {
				if (strlen($word) >4) {
					$words3[] = $word;
				}
			}
		}
	}
	
	$count = array_count_values($words3);

	array_multisort($count,SORT_DESC);

	$i = 1;
	foreach ($count as $key => $value) {

		if( $i <= 15 ) {

			$keyword[] = $key;

			echo "<div class = 'posts' style='font-size:15px;border-radius:0px;'>
						<b>".$key."</b><br>Número de ocorrências: ".$value."<br>
					</div>";
			$i++;
		}
	}
	
	echo "						</div>
						</div>
					</div>
	</section>";

?>

