<?php require_once("cabecalho.php");
      require_once("banco-produto.php");
      require_once("logica-usuario.php");
      require_once("mostra-alerta.php");

verificaUsuario();
?>
<?php
$produtos = listaProdutos($conexao);
?>
<?php
mostraAlerta("success");
mostraAlerta("danger");
?>
<h1 id=h1formProdutos>Lista de Produtos</h1>
<table class="table  table-responsive"id="tabela">
  <tr>
        <th>Data</th>
        <th>Nome</th>
        <th>Marca</th>
        <th>Custo</th>
        <th>Venda</th>
        <th>Quantidade</th>
        <th>Validade</th>
        <th>lucro</th>
        <th>Descricao</th>
        <th>Categoria</th>
        <th>Alterar</th>
        <th>Remover</th>
    </tr>

<?php
foreach($produtos as $produto) :
?>

    <tr class="linhaTabela">
        <td><?= $produto['data'] ?></td>
        <td><?= $produto['nome'] ?></td>
        <td><?= $produto['marca'] ?></td>
        <td><?= $produto['custo'] ?></td>
        <td><?= $produto['venda'] ?></td>
        <td><?= $produto['quantidade'] ?></td>
        <td><?= $produto['validade'] ?></td>
        <td><?= $produto['lucro'] ?></td>
        <td><?= substr($produto['descricao'],0,20) ?></td>
        <td><?= $produto['categoria_nome'] ?></td>

        <td><a  class="btn btn-primary"href="formulario-altera-produto.php?id=<?=$produto['id']?>">Alterar</a>

        <td>
            <form action="remove-produto.php" method="post">
                <input type="hidden" name="id" value="<?=$produto['id']?>">
                <button class="btn btn-danger">Remover</button>
            </form>
        </td>
    </tr>
<?php
endforeach
?>
</table>
<?php include("rodape.php");?>
