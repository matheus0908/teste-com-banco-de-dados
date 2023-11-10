<?php
// Conectar ao banco de dados (substitua os valores conforme necessário)
$servername = "seu_servidor";
$username = "seu_usuario";
$password = "sua_senha";
$dbname = "seu_banco_de_dados";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar a conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

// Recuperar os dados do formulário
$data = $_POST['data'];
$nome = $_POST['nome'];
$req = $_POST['req'];
$sei = $_POST['sei'];
$folhas = $_POST['folhas'];
$plantas = $_POST['plantas'];

// Inserir dados no banco de dados
$sql = "INSERT INTO sua_tabela (data, nome, req, sei, folhas, plantas) VALUES ('$data', '$nome', '$req', '$sei', $folhas, $plantas)";

if ($conn->query($sql) === TRUE) {
    echo "Registro inserido com sucesso";
} else {
    echo "Erro ao inserir registro: " . $conn->error;
}

// Fechar a conexão com o banco de dados
$conn->close();
?>
