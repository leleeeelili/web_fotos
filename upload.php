<?php
$target_dir = "uploads/";

if (!is_dir($target_dir)) {
    mkdir($target_dir, 0777, true);
}

foreach ($_FILES['imagenes']['name'] as $key => $name) {
    $tmp_name = $_FILES['imagenes']['tmp_name'][$key];
    $destino = $target_dir . basename($name);
    if (move_uploaded_file($tmp_name, $destino)) {
        echo "Archivo $name subido correctamente.<br>";
    } else {
        echo "Error subiendo $name.<br>";
    }
}
?>
