  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
  <!DOCTYPE html>
    <html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mueblería FAMA</title>
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
            box-shadow: 0 2px 10px rgb(0, 0, 0);
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
            max-height: 500px;
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
</head>


<body>

<html lang="es">  
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    
    <title>Galeria de Muebles</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            background-color:rgb(21, 20, 20);
        }
        .gallery {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 10px;
            padding: 20px;
            max-width: 800px;
            margin: auto;
        }
        .gallery img {
            width: 100%;
            height: auto;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(234, 25, 25, 0.2);
            transition: transform 0.3s;
        }
        .gallery img:hover {
            transform: scale(1.1);
        }
    </style>
</head>

    <title>Tarjeta</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            background-color:rgb(91, 87, 87);
        }
        .target {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 10px;
            padding: 20px;
            max-width: 800px;
            margin: auto;
        }
        .tarjet img {
            width: 100%;
            height: auto;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(255, 250, 250, 0.2);
            transition: transform 0.3s;
        }
        .tarjet img:hover {
            transform: scale(1.1);
        }
    </style>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mueblería FAMA</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            color: #333;
        }


        .hero {
            position: relative;
            width: 100%;
            height: 600px;
            overflow: hidden;
        }
        .hero img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }
        .hero:hover img {
            transform: scale(1.1);
        }
        .hero-text {
            position: absolute;
            bottom: 50px;
            right: 50px;
            background: rgba(0, 0, 0, 0.6);
            color: white;
            padding: 20px;
            border-radius: 5px;
            font-size: 1.5em;
        }
        .intro {
            padding: 80px 50px;
            text-align: center;
            background-color: #f7f7f7;
            margin-top: 50px;
        }

        .prev {
            left: 0;
        }
        .next {
            right: 0;
        }
    </style>
</head>
<section class="hero">
    <img id="hero-image" src="imagenes/descansando.jpg" alt="Mueblería FAMA">
    <div class="hero-text">Descubre la mejor calidad en Vanitys</div>
</section>

<style>
.hero {
    position: relative;
    width: 100%;
    height: 600px;
    overflow: hidden;
}

.hero img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.3s ease-in-out;
}

.hero img:hover {
    transform: scale(1.1);
}

.hero-text {
    position: absolute;
    bottom: 20px;
    right: 20px;
    background: rgba(0, 0, 0, 0.6);
    color: white;
    padding: 10px 20px;
    font-size: 1.5em;
    border-radius: 5px;
}
</style>

<script>
const images = [

    "imagenes/principal.jpg",
    "imagenes/descansando.jpg"
];

let currentIndex = 0;

function changeHeroImage() {
    currentIndex = (currentIndex + 1) % images.length;
    document.getElementById("hero-image").src = images[currentIndex];
}

setInterval(changeHeroImage, 5000); // Cambia la imagen cada 5 segundos
</script>

    <section class="intro">
   
    <h2>Bienvenido a Mueblería FAMA</h2>
        <p>Descubre una nueva forma de amueblar tu hogar con estilo, calidad y elegancia. En Mueblería FAMA ofrecemos soluciones únicas para cada espacio.</p>
        <p>Contamos con gran variedad de Muebles de diferentes estilos.</p>

        
<html lang="es">
<body>
    
    <h1></h1>
    <div class="gallery">
        <img src="imagenes/11.jpg" alt="Imagen 1">
        <img src="imagenes/22.jpg" alt="Imagen 2">
        <img src="imagenes/33.jpg" alt="Imagen 3">
        <img src="imagenes/66.jpg" alt="Imagen 4">
        <img src="imagenes/44.jpg" alt="Imagen 5">
        <img src="imagenes/55.jpg" alt="Imagen 6">
    </div>
</body>
    </section>


<div class="tarjet">
</head>
    <section class="featured-card">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Texto Justificado</title>
    <style>
         {
            text-align: center; /* Justifica el texto */
            width: 80%; /* Ajusta el ancho del párrafo */
            margin: 0 auto; /* Centra el párrafo en la página */
            font-family: Arial, sans-serif; /* Fuente opcional */
            line-height: 1.6; /* Espaciado entre líneas */
        }
    </style>
</head>
    <img class="card-image" src="imagenes/t3.jpg" alt="Mueble destacado">
    <div class="card-text">
        <h3>Diseño y belleza: Vanitys que inspiran tu rutina diaria</h3>
        <p>Un hogar ordenado es clave para descansar bien. En Muebleria FAMA, te recomendamos mantener el dormitorio despejado con muebles de almacenamiento, aprovechar el espacio con soluciones 
        inteligentes, y crear un ambiente relajante con una buena iluminación y textiles naturales.</p>
        <a href="index.php?ruta=productos" class="btn">Conoce más</a>
    </div>
</div>
</section>

    <div class="tarjet">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Texto Justificado</title>
    <style>
         {
            text-align: justify; /* Justifica el texto */
            width: 80%; /* Ajusta el ancho del párrafo */
            margin: 0 auto; /* Centra el párrafo en la página */
            font-family: Arial, sans-serif; /* Fuente opcional */
            line-height: 1.6; /* Espaciado entre líneas */
        }
    </style>
</head>
    <section class="featured-card">
        <img class="card-image" src="imagenes/t4.jpg" alt="Mueble destacado">
        <div class="card-text">
            <h3>Diseño y glamour: Transforma tu espacio con vanitys únicos</h3>
            <p>En Mueblería FAMA, sabemos que un vanity moderno va más allá de su función básica. Por eso, te ofrecemos opciones multifuncionales que se adaptan a tus necesidades.</p>
            <a href="index.php?ruta=productos" class="btn">Conoce más</a>
        </div>
    </div>
    </section>

    <div class="tarjet">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Texto Justificado</title>

</head>
    <section class="featured-card">
        <img class="card-image" src="imagenes/t1.jpg" alt="Mueble destacado">
        <div class="card-text">
            <h3>Diseño y funcionalidad: Vanitys que transforman tu espacio</h3>
            <p>Un vanity no es solo un mueble, es tu rincón personal para prepararte y sentirte renovado cada día. En Mueblería FAMA,
                 te recomendamos elegir un vanity que combine estilo y funcionalidad. </p>
            <a href="index.php?ruta=productos" class="btn">Conoce más</a>
        </div>
    </div>
    </section>
    


    <footer>
        <p>&copy; 2025 Mueblería FAMA - Todos los derechos reservados</p>
    </footer>

</body>
</html>
