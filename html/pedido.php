<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/main.css" />
</head>

<body>
    <script type="text/javascript" src="../js/controller.js"></script>
    <?PHP 
    include_once("navbar.html");
    ?>
    <header id="header" class="alt">
        <div class="inner">
            <h1>Pedido</h1>
        </div>
    </header>
    <br>
    <div id="content" style="margin-left:40px; margin-right: 40px;">

        <form class="formCenter">
            <div class="divRow">
                <label class="formLabel">
                    Faça seu cadastro / login
                </label>
                <a href="../html/login.php" style="text-decoration: none;"><button form="cancel">Cadastro / Login</button></a>
            </div>
            <div class="divRow">
                <label class="formLabel">
                    Nome no cartão
                </label>
                <input class="formTextInput" type="text" placeholder="Ex: João da Silva">
            </div>
            <div class="divRow">
                <label class="formLabel">
                    Número do cartão
                </label>
                <input class="formTextInput" type="text" placeholder="Ex: 0000 0000 0000 0000">
            </div>
            <div class="divRow">
                <label class="formLabel">
                    Data de Validade
                </label>
                <input class="formTextInput" type="text" placeholder="Ex: 12/22">
            </div>
            <div class="divRow">
                <label class="formLabel">
                    Código de Segurança
                </label>
                <input class="formTextInput" type="text" placeholder="Ex: 123">
            </div>

            <br>
            <div class="divRow divSubmitButtons">
                <a href="../html/index.php" style="text-decoration: none;"><button form="cancel">Cancelar</button></a>
                <button form="submit">Confimar</button>
            </div>
        </form>
        <div style="height: 300px;"></div>

    </div>

</body>