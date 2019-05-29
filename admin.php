<?php 
include('common/utils.php');

if($_GET) {
	if(isset($_GET['error_message'])) {
		$error_message = $_GET['error_message'];
	}
}
$products = getProducts($conn);
$id= $_SESSION['user']['id'];

?>
<!DOCTYPE html>
<html>
<head>
	<title>Administrador</title>
</head>
<body>
	<div><a href="php/logout.php">Cerrar sesión</a></div>
	
 	<h1>Bienvenido Administrador <?php echo $_SESSION['user']['username']; ?></h1>	

<?php if(isset($error_message)) { ?>
	<div><strong><?php echo $error_message; ?></strong></div>
<?php } ?>
	<form action="php/process_newProduct.php" method="post">
		<div>
			<label>Nombre Producto</label>
			<input type="text" name="name" required="required">
		</div>
		<div>
			<label>Precio</label>
			<input type="text" name="price" required="required">
		</div>
		
			<button>Registrarme!</button>

		</div>
	</form>
<br>
	<table>
		<thead>
			<tr>
				<th>Nombre</th>
				<th>Precio</th>


			</tr>
		</thead>

		<tbody>
			<?php foreach ($products as $p) { ?>
				<tr>
					<td><?php echo $p['name'] ?></td>
					<td><?php echo $p['price'] ?></td>
				</tr>
			<?php } ?>
		</tbody>
	</table>

</body>
</html>