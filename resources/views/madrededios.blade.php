<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Madre de Dios</title>
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
        <img src="https://www.ytuqueplanes.com/imagenes/fotos/regiones/madre-de-dios-desktop.jpg" alt="" loading="lazy">
    </div>
    <div class="container2">
        <h1 class="titulo">Madre de Dios</h1>
        <p>Madre de Dios alberga bosques infinitos, ríos sinuosos y abundante vida natural. Es reserva de flora y fauna, así¬ como, refugio de especies en peligro de extinción como el lobo de crin y el ciervo de los pantanos.</p>
    </div>
    <h5>Conoce los mejores lugares turísticos de Madre de Dios</h5>
    <section class="container3">
        <div class="card">
            <img src="https://www.ytuqueplanes.com/imagenes/fotos/destinos/parque-manu_card.jpg" alt="">
            <h3>Parque Nacional del Manu</h3>
            <div class="card-text">
                <p>Por su diversidad y riqueza biológica fue reconocido como Patrimonio Natural de la Humanidad en 1987, y anteriormente (1977), la UNESCO lo reconoció como zona núcleo de la Reserva de Biosfera.
El Parque Nacional del Manu es un espacio natural y protegido para avistar aves como el ganso del Orinoco, el quetzal de cabeza dorada, jacamar de garganta blanca, el tucán andino, el gallito de las rocas (ave nacional del Perú), entre otras.
El Manu protege también al 10% de las especies vegetales en el mundo. Una sola hectárea de la selva en el Manu puede albergar más de 220 especies de árboles, 1 000 especies de aves, 1 200 mariposas y 200 mamíferos.


</p>
            </div>
        </div>
        <div class="card">
            <div class="card-image">
                <img src="https://www.ytuqueplanes.com/imagenes/fotos/destinos/reserva-tambopata_card.jpg" alt="">
            </div>
            <h3>Reserva Nacional de Tambopata</h3>
            <div class="card-text">
                <p>Este destino es uno de los lugares paradisiacos del Perú. Cuenta con un gran índice de diversidad biológica en el mundo. ¡Naturaleza en todo su esplendor!

</p>
            </div>
        </div>
        <div class="card">
            <div class="card-image">
                <img src="https://www.ytuqueplanes.com/imagenes/fotos/destinos/ciudad-puerto-maldonado_card.jpg" alt="">
            </div>
            <h3>Puerto Maldonado</h3>
            <div class="card-text">
                <p>Algunos la han bautizado como la capital de la selva sur, porque tiene un brillo propio que solo las ciudades de esa zona poseen. Está llena de hermosos paisajes y diversidad de especies a sus alrededores.
</p>
            </div>
        </div>
    </section>
</body>
</html>

