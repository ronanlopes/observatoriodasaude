<?php
	include("conexao_mysql.php");

	$sql= "SELECT COUNT(*) FROM `facebook_cancerdemama`";
	$result = mysql_query($sql);
	$facebook = mysql_result($result, 0);

	$sql= "SELECT COUNT(*) FROM `instagram_cancerdemama`";
	$result = mysql_query($sql);
	$instagram = mysql_result($result, 0);

	$sql= "SELECT COUNT(*) FROM `twitter_cancerdemama`";
	$result = mysql_query($sql);
	$twitter = mysql_result($result, 0);

	$quantidade[0] = $facebook+$twitter+$instagram;
	
	$sql= "SELECT COUNT(*) FROM `facebook_cancerdepele`";
	$result = mysql_query($sql);
	$facebook = mysql_result($result, 0);

	$sql= "SELECT COUNT(*) FROM `instagram_cancerdepele`";
	$result = mysql_query($sql);
	$instagram = mysql_result($result, 0);

	$sql= "SELECT COUNT(*) FROM `twitter_cancerdepele`";
	$result = mysql_query($sql);
	$twitter = mysql_result($result, 0);

	$quantidade[1] = $facebook+$twitter+$instagram;

	$sql= "SELECT COUNT(*) FROM `facebook_dengue`";
	$result = mysql_query($sql);
	$facebook = mysql_result($result, 0);

	$sql= "SELECT COUNT(*) FROM `instagram_dengue`";
	$result = mysql_query($sql);
	$instagram = mysql_result($result, 0);

	$sql= "SELECT COUNT(*) FROM `twitter_dengue`";
	$result = mysql_query($sql);
	$twitter = mysql_result($result, 0);

	$quantidade[2] = $facebook+$twitter+$instagram;

	$sql= "SELECT COUNT(*) FROM `facebook_ebola`";
	$result = mysql_query($sql);
	$facebook = mysql_result($result, 0);

	$sql= "SELECT COUNT(*) FROM `instagram_ebola`";
	$result = mysql_query($sql);
	$instagram = mysql_result($result, 0);

	$sql= "SELECT COUNT(*) FROM `twitter_ebola`";
	$result = mysql_query($sql);
	$twitter = mysql_result($result, 0);

	$quantidade[3] = $facebook+$twitter+$instagram;

?>

<script>
	 var VARS_GRAFICO = new Array();
	 VARS_GRAFICO[0] = <?php echo $quantidade[0]; ?>;
 	 VARS_GRAFICO[1] = <?php echo $quantidade[1]; ?>;
	 VARS_GRAFICO[2] = <?php echo $quantidade[2]; ?>;
	 VARS_GRAFICO[3] = <?php echo $quantidade[3]; ?>;
</script>
