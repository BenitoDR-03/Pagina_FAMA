  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
  

    <!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Muebleria Fama</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            color: #333;
        }


        section {
            padding: 20px;
            margin: 20px;
            background-color: white;
            border-radius: 8px;
        }

        h1, h2, h3 {
            margin-bottom: 20px;
        }

        .mueble {
            display: inline-block;
            width: 30%;
            margin: 10px;
            text-align: center;
            background-color: #f9f9f9;
            padding: 10px;
            border-radius: 8px;
        }

        .mueble img {
            width: 100%;
            height: auto;
            border-radius: 8px;
        }

        .mueble button {
            background-color:rgb(252, 0, 0);
            color: white;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .mueble button:hover {
            background-color:rgb(144, 7, 7);
        }

        form {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        form input, form textarea {
            padding: 10px;
            font-size: 16px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        form button {
            background-color: #333;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        form button:hover {
            background-color: #444;
        }

        footer {
            background-color: #222;
            color: white;
            text-align: center;
            padding: 25px;
            font-size: 0.9em;
        }
        .mueble img {
            width: 100%;
            height: auto;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(255, 0, 0, 0.2);
            transition: transform 0.3s;
        }
        .mueble img:hover {
            transform: scale(1.1);
        }
        .btn {
            display: inline-block;
            padding: 10px 20px;
            background-color:rgb(255, 0, 0);
            color: white;
            text-decoration: none;
            font-weight: bold;
            border-radius: 5px;
            transition: background 0.3s;
        }
        .btn:hover {
            background-color:rgb(245, 15, 15);
        }
        <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            color: #333;
        }
        header {
            background-color:rgb(232, 62, 62);
            padding: 15px 30px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        nav a {
            margin: 0 15px;
            text-decoration: none;
            color:rgb(255, 255, 255);
            font-weight: bold;
            transition: color 0.3s;
        }
        nav a:hover {
            color:rgb(0, 0, 0);
        }
        .slider-container {
            position: relative;
            width: 100%;
            max-height: 500px;
            overflow: hidden;
        }
        .slider {
            display: flex;
            width: 300%;
            animation: slide 9s infinite ease-in-out;
        }
        .slide {
            width: 100vw;
            height: 500px;
            flex-shrink: 0;
            background-size: cover;
            background-position: center;
        }
        @keyframes slide {
            0%, 33% { transform: translateX(0); }
            34%, 66% { transform: translateX(-100vw); }
            67%, 100% { transform: translateX(-200vw); }
        }
        .intro {
            padding: 80px 50px;
            text-align: center;
            background-color: #f7f7f7;
        }
        .intro h2 {
            font-size: 2.2em;
            margin-bottom: 20px;
        }
        .intro p {
            font-size: 1.2em;
            max-width: 800px;
            margin: 0 auto;
            line-height: 1.6;
        }
        .featured-card {
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 50px;
            background-color:rgb(222, 222, 222);
        }
        .card-image {
            width: 50%;
            max-height: 400px;
            object-fit: cover;
        }
        .card-text {
            width: 50%;
            padding: 20px;
        }
        .card-text h3 {
            font-size: 2em;
            margin-bottom: 15px;
        }
        .card-text p {
            font-size: 1.1em;
            margin-bottom: 20px;
        }
        .btn {
            display: inline-block;
            padding: 10px 20px;
            background-color:rgb(255, 0, 0);
            color: white;
            text-decoration: none;
            font-weight: bold;
            border-radius: 5px;
            transition: background 0.3s;
        }
        .btn:hover {
            background-color:rgb(245, 15, 15);
        }
        footer {
            background-color: #222;
            color: white;
            text-align: center;
            padding: 25px;
            font-size: 0.9em;
        }
    </style>
    </style>
</head>
<body>

    <section id="muebles">
        
        <h2>Nuestros Muebles</h2>
        <div class="mueble">
            <img src="imagenes/11.jpg" alt="Sillón moderno">
            <h3>Vanity "Clásico Brillante"</h3>
            <p>Un diseño elegante con acabados dorados y espejo grande. Ideal para añadir un toque de lujo a tu espacio. Perfecto para organizar tus productos de belleza.</p>
            <p><strong>Precio:</strong> $5,000 MXN</p>
            <a href="index.php?ruta=comprar" class="btn">Comprar</a>
        </div>
        <div class="mueble">
            <img src="imagenes/33.jpg" alt="Mesa de comedor">
            <h3>Vanity "Luz Moderna"</h3>
            <p>Con espejo LED y líneas limpias, este vanity combina funcionalidad y estilo contemporáneo. Incluye cajones espaciosos y taburete acolchado.</p>
            <p><strong>Precio:</strong> $7,500 MXN</p>
            <a href="index.php?ruta=comprar" class="btn">Comprar</a>
        </div>
        <div class="mueble">
            <img src="imagenes/22.jpg" alt="Estantería de madera">
            <h3>Vanity "Sueño Dulce"</h3>
            <p>Un diseño romántico con tonos pastel y detalles dorados. Perfecto para crear un espacio íntimo. Incluye espejo ovalado y estantes decorativos.</p>
            <p><strong>Precio:</strong> $6,000 MXN</p>
            <a href="index.php?ruta=comprar" class="btn">Comprar</a>
        </div>
    </section>
    <section id="muebles2">
        <div class="mueble">
            <img src="imagenes/44.jpg" alt="Sillón moderno">
            <h3>Vanity "Simple Elegancia"</h3>
            <p>Diseño minimalista con acabados en blanco mate y espejo circular. Ideal para espacios modernos. Incluye cajón amplio y taburete escandinavo.</p>
            <p><strong>Precio:</strong> $5,000 MXN</p>
            <a href="index.php?ruta=comprar" class="btn">Comprar</a>
        </div>
        <div class="mueble">
            <img src="imagenes/55.jpg" alt="Mesa de comedor">
            <h3>Vanity "Glam Oscuro"</h3>
            <p>Inspirado en tendencias bohemias, combina madera y rattan. Perfecto para espacios relajados. Incluye espejo redondo y estantes abiertos.</p>
            <p><strong>Precio:</strong> $7,500 MXN</p>
            <a href="index.php?ruta=comprar" class="btn">Comprar</a>
        </div>
        <div class="mueble">
            <img src="imagenes/66.jpg" alt="Estantería de madera">
            <h3>Vanity "Boho Natural"</h3>
            <p>Inspirado en tendencias bohemias, combina madera y rattan. Perfecto para espacios relajados. Incluye espejo redondo y estantes abiertos.</p>
            <p><strong>Precio:</strong> $4,000 MXN</p>
            <a href="index.php?ruta=comprar" class="btn">Comprar</a>
        </div>
    </section>
    <section id="muebles3">
        <div class="mueble">
            <img src="imagenes/11.jpg" alt="Sillón moderno">
            <h3>Vanity "Retro Encanto"</h3>
            <p>Diseño vintage con madera envejecida y herrajes antiguos. Ideal para amantes del retro. Incluye espejo rectangular y cajones de latón.</p>
            <p><strong>Precio:</strong> $5,000 MXN</p>
            <a href="index.php?ruta=comprar" class="btn">Comprar</a>
        </div>
        <div class="mueble">
            <img src="imagenes/99.jpg" alt="Mesa de comedor">
            <h3> Vanity "Brillo Natural"</h3>
            <p>Espejo iluminado con luz natural y acabados en cristal. Perfecto para maquillarte con precisión. Incluye cajones organizados y taburete ajustable.</p>
            <p><strong>Precio:</strong> $7,500 MXN</p>
            <a href="index.php?ruta=comprar" class="btn">Comprar</a>
        </div>
        <div class="mueble">
            <img src="imagenes/10.jpg" alt="Estantería de madera">
            <h3>Vanity "Lujo Compacto"</h3>
            <p>Espejo iluminado con luz natural y acabados en cristal. Perfecto para maquillarte con precisión. Incluye cajones organizados y taburete ajustable.</p>
            <p><strong>Precio:</strong> $4,000 MXN</p>
            <a href="index.php?ruta=comprar" class="btn">Comprar</a>
        </div>
    </section>
</body>

</html>
  <!-- /.content-wrapper -->
  <footer>
        <p>&copy; 2025 Mueblería FAMA - Todos los derechos reservados</p>
  </footer>