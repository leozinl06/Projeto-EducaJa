<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - EducaJa</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body class="body">
    <main class="container-inicio">
        <div class="card-boas-vindas">
            <h1 class="logo-educaja">Entrar</h1>
            <p class="mensagem-boas-vindas">Digite seu e-mail e senha para continuar.</p>

            <form action="process/validar_login.php" method="POST" class="form-acesso" novalidate>
                
                <div class="grupo-inputs-largos">
                    <div class="campo-wrapper">
                        <input type="email" id="email" name="email" placeholder="E-mail: exemplo@email.com" required>
                        <span id="erro-email" class="mensagem-erro"></span>
                    </div>
                    
                    <div class="campo-wrapper">
                        <input type="password" id="senha" name="senha" placeholder="Senha: Sua senha secreta" required>
                        <span id="erro-senha" class="mensagem-erro"></span>
                    </div>
                </div>

                <div class="grupo-botoes-login">
                    <button type="submit" class="btn-pequeno">Entrar</button>
                    <a href="inicio.php" class="btn-voltar-simples">Voltar ao início</a>
                </div>

            </form>
        </div>
    </main>
    <script src="assets/js/validacao.js"></script>
</body>
</html>