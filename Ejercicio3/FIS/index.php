<?php
$nivel = "../";
include "../header.php";
require_once "../conexion.inc.php";
session_start();
if (!$_SESSION['active']) {
    header ('Location: index.php');
}
?>

<body class="d-flex flex-column vh-100 justify-content-between">
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="<?php echo $nivel; ?>index2.php">FCPN</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo $nivel; ?>INF/index.php">Informatica</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo $nivel; ?>MAT/index.php">Matematica</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#!">Fisica</a>
                    </li>
                    <div class="dropdown ms-2">
                        <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Bienvenido :<?php echo $_SESSION['usuario']; ?>
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="../cerrarsesion.php">Cerrar Sesion</a></li>
                        </ul>
                    </div>
                </ul>
            </div>
        </div>
    </nav>

    <div class="d-flex flex-column align-items-center justify-content-center my-5 py-5 shadow gap-3">

        <h2 class="fw-bold">Carrera de Fisica</h2>
        <img src="<?php echo $nivel;?>img/fisica.jpg" />

        <p class="w-50 text-center">La Carrera de Física fue creada en 1966, a raíz de las actividades desarrolladas por el Instituto de Investigaciones Físicas y el Laboratorio de Física Cósmica de Chacaltaya desde 1952.</p>
    </div>
</body>

<?php
include "../footer.php";
?>