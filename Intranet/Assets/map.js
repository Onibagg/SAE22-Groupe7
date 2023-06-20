function initMap() {
  // Coordonnées de Londres
  var positions = [
    {
      lat: 48.8566,
      lng: 2.3522,
      title: "Paris",
      info: "Headquarters",
    },
    {
      lat: 28.630731,
      lng: 77.214347,
      title: "New Dehli",
      info: "Bureaux de New Dehli",
    },
    {
      lat: 40.711801,
      lng: -74.01312,
      title: "NYC",
      info: "NAB Show NYC",
    },
    {
      lat: 48.5734,
      lng: 7.7521,
      title: "Strasbourg",
      info: "Salon du Numérique",
    },
    {
      lat: 47.2184,
      lng: -1.5536,
      title: "Nantes",
      info: "Evenement été 2023",
    },
    {
      lat: 9.044541,
      lng: 7.45868,
      title: "Abuja",
      info: "Bureaux responsable Afrique",
    },
    {
      lat: 48.6493,
      lng: -2.026,
      title: "Saint-Malo",
      info: "Team Building",
    },
    {
      lat: 37.334537,
      lng: -122.008981,
      title: "San José",
      info: "US Office",
    },
    {
      lat: -22.95203,
      lng: -43.21076,
      title: "Rio de Janeiro",
      info: "Partenariat Carnaval de Rio",
    },
  ];

  // Créer une carte centrée sur Londres
  var map = new google.maps.Map(document.getElementById("map"), {
    zoom: 2,
    center: {
      lat: 25,
      lng: -30.888334,
    },
  });

  positions.forEach(function (position) {
    var marker = new google.maps.Marker({
      position: {
        lat: position.lat,
        lng: position.lng,
      },
      map: map,
      label: position.label,
    });

    // Créer une infobulle avec le libellé et le texte supplémentaire
    var infowindow = new google.maps.InfoWindow({
      content: "<strong>" + position.title + "</strong><br>" + position.info,
    });

    // Ajouter un événement de clic pour afficher l'infobulle
    marker.addListener("click", function () {
      infowindow.open(map, marker);
    });
  });
}
