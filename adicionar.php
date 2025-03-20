<?php
require "conexao.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nome = trim($_POST["nome"]);

    if (!empty($nome)) {
        $stmt = $pdo->prepare("INSERT INTO usuarios (nome) VALUES (:nome)");
        $stmt->bindParam(":nome", $nome);
        $stmt->execute();
        echo json_encode(["status" => "success", "id" => $pdo->lastInsertId()]);
    } else {
        echo json_encode(["status" => "error", "message" => "Nome inválido!"]);
    }
}
?>
