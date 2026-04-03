const inputCard = document.getElementById('cor-card');
const inputFundo = document.getElementById('cor-fundo');
const botoesPreset = document.querySelectorAll('.btn-preset-cor');

function aplicarEGravar(variavel, valor, inputRelacionado) {
    document.documentElement.style.setProperty(variavel, valor);
    localStorage.setItem(variavel, valor);
    if (inputRelacionado) {
        inputRelacionado.value = valor;
    }
}

botoesPreset.forEach(btn => {
    btn.addEventListener('click', () => {
        const cor = btn.getAttribute('data-cor');
        const tipo = btn.getAttribute('data-tipo');
        
        if (tipo === 'card') {
            aplicarEGravar('--cor-card-azul', cor, inputCard);
        } else {
            aplicarEGravar('--cor-fundo-primario', cor, inputFundo);
        }
    });
});

inputCard.addEventListener('input', (e) => {
    aplicarEGravar('--cor-card-azul', e.target.value);
});

inputFundo.addEventListener('input', (e) => {
    aplicarEGravar('--cor-fundo-primario', e.target.value);
});

window.addEventListener('DOMContentLoaded', () => {
    const salvaCard = localStorage.getItem('--cor-card-azul') || '#7FB3D5';
    const salvaFundo = localStorage.getItem('--cor-fundo-primario') || '#adc6d6';
    
    aplicarEGravar('--cor-card-azul', salvaCard, inputCard);
    aplicarEGravar('--cor-fundo-primario', salvaFundo, inputFundo);
});

function aplicarEGravar(variavel, valor, inputRelacionado, previewId) {
    document.documentElement.style.setProperty(variavel, valor);
    localStorage.setItem(variavel, valor);
    
    if (inputRelacionado) inputRelacionado.value = valor;
    
    const preview = document.getElementById(previewId);
    if (preview) preview.style.backgroundColor = valor;
}

inputCard.addEventListener('input', (e) => {
    aplicarEGravar('--cor-card-azul', e.target.value, null, 'preview-card');
});

inputFundo.addEventListener('input', (e) => {
    aplicarEGravar('--cor-fundo-primario', e.target.value, null, 'preview-fundo');
});