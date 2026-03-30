const formulario = document.querySelector('.form-acesso');
const campoEmail = document.getElementById('email');
const alertaErro = document.getElementById('erro-email');
const campoSenha = document.getElementById('senha');
const alertaErroSenha = document.getElementById('erro-senha')

formulario.addEventListener('submit', function(event) {
    alertaErro.style.display = "none";
    campoEmail.classList.remove('campo-erro');
    alertaErroSenha.style.display = "none";
    campoSenha.classList.remove('campo-erro');

    if (!campoEmail.validity.valid) {
        event.preventDefault();

        let mensagem = "";
        if (campoEmail.validity.valueMissing) {
            mensagem = "Ops... Acho que você esqueceu de preencher o campo email";
        } else if (campoEmail.validity.typeMismatch) {
            mensagem = "Ops... Acho que você esqueceu o @ no seu email";
        }

        alertaErro.textContent = mensagem;
        alertaErro.style.display = "block";
        
        campoEmail.classList.add('campo-erro');
    }

    if (!campoSenha.validity.valid) {
    event.preventDefault();
    
    let mensagemSenha = "";
    
    if (campoSenha.validity.valueMissing) {
        mensagemSenha = "Ops... Acho que você esqueceu de colocar sua senha";
    }
    
    alertaErroSenha.textContent = mensagemSenha;
    alertaErroSenha.style.display = "block";
    campoSenha.classList.add('campo-erro');
}
});