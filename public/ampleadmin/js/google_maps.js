var GoogleMapsHelper = {};

GoogleMapsHelper.initDirectionRendererMap = function(id) {

	var directionsService = new google.maps.DirectionsService();
    var directionsDisplay = new google.maps.DirectionsRenderer();
    var map = new google.maps.Map(document.getElementById(id), {
      zoom: 7
    });
    directionsDisplay.setMap(map);
    

};

GoogleMapsHelper.getMapLatLng = function(lat, lng){
	return new google.maps.LatLng(lat, lng);
};

/**
*  
*/
GoogleMapsHelper.calculateDistanceBetweenTwoLocations = function(p1, p2){

	return (google.maps.geometry.spherical.computeDistanceBetween(p1, p2) / 1000).toFixed(2);

};


/**
* 
*/
GoogleMapsHelper.calculateAndDisplayRoute = function(directionsService, directionsDisplay) {

	directionsService.route({
      origin: {
        lat: latitudeOrigin,
        lng: longitudeOrigin,
        icon: tractorIcon
        },
      destination: {
        lat: latitudeDestination,
        lng: longitudeDestination
      },
      travelMode: 'DRIVING'
    }, function(response, status) {
      if (status === 'OK') {
        directionsDisplay.setDirections(response);
      } else {
        window.alert('Directions request failed due to ' + status);
      }
    });

};

GoogleMapsHelper.addMarker = function (){

};

GoogleMapsHelper.getGeoCodedLocation = function (){

};




