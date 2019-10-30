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
      <h1>Produtos</h1>
    </div>
  </header>
  <br>
  <div id="content" style="margin-left:40px; margin-right: 40px;">

    <form class="inner" method="get" action="../html/cadProdutosEdit.php" style="text-decoration: none;">
      <button>Cadastrar Novo</button> </form>
    <br>
    <div id="vendedorList" class="divList">

      <div class="divItem">
        <label class="labelDivItem">Suporte de TV</label>
        <a class="rightButton" href="" style="text-decoration: none;">Excluir</a>
        <a class="rightButton" href="../html/cadProdutosEdit.php" style="text-decoration: none;">Editar</a>
      </div>
      <div class="divItem">
        <label class="labelDivItem">Cabo HDMI</label>
        <a class="rightButton" href="" style="text-decoration: none;">Excluir</a>
        <a class="rightButton" href="../html/cadProdutosEdit.php" style="text-decoration: none;">Editar</a>
      </div>
    </div>

    <div style="height: 300px;"></div>

  </div>

</body>