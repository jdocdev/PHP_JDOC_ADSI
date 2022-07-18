<div class="content-wrapper">

  <section class="content-header">
    <h1>
      Administrar categorías
    </h1>

    <ol class="breadcrumb">
      <li><a href="inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>
      <li class="active">Administrar categorías</li>
    </ol>

  </section>

  <section class="content">

    <div class="box">
      <div class="box-header with-border">
        <button class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarCategoria">Agregar categoría</button>
      </div>
      <div class="box-body">
        <table class="table table-bordered table-striped dt-responsive tablas">
          <thead>
            <tr>
              <th style="width: 10px;">#</th>
              <th>Categoría</th>
              <th>Descripción</th>
              <th>Acciones</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td>Encofrados horizontales</td>   
              <td>Example</td>           
              <td>
                <div class="btn-group">
                  <button class="btn btn-warning"><i class="fa fa-pencil"></i></button>
                  <button class="btn btn-danger"><i class="fa fa-times"></i></button>
                </div>
              </td>
            </tr>            
            <tr>
              <td>1</td>
              <td>Encofrados verticales​</td>
              <td>Example</td>              
              <td>
                <div class="btn-group">
                  <button class="btn btn-warning"><i class="fa fa-pencil"></i></button>
                  <button class="btn btn-danger"><i class="fa fa-times"></i></button>
                </div>
              </td>
            </tr>
            <tr>
              <td>1</td>
              <td>Soluciones especiales​</td>
              <td>Example</td>              
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

<!-- Ventana Modal agregar Categoría -->
<div id="modalAgregarCategoria" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">

      <form class="form" method="post">
        <div class="modal-header" style="background-color:#3c8dbc; color:#fff;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Agregar categoría</h4>
        </div>
        <div class="modal-body">
          <div class="box-body">
            <!-- Nueva Categoría -->
            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-th"></i></span>
                <input type="text" class="form-control input-lg" name="nuevaCategoria" placeholder="Ingresar categoría" required>
              </div>
            </div>
            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-folder"></i></span>
                <input type="text" class="form-control input-lg" name="descripcionCategoria" placeholder="descripción" required>
              </div>
            </div>             
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>
          <button type="submit" class="btn btn-primary">Guardar</button>
        </div>
      </form>

    </div>
  </div>
</div>