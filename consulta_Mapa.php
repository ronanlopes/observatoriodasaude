 <?php
	include("conexao_mysql.php");

	if (basename($_SERVER["SCRIPT_FILENAME"])=="cancerdemama.php"){
		$tabela = "twitter_cancerdemama";
	}else if (basename($_SERVER["SCRIPT_FILENAME"])=="cancerdepele.php"){
		$tabela = "twitter_cancerdepele";
	}else if (basename($_SERVER["SCRIPT_FILENAME"])=="dengue.php"){	
		$tabela = "twitter_dengue";
	}else{
		$tabela = "twitter_ebola";
	}

	$sql = "SELECT `user.screen_name`, `user.profile_image_url`, `user.followers_count`, `coordinates.coordinates.0`, `coordinates.coordinates.1` FROM `".$tabela."` WHERE `coordinates.coordinates.0`and `coordinates.coordinates.1` <>''";
	
	// Perform Query
	$result = mysql_query($sql);

	// Check result
	// This shows the actual query sent to MySQL, and the error. Useful for debugging.
	if (!$result) {
	    $message  = 'Invalid query: ' . mysql_error() . "\n";
	    $message .= 'Whole query: ' . $sql;
	    die($message);
	}


	echo "	<script type=\"text/javascript\">
		var locations = [";

	while ($row = mysql_fetch_assoc($result)) {
		echo "['<img src=\"".$row['user.profile_image_url']."\" width=60px height=60px onerror=imgError(this); style=\"display: block; margin: 10px auto;\"> <a class=\"twitteruser\" href=\"http://www.twitter.com/".$row['user.screen_name']."\">@".$row['user.screen_name']."</a><br>".$row['user.followers_count']." seguidores',".$row['coordinates.coordinates.1'].",".$row['coordinates.coordinates.0']."],\n";
	}
	
	echo "];</script>";

?> 
