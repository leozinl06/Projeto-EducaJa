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
    <main class="container-inicio">
        <div class="card-boas-vindas">
            <h1 class="logo-educaja">Cadastro</h1>
            <p class="mensagem-boas-vindas">Preencha os dados abaixo para criar sua conta.</p>

            <form action="process/validar_cadastro.php" method="POST" class="form-acesso" id="form-cadastro" novalidate>
                <div class="grupo-inputs-largos">
                    
                    <div class="campo-wrapper">
                        <input type="text" id="nome" name="nome" placeholder="Nome completo" required>
                        <span id="erro-nome" class="mensagem-erro"></span>
                    </div>

                    <div class="campo-wrapper">
                        <input type="text" id="nascimento" name="nascimento" placeholder="Data de nascimento" required>
                        <span id="erro-nascimento" class="mensagem-erro"></span>
                    </div>

                    <div class="campo-wrapper">
                        <input type="email" id="email" name="email" placeholder="E-mail: exemplo@email.com" required>
                        <span id="erro-email" class="mensagem-erro"></span>
                    </div>
                    
                    <div class="campo-wrapper">
                        <input type="password" id="senha" name="senha" placeholder="Senha: Crie uma senha secreta" required>
                        <span id="erro-senha" class="mensagem-erro"></span>
                    </div>

                </div>

                <div class="grupo-botoes-login">
                    <button type="submit" class="btn-pequeno">Criar Conta</button>
                    <a href="login.php" class="btn-voltar-simples">Já tenho uma conta</a>
                    <a href="inicio.php" class="btn-voltar-simples">Voltar ao início</a>
                </div>
            </form>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script src="https://cdn.jsdelivr.net/npm/flatpickr/dist/l10n/pt.js"></script>
    <script src="assets/js/validacao_cadastro.js"></script>
</body>
</html>