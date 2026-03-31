<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - EducaJa</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <main class="layout-centralizado">
        <div class="cartao">
            <h1 class="cartao__titulo">Entrar</h1>
            <p class="cartao__subtitulo">Digite seu e-mail e senha para continuar.</p>

            <form action="process/validar_login.php" method="POST" novalidate>
                <div class="formulario__grupo">
                    <div class="formulario__campo">
                        <input type="email" id="email" name="email" class="formulario__input" placeholder="E-mail: exemplo@email.com" required>
                        <span id="erro-email" class="formulario__erro-msg"></span>
                    </div>
                    
                    <div class="formulario__campo">
                        <input type="password" id="senha" name="senha" class="formulario__input" placeholder="Senha: Sua senha secreta" required>
                        <span id="erro-senha" class="formulario__erro-msg"></span>
                    </div>
                </div>

                <div class="acoes">
                    <button type="submit" class="btn btn--pequeno">Entrar</button>
                    <a href="inicio.html" class="link-simples">Voltar ao início</a>
                </div>
            </form>
        </div>
    </main>
    <script src="assets/js/validacao.js"></script>
</body>
</html>