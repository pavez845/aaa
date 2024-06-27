<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurante</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="css/style.css" rel="stylesheet">
</head>


<body>

    <!-- Barra de Navegación -->
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
            <a class="navbar-brand" ><?php echo htmlspecialchars($_SESSION["username"]); ?></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="welcome.php">Inicio de sesión</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Menú
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="html/desayunos.html">Desayunos</a></li>
                            <li><a class="dropdown-item" href="html/almuerzos.html">Almuerzos</a></li>
                            <li><a class="dropdown-item" href="html/postres.html">Postres</a></li>
                            <li><hr class="dropdown-divider"></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="html/About.html">Sobre Nosotros</a>
                    </li>

                </ul>
                <a class="btn btn-primary btn-reserva" href="carrito/index.php">Realiza tu pedido</a> 
            </div>
        </div>
    </nav>


 <!-- Carrusel de Fotos -->
    <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active" style="background-image: url('https://s3.abcstatics.com/media/gurmesevilla/2012/01/comida-rapida-casera.jpg')">
                <div class="carousel-caption">
                    <h5>Deliciosas comidas</h5>
                    <p>Disfruta de nuestros platos exquisitos</p>
                </div>
            </div>
            <div class="carousel-item" style="background-image: url('https://oleico.com/wp-content/uploads/2020/06/original-061eb31f9aaa850b7852a5e4411983a7-scaled-1.jpeg')">
                <div class="carousel-caption">
                    <h5>Platos frescos</h5>
                    <p>Ingredientes de alta calidad</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
   
    <!-- Contenido debajo del carrusel -->

    <div class="container">
        <div class="row">
            <div class="col">
                <div class="restaurant-title">
                    <h2>Nuestro restaurante</h2>
                </div>
                <div class="restaurant-description">
                    <p>Descubre una experiencia culinaria única en nuestro restaurante. Con ingredientes frescos y platos exquisitos, te aseguramos una comida memorable cada vez que nos visites.</p>
                </div>
            </div>
        </div>
    </div>

    <main class="main-content">
        <section class="container container-features">
            <div class="card-feature">
                <i class="fa-solid fa-wallet"></i>
                <div class="feature-content">
                    <span>Contrareembolso</span>
                    <p>100% garantía de devolución de dinero</p>
                </div>
            </div>
            <div class="card-feature">
                <i class="fa-solid fa-gift"></i>
                <div class="feature-content">
                    <span>Tarjeta regalo especial</span>
                    <p>Ofrece bonos especiales con regalo</p>
                </div>
            </div>
            <div class="card-feature">
                <i class="fa-solid fa-headset"></i>
                <div class="feature-content">
                    <span>Servicio al cliente 24/7</span>
                    <p>LLámenos 24/7 al 123-456-7890</p>
                </div>
            </div>
        </section>
    </main>

    <!-- Collage de imágenes -->
    <div class="container">
        <div class="row">
            <div class="collage">
                <img src="https://content.elmueble.com/medio/2023/03/16/recetas-sanas_f45fa664_230316141534_900x900.jpg" alt="Platos">
            </div>
        </div>
    </div>


<!-- Contenido debajo de las cartas de platos -->
<div class="container">
    <div class="row">
        <div class="col">
            <div class="restaurant-title">
                <h2>Menus Populares</h2>
            </div>
        </div>
    </div>
