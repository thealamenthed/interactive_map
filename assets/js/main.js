

// Add header and footer content // ------------------------------------------
/*
fetch("../parts/header.html")
  .then(response => {
    return response.text()
  })
  .then(data => {
    document.querySelector("header").innerHTML = data;
  });

fetch("../parts/footer.html")
  .then(response => {
    return response.text()
  })
  .then(data => {
    document.querySelector("footer").innerHTML = data;
  });
*/

// Animate with barba.js // --------------------------------------------------
/*
barba.init({
    schema: {
        prefix: 'data-custom',
        wrapper: 'wrap'
      }
})
*/


// Leaflet.js // -------------------------------------------------------------
let map = L.map('map').setView([48.864716, 2.349014], 6)
L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 19,
    attribution: '© OpenStreetMap'
}).addTo(map);

/*
L.marker([51.5, -0.09]).addTo(map)
    .bindPopup('A pretty CSS3 popup.<br> Easily customizable.')
    .openPopup();
*/

    fetch('api/list.php')
    .then(response => {
      return response.json();
    })
    .then(data => {

      data.map(place => {
        L.marker([place.lat, place.lng])
        .bindPopup(`${place.name}<br>${place.adress}`)
        .addTo(map)
      })
  
    }) 

    var popup = L.popup()
		.setLatLng([48.864716, 2.349014])
		.setContent('We are here.')
		.openOn(map);

    function onMapClick(e) {
      popup
        .setLatLng(e.latlng)
        .setContent('You clicked the map at ' + e.latlng.toString())
        .openOn(map);
    }
  
    map.on('click', onMapClick);

// list // -------------------------------------------------------------------
class Card {
  constructor(title, text, img) {
    this.title = title;
    this.text = text;
    this.img = img;
  }
}
