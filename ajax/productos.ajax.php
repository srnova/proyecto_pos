<?php

require_once "../controladores/productos.controlador.php";
require_once "../modelos/productos.modelo.php";

require_once "../controladores/categorias.controlador.php";
require_once "../modelos/categorias.modelo.php";

class AjaxProductos{

    /* GENERAR CODIGO ID CATEGORIA */

    public $idCategoria;

    public function ajaxCrearCodigoProductos(){

        $item = "id_Categoria";
        $valor = $this->idCategoria;

        $respuesta = ControladorProductos::ctrMostrarProductos($item, $valor);       

        echo Json_encode($respuesta);

    }

    /* EDITAR PRODUCTOS */

    public $idProducto;
    public function ajaxEditarProducto(){

        $item ="id";
        $valor = $this->idProducto;

        $respuesta = ControladorProductos::ctrMostrarProductos($item, $valor);

        echo json_encode($respuesta);

    }
}          

/* GENERAR CODIGO DE ID CATEGORIA */

if(isset($_POST["idCategoria"])){

    $codigoProducto = new AjaxUsuarios();
    $codigoProducto -> idCategoria = $_POST["idCategoria"];
    $codigoProducto -> ajaxCrearCodigoProducto();
}

/* EDITAR PRODUCTO */

if(isset($_POST["idProducto"])){

    $editarProducto = new AjaxUsuarios();
    $editarProducto -> idCategoria = $_POST["idCategoria"];
    $editarProducto -> ajaxCrearEditarProducto();
}
    