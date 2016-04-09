<div class="container">
    <?php
    include "layoutHead.php";

    $idCliente = $_GET["id"];
    $cliente = null;
    if ($idCliente and is_numeric($idCliente)) {
        $cliente = $loadCliente->findOneBy("id", $idCliente);
    }


    if (!$cliente):
        ?>
        <div class="alert alert-danger" role="alert">
            Cliente não encontrado!!
            <a class="btn btn-danger pull-right" href="index.php">Voltar</a>
        </div>

        <?php
        include "layoutFoot.php";
        die;
    endif;

    ?>
    <div class="panel panel-primary">
        <div class="panel-heading">
            Detalhes do Cliente
        </div>
        <div class="panel-body">
            <div class="page-header">
                <a class="btn btn-primary pull-right" href="index.php">Voltar</a>
                <h1>
                    <small>Cliente</small><?php echo $cliente->getNome() ?></h1>
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