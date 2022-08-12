<div class="content-wrapper">
    
    <section class="content-header">
      <h1>
        Administrar Clientes
        
      </h1>
      <ol class="breadcrumb">
        <li><a href="inicio"><i class="fa fa-dashboard"></i>Inicio</a></li>
        <li class="active">Administrar Clientes</li>
      </ol>
    </section>
   
    <section class="content"> 

      <div class="box">
        <div class="box-header with-border">

        <button class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarCliente">Agregar Cliente

        </button>         
        
        </div>

        <div class="box-body">
   
          <table class="table table-bordered table-striped dt-responsive tablas">

            <thead>

            <tr>

              <th style="width:10px">#</th>
              <th>Nombre</th>             
              <th>Documento</th>
              <th>Email</th>
              <th>Teléfono</th>
              <th>Dirección</th>
              <th>Fecha de nacimiento</th>
              <th>Total compras</th>
              <th>Última compra</th>
              <th>Ingreso al sistema</th>
              <th>Acciones</th>

            </tr>

            </thead>

            <tbody>

              <tr>
                <td>1</td>
                <td>Juan Villegas</td>
                <td>814113281</td>
                <td>juanv@hotmail.com</td>
                <td>539 2804 389</td>
                <td>calle 28 # 40-38</td>
                <td>1982-15-11</td>
                <td>2022-05-08 09:36:34</td>
                <td>39</td>
                <td>2022-21-11 12:27:34</td>               
                <td>

                  <div class="btn-group">
                    
                    <button class="btn btn-warning"><i class="fa fa-pencil"></i></button>
                    <button class="btn btn-danger"><i class="fa fa-times"></i></button>

                  </div>

                </td>

              </tr>
             
            </tbody>

          </table>

        </div>        
             
      </div>     

    </section>
    
</div>

<!--=====================================
MODAL AGREGAR USUARIO
======================================-->

<div id="modalAgregarCategoria" class="modal fade" role="dialog">
  
  <div class="modal-dialog">

    <div class="modal-content">

    <form role="form" method="post">

      <!-- CABEZA DEL MODAL -->

      <div class="modal-header" style="background:#3c8dbc; color:white">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Agregar categoría</h4>
        </div>

        <!-- CUERPO MODAL -->

        <div class="modal-body">
          <div class="box-body">

            <!--  ENTRADA PARA EL NOMBRE -->

            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-th"></i></span>
                <input type="text" class="form-control input-lg" name="nuevoCategoria" placeholder="Ingresar Categoría" required>

              </div>
            </div>
           
          </div>
        </div>

        <!-- PIE DEL MODAL -->
        <div class="modal-footer">
          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>
          <button type="submit" class="btn btn-primary">Guardar categoria</button>
        </div>

     </form>
    </div>
  
  </div>
  
</div>

       