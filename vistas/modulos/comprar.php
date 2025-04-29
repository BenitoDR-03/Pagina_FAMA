  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
  

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vanity</title>
    <link rel="stylesheet" href="styles.css">
    <style>
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
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        header {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 15px 0;
            font-size: 24px;
        }
        .product-container {
            display: flex;
            max-width: 900px;
            margin: 20px auto;
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
        .product-image img {
            width: 100%;
            max-width: 400px;
            border-radius: 10px;
        }
        .product-details {
            padding-left: 20px;
        }
        .price {
            font-size: 22px;
            color: #e60000;
            font-weight: bold;
        }
        .description {
            margin: 10px 0;
        }
        ul {
            padding: 0;
            list-style-type: none;
        }
        ul li {
            background: url('check-icon.png') left center no-repeat;
            background-size: 20px;
            padding-left: 30px;
            margin: 5px 0;
        }
        .buy-button {
            background-color: #e60000;
            color: white;
            padding: 10px 15px;
            border: none;
            cursor: pointer;
            font-size: 16px;
            border-radius: 5px;
            transition: background 0.3s;
        }
        .buy-button:hover {
            background-color: #b30000;
        }
        footer {
            background-color: #222;
            color: white;
            text-align: center;
            padding: 25px;
            font-size: 0.9em;
        }
    </style>
</head>
<body>
    <main>
        <div class="product-container">
            <div class="product-image">
                <img src="imagenes/vanity.jpg" alt="Vanity de Lujo">
            </div>
            <div class="product-details">
                <h2>Vanity Moderno con Espejo LED</h2>
                <p class="price">$7,999 MXN</p>
                <p class="description">Vanity de madera premium con iluminación LED y amplio espacio de almacenamiento. Perfecto para tu habitación o estudio de maquillaje.</p>
                <ul>
                    <li>Material: Madera de alta calidad</li>
                    <li>Espejo con luz LED regulable</li>
                    <li>Incluye múltiples cajones</li>
                    <li>Dimensiones: 120cm x 80cm x 40cm</li>
                </ul>
                <button class="buy-button">Comprar ahora</button>
            </div>
        </div>
    </main>
</body>
</html>

