<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Amazonas</title>
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
            justify-content: center;
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
        <img src="https://www.ytuqueplanes.com/imagenes/images/amazonas-desk.jpg" alt="" loading="lazy">
    </div>
    <div class="container2">
        <h1 class="titulo">Amazonas</h1>
        <p>Bosques de neblina y páramos con privilegiados microclimas te dan la bienvenida a un departamento donde la historia y la naturaleza están en su máxima expresión. Descubre en Amazonas imponentes paisajes, una flora y fauna envidiable y encuentra en cada una de sus estructuras arquitectónicas, como la enigmática ciudadela de Kuélap, y sus misteriosas tumbas y sarcófagos, un relato diferente.</p>
    </div>
    <h5>Conoce los mejores lugares turísticos de Amazonas</h5>
    <section class="container3">
        <div class="card">
            <img src="https://www.ytuqueplanes.com/imagenes/fotos/destinos/area-abra-patricia_card.jpg" alt="">
            <h3>Área de Conservación Privada Abra Patricia</h3>
            <div class="card-text">
                <p>Situada en el interior de una cadena de bosques montañosos, resguarda diversidad de orquídeas y especies endémicas del Perú, como la lechucita bigotona.</p>
            </div>
        </div>
        <div class="card">
            <div class="card-image">
                <img src="https://www.ytuqueplanes.com/imagenes/fotos/destinos/catarata-gocta_card.jpg" alt="">
            </div>
            <h3>Catarata de Gocta</h3>
            <div class="card-text">
                <p>Esta catarata cae contundente, tiene más de 700 m de altura y la convierte en una de las cataratas más altas del mundo. Cerca a esta maravilla de la naturaleza, habitan 110 especies de aves y una gran diversidad de mamíferos.</p>
            </div>
        </div>
        <div class="card">
            <div class="card-image">
                <img src="https://www.ytuqueplanes.com/imagenes/fotos/destinos/caverna-quiocta_card.jpg" alt="">
            </div>
            <h3>Caverna de Quiocta</h3>
            <div class="card-text">
                <p>Esta profunda caverna (600 m de longitud) alberga pinturas rupestres y restos óseos. Además, sorprenden las estalactitas y estalagmitas que se hallan en su interior. Fue declarada Patrimonio Cultural de la Nación en el 2003.</p>
            </div>
        </div>
    </section>
</body>
</html>
