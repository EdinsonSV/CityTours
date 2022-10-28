<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tumbes</title>
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
        <img src="https://www.ytuqueplanes.com/imagenes/fotos/regiones/tumbes-desktop.jpg" alt="" loading="lazy">
    </div>
    <div class="container2">
        <h1 class="titulo">Tumbes</h1>
        <p>Nada mejor que empezar el día en la arena de grano fino de Punta Sal o caminando entre esteros y manglares. Tumbes es el lugar indicado para los que buscan relajarse y conectarse con la naturaleza. Deléitate con el mejor cebiche de conchas negras, visita la playa Zorritos, el Zoocriadero de cocodrilos en Puerto Pizarro y descubre por que Tumbes es un pueblo con identidad. ¿Viste que es un destino obligado? Planea tu viaje ya.</p>
    </div>
    <h5>Conoce los mejores lugares turísticos de Tumbes</h5>
    <section class="container3">
        <div class="card">
            <img src="https://www.ytuqueplanes.com/imagenes/fotos/destinos/manglares-puerto-pizarro_card.jpg" alt="">
            <h3>Manglares e Islas de Puerto Pizarro</h3>
            <div class="card-text">
                <p>Ecosistema peculiar que sorprende por su belleza paisajística. Posee diversas islas con hermosas playas. Además, alberga diversidad de aves y moluscos.
Durante el recorrido se puede desembarcar en la isla del Amor y también en la isla Hueso de Ballena. Ambas tienen las playas más importantes de la zona porque son el refugio de una gran variedad de aves. En la isla Los Pájaros, los árboles se pintan del color de las aves Fragatas, sobre todo al atardecer.
Los manglares de Puerto Pizarro son célebres por sus conchas negras y moluscos que, además de rico sabor, ofrecen cualidades afrodisiacas. Los manglares también son conocidos por ser el zoocriadero de cocodrilos tumbesinos, especie única en el Perú.
</p>
            </div>
        </div>
        <div class="card">
            <div class="card-image">
                <img src="https://www.ytuqueplanes.com/imagenes/fotos/destinos/parque-nacional-amotape_card.jpg" alt="">
            </div>
            <h3>Parque Nacional Cerros de Amotape</h3>
            <div class="card-text">
                <p>Su diversa geografía combina el bosque seco tropical con las colinas de la cordillera norperuana o cerros Amotapes. Reúne una gran diversidad biológica como el algarrobo, el hualtaco, el charán, el sapote, el pasallo y el guayacán.
La fauna silvestre es variada y comprende especies representativas del bosque tropical, de zonas áridas y de la cordillera de los Andes como el cóndor andino, el tigrillo, el venado rojo, el sajino, el oso hormiguero norteño, el oso de anteojos, el venado gris, la ardilla de nuca blanca y el loro cabeza roja.
</p>
            </div>
        </div>
        <div class="card">
            <div class="card-image">
                <img src="https://www.ytuqueplanes.com/imagenes/fotos/destinos/santuario-manglares-tumbes_card.jpg" alt="">
            </div>
            <h3>Santuario Nacional Los Manglares de Tumbes</h3>
            <div class="card-text">
                <p>Hermoso ecosistema y refugio de diversas especies. De un clima cálido y seco, posee cinco especies de mangle y cuatro islas. Sus impresionantes paisajes son uno de sus principales atractivos.
Esta área tiene una impresionante biodiversidad representada por más de 148 especies de aves, 41 de plantas, 135 de peces, 16 de crustáceos y 74 de moluscos, entre los que destacan las conchas negras y el cangrejo rojo del manglar, especies emblemáticas de la región Tumbes.
También se puede desembarcar en Punta Capones, considerada la primera playa del norte del Perú.
</p>
            </div>
        </div>
    </section>
</body>
</html>
