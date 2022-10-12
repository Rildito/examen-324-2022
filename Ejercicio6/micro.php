<?php
include "conexion.php";

$pdo = new Conexion();
switch ($_SERVER['REQUEST_METHOD']) {
	case 'GET':
		if (isset($_GET['ci'])) {
			$sqls = "SELECT * FROM mibaseenrique.persona WHERE ci=:ci";
			$sql = $pdo->prepare($sqls);
			$sql->bindValue(':ci', $_GET['ci']);
			$sql->execute();
			$sql->setFetchMode(PDO::FETCH_ASSOC);
			header("HTTP/1.1 200 hay datos");
			echo json_encode($sql->fetchAll());
			exit;
		} else {
			$sqls = "SELECT * FROM mibaseenrique.persona";
			$sql = $pdo->prepare($sqls);
			$sql->execute();
			$sql->setFetchMode(PDO::FETCH_ASSOC);
			header("HTTP/1.1 200 hay datos");
			echo json_encode($sql->fetchAll());
			exit;
		}
		break;
	case 'POST':
		$sql =  $pdo->prepare("INSERT INTO mibaseenrique.persona (ci, nombreCompleto, fechaNacimiento, departamento) VALUES(:ci, :nombreCompleto, :fechaNacimiento, :departamento)");
		$sql->bindValue(':ci', $_POST['ci']);
		$sql->bindValue(':nombreCompleto', $_POST['nombreCompleto']);
		$sql->bindValue(':fechaNacimiento', $_POST['fechaNacimiento']);
		$sql->bindValue(':departamento', $_POST['departamento']);

		try {
			if ($sql->execute()) {
				header("HTTP/1.1 200 ok");
				// echo json_encode($sql->fetchAll());
				$arr = array("mensaje" => "Creado correctamente");
				echo json_encode($arr);
			} else {
				echo $sql->errorInfo()[2];
				echo json_decode('error');
			}
		} catch (Exception $e) {
			echo $e->getMessage();
		}
		exit;
		break;

	case 'PUT':
		$sql = $pdo->prepare("UPDATE mibaseenrique.persona set ci=:ci, nombreCompleto=:nombreCompleto, 
            fechaNacimiento=:fechaNacimiento, departamento=:departamento WHERE ci=:id");
		$sql->bindValue(':ci', $_GET['ci']);
		$sql->bindValue(':nombreCompleto', $_GET['nombreCompleto']);
		$sql->bindValue(':fechaNacimiento', $_GET['fechaNacimiento']);
		$sql->bindValue(':departamento', $_GET['departamento']);
		$sql->bindValue(':id', $_GET['id']);
		try {
			$sql->execute();
			header("HTTP/1.1 200 ok");
			$arr = array("mensaje" => "Actualizado correctamente");
			echo json_encode($arr);
		} catch (Exception $e) {
			echo $e->getMessage();
		}
		exit;
		break;

	case 'DELETE':
		$sql = $pdo->prepare("DELETE FROM mibaseenrique.persona WHERE ci=:ci");
		$sql->bindValue(':ci', $_GET['ci']);
		$sql->execute();
		header("HTTP/1.1 200 ok");
		$arr = array("mensaje" => "Eliminado correctamente");
		echo json_encode($arr);
		exit;
		break;
}
