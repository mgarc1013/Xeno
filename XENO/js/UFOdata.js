var map;
function initMap() {
  map = new google.maps.Map(document.getElementById('map'), {
    zoom: 8,
    center: new google.maps.LatLng(27.6648,-81.5158),
  });

  test();
}

function test() {
    var text = $('#ufo-data').text();
    console.log(text);
    console.log(JSON.parse(text));

    var data = JSON.parse(text);
    var sightings = data.sightings;

    for (let i = 0; i < sightings.length; i++) {
        let sighting = sightings[i].obj;

        var loc = {lat: sighting.loc[1], lng: sighting.loc[0]};
        console.log(loc);

        var content = `
        <div class="details">
            <div><b>Summary: </b>${sighting.summary}</div>
            <div><b>City: </b>${sighting.city}</div>
            <div><b>Date Spotted: </b>${sighting.date}</div>
            <div><b>Shape of Object: </b>${sighting.shape}</div>
            <div><b>Duration: </b>${sighting.duration}</div>
        </div>
        `;

        let infowindow = new google.maps.InfoWindow({
            content: content
          });

        let marker = new google.maps.Marker({
            position: loc,
            map: map,
            icon: "img/Alien.png",
            title: sighting.city
          });

          marker.addListener('click', function() {
            infowindow.open(map, marker);
          });
      }
}