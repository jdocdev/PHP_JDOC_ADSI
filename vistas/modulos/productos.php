<div class="content-wrapper">

  <section class="content-header">
    <h1>
      Administrar productos
    </h1>

    <ol class="breadcrumb">
      <li><a href="inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>
      <li class="active">Administrar productos</li>
    </ol>

  </section>

  <section class="content">

    <div class="box">
      <div class="box-header with-border">
        <button class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarProducto">Agregar producto</button>
      </div>
      <div class="box-body">
        <table class="table table-bordered table-striped dt-responsive tablaProductos" width="100%">
          <thead>            
            <tr>
              <th style="width: 10px;">#</th>
              <th>Imagen</th>
              <th>Código</th>
              <th>Producto</th>
              <th>Descripción</th>
              <th>Categoría</th>
              <th>Stock</th>
              <th>Precio de compra</th>
              <th>Precio de venta</th>
              <th>Agregado</th>
              <th>Acciones</th>
            </tr>
          </thead>
        </table>
      </div>

    </div>

  </section>

</div>

<!-- Ventana Modal agregar producto -->
<div id="modalAgregarProducto" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">

      <form class="form" method="post" enctype="multipart/form-data">
        <div class="modal-header" style="background-color:#3c8dbc; color:#fff;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Agregar producto</h4>
        </div>
        <div class="modal-body">
          <div class="box-body">
            <!-- Código de producto -->
            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-code"></i></span>
                <input type="text" class="form-control input-lg" name="nuevoCodigo" placeholder="Ingresar código" required>
              </div>
            </div>
            <!-- Nombre de producto -->
            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-product-hunt"></i></span>
                <input type="text" class="form-control input-lg" name="nuevoProducto" placeholder="Ingresar nombre de producto" required>
              </div>
            </div>
            <!-- Descripción de producto -->
            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-ticket"></i></span>
                <input type="text" class="form-control input-lg" name="nuevaDescripcion" placeholder="Ingresar descripción" required>
              </div>
            </div>
            <!-- Selección de categoría -->
            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-th"></i></span>
                <select class="form-control input-lg" name="nuevaCategoria">
                  <option value="">Seleccionar categoría</option>
                  <option value="EH">ENCOFRADOS HORIZONTALES</option>
                  <option value="EV">ENCOFRADOS VERTICALES</option>
                  <option value="SE">SOLUCIONES ESPECIALES</option>
                  <option value="MADE">MADE LÍNEA DE MADERAS</option>
                </select>
              </div>
            </div>
            <!-- Stock de producto -->
            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-check"></i></span>
                <input type="number" class="form-control input-lg" name="nuevoStock" min="0" placeholder="Stock" required>
              </div>
            </div>
            <!-- Precio de compra producto -->
            <div class="form-group row">
              <div class="col-xs-6">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-arrow-up"></i></span>
                  <input type="number" class="form-control input-lg" name="nuevoPrecioCompra" min="0" placeholder="Precio de compra" required>
                </div>
              </div>
              <!-- Precio de venta producto -->
              <div class="col-xs-6">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-arrow-down"></i></span>
                  <input type="number" class="form-control input-lg" name="nuevoPrecioVenta" min="0" placeholder="Precio de venta" required>
                </div>
                <br>
                <!-- Checkbox para calculo del porcentaje -->
                <div class="col-xs-6">
                  <div class="form-group">
                    <label>
                      <input type="checkbox" class="minimal porcentaje" checked>
                      Utilizar porcentaje
                    </label>
                  </div>
                </div>
                <!-- Porcentaje aplicado al precio de venta -->
                <div class="col-xs-6" style="padding:0">
                  <div class="input-group">
                    <input type="number" class="form-control input-lg nuevoPorcentaje" min="o" value="40" required>
                    <span class="input-group-addon"><i class="fa fa-percent"></i></span>
                  </div>
                </div>
              </div>
            </div>
            <!-- Subir imagen de producto -->
            <div class="form-group">
              <div class="panel">Subir imagen</div>
              <input type="file" id="nuevaImagen" name="nuevaImagen">
              <p class="help-help-block">Peso máximo 5mb</p>
              <img src="vistas\img\productos\default\anonymous.png" class="img-thumbnail" width="100px" alt="">
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