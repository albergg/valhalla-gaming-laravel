var select = document.getElementById('countriesSelect');
// var select = document.querySelector('#countriesSelect');
var provCont = document.getElementById('provinceContainer');
var prov = document.getElementById('provinceSelect');

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
        provCont.style.display = '';
        ajaxCall('https://dev.digitalhouse.com/api/getProvincias', fillCitiesSelect);
    } else {
        prov.innerHTML = '';
        provCont.style.display = 'none';
    }
});

ajaxCall('https://restcountries.eu/rest/v2/all', fillCountriesSelect);    


// validaciones 

var inputName = document.getElementById('name');
var inputUsername = document.getElementById('username');
var inputEmail = document.getElementById('email');
var inputCountries = document.getElementById('countriesSelect');
var inputProvinces = document.getElementById('provinceContainer');
var inputPassword = document.getElementById('password');
var inputpasswordConfirm = document.getElementById('password-confirm');
var inputAvatar = document.getElementById('avatar');

var theForm = document.getElementById('registerForm');
var submitButton = document.querySelector ('[type=submit]');

var regexEmail = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
var regexNumber = /^[0-9]*$/;

var theInputs = Array.from(theForm.elements);

theInputs.pop();// btn submit

// Recorremos el array de campos del formulario y a cada campo le asignamos el evento blur
theInputs.forEach(function (input) {
    input.addEventListener('blur', validarCampo);
});

function validarCampo() {

    var errorSpan = this.parentElement.querySelector('span.invalid-feedback');

    // Si el campo está vacío
    if (this.value.trim() === '') {
        // A ese span que capturamos le asignamos este texto
        errorSpan.innerText = 'Este campo es obligatorio';

        // Al input que recibe el evento le agregamos la clase error
        this.classList.add('error');
        this.classList.add('is-invalid');
    } else {
        this.classList.remove('error');
        errorSpan.innerText = '';
    }
}




