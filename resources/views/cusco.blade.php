<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cusco</title>
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
        <img src="https://www.ytuqueplanes.com/imagenes/fotos/regiones/cusco-desktop.jpg" alt="" loading="lazy">
    </div>
    <div class="container2">
        <h1 class="titulo">Cusco</h1>
        <p>No existe una forma sencilla de explicar la majestuosidad que representa el Cusco. Esta regi??n re??ne historia, modernidad y aventura con una m??stica que envuelve desde la plaza de armas cusque??a hasta los lugares m??s alejados de ella. Ll??nate de energ????a en Moray, descubre la impresionante arquitectura de Ollantaytambo y Pisac y si??ntete un poco m??s cerca del cielo en la ciudadela inca de Machu Picchu. Y no solo eso: el ombligo del mundo tambi??n est?? lleno de arte contempor??neo, una vida nocturna de lunes a domingo y para los m??s aventureros, un bungee jumping que asegura la adrenalina pura.</p>
    </div>
    <h5>Conoce los mejores lugares tur??sticos de Cusco</h5>
    <section class="container3">
        <div class="card">
            <img src="https://www.ytuqueplanes.com/imagenes/fotos/destinos/camino-inca-machupiccchu_card.jpg" alt="">
            <h3>Camino Inca a Machupicchu</h3>
            <div class="card-text">
                <p>Esta incre??ble ruta forma parte de la red del Qhapaq ??an. Por eso, recorrer el Camino Inca es observar las estaciones del a??o en pocos d??as: de un frio moderado a uno extremo, de una temperatura templada a un calor intenso. La ruta que parte de Cusco es un reto para los aventureros, y como un premio a su esfuerzo es llegar a Machu Picchu en un m??gico amanecer, cuando los rayos solares bajan de las monta??as para dejar ver la armon??a entre el hombre y la naturaleza.<br>
</p>
            </div>
        </div>
        <div class="card">
            <div class="card-image">
                <img src="https://www.ytuqueplanes.com/imagenes/fotos/destinos/CircuitodelbarrocoandinoCARD.jpg" alt="">
            </div>
            <h3>Circuito del Barroco Andino</h3>
            <div class="card-text">
                <p>En el corredor sur del Cusco, a solo 41,4 km (1 hora en auto), se encuentra ???La ruta del Barroco Andino???, un recorrido por las iglesias emblem??ticas de la ??poca colonial. La ruta incluye la visita a dos templos y una capilla que, por sus cualidades excepcionales, han sido declarados monumentos patrimoniales de los siglos XVII y XVIII:
-San Pedro Ap??stol de Andahuaylillas.
-San Juan Bautista de Huaro.
-La capilla de la Virgen de la Candelaria de Canincunca.
 <br>
</p>
            </div>
        </div>
        <div class="card">
            <div class="card-image">
                <img src="https://www.ytuqueplanes.com/imagenes/fotos/destinos/Parque-Arqueol%C3%B3gico-de-ChoquequiraoCARD.jpg" alt="">
            </div>
            <h3>Parque Arqueol??gico de Choquequirao</h3>
            <div class="card-text">
                <p>Su nombre significa ???cuna de oro??? en espa??ol y fue uno de los ??ltimos reductos de los incas en el valle de Vilcabamba, donde se refugiaron a partir de 1536. El parque se encuentra ubicado a 3033 msnm en lo alto de una verde monta??a, este lugar impresiona por la majestuosidad de la arquitectura Inca con andenes, plazas, recintos, grandes muros con hornacinas y otras construcciones. Debido a su rica flora y fauna, Choquequirao es considerada un ??rea de Conservaci??n Regional por el Sistema Nacional de ??reas Protegidas por el Estado (SERNANP), con una extensi??n de 103,814.39 hect??reas. <br>
</p>
            </div>
        </div>
    </section>
</body>
</html>
