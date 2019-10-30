
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
            <h1>Vendedor</h1>
            <p>Cadastrar um vendedor</p>
        </div>
    </header>
    <br>
    <div id="content" style="margin-left:40px; margin-right: 40px;">

        <div class="inner">
            <form class="inner" method="get" action="../html/cadProdutosList.html"> <button>Produtos</button> </form>
        </div>
        <form class="formCenter">
            <div class="divRow">
                <label class="formLabel">
                    Nome/Razão Social
                </label>
                <input class="formTextInput" type="text" placeholder="Ex: João da Silva">
            </div>
            <div class="divRow">
                <label class="formLabel">
                    CPF/CNPJ
                </label>
                <input class="formTextInput" type="text" placeholder="Ex: 000.000.000-00">
            </div>

            <div class="divRow">
                <label class="formLabel">
                    Área dos Produtos
                </label>
                <select class="formSelect">
                    <option value="eletronicos">Eletrônicos</option>
                    <option value="eletrodomesticos">Eletrodomésticos</option>
                    <option value="acessorios">Acessórios</option>
                    <option value="vestuario">Vestuário</option>
                </select>
            </div>

            <div class="divRow">
                <label class="formLabel">
                    Cep
                </label>
                <input class="formTextInput" type="text" placeholder="Ex: 12345-678">
            </div>
            <div class="divRow">
                <label class="formLabel">
                    Rua
                </label>
                <input class="formTextInput" type="text" placeholder="Ex: Rua João da Silva">
            </div>
            <div class="divRow">
                <label class="formLabel">
                    Número
                </label>
                <input class="formTextInput" type="text" placeholder="Ex: 000">
            </div>
            <div class="divRow">
                <label class="formLabel">
                    Bairro
                </label>
                <input class="formTextInput" type="text" placeholder="Ex: Centro">
            </div>
            <div class="divRow">
                <label class="formLabel">
                    Cidade
                </label>
                <input class="formTextInput" type="text" placeholder="Ex: Porto Alegre">
            </div>
            <div class="divRow">
                <label class="formLabel">
                    Estado
                </label>
                <select class="formSelect">
                    <option value="AC">Acre</option>
                    <option value="AL">Alagoas</option>
                    <option value="AP">Amapá</option>
                    <option value="AM">Amazonas</option>
                    <option value="BA">Bahia</option>
                    <option value="CE">Ceará</option>
                    <option value="DF">Distrito Federal</option>
                    <option value="ES">Espírito Santo</option>
                    <option value="GO">Goiás</option>
                    <option value="MA">Maranhão</option>
                    <option value="MT">Mato Grosso</option>
                    <option value="MS">Mato Grosso do Sul</option>
                    <option value="MG">Minas Gerais</option>
                    <option value="PA">Pará</option>
                    <option value="PB">Paraíba</option>
                    <option value="PR">Paraná</option>
                    <option value="PE">Pernambuco</option>
                    <option value="PI">Piauí</option>
                    <option value="RJ">Rio de Janeiro</option>
                    <option value="RN">Rio Grande do Norte</option>
                    <option value="RS">Rio Grande do Sul</option>
                    <option value="RO">Rondônia</option>
                    <option value="RR">Roraima</option>
                    <option value="SC">Santa Catarina</option>
                    <option value="SP">São Paulo</option>
                    <option value="SE">Sergipe</option>
                    <option value="TO">Tocantins</option>
                    <option value="EX">Estrangeiro</option>
                </select>
            </div>
            <div class="divRow">
                <label class="formLabel">
                    País
                </label>
                <input class="formTextInput" type="text" placeholder="Ex: Brasil">
            </div>


            <div class="divRow">
                <label class="formLabel">
                    Telefone
                </label>
                <input class="formTextInput" type="text" placeholder="Ex: 54 1234 5678">
            </div>
            <div class="divRow">
                <label class="formLabel">
                    Celular
                </label>
                <input class="formTextInput" type="text" placeholder="Ex: 54 98765 4321">
            </div>
            <div class="divRow">
                <label class="formLabel">
                    E-mail
                </label>
                <input class="formTextInput" type="text" placeholder="Ex: me@freemarket.com">
            </div>
            <br>
            <div class="divRow divSubmitButtons">
                <a href="../html/cadVendedoresList.html" style="text-decoration: none;"><button form="cancel">Voltar</button></a>
                <button form="submit">Salvar</button>
                <button form="delete">Apagar</button>
            </div>
        </form>
    </div>
</body>