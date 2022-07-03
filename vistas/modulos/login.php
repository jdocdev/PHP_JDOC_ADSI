<div class="login-box">
  <div class="login-logo">   
    <img src="vistas\img\plantilla\logo-blanco-bloque.png" class="img-responsive" alt=""> 
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Ingresar al sistema</p>

    <form method="post">
      <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="Usuario" name="ingUsuario" required>
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Contraseña" name="ingPassword" required>
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">        
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Ingresar</button>
        </div>
        <!-- /.col -->
      </div>

      <!-- logica para el login de usuarios -->
      <?php
          $login = new ControladorUsuarios();
          $login -> ctrIngresoUsuarios();
      ?>

    </form>

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->