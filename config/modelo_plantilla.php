<?php

class plantilla
{

    public function obtenerHead($origen)
    {
        return '
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Future Technology</title>
        <link rel="stylesheet" href="'. $origen .'/css/bootstrap.css">
        <link rel="stylesheet" href="'. $origen .'/css/styles.css">
        ';
    }

    public function obtenerHeader($origen)
    {
        return '
        <header>
            <a href="'.$origen.'/index.php"><img src="' . $origen . '/img/logo.jpeg" alt="Logo de la empresa"></a>
             <h1 class="texto">Future Technology</h1>
        </header>
        ';
    }

    public function obtenerNav($origen)
    {
        return '
            <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03"
                aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="'.$origen.'/usuarios/controlador_usuarios.php">Usuarios</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="#">Clientes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="#">Herramientas</a>
                </li>
                </ul>
            </div>
            </div>
        </nav> 


            ';
    }

    public function obtenerMain($origen, $contenido)
    {
        return '
        <main>
            <section>
                ' . $contenido . '
            </section>
        </main>
        ';
    }

    public function obtenerFooter($origen)
    {
        return '
        <footer class="contenedor">
            <h3>
                <hr>
                Todos los derechos reservados &copy;<br>
                Proyecto Tercero de Software 2024
            </h3>

        <!-- <script src="'. $origen .'/js/popper.min.js"></script> -->
         <!--  <script src="'. $origen .'/js/bootstrap.bundle.js"></script> -->
        <script src="'. $origen .'/js/bootstrap.min.js"></script>

        </footer>
        ';
    }
}
