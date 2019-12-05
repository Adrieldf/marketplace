<!DOCTYPE HTML>
<html>
	<head>
		<title>FreeMarketGaleria</title>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="../css/main.css" />
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"
		integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
 		crossorigin="anonymous">	</script>
	</head>
	<body>
	<?PHP include_once("navbar.html"); ?>
	<button id="buscar"  >Buscar</button>
	<section id="listaProdutos" class="main items">
	
		
	</section>
			</div>

<script>
    function buscar(palavra)
    {
        //O método $.ajax(); é o responsável pela requisição
        $.ajax
                ({
                    //Configurações
                    type: 'POST',//Método que está sendo utilizado.
                    dataType: 'html',//É o tipo de dado que a página vai retornar.
                    url: 'buscaProdutos.php',//Indica a página que está sendo solicitada.
                    //função que vai ser executada assim que a requisição for enviada
                    beforeSend: function () {
                        $("#listaProdutos").html("Carregando...");
                    },
                    data: {palavra: palavra},//Dados para consulta
                    //função que será executada quando a solicitação for finalizada.
                    success: function (msg)
                    {
                        $("#listaProdutos").html(msg);
                    }
                });
    }
    
    $(document).ready(function () {
		buscar("");
	});
    $('#buscar').click(function () {
        buscar($("#palavra").val())
    });
</script>
	</body>
</html>
