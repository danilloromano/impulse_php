<script type="text/javascript" src"js/index.js"></script>
<?php require_once("cabecalho.php");
      require_once("banco-cliente.php");
      require_once("logica-usuario.php");
      require_once("mostra-alerta.php");

verificaUsuario();
?>
<?php
$clientes = listaClientes($conexao);
?>
<?php
mostraAlerta("success");
mostraAlerta("danger");
?>
<h1 id=h1formProdutos>Lista de Clientes</h1>
<table class="table  table-responsive"id="tabela">
  <tr>
        <th>Nome</th>
        <th>Endereco</th>
        <th>Email</th>
        <th>RG</th>
        <th>CPF</th>
        <th>Contato</th>
        <th>Nascimento</th>
        <th>Observacao</th>
        <th>Categoria</th>
        <th>Alterar</th>
        <th>Remover</th>
    </tr>

<?php
foreach($clientes as $cliente) :
?>

    <tr class="linhaTabela">
        <td><?= $cliente['nome'] ?></td>
        <td><?= $cliente['endereco'] ?></td>
        <td><?= $cliente['email'] ?></td>
        <td><?= $cliente['rg'] ?></td>
        <td><?= $cliente['cpf'] ?></td>
        <td><?= $cliente['contato'] ?></td>
        <td><?= $cliente['nascimento'] ?></td>
        <td><?= substr($cliente['observacao'],0,20) ?></td>
        <td><?= $cliente['categoriasCliente_nome'] ?></td>

        <td><a  class="btn btn-primary"href="formulario-altera-cliente.php?id=<?=$cliente['id']?>">Alterar</a>

        <td>
            <form action="remove-cliente.php" method="post">
                <input class="input"type="hidden" name="id" value="<?=$cliente['id']?>">
                <button class="btn btn-danger" id="btnRemover">Remover</button>
            </form>
        </td>
    </tr>
<?php
endforeach
?>
</table>

<?php require_once("rodape.php");?>
