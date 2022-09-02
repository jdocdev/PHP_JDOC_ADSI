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
            <?php

              $item = null;
              $valor = null;

              $clientes = ControladorClientes::ctrMostrarClientes($item, $valor);

              foreach ($clientes as $key => $value) {  

                echo '<tr>
                        <td>'.($key+1).'</td>
                        <td>'.$value["nombre"].'</td>
                        <td>'.$value["documento"].'</td>
                        <td>'.$value["email"].'</td>
                        <td>'.$value["telefono"].'</td>
                        <td>'.$value["direccion"].'</td>
                        <td>'.$value["fecha_nacimiento"].'</td> 
                        <td>'.$value["compras"].'</td>
                        <td>2022-08-19 19:19:19</td>
                        <td>'.$value["fecha"].'</td>
                        <td>
                          <div class="btn-group">                            
                            <button class="btn btn-warning btnEditarCliente" data-toggle="modal" data-target="#modalEditarCliente" idCliente="'.$value["id"].'"><i class="fa fa-pencil"></i></button>
                            <button class="btn btn-danger btnEliminarCliente" idCliente="'.$value["id"].'"><i class="fa fa-times"></i></button>
                          </div>  
                        </td>
                      </tr>';

                }

            ?>
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

      <?php
          
          $crearCliente = new ControladorClientes();
          $crearCliente -> ctrCrearCliente();

      ?>

    </div>
  </div>
</div>

<!-- Ventana Modal editar cliente -->
<div id="modalEditarCliente" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">

      <form class="form" method="post">
        <div class="modal-header" style="background-color:#3c8dbc; color:#fff;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Editar cliente</h4>
        </div>
        <div class="modal-body">
          <div class="box-body">
            <!-- Editar nombre cliente -->
            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                <input type="text" class="form-control input-lg" name="editarCliente" id="editarCliente" required>
                <input type="hidden" name="idCliente" id="idCliente">
              </div>
            </div>
            <!-- Editar documento de identificación cliente -->
            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-key"></i></span>
                <input type="number" min="0" class="form-control input-lg" name="editarDocumentoId" id="editarDocumentoId" required>
              </div>
            </div>
            <!-- Editar email cliente -->
            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                <input type="email" class="form-control input-lg" name="editarEmail" id="editarEmail" required>
              </div>
            </div>
            <!-- Editar télefono cliente -->
            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                <input type="text" class="form-control input-lg" name="editarTelefono" id="editarTelefono" data-inputmask="'mask':'(999) 999-9999'" data-mask required>
              </div>
            </div>
            <!-- Editar dirección cliente -->
            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-map-marker"></i></span>
                <input type="text" class="form-control input-lg" name="editarDireccion" id="editarDireccion" required>
              </div>
            </div>
            <!-- Editar fecha de nacimiento -->
            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                <input type="text" class="form-control input-lg" name="editarFechaNacimiento" id="editarFechaNacimiento" data-inputmask="'alias':'yyyy/mm/dd'" data-mask required>
              </div>
            </div>            
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>
          <button type="submit" class="btn btn-primary">Guardar</button>
        </div>
      </form>

      <?php
          
          $crearCliente = new ControladorClientes();
          $crearCliente -> ctrEditarCliente();

      ?>

    </div>
  </div>
</div>

<?php
          
    $eliminarCliente = new ControladorClientes();
    $eliminarCliente -> ctrEliminarCliente();

?>