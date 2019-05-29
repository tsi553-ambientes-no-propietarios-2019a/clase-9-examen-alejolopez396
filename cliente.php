<?php 
    include('common/utils.php');
    if($_GET) {
        if(isset($_GET['error_message'])) {
            $error_message = $_GET['error_message'];
        }
    }
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <title>Cliente</title>
</head>
<body>
    <div><a href="php/logout.php">Cerrar sesión</a></div>

    <h1>Bienvenido Cliente <?php echo $_SESSION['user']['username']; ?></h1>
    <h2>REGISTRAR PRODUCTO</h2>

    <?php if(isset($error_message)) { ?>
	<div><strong><?php echo $error_message; ?></strong></div>
<?php } ?>
	<form action="php/process_newOrder.php" method="post">

		<div>
            <label>PRODUCTO: </label>
		    <select name="producto" required="required">
			<option value="">Seleccione...</option>
			<?php getSelectProduct($conn); ?>
            </select>
		</div>

		<div>
			<label>Cantidad</label>
			<input type="text" name="cantidad" required="required">
		</div>
		<div>
			<button>Registrar</button>
		</div>
	</form>
    
</body>
</html>