<!DOCTYPE HTML>
<html>
	<head>
		<title>FreeMarket</title>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="../css/main.css" />
	</head>
	<body>
	<?PHP 
  include_once("navbar.html");
  ?>

			<header id="header" class="alt">
				<div class="inner">
					<h1>FreeMarket</h1>
					<p>Seu site de compras </p>
				</div>
			</header>
			<div id="divBusca" style="position: absolute;top: 10px; right: 10px; display: flex;border-top: 0; border-right: 0;">
				<img class="buscador" src="https://github.com/Adrieldf/marketplace/blob/master/Imagens/cropped-lupa.png?raw=true" alt="Buscar..."/>
		
				<input type="text" id="txtBusca" placeholder="O que Você esta Procurando?"/>
				<form method="get" action="../html/galeriaProdutos.php"> <button id="btnBusca"  >Buscar</button> </form>
		
		
			  </div>
			<div id="wrapper">

					<section id="intro" class="main">
						<h2>Propósito</h2>
						<p>Nosso propósito é conectar pessoas, negócios, produtos e serviços em uma mesma plataforma digital. Por isso, a FreeMarket quer, cada vez mais, estar sempre próxima dos clientes, oferecendo a melhor experiência de compra e desenvolvendo os melhores talentos.</p>
						<ul class="actions">
							<li><a href="#" class="button big">Ler mais</a></li>
						</ul>
					</section>

					<section class="main items">
						<article class="item">
							<header>
								<a href="#"><img src="https://github.com/Adrieldf/marketplace/blob/master/Imagens/eletronicos.jpg?raw=true" alt="" /></a>
								<h3>Eletrônicos</h3>
							</header>
							<p>Loja de eletrônicos, oferecemos o melhor em qualidade e preço justo confira. Parcelamento Disponível. Envia Para Todo O País. Atendimento Via Telefone. Atendimento Via Email. Atendimento Online.</p>
							<ul class="actions">
								<li><a href="#" class="button">Mais!</a></li>
							</ul>
						</article>
						<article class="item">
							<header>
								<a href="#"><img src="https://github.com/Adrieldf/marketplace/blob/master/Imagens/eletrodomesticos.jpg?raw=true" alt="" /></a>
								<h3>Eletrodomésticos</h3>
							</header>
							<p>Quer ajuda pra deixar a vida mais fácil e as tarefas domésticas muito mais simples? Vem escolher o eletrodoméstico certo pro seu estilo. Montar uma cozinha nova vai ser tranquilo e deixar a lavanderia mais prática também. Se você curte o estilo retrô, ou se não abre mão de uma geladeira premium, aqui é o lugar certo. Pode entrar que a casa é sua!</p>
							<ul class="actions">
								<li><a href="#" class="button">Mais!</a></li>
							</ul>
						</article>
						<article class="item">
							<header>
								<a href="#"><img src="https://github.com/Adrieldf/marketplace/blob/master/Imagens/vestuario.jpg?raw=true" alt="" /></a>
								<h3>Vestuario</h3>
							</header>
							<p>Temos Novidades Esperando por Você em Nosso Site. Acesse Agora e Confira a Nova Coleção. Peças que Irão Surpreender no Seu Look. Venha Já e Garanta as Suas Favoritas. Parcele em Até 12x. Cada Semana uma Coleção. Site Oficial. Modelos: Acessórios, Básicos.</p>
							<ul class="actions">
								<li><a href="#" class="button">Mais!</a></li>
							</ul>
						</article>
						<article class="item">
							<header>
								<a href="#"><img src="https://github.com/Adrieldf/marketplace/blob/master/Imagens/acessorios.jpg?raw=true" alt="" /></a>
								<h3>Acessórios</h3>
							</header>
							<p>Som e Acessórios para Celular no Atacado. Descontos para Grandes Quantidades em Toda Loja. Entrega Rápida para todo Brasil.</p>
							<ul class="actions">
								<li><a href="#" class="button">Mais!</a></li>
							</ul>
						</article>
					</section>

					<section id="cta" class="main special">
						<h2>Administrador</h2>
						<p>Área reservada aos administradores do sistema.</p>
						<ul class="actions">
							<li><a href="#" class="button big">Login</a></li>
						</ul>
					</section>

			</div>
	</body>
</html>
