<link rel="stylesheet" href="meucss/formAlterar.css">
<?php
require_once("cabecalho.php");
require_once("banco-categoria.php");
require_once("banco-produto.php");

$id = $_GET['id'];
$produto = buscaProduto($conexao, $id);
$categorias = listaCategoria($conexao);
?>

<h1 id="h2formProdutos">Alterar Produtos</h1>
<div class="modal-body" id="formModal">
  <div class="well" id="produtoAlteraFormulario">
<form class="form-horizontal"id="formularioCadastro" action="altera-produto.php" method="post">
<input type="hidden" id="imputEscondido" name="id" value="<?=$produto['id']?>">

  <div class="form-group">
    <label class="control-label col-sm-2" for="nome">Nome :</label>
    <div class="col-sm-10">
      <input type="text" value="<?=$produto['nome']?>" class="form-control"  name="nome" placeholder="Nome do produto">
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-sm-2" for="marca">Marca :</label>
    <div class="col-sm-10">
      <input type="text" id="marca" value="<?=$produto['marca']?>" class="form-control" name="marca" placeholder="Marca do produto">
    </div>
  </div>

  <div class="form-group">
    <label id="label-data"class="control-label col-sm-2" for="data">Data :</label>
    <div class="col-sm-10">
      <input type="text" value="<?=$produto['data']?>" class="form-control" id="data" name="data" placeholder="Data">
    </div>
  </div>

  <div class="form-group">
    <label id="label-custo" class="control-label col-sm-2" for="custo">Custo :</label>
    <div class="col-sm-10">
      <input type="number" class="form-control" id="custo" value="<?=$produto['custo']?>" name="custo" placeholder="Custo do produto">
    </div>
  </div>

  <div class="form-group">
    <label id="label-venda"class="control-label col-sm-2" for="venda">Venda :</label>
    <div class="col-sm-10">
      <input type="number" value="<?=$produto['venda']?>" class="form-control" id="venda" name="venda" placeholder="valor da venda">
    </div>
  </div>

  <div class="form-group">
    <label id="validade-label"class="control-label col-sm-2" for="validade">Validade :</label>
    <div class="col-sm-10">
      <input type="text" value="<?=$produto['validade']?>" class="form-control" id="validade" name="validade" placeholder="validade">
    </div>
  </div>

  <div class="form-group">
  <div class=" col-sm-offset-2 col-sm-3">
  <label for="select" id="labelCategoria"> Categoria :</label>
  <select class="form-control" name="categoria_id" id="selectProduto">
  <?php foreach($categorias as $categoria) :
    $essaEhACategoria = $produto['categoria_id'] == $categoria['id'];
    $selecao = $essaEhACategoria ? "selected='selected'" : "";
  ?>
  <option value="<?=$categoria['id']?>" <?=$selecao?>>
                              <?=$categoria['nome']?>
  </option>
      <?php endforeach ?>
  </select>
  </div>
    </div>

    <div class="form-group">
  <label  for="descricao" id="labelDesc" for="descricao">Descricao :</label>
  <div class="col-sm-offset-2 col-sm-10">
  <textarea  class="form-control" id="descricao" type="text"  rows="3" name="descricao"><?=$produto['descricao']?></textarea>
  </div>
  </div>

    <div class="form-group">
      <label id="label-quantidade"class="control-label col-sm-2" for="quantidade">Quantidade:</label>
      <div class="col-sm-10">
        <input type="number" value="<?=$produto['quantidade']?>" class="form-control" id="quantidade" name="quantidade" placeholder="quantidade">
      </div>
    </div>



<div class="form-group">
      <button type="submit" class="btn btn-primary" id="btnCadastrar">Alterar</button>
</div>


</form>
</div>
</div>

<?php include("rodape.php");?>
<script>
$("#validade").mask("99/99/9999");
$("#data").mask("99/99/9999");
</script>
