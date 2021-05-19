<style>
#map {
  height: 400px;
  width: 100%;
 }
 </style>
 <htm;>
<h3>Maps Google Maps Demo</h3>
<div id="map"></div>
<!-- Replace the value of the key parameter with your own API key. -->
<script async defer
src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAFdMK4tEw_DBvYLaWgEuIKaVqAPejwm9U&callback=initMap">
</script>
<script>

function initMap() {
  var direction = {lat:28.027138,  lng:73.302155 };
  var map = new google.maps.Map(document.getElementById('map'), {
    zoom: 4,
    center: direction
  });
  var marker = new google.maps.Marker({
    position: direction,
    map: map
  });
}
</script>
</html>
