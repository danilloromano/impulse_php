
<?php require_once("cabecalho.php");
      require_once("banco-cliente.php");
      require_once("logica-usuario.php");
      require_once("mostra-alerta.php");

verificaUsuario();
?>
<?php
$users = listaUsers($conexao);
?>
<?php
mostraAlerta("success");
mostraAlerta("danger");
?>
<h1 id=h1formProdutos>Lista de Clientes</h1>
<table class="table  table-responsive"id="tabela">
  <thead>
    <tr>
        <th>Nome</th>
        <th>Email</th>
        <th>RG</th>
        <th>CPF</th>
        <th>phone</th>
        <th>birth</th>
        <th>Regra</th>
        <th>Alterar</th>
        <th>Remover</th>
    </tr>
</thead>

<tbody class="linhaTabela">

<?php
foreach($users as $user) :
?>

    <tr>
        <td><?= $user['name'] ?></td>
        <td><?= $user['email'] ?></td>
        <td><?= $user['rg'] ?></td>
        <td><?= $user['cpf'] ?></td>
        <td><?= $user['phone'] ?></td>
        <td><?= $user['birth'] ?></td>
        <td><?= $user['roles'] ?></td>

        <td><a  class="btn btn-primary"href="formulario-altera-cliente.php?id=<?=$user['id']?>">Alterar</a>

        <td>
            <form action="remove-cliente.php" method="post">
                <input class="input"type="hidden" name="id" value="<?=$user['id']?>">
                <button class="btn btn-danger" id="btnRemover">Remover</button>
            </form>
        </td>
    </tr>
<?php
endforeach
?>
  </tbody>
</table>

<?php require_once("rodape.php");?>
