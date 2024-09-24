<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/agendamento.css">
    <link rel="icon" href="../imagens/logotipo.png" type="image/png">

    <title>Agendamento</title>
</head>
<body>
    <h2>Formulário de Agendamento - Studio de Beleza</h2>
    <form action="agendamento.act.php" method="post" onsubmit="concatenaServicos(); verificaOutrosCampos();">
        <label for="nome">Nome do Cliente:</label>
        <input type="text" id="nome" name="nome" required><br><br>

        <label for="telefone">Telefone:</label>
        <input type="text" id="telefone" name="telefone" required><br><br>

        <label for="email">E-mail:</label>
        <input type="email" id="email" name="email" required><br><br>

        <label for="data_agendamento">Data do Agendamento:</label>
        <input type="date" id="data_agendamento" name="data_agendamento" min="2024-08-21" required><br><br>

        <label for="horario_agendamento">Horário do Agendamento:</label>
        <input type="time" id="horario_agendamento" name="horario_agendamento" min="09:00" max="19:00" required><br><br>

        <label>Serviço(s) Desejado(s):</label><br>
        <input type="checkbox" id="manicure" name="servicos[]" value="Manicure">
        <label for="manicure">Manicure</label><br>

        <input type="checkbox" id="pedicure" name="servicos[]" value="Pedicure">
        <label for="pedicure">Pedicure</label><br>

        <input type="checkbox" id="maquiagem" name="servicos[]" value="Maquiagem">
        <label for="maquiagem">Maquiagem</label><br>

        <input type="checkbox" id="penteado" name="servicos[]" value="Penteado">
        <label for="penteado">Penteado</label><br>

        <input type="checkbox" id="corte_de_cabelo" name="servicos[]" value="Corte de Cabelo">
        <label for="corte_de_cabelo">Corte de Cabelo</label><br>

        <input type="checkbox" id="design_de_sobrancelha" name="servicos[]" value="Design de Sobrancelha">
        <label for="design_de_sobrancelha">Design de Sobrancelha</label><br>

        <input type="checkbox" id="depilacao_com_cera" name="servicos[]" value="Depilação com Cera">
        <label for="depilacao_com_cera">Depilação com Cera</label><br>

        <input type="checkbox" id="limpeza_de_pele" name="servicos[]" value="Limpeza de Pele">
        <label for="limpeza_de_pele">Limpeza de Pele</label><br>

        <input type="checkbox" id="pacote_bronze" name="servicos[]" value="Pacote Bronze">
        <label for="pacote_bronze">Pacote Bronze</label><br>

        <input type="checkbox" id="pacote_prata" name="servicos[]" value="Pacote Prata">
        <label for="pacote_prata">Pacote Prata</label><br>

        <input type="checkbox" id="pacote_ouro" name="servicos[]" value="Pacote Ouro">
        <label for="pacote_ouro">Pacote Ouro</label><br>

        <input type="checkbox" id="pacote_diamante" name="servicos[]" value="Pacote Diamante">
        <label for="pacote_diamante">Pacote Diamante</label><br>


        <input type="checkbox" id="outros_servicos" name="servicos[]" value="Outros">
        <label for="outros_servicos">Outros:</label>
        <input type="text" id="outros_servicos_text_input" name="outros_servicos_text_input"><br><br>

        <input type="hidden" id="servicos_concatenados" name="servicos_concatenados">
        <input type="hidden" id="outros_servicos_text" name="outros_servicos_text">
        <input type="hidden" id="outros_pagamento_text" name="outros_pagamento_text">
        <input type="hidden" id="outros_conhecimento_text" name="outros_conhecimento_text">

        <label for="profissional">Preferência de Profissional (opcional):</label>
        <input type="text" id="profissional" name="profissional"><br><br>

        <label for="comentarios">Comentários/Observações:</label><br>
        <textarea id="comentarios" name="comentarios" rows="4" cols="50"></textarea><br><br>

        <label>Método de Pagamento Preferido:</label><br>
        <input type="radio" id="dinheiro" name="pagamento" value="Dinheiro">
        <label for="dinheiro">Dinheiro</label><br>

        <input type="radio" id="cartao" name="pagamento" value="Cartão de Crédito/Débito">
        <label for="cartao">Cartão de Crédito/Débito</label><br>

        <input type="radio" id="pix" name="pagamento" value="Pix">
        <label for="pix">Pix</label><br>

        <input type="radio" id="outros_pagamento" name="pagamento" value="Outros">
        <label for="outros_pagamento">Outros:</label>
        <input type="text" id="outros_pagamento_text_input" name="outros_pagamento_text_input"><br><br>

        <label>Como nos conheceu?</label><br>
        <input type="radio" id="redes_sociais" name="conhecimento" value="Redes Sociais">
        <label for="redes_sociais">Redes Sociais</label><br>

        <input type="radio" id="indicacao" name="conhecimento" value="Indicação de Amigos/Familiares">
        <label for="indicacao">Indicação de Amigos/Familiares</label><br>

        <input type="radio" id="publicidade" name="conhecimento" value="Publicidade">
        <label for="publicidade">Publicidade</label><br>

        <input type="radio" id="outros_conhecimento" name="conhecimento" value="Outros">
        <label for="outros_conhecimento">Outros:</label>
        <input type="text" id="outros_conhecimento_text_input" name="outros_conhecimento_text_input"><br><br>
        <center>
        <button class="btn" type="button" onclick="window.location.href='http://localhost/tcc.Amelia/paginas/studio.html'">Voltar</button>
        <button class="btn">Agendar</button>
        <button class="btn">Limpar</button>
        </center>
        <script src="../js/agendamento.js"></script>
    </form>
</body>
</html>
