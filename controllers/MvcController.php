<?php

class MvcController{

	#CARGA PLANTILLA
	#----------------------------------------------

	public function plantilla(){
		include "views/plantilla.php";
	}

	#INTERACCION
	#----------------------------------------------
	public function enlacesPaginasController(){

		if(isset($_GET["action"]))
        {
            $enlacesController = $_GET["action"];
		}
		else
        {
            $enlacesController = "index";
		}

		$respuesta = EnlacesPaginas::enlacesPaginasModel($enlacesController);

		include $respuesta;
	}
    
    public function registroUsuarioController()
    {
        $passctrip = self::encriptaPassword($_POST["passwordReg"]);
        
        $datos = array(
                    "usuario" => $_POST["usuarioReg"],
                    "password" => $passctrip,
                    "email" => $_POST["emailReg"]
                );

                $respuesta = Datos::registroUsuarioModel($datos, "usuarios");

                if($respuesta)
                {
                    self::redirect("index.php?action=exito");
                }
                else
                {
                    self::redirect("index.php");
                }
    }
    
    public static function ingresoUsuarioController()
    {
        if(isset($_POST["usuarioIn"]))
        {
            $datos = array(
                "usuario" => $_POST["usuarioIn"],
                "password" => $_POST["passwordIn"],

            );

            $resultado = Datos::ingresoUsuarioModel($datos, "usuarios");
            
            
            if(isset($resultado["id"]) && isset($resultado["intentos"]))
            {
                $intentos = $resultado["intentos"];
                $maxIntentos = 2;
                
                if($intentos < $maxIntentos)
                {
                    
                    if(self::verificaPassword($datos["password"], $resultado["password"]))
                    {
                        //session_start();
                        $_SESSION["inicio"] = true;
                        //$intentos = 0;
                        
                        self::redirect("index.php?action=principal");
                    }
                    else
                    {
                        //++$intentos;
                        self::redirect("index.php?action=fallo");
                    }
                }
            }
            else
            {
                self::redirect("index.php?action=fallo");
            }
        }
    }
    
    public function vistaUsuariosController()
    {
        return Datos::vistaUsuariosModel("usuarios");
    }
    
    public function editarUsuarioController()
    {
        if(isset($_GET["id"]))
        {
            $idUsuario = $_GET["id"];

            return Datos::editarUsuarioModel($idUsuario, "usuarios");
        }
    }
    
    public function actualizaUsuarioController($idUsuario)
    {
        if(isset($_POST["usuarioEdit"]))
        {
            $passctrip = self::encriptaPassword($_POST["passwordEdit"]);
            
            $datos = array(
                "id" => $idUsuario,
                "usuario" => $_POST["usuarioEdit"],
                "email" => $_POST["emailEdit"],
                "password" => $passctrip,
            );

            $respuesta = Datos::actualizaUsuarioModel($datos, "usuarios");

            if($respuesta)
            {
                self::redirect("index.php?action=cambio");
            }
            else
            {
                echo "Error. No fue posible actualizar el usuario";
            }
        }
    }
    
    public function eliminaUsuarioController($idUsuario)
    {
        if(isset($idUsuario))
        {
            $respuesta = Datos::eliminaUsuarioModel($idUsuario, "usuarios");
            
            if($respuesta)
            {
                self::redirect("index.php?action=eliminar");
            }
            else
            {
                echo "Error. No fue posible eliminar al usuario";
            }
        }
    }
    
    
    #HELPERS
	#----------------------------------------------
    
    public function validaRegistroController()
    {
        $respuesta = array('valida' => true, 'msjUsuario' => '', 'msjEmail' => '', 'msjPassword' => '');
        
        if(isset($_POST["usuarioReg"]) &&
          isset($_POST["emailReg"]) &&
          isset($_POST["passwordReg"]))
        {
            $usuario = $_POST["usuarioReg"];
            $email = $_POST["emailReg"];
            $password = $_POST["passwordReg"];
            
            if(!preg_match('/^[a-zA-Z0-9]+$/', $usuario))
            {
                $respuesta['valida'] = false;
                $respuesta['msjUsuario']= 'Error en Usuario: Debe contener solo letras sin espacios' . '<br>';
            }
            if(!preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$/', $password))
            {
                $respuesta['valida'] = false;
                $respuesta['msjPassword'] = 'Error en Password: Debe contener 6 caracteres minino, una mayúscula, una minúscula y un número' . '<br>';
            }
            if(filter_var($email, FILTER_VALIDATE_EMAIL))
            {
                $respuesta['valida'] = false;
                $respuesta['msjEmail']= 'Error en Email: Debe contener el simbolo "@" y un dominio especifico' . '<br>';
            }
        }
        else { $respuesta['valida'] = false; }
        
        return $respuesta;
    }
    
    private static function encriptaPassword($password)
    {
        return password_hash($password, PASSWORD_BCRYPT);
    }
    
    private static function verificaPassword($original, $encriptado)
    {
        return password_verify($original, $encriptado);
    }
    
    private static function redirect($url, $statusCode = 303)
    {
        header('Location: ' . $url, true, $statusCode);
        die();
    }
}

?>
