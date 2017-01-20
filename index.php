


<?php require_once('cabecalho.php');
require_once("logica-usuario.php");
?>

<?php
mostraAlerta("success");
mostraAlerta("danger");
?>

 <?php
if(usuarioEstaLogado()) {
?>
<p id ="msgLogin"class="text-success loginMessage" id="mensagem-login">Você está logado como <?= usuarioLogado() ?></p>
<?php
}
?>

<div>
<img id="urso" class="urso-login" src="imagens/logo-impulse-completo.png"/>
</div>
<div>
<img class="ursoPrincipal" src="imagens/urso-impulse-quadrado.png"/>
</div>

<div class="login">
            <div class="well" id="loginFormulario">
                <form id="loginForm" method="POST" action="login.php">
                    <div class="form-group">
                       <label for="email" class="control-label">Email</label>
                       <input type="email" class="form-control" name="email" required="" placeholder="insira seu email">
                    </div>
                        <div class="form-group">
                            <label for="password" class="control-label">Password</label>
                            <input type="password" class="form-control" name="password" placeholder="insira sua senha" required="">
                        </div>
                     <div class="form-group">
                          <button type="submit" class="btn btn-primary" id="btnLogin">Login</button>                        </div>
                     </div>
        </div>

</div>
<script>
<?php
if(usuarioEstaLogado()){?>
  $(".login").hide();
  $(".ursoPrincipal").hide()
          $("#urso").fadeIn( 800 );

    <?php  }?>
</script>
<?php include('rodape.php');?>
