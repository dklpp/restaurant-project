const burger = document.querySelector('#burger');
const menu = document.querySelector('#menu');

burger.addEventListener('click', () => {
    menu.classList.toggle('disp')
});


//-------------Google Maps API-----------------//

function initMap() {
    var options = {
        center: { lat: 55.1694, lng: 23.8813 },
        zoom: 10
    }

    map = new google.maps.Map(document.getElementById("map"), options)

    const marker = new google.maps.Marker({
        position: { lat: 54.8985, lng: 23.9036 },
        map: map,
    });
}