
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
        <img src="https://www.ytuqueplanes.com/imagenes/fotos/regiones/RC-BANNER-INT-ApurImac.jpg" alt="" loading="lazy">
    </div>
    <div class="container2">
        <h1 class="titulo">Apur??mac</h1>
        <p>Hacer parapente en S??ndor, canotaje en el r??o Pachachaca y downhill en bicicleta son algunas de las actividades que podr??as disfrutar durante tu estad??a en la regi??n de Apur??mac, considerada como el perfecto escenario de los deportes de aventura. Y si lo tuyo es relajarte, no te preocupes, que los ba??os termales como Cconoc y sitios arqueol??gicos como el Conjunto Arqueol??gico de Saywite y el Complejo Arqueol??gico S??ndor te dar??n una experiencia ??nica. Definitivamente, Apur??mac es un lugar que no puedes dejar de visitar.</p>
    </div>
    <h5>Conoce los mejores lugares tur??sticos de Apur??mac</h5>
    <section class="container3">
        <div class="card">
            <img src="https://www.ytuqueplanes.com/imagenes/fotos/destinos/banos-termales-cconoc_card.jpg" alt="">
            <h3>Ba??os Termales de Cconoc</h3>
            <div class="card-text">
                <p>Un lugar ideal para el relajamiento y donde los poderes medicinales se hacen realidad gracias a sus c??lidas aguas, las cuales provienen del r??o Apur??mac. En sus alrededores hay algarrobos, carrizales y cactus. Un relajante ba??o al pie del r??o Apur??mac, rodeado de algarrobos, carrizales y cactus. Por sus propiedades qu??micas, las aguas de estos ba??os curan la artritis, dolores musculares y reumatismo, entre otros. Sus aguas son inodoras, incoloras y de agradable sabor salino.</p>
            </div>
        </div>
        <div class="card">
            <div class="card-image">
                <img src="https://www.ytuqueplanes.com/imagenes/fotos/destinos/bosque-piedras-pampachiri_card.jpg" alt="">
            </div>
            <h3>Bosque de Piedras de Pampachiri</h3>
            <div class="card-text">
                <p>Impresionante formaci??n natural de rocas de gran tama??o, con diversas formas y colores. Incre??ble visi??n que transmite diferentes sensaciones.</p>
            </div>
        </div>
        <div class="card">
            <div class="card-image">
                <img src="https://www.ytuqueplanes.com/imagenes/fotos/destinos/canon-apurimac_card.jpg" alt="">
            </div>
            <h3>Ca????n del Apur??mac</h3>
            <div class="card-text">
                <p>Es uno de los m??s profundos de Am??rica y del mundo. La honda quebrada, en la ruta Abancay-Cusco, es un excelente lugar para observar su gran belleza. Sus paisajes son inolvidables porque tiene flora y fauna propia en sus diversos pisos ecol??gicos. Para su formaci??n, las aguas del r??o Apur??mac bajan con fuerza desde los 5 000 m s.n.m a una gigantesca garganta. Producto de este choque colosal se crea un paisaje que impresiona. El r??o es ideal para practicar canotaje y cuenta con r??pidos de categor??a II y IV.</p>
            </div>
        </div>
    </section>
</body>
</html>
