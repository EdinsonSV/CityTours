<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lima</title>
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
        <img src="https://www.ytuqueplanes.com/imagenes/fotos/regiones/lima-desktop.jpg" alt="" loading="lazy">
    </div>
    <div class="container2">
        <h1 class="titulo">Lima</h1>
        <p>Recorrer las calles de Lima es admirar sus iglesias, sitios arqueológicos y casonas con balcones que conviven con modernos edificios. Lima también ofrece una gran variedad de espectáculos culturales y es reconocida en el mundo por ser la Capital Gastronómica de Latinoamérica. Su cocina que se ha nutrido de tradiciones andinas, europeas, africanas y orientales, y en sus restaurantes se pueden disfrutar las cocinas regionales del Perú. Lima tiene el privilegio de ser la única capital de Sudamérica ubicada a orillas del mar. Por eso, les ofrece a los turistas comenzar o terminar el día en caminatas o paseos en bicicleta por sus malecones. Lima, un amor a primera vista para los que desean vivir una experiencia única.</p>
    </div>
    <h5>Conoce los mejores lugares turísticos de Lima</h5>
    <section class="container3">
        <div class="card">
            <img src="https://www.ytuqueplanes.com/imagenes/fotos/destinos/reserva-yauyos_card.jpg" alt="">
            <h3>Reserva Paisajística Nor Yauyos Cochas</h3>
            <div class="card-text">
                <p>Es una de las zonas de mayor belleza escénica de Perú, con míticos nevados, lagunas de aguas turquesas y cristalinas, caídas de agua, profundos cañones y más.

</p>
            </div>
        </div>
        <div class="card">
            <div class="card-image">
                <img src="https://www.ytuqueplanes.com/imagenes/fotos/destinos/playas-del-sur_card.jpg" alt="">
            </div>
            <h3>Playas del sur de Lima</h3>
            <div class="card-text">
                <p>Playas llenas de arena y grandes olas, que las convierten en un encanto natural que cautiva. Desde Punta Hermosa hasta Cerro Azul, la costa limeña se deleita, sobre todo en verano.

</p>
            </div>
        </div>
        <div class="card">
            <div class="card-image">
                <img src="https://www.ytuqueplanes.com/imagenes/fotos/destinos/lurin-pachacamac_card.jpg" alt="">
            </div>
            <h3>Lurín y Pachacámac</h3>
            <div class="card-text">
                <p>Es uno de los valles de Lima que posee un importante centro arqueológico y un circuito ecoturístico que te conecta con la naturaleza.
</p>
            </div>
        </div>
    </section>
</body>
</html>

