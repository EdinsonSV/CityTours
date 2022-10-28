
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Áncash</title>
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
        <img src="https://www.ytuqueplanes.com/imagenes/fotos/regiones/ancash-desktop.jpg" alt="" loading="lazy">
    </div>
    <div class="container2">
        <h1 class="titulo">Áncash</h1>
        <p>En Áncash encontrarás nevados, lagunas, valles y playas que te impresionarán. Aventúrate a probar los circuitos de trekking (caminata), recorre su geografía en bicicleta de montaña, disfruta de la naturaleza, hermosas lagunas y nevados que cautivarán tus sentidos. Una infinidad de posibilidades te esperan. Disfruta de sus fiestas y mira cómo se llenan de color las calles de esta ciudad que recoge la tradición y el presente de sus habitantes. ¿Quieres vivir esta aventura?</p>
    </div>
    <h5>Conoce los mejores lugares turísticos de Áncash</h5>
    <section class="container3">
        <div class="card">
            <img src="https://www.ytuqueplanes.com/imagenes/fotos/destinos/callejon-huaylas_card.jpg" alt="">
            <h3>Callejón de Huaylas</h3>
            <div class="card-text">
                <p>Está compuesto por magníficos pueblos a lo largo de los 180 km de valle interandino que forma. Inicia en la Laguna Conococha a 4100 m s. n. m. y termina en el Cañón del Pato. Además, presenta diversidad de microclimas. Destino ideal para la práctica del andinismo, deportes de montaña, excursiones y observadores de la biodiversidad andina. También nos invita a conocer su pasado milenario como centro de turismo cultural arqueológico. El Callejón de Huaylas tiene como escenario un estrecho valle interandino de aproximadamente 180 km de longitud (desde Cátac hasta Huallanca).</p>
            </div>
        </div>
        <div class="card">
            <div class="card-image">
                <img src="https://www.ytuqueplanes.com/imagenes/fotos/destinos/casma_card.jpg" alt="">
            </div>
            <h3>Casma</h3>
            <div class="card-text">
                <p>Pueblo que resguarda increíbles monumentos arqueológicos como: Sechín, Las Aldas y Chankillo.Además, sus playas son otro de los principales atractivos, resaltan: Tortugas, Huaro y Gramita.</p>
            </div>
        </div>
        <div class="card">
            <div class="card-image">
                <img src="https://www.ytuqueplanes.com/imagenes/fotos/destinos/chacas_card.jpg" alt="">
            </div>
            <h3>Chacas</h3>
            <div class="card-text">
                <p>Tierra de hermosas lagunas de aguas cristalinas, donde además se encuentra el túnel más alto de esta parte del mundo. También cuenta con varios museos, que muestran el arte de este gran pueblo.</p>
            </div>
        </div>
    </section>
</body>
</html>
