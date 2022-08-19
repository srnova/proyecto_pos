<?php

require_once "../controladores/productos.controlador.php";
require_once "../modelos/productos.modelo.php";

require_once "../controladores/categorias.controlador.php";
require_once "../modelos/categorias.modelo.php";

class AjaxProductos{

    /* GENERAR CODIGO A PARTIR DE ID */

  public $idCategoria;

  public function ajaxCrearCodigoProducto(){

    $item = "id_categoria";
    $valor = $this->idCategoria;

    $respuesta = ControladorProductos::ctrMostrarProductos($item, $valor);
    
    echo json_encode($respuesta);

  }

}

/* GENERAR CODIGO A PARTIR DE idCategoria  */

if(isset($_POST["id_categoria"])){

    $codigoProducto = new AjaxProductos();
    $codigoProducto -> idCategoria = $_POST["idCategoria"];
    $codigoProducto -> ajaxCrearCodigoProducto();

}
    





       

   
