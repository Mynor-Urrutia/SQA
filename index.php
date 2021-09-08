<?php include "templates/header.php"; ?>


<h1>Bienvenidos</h1>
<div class="container">
    <!-- Content here -->

    <div class="card div-proveedores" id="div-proveedores" style="width: 19rem;">
        <img src="images/proveedores.png" class="card-img-top" alt="proveedor">
        <div class="card-body">
            <h5 class="card-title">Proveedor</h5>
            <p class="card-text">Registro y control de proveedor</p>
        </div>
        <ul class="card-body list-group list-group-flush">
            <li class="list-group-item"><a href="ingreso_proveedor.php">Ingresar proveedor</a></li>
            <li class="list-group-item"><a href="buscar_proveedor.php">Buscar proveedor</a></li>
            <li class="list-group-item"><a href="editar_proveedor.php">Editar proveedor</a></li>
            <li class="list-group-item"><a href="borrar_proveedor.php">Borrar proveedor</a></li>
        </ul>
    </div>
    <div class="card div-productos" id="div-productos" style="width: 19rem;">
        <img src="images/productos.png" class="card-img-top" alt="productos">
        <div class="card-body">
            <h5 class="card-title">Productos</h5>
            <p class="card-text">Registro y control de productos</p>
        </div>
        <ul class="card-body list-group list-group-flush">
            <li class="list-group-item"><a href="ingreso_productos.php">Ingresar productos</a></li>
            <li class="list-group-item"><a href="buscar_productos.php">Buscar productos</a></li>
            <li class="list-group-item"><a href="editar_productos.php">Editar productos</a></li>
            <li class="list-group-item"><a href="borrar_productos.php">Borrar productos</a></li>
        </ul>
    </div>
    <div class="card div-inventario" id="div-inventario" style="width: 19rem;">
        <img src="images/inventario.png" class="card-img-top" alt="inventario">
        <div class="card-body">
            <h5 class="card-title">Inventario</h5>
            <p class="card-text">Control y Reportes de Articulos</p>
        </div>
        <ul class="card-body list-group list-group-flush">
            <li class="list-group-item"><a href="ingreso_inventario.php">Ingresar inventario</a></li>
            <li class="list-group-item"><a href="buscar_inventario.php">Buscar inventario</a></li>
            <li class="list-group-item"><a href="editar_inventario.php">Editar inventario</a></li>
            <li class="list-group-item"><a href="borrar_inventario.php">Borrar inventario</a></li>
        </ul>
    </div>
    <div class="card div-pedidos" id="div-pedidos" style="width: 19rem;">
        <img src="images/pedidos.png" class="card-img-top" alt="pedidos">
        <div class="card-body">
            <h5 class="card-title">Pedidos</h5>
            <p class="card-text">Control de pedidos de clientes</p>
        </div>
        <ul class="card-body list-group list-group-flush">
            <li class="list-group-item"><a href="ingreso_inventario.php">Ingresar pedidos</a></li>
            <li class="list-group-item"><a href="buscar_inventario.php">Buscar pedidos</a></li>
            <li class="list-group-item"><a href="editar_inventario.php">Editar pedidos</a></li>
            <li class="list-group-item"><a href="borrar_inventario.php">Borrar pedidos</a></li>
        </ul>
    </div>
</div>

<?php include "templates/footer.php"; ?>