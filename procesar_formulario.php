<?php
// Verifica si se han enviado datos del formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Abre o crea el archivo donde se guardarán los datos
    $archivo = fopen("datos_contacto.txt", "a") or die("No se pudo abrir el archivo");

    // Obtiene los datos del formulario
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $comentario = $_POST['comentario'];

    // Escribe los datos en el archivo
    fwrite($archivo, "Nombre: " . $nombre . "\n");
    fwrite($archivo, "Correo electrónico: " . $correo . "\n");
    fwrite($archivo, "Comentario: " . $comentario . "\n\n");

    // Cierra el archivo
    fclose($archivo);

    // Redirige a una página de confirmación
    header("Location: confirmacion.html");
    exit();
}
?>