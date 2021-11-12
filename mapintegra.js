
 
src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap"
 
let map;

function initMap() {
  map = new google.maps.Map(document.getElementById("map"), {
    center: { lat: -34.397, lng: 150.644 },
    zoom: 8,
  });
}
function getLocation(){
    if(!navigator.geolocation)
        return null;
        navigator.geolocation.getCurrentPosition((pos) => {
            document.getElementById("lat").innerText = pos.coords.latitude;
            document.getElementById("long").innerText = pos.coords.longitude;
        });
    }