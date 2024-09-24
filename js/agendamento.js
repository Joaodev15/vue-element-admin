function concatenaServicos() {
    var checkboxes = document.querySelectorAll('input[name="servicos[]"]:checked');
    var servicos = [];
    checkboxes.forEach((checkbox) => {
        servicos.push(checkbox.value);
    });
    document.getElementById('servicos_concatenados').value = servicos.join(',');
}

function verificaOutrosCampos() {
    var outrosServicosInput = document.getElementById('outros_servicos_text_input');
    if (document.getElementById('outros_servicos').checked && outrosServicosInput) {
        document.getElementById('outros_servicos_text').value = outrosServicosInput.value;
    } else {
        document.getElementById('outros_servicos_text').value = "";
    }

    var outrosPagamentoInput = document.getElementById('outros_pagamento_text_input');
    if (document.getElementById('outros_pagamento').checked && outrosPagamentoInput) {
        document.getElementById('outros_pagamento_text').value = outrosPagamentoInput.value;
    } else {
        document.getElementById('outros_pagamento_text').value = "";
    }

    var outrosConhecimentoInput = document.getElementById('outros_conhecimento_text_input');
    if (document.getElementById('outros_conhecimento').checked && outrosConhecimentoInput) {
        document.getElementById('outros_conhecimento_text').value = outrosConhecimentoInput.value;
    } else {
        document.getElementById('outros_conhecimento_text').value = "";
    }
}

function concatenaServicos() {
    var checkboxes = document.querySelectorAll('input[name="servicos[]"]:checked');
    var servicos = [];
    checkboxes.forEach((checkbox) => {
        servicos.push(checkbox.value);
    });
    document.getElementById('servicos_concatenados').value = servicos.join(',');
}

function verificaOutrosCampos() {
    var outrosServicosInput = document.getElementById('outros_servicos_text_input');
    if (document.getElementById('outros_servicos').checked && outrosServicosInput) {
        document.getElementById('outros_servicos_text').value = outrosServicosInput.value;
    } else {
        document.getElementById('outros_servicos_text').value = "";
    }

    var outrosPagamentoInput = document.getElementById('outros_pagamento_text_input');
    if (document.getElementById('outros_pagamento').checked && outrosPagamentoInput) {
        document.getElementById('outros_pagamento_text').value = outrosPagamentoInput.value;
    } else {
        document.getElementById('outros_pagamento_text').value = "";
    }

    var outrosConhecimentoInput = document.getElementById('outros_conhecimento_text_input');
    if (document.getElementById('outros_conhecimento').checked && outrosConhecimentoInput) {
        document.getElementById('outros_conhecimento_text').value = outrosConhecimentoInput.value;
    } else {
        document.getElementById('outros_conhecimento_text').value = "";
    }
}


function limparCampos() {
    document.querySelector('form').reset();
    // Limpar campos escondidos manualmente
    document.getElementById('servicos_concatenados').value = "";
    document.getElementById('outros_servicos_text').value = "";
    document.getElementById('outros_pagamento_text').value = "";
    document.getElementById('outros_conhecimento_text').value = "";
}

function voltarPagina() {
    window.history.back();
}

 