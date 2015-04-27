<?php
	include("consulta_SO.php");
	include("consulta_Mapa.php");
?>	

<!DOCTYPE html>
<html lang="pt" style="-webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%;">
<head>

	<?php include("header.php");?>

</head>
<body>
	<div id="wrapper">
		
		<div class="shell">
			
			<div class="container">
				
				<header id="header">
					<img src='images/logo2.png' width=120 height=120><a href="#"><h1 id="logo">Observatório da Saúde</h1></a>
				</header>
				<nav id="navigation">
					<ul>
						<li><a href="index.php">Página Inicial</a></li>
						<li><a href="cancerdemama.php">Câncer de Mama</a></li>
						<li><a href="cancerdepele.php">Câncer de Pele</a></li>
						<li class="active"><a href="dengue.php">Dengue</a></li>
						<li style="background:none"><a href="ebola.php">Ebola</a></li>
					</ul>
				</nav>
				<div class="main">

				<?php include("main-content.php");?>
			
				<div id="footer">
					
					<div class="footer-bottom">
						<nav class="footer-nav">
							<ul>
								<li><a href="index.php">Página Inicial</a></li>
								<li><a href="cancerdemama.php">Câncer de Mama</a></li>
								<li><a href="cancerdepele.php">Câncer de Pele</a></li>
								<li class="active"><a href="dengue.php">Dengue</a></li>
								<li><a href="ebola.php">Ebola</a></li>
							</ul>
						</nav>
						<p class="copy"><strong>Ronan Lopes</strong></p>
					</div>
					
				</div>
			</div>
	
		</div>
	
	</div>
	
</body>
</html>
