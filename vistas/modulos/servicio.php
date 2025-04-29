  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
 
 
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

        header {
            background-color: #333;
            color: white;
            padding: 20px;
            text-align: center;
        }

        header nav ul {
            list-style: none;
            padding: 0;
        }

        header nav ul li {
            display: inline;
            margin: 0 15px;
        }

        header nav ul li a {
            color: white;
            text-decoration: none;
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
    <section id="contacto">
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

  
  </html>
  <!-- /.content-wrapper -->
  <footer>
        <p>&copy; 2025 Mueblería FAMA - Todos los derechos reservados</p>
    </footer>