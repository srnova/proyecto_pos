<?php

class ControladorUsuarios{

/* INGRESO DE USUARIO */

static public function ctrIngresoUsuario(){

    if(isset($_POST["ingUsuario"])){

        if(preg_match('/^[a-zA-Z0-9]+$/', $_POST["ingUsuario"]) &&
           preg_match('/^[a-zA-Z0-9]+$/', $_POST["ingPassword"])){

            $tabla = "usuarios";

            $item = "usuario";
            $valor = $_POST["ingUsuario"];

            $respuesta = ModeloUsuarios::MdlMostrarUsuarios($tabla, $item, $valor);

            if($respuesta["usuario"] ==  $_POST["ingUsuario"] && $respuesta["password"] == $_POST["ingPassword"]){

                $_SESSION["iniciarSesion"] = "ok";

                echo '<script>

                    window.location = "inicio";

                </script>';

            }else{

                echo '<br><div class="alert alert-danger">Error al ingresar, vuelve a intentarlo</div>';
            }

           }

        }
    }

    /* REGISTRO DE USUARIO */

    static public function ctrCrearUsuario(){
       
      if(isset($_POST["nuevoUsuario"])){
    
        if(preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["nuevoNombre"]) &&
           preg_match('/^[a-zA-Z0-9]+$/', $_POST["nuevoUsuario"]) &&
           preg_match('/^[a-zA-Z0-9]+$/', $_POST["nuevoPassword"])){

            /* VALIDAR IMAGEN */

            $ruta = "";

        if(isset($_FILES["nuevaFoto"]["tmp_name"])){
               
			      list($ancho, $alto) = getimagesize($_FILES["nuevaFoto"]["tmp_name"]);

					  $nuevoAncho = 500;
					  $nuevoAlto = 500;

					/*=============================================
					CREAMOS EL DIRECTORIO DONDE VAMOS A GUARDAR LA FOTO DEL USUARIO
					=============================================*/

					$directorio = "vistas/img/usuarios/".$_POST["nuevoUsuario"];

					mkdir($directorio, 0755);

	/*=============================================
					Funciones por defecto en tipo de IMAGEN
					=============================================*/

          if($_FILES["nuevaFoto"]["type"] == "image/jpeg"){

	/*=============================================
					guardamos LA FOTO DEL USUARIO
					=============================================*/

          $aleatorio = mt_rand(100,999);
          $ruta = "vistas/img/usuarios/".$_POST["nuevoUsuario"]."/".$aleatorio.".jpg";
          
					$origen = imagecreatefromjpeg($_FILES["nuevaFoto"]["tmp_name"]);						

					$destino = imagecreatetruecolor($nuevoAncho, $nuevoAlto);

					imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevoAncho, $nuevoAlto, $ancho, $alto);

					imagejpeg($destino, $ruta);

        }
          if($_FILES["nuevaFoto"]["type"] == "image/png"){

            /*=============================================
                    guardamos LA FOTO DEL USUARIO
                    =============================================*/
          
            $aleatorio = mt_rand(100,999);
            $ruta = "vistas/img/usuarios/".$_POST["nuevoUsuario"]."/".$aleatorio.".png";
                    
            $origen = imagecreatefrompng($_FILES["nuevaFoto"]["tmp_name"]);						
          
            $destino = imagecreatetruecolor($nuevoAncho, $nuevoAlto);
          
            imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevoAncho, $nuevoAlto, $ancho, $alto);
  
            imagepng($destino, $ruta);
  
          }
          
        }

            $tabla = "usuarios";

            $datos = array("nombre" => $_POST["nuevoNombre"],
                           "usuario" => $_POST["nuevoUsuario"],
                           "password" => $_POST["nuevoPassword"],
                           "perfil" => $_POST["nuevoPerfil"],
                           "foto" => $ruta);

            $respuesta = ModeloUsuarios::mdlIngresarUsuario($tabla, $datos);

            if($respuesta == "ok"){

                echo '<script>

                swal({

                    type: "success",
                    title: "¡El usuario ha sido guardado correctamente!",
                    showConfirmButton: true,
                    confirmButtonText: "Cerrar"

                }).then(function(result){

                    if(result.value){
                    
                        window.location = "usuarios";

                    }

                });
            

                </script>';

           }else{

             echo '<script>

          		swal({

					type: "error",
					title: "¡El usuario no puede ir vacío o llevar caracteres especiales!",
					showConfirmButton: true,
					confirmButtonText: "Cerrar"

				}).then(function(result){

					if(result.value){
						
						window.location = "usuarios";

						}

					});

             </script>';

          
        }
    } 
}

   }
  }
