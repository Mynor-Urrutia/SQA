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

<a href="index.php">Volver</a><br>

<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

<?php include "templates/footer.php"; ?>