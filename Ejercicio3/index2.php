<?php
include "header.php";
$nivel = "./";
require_once "conexion.inc.php";
session_start();
if (!$_SESSION['active']) {
    header ('Location: index.php');
}
?>

<body class="d-flex flex-column vh-100 justify-content-between">
    <nav class="navbar navbar-expand-lg bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand text-white" href="<?php echo $nivel; ?>index2.php">FCPN</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link text-white" href="inf/index.php">Informatica</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="mat/index.php">Matematica</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="fis/index.php">Fisica</a>
                    </li>

                    <div class="dropdown ms-2">
                        <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Bienvenido :<?php echo $_SESSION['usuario']; ?>
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="cerrarsesion.php">Cerrar Sesion</a></li>
                        </ul>
                    </div>
                </ul>
            </div>
        </div>
    </nav>

    <div class="d-flex flex-column align-items-center justify-content-center my-5 gap-3 shadow py-5">
    
        <h2 class="fw-bold">Facultad de Ciencias Puras y Naturales</h2>
        <img src="<?php echo $nivel;?>img/fcpn.png" />

        <p class="w-50 text-center">Mencionar el origen de la Facultad de Ciencias Puras y Naturales (FCPN), es referirse al inicio de la misma Universidad Mayor de San Andrés (UMSA), cuando el 30 de noviembre de 1830, se inauguró la Universidad Menor de San Andrés, con los grados de profesor, bachiller o licenciado.</p>
    </div>


</body>
<?php
include "footer.php";
?>