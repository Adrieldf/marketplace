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
		<article class="item">
							<header>
								<a href="../html/detalheProdutos.php"><img src="https://images-submarino.b2w.io/produtos/01/00/sku/7929/7/7929783_1GG.jpg" /></a>
                                <h3>Suporte para TV </h3>
							</header>
							<p>Suporte para TV Fixo de Parede Genius de 14 à 84" - ELG Suportes</p>
							<ul class="actions">
                                <h2>R$14,89</h2>
							</ul>
		</article>
		<article class="item">
							<header>
								<a href="#"><img src="https://images-submarino.b2w.io/produtos/01/00/item/123187/4/123187493_1GG.jpg" alt="" /></a>
								<h3>Antena Digital Aquário Indoor DTV-1000</h3>
							</header>
							<p>A antena de Tv Interna da Aquário DTV ¿ 100 apresenta excelente qualidade, funcionalidade..</p>
							<ul class="actions">
								<h2>R$21,00</h2>
							</ul>
		</article>
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
    
    
    $('#buscar').click(function () {
        buscar($("#palavra").val())
    });
</script>
	</body>
</html>
