<?php

class EnlacesPaginas{

	public static function enlacesPaginasModel($enlacesModel)
    {
        switch($enlacesModel)
        {
            case "principal":
            case "login":
            case "logout":
            case "registro":
            case "editar":
            case "usuarios":
                $module = "views/modules/".$enlacesModel.".php";
                break;
            case "cambio":
            case "eliminar":
                $module = "views/modules/usuarios.php";
                break;
            case "fallo":
                $module = "views/modules/login.php?action=fallo";
            default: $module = "views/modules/login.php";
        }

		return $module;

	}

}


?>