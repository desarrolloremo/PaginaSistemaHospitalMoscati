@extends('header') 
@section('contenido')
<br>
<br>
<br>
<br>
<div class="container">
	<div class="section-header">
		<h2> <i class="fas fa-caret-right"></i> Nuestros Servicios</h2>
	</div>
	{{--
	<div class="row">
		<div class="col-sm-1">
			<hr class="linea" style="width: 4px; height: 60%;">
		</div>
		<div>
			<br>
			<h4>Infraestructura</h6>
		</div>

	</div> --}}
	<div class="row">
		<div class="col-sm-1">
			<hr class="linea" style="width: 4px; height: 60%;">
		</div>
		<div>
			<br>
			<h4>Especialidades</h6>
		</div>

	</div>
	<br>
	<div class="row">

		<div class="col-sm-2">
			<div id="res" class="mx-auto"></div>
			<div id="ocultarselectmobile">
				<select class="form-control" id="resmobile" onchange="onclick=loadInfo(this.value)" >
				</select>
				<br>
			</div>
		</div>
		<div class="col-sm-10 TituloEspeclidad">
			<h4 id="tituloespec">Anestesiologia</h4>
			<div id="rescontenido">
				<h1>ANESTESIOLOGIA </h1>
				<p>Las alergias se encuentran entre las enfermedades más comunes. Y, sin embargo, a menudo se pasan por alto. Si bien no
					existe cura para las alergias, podemos ayudar a los pacientes a manejarlas con el tratamiento adecuado.</p>
				<strong>Pruebas de alergia y diagnóstico</strong>
				<p>Durante su visita inicial, su médico revisará su historial de salud, el historial de salud de su familia y sus síntomas.
					A continuación, se realizará un examen de sangre o pinchazo en la piel para diagnosticar sus síntomas de alergia. La
					prueba cutánea es la forma más común y confiable de detectar alergias y es relativamente indolora.</p>
				<strong>Inmunoterapia</strong>
				<p>Cuando la evitación de alergenos y los medicamentos no controlan sus síntomas de alergia, su médico puede recomendar
					la inmunoterapia. La inmunoterapia acumula anticuerpos bloqueadores por exposición repetida a los alérgenos. A través
					de inyecciones o gotas orales, su médico puede reducir la respuesta de su cuerpo al alérgeno o eliminar los síntomas
					por completo. Esto a su vez puede eliminar la necesidad de medicación y tratamiento futuro.</p>
				<strong>Nuestras especialidades incluyen: </strong>
				<p>Tratamos todo tipo de alergias en adultos y niños con medidas de evitación, medicamentos e inmunoterapia.</p>
				<ul>
					<li type='disc'>Alergias a los alimentos</li>
					<li type='disc'>Alergias estacionales</li>
					<li type='disc'>Cuidado del asma</li>
					<li type='disc'>Asma pediátrica</li>
					<li type='disc'>Dermatitis atópica</li>
				</ul>

			</div>
		</div>
	</div>
	<br>
	<br>
	<br>
</div>
<script>
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