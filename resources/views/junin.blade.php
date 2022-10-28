<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Junín</title>
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
        <img src="https://www.ytuqueplanes.com/imagenes/fotos/regiones/junin-desktop.jpg" alt="" loading="lazy">
    </div>
    <div class="container2">
        <h1 class="titulo">Junín</h1>
        <p>Cataratas y valles con paisajes en su estado más puro, pueblos con profunda vocación religiosa y una reserva nacional con animales del ande son algunas de las muchas características que envuelven a Junín y la convierten en una región llena de sorpresas. Atrévete a ir más allá ¡ y realiza deportes de aventura como el canotaje en el río Chanchamayo o trekking en el nevado de Huaytapallana. ¡No te pierdas de todo esto y planea tu viaje ya!</p>
    </div>
    <h5>Conoce los mejores lugares turísticos de Junín</h5>
    <section class="container3">
        <div class="card">
            <img src="https://www.ytuqueplanes.com/imagenes/fotos/destinos/card-reserva-naciona-junin.jpg" alt="">
            <h3>Reserva Nacional de Junín</h3>
            <div class="card-text">
                <p>Esta maravilla, que se encuentra en los Andes centrales, tiene una extensión de 53 mil hectáreas. La mayor parte de su superficie se encuentra ocupada por el lago Junín, llamada también Chinchaycocha o de los Reyes y pequeñas lagunas de Lulicocha, Chacacancha, Tauli, Cusicocha, Ahuascocha y Rusquicocha. La reserva tiene el objetivo la conservación de la flora y fauna silvestre del lago Junín (el segundo más grande del Perú). Se caracteriza por albergar 149 especies de aves, entre ellas 28 especies migratorias y 5 especies endémicas.
</p>
            </div>
        </div>
        <div class="card">
            <div class="card-image">
                <img src="https://www.ytuqueplanes.com/imagenes/fotos/destinos/chanchamayo_card.jpg" alt="">
            </div>
            <h3>Chanchamayo</h3>
            <div class="card-text">
                <p>Un lugar de la selva central del Perú con innumerables cataratas de aguas cristalinas. Los granos de café que se cultivan en este destino de Junín se encuentran entre los mejores del mundo.
</p>
            </div>
        </div>
        <div class="card">
            <div class="card-image">
                <img src="https://www.ytuqueplanes.com/imagenes/fotos/destinos/tarma_card.jpg" alt="">
            </div>
            <h3>Tarma</h3>
            <div class="card-text">
                <p>Tierra de reconocidos artesanos, bellos paisajes, grandes grutas y lagunas altoandinas, se le conoce como "La Perla de los Andes".</p>
            </div>
        </div>
    </section>
</body>
</html>

