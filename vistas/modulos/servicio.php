<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
    </section>

    <section id="contacto" class="seccion-contenido">
        <h2>Contacto</h2>
        <p>Para más información sobre los productos o realizar un pedido, contáctanos:</p>
        <form action="enviar.php" method="POST">
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" required><br>
            
            <label for="email">Correo Electrónico:</label>
            <input type="email" id="email" name="email" required><br>

            <label for="mensaje">Mensaje:</label><br>
            <textarea id="mensaje" name="mensaje" rows="4" required></textarea><br>

            <button type="submit">Enviar</button>
        </form>
    </section>

</div>
<!-- /.content-wrapper -->