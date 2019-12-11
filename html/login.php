
<head>
        <title>FreeMarket</title>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="../css/styleslogin.css" />
        <link rel="stylesheet" href="../css/main.css" />

</head>

<body>
  <?PHP 
  include_once("navbar.html");
  ?>
        <div class="container" >
                <a class="links" id="paracadastro"></a>
                <a class="links" id="paralogin"></a>
                
                <div class="content">      
                  <div id="login">
                    <form action="executalogin.php" method="post"> 
                      <h1>Login</h1> 
                      <p> 
                        <label for="email_login">Seu e-mail</label>
                        <input id="email_login" name="login" required="required" type="text" placeholder="exemplo@exemplo.com"/>
                      </p>
                      
                      <p> 
                        <label for="senha_login">Sua senha</label>
                        <input id="senha_login" name="senha" required="required" type="password" placeholder="1234" /> 
                      </p>
                      
                      <p> 
                        <input type="checkbox" name="manterlogado" id="manterlogado" value="" /> 
                        <label for="manterlogado">Manter-me logado</label>
                      </p>
                      
                      <p> 
                        <input type="submit" value="login"/> 
                      </p>
                      
                      <p class="link">
                        Ainda não tem conta?
                        <a href="#paracadastro">Cadastre-se</a>
                      </p>
                    </form>
                  </div>
                  <div id="cadastro">
                    <form action="cadastrar.php" method="get"> 
                      <h1>Cadastro</h1> 
                      
                      <p> 
                        <label for="nome_cad">Seu nome</label>
                        <input id="nome" name="nome" required="required" type="text" placeholder="Bruno Sottoriva" />
                      </p>
                                            
                      <p> 
                        <label for="login_cad">Seu login</label>
                        <input id="txtlogin" name="login" required="required" type="text" placeholder="Bruno" />
                      </p>

                      <p> 
                        <label for="email_cad">Seu e-mail</label>
                        <input id="email" name="email" required="required" type="email" placeholder="Exemplo@exemplo.com"/> 
                      </p>
                      
                      <p> 
                        <label for="senha_cad">Sua senha</label>
                        <input id="senha" name="senha" required="required" type="password" placeholder="1234"/>
                      </p>
                      
                      <p> 
                        <input type="submit"  value="Cadastrar"/> 
                      </p>
                      
                      <p class="link">  
                        Já tem conta?
                        <a href="#paralogin"> Ir para Login </a>
                      </p>
                    </form>
                  </div>
                </div>
              </div>



</body>