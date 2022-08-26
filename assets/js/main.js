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

/* let category = document.querySelector("#homepage").dataset.category; */

fetch("api/list.php") // on fait un fetch pour faire appel à lapi
  .then((response) => {
    // et recupere la reponse json
    return response.json();
  })
  .then((data) => {
    data.map((place) => {
      //on fait une boucle qui recupere un element d'un objet pour créer des markers
      L.marker([place.lat, place.lng])
        .bindPopup(
          `${place.name} <button class="favorite-button" data-id="${place.id}"> 
          <svg class="favorite-button" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z" />
        </svg>
        </button><br>
          ${place.adress}<br><img class="image-popup" src="${place.img}"/>`
        )
        .addTo(map);
    });
  });

var popup = L.popup();
/*   .setLatLng([48.864716, 2.349014])
  .setContent("We are here.")
  .openOn(map); */

function onMapClick(e) {
  popup
    .setLatLng(e.latlng)
    .setContent("You clicked the map at " + e.latlng.toString())
    .openOn(map);
}

// favorite // -------------------------------------------------------------------

/* function onStarClick() {
  let placeId = document.querySelector(".favorite-button").dataset.id;

  let formdata = new FormData();
  formdata.append("userId", "1");
  formdata.append("placeId", placeId);

  let requestOptions = {
    method: "POST",
    body: formdata,
    redirect: "follow",
  };

  fetch("api/add-favorite.php", requestOptions)
    .then((response) => response.text())
    .then((result) => alert("lieu ajouté à vos favoris"))
    .catch((error) => console.log("error", error));
}

document.getElementById("map").addEventListener("click", (e) => {
  if (e.target && e.target.className.baseVal == "favorite-button") {
    onStarClick();
  }
  console.log(e.target.className.baseVal);
});

map.on("click", onMapClick); */

// list // -------------------------------------------------------------------
class Card {
  constructor(title, text, img) {
    this.title = title;
    this.text = text;
    this.img = img;
  }
}
