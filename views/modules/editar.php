<?php

    if(!$_SESSION["inicio"]){
        header("location:index.php?action=login");
        
        exit();
    }

    $controller = new MvcController();
    $resultado = $controller->editarUsuarioController();
?>


<section class="section">
    <div class="container">
        <form id="formedit" method="post" action="">
            <div class="columns is-vcentered">
                <div class="column is-4 is-offset-4">
                    <h1 class="title">Editar usuario</h1>
                    <div class="box">
                        <label class="label" for="usuarioEdit">Usuario</label>
                        <p class="control">
                            <input id="usuarioEdit" class="input" name="usuarioEdit" type="text" maxlength="15" value="<?php echo $resultado["usuario"]?>" required="">
                        </p>
                        <label class="label" for="emailEdit">Email</label>
                        <p class="control">
                            <input id="emailEdit" class="input" name="emailEdit" type="email" value="<?php echo $resultado["email"]?>" required="">
                        </p>
                        <hr>
                        <label class="label" for="passwordEdit">Password</label>
                        <p class="control">
                            <input id="passwordEdit" class="input" name="passwordEdit" minlength="8" type="password" value="<?php echo $resultado["password"]?>" required="">
                        </p>
                        <hr>
                        <p class="control">
                            <button type="submit" value="guardar" class="button is-primary">Guardar</button>
                            <button class="button is-default">Cancelar</button>
                        </p>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>

<script>
    $(document).ready(function() {
        $("#formedit").validate();
    });
</script>


<?php
    $controller->actualizaUsuarioController($_GET["id"]);
?>