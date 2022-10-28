<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arequipa</title>
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
        <img src="https://www.ytuqueplanes.com/imagenes/fotos/regiones/RC-BANNER-INT-Arequipa.jpg" alt="" loading="lazy">
    </div>
    <div class="container2">
        <h1 class="titulo">Arequipa</h1>
        <p>Conocida como la Ciudad Blanca por su arquitectura esculpida en sillar, Arequipa resplandece favorecida por un clima siempre soleado todo el año y un cielo azul que te invitan a caminar y admirar la belleza de sus monumentos, nevados, volcanes y profundos cañones, además de disfrutar de su exquisita gastronomía y una vida nocturna que te animarán a regresar más de una vez. ¿Qué esperas? ¡Empecemos el viaje!</p>
    </div>
    <h5>Conoce los mejores lugares turísticos de Arequipa</h5>
    <section class="container3">
        <div class="card">
            <img src="https://www.ytuqueplanes.com/imagenes/fotos/destinos/banos-termales-yura_card.jpg" alt="">
            <h3>Baños Termales de Yura</h3>
            <div class="card-text">
                <p>Aguas sulfo-alcalinas templadas perfectas para relajarse. Tienen propiedades medicinales, que combaten enfermedades respiratorias, estomacales y más. Complejo de aguas termales ubicado en las faldas del volcán Chachani. Las pozas medicinales poseen una temperatura que fluctúa entre 29° C y 31 ° C. Baños termales: <br>
                •	Pozo Zamácola <br>
                •	Pozo el Tigre <br>
                •	Piscina Tadeo Haenke </p>
            </div>
        </div>
        <div class="card">
            <div class="card-image">
                <img src="https://www.ytuqueplanes.com/imagenes/fotos/destinos/campina-arequipa_card.jpg" alt="">
            </div>
            <h3>Campiña de Arequipa</h3>
            <div class="card-text">
                <p>A minutos de la ciudad, se encuentran las mejores vistas panorámicas. Resaltan los volcanes que rodean toda la zona, así como las espectaculares construcciones coloniales.</p>
            </div>
        </div>
        <div class="card">
            <div class="card-image">
                <img src="https://www.ytuqueplanes.com/imagenes/fotos/destinos/centro-arequipa_card.jpg" alt="">
            </div>
            <h3>Centro Histórico de Arequipa</h3>
            <div class="card-text">
                <p>Situada a las faldas de un volcán, es conocida como la Ciudad Blanca. Sus calles son muestra del arte colonial y resguardan grandes atractivos.</p>
            </div>
        </div>
    </section>
</body>
</html>
