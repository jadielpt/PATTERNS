<?php
require_once __DIR__ . "/../vendor/autoload.php";

use DP\Form;
use DP\Fields\Input;

$inputNome = new Input();
$inputNome->setId("Nome")->setName("nome")->setClass("form-control")->setPlaceholder("Nome");
$submitButton = new Input("submit");
$submitButton->setValue("Enviar")->setClass("btn btn-primary");

$form = new Form();
$form->addField($inputNome);
$form->addField($submitButton);

?>
<!DOCTYPE html>
<html lang="pt_BR">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Design Patterns</title>

    <!-- Bootstrap -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

  </head>
  <body>
      <div class="container">
          <div class="row">
              <div class="col-lg-12 page-header">
                  <h1>Design Patterns - Formulário Dinâmico</h1>
              </div>
          </div>
          <div class="row">
              <div class="col-md-6">
                  <?php 
                    $form->render();
                  ?>
              </div>
          </div>
      </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

  </body>
</html>

