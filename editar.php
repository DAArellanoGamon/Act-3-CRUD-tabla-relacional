<?php
if(!isset($_GET["id"])) exit();
$id = $_GET["id"];
include_once "base_de_datos.php";
$sentencia = $base_de_datos->prepare("SELECT * FROM productos WHERE id = ?;");
$sentencia->execute([$id]);
$producto = $sentencia->fetch(PDO::FETCH_OBJ);
if($producto === FALSE){
	echo "¡No existe algún producto con ese ID!";
	exit();
}

?>
<?php include_once "encabezado.php" ?>
	<div class="col-xs-12">
		<h1>Editar producto con el ID <?php echo $producto->id; ?></h1>
		<form method="post" action="guardarDatosEditados.php">
			<input type="hidden" name="id" value="<?php echo $producto->id; ?>">
	
			<label for="nombre">Nombre de Producto:</label>
			<input value="<?php echo $producto->nombre ?>" class="form-control" name="nombre" required type="text" id="codigo" placeholder="Escribe el código">

			<label for="marca">Marca:</label>
			<input value="<?php echo $producto->marca ?>" class="form-control" name="marca" required type="text" id="precioVenta" placeholder="Precio de venta">

			<label for="codigo">Codigo:</label>
			<input value="<?php echo $producto->codigo ?>" class="form-control" name="codigo" required type="nuber" id="precioVenta" placeholder="Precio de venta">

			<label for="color">Color:</label>
			<input value="<?php echo $producto->color ?>" class="form-control" name="color" required type="text" id="precioCompra" placeholder="Precio de compra">
			
			<label for="categoria">Categoria:</label>
			<input value="<?php echo $producto->categoria ?>" class="form-control" name="categoria" required type="text" id="precioCompra" placeholder="Precio de compra">
			
			<label for="precio">Precio:</label>
			<input value="<?php echo $producto->precio ?>" class="form-control" name="precio" required type="number" id="precioCompra" placeholder="Precio de compra">
			
			<label for="precio_p">Precio de Preveedor:</label>
			<input value="<?php echo $producto->precio_p ?>" class="form-control" name="precio_p" required type="number" id="precioCompra" placeholder="Precio de compra">
			
			<label for="tamano">Tamano:</label>
			<input value="<?php echo $producto->tamano ?>" class="form-control" name="tamano" required type="text" id="precioCompra" placeholder="Precio de compra">
			
			<label for="existencia">Existencia:</label>
			<input value="<?php echo $producto->existencia ?>" class="form-control" name="existencia" required type="text" id="existencia" placeholder="Precio de compra">
			
			<br><br><input class="btn btn-info" type="submit" value="Guardar">
			<a class="btn btn-warning" href="./listar.php">Cancelar</a>
		</form>
	</div>
<?php include_once "pie.php" ?>
