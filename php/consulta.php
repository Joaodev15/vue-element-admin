<?php include('head.php'); ?>
<link rel="stylesheet" href="../css/consulta.css">
<body class="adm">
 <div class="topoAdm">

    <h1>Bem Vindo Adm!!</h1>
</div> 
   <script>
        function excluir(codigo) {
	opcao = confirm("Deseja excluir o registro " + codigo + "?");
	if (opcao == true) {
		$.ajax({
			type: "get",
			url: "excluir.php?codigo=" + codigo,
			success: function (response) {
				location.reload();
			},
		});
	}
}

    </script>
    <?php 
    require('connect.php');
    $produtos = mysqli_query($conn, "SELECT * FROM `agendamentos`");
    @session_start();
    
    while($produto = mysqli_fetch_assoc($produtos)) {
     
        echo "<div class='CardsAdm'>";
        
        echo "<div class='CardsUnicos'>";
        echo "<div class='imageCard'>";
        if($produto['fotoProduto'] == "") {
            echo "<img src=''>";
        } else {
            echo "<img src='{$produto['fotoProduto']}'>";
        }
        echo "</div>";
        echo "<div class='nomeIndefinido'>";
        echo "<div class ='nomeDasCoisas'>";
        echo "<p>Codigo: {$produto['id']}</p>";
       
        echo "<p>telefone: {$produto['telefone']}</p>";
        echo "<p>emai: {$produto['email']}</p>";
        echo "<p>Data: {$produto['data_agendamento']}</p>";
        echo "<p>Horario: {$produto['horario_agendamento']}</p>";
        echo "<div class='botoesCard'>";
        echo "<a onclick='excluir({$produto['id']})'><img src='../imagens/lixeira.png'></a>";
        echo "<a href='alterarCamisa.php?codigo={$produto['id']}'><img src='../imagens/lapis.png'></a>";

        echo "<img class='simboloAdm' src='fotos/simbolos/{$produto['timeProduto']}.png'>";
        echo "</div>";
        echo "</div>";
        echo "</div>";
        echo "</div>";
        echo "</div>";
    }
    ?>

    <a href="logoff.php" class ="saidinha">sair</a>
    <?php include('bottom.php'); ?>
</body>
