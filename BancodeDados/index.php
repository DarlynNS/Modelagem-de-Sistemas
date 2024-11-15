<?php

/*include './model/Conexao.php';
include './model/lista.php';
include './model/produto.php';
include './model/usuario.php';
include './control/controller.php';

$c = new Controller();

$c->index();

if($c->cadastroIndex) echo $c->cadastroIndex;
if($c->loginIndex) echo $c->loginIndex;*/

?>

<!doctype html>
<html>
  <head>
    <meta charset="UTF-8">
      <title></title>
  </head>
  <body>
        <section class="col-md-6">
            <form method="POST">
                <h2>
                    <strong> Cadastro de Cliente</strong>
                </h2>
                <hr>
                <p><input type="text" name="nome" placeholder="Digite seu nome" required/></p>

                <h2>
                    <strong> Cadastro de Automovel</strong>
                </h2>
                <hr>
                <p><input type="text" name="modelo" placeholder="Modelo: " required/></p>
                <p><input type="number" name="preco" placeholder="Preço: " required/></p>
                
                <h2>
                    <strong> Cadastro de Locação</strong>
                </h2>
                <hr>
                <p><input type="number" name="area" placeholder="Area: " required/></p>
                <p><input type="text" name="automovel" placeholder="Automovel: " required/></p>
                <p><input type="text" name="concessio" placeholder="Concessionaria: " required/></p>
                <p><input type="number" name="quantidade" placeholder="Quantidade: " required/></p>

                <h2>
                    <strong>Cadastro de Concessionaria</strong>
                </h2>
                <hr>
                <p><input type="text" name="conce" placeholder="Concessionaria: " required/></p>
                <hr>

                <p><button name="cadastrar" type="submit">Cadastrar</button></p>
             </form>
        </section>
            </div>
        
    </div>
    </body>
</html>