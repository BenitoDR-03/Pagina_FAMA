  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Formulario de Contacto</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="inicio">Inicio</a></li>
              <li class="breadcrumb-item active">Contacto</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

  <div class="contenedor"> 
      
    <div class="formulario registro">

          <div class="titulo-formulario">
              <h2>Contactanos</h2>
          </div>

          <form method="POST">
              <label for="nombre">Nombre</label><br>
              <input class="borde-bajo" type="text" id="nombre" name="nombre" placeholder="Nombre"><br>

              <label for="apellidos">Apellidos</label><br>
              <input class="borde-bajo" type="text" id="apellidos" name="apellidos" placeholder="Apellidos"><br>

              <label for="telefono">Teléfono</label><br>
              <input class="borde-bajo" type="number" id="telefono" name="telefono" placeholder="Telefono" maxlength="12"><br>

              <label for="email">Email</label><br>
              <input class="borde-bajo" type="email" id="email" name="email" placeholder="Email"><br>

              <label for="mensaje">Mensaje</label><br>
              <input class="borde-bajo" type="text" id="mensaje" name="mensaje" placeholder="Mensaje"><br>

              <button type="submit" name="enviar-mensaje">Enviar</button>
          </form>

      </div>

  </div>
  
</div>
  <!-- /.content-wrapper -->