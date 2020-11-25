<!DOCTYPE html>
<html lang="es">
<head>
 <meta charset="UTF-8">
 <title>Formulario de contacto</title>
</head>
<body>
 <form action="enviar.php" method="post">
  <h2>CONTACTO</h2>
  <input type="text" name="nombre" placeholder="Nombre" required>
  <input type="text" name="correo" placeholder="Correo" required>
  <textarea name="mensaje" placeholder="Escribe aquí: " required></textarea>
  <input type="submit" value="Enviar" id="boton">
 </form>
</body>
</html>