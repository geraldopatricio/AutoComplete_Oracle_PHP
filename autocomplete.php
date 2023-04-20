<?php
$host = 'HOST';   // ALTERE DE ACORDO COM O SEU
$port = '1521';   // ALTERE DE ACORDO COM O SEU
$sid = 'BANCO';   // ALTERE DE ACORDO COM O SEU
$login = 'USER';  // ALTERE DE ACORDO COM O SEU
$senha = 'SENHA'; // ALTERE DE ACORDO COM O SEU

$tns = "(DESCRIPTION=(ADDRESS_LIST = (ADDRESS = (PROTOCOL = TCP)(HOST = {$host})(PORT = {$port})))(CONNECT_DATA = (SID = {$sid})))";

try {
	$conn = new PDO("oci:dbname={$tns}", $login, $senha);
} catch(PDOException $e) {
	echo "Error: " . $e->getMessage();
}

// faz um get para parametrizar a consulta buscando o nome
if(isset($_GET['term'])) {
	$term = $_GET['term'];
	$query = "SELECT NOME, CIDADE, UF FROM AUTO_COMPLETE WHERE ESTCOB = 'CE' AND NOME LIKE '{$term}%'";

	$stmt = $conn->prepare($query);
	$stmt->execute();

	// armazendo no array o resultado
	$results = array();

	while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
		$results[] = $row;
	}

	echo json_encode($results);
}
?>
