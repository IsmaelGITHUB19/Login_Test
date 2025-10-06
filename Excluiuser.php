<?php 
function conect_banco(){
    $servername = "localhost";
    $username   = "root";
    $password   = "";
    $database   = "consumo_energia";
    $conn = new mysqli($servername, $username, $password, $database);
    if ($conn->connect_error) {
        die("Falha na conexão: " . $conn->connect_error);
    }
    return $conn;
}

$conn = conect_banco();

if (!empty($_POST['id'])) {
    $id = intval($_POST['id']);

    $sql = "DELETE FROM user WHERE ID = $id";

    if ($conn->query($sql) === TRUE) {
        echo "Usuário excluído com sucesso!";
    } else {
        echo "Erro ao excluir: " . $conn->error;
    }
} else {
    echo "Nenhum ID recebido.";
}

$conn->close();
?>
