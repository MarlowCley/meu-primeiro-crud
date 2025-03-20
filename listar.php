<?php
require "conexao.php";

$stmt = $pdo->query("SELECT * FROM usuarios ORDER BY id DESC");
$nomes = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($nomes);
?>
