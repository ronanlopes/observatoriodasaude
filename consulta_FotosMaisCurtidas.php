<!--  Outer wrapper for presentation only, this can be anything you like -->
<div id="banner-slide" style="color:#000;font-size:16px;font-weight:bold;margin:0px auto 70px;">

	<!-- start Basic Jquery Slider -->
	<ul class="bjqs">


 <?php
	include("conexao_mysql.php");
	if (basename($_SERVER["SCRIPT_FILENAME"])=="cancerdemama.php"){
		$tabela="instagram_cancerdemama";
	}else if (basename($_SERVER["SCRIPT_FILENAME"])=="cancerdepele.php"){
		$tabela="instagram_cancerdepele";
	}else if (basename($_SERVER["SCRIPT_FILENAME"])=="dengue.php"){
		$tabela="instagram_dengue";
	}else{
		$tabela="instagram_ebola";
	}

	$sql = "SELECT `caption.text`, `images.standard_resolution.url`, `user.username`, `likes.count` FROM `".$tabela."` ORDER BY `likes.count` DESC LIMIT 10";

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
		$legenda= (strlen($row['caption.text']) > 150) ? substr($row['caption.text'],0,150).'(...)' : $row['caption.text'];
		echo "          <li style=\"padding:0px;\"><img src=\"".$row['images.standard_resolution.url']."\" title=\"@".$row['user.username'].": ".$legenda."<br>Número de curtidas: ".$row['likes.count']."\"></a></li>";
	}
?> 



        </ul>
        <!-- end Basic jQuery Slider -->

      </div>
      <!-- End outer wrapper -->
      
      <!-- attach the plug-in to the slider parent element and adjust the settings as required -->
      <script class="secret-source">
        jQuery(document).ready(function($) {
          
          $('#banner-slide').bjqs({
            animtype      : 'slide',
            height        : 480,
            width         : 510,
            responsive    : true,
	    automatic	  : false,
	    nexttext  : ">",
	    prevtext  : "<",
            randomstart   : true
          });
          
        });
      </script>

