<?php
    if(!$_SESSION["inicio"]) {
        header("location:index.php?action=login");
        
        exit();
    }
?>
   

   <section class="section">
    <div class="container">
        <h1 class="title">Listado de Usuarios</h1>
        <article class="panel">
            <p class="panel-heading">Popular Followers</p>
            <div class="panel-block">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Número</th>
                            <th>Usuario</th>
                            <th>Email</th>
                            <th>Editar</th>
                            <th>Eliminar</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $usuarios = new MvcController();
                            $resultado = $usuarios->vistaUsuariosController();
                            //var_dump($respuesta);
                            foreach($resultado as $row => $item)
                            {
                                echo '<tr>
                                        <td>'.$item["id"].'</td>
                                        <td>'.$item["usuario"].'</td>
                                        <td>'.$item["email"].'</td>
                                        <td>
                                        <a href="index.php?action=editar&id='.$item["id"].'"  class="button">
                                        <span class="icon is-small">
                                            <i class="typcn typcn-pencil"></i>
                                        </span>
                                        <span>Editar</span>
                                        </a></td>
                                        <td><a href="index.php?action=eliminar&id='.$item["id"].'" class="delete is-large red"></a></td>
                                    </tr>';
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </article>
    </div>
</section>