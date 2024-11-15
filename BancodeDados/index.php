<?php

include './model/Conexao.php';
include './model/lista.php';
include './model/produto.php';
include './model/usuario.php';
include './control/controller.php';

$c = new Controller();

$c->index();

if($c->cadastroIndex) echo $c->cadastroIndex;
if($c->loginIndex) echo $c->loginIndex;

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
                <hr>
                <h2>
                    <strong> Cadastro de Cliente</strong>
                </h2>
                <hr>
                <p><input type="text" name="nome" placeholder="Digite seu nome" required/></p>

                
                <p><button name="cadastrar" type="submit">Cadastrar</button></p>
             </form>
        </section>
            </div>
        
    </div>
    </body>
</html>