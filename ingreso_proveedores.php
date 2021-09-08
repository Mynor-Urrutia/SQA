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
    <input type="text" name="" id=""><br>
    <label for="direccion">Direccion del Proveedor</label>
    <input type="text" name="direccion" id="direccion"><br>
    <label for="telefono">Telefono del Proveedor</label>
    <input type="tel" name="telefono" id="telefono"><br>
    <input type="submit" value="Añadir" name="submit">
</form>

<form class="needs-validation" novalidate>
  <div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="validationTooltip01">Nombre del Proveedor</label>
      <input type="text" class="form-control" id="nombre_prov" name="nombre_prov" placeholder="Ingrese el nombre del proveedor" value="" required>
      <div class="valid-tooltip">
        Dato registrado
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationTooltip02">Direccion del Proveedor</label>
      <input type="text" class="form-control" id="validationTooltip02" placeholder="Last name" value="Otto" required>
      <div class="valid-tooltip">
        Looks good!
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationTooltipUsername">Username</label>
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text" id="validationTooltipUsernamePrepend">@</span>
        </div>
        <input type="text" class="form-control" id="validationTooltipUsername" placeholder="Username" aria-describedby="validationTooltipUsernamePrepend" required>
        <div class="invalid-tooltip">
          Please choose a unique and valid username.
        </div>
      </div>
    </div>
  </div>
  <div class="form-row">
    <div class="col-md-6 mb-3">
      <label for="validationTooltip03">City</label>
      <input type="text" class="form-control" id="validationTooltip03" placeholder="City" required>
      <div class="invalid-tooltip">
        Please provide a valid city.
      </div>
    </div>
    <div class="col-md-3 mb-3">
      <label for="validationTooltip04">State</label>
      <input type="text" class="form-control" id="validationTooltip04" placeholder="State" required>
      <div class="invalid-tooltip">
        Please provide a valid state.
      </div>
    </div>
    <div class="col-md-3 mb-3">
      <label for="validationTooltip05">Zip</label>
      <input type="text" class="form-control" id="validationTooltip05" placeholder="Zip" required>
      <div class="invalid-tooltip">
        Please provide a valid zip.
      </div>
    </div>
  </div>
  <button class="btn btn-primary" type="submit">Submit form</button>
</form>




<a href="index.php">Volver</a>

<?php include "templates/footer.php"; ?>