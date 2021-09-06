
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
            <iframe width="100%" height="400px" src="https://www.youtube.com/embed/6Z-7_QltyF0" 
            title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" class="justify-content-center mt-5"
            allowfullscreen></iframe>
            
            <h1 class="Bienvenida mt-5">Ingeniería Civil</h1>
            <p class="texto-home">
                Dentro de la gestión de Internacionalización en casa de la ORI, el pasado 20 de febrero, el Mstro. Salvador Navarrete de la Universidad Autónoma de Guerrero – México, visitó las instalaciones de Uniagraria calle 170 para compartir con los estudiantes de los programas de Ingeniería Civil y de Administración financiera y de sistemas, los proyectos que se lideran en la ciudad de Acapulco para fomentar procesos sostenibles en las empresas y construcciones. Así mismo, invitó a los asistentes a participar en el Encuentro “Acá soy latino” que se llevará a cabo el próximo mes de abril en México, y donde instituciones de educación superior, estudiantes y empresas de turismo, cultura y gastronomía se reunirán para compartir experiencias de sus áreas conocimiento.
                En este encuentro estarán presente más de diez países latinoamericanos y tendrá como invitado especial a España a través de la representación de la Dra. Raquel García con la ponencia “Función de la Universidad de España e Iberoamérica a través del turismo”.
            </p>
            <p class="texto-home mt-2">
                El evento, contó con la participación de los estudiantes del programa, quienes expusieron sus proyectos de aula desde la creatividad y el compromiso en el pasillo principal de la institución y así mismo, fueron participes de las conferencias realizadas en nuestro auditorio principal a cargo de importantes ponentes calificados en temáticas de Construcción sostenible, 
                análisis de fatalidades de conductores en accidentes de tránsito, retos actuales del transporte ferroviario, entre otros.
            </p>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        
    </body>
</html>
