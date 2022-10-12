<?php
include("header.php");
$nivel = "./";


if (!empty($_POST['usuario']) && !empty($_POST['password'])) {

    $errores = [];
    require_once "conexion.inc.php";
    $usuario = $_POST['usuario'];
    $password = $_POST['password'];
    $query = mysqli_query($con, "SELECT * FROM acceso WHERE usuario = '$usuario' and password = '$password'");
    if (mysqli_num_rows($query) > 0) {
        $resultado = mysqli_fetch_array($query);
        session_start();
        $_SESSION['active'] = true;
        $_SESSION['usuario'] = $resultado['usuario'];
        $_SESSION['ci'] = $resultado['ci'];

        header('Location: index2.php');
    } else {
        $errores[] = 'No existe el usuario';
    }
    
    
}

?>

<body>
    <div class="login-clean min-vh-100 d-flex align-items-center justify-content-center">
        <form method="post" action="" name="login-form" class="shadow p-4 d-flex gap-2 flex-column">
            <h3 class="text-center">INICIA SESION</h3>
            <img src="<?php echo $nivel;?>img/fcpn.png" alt="" />
            <?php
            foreach ($errores as $error) {
                echo "<p class='bg-danger p-2 text-white rounded mt-2'>" . $error . "</p>";
            }
            ?>
            <div class="form-group">
                <input class="form-control" type="user" name="usuario" placeholder="Usuario" value="<?php echo $usuario;?>">
            </div>
            <div class="form-group">
                <input class="form-control" type="password" name="password" placeholder="Password" value="<?php echo $password;?>">
            </div>
            <button class="btn btn-primary btn-block" type="submit">Ingresar</button>
        </form>
    </div>
</body>

</html>