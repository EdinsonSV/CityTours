<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Huánuco</title>
    <link href="//db.onlinewebfonts.com/c/8439bba3f32361a35cc299a279575aa6?family=Bree+Peru" rel="stylesheet" type="text/css"/>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;400;600&display=swap');
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
        }

        :root {
            --bg-color-primary: #ffffff;
            --bg-color-secondary: #252525;
            --color-primary: #000000;
            --color-secondary: #ffffff;
        }

        body {
            font-size: 16px;
            font-family: 'Poppins', sans-serif;
            position: relative;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
            user-select: none;
            background-color: var(--bg-color-primary);
            color: var(--color-primary);
            overflow-x: hidden;
        }

        body::-webkit-scrollbar {
            width: 15px;
        }

        body::-webkit-scrollbar-thumb {
            background: #AAAAAA;
            border-radius: 10px;
        }

        body::-webkit-scrollbar-thumb:hover {
            background-color: #717171;
        }

        .titulo {
            text-align: center;
            color: #0070ba;
            font-family: "Bree Peru";
            font-size: 3em;
            padding-top: 20px;
        }
        .container, .container img{
            width: 100vw;
            height: 350px;
            object-fit: cover;
            position: relative;
        }
        .container img{
            animation: pulso 2s linear infinite alternate;
        }
        @keyframes pulso {
            100%{
                transform: scale(1.1)
            }
        }
        .container::before{
            content: '';
            background-color: #00000050;
            position: absolute;
            width: 100%;
            height: 100%;
            z-index: 1000;
            animation: pulso 2s linear infinite alternate;
        }
        .container2{
            position: relative;
            border-radius: 10px;
            width: 80%;
            min-height: 200px;
            background-color: #fff;
            margin: -50px auto 0 auto;
            z-index: 100000;
        }
        .container2 p{
            padding: 20px 10%;
            text-align: justify;
        }
        .container3{
            width: 90%;
            display: flex;
            justify-content: center;
            align-items: center;
            position: relative;
            gap: 20px;
            margin: 0 auto;
        }
        .card img{
            width: 270px;
            border-radius: 10px 10px 0 0;
        }
        .card{
            width: 270px;
            height: 600px;
            display: flex;
            justify-content: flex-start;
            align-items: center;
            flex-direction: column;
            overflow: hidden;
            margin-bottom: 20px;
            object-fit: contain;
            border-radius: 10px
        }
        .card-text{
            overflow-y: scroll;
            padding: 10px;
        }
        .card-text::-webkit-scrollbar {
            width: 5px;
        }

        .card-text::-webkit-scrollbar-thumb {
            background: #AAAAAA;
            border-radius: 10px;
        }

        .card-text::-webkit-scrollbar-thumb:hover {
            background-color: #717171;
        }
        h5{
            text-align: center;
            margin: 20px;
            font-size: 1.5em;
            color: #33aba0;
        }
        h3{
            color: #0a58ca;
            text-align: center;
            font-size: 1.3em;
        }
        .container3 p{
            font-size: .9em;
        }
        </style>
</head>
<body>
    <div class="container">
        <img src="https://www.ytuqueplanes.com/imagenes/fotos/regiones/huanuco-desktop.jpg" alt="" loading="lazy">
    </div>
    <div class="container2">
        <h1 class="titulo">Huánuco</h1>
        <p>Huánuco te muestra la unión de la sierra y la selva peruana. Visita sus elevadas montañas, aguas termales, cuevas, lagunas y una seductora formación rocosa llamada la Bella Durmiente; llénate de historia con sus monumentos como el Templo de la Manos Cruzadas y aventúrate a conocer la naturaleza viva en la Cueva de las Lechuzas de Tingo María. La región huanuqueña tiene mucho por ofrecerte, ¿empezamos el viaje?</p>
    </div>
    <h5>Conoce los mejores lugares turísticos de Huánuco</h5>
    <section class="container3">
        <div class="card">
            <img src="https://www.ytuqueplanes.com/imagenes/fotos/destinos/complejo-grau_card.jpg" alt="">
            <h3>Complejo Arqueológico de Garu</h3>
            <div class="card-text">
                <p>Monumento arqueológico preinca más importante del alto Marañón, se ubica en los alrededores del cerro Cóndor Waganan (Donde el cóndor llora).
Uno de los centros arqueológicos más importantes del Alto Marañón. Habría sido sede político administrativo de los Yaros o Yarowilcas y se le considera uno de los asentamientos más organizados y poblados de la época preinca. Presenta conjuntos habitacionales, administrativos, religiosos y centros de defensa.
A 75 km al noreste de la ciudad de Huánuco (2 h y 30 min en auto) vía asfaltada y afirmada. Ruta: Huánuco - Chora - Garu.
</p>
            </div>
        </div>
        <div class="card">
            <div class="card-image">
                <img src="https://www.ytuqueplanes.com/imagenes/fotos/destinos/parque-nacional-tingo_card.jpg" alt="">
            </div>
            <h3>Parque Nacional Tingo María</h3>
            <div class="card-text">
                <p>Lugar perfecto para el avistamiento de aves por la diversidad de especies que alberga. Posee magníficos atractivos que embellecen este exótico destino.
En el parque hay una variada fauna silvestre: 104 especies entre peces, batracios, reptiles, aves y mamíferos.
Ubicado a 6 km al suroeste de la ciudad de Tingo María. Otra opción de ingreso es por el sector 3 de Mayo, 17 km desde Tingo María. Visitas: L - D 8:00 – 17:30 h.
</p>
            </div>
        </div>
        <div class="card">
            <div class="card-image">
                <img src="https://www.ytuqueplanes.com/imagenes/fotos/destinos/bosque-neblina-carpish_card.jpg" alt="">
            </div>
            <h3>Bosque de Neblina de Carpish</h3>
            <div class="card-text">
                <p>La neblina cubre de manera constante esta zona de gran biodiversidad, que vincula, de cierta forma, la sierra con la selva de Perú.</p>
            </div>
        </div>
    </section>
</body>
</html>
