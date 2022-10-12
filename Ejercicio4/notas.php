<?php
$nivel = "./";
include './header.php';
require_once "conexion.inc.php";

session_start();

if (!isset($_SESSION['usuario'])) {
    header('location: ./index.php');
}

if ($_SESSION['rol'] !== 'director') {
    header('location: ./index.php2');
}

?>

<body class="min-vh-100 d-flex flex-column justify-content-between">

    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="index2.php">FCPN</a>
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
                        <a class="nav-link" href="<?php echo $nivel; ?>FIS/index.php">Fisica</a>
                    </li>
                    <li class=" nav-item">
                        <a class="nav-link" href="#!">Notas</a>
                    </li>
                    <div class=" dropdown ms-2">
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

    <h1 class="text-center"> Media de Notas por Departamento</h1>

    <div class="container">
        <table class="table table-striped">
            <thead class="thead-dark table-dark">
                <tr>
                    <th scope="col">Nro de Notas</th>
                    <th scope="col">Departamento</th>
                    <th scope="col">Media Notas</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $query = "SELECT COUNT(departamento) nroNotas, departamento, AVG(notaFinal) notaMedia
                    FROM persona xp, inscripcion xi WHERE xp.ci = xi.ciEstudiante
                    GROUP BY departamento
                    ORDER BY departamento";
                $resultado = mysqli_query($con, $query);

                if (mysqli_num_rows($resultado) === 0) {
                ?>
                    <tr>
                        <td colspan="3">No hay datos que mostrar</td>
                    </tr>
                    <?php
                } else {
                    while ($filas = mysqli_fetch_assoc($resultado)) {
                    ?>
                        <tr>
                            <td><?php echo $filas['nroNotas'] ?></td>
                            <td><?php echo $filas['departamento'] ?></td>
                            <td><?php echo $filas['notaMedia'] ?></td>
                        </tr>
                <?php
                    }
                }
                ?>

            </tbody>
        </table>
    </div>


</body>
<?php
include './footer.php';
?>