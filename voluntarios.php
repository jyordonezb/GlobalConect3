<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="esta pagina trata de conecciones globales">
  <meta name="keywords" content="comunicación,proyectos,salud,belleza,conexiones,organizaciones">
  <meta name="autor" content="Jose Yovany Ordoñez">
  <title>Voluntarios Global Conet</title>
  <link rel="icon" href="assets/img/icono.png">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link rel="stylesheet" type="text/css" href="css/styles.css">
  <link rel="stylesheet" type="text/css" href="css/stylesvoluntarios.css">
</head>

<body>
  <!-- Barra de navegación -->
  <nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.html">
        <img class="logo" src="assets/img/Voluntariospng.png" alt="GlobalConect Logo">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
        aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item ">
            <a class="nav-link active fontini" aria-current="page" href="http://pruebas.global-conect.com">Inicio</a>
          </li>       
          <li class="nav-item navvoluntarios">
            <a class="nav-link" href="voluntarios.php">Voluntarios</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

<!-- Formulario registro voluntarios -->
<div class="container container-form voluntariosform mt-5 mb-5 p-4">
    <h1 class="text-center mb-4">Registro Voluntarios</h1>
    <div class="infoform">
      <p class="text-info" >Al llenar este formulario, formarás parte de "Voluntarios Global Conect". Asegúrate de escribir bien tu correo electrónico y tu número de contacto para mantenerte informado sobre las actividades que realizaremos, para que puedas formar parte de ellas.</p>
    </div>
  
    <form action="registrar.php" method="post" class="form-group p-3" >
      <div class="form-group">
        <label for="nombre" class="form-label">Nombre:</label>
        <input type="text" class="form-control" name="nombre" id="nombre" required>
      </div>
  
      <div class="form-group row">
        <div class="col-md-3">
          <label for="edad" class="form-label">Edad:</label>
          <input type="number" class="form-control box-edad" name="edad" id="edad" required min="13" max="65">
        </div>
  
        <div class="col-md-9 box-genero">
          <h6>Sexo:</h6>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="genero" id="masculino" value="masculino" required>
            <label class="form-check-label" for="masculino">Masculino</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="genero" id="femenino" value="femenino" required>
            <label class="form-check-label" for="femenino">Femenino</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="genero" id="otros" value="otros" required>
            <label class="form-check-label" for="otros">Otros</label>
          </div>
        </div>
      </div>
  
      <div class="form-group">
        <label for="departamento" class="form-label">Departamento:</label>
        <select class="form-select" name="departamento" id="departamento" required>
          <option value="">Selecciona un departamento...</option>
          <option value="Atlántida">Atlántida</option>
          <option value="Choluteca">Choluteca</option>
          <option value="Colón">Colón</option>
          <option value="Comayagua">Comayagua</option>
          <option value="Copán">Copán</option>
          <option value="Cortés">Cortés</option>
          <option value="El Paraíso">El Paraíso</option>
          <option value="Francisco Morazán">Francisco Morazán</option>
          <option value="Gracias a Dios">Gracias a Dios</option>
          <option value="Intibucá">Intibucá</option>
          <option value="Islas de la Bahía">Islas de la Bahía</option>
          <option value="La Paz">La Paz</option>
          <option value="Lempira">Lempira</option>
          <option value="Ocotepeque">Ocotepeque</option>
          <option value="Olancho">Olancho</option>
          <option value="Santa Bárbara">Santa Bárbara</option>
          <option value="Valle">Valle</option>
          <option value="Yoro">Yoro</option>
        </select>
      </div>
  
      <div class="form-group">
        <label for="nivel" class="form-label">Nivel Educativo:</label>
        <select class="form-select" name="nivel" id="nivel" required>
          <option value="">Selecciona tu nivel educativo...</option>
          <option value="Primaria">Primaria</option>
          <option value="Secundaria">Secundaria</option>
          <option value="Post-Grado">Post-Grado</option>
          <option value="Maestría">Maestría</option>
          <option value="Doctorado">Doctorado</option>
        </select>
      </div>
  
      <div class="form-group">
        <label for="email" class="form-label">Correo Electrónico:</label>
        <input type="email" class="form-control" name="email" id="email" required>
      </div>
  
      <div class="form-group">
        <label for="tel" class="form-label">Teléfono:</label>
        <input type="tel" class="form-control" name="tel" id="tel" required pattern="[0-9]{8}" title="Introduce un número de teléfono válido.">
      </div>
  
      <div class="form-group form-check">
        <input class="form-check-input" type="checkbox" value="" id="terminos" required>
        <label class="form-check-label" for="terminos">
          Acepto los <a href="terminosycondiciones.html" target="">términos y condiciones</a>
        </label>
      </div>
  
      <div class="form-group">
        <input type="submit" value="Enviar" class="btn btn-primary mt-3 w-100" id="submit">
      </div>
    </form>
  </div>
  
  <button id="scrollUpBtn" title="Ir hacia arriba">
    <i class="fas fa-arrow-up"></i> 
  </button>

  <!-- Pie de página -->
  <footer class="container-footer container-fluid bg-dark text-light py-4">
    <div class="row text-center">
      <div class="col-12 col-md-6 mb-3 mb-md-0">
        <p class="mb-0">2024 © <strong>Global-Conect </strong> | Todos los derechos reservados</p>
      </div>
      <div class="col-12 col-md-6">
        <p class="mb-0">
          <i class="fas fa-envelope"></i> gestiones@global-conect.com
        </p>
      </div>
    </div>
    <div class="row text-center mt-3 d-block d-lg-none">
      <div class="col">
        <a href="https://www.facebook.com/profile.php?id=61569490325779&mibextid=ZbWKwL" target="_blank" class="text-light mx-2">
          <i class="fab fa-facebook-f"></i> <!-- Font Awesome -->
        </a>
        <a href="https://www.instagram.com/" target="_blank" class="text-light mx-2">
          <i class="fab fa-instagram"></i> <!-- Font Awesome -->
        </a>
        <a href="https://www.youtube.com/@GlobalConect-24" target="_blank" class="text-light mx-2">
          <i class="fab fa-youtube"></i> <!-- Font Awesome -->
        </a>
        <a href="https://x.com/?mx=2" target="_blank" class="text-light mx-2">
          <i class="fab fa-twitter"></i> <!-- Font Awesome -->
        </a>
        <a href="https://www.tiktok.com/es/" target="_blank" class="text-light mx-2">
          <i class="fab fa-tiktok"></i> <!-- Font Awesome -->
        </a>
        <a href="https://open.spotify.com/user/31fixpsvap7w4mdofetnwzr56cyy?si=9627a9a7095549af&nd=1&dlsi=cae5d55e55dd4fb0" target="_blank" class="text-light mx-2">
          <i class="fab fa-spotify"></i> <!-- Font Awesome -->
        </a>
      </div>
    </div>
  </footer>
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
</script>
<script src="js/scrollbtnup.js"></script>
</html>
