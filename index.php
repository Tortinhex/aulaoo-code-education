<?php
include "layoutHead.php";

$listaPessoaFisica = (new LoadPessoaFisica())->listEntities();
$listaPessoaJuridica = (new LoadPessoaJuridica())->listEntities();
$listaClientes = array_merge($listaPessoaFisica, $listaPessoaJuridica);

if (isset($_GET["order"]) and "desc" == $_GET["order"]) {
    krsort($listaClientes);
    $inputChecked = "checked";
}else{
    ksort($listaClientes);
    $inputChecked = "";
}

?>
<div class="container">
    <h1>Lista de Clientes</h1>
    <div class="checkbox">
        <label>
            <input type="checkbox" value="1" <?php echo $inputChecked ?> onclick="send(this)">
            Inverter ordem
        </label>
    </div>
    <br>
    <table class="table table-striped table-bordered table-hover">
        <thead>
        <tr>
            <th>Ordem</th>
            <th>Tipo Pessoa</th>
            <th>Nome</th>
            <th>CPF</th>
            <th>CNPJ</th>
            <th>RG</th>
            <th>sexo</th>
            <th>Data Cadastro</th>
            <th>Status</th>
            <th>Ação</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($listaClientes as $ordem => $cliente): ?>
            <?php
            $tipo = "fisica";
            $cnpj = "";

            if ($cliente instanceof PessoaJuridica) {
                $tipo = "juridica";
                $cnpj = $cliente->getCnpj();
            }
            ?>
            <tr>
                <td><?php echo ++$ordem ?></td>
                <td><?php echo ucfirst($tipo) ?></td>
                <td><?php echo $cliente->getNome() ?></td>
                <td><?php echo $cliente->getCpf() ?></td>
                <td><?php echo $cnpj ?></td>
                <td><?php echo $cliente->getRg() ?></td>
                <td><?php echo $cliente->getSexo() ?></td>
                <td><?php echo $cliente->getDtcadastro() ?></td>
                <td><?php echo $cliente->getStatus() ?></td>
                <th><a href="showuser.php?id=<?php echo $cliente->getId() ?>&tipo=<?php echo $tipo ?>">Visualizar</a></th>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>

<script type="text/javascript">
    function send(item) {
        var param = (item.checked) ? "desc" : "asc";
        document.location.href = "index.php?order=" + param;
    }

</script>

<?php include "layoutFoot.php" ?>

