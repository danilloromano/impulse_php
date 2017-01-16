<?php
session_start();
function mostraAlerta($tipo) {
     if(isset($_SESSION[$tipo])) {
?>
    <p id="mensageria" class="text-<?= $tipo ?>"><?= $_SESSION[$tipo]?></p>
<?php
        unset($_SESSION[$tipo]);
     }
 }
