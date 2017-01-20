<link rel="stylesheet" href="meucss/formAlterar.css">
<?php
require_once("cabecalho.php");
require_once("banco-categorias-cliente.php");
require_once("banco-cliente.php");

$id = $_GET['id'];
$cliente = buscaCliente($conexao, $id);
$categoriasClientes = listaCategoriasCliente($conexao);
?>

<h1 id="h2formProdutos">Alterar Clientes</h1>
<div class="modal-body" id="formModal">
  <div class="well" id="clienteFormulario">
<form class="form-horizontal"id="formularioCadastro" action="altera-cliente.php" method="post">
<input type="hidden" id="imputEscondido" name="id" value="<?=$cliente['id']?>">

  <div class="form-group">
    <label class="control-label col-sm-2" for="nome">Nome :</label>
    <div class="col-sm-10">
      <input type="text" value="<?=$cliente['nome']?>" class="form-control"  name="nome" placeholder="Nome do produto">
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-sm-2" for="email">Email :</label>
    <div class="col-sm-10">
      <input type="email" value="<?=$cliente['email']?>" class="form-control" name="email" placeholder="Email">
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-sm-2" for="endereco">Endereco :</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="endereco" value="<?=$cliente['endereco']?>" name="endereco" placeholder="Endereco">
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-sm-2" for="rg">RG :</label>
    <div class="col-sm-10">
      <input type="text" value="<?=$cliente['rg']?>" class="form-control" id="rg" name="rg" placeholder="RG">
    </div>
  </div>

  <div class="form-group">
    <label id="label-cpf"class="control-label col-sm-2" for="cpf">CPF :</label>
    <div class="col-sm-10">
      <input type="text" value="<?=$cliente['cpf']?>" class="form-control" id="cpf" name="cpf" placeholder="CPF">
    </div>
  </div>

  <div class="form-group">
    <label id="label-phone"class="control-label col-sm-2" for="phone">phone:</label>
    <div class="col-sm-10">
      <input type="text" value="<?=$cliente['phone']?>" class="form-control" id="phone" name="phone" placeholder="phone">
    </div>
  </div>

  <div class="form-group">
  <div class=" col-sm-offset-2 col-sm-3">
  <label for="select" id="labelCategoriaCliente"> Categoria :</label>
  <select class="form-control" name="user_role" id="selectCliente">
  <?php foreach($categoriasClientes as $categoriaCliente) :
    $essaEhACategoria = $cliente['user_role'] == $categoriaCliente['id'];
    $selecao = $essaEhACategoria ? "selected='selected'" : "";
  ?>
  <option value="<?=$categoriaCliente['id']?>" <?=$selecao?>>
                              <?=$categoriaCliente['nome']?>
  </option>
      <?php endforeach ?>
  </select>
  </div>
    </div>

    <div class="form-group">
  <label  for="descricao" id="labelobservacao" for="observacao">Observacao :</label>
  <div class="col-sm-offset-2 col-sm-10">
  <textarea  class="form-control" id="observacao" type="text"  rows="3" name="observacao"><?=$cliente['observacao']?></textarea>
  </div>
  </div>

    <div class="form-group">
      <label id="label-birth"class="control-label col-sm-2" for="birth">birth:</label>
      <div class="col-sm-10">
        <input type="text" value="<?=$cliente['birth']?>" class="form-control" id="birth" name="birth" placeholder="quantidade">
      </div>
    </div>



<div class="form-group">
      <button type="submit" class="btn btn-primary" id="btnCadastroCliente">Alterar</button>
</div>


</form>
</div>
</div>

<?php include("rodape.php");?>
<script>
$("#phone").mask("(99) 99999-9999");
$("#rg").mask("99.999.999-*");
$("#cpf").mask("999.999.999-99");
$("#quantidade").mask("99/99/9999");
</script>
