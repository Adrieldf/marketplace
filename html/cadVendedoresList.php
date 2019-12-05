
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="../css/main.css" />
</head>

<body>
  <script type="text/javascript" src="../js/controller.js"></script>  
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"
		integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
 		crossorigin="anonymous">	</script>
  <?PHP 
  include_once("navbar.html");
  ?>
  <header id="header" class="alt">
    <div class="inner">
      <h1>Vendedores</h1>
    </div>
  </header>
  <br>
  <div id="content" style="margin-left:40px; margin-right: 40px;">

    <form class="inner" method="get" action="../html/cadVendedoresEdit.php"> <button>Cadastrar Novo</button> </form>
    <br>
    <div id="vendedorList" class="divList">
    </div>

    <div style="height: 300px;"></div>
  </div>
  <script>
    function buscar()
    {
        //O método $.ajax(); é o responsável pela requisição
        $.ajax
                ({
                    //Configurações
                    type: 'POST',//Método que está sendo utilizado.
                    dataType: 'html',//É o tipo de dado que a página vai retornar.
                    url: 'buscaVendedores.php',//Indica a página que está sendo solicitada.
                    //função que vai ser executada assim que a requisição for enviada
                    beforeSend: function () {
                        $("#vendedorList").html("Carregando...");
                    },
                    data: { },//Dados para consulta
                    //função que será executada quando a solicitação for finalizada.
                    success: function (msg)
                    {
                        $("#vendedorList").html(msg);
                    }
                });
    }
    
    $(document).ready(function () {
		buscar();
	});
</script>
</body>