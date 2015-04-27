
function initialize() {

	var business_locations = [
	    ['Bahia', -12.99738083,-38.500014849],
	    ['Arcos', -20.28807, -45.54016],
	    ['São João del-Rei', -21.13154, -44.25306],
	    ['Porto Velho', -8.76116, -63.90043]
	];


	// Exibir mapa;
	var myLatlng = new google.maps.LatLng(-15.127750417479286, -53.18050174999996);
	var mapOptions = {
	zoom: 4,
	center: myLatlng,
	mapTypeId: google.maps.MapTypeId.ROADMAP
	}

	// Exibir o mapa na div #mapa;
	var map = new google.maps.Map(document.getElementById("mapa"), mapOptions);


	// Marcador personalizado;
	var image = 'http://i.imgur.com/svCNPky.png';


	for(var i = 0; i < business_locations.length; i++){
	    var marker = new google.maps.Marker({
		position: new google.maps.Latlng(business_locations[i][1], business_locations[i][2]),
		icon: image,
		map: map,
		title: 'test',
	    });
	}

}

// Função para carregamento assíncrono
function loadScript() {
	var script = document.createElement("script");
	script.type = "text/javascript";
	script.src ="http://maps.googleapis.com/maps/api/js?key=AIzaSyCE1ooPNpwB3bxj51xFAnepLzQQIQQGRTA&sensor=false&callback=initialize";
	 
	document.body.appendChild(script);
}

 
window.onload = loadScript;
