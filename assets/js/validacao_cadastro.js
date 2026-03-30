const formulario = document.getElementById('form-cadastro');
const campoNome = document.getElementById('nome');
const alertaErroNome = document.getElementById('erro-nome');
const campoNascimento = document.getElementById('nascimento');
const alertaErroNascimento = document.getElementById('erro-nascimento');
const campoEmail = document.getElementById('email');
const alertaErroEmail = document.getElementById('erro-email');
const campoSenha = document.getElementById('senha');
const alertaErroSenha = document.getElementById('erro-senha');

formulario.addEventListener('submit', function(event) {
    let formularioValido = true;

    alertaErroNome.style.display = "none";
    campoNome.classList.remove('campo-erro');
    alertaErroNascimento.style.display = "none";
    campoNascimento.classList.remove('campo-erro');
    alertaErroEmail.style.display = "none";
    campoEmail.classList.remove('campo-erro');
    alertaErroSenha.style.display = "none";
    campoSenha.classList.remove('campo-erro');

    if (!campoNome.validity.valid) {
        formularioValido = false;
        alertaErroNome.textContent = "Ops... Acho que você esqueceu de colocar seu nome";
        alertaErroNome.style.display = "block";
        campoNome.classList.add('campo-erro');
    }

    if (!campoNascimento.validity.valid) {
        formularioValido = false;
        alertaErroNascimento.textContent = "Ops...Acho que você esqueceu de colocar sua data de nascimento";
        alertaErroNascimento.style.display = "block";
        campoNascimento.classList.add('campo-erro');
    }

    if (!campoEmail.validity.valid) {
        formularioValido = false;

        let mensagemEmail = "Ops...Acho que você esqueceu de colocar o @ ou o dominio no seu email";

        if (campoEmail.validity.valueMissing) {
            mensagemEmail = "Ops...Acho que você esqueceu de colocar seu email";
        }
        
        alertaErroEmail.textContent = mensagemEmail;
        alertaErroEmail.style.display = "block";
        campoEmail.classList.add('campo-erro');
    }

    if (!campoSenha.validity.valid) {
        formularioValido = false;
        alertaErroSenha.textContent = "Ops... Acho que você esqueceu de colocar sua senha";
        alertaErroSenha.style.display = "block";
        campoSenha.classList.add('campo-erro');
    }

    if (!formularioValido) {
        event.preventDefault();
    }
});

document.addEventListener('DOMContentLoaded', function() {
    flatpickr("#nascimento", {
        locale: "pt",
        dateFormat: "d/m/Y",
        disableMobile: true,
        allowInput: true,
        maxDate: "today"
    });
});