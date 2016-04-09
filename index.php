<?php
include "layoutHead.php";
$listaClientes = $loadCliente->listEntities();
?>
<div class="container">
    <h1>Lista de Clientes</h1>
    <br>
    <table class="table table-striped table-bordered table-hover">
        <thead>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>CPF</th>
            <th>RG</th>
            <th>sexo</th>
            <th>Data Cadastro</th>
            <th>Status</th>
            <th>Ação</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($listaClientes as $cliente): ?>
            <tr>
                <td><?php echo $cliente->getId() ?></td>
                <td><?php echo $cliente->getNome() ?></td>
                <td><?php echo $cliente->getCpf() ?></td>
                <td><?php echo $cliente->getRg() ?></td>
                <td><?php echo $cliente->getSexo() ?></td>
                <td><?php echo $cliente->getDtcadastro() ?></td>
                <td><?php echo $cliente->getStatus() ?></td>
                <th><a href="showuser.php?id=<?php echo $cliente->getId() ?>">Visualizar</a></th>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>

<?php include "layoutFoot.php" ?>

