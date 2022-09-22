<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <script type="text/javascript" src="{% static 'app/js/jsbase.js'%}"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="shortcut icon" href="{% static 'app/img/favicon.jpeg' %}">
    <title>Mi pagina web</title>
</head>
<body>
        <header>
            <nav class="navbar navbar-light bg-light"">
                <div class="container-fluid">
                    <a class="navbar-brand" href="/">
                    <img src="{% static 'app/img/logo.jpeg' %}" alt="logo" width="70" height="70">
                    <h1 class="d-inline align-text-center" id="colores"><b>El Rincon Del Pato</b></h1>
                    </a>
                    <ul class="nav justify-content-end">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/" style="color: 0067FF;"><b>Inicio</b></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../contacto" style="color: 0067FF;"><b>Agregar contacto</b></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../lista" style="color: 0067FF;"><b>Lista de contactos</b></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../convertidor" style="color: 0067FF;"><b>Convertidor de kilogramos</b></a>
                        </li>

                    </ul>
                </div>
            </nav>
        </header>

 <div class="container">
  <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
    <p class="col-md-4 mb-0 text-muted"><b style="color: White;">&copy; 2021 Company, Inc</b></p>

    <a href="/" class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
    <img src="{% static 'app/img/logo.jpeg' %}" alt="logo" width="60" height="60">
    </a>

    <ul class="nav col-md-4 justify-content-end">
        <li class="nav-item"><a href="/" class="nav-link px-2 text-muted"><b style="color: White;">Inicio</b></a></li>
        <li class="nav-item"><a href="../contacto" class="nav-link px-2 text-muted"><b style="color: White;">Contacto</b></a></li>
        <li class="nav-item"><a href="../lista" class="nav-link px-2 text-muted"><b style="color: White;">Lista de contactos</b></a></li>
        <li class="nav-item"><a class="nav-link" href="../convertidor" style="color: White;"><b>Convertidor de kilogramos</b></a></li>
    </ul>
  </footer>
</div>

            
</body>
</html><?php /**PATH C:\Users\GH\integracion2\resources\views/base.blade.php ENDPATH**/ ?>