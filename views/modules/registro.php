<section class="hero is-fullheight is-bold">
    <div class="hero-body">
        <div class="container">
            <form id="formulario" method="post" action="">
                <div class="columns is-vcentered">
                    <div class="column is-4 is-offset-4">
                        <h1 class="title">Registrar cuenta</h1>
                        <div class="box">
                            <label class="label" for="usuarioReg">Usuario</label>
                            <p class="control">
                                <input id="usuarioReg" class="input" name="usuarioReg" type="text" maxlength="15" placeholder="Usuario" required="">
                            </p>
                            <label class="label" for="emailReg">Email</label>
                            <p class="control">
                                <input id="emailReg" class="input" name="emailReg" type="email" placeholder="ejemplo@mail.com" required="">
                            </p>
                            <hr>
                            <label class="label" for="passwordReg">Password</label>
                            <p class="control">
                                <input id="passwordReg" class="input" name="passwordReg" minlength="8" type="password" placeholder="∙∙∙∙∙∙" required="">
                            </p>
                            <label class="label">Confirmar Password</label>
                            <p class="control">
                                <input id="passwordConfReg" class="input" type="password" type="passwordConfReg" placeholder="∙∙∙∙∙∙" required="">
                            </p>
                            <hr>
                            <p class="control">
                                <button type="submit" value="enviar" class="button is-primary">Registrar</button>
                                <button class="button is-default">Cancelar</button>
                            </p>
                        </div>
                        <p class="has-text-centered">
                            <a href="login.html">Entrar</a> |
                            <a href="help.html">¿Necesita ayuda?</a>
                        </p>
                    </div>
                </div>
            </form>
            <div class="columns">
                <div class="column is-half is-offset-one-quarter">
                   <?php
                    $controller = new MvcController();
                    $respuesta = $controller->validaRegistroController();
                    if($respuesta['valida'] === true)
                    {
                        $controller->registroUsuarioController();
                        
                        if(isset($_GET["action"]))
                        {
                            echo ($_GET["action"] == "exito"
                                  ? "registro guardado con exito"
                                  : "error al intentar guardar el registro" );
                        }
                    }
                    else
                    {
                        echo '<p class="help is-danger">'.$respuesta['msjUsuario'].'</p>'
                            .'<p class="help is-danger">'.$respuesta['msjEmail'].'</p>'
                            .'<p class="help is-danger">'.$respuesta['msjPassword'].'</p>';
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    $(document).ready(function() {
        $("#formulario").validate();
    });
</script>
