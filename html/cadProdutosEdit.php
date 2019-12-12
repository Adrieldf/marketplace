
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/main.css" />
</head>

<body>
    <?PHP 
        include_once("navbar.html");
    ?>
    <script type="text/javascript" src="../js/controller.js"></script>
    <header id="header" class="alt">
        <div class="inner">
            <h1>Produto</h1>
            <p>Cadastrar um produto</p>
        </div>
    </header>
    <br>
    <div id="content" style="margin-left:40px; margin-right: 40px;">
       <form action="cadastraProduto.php" method="get"> 
        <form class="formCenter">
            <div class="divRow">
                <label class="formLabel">
                    Nome
                </label>
                <input id = "nome" class="formTextInput" type="text" placeholder="Ex: Televisão">
            </div>
            <div class="divRow">
                <label class="formLabel">
                    Modelo
                </label>
                <input id = "modelo" class="formTextInput" type="text" placeholder="Ex: TV0001BR">
            </div>
            <div class="divRow">
                <label class="formLabel">
                    Imagens
                </label>
                <input type="file" name="img" multiple>
            </div>
            <div class="divRow">
                <label class="formLabel">
                    Segmento
                </label>
                <select id = "Segmento" class="formSelect">
                    <option value="eletronicos">Eletrônicos</option>
                    <option value="eletrodomesticos">Eletrodomésticos</option>
                    <option value="acessorios">Acessórios</option>
                    <option value="vestuario">Vestuário</option>
                </select>
            </div>

            <div class="divRow">
                <label class="formLabel">
                    Descrição
                </label>
                <textarea id = "Descrição" class="formTextInput" type="text" rows="10"
                    placeholder="Ex: Excelente para ambiente doméstico"></textarea>
            </div>
            <div class="divRow">
                <label class="formLabel">
                    Preço
                </label>
                <input id = "preco" class="formTextInput" type="text" placeholder="Ex: 1.000,00">
            </div>


            <br>
            <div class="divRow divSubmitButtons">
                <a href="../html/cadProdutosList.php" style="text-decoration: none;"><button form="cancel">Voltar</button></a>
                <button form="submit">Salvar</button>
                <button form="delete">Apagar</button>
            </div>
        </form>
    </div>

</body>