<h1 class='py-sm-5 py-3 text-center fw-bold text-white bg-dark w-100'>ALTAS, BAJAS PERSONAS</h1>

<div class="d-flex justify-content-center">
    <a class="btn btn-primary text-center p-4" href="<?php echo base_url(); ?>index.php/persona/agregar">AGREGAR PERSONA</a>
</div>
<div class='my-3 mb-5 table-wrapper-scroll-y my-custom-scrollbar-usuario border container w-75'>
    <table class="table bg-white">
        <thead class='text-center table-dark'>
            <tr>
                <th scope="col">CI</th>
                <th scope="col">Nombre completo</th>
                <th scope="col">fechaNacimiento</th>
                <th scope="col">Departamento</th>
                <th scope="col">Operaciones</th>

            </tr>
        </thead>
        <tbody class='text-center'>
            <?php foreach ($personas as $persona) : ?>

                <tr>
                    <th><?php echo $persona['ci'] ?></th>
                    <td><?php echo $persona['nombreCompleto'] ?></td>
                    <td><?php echo $persona['fechaNacimiento'] ?></td>
                    <td><?php echo $persona['departamento'] ?></td>
                    <td>
                        <a href="<?php echo base_url(); ?>index.php/persona/editar/<?php echo $persona['ci']; ?>" class="btn btn-warning">EDITAR</a>
                        <a href="<?php echo base_url(); ?>index.php/persona/eliminar/<?php echo $persona['ci']; ?>" class="btn btn-danger">ELIMINAR</a>
                    </td>

                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

</div>




