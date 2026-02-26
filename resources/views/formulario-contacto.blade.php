<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Formulario (GET y POST)</title>
</head>
<body>

  <h1>Formulario en Laravel</h1>
  <hr>

  <h2>Enviar por POST</h2>

  <form action="{{ route('recibe-formulario') }}" method="POST">
    @csrf

    <label for="nombre_post">Nombre:</label>
    <input type="text" id="nombre_post" name="nombre" placeholder="Ej: Edgar" required>
    <br><br>

    <label for="edad_post">Edad:</label>
    <input type="number" id="edad_post" name="edad" min="0" max="120" required>
    <br><br>

    <label for="correo_post">Correo:</label>
    <input type="email" id="correo_post" name="correo" placeholder="correo@ejemplo.com" required>
    <br><br>

    <button type="submit">Enviar POST</button>
  </form>

</body>
</html>