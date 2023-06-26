$(".leaflet-container").css("height", "0vh")

$(document).ready(function(){
  $("form").submit(function(event){
      var settings = {
          url: "https://api-adresse.data.gouv.fr/search/?q=" + $('.input-search').val() + "&type=housenumber&autocomplete=1",
          method: "GET",
          timeout: 0,
      };
      var settings_input2 = {
          url: "https://api-adresse.data.gouv.fr/search/?q=" + $('.input-search2').val() + "&type=housenumber&autocomplete=1",
          method: "GET",
          timeout: 0,
      };

      $(".leaflet-container").css("height", "90vh")
      $(".leaflet-container").hide(0)
      $(".leaflet-container").show(1000)

      function fichierJson(data){   
        const postData = {
            numero : `${data.properties.housenumber}`,
            rue : `${data.properties.street}`,
            ville : `${data.properties.city}`,
            codePostal : `${data.properties.postcode}`,
            latitude : `${data.geometry.coordinates[1]}`,
            longitude : `${data.geometry.coordinates[0]}`
        }
        return JSON.stringify(postData)
    }

      const LeafletSelection = (data) => {
          const setViewArray = data[0].geometry.coordinates
          console.log(data)          
          var map = L.map("map").setView([setViewArray[1], setViewArray[0]], 5);
          data.forEach((element) =>{
                const marker = L.marker([element.geometry.coordinates[1], element.geometry.coordinates[0]]).addTo(map)
                marker.bindPopup(element.properties.label)
            })
            L.tileLayer("https://tile.openstreetmap.org/{z}/{x}/{y}.png", {
              maxZoom: 19,
              attribution:
              '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>',
            }).addTo(map);
            var popup = L.popup()
            .setLatLng([48.866667, 2.320041])
            .setContent("<h3><p><b>Paris c'est ici !<b></p><h3>")
            .openOn(map);
            function onMapClick(e) {
                alert("Vous êtes ici" + e.latlng);
            }
            
            map.on('click', onMapClick);
            var popup = L.popup();

            function onMapClick(e) {
                popup
                    .setLatLng(e.latlng)
                    .setContent("vous êtes ici sur la carte" + e.latlng.toString())
                    .openOn(map);
            }

            map.on('click', onMapClick);
        };
     
        setTimeout(() => {
        $.ajax(settings).done(function (response) {
            var dataArray = []

            dataArray.push(response.features[0])
            $.ajax({
                type: 'POST',
                url: 'index.php',
                data: {connexion: fichierJson(response.features[0])} 
             });

            $.ajax(settings_input2).done(function (response) {
                dataArray.push(response.features[0])
                $.ajax({
                    type: 'POST',
                    url: 'index.php',
                    data: {connexion2: fichierJson(response.features[0])}
                 });

                LeafletSelection(dataArray)
            });
        });
    }, 1000);

      event.preventDefault();
  })
})