<script type="text/javascript"
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB0XI1HcY4q2p557zI3-f9rI4uB_VFIskc&amp;sensor=true">
    </script>
<div id="map-canvas" style="height:100%; width:100%;"></div>
<script>
    function initialise() {
         
    var myLatlng = new google.maps.LatLng(40.7306439,-73.989419); // Add the coordinates
    var mapOptions = {
        zoom: 13, // The initial zoom level when your map loads (0-20)
        center: myLatlng, // Centre the Map to our coordinates variable
        mapTypeId: google.maps.MapTypeId.ROADMAP, // Set the type of Map
        styles: [ {   "featureType":"landscape",    "stylers":[     {       "hue":"#F1FF00"     },      {       "saturation":-27.4      },      {       "lightness":9.4     },      {       "gamma":1     }   ] },  {   "featureType":"road.highway",   "stylers":[     {       "hue":"#0099FF"     },      {       "saturation":-20      },      {       "lightness":36.4      },      {       "gamma":1     }   ] },  {   "featureType":"road.arterial",    "stylers":[     {       "hue":"#00FF4F"     },      {       "saturation":0      },      {       "lightness":0     },      {       "gamma":1     }   ] },  {   "featureType":"road.local",   "stylers":[     {       "hue":"#FFB300"     },      {       "saturation":-38      },      {       "lightness":11.2      },      {       "gamma":1     }   ] },  {   "featureType":"water",    "stylers":[     {       "hue":"#00B6FF"     },      {       "saturation":4.2      },      {       "lightness":-63.4     },      {       "gamma":1     }   ] },  {   "featureType":"poi",    "stylers":[     {       "hue":"#9FFF00"     },      {       "saturation":0      },      {       "lightness":0     },      {       "gamma":1     }   ] }]
      }
    var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions); // Render our map within the empty div

    // Load a GeoJSON from the same server as our demo.
  	map.data.loadGeoJson('manhattan.geojson');

    var featureStyle = {
      fillColor: '#0088FF',
      strokeWeight: 1
    }
    map.data.setStyle(featureStyle);
         
}
google.maps.event.addDomListener(window, 'load', initialise); // Execute our 'initialise' function once the page has loaded. 

</script>