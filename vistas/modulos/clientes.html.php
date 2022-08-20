<div class="content-wrapper">

  <section class="content-header">
    <h1>
      Administrar clientes
    </h1>

    <ol class="breadcrumb">
      <li><a href="inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>
      <li class="active">Administrar clientes</li>
    </ol>

  </section>

  <section class="content">

    <div class="box">
      <div class="box-header with-border">
        <button class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarCliente">Agregar cliente</button>
      </div>
      <div class="box-body">
        <table class="table table-bordered table-striped dt-responsive tablas">
          <thead>
            <tr>
              <th style="width: 10px;">#</th>
              <th>Nombre</th>
              <th>Documento</th>
              <th>Email</th>
              <th>Teléfono</th>
              <th>Dirección</th>
              <th>Fecha de nacimiento</th>
              <th>Total compras</th>
              <th>Última compra</th>
              <th>Creación del cliente</th>
              <th>Acciones</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td>Juan Ortiz</td>   
              <td>12347547895</td>
              <td>juan@example.com</td>
              <td>3017542685</td>
              <td>Calle 12 #34-56</td>   
              <td>19-01-1994</td>
              <td>19</td>
              <td>2022-08-19 19:19:19</td>    
              <td>2022-07-19 19:19:19</td>                  
              <td>
                <div class="btn-group">
                  <button class="btn btn-warning"><i class="fa fa-pencil"></i></button>
                  <button class="btn btn-danger"><i class="fa fa-times"></i></button>
                </div>
              </td>
            </tr>
          </tbody>
          <tbody>
            <tr>
              <td>1</td>
              <td>Juan Ortiz</td>   
              <td>12347547895</td>
              <td>juan@example.com</td>
              <td>3017542685</td>
              <td>Calle 12 #34-56</td>   
              <td>19-01-1994</td>
              <td>19</td>
              <td>2022-08-19 19:19:19</td>    
              <td>2022-07-19 19:19:19</td>                  
              <td>
                <div class="btn-group">
                  <button class="btn btn-warning"><i class="fa fa-pencil"></i></button>
                  <button class="btn btn-danger"><i class="fa fa-times"></i></button>
                </div>
              </td>
            </tr>
          </tbody>
          <tbody>
            <tr>
              <td>1</td>
              <td>Juan Ortiz</td>   
              <td>12347547895</td>
              <td>juan@example.com</td>
              <td>3017542685</td>
              <td>Calle 12 #34-56</td>   
              <td>19-01-1994</td>
              <td>19</td>
              <td>2022-08-19 19:19:19</td>    
              <td>2022-07-19 19:19:19</td>                  
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

<!-- Ventana Modal agregar cliente -->
<div id="modalAgregarCliente" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">

      <form class="form" method="post">
        <div class="modal-header" style="background-color:#3c8dbc; color:#fff;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Agregar cliente</h4>
        </div>
        <div class="modal-body">
          <div class="box-body">
            <!-- Nuevo nombre cliente -->
            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                <input type="text" class="form-control input-lg" name="nuevoCliente" placeholder="Ingresar nombre" required>
              </div>
            </div>
            <!-- Nuevo documento de identificación cliente -->
            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-key"></i></span>
                <input type="number" min="0" class="form-control input-lg" name="nuevoDocumentoId" placeholder="Ingresar documento" required>
              </div>
            </div>
            <!-- Nuevo email cliente -->
            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                <input type="email" class="form-control input-lg" name="nuevoEmail" placeholder="Ingresar Email" required>
              </div>
            </div>
            <!-- Nuevo télefono cliente -->
            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                <input type="text" class="form-control input-lg" name="nuevoTelefono" placeholder="Ingresar número de teléfono" data-inputmask="'mask':'(999) 999-9999'" data-mask required>
              </div>
            </div>
            <!-- Nuevo dirección cliente -->
            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-map-marker"></i></span>
                <input type="text" class="form-control input-lg" name="nuevaDireccion" placeholder="Ingresar dirección" required>
              </div>
            </div>
            <!-- Nueva fecha de nacimiento -->
            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                <input type="text" class="form-control input-lg" name="nuevaFechaNacimiento" placeholder="Ingresar fecha de nacimiento" data-inputmask="'alias':'yyyy/mm/dd'" data-mask required>
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