<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

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
$result = $conn->query("SELECT * FROM user");

while ($row = $result->fetch_assoc()) {
    echo  "Nome: " . $row['NOME'] . " - Email: " . $row['REGISTRO'] . " - ID: " . $row['ID'] . "<br>";
    
    echo "
    <form action='Alterauser.php' method='post' style='display:inline;'>
        <input type='hidden' name='id' value='{$row['ID']}'>
        <button name='atualizar' type='submit'>Alterar</button>
    </form>

    <form action='Excluiuser.php' method='post' style='display:inline;'>
        <input type='hidden' name='id' value='{$row['ID']}'>
        <button name='excluir' type='submit'>Excluir</button>
    </form>

    <hr>
    ";
}


$conn->close();
?>  
<a href="/Atividade/Index.php"><input type="button" value="Voltar"></a>
</body>
</html>