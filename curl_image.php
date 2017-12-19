<?php
/*funcion para traer las imagenes al sitio de desarrollo|*/

 $orig="http://juniorfc.co/wp-content/uploads/2015/05/IMG_9187.jpg";
 $dest="file/IMG_9187.jpg";
recibe_imagen($orig,$dest);

function recibe_imagen ($url_origen,$archivo_destino){ 
	if (!file_exists($archivo_destino)) {
   $mi_curl = curl_init ($url_origen); 
	$fs_archivo = fopen ($archivo_destino, "w"); 
	curl_setopt ($mi_curl, CURLOPT_FILE, $fs_archivo); 
	curl_setopt ($mi_curl, CURLOPT_HEADER, 0); 
	curl_exec ($mi_curl); 
	curl_close ($mi_curl); 
	fclose ($fs_archivo); 
	chmod($archivo_destino, 0777); 
} 
}