</div>



   <!-- Cartas de Platos -->
   <div class="container">
    <div class="row">
        <div class="col-md-3"> 
            <div class="plato card" style="width: 18rem;">
                <img src="https://hips.hearstapps.com/hmg-prod/images/delish-190619-air-fryer-donuts-305-portrait-pf-1561758031.jpg?crop=0.9997369113391213xw:1xh;center,top&resize=980:*" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Donuts de chocolate</h5>
                    <p class="card-text"></p>
                    <ul>
                    <li>Donuts de chocolate en la freidora de aire: una tentación esponjosa y chocolatada, lista para disfrutar sin remordimientos. La fusión perfecta entre el intenso sabor a cacao y una masa delicadamente horneada, ¡un placer para todos los sentidos!</li>
                    </ul>
                    <a href="carrito/index.php" class="btn btn-primary">Has tu pedido</a>
                    <a href="html/postres.html"class="btn btn-primary">Menú</a>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="plato card" style="width: 18rem;">
                <img src="https://hips.hearstapps.com/hmg-prod/images/keto-blueberry-muffins-healthy-breakfast-recipes-1605266519.jpg?crop=1xw:1xh;center,top&resize=980:*" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Magdalenas keto de arándanos</h5>
                    <p class="card-text"></p>
                    <ul>
                    <li>Magdalenas keto de arándanos: sabrosas y esponjosas, con el frescor agridulce de los arándanos y una masa suave y baja en carbohidratos. Ideal para satisfacer antojos sin comprometer la dieta.</li>
                    </ul>
                    <a href="carrito/index.php" class="btn btn-primary">Has tu pedido</a>
                    <a href="html/postres.html" class="btn btn-primary">Menú</a>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="plato card" style="width: 18rem;">
                <img src="https://hips.hearstapps.com/hmg-prod/images/brocheta-de-calabacin-y-pollo-al-limon-1538049238.jpg?crop=1xw:1xh;center,top&resize=980:*" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Brocheta de calabacín y pollo al limón</h5>
                    <p class="card-text"></p>
                    <ul>
                     <li>Brocheta de calabacín y pollo al limón: una combinación jugosa y refrescante de sabores. El pollo marinado en limón se entrelaza con el calabacín tierno, creando una explosión de frescura en cada bocado. Una opción deliciosa y fácil de disfrutar en cualquier ocasión.</li>
                    </ul>
                    <a href="carrito/index.php" class="btn btn-primary">Has tu pedido</a>
                    <a href="html/almuerzos.html" class="btn btn-primary">Menú</a>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="plato card" style="width: 18rem;">
                <img src="https://hips.hearstapps.com/hmg-prod/images/salmon-a-la-plancha-con-arroz-y-esparragos-1550228949.jpg?crop=0.9188361408882083xw:1xh;center,top&resize=980:*" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Salmón a la plancha con arroz y espárragos</h5>
                    <p class="card-text"></p>
                        <ul>
                         <li>"Salmón a la plancha con arroz y espárragos: una combinación sabrosa y saludable. El salmón jugoso se complementa con arroz aromático y espárragos tiernos, creando un plato lleno de sabor y frescura. Ideal para una comida nutritiva y deliciosa en cualquier ocasión.</li>
                        </ul>
                    <a href="carrito/index.php" class="btn btn-primary">Has tu pedido</a>
                    <a href="html/almuerzos.html" class="btn btn-primary">Menú</a>
                </div>
            </div>
        </div>
    </div>
</div>
<br>
<br>
<footer class="footer">
    <div class="container container-footer">  
        <div class="menu-footer">
            <div class="contact-info">
                <p class="title-footer">Información de Contacto</p>
                <ul>
                    <li>
                        Duoc uc Alameda
                    </li>
                    <li>Teléfono: 2 2456 8475</li>
                    <li>EmaiL: "L'avversario@support.com</li>
                </ul>
                <div class="social-icons">
                    <span class="facebook">
                        <i class="fa-brands fa-facebook-f"></i>
                    </span>
                    <span class="twitter">
                        <i class="fa-brands fa-twitter"></i>
                    </span>
                    <span class="youtube">
                        <i class="fa-brands fa-youtube"></i>
                    </span>
                    <span class="pinterest">
                        <i class="fa-brands fa-pinterest-p"></i>
                    </span>
                    <span class="instagram">
                        <i class="fa-brands fa-instagram"></i>
                    </span>
                </div>
            </div>

            <div class="information">
                <p class="title-footer">Información</p>
                <ul>
                    <li><a href="#">Información Delivery</a></li>
                    <li><a href="#">Politicas de Privacidad</a></li>
                    <li><a href="#">Términos y condiciones</a></li>
                </ul>
            </div>

            <div class="my-account">
                <p class="title-footer">Mi cuenta</p>

                <ul>
                    <li><a href="#">Mi cuenta</a></li>
                    <li><a href="#">Historial de ordenes</a></li>
                    <li><a href="#">Reembolsos</a></li>
                </ul>
            </div>

            <div class="newsletter">
                <h1 class="logo"><a href="/"><img src="https://i.pinimg.com/736x/15/de/85/15de85d2edfb4f938a511b0574c3c30f.jpg" alt="L'avversario" style="width: 500px; height:auto;"></a></h1>
                </div>
            </div>
        </div>
        
        <div> 
            <div class="map" id="map"> </div>
        </div>

            <img src="https://www.kindpng.com/picc/m/96-966565_payment-method-icons-png-transparent-png.png" alt="Pagos"style="width: 400px; height: auto;">
        
        </div>
        
    </div>
</footer>

<script
    src="https://kit.fontawesome.com/81581fb069.js"
    crossorigin="anonymous"
></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="js/map.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBDaeWicvigtP9xPv919E-RNoxfvC-Hqik&callback=iniciarMap"></script>
</body>

</html>