<?php require_once("cabecalho.php");
require_once("banco-categoria.php");
require_once("logica-usuario.php");

verificaUsuario();
$categorias = listaCategoria($conexao);
?>

<h1 id="h2formProdutos">Cadastro de Produtos</h1>
<div class="new_form">


  <form class="form-horizontal" action="produto.php" method="post">
    <div class="new_form-group_row">
      <label class="new_form-label" for="nome">Nome :</label>
        <input type="text" class="form-control"  name="nome" placeholder="Insira o nome do produto">
    </div>


    <div class="new_form-group --flex">
      <div class="new_form-group_row --half">
        <label class="new_form-label" for="marca">Marca :</label>
          <input type="text" class="form-control" name="marca" placeholder="Insira a marca do produto">
      </div>

      <div class="new_form-group_row --half">
        <label  class="new_form-label" for="data">Data :</label>
          <input  type="text" class="form-control" id="data" name="data" placeholder="Data do cadastro">
      </div>
    </div>

  <div class="new_form-group --flex">
    <div class="new_form-group_row --half">
      <label id="label-custo" class="new_form-label" for="custo">Custo :</label>
        <input type="number" step="any" class="form-control" id="custo" name="custo" placeholder="valor da compra">
    </div>

    <div class="new_form-group_row --half">
      <label id="label-venda"class="new_form-label" for="venda">Venda :</label>
        <input type="number" class="form-control" id="venda" name="venda" placeholder="valor da venda">
    </div>
  </div>

  <div class="new_form-group --flex">
    <div class="new_form-group_row --half">
      <label id="validade-label" class="new_form-label" for="validade">Validade :</label>
        <input type="text" class="form-control" id="validade" name="validade" placeholder="validade">
    </div>

    <div class="new_form-group_row --half">
      <label for="select" class="new_form-label" > Categoria :</label>
      <select class="form-control"name="categoria_id" id="selectProduto">
      <?php foreach($categorias as $categoria) : ?>
      <option value="<?=$categoria['id']?>"><?=$categoria['nome']?></option>
          <?php endforeach ?>
      </select>
    </div>
  </div>

    <div class="new_form-group_row">
      <label for="descricao" class="new_form-label" >Descricao :</label>
      <textarea class="form-control" type="text" rows="3" name="descricao" placeholder="Descreva o produto"></textarea>
    </div>

  <div class="new_form-group --flex">
    <div class="new_form-group_row --half">
      <label id="label-quantidade"class="new_form-label" for="quantidade">Quantidade:</label>
        <input type="number" class="form-control"  name="quantidade" placeholder="quantidade">
    </div>

    <div class="new_form-group_row">
          <button type="submit" class="btnPadrao" >Cadastrar</button>
    </div>
  </div>


</form>
  </div>
  </div>
<?php include("rodape.php");?>

<script>
$("#validade").mask("99/99/9999");
$("#data").mask("99/99/9999");
</script>
