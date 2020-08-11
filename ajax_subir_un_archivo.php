<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<style>
	</style>
	<script>
		function enviarArchivo(){
			//recuperar archivo formulario
			var archivo = document.querySelector('#fichero').files[0]

			//validar que hemos seleccionado un archivo
			if(archivo == undefined){
				alert('no se ha seleccionado ningun archivo');
				return;
			}
			//validar tamaño archivo
			if(archivo.size > 900000){
				alert('tamaño archivo excede los 900Kb')
				return;
			}
		}
	</script>
</head>
<body>
<form enctype='multipart/form-data'>
	<input type="file" id='fichero' ><br><br>
	<input type="button" id='enviar' value='enviar' onclick="enviarArchivo()">
</form>
</body></html>


