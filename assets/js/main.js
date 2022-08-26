
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
let map = L.map("map").setView([48.864716, 2.349014], 12);
L.tileLayer("https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png", {
  maxZoom: 19,
  attribution: "© OpenStreetMap",
}).addTo(map);

/*
L.marker([51.5, -0.09]).addTo(map)
    .bindPopup('A pretty CSS3 popup.<br> Easily customizable.')
    .openPopup();
*/

fetch("api/list.php") // on fait un fetch pour faire appel à lapi
  .then((response) => {
    // et recupere la reponse json
  
    return response.json();
  })
  .then((data) => {
    console.log(data);
    data.map((place) => {
      console.log(place);
      //on fait une boucle qui recupere un element d'un objet pour créer des markers
      L.marker([place.lat, place.lng])
        .bindPopup(
          `${place.name} <button  click="onStarClick()" class="favorite-button"> 
          <svg fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z" />
        </svg>
        </button><br>
          ${place.adress}<br><img class="image-popup" src="${place.img}"/>`
        )
        .addTo(map);
    });
  });

var popup = L.popup()
  .setLatLng([48.864716, 2.349014])
  .setContent("We are here.")
  .openOn(map);

function onMapClick(e) {
  popup
    .setLatLng(e.latlng)
    .setContent("You clicked the map at " + e.latlng.toString())
    .openOn(map);
}
function onStarClick() {
  
}
map.on("click", onMapClick);

fetch("api/data.php") // 
  .then((response) => {
    // et recupere la reponse json
    console.log(response)
    return response.json();
  })
  .then((data) => {
    console.log(data);

    result.append(ul);
      //on fait une boucle qui recupere un element d'un objet pour créer des markers
      let creation = document.getElementById('div1');
      ([data.lat, data.lng])
        .bindPopup(
          `${data.name}  
          ${data.img}
          ${data.category}
          ${data.adress}<br><img class="image-popup" src="${data.img}"/>`
        )
        .addTo();
    })
    .then((data) => {
      console.log(data);
  
      result.append(ul);
        //on fait une boucle qui recupere un element d'un objet pour créer des markers
        let creation = document.getElementById('div1');
        ([data.lat, data.lng])
          .bindPopup(
            `${data.name}  
            ${data.img}
            ${data.category}
            ${data.adress}<br><img class="image-popup" src="${data.img}"/>`
          )
          .addTo();
      });
      const data = { username: 'example' };

      fetch('api/data.php', {
        method: 'POST', // or 'PUT'
        headers: {
          'Content-Type': 'application/json',
        },
        body: JSON.stringify(data),
      })
        .then((response) => response.json())
        .then((data) => {
          console.log('Success:', data);
        })
        .catch((error) => {
          console.error('Error:', error);
        });
    

// list // -------------------------------------------------------------------
class Card {
  constructor(title, text, img) {
    this.title = title;
    this.text = text;
    this.img = img;
  }
}
let marker = L.marker([48.8534, 2.3488]).addTo(map);
        let clickMarker;
let form = "<form action='#' method='post'>"+
                  "<input type='text' id='name' name= 'name' placeholder='lieu'>"+
                  "<br><br><input type='text' id='type' name= 'name' placeholder='genre'>"+
                  "<br><br><textarea id='msg' name='message' placeholder='Commentaire'></textarea>"+
                  "<br><input id='lon' name= 'longitude' placeholder='longitude' type='hidden'>"+
                  "<br><input id='lat' name= 'latitude' placeholder='latitude' type='hidden'>"+
                  "<button>Envoyer</button>"+
                  "</form>";


function onMapClick(e) {

  if (clickMarker) {
      map.removeLayer(clickMarker);
  }
   clickMarker = new L.marker(e.latlng, {draggable: true}).addTo(map);
   clickMarker.on('dragend', function(e) {
   }).bindPopup(form).openPopup();
      
}
