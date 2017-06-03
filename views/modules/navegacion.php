<nav class="nav has-shadow" id="top">
    <div class="container">
        <div class="nav-left">
            <a class="nav-item" href="index.php">
                <img src="https://www.graphicdesignbylisa.com/wp-content/uploads/generic-logo.jpg" alt="Menu logo">
            </a>
        </div>
        <span id="nav-toggle" class="nav-toggle">
            <span></span>
            <span></span>
            <span></span>
        </span>
        <div id="nav-menu" class="nav-right nav-menu">
            <a href="index.php?action=principal" class="nav-item is-tab">Principal</a>
            <a href="index.php?action=usuarios" class="nav-item is-tab">Usuarios</a>
            <span class="nav-item">
               <?php
                session_start();
                
                if(!isset($_SESSION["inicio"]))
                {
                    echo '<a href="index.php?action=login" class="button is-primary">Entrar</a>';
                }
                else
                {
                    echo '<a href="index.php?action=logout" class="button">Salir</a>';
                }
                    
                ?>
                <a href="index.php?action=registro" class="button is-info">Registrarse</a>
            </span>
        </div>
    </div>
</nav>
