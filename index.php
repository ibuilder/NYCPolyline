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
      }
    var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions); // Render our map within the empty div

    // Load a GeoJSON from the same server as our demo.
  	map.data.loadGeoJson('manhattan.geojson');
         
}
google.maps.event.addDomListener(window, 'load', initialise); // Execute our 'initialise' function once the page has loaded. 

</script>