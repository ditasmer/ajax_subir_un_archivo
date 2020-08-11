<?php
//si nos llega un archivo lo moveremos a una carpeta

try {
	//todos los archivos que se suben van por $_FILES (sincono y asincrono)
	//valida que llega un fichero
	if(!isset($_FILES['fichero'])){
		throw new Exception('No se ha seleccionado ningun archivo');
	}
	//valida que el tamaño es < 900Kb
	$archivo = $_FILES['fichero'];
	//echo($archivo['size']);

	if($archivo['size'] > 900000){
		throw new Exception('Tamaño archivo supera 900Kb');
	}
	//mover archivo a una carpeta
	if(move_uploaded_file($archivo['tmp_name'], "../ficheros_servidor/$archivo[name]")){
		$mensaje = 'fichero enviado OK';
	} else{
		throw new Exception('No se ha podido enviar');
	}
} catch (Exception $e) {
	$mensaje = $e->getMessage();
}
//enviar mensaje respuesta
echo $mensaje;


?>