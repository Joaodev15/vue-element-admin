<?php
$servername = "localhost";
$dbname = "agendamento";
$destino = "location:agendamento.php";
// Cria conexão
$conn = new mysqli($servername, "root", "", $dbname);

// Checa conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

// Obtém os dados do formulário
$nome = $_POST['nome'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];
$data_agendamento = $_POST['data_agendamento'];
$horario_agendamento = $_POST['horario_agendamento'];
$servicos = $_POST['servicos_concatenados'];
$profissional = $_POST['profissional'];
$comentarios = $_POST['comentarios'];
$pagamento = $_POST['pagamento'];
$conhecimento = $_POST['conhecimento'];
$outros_servicos_text = $_POST['outros_servicos_text'];
$outros_pagamento_text = $_POST['outros_pagamento_text'];
$outros_conhecimento_text = $_POST['outros_conhecimento_text'];

// Prepara e executa a consulta SQL
$sql = "INSERT INTO agendamentos (nome, telefone, email, data_agendamento, horario_agendamento, servicos, profissional, comentarios, pagamento, conhecimento, outros_servicos_text, outros_pagamento_text, outros_conhecimento_text)
VALUES ('$nome', '$telefone', '$email', '$data_agendamento', '$horario_agendamento', '$servicos', '$profissional', '$comentarios', '$pagamento', '$conhecimento', '$outros_servicos_text', '$outros_pagamento_text', '$outros_conhecimento_text')";

if ($conn->query($sql) === TRUE) {
    echo "Novo agendamento criado com sucesso";
} else {
    echo "Erro: " . $sql . "<br>" . $conn->error;
}


$conn->close();
header($destino);
?>
