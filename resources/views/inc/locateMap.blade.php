@section('map')

<div class="container" id="mapParent"  data-aos="fade-up">
	<h1 class="myWhiteText text-center">REACH US</h1>
	<div class="googleMap" id="googleMap">
	
	</div>
</div>


<script>
function myMap() {
var mapProp= {
  center:new google.maps.LatLng(21.190252, 72.842160),
  zoom:9,
};
var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
var marker = new google.maps.Marker({
	position: new google.maps.LatLng(21.190252, 72.842160),
	map: map
});
}
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBdrvmvqn9IkOVN6vL-QLdL5CkRdFo1zsk&callback=myMap"></script>


@show