<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ayacucho</title>
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
        <img src="https://www.ytuqueplanes.com/imagenes/fotos/regiones/RC-BANNER-INT-Ayacucho.jpg" alt="" loading="lazy">
    </div>
    <div class="container2">
        <h1 class="titulo">Ayacucho</h1>
        <p>Ayacucho es naturaleza y fiesta. Recorre sus casonas e iglesias coloniales como la Catedral y el templo de Santo Domingo; disfruta de sus fiestas llenas de color y divi??rtete en Semana Santa con un pueblo arraigado en su fe. Conoce la tradici??n alfarera de la mano de sus artesanos y deja que sus paisajes de desbordada naturaleza viva te desconecten. Ayacucho, un lugar que merece ser recorrido en su totalidad, te espera.</p>
    </div>
    <h5>Conoce los mejores lugares tur??sticos de Ayacucho</h5>
    <section class="container3">
        <div class="card">
            <img src="https://www.ytuqueplanes.com/imagenes/fotos/destinos/area-abra-patricia_card.jpg" alt="">
            <h3>Bosque de Puyas de Raimondi (Titankayocc)</h3>
            <div class="card-text">
                <p>Titankayocc es el bosque de Puyas de Raimondi m??s extenso que existe. Se estima que alberga unas 250 mil, sobre todo en el p??ramo o puna. Tiene un ??rea de 1200 ha. <br>
Esta bromeli??cea conocida como Titanka tiene un gran valor ecol??gico, ya que posee la inflorescencia m??s grande del reino vegetal, y su tama??o oscila entre los 4 y 6 metros. <br>
La Puya Raimondi es una majestuosa planta que crece en las alturas superiores a los 3 mil metros sobre el nivel del mar y puede alcanzar los 10 metros de altura.
</p>
            </div>
        </div>
        <div class="card">
            <div class="card-image">
                <img src="https://www.ytuqueplanes.com/imagenes/fotos/destinos/catarata-gocta_card.jpg" alt="">
            </div>
            <h3>Cataratas de Pumapaqcha, Bat??n y Qorimaqma</h3>
            <div class="card-text">
                <p>Cataratas m??ticas donde se hacen rituales a los dioses y esp??ritus andinos. La tradici??n popular cuenta que tienen una alta concentraci??n de energ??a positiva y magn??tica. <br>
Est??n ubicadas en paralelo a la carretera que va a Cangallo. En la traves??a se pueden contemplar tres hermosas ca??das de agua en los r??os de Chankil y Macromayo. <br>
Por su m??gica belleza son lugares propicios para realizar rituales a los dioses y esp??ritus andinos. Se dice que tienen una alta concentraci??n de energ??a positiva y magn??tica.
</p>
            </div>
        </div>
        <div class="card">
            <div class="card-image">
                <img src="https://www.ytuqueplanes.com/imagenes/fotos/destinos/caverna-quiocta_card.jpg" alt="">
            </div>
            <h3>Complejo arqueol??gico de Wari</h3>
            <div class="card-text">
                <p>Anterior a los Incas, Wari es un ejemplo de planificaci??n urbana. En este complejo se pueden palpar las huellas que nos dejaron los antiguos ingenieros, guerreros y artesanos del Per??. <br>
Es uno de los centros urbanos m??s grandes del antiguo Per??. Sus edificaciones retan al tiempo y son una muestra del avance tecnol??gico de la cultura Wari, que floreci?? entre los siglos VI y XI d. C. <br>
Ocupa un ??rea aproximada de 2.200 hect??reas. El complejo est?? dividido en sectores conformados por construcciones en piedra y barro, revestidos de un fino enlucido y cuenta con un sistema de agua y desag??e subterr??neos. La mayor parte de las construcciones se encuentran enterradas.
</p>
            </div>
        </div>
    </section>
</body>
</html>
