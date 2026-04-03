<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personalizar Cores - EducaJá</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/personalizacao.css"> 
</head>
<body class="body">
    <main class="container-inicio">
    <div class="card-boas-vindas">
        <h1 class="logo-educaja">Cores do Sistema</h1>
        <p class="mensagem-boas-vindas">Combine tons profissionais ou crie sua própria identidade.</p>

        <div class="seletor-cores-container">
            
            <div class="secao-personalizacao">
                <label class="label-personalizacao">Cor do Card</label>
                <div class="grid-presets">
                    <button type="button" class="btn-preset-cor" data-tipo="card" data-cor="#7FB3D5" style="background-color: #7FB3D5;"></button>
                    <button type="button" class="btn-preset-cor" data-tipo="card" data-cor="#A95C42" style="background-color: #A95C42;"></button>
                    <button type="button" class="btn-preset-cor" data-tipo="card" data-cor="#34495E" style="background-color: #34495E;"></button>
                    <button type="button" class="btn-preset-cor" data-tipo="card" data-cor="#E5D8CF" style="background-color: #E5D8CF;"></button>
                    <button type="button" class="btn-preset-cor" data-tipo="card" data-cor="#556B2F" style="background-color: #556B2F;"></button>
                    <button type="button" class="btn-preset-cor" data-tipo="card" data-cor="#F8F9FA" style="background-color: #F8F9FA;"></button>
                </div>
                
                <p class="texto-ajuda-custom">Não gostou das opções acima? Escolha uma cor exata:</p>
                <div class="controle-cor-custom">
                    <input type="color" id="cor-card" value="#FFFFFF">
                    <label for="cor-card">Cor personalizada do card</label>
                </div>
            </div>

            <hr class="divisor-personalizacao">

            <div class="secao-personalizacao">
                <label class="label-personalizacao">Cor do Fundo</label>
                <div class="grid-presets">
                    <button type="button" class="btn-preset-cor" data-tipo="fundo" data-cor="#adc6d6" style="background-color: #adc6d6;"></button>
                    <button type="button" class="btn-preset-cor" data-tipo="fundo" data-cor="#1a1a1a" style="background-color: #1a1a1a;"></button>
                    <button type="button" class="btn-preset-cor" data-tipo="fundo" data-cor="#D2B48C" style="background-color: #D2B48C;"></button>
                    <button type="button" class="btn-preset-cor" data-tipo="fundo" data-cor="#2C3E50" style="background-color: #2C3E50;"></button>
                    <button type="button" class="btn-preset-cor" data-tipo="fundo" data-cor="#9DC183" style="background-color: #9DC183;"></button>
                    <button type="button" class="btn-preset-cor" data-tipo="fundo" data-cor="#F4F6F7" style="background-color: #F4F6F7;"></button>
                </div>
                
                <p class="texto-ajuda-custom">Ou defina um tom específico para o fundo:</p>
                <div class="controle-cor-custom">
                    <input type="color" id="cor-fundo" value="#F4F6F7">
                    <label for="cor-fundo">Cor personalizada do fundo</label>
                </div>
            </div>
        </div>

        <div class="grupo-botoes-personalizacao">
            <a href="personalizacao_fonte.php" class="btn-pequeno">Salvar e Continuar</a>
            <a href="cadastro.php" class="btn-voltar-simples">Voltar</a>
        </div>
    </div>
    </main>
    <script src="assets/js/personalizacao_cor.js"></script>
</body>
</html>