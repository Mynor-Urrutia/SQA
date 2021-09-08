<?php

require "config.php";

if (isset($_POST['submit'])) {

    $nuevo_proveedor = array(
        "nombre_prov" => $_POST['nombre_prov'],
        "direccion" => $_POST['direccion'],
        "telefono" => $_POST['telefono']
    );

    $sql = "INSERT INTO proveedores (nombre_prov, direccion, telefono) values (:nombre_prov, :direccion, :telefono)";

    try {
        $statement = $conexion->prepare($sql);
        $statement->execute($nuevo_proveedor);
    } catch (PDOException $error) {
        echo $error->getMessage();
    }
}

?>

<?php include "templates/header.php"; ?>

<?php if (isset($_POST['submit']) && $statement) : ?>
    <blockquote>El proveedor <?php echo $_POST['nombre_prov']; ?> se añadio correctamente.</blockquote>
<?php endif; ?>

<h2>Crear Proveedor</h2>
<div class="container">
    <div>
        <i class="fas fa-arrow-left"><a href="index.php">Volver</a></i>
    </div>

    <form action="" method="post" class="needs-validation" novalidate>
        <div class="form-row">
            <div class="col-md-4 mb-3">
                <label for="codigo_prov">Codigo del Proveedor:</label>
                <input type="text" class="form-control" name="codigo_prov" id="codigo_prov" require>
                <div class="valid-feedback">
                    Codigo Valido
                </div>
            </div>
            <div class="col-md-8 mb-3">
                <label for="nombre_prov">Nombre del Proveedor:</label>
                <input type="text" class="form-control" name="nombre_prov" id="nombre_prov" require>
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-4 mb-3">
                <label for="nit_prov">NIT del Proveedor:</label>
                <input type="text" class="form-control" name="nit_prov" id="nit_prov" require>
                <div class="valid-feedback">
                    Codigo Valido
                </div>
            </div>
            <div class="col-md-8 mb-3">
                <label for="direccion">Direccion del Proveedor:</label>
                <input type="text" class="form-control" name="direccion" id="direccion" require>
                <div class="valid-feedback">
                    Codigo Valido
                </div>
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-5 mb-3">
                <label for="eje_ventas">Ejecutivo de Ventas:</label>
                <input type="text" class="form-control" name="eje_ventas" id="eje_ventas" require>
                <div class="valid-feedback">
                    Codigo Valido
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <label for="telefono">Telefono:</label>
                <input type="text" class="form-control" name="telefono" id="telefono" require>
                <div class="valid-feedback">
                    Codigo Valido
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <label for="email">Correo Electronico:</label>
                <input type="text" class="form-control" name="email" id="email" require>
                <div class="valid-feedback">
                    Codigo Valido
                </div>
            </div>
        </div>
        <input type="submit" class="btn btn-primary" value="Añadir" name="submit">
    </form>

</div>


<?php include "templates/footer.php"; ?>