<div class="login-wrapper columns">
    <div class="column is-half is-offset-one-quarter hero-banner">
        <section class="hero is-fullheight">
            <div class="hero-heading">
                <div class="section has-text-centered">
                    <img src="https://www.graphicdesignbylisa.com/wp-content/uploads/generic-logo.jpg" alt="Bulma logo" width="150px">
                </div>
            </div>
            <div class="hero-body">
                <div class="container">
                   <form method="post" action="">
                        <div class="columns">
                            <div class="column is-8 is-offset-2">
                                <h1 class="avatar has-text-centered section"></h1>
                                <div class="login-form">
                                    <div class="field">
                                        <p class="control has-icon has-icon-right">
                                            <input class="input user-input is-medium" name="usuarioIn" type="text" placeholder="usuario">
                                            <span class="icon user">
                                                <i class="user"></i>
                                            </span>
                                        </p>
                                    </div>
                                    <p class="control has-icon has-icon-right">
                                        <input class="input password-input is-medium" name="passwordIn" type="password" placeholder="∙∙∙∙∙∙">
                                        <span class="icon user">
                                          <i class="user"></i>
                                        </span>
                                    </p>
                                    <p class="control login">
                                        <button class="button is-success is-outlined is-large is-fullwidth" type="submit" value="enviar">Entrar</button>
                                    </p>
                                </div>
                                <div class="section forgot-password">
                                    <p class="has-text-centered">
                                        <a href="#">¿Olvidó su contraseña?</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </form>
                    <div class="columns">
                        <div class="column is-half is-offset-one-quarter">
                           <?php
                            $controller = new MvcController();
                            $controller-> ingresoUsuarioController();

                            if(isset($_GET["action"]))
                            {
                                echo $_GET["action"];
                                
                                if($_GET["action"] == "fallo")
                                {
                                    echo '<p class="notification is-danger">usuario no existe, favor de revisar<p>';
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
