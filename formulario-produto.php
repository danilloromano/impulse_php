<?php require_once("cabecalho.php");
require_once("banco-categoria.php");
require_once("logica-usuario.php");

verificaUsuario();
$categorias = listaCategoria($conexao);
?>

<h1 id="h2formProdutos">Cadastro de Produtos</h1>
<div class="modal-body" id="formModal">
  <div class="well" id="produtoFormulario">
<form class="form-horizontal"id="formularioCadastro" action="produto.php" method="post">

  <div class="form-group">
    <label class="control-label col-sm-2" for="nome">Nome :</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="nome" name="nome" placeholder="Insira o nome do produto">
    </div>
  </div>



  <div class="form-group">
    <label class="control-label col-sm-2" for="marca">Marca :</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="marca" name="marca" placeholder="Insira a marca do produto">
    </div>
  </div>

  <div class="form-group">
    <label id="label-data" class="control-label col-sm-2" for="data">Data :</label>
    <div class="col-sm-10">
      <input  type="text" class="form-control" id="data" name="data" placeholder="Data do cadastro">
    </div>
  </div>


  <div class="form-group">
    <label id="label-custo" class="control-label col-sm-2" for="custo">Custo :</label>
    <div class="col-sm-10">
      <input type="number" step="any" class="form-control" id="custo" name="custo" placeholder="valor da compra">
    </div>
  </div>

  <div class="form-group">
    <label id="label-venda"class="control-label col-sm-2" for="venda">Venda :</label>
    <div class="col-sm-10">
      <input type="number" class="form-control" id="venda" name="venda" placeholder="valor da venda">
    </div>
  </div>

  <div class="form-group">
    <label id="validade-label"class="control-label col-sm-2" for="validade">Validade :</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="validade" name="validade" placeholder="validade">
    </div>
  </div>

  <div class="form-group">
  <div class=" col-sm-offset-2 col-sm-3">
  <label for="select" id="labelCategoria"> Categoria :</label>
  <select class="form-control"name="categoria_id" id="selectProduto">
  <?php foreach($categorias as $categoria) : ?>
  <option value="<?=$categoria['id']?>"><?=$categoria['nome']?></option>
      <?php endforeach ?>
  </select>
  </div>
    </div>

    <div class="form-group">
  <label for="descricao" id="labelDesc">Descricao :</label>
  <div class="col-sm-offset-2 col-sm-10">
  <textarea class="form-control" type="text" rows="3" id="descricao" name="descricao" placeholder="Descreva o produto"></textarea>
</div>
</div>

<div class="form-group">
  <label id="label-quantidade"class="control-label col-sm-2" for="quantidade">Quantidade:</label>
  <div class="col-sm-10">
    <input type="number" class="form-control" id="quantidade" name="quantidade" placeholder="quantidade">
  </div>
</div>

<div class="form-group">
      <button type="submit" class="btn btn-primary" id="btnCadastrar">Cadastrar</button>
</div>



</form>
  </div>
  </div>
<?php include("rodape.php");?>

<script>
$("#validade").mask("99/99/9999");
$("#data").mask("99/99/9999");
</script>
