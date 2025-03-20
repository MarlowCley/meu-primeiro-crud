<?php
require "conexao.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $id = $_POST["id"];
    $novoNome = trim($_POST["nome"]);

    if (!empty($novoNome)) {
        $stmt = $pdo->prepare("UPDATE usuarios SET nome = :nome WHERE id = :id");
        $stmt->bindParam(":nome", $novoNome);
        $stmt->bindParam(":id", $id);
        $stmt->execute();
        echo json_encode(["status" => "success"]);
    } else {
        echo json_encode(["status" => "error", "message" => "Nome inválido!"]);
    }
}
?>
