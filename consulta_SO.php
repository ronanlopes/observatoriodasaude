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


	$sql= "SELECT COUNT(*) FROM `".$tabela."` WHERE source='<a href=\"http://twitter.com/download/android\" rel=\"nofollow\">Twitter for Android</a>'";
	$result = mysql_query($sql);
	$android = mysql_result($result, 0);

	$sql= "SELECT COUNT(*) FROM `".$tabela."` WHERE source='<a href=\"http://twitter.com/download/iphone\" rel=\"nofollow\">Twitter for iPhone</a>'";
	$result = mysql_query($sql);
	$ios = mysql_result($result, 0);

	$sql= "SELECT COUNT(*) FROM `".$tabela."` WHERE source='<a href=\"http://www.twitter.com\" rel=\"nofollow\">Twitter for Windows Phone</a>'";
	$result = mysql_query($sql);
	$windows = mysql_result($result, 0);

	$sql= "SELECT COUNT(*) FROM `".$tabela."` WHERE source='<a href=\"http://twitter.com\" rel=\"nofollow\">Twitter Web Client</a>'";
	$result = mysql_query($sql);
	$web = mysql_result($result, 0);

	$total=$android+$ios+$windows+$web;


	mysql_close($conexao); 
?>

<script>
	 var VARS_GRAFICO = new Array();
	 VARS_GRAFICO[0] = <?php echo $android/$total;?>;
 	 VARS_GRAFICO[1] = <?php echo $ios/$total;?>;
	 VARS_GRAFICO[2] = <?php echo $windows/$total;?>;
	 VARS_GRAFICO[3] = <?php echo $web/$total;?>;
</script>


