@extends('header') 
@section('contenido')
<br>
<br>
<br>
<br>
<div class="container" style="margin-top:3rem!important">
	<div class="section-header">
		<h2> <i class="fas fa-caret-right"></i> Nuestros Servicios</h2>
	</div>
	<div class="row">
		<hr class="linea" style="width: 3px; height: 30px;">
		<h4 style="margin: 20px;">Servicios con los que cuenta el Hospital.</h4>
		<p class="La-infraestructura-del-Hospital-San-Jos-Moscati-ha-sido-dise">Moscati cuenta con 15 cubículos para urgencias, laboratorio clínico, equipos para resonancia de 1.5 teslas, un tomógrafo de 128 cortes, ultrasonido 4D, sala de rayos X, mastógrafo digital y densitómetro digital.</p>
	</div>
</div>

{{--<div class="content-all">
	<div class="content-carrousel">
			<figure><img  class='zoom' src="https://loremflickr.com/320/200" /></figure>
			<figure><img  class='zoom' src="https://loremflickr.com/320/201" /></figure>
			<figure><img  class='zoom' src="https://loremflickr.com/320/202" /></figure>
			<figure><img  class='zoom' src="https://loremflickr.com/320/203" /></figure>
			<figure><img  class='zoom' src="https://loremflickr.com/320/204" /></figure>
			<figure><img  class='zoom' src="https://loremflickr.com/320/205" /></figure>
			<figure><img  class='zoom' src="https://loremflickr.com/320/206" /></figure>
			<figure><img  class='zoom' src="https://loremflickr.com/320/207" /></figure>
			<figure><img  class='zoom' src="https://loremflickr.com/320/208" /></figure>
			<figure><img  class='zoom' src="https://loremflickr.com/320/209" /></figure>
	</div>
</div>

	 <div class="slider">
	  <div class="slide">
<div class="zoom">
			<img class="zoom" src="https://loremflickr.com/320/200" />
			<img class="zoom" src="https://loremflickr.com/320/201" />
			<img class="zoom" src="https://loremflickr.com/320/202" />
			<img class="zoom" src="https://loremflickr.com/320/203" />
			<img class="zoom" src="https://loremflickr.com/320/204" />
			<img class="zoom" src="https://loremflickr.com/320/205" />
			<img class="zoom" src="https://loremflickr.com/320/206" />
			<img class="zoom" src="https://loremflickr.com/320/207" />
			<img class="zoom" src="https://loremflickr.com/320/208" />
			<img class="zoom" src="https://loremflickr.com/320/209" />
			<img class="zoom" src="https://loremflickr.com/320/210" />
			<img class="zoom" src="https://loremflickr.com/320/211" />
			<img class="zoom" src="https://loremflickr.com/320/212" />
			<img class="zoom" src="https://loremflickr.com/320/213" />
	  </div>
	  <div class="slide">
		<img class="zoom" src="https://loremflickr.com/320/200" />
		<img class="zoom" src="https://loremflickr.com/320/201" />
		<img class="zoom" src="https://loremflickr.com/320/202" />
		<img class="zoom" src="https://loremflickr.com/320/203" />
		<img class="zoom" src="https://loremflickr.com/320/204" />
		<img class="zoom" src="https://loremflickr.com/320/205" />
		<img class="zoom" src="https://loremflickr.com/320/206" />
		<img class="zoom" src="https://loremflickr.com/320/207" />
		<img class="zoom" src="https://loremflickr.com/320/208" />
		<img class="zoom" src="https://loremflickr.com/320/209" />
		<img class="zoom" src="https://loremflickr.com/320/210" />
		<img class="zoom" src="https://loremflickr.com/320/211" />
		<img class="zoom" src="https://loremflickr.com/320/212" />
		<img class="zoom" src="https://loremflickr.com/320/213" />
	  </div>
	</div>
 </div> --}}

<br><br>

