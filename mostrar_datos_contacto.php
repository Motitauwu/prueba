<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contenido de datos_contacto.txt</title>
</head>
<body>

<h2>Contenido de datos_contacto.txt</h2>
<?php
// Lee el contenido del archivo datos_contacto.txt
$contenido = file_get_contents("datos_contacto.txt");

// Muestra el contenido del archivo
echo "<pre>" . htmlspecialchars($contenido) . "</pre>";
?>

</body>
</html>