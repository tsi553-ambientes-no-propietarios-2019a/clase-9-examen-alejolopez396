<?php 
include('../common/utils.php');



if($_POST) {
	if (isset($_POST['id_user']) && isset($_POST['id_product']) isset($_POST['cantidad']) isset($_POST['pago'])){

		$id_user = $_POST['id_user'];
		$id_product = $_POST['id_product'];
		$cantidad = $_POST['cantidad'];
		$pago = $_POST['pago'];
		$user = $_SESSION['user']['id'];

		$sql_insert = "INSERT INTO product
		(id_user, id_product, cantidad,pago)
		VALUES ('$id_user','$id_product', '$cantidad','$pago')";

		echo $sql_insert;
		$conn->query($sql_insert);

		if ($conn->error) {
			echo 'Ocurrió un error ' . $conn->error;
		} else {
			redirect('../cliente.php');
		}
	} else {
		redirect('../cliente.php?error_message=Ingrese todos los datos!');
	}
} else {
	redirect('../cliente.php');


}