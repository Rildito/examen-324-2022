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
                        <a class="nav-link disabled" href="#!">Matematica</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo $nivel; ?>FIS/index.php">Fisica</a>
                    </li>

                    <?php
                    if ($_SESSION['rol'] === 'director') { ?>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo $nivel; ?>notas.php">Notas</a>
                        </li>
                    <?php
                    }; ?>
                    <div class="dropdown ms-2">
                        <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Bienvenido :<?php echo $_SESSION['usuario']; ?>
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="<?php echo $nivel; ?>cerrarsesion.php">Cerrar Sesion</a></li>
                        </ul>
                    </div>
                </ul>
            </div>
        </div>
    </nav>

    <div class="d-flex flex-column align-items-center justify-content-center my-5 py-5 gap-3 shadow">
        <h2 class="fw-bold">Carrera de Matematica</h2>
        <img src="<?php echo $nivel; ?>img/mate.png" />

        <p class="w-50 text-center">El 25 de mayo de 1966 se crea el Instituto Superior de Ciencias Básicas, sobre la base del Instituto de Ciencias Exactas con los departamentos de Física, Química y Matemáticas, mediante Resolución 00/14/66 de Secretaría General del Rectorado de la UMSA. Se designa al Ing. Hugo Mansilla Romero como Coordinador y máxima autoridad del Instituto Superior de Ciencias Básicas, al Ing. Walter González como Decano interino, al Ing. Hugo Lara Arce.</p>
    </div>
</body>

<?php
include "../footer.php";
?>