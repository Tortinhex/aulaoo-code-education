<div class="container">
    <?php
    include "layoutHead.php";

    $tipo = isset($_GET["tipo"]) ? $_GET["tipo"] : FALSE;
    $id = isset($_GET["id"]) ? $_GET["id"] : FALSE;


    if (is_string($tipo) and is_numeric($id)) {
        $aux = ("fisica" == $tipo) ? new LoadPessoaFisica() : new LoadPessoaJuridica();
        $tipo = ucfirst($tipo);
        $cliente = $aux->findOneBy("id", $id);
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
                    <small>Cliente&nbsp;</small><?php echo $cliente->getNome() ?>
                </h1>
            </div>
            <div class="row">
                <div class="col-md-2"><p>Importância:</p></div>
                <div class="col-md-10"><p class="lead"><?php echo $cliente->getClassificacao() ?>&nbsp;Estrelas</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-2"><p>Tipo:</p></div>
                <div class="col-md-10"><p class="lead">Pessoa <?php echo $tipo ?></p></div>
            </div>

            <div class="row">
                <div class="col-md-2"><p><?php echo ("Juridica" == $tipo) ? "CNPJ" : "CPF" ?>:</p></div>
                <div class="col-md-10">
                    <p class="lead">
                        <?php echo ("Juridica" == $tipo) ? $cliente->getCnpj() : $cliente->getCpf() ?>
                    </p>
                </div>
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
            <?php
            if ($cliente->getEndereco()): ?>
                <div class="row">
                    <div class="col-md-2"><p>Endereco:</p></div>
                    <div class="col-md-10"><p class="lead"><?php echo $cliente->getEndereco() ?></p></div>
                </div>

            <?php endif; ?>
            <?php if ($cliente->getEnderecoCobranca()): ?>
                <div class="row">
                    <div class="col-md-2"><p>Endereco de Cobrança:</p></div>
                    <div class="col-md-10"><p class="lead"><?php echo $cliente->getEnderecoCobranca() ?></p></div>
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>

<?php include "layoutFoot.php" ?>