<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Objetivo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="../css/style.css">


</head>

<body>
  <div class="header-bar">
    <div style="display: flex; align-items: center;">
      <img src="../img/logo.png" alt="Logo" class="image-container circular-image">
      <h1 class="hola">Paz y Flora</h1>
    </div>
    <!-- Botón del menú (hamburguesa) -->
    <button class="menu-toggle btn btn-black d-lg-none">
      <div class="menu-toggle-icon"></div>
      <div class="menu-toggle-icon"></div>
      <div class="menu-toggle-icon"></div>
    </button>
    <div class="menu">
      <ul>
        <li><a href="../index.php">Inicio</a></li>
        <li><a href="../pages/vision.php">Vision</a></li>
        <li><a href="../pages/mision.php">Mision</a></li>
        <li><a href="../pages/acerca.php">Acerca</a></li>
        <li><a href="../pages/objetivo.php">Objetivo</a></li>
      </ul>
    </div>
  </div>

  <script>
    // Agregar funcionalidad para mostrar/ocultar el menú en dispositivos pequeños
    document.querySelector('.menu-toggle').addEventListener('click', function() {
      document.querySelector('.menu').classList.toggle('show');
    });
  </script>
</body>

</html>
