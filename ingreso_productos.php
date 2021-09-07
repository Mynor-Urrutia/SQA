<?php

require "config.php";

if (isset($_POST['submit'])){

    $nuevo_proveedor = array(
        "nombre_prov" => $_POST['nombre_prov'],
        "direccion" => $_POST['direccion'],
        "telefono" => $_POST['telefono']
    );

    $sql = "INSERT INTO proveedores (nombre_prov, direccion, telefono) values (:nombre_prov, :direccion, :telefono)";

    try{
        $statement = $conexion->prepare($sql);
        $statement -> execute($nuevo_proveedor);
    }catch(PDOException $error){
        echo $error-> getMessage();
    }

}

?>

<?php include "templates/header.php"; ?>

<?php if (isset($_POST['submit']) && $statement) : ?>
    <blockquote>El proveedor <?php echo $_POST['nombre_prov']; ?> se añadio correctamente.</blockquote>
<?php endif; ?>

<h2>Crear Proveedor</h2>

<form action="" method="post">
    <label for="nombre_prov">Nombre del Proveedor</label>
    <input type="text" name="nombre_prov" id="nombre_prov"><br>
    <label for="direccion">Direccion del Proveedor</label>
    <input type="text" name="direccion" id="direccion"><br>
    <label for="telefono">Telefono del Proveedor</label>
    <input type="tel" name="telefono" id="telefono"><br>
    <input type="submit" value="Añadir" name="submit">
</form>

<a href="index.php">Volver</a>

<?php include "templates/footer.php"; ?>