<div class="container">

	<div class="row" id="Servicioslistas">
	 	<div class="col-sm-3">
		{{-- 	<ul>
				<li type='disc'>Helipuerto</li>
				<li type='disc'>Estacionamiento</li>
				<li type='disc'>Gimnasio</li>
			</ul> --}}
		</div>
		<div class="col-sm-3">
			<ul>
				<li type='disc'>Elevadores</li>
				<li type='disc'>Helipuerto</li>
				<li type='disc'>Estacionamiento</li>
				<li type='disc'>Gimnasio</li>
			</ul>
		</div>
		<div class="col-sm-3">
			<ul>
				<li type='disc'>SPA</li>
				<li type='disc'>Hotel y Suites</li>
				<li type='disc'>Restaurantes y Cafeterías</li>
				<li type='disc'>Roof Garden</li>
			</ul>
		</div>
		<div class="col-sm-3">
			<ul>
				<li type='disc'>Aulas y Auditorio</li>
				<li type='disc'>Consultorios</li>
				<li type='disc'>Farmacia</li>
				<li type='disc'>Tiendas de conveniencia</li>
			</ul>
		</div>
	</div>
	<br><br><br><br><br><br><br><br>
	<div class="row">
		<hr class="linea" style="width: 3px; height: 30px;">
		<h4 style="margin: 20px;">Especialidades</h4>
	</div>
	<br>
	<div class="row">
		<div class="col-sm-2">
			<div id="res" class="mx-auto"></div>
			<div id="ocultarselectmobile">
				<select class="form-control" id="resmobile" onchange="onclick=loadInfo(this.value)">
				</select>
				<br>
			</div>
		</div>

		<div class="col-sm-10 TituloEspeclidad">
			<h4 id="tituloespec">Anestesiología</h4>
			<div id="rescontenido">
				<h1>ANESTESIOLOGÍA </h1>
				<p>Las alergias se encuentran entre las enfermedades más comunes. Y sin embargo, a menudo se pasan por alto. Si bien no
					existe cura para las alergias, podemos ayudar a los pacientes a manejarlas con el tratamiento adecuado.</p>
				<strong>Pruebas de alergia y diagnóstico</strong><br><br>
				<p>Durante su visita inicial, su médico revisará su historial de salud, el historial de salud de su familia y sus síntomas.
					A continuación, se realizará un examen de sangre o pinchazo en la piel para diagnosticar sus síntomas de alergia. La
					prueba cutánea es la forma más común y confiable de detectar alergias y es relativamente indolora.</p>
				<strong>Inmunoterapia</strong><br><br>
				<p>Cuando la evitación de alérgenos y los medicamentos no controlan sus síntomas de alergia, su médico puede recomendar
					la inmunoterapia. La inmunoterapia acumula anticuerpos bloqueadores por exposición repetida a los alérgenos. A través
					de inyecciones o gotas orales, su médico puede reducir la respuesta de su cuerpo al alérgeno o eliminar los síntomas
					por completo. Esto a su vez puede eliminar la necesidad de medicación y tratamiento futuro.</p>
				<strong>Nuestras especialidades incluyen: </strong><br><br>
				<p>Tratamos todo tipo de alergias en adultos y niños con medidas de evitación, medicamentos e inmunoterapia.</p>
				<br>
				<ul>
					<li type='disc'>Alergias a los alimentos.</li>
					<li type='disc'>Alergias estacionales.</li>
					<li type='disc'>Cuidado del asma.</li>
					<li type='disc'>Asma pediátrica.</li>
					<li type='disc'>Dermatitis atópica.</li>
				</ul>

			</div>
		</div>
	</div>
	<br>
	<br>
	<br>
</div>
<script>
	"use strict";

var PI = Math.PI,
    floor = Math.floor,
    min = Math.min,
    max = Math.max;
var TAU = PI * 2;
var THIRD_PI = PI / 3;

function cos(n) {
  return Math.cos(n % TAU);
}

function map(n, a, b, c, d) {
  return (n - a) * (d - c) / (b - a) + c;
}

if (location.href.includes('/fullcpgrid/')) {
  document.body.style.transform = 'scale(0.8)';
}

var panes = Array.from(document.querySelectorAll('.pane'));
var selected = 0;
requestAnimationFrame(draw);
var _time = 0;

function draw(e) {
  requestAnimationFrame(draw);
  panes.forEach(function (pane, i) {
    var t = map(i, selected, panes.length + selected, 0, 1);
    pane.style.setProperty('--r', min(2, max(-2, t)) * -THIRD_PI * 2 + 'rad');
    pane.style.setProperty('--x', selected);
    pane.style.setProperty('--selected', selected === i ? 0 : 1);
  });
  var time = floor(e * 0.0005);

  if (time !== _time) {
    selected = (selected + 1) % panes.length;
    _time = time;
  }
}
	/*

	Se carga la informacion dinamicamente a travez de un archivo JSON ya que no se conocia todas las secciones 
	opte por cargarlas asi y ya solo ir modificando el archiv json que se encuentra en la carpeta public
	*/
	const xhttp = new XMLHttpRequest();

	xhttp.open("GET", "informacionservicios.js", true);
	xhttp.send();

	xhttp.onreadystatechange = function () {
		if (this.readyState == 4 && this.status == 200) {

			//console.log(this.responseText);

			let datos = JSON.parse(this.responseText);
			
			if (screen.width > 1024){
			for (let items of datos) {
				//console.log(items.nombreEspecialidad);
				res.innerHTML += `<p id="${items.nombreEspecialidad}" onclick="loadInfo(this.id)" style='line-height: 1; cursor: pointer;' >${items.nombreEspecialidad}</p>`
			}	
		}
		let resmobile = document.querySelector('#resmobile');
			resmobile.innerHTML = '';
			for (let items of datos) {
				//console.log(items.nombreEspecialidad);
				resmobile.innerHTML += `<option  id="${items.nombreEspecialidad}" onclick="loadInfo(this.id)">${items.nombreEspecialidad}</option>`
			}	

		}
	};

	function loadInfo(element) {
		const xhttp = new XMLHttpRequest();

		xhttp.open("GET", "informacionservicios.js", true);
		xhttp.send();

		xhttp.onreadystatechange = function () {
			if (this.readyState == 4 && this.status == 200) {

				//console.log(this.responseText);
				let datos = JSON.parse(this.responseText);
				let rescontenido = document.querySelector('#rescontenido');
				rescontenido.innerHTML = '';

				document.getElementById('tituloespec').innerText = element;

				for (let items of datos) {

					if (element == items.nombreEspecialidad) {

						rescontenido.innerHTML += `
			${items.contenido}`
					}
				}

			}
		};
	}

</script>
@endsection