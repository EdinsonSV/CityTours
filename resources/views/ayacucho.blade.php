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
        <p>Ayacucho es naturaleza y fiesta. Recorre sus casonas e iglesias coloniales como la Catedral y el templo de Santo Domingo; disfruta de sus fiestas llenas de color y diviértete en Semana Santa con un pueblo arraigado en su fe. Conoce la tradición alfarera de la mano de sus artesanos y deja que sus paisajes de desbordada naturaleza viva te desconecten. Ayacucho, un lugar que merece ser recorrido en su totalidad, te espera.</p>
    </div>
    <h5>Conoce los mejores lugares turísticos de Ayacucho</h5>
    <section class="container3">
        <div class="card">
            <img src="https://www.ytuqueplanes.com/imagenes/fotos/destinos/area-abra-patricia_card.jpg" alt="">
            <h3>Bosque de Puyas de Raimondi (Titankayocc)</h3>
            <div class="card-text">
                <p>Titankayocc es el bosque de Puyas de Raimondi más extenso que existe. Se estima que alberga unas 250 mil, sobre todo en el páramo o puna. Tiene un área de 1200 ha. <br>
Esta bromeliácea conocida como Titanka tiene un gran valor ecológico, ya que posee la inflorescencia más grande del reino vegetal, y su tamaño oscila entre los 4 y 6 metros. <br>
La Puya Raimondi es una majestuosa planta que crece en las alturas superiores a los 3 mil metros sobre el nivel del mar y puede alcanzar los 10 metros de altura.
</p>
            </div>
        </div>
        <div class="card">
            <div class="card-image">
                <img src="https://www.ytuqueplanes.com/imagenes/fotos/destinos/catarata-gocta_card.jpg" alt="">
            </div>
            <h3>Cataratas de Pumapaqcha, Batán y Qorimaqma</h3>
            <div class="card-text">
                <p>Cataratas míticas donde se hacen rituales a los dioses y espíritus andinos. La tradición popular cuenta que tienen una alta concentración de energía positiva y magnética. <br>
Están ubicadas en paralelo a la carretera que va a Cangallo. En la travesía se pueden contemplar tres hermosas caídas de agua en los ríos de Chankil y Macromayo. <br>
Por su mágica belleza son lugares propicios para realizar rituales a los dioses y espíritus andinos. Se dice que tienen una alta concentración de energía positiva y magnética.
</p>
            </div>
        </div>
        <div class="card">
            <div class="card-image">
                <img src="https://www.ytuqueplanes.com/imagenes/fotos/destinos/caverna-quiocta_card.jpg" alt="">
            </div>
            <h3>Complejo arqueológico de Wari</h3>
            <div class="card-text">
                <p>Anterior a los Incas, Wari es un ejemplo de planificación urbana. En este complejo se pueden palpar las huellas que nos dejaron los antiguos ingenieros, guerreros y artesanos del Perú. <br>
Es uno de los centros urbanos más grandes del antiguo Perú. Sus edificaciones retan al tiempo y son una muestra del avance tecnológico de la cultura Wari, que floreció entre los siglos VI y XI d. C. <br>
Ocupa un área aproximada de 2.200 hectáreas. El complejo está dividido en sectores conformados por construcciones en piedra y barro, revestidos de un fino enlucido y cuenta con un sistema de agua y desagüe subterráneos. La mayor parte de las construcciones se encuentran enterradas.
</p>
            </div>
        </div>
    </section>
</body>
</html>
