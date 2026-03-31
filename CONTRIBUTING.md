Guia de Contribuição - Projeto EducaJá

Para garantir que a nossa estilização seja escalável, legível e fácil de manter, adotamos a metodologia BEM (Block, Element, Modifier) na nomeação das nossas classes CSS

Padrão de Nomenclatura de Classes CSS

Block (Bloco): É o componente raiz e independente da interface. Deve ter um nome claro que descreva seu propósito.

Sintaxe: .nome-do-bloco

Exemplos: .cabecalho, .formulario, .cartao

Element (Elemento): É uma parte interna do bloco. Ele não tem significado isolado e está diretamente atrelado ao bloco pai. Para separá-lo do bloco, usamos dois underlines (__).

Sintaxe: .bloco__elemento

Exemplos: .cabecalho__titulo, .formulario__input, .cartao__imagem

Modifier (Modificador): É uma variação visual ou de estado de um bloco ou de um elemento. Para separá-lo, usamos dois traços (--).

Sintaxe: .bloco--modificador ou .bloco__elemento--modificador

Exemplos: .botao--primario, .cartao--destaque, .formulario__input--erro

Para manter a organização do repositório e facilitar a revisão de código, todas as mensagens de commit devem seguir o padrão de Commits Semânticos descrito abaixo

Estrutura da Mensagem

O formato padrão para cada commit deve ser:

tipo(escopo): descrição curta em letras minúsculas

Tipos de Commit Permitidos

feat: Quando uma nova funcionalidade é adicionada ao projeto (ex: criação de uma nova página ou botão).

fix: Quando um erro ou bug é corrigido no código existente.

docs: Quando há mudanças apenas na documentação do projeto (como o README ou este guia).

style: Alterações que não afetam a lógica do código, apenas a aparência (CSS, formatação de arquivos, espaçamento).

refactor: Mudanças no código que melhoram a estrutura ou performance, mas sem alterar o comportamento final.

chore: Atualizações de ferramentas de desenvolvimento, instalação de bibliotecas ou configurações de ambiente.

Exemplos Práticos para o Grupo

Para criar a página inicial: feat: cria estrutura inicial do index.html

Para mudar as cores do site: style: altera paleta de cores para tons pastéis

Para corrigir um link quebrado: fix: corrige redirecionamento do menu lateral

Para atualizar o guia de instalação: docs: atualiza passos de instalação no readme

