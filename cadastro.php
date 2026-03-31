<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EducaJá - Cadastro</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <link rel="stylesheet" href="assets/css/calendario.css">
</head>
<body>
    <main class="layout-centralizado">
        <div class="cartao">
            <h1 class="cartao__titulo">Cadastro</h1>
            <p class="cartao__subtitulo">Preencha os dados abaixo para criar sua conta.</p>

            <form action="process/validar_cadastro.php" method="POST" id="form-cadastro" novalidate>
                <div class="formulario__grupo">
                    <div class="formulario__campo">
                        <input type="text" id="nome" name="nome" class="formulario__input" placeholder="Nome completo" required>
                        <span id="erro-nome" class="formulario__erro-msg"></span>
                    </div>

                    <div class="formulario__campo">
                        <input type="text" id="nascimento" name="nascimento" class="formulario__input" placeholder="Data de nascimento" required>
                        <span id="erro-nascimento" class="formulario__erro-msg"></span>
                    </div>

                    <div class="formulario__campo">
                        <input type="email" id="email" name="email" class="formulario__input" placeholder="E-mail: exemplo@email.com" required>
                        <span id="erro-email" class="formulario__erro-msg"></span>
                    </div>
                    
                    <div class="formulario__campo">
                        <input type="password" id="senha" name="senha" class="formulario__input" placeholder="Senha: Crie uma senha secreta" required>
                        <span id="erro-senha" class="formulario__erro-msg"></span>
                    </div>
                </div>

                <div class="acoes">
                    <button type="submit" class="btn btn--pequeno">Criar Conta</button>
                    <a href="login.php" class="link-simples">Já tenho uma conta</a>
                    <a href="inicio.html" class="link-simples">Voltar ao início</a>
                </div>
            </form>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script src="https://cdn.jsdelivr.net/npm/flatpickr/dist/l10n/pt.js"></script>
    <script src="assets/js/validacao_cadastro.js"></script>
</body>
</html>