<?php
include "layoutHead.php";
$cliente = $loadCliente->findOneBy("id", $_GET["id"]);
?>
    <div class="container">
        <div class="panel panel-primary">
            <div class="panel-heading">
                Detalhes do Cliente
            </div>
            <div class="panel-body">
                <div class="page-header">
                    <a class="btn btn-primary pull-right" href="index.php">Voltar</a>
                    <h1><small>Cliente </small><?php echo $cliente->getNome() ?></h1>
                </div>
                <div class="row">
                    <div class="col-md-2"><p>CPF:</p></div>
                    <div class="col-md-10"><p class="lead"><?php echo $cliente->getCpf() ?></p></div>
                </div>
                <div class="row">
                    <div class="col-md-2"><p>RG:</p></div>
                    <div class="col-md-10"><p class="lead"><?php echo $cliente->getRg() ?></p></div>
                </div>
                <div class="row">
                    <div class="col-md-2"><p>Sexo:</p></div>
                    <div class="col-md-10"><p class="lead"><?php echo $cliente->getSexo() ?></p></div>
                </div>
                <div class="row">
                    <div class="col-md-2"><p>Data de Cadastro:</p></div>
                    <div class="col-md-10"><p class="lead"><?php echo $cliente->getDtCadastro() ?></p></div>
                </div>
                <div class="row">
                    <div class="col-md-2"><p>Status:</p></div>
                    <div class="col-md-10"><p class="lead"><?php echo $cliente->getStatus() ?></p></div>
                </div>
            </div>
        </div>
    </div>

<?php include "layoutFoot.php" ?>