<?php

//Proteger la pagina
    session_start();

    if(!isset($_SESSION['usuario']))
    {
        echo '
            <script>
                alert("Por favor debes iniciar sesión");
                window.location = "index.php";
            </script>
            ';
            session_destroy();
            die();
    }
    
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    
    <title>BIENVENIDO A MI BLOG</title>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" integrity="sha384-vSIIfh2YWi9wW0r9iZe7RJPrKwp6bG+s9QZMoITbCckVJqGCCRhc+ccxNcdpHuYu" crossorigin="anonymous">
    
    
    <link rel="stylesheet" href="Assets/css/styleblog.css">
     
    

    <meta name="viewport" content="width=device-width, initial-scale=1.0">



</head>

<body>

    <header>
        <img class="logo" src="Assets/images/fisio1.jpg" alt="">
    
    </header>

    <nav>
        <ul>
            <li class="nav-item"><a href="#">Inicio</a></li>
            <li class="nav-item"><a href="#">Tutoriales</a></li>
            <li class="nav-item"><a href="#">Blog</a></li>
            <li class="nav-item"><a href="#">Contacto</a></li>
            <li class="nav-item"><a href="php/cerrar_sesion.php">Cerrar sesión</a></li>
            
            
        </ul>

        <div class="menu-bar"> Menu 
            <span class="hamburguer-icon"><i class="fa fa-bars"></i></span>
        
        </div>
    
    </nav>

    <div class="container">
        <div class="section">
            <div class="col span_2_of_3">
                <div class="blog-post">
                    <h1 class="blog-title"> Titulo</h1>
                    <h2 class="date">Publicado 15 de Febrero 2021</h2>
                    <img src="Assets/images/fisio1.jpg" alt="">
                    <p class="blog-content">Lorem ipsum dolor sit 
                    amet consectetur adipisicing elit. Labore 
                    repellendus alias, non dolores sint vitae 
                    consequatur perspiciatis voluptates facere 
                    necessitatibus culpa veniam illum ex autem
                     impedit voluptatibus ullam officia sapiente.
                     </p>
                
                </div>
            </div>

            <aside class="col span1_of_3">
                <div class="side-post">
                    <img src="Assets/images/run.jpg" alt="">
                    <p class="side-content">Lorem ipsum dolor sit 
                    amet consectetur adipisicing elit. Labore 
                    repellendus alias, non dolores sint vitae 
                    consequatur perspiciatis voluptates facere 
                    necessitatibus culpa veniam illum ex autem
                     impedit voluptatibus ullam officia sapiente.
                     </p>
                    
                </div>

                <div class="side-post">
                    <p class="side-content">Lorem ipsum dolor sit amet 
                        consectetur adipisicing elit. Perferendis provident ad voluptas 
                        tempora quia iusto tempore ullam enim adipisci magnam ab 
                        recusandae nisi 
                        cum omnis sunt, iure facere quis quisquam.</p>
                        <a href="#" class="button">Suscribete</a>

                        

                </div>

            </aside>

        </div>
    </div>

    
        

    

        <footer>
            <h1>Josue Flores Galindo</h1>
            <p>Todos los derechos reservados © 2021</p>
        
        
        
        </footer>

        <script src="https://code.jquery.com/jquery-3.5.1.min.js
"></script>
<script src="Assets/js/script1.js"></script>




 
</body>





</html>
