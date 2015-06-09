<?php
function subirArchivo($soporte, $ruta_d) {
    if($soporte['archivo']['name']){
        $ruta = str_replace("\\", '/', $ruta_d);
        $carpetas = explode("/", substr($ruta, 0, strlen($ruta) - 1));
        $ruta_destino = '';
        foreach ($carpetas as $c) {
            $ruta_destino .= strtolower($c) . "/";
            if (!is_dir($ruta_destino)) {
                mkdir($ruta_destino, 0777);
            } else {
                chmod($ruta_destino, 0777);
            }
        }$ruta_destino = $ruta_destino . "/";
        if (!is_dir($ruta_destino)) {
            mkdir($ruta_destino, 0777);
        } else {
            chmod($ruta_destino, 0777);
        }
        //echo $soporte['archivo']['tmp_name']."<br>";
        if(!(move_uploaded_file($soporte['archivo']['tmp_name'],utf8_decode(strtolower($ruta).$soporte['archivo']['name'])))) {
            $r = "<br>No ha sido posible copiar el archivo ";
        } else {
            $r = "archivo copiado <br>";
        }
    }
    return $r;
}

$directorio = getcwd() . "/archivos/";

if ($_FILES['archivo']['error'] > 0) {
    echo "Error:  " . $_FILES['archivo']['error'];
} else {
    echo "Nombre: " . $_FILES['archivo']['name'] . "<br>";
    echo "Tipo: " . $_FILES['archivo']['type'] . "<br>";
    echo "Tam: " . ($_FILES['archivo']['size'] / 1024) . "kB<br>";
    echo "Carpeta temporal: " . $_FILES['archivo']['tmp_name'] . "<br>";
    echo $directorio . $_FILES['archivo']['name'];
    echo subirArchivo($_FILES, $directorio);
}
?>