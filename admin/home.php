
<?php include('controladores/validar-sesion.php')?>



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
        <link href="css/style.css" rel="stylesheet" />
        <link href="css/normalize.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-success">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="home.php"><?php require_once('vistas/logo.php'); ?></a>
             
            
            <!-- Botones Programas -->
            <form class=" d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 gap-3">
                    <li class="nav-item"><a href="vistas/veterinaria.php" class="link">Medicina Veterinaria</a></li>
                    <li class="nav-item"><a href="vistas/derecho.php" class="link">Derecho</a></li>
                    <li  class="nav-item"><a href="vistas/civil.php" class="link">Ingeniería Civil</a></li>
                </ul>
            </form>
            <!-- Botón Logout-->            
            <ul class="navbar-nav me-0 me-md-3 my-2 my-md-0">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            
                            <li><a class="dropdown-item" href="controladores/logout.php?logout=true">Logout</a></li>
                        </ul>
                    </li>
            </ul>
            
            
        </nav>
       
        
        <div class="banner">
            
        </div>      
        <div class="contenedor">
            <h1 class="Bienvenida">Bienvenido <?php echo ucfirst($_SESSION['nombre']); ?></h1>
            <p class="texto-home">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
            Cras erat sapien, auctor sed enim in, laoreet posuere tellus. 
            Morbi eu imperdiet massa. Duis sed aliquet justo. In in elit ultrices, 
            tempus massa sed, mattis elit. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. 
            Integer tristique iaculis nibh vel faucibus. Phasellus tellus turpis, maximus in massa non, malesuada accumsan lorem. 
            Aenean vestibulum lorem eget metus sollicitudin posuere. Maecenas interdum laoreet ante, nec tincidunt est dictum congue. 
            Quisque auctor, enim ut vestibulum consequat, felis justo ultrices sem, id efficitur tellus velit non urna. Nulla et molestie leo. 
            Cras sodales sem id ipsum iaculis gravida.
            <p>
                                           
            <div class="container-cards mt-4">
                <div class="row gap-3 justify-content-center">
                    <div class="card" style="width: 18rem;">
                        <img src="img/medicina-veterinaria.jpg" class="card-img-top mt-2" style="height: 10rem;"alt="medicina-veterinaria">
                        <div class="card-body">
                            <h5 class="card-title">Medicina Veterinaria</h5>
                            <p class="card-text" style="height: 3rem;">Conviertete en el próximo gran veterinario.</p>
                            <a href="vistas/veterinaria.php" class="btn btn-success">Más Información</a>
                        </div>
                    </div>

                    <div class="card" style="width: 18rem;">
                        <img src="img/derecho.jfif" class="card-img-top mt-2" style="height: 10rem;" alt="Derecho">
                        <div class="card-body">
                            <h5 class="card-title">Derecho</h5>
                            <p class="card-text" style="height: 3rem;">Se el próximo gran abogado del país.</p>
                            <a href="vistas/derecho.php" class="btn btn-success">Más Información</a>
                        </div>
                    </div>
                    
                    <div class="card" style="width: 18rem;">
                        <img src="img/ing-civil.jpg" class="card-img-top mt-2" style="height: 10rem;" alt="Ingeniería Civil">
                        <div class="card-body">
                            <h5 class="card-title">Ingeniería Civil</h5>
                            <p class="card-text" style="height: 3rem;">Conviérte en un gran ingeniero civil. </p>
                            <a href="vistas/civil.php" class="btn btn-success">Más Información</a>
                        </div>
                    </div>
                </div>    
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        
    </body>
</html>
