<?php require_once("cabecalho.php");
require_once("banco-categorias-cliente.php");
require_once("logica-usuario.php");

verificaUsuario();
$categoriasClientes = listaCategoriasCliente($conexao);
?>

<h1 id="h2formProdutos">Cadastro de Clientes</h1>
<div class="modal-body" id="formModal">
  <div class="well" id="clienteFormulario">
<form class="form-horizontal"id="formularioCadastro" action="cliente.php" method="post">

  <div class="form-group">
    <label class="control-label col-sm-2" for="nome">Nome :</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome do Cliente">
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-sm-2" for="email">Email :</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="email" name="email" placeholder="Email do Cliente">
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-sm-2" for="marca">Endereco :</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="endereco" name="endereco" placeholder="Insira o endereco">
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-sm-2" for="rg">RG :</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="rg" name="rg" placeholder="Insira o RG">
    </div>
  </div>

  <div class="form-group">
    <label id="label-cpf"class="control-label col-sm-2" for="venda">CPF :</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="cpf" name="cpf" placeholder="Insira o CPF">
    </div>
  </div>

  <div class="form-group">
    <label id="label-contato"class="control-label col-sm-2" for="contato">Contato :</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="contato" name="contato" placeholder="Telefone">
    </div>
  </div>

  <div class="form-group">
  <div class=" col-sm-offset-2 col-sm-3">
  <label for="select" id="labelCategoriaCliente"> Categoria :</label>
  <select class="form-control" name="categoriaCliente_id" id="selectCliente">
  <?php foreach($categoriasClientes as $categoriaCliente) : ?>
  <option value="<?=$categoriaCliente['id']?>"><?=$categoriaCliente['nome']?></option>
      <?php endforeach ?>
  </select>
  </div>
    </div>

    <div class="form-group">
  <label for="observacao" id="labelobservacao">Observacao :</label>
  <div class="col-sm-offset-2 col-sm-10">
  <textarea class="form-control" type="text" rows="3" id="observacao" name="observacao" placeholder="Descreva o produto"></textarea>
</div>
</div>

<div class="form-group">
  <label id="label-nascimento"class="control-label col-sm-2" for="nascimento">Nascimento:</label>
  <div class="col-sm-10">
    <input type="text" class="form-control" id="nascimento" name="nascimento" placeholder="data de nascimento">
  </div>
</div>

<div class="form-group">
      <button type="submit" class="btn btn-primary" id="btnCadastroCliente">Cadastrar</button>
</div>



</form>
  </div>
  </div>


<?php include("rodape.php");?>
<script>
$("#contato").mask("(99) 99999-9999");
$("#rg").mask("99.999.999-*");
$("#cpf").mask("999.999.999-99");
$("#quantidade").mask("99/99/9999");
</script>
