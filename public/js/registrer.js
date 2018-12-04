console.log ('funciona el registrer js');


var select = document.getElementById('countriesSelect');
// var select = document.querySelector('#countriesSelect');
var provCont = document.getElementById('provinceContainer');
var prov = document.getElementById('provinceSelect');
console.log(provCont);

function ajaxCall(url, callback) {
    window.fetch(url)
        .then(function (response) {
            return response.json();
        })
        .then(function (data) {
            callback(data);
        })
        .catch(function (error) {
            console.log(error);
        });
}

function fillCountriesSelect(countries) {
    for (var country of countries) {
        var option = '<option>' + country.name + '</option>';
        select.innerHTML += option;
    }
}

function fillCitiesSelect(cities) {
    for (var city of cities) {
        var option = '<option>' + city.state + '</option>';
        prov.innerHTML += option;
    }
}

select.addEventListener('change', function () {
    if (this.value === 'Argentina') {
        provCont.style.display = 'block';
        ajaxCall('https://dev.digitalhouse.com/api/getProvincias', fillCitiesSelect);
    } else {
        prov.innerHTML = '';
        provCont.style.display = 'none';
    }
});

ajaxCall('https://restcountries.eu/rest/v2/all', fillCountriesSelect);    



