// JavaScript Document


var gMapAPIKey = 'AIzaSyCAQYzSKskbBb1XAyEP6IVfs6OOidHOmgY';

var map;

var myLatLng = {lat: 37.7698293, lng: -122.4661049};
var myLatLng1 = {lat: 37.7859072, lng: -122.4008003};


var contentString = '<p>Save $3 on admission when you walk, bike, or take public transportation! <br> ' +
		'For additional help getting to and from the Academy, please visit <br>' + 
		'<a href="http://maps.google.com/intl/en/landing/transit/#mdy">'+
		'Google Transit.' + '</a></p>';


var contentString1 = '<p><strong>Museum Hours</strong> <br> ' +
		'Open Friday–Tuesday 9:30 a.m.–6 p.m. <br>' +
		'and Thursday until 9:30 p.m.</p>';

function initMap() {
	map = new google.maps.Map(document.getElementById('map'), {
	  center: myLatLng,
	  zoom: 12,
	  mapTypeId: google.maps.MapTypeId.ROADMAP,
	  draggable: false,
	  scrollwheel: false
	});


	var marker = new google.maps.Marker({
  		position: myLatLng,
  		map: map,
  		title: 'Visit the California Science Academy!',
  		animation: google.maps.Animation.DROP
	});

	var marker1 = new google.maps.Marker({
  		position: myLatLng1,
  		map: map,
  		title: 'Visit the SF Museum of Modern Art!',
  		animation: google.maps.Animation.DROP
	});



	var infowindow = new google.maps.InfoWindow({
       	content: contentString
    });

    var infowindow1 = new google.maps.InfoWindow({
       	content: contentString1
    });

	


	function toggleBounce() {
        if (marker.getAnimation() !== null) {
          marker.setAnimation(null);
        } else {
          marker.setAnimation(google.maps.Animation.BOUNCE);
        }
      }

    marker.addListener('click', function() {
       infowindow.open(map, marker);
    });

    marker.addListener('click', toggleBounce);

    marker1.addListener('click', function() {
       infowindow1.open(map, marker1);
    });

    marker1.addListener('click', toggleBounce);

}

