<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lambayeque</title>
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
        <img src="https://www.ytuqueplanes.com/imagenes/fotos/regiones/lambayeque-desktop.jpg" alt="" loading="lazy">
    </div>
    <div class="container2">
        <h1 class="titulo">Lambayeque</h1>
        <p>Lambayeque es una regi??n pintoresca que tiene mucho por ofrecer: podr??s conocer la cultura de este pueblo no solo por sus monumentos hist??ricos como el Se??or de Sip??n, sus valles y pir??mides, sino tambi??n por su exquisita gastronom??a y la vida nocturna de su gente. Pasea a caballo por el Santuario Hist??rico de Bosques de P??mac, realiza actividades na??ticas en la laguna artificial del Reservorio de Tinajones y deja que sus playas te desconecten de la ciudad. ??Qu?? esperas para empezar este viaje?</p>
    </div>
    <h5>Conoce los mejores lugares tur??sticos de Lambayeque</h5>
    <section class="container3">
        <div class="card">
            <img src="https://www.ytuqueplanes.com/imagenes/images/noticias/Observando-el-Complejo-Arqueologico-de-Tucume-card.jpg" alt="">
            <h3>Complejo Arqueol??gico de T??cume</h3>
            <div class="card-text">
                <p>Se remonta a 700 a??os d.C. y seg??n la leyenda, fue fundado por Calac, descendiente de Naylamp. T??cume o el Valle de las Pir??mides, est?? conformado por 26 pir??mides entre las que destacan la Huaca del Pueblo, cerro La Raya y Huaca Las Balsas. Se ofrecen programas que incluyen, adem??s de la riqueza arqueol??gica, degustaciones gastron??micas, experiencias de curanderismo, medicina tradicional e intercambio cultural. El visitante tambi??n puede acceder al nuevo museo que expone en sus 3 salas m??s de mil objetos de cer??mica, metal y textiler??a. Hay que destacar que en T??cume la comunidad local est?? muy involucrada con la conservaci??n de su patrimonio natural y cultural.

</p>
            </div>
        </div>
        <div class="card">
            <div class="card-image">
                <img src="https://www.ytuqueplanes.com/imagenes/fotos/destinos/huaca-chotuna_card.jpg" alt="">
            </div>
            <h3>Complejo Arqueol??gico Huaca Chotuna - Chornancap</h3>
            <div class="card-text">
                <p>El complejo arqueol??gico de Chotuna Chornancap est?? relacionado con el origen de la cultura Lambayeque. Es decir, alrededor del a??o 700 de nuestra era. Est?? ubicado a 8.5 km al oeste de la ciudad de Lambayeque.
Huaca Chotuna: tiene una serie de pir??mides escalonadas que presentan decoraciones con relieve y pinturas, gran parte de ellas est??n sepultadas por dunas de arena. Huaca Chornancap: es una pir??mide trunca con planta en forma de T y una rampa central que conduce a la cima, en el centro del lado este.


</p>
            </div>
        </div>
        <div class="card">
            <div class="card-image">
                <img src="https://www.ytuqueplanes.com/imagenes/fotos/destinos/museo-sipan_card.jpg" alt="">
            </div>
            <h3>Museo de Sitio y Complejo Arqueol??gico Huaca Rajada - Sip??n</h3>
            <div class="card-text">
                <p>Uno de los hombres m??s poderosos del antiguo Per?? descansa aqu??, acompa??ado de impresionantes objetos de oro, cer??mica y m??s. Hallazgo que impact?? al mundo.
El Complejo Arqueol??gico de Sip??n, tambi??n conocido como Huaca Rajada, cuenta con un Museo de Sitio que alberga las piezas arqueol??gicas encontradas en el mismo lugar. Asimismo, el Museo Tumbas Reales de Sip??n, en la ciudad de Lambayeque, exhibe la osamenta, las joyas y cer??micas, entre otros vestigios arqueol??gicos encontrados en la tumba.

</p>
            </div>
        </div>
    </section>
</body>
</html>

