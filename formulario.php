<?php include_once "encabezado.php" ?>

<div class="col-xs-12">
	<h1>Nuevo producto</h1>
	<form method="post" action="nuevo.php">
		<label for="nombre">Nombre:</label>
		<input class="form-control" name="nombre" required type="text" id="nombre" placeholder="Escribe el nombre">

		<label for="marca">Marca:</label>
		<textarea class="form-control" required id="marca" name="marca" required type="text" id="marca" placeholder="Marca"></textarea>

		<label for="codigo">Codigo:</label>
		<input class="form-control" name="codigo" required type="number" id="codigo" placeholder="codigo">

		<label for="color">Color:</label>
		<input class="form-control" name="color" required type="text" id="color" placeholder="color">
		
		<label for="categoria">Categoria:</label>
		<input class="form-control" name="categoria" required type="text" id="categoria" placeholder="Escribe la categoria">
		
		<label for="precio">Precio de compra:</label>
		<input class="form-control" name="precio" required type="number" id="precioCompra" placeholder="Precio de compra">
		
		<label for="precio_p">Precio de Prevedor:</label>
		<input class="form-control" name="precio_p" required type="number" id="precio_p" placeholder="Precio de Proveedor">
		
		<label for="tamano">Tamano</label>
		<input class="form-control" name="tamano" required type="text" id="tamano" placeholder="Tamano">
		
		<label for="existencia">Existencia</label>
		<input class="form-control" name="existencia" required type="number" id="existencia" placeholder="Existencia">
		
		<br><br><input class="btn btn-info" type="submit" value="Guardar">
	</form>
</div>
<?php include_once "pie.php" ?>