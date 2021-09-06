
<?php include('../controladores/validar-sesion.php')?>



<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard - SB Admin</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="../css/style.css" rel="stylesheet" />
        <link href="../css/normalize.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-success">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="../home.php"><?php require_once('logo.php'); ?></a>
             
            
            <!-- Botones Programas -->
            <form class=" d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 gap-3">
                    <li class="nav-item"><a href="veterinaria.php" class="link">Medicina Veterinaria</a></li>
                    <li class="nav-item"><a href="derecho.php" class="link">Derecho</a></li>
                    <li  class="nav-item"><a href="civil.php" class="link">Ingeniería Civil</a></li>
                </ul>
            </form>
            <!-- Botón Logout-->            
            <ul class="navbar-nav me-0 me-md-3 my-2 my-md-0">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            
                            <li><a class="dropdown-item" href="../controladores/logout.php?logout=true">Logout</a></li>
                        </ul>
                    </li>
            </ul>
            
            
        </nav>
       
        <div class="contenedor mt-5">
            <iframe width="100%" height="400px" src="https://www.youtube.com/embed/wVZ4-sR4w7o" 
            title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" class="justify-content-center mt-5"
            allowfullscreen></iframe>
            
            <h1 class="Bienvenida mt-5">Derecho</h1>
            <p class="texto-home">
                En aras de crear espacios y propuestas  para la protección de la selva Amazónica,  se llevó  a cabo el  XIX Foro Ambiental y V Jornada de Derecho, Ruralidad y Ambiente, el pasado 29 y 30 de mayo en el Auditorio principal de nuestra sede 170 y en las instalaciones del Congreso de la República de Colombia. 
                El evento estuvo organizado por el Observatorio Ambiental de la Universidad de la Amazonia, la Facultad y el Programa de Derecho de UNIAGRARIA, La Gobernación del Caquetá, el Congreso de la República de Colombia y la Fundación Amazona. Igualmente, 
                contó con la pariticpación de ponentes como el docente Marlon Monsalve y el educador Uniagrarista Deivis Suarez.
            </p>
            <p class="texto-home mt-2">
                De esta forma, esta edición tuvo como temática las “estrategias, acciones y políticas públicas para la Conservación de la Amazonia”, cuyo propósito fue generar un espacio de discusión, socialización y concertación en torno a los diferentes conflictos socio-ambientales presentes en la Amazonia tales como el cambio climático,
                la deforestación y la actividad de minería ilegal en el territorio, enfocando la discusión en el planteamiento de propuestas de conservación para el territorio, involucrando actores de orden nacional y local en el diálogo.
            </p>
        </div>
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        
    </body>
</html>
