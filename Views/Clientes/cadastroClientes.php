<?php
/* 
4 SEMESTRE - SISTEMAS PARA INTERNET
Author: Vinícius Lessa da Silva / Anderson Nascimento
Since: 2020/06/19
*/
include_once '../../config.php';
$titlePage = "Cadastro de Clientes";
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="<?php echo SITE_URL ?>/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo SITE_URL ?>/css/styles.css">

  <title>
    Tmc.com | <?php echo $titlePage ;?>
  </title>
</head>

<body>
  <!-- menu do site -->
  <?php include SITE_PATH .'/includes/menu.php';?>
  <!--conteudo da pagina -->
    <h2 class="caixa-cadastro font-weight-bold">
      <span>CADASTRO</span>
    </h2>

  <div class="container caixa-formulario efeito rounded d-flex justify-content-center">
    <div class="row">
      <article class="col-12">
        <form class="cadastroForm" action='<?php echo SITE_URL ?>/Controllers/c_cliente.php' method="post">

        <div class="form-group inputGroup">
          <label>Nome</label>
          <input type="text" class="form-control box-search input-adm" name="nome_usuario" aria-describedby="" placeholder="Digite seu nome" required>
        </div>

        <div class="form-group inputGroup">
          <label>E-mail</label>
          <input type="text" class="form-control box-search input-adm" name="email" placeholder="Digite seu e-mail" required>
        </div>

        <div class="form-group inputGroup">
          <label>CPF</label>
          <input type="text" class="form-control box-search input-adm" name="cpf" aria-describedby="" placeholder="Digite seu CPF" required>
        </div>

        <div class="form-group inputGroup">
          <label>Celular</label>
          <input type="text" class="form-control box-search input-adm" name="telefone" placeholder="Digite seu número" required>
        </div>

        <div class="form-group inputGroup">
          <label>Senha</label>
          <input type="password" class="form-control box-search input-adm" name="senha" placeholder="Digite sua senha" required>
        </div>

        <input class="btn btn-dark btn-adm botao-cadastro box-search" type="submit" value="CADASTRAR" name="cadastrar" id="criar">

      </article>
    </div>
  </div>


  <!-- footer site -->
  <?php include SITE_PATH .'/includes/footer.php';?>
</body>

</html>