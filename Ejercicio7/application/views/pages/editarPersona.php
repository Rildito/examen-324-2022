<body class="bg-light vh-auto">
    <div class="container bg-white h-100 w-100">
        <div class="row justify-content-center">
            <h1 class="text-center w-100 bg-primary bg-dark text-white p-5 fw-bolder">
                ACTUALIZAR DATOS
            </h1>

            <div class="col-sm-6 col-9 mt-5 rounded-1">

                <form method="POST" action="<?php echo base_url(); ?>index.php/persona/actualizar/<?php echo $persona->ci; ?>" class="shadow-lg p-5">
                    <div class="mb-3">
                        <label for="nombre" class="form-label fw-semibold">CI:</label>
                        <input type="text" class="form-control" id="ci" name="ci" placeholder="Ej. Juan" value="<?php echo $persona->ci; ?>">
                    </div>
    
                    <div class="mb-3">
                        <label for="apePat" class="form-label fw-semibold">Nombre Completo:</label>
                        <input type="text" class="form-control" id="nombreCompleto" name="nombreCompleto" placeholder="Ej. Soliz Perez Barra" value="<?php echo $persona->nombreCompleto; ?>">
                    </div>

                    <div class="mb-3">
                        <label for="apeMat" class="form-label fw-semibold">Departamento:</label>
                        <input type="text" class="form-control" id="departamento" name="departamento" placeholder="Ej. 01" value="<?php echo $persona->departamento; ?>">
                    </div>

                    <div class="mb-3">
                        <label for="ci" class="form-label fw-semibold">Fecha nacimiento:</label>
                        <input type="date" class="form-control" id="fechaNacimiento" name="fechaNacimiento" value="<?php echo $persona->fechaNacimiento; ?>">
                    </div>


                    <div class="d-grid">
                        <input type="submit" class="btn btn-primary" value="ACTUALIZAR DATOS">
                    </div>
                </form>
            </div>
        </div>

    </div>
</body>