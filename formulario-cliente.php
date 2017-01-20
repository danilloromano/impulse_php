<?php require_once("cabecalho.php");
require_once("banco-categorias-cliente.php");
require_once("logica-usuario.php");

verificaUsuario();
$roles = listaCategoriasCliente($conexao);
?>

<h1 id="h2formProdutos">Cadastro de Clientes</h1>
<div class="new_form">

  <form class="form-horizontal" action="cliente.php" method="post">
    <div class="new_form-group_row">
      <label class="new_form-label" for="nome">Nome :</label>
      <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome do Cliente">
    </div>

    <div class="new_form-group_row">
      <label class="new_form-label" for="email">Email :</label>
        <input type="email" class="form-control" id="email" name="email" placeholder="Email do Cliente">
    </div>

    <div class="new_form-group_row">
      <label class="new_form-label" for="marca">Endereco :</label>
      <input type="text" class="form-control" id="endereco" name="address" placeholder="Insira o endereco">
    </div>

    <div class="new_form-group --flex">
      <div class="new_form-group_row --half">
        <label class="new_form-label" for="number">Numero :</label>
        <input type="text" class="form-control" id="rg" name="number" placeholder="Numero">
      </div>

      <div class="new_form-group_row --half">
        <label id="label-cpf" class="new_form-label" for="addition">Complemento :</label>
        <input type="text" class="form-control" id="cpf" name="addition" placeholder="Complemento">
      </div>
    </div>

    <div class="new_form-group --flex">
      <div class="new_form-group_row --half">
        <label class="new_form-label" for="neighborhood">Bairro :</label>
        <input type="text" class="form-control"  name="neighborhood" placeholder="Bairro">
      </div>

      <div class="new_form-group_row --half">
        <label id="label-cpf" class="new_form-label" for="cep">CEP :</label>
        <input type="text" class="form-control" id="cep" name="cep" placeholder="CEP">
      </div>
    </div>

    <div class="new_form-group --flex">
      <div class="new_form-group_row --half">
        <label class="new_form-label" for="rg">RG :</label>
        <input type="text" class="form-control" id="rg" name="rg" placeholder="Insira o RG">
      </div>

      <div class="new_form-group_row --half">
        <label id="label-cpf" class="new_form-label" for="venda">CPF :</label>
        <input type="text" class="form-control" id="cpf" name="cpf" placeholder="Insira o CPF">
      </div>
    </div>

  <div class="new_form-group --flex">
    <div class="new_form-group_row --half" >
      <label id="label-phone" class="new_form-label" for="phone">Telefone :</label>
      <input type="text" class="form-control" id="phone" name="phone" placeholder="Telefone">
    </div>

    <div class="new_form-group_row --half">
      <label for="select" class="new_form-label"> Regra :</label>
      <select class="form-control" name="user_role" id="selectCliente">
        <?php foreach($roles as $role) : ?>
          <option value="<?=$role['id']?>"><?=$role['name']?></option>
        <?php endforeach ?>
      </select>
    </div>
  </div>

  <div class="new_form-group --flex">
    <div class="new_form-group_row --half">
      <label id="label-birth" class="new_form-label" for="birth">Nascimento:</label>
      <input type="text" class="form-control" id="birth" name="birth" placeholder="Data de nascimento">
    </div>

    <div class="new_form-group_row">
      <button type="submit" class="btnPadrao">Cadastrar</button>
    </div>
  </form>
</div>
</div>

<?php include("rodape.php");?>
<script>
$("#phone").mask("(99) 99999-9999");
$("#rg").mask("99.999.999-*");
$("#cpf").mask("999.999.999-99");
$("#birth").mask("99/99/9999");
$("#cep").mask("99999-999");
</script>
