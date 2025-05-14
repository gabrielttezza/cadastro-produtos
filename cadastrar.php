<?php
// Validação de entrada
if (!isset($_POST['nome'], $_POST['preco'], $_POST['descricao'])) {
    die("Campos obrigatórios ausentes.");
}

$nome = trim($_POST['nome']);
$preco = floatval($_POST['preco']);
$descricao = trim($_POST['descricao']);

if ($nome === "" || $descricao === "" || $preco <= 0) {
    die("Dados inválidos.");
}

// Conexão com o banco
$conn = new mysqli("localhost", "root", "", "cadastro_produtos");

if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

// Inserção segura com prepared statement
$stmt = $conn->prepare("INSERT INTO produtos (nome, preco, descricao) VALUES (?, ?, ?)");
$stmt->bind_param("sds", $nome, $preco, $descricao);

if ($stmt->execute()) {
    echo "Produto cadastrado com sucesso!";
} else {
    echo "Erro ao cadastrar produto.";
}

$stmt->close();
$conn->close();
?>
