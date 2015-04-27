<script>
function onTabSelect(index, targetElm, tabberId) { 
	if (tabberId == "view1") { 
		google.maps.event.trigger(map, "resize");
	}
}
</script>

<div id="conteudo">
	
	<ul class="tabs" data-persist="true">
	    <li><a href="#view1">Mapa de Usuários</a></li>
	    <li><a href="#view2">Sistemas Mais Utilizados</a></li>
	    <li><a href="#view3">Fotos Mais Curtidas</a></li>
	    <li><a href="#view4">Termos Mais Frequentes</a></li>
	    <li><a href="#view5">Pesquisar Tweets</a></li>
	</ul>
	<div class="tabcontents">
	    <div id="view1">

		<section class="testimonial">
			<h2>Mapa de Usuários</h2>
		</section>
		<div id="map" style="width: 800px; height: 500px; margin: 15px auto;"></div>
		<script type="text/javascript" src="js/googlemaps.js"></script>

	    </div>
	    <div id="view2">

			<section class="testimonial">
				<h2>Sistemas Operacionais Utilizados pelos Usuários</h2>
			</section>
			<script type="text/javascript" src="js/graficoSO.js"></script>
			<div id="grafico">
				<div id="chart2" class='graficos'>
					<svg> </svg>
				</div>						
			</div>

	    </div>
	    <div id="view3">

		<section class="testimonial">
			<h2>Fotos Mais Curtidas no Instagram</h2>
		</section>
		<?php include("consulta_FotosMaisCurtidas.php");?>

	    </div>
	    <div id="view4">

		<section class="testimonial">
			<h2>Termos Mais Frequentes nas Redes</h2>
		</section>
		<?php include("consulta_TermosFrequentes.php");?>

	    </div>
	    <div id="view5">

		<section class="testimonial">
			<h2>Pesquisar Tweets Armazenados</h2>
		</section>
		<?php include ("pesquisa_tweet.php");?>

	    </div>
	</div>


</div>


<div class="socials">
	<div class="socials-inner">
		<h3 align=center>Universidade Federal de São João del-Rei</h3>
		<div class="cl">&nbsp;</div>
	</div>
</div>
