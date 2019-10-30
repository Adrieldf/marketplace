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
            <h1>Carrinho de Compras</h1>
        </div>
    </header>
    <br>
    <div id="content" style="margin-left:40px; margin-right: 40px;">
        <div id="carrinho" class="divList">

            <div class="divItem">
                <img class="imgPedido" src="../Imagens/acessorios.jpg">
                <label class="labelDivItem labelPedido">Suporte de TV</label>
                <a class="rightButton" href="">Excluir</a>
                <label class="rightButton">x 1</label>
                <label class="labelDivItem labelPedido rightButton" style="margin-right: 20px">R$ 49,90</label>
            </div>
            <div class="divItem">
                <img class="imgPedido" src="../Imagens/acessorios.jpg">
                <label class="labelDivItem labelPedido">Cabo HDMI</label>
                <a class="rightButton" href="">Excluir</a>
                <label class="rightButton">x 1</label>
                <label class="labelDivItem labelPedido rightButton" style="margin-right: 20px">R$ 39,90</label>
            </div>
        </div>
        <br>
        <div>
            <label class="rightButton" style="margin-right: 20px;  font-size: 30px;">Total: R$
                89,80</label>
        </div>
        <br>
        <div class="divRow">
            <label class="formLabel">
                CEP
            </label>
            <input class="formTextInput" type="text" placeholder="Ex: 00000-000" style="width:160px; display: inline;">
            <button style="vertical-align: middle;">Calular</button>
        </div>
        <br>
        <a href="../html/pedido.php" class="" style="text-decoration: none;"><button>Finalizar
                Pedido</button></a>
        <div style="height: 300px;"></div>

    </div>

</body>