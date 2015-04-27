<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=0" />

<?php
if (basename($_SERVER["SCRIPT_FILENAME"])=="index.php"){
	echo "<title>Observatório da Saúde - Página Inicial</title>";
}else if (basename($_SERVER["SCRIPT_FILENAME"])=="cancerdemama.php"){
	echo "<title>Observatório da Saúde - Câncer de Mama</title>";
}else if (basename($_SERVER["SCRIPT_FILENAME"])=="cancerdepele.php"){
	echo "<title>Observatório da Saúde - Câncer de Pele</title>";
}else if (basename($_SERVER["SCRIPT_FILENAME"])=="dengue.php"){
	echo "<title>Observatório da Saúde - Dengue</title>";
}else if (basename($_SERVER["SCRIPT_FILENAME"])=="ebola.php"){
	echo "<title>Observatório da Saúde - Ebola</title>";
}else{
	echo "<title>Observatório da Saúde</title>";
}?>


<link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
<link rel="stylesheet" href="css/form.css" type="text/css" media="all" />

<script src="http://maps.google.com/maps/api/js?sensor=false" type="text/javascript"></script>

<script src="js/jquery-1.8.0.min.js" type="text/javascript"></script>
<script src="js/functions.js" type="text/javascript"></script>
<script src="nvd3/lib/d3.v3.js"></script>
<script src="nvd3/nv.d3.js"></script>
<script src="nvd3/src/utils.js"></script>
<script src="nvd3/src/tooltip.js"></script>
<script src="nvd3/src/models/legend.js"></script>
<script src="nvd3/src/models/axis.js"></script>
<script src="nvd3/src/models/scatter.js"></script>
<script src="nvd3/src/models/line.js"></script>
<script src="nvd3/src/models/historicalBar.js"></script>
<script src="nvd3/src/models/linePlusBarWithFocusChart.js"></script>


<!-- bjqs.css contains the *essential* css needed for the slider to work -->
<link rel="stylesheet" href="js/basic-jquery-slider-master/bjqs.css">

<!-- some pretty fonts for this demo page - not required for the slider -->
<link href='http://fonts.googleapis.com/css?family=Source+Code+Pro|Open+Sans:300' rel='stylesheet' type='text/css'> 

<!-- demo.css contains additional styles used to set up this demo page - not required for the slider --> 
<link rel="stylesheet" href="js/basic-jquery-slider-master/demo.css">

<!-- load jQuery and the plugin -->
<script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
<script src="js/basic-jquery-slider-master/js/bjqs-1.3.min.js"></script>
    
<link href="nvd3/src/nv.d3.css" rel="stylesheet" type="text/css">	

<script type="text/javascript" src="js/imgerror.js"></script>

<script src="tab-content/tabcontent.js" type="text/javascript"></script>
<link href="tab-content/template5/tabcontent.css" rel="stylesheet" type="text/css" />
