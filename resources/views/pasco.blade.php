<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pasco</title>
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
        <img src="https://www.ytuqueplanes.com/imagenes/fotos/regiones/pasco-desktop.jpg" alt="" loading="lazy">
    </div>
    <div class="container2">
        <h1 class="titulo">Pasco</h1>
        <p>Pasco es un lugar donde los contrastes son la base de todo: sierra y selva se unen para crear una cadena de frías montañas y mucha vegetación que te permitirán realizar desde deportes de aventura en los circuitos del Bosque de Piedras de Huayllay, relajarte en los baños termales de la Calera, hasta las cataratas que le dan pase a la exuberante selva central. Empieza a planear tu viaje y disfruta de todo lo que Pasco tiene para ofrecer.</p>
    </div>
    <h5>Conoce los mejores lugares turísticos de Pasco</h5>
    <section class="container3">
        <div class="card">
            <img src="https://www.ytuqueplanes.com/imagenes/fotos/destinos/santuario-huayllay_card.jpg" alt="">
            <h3>Santuario Nacional de Huayllay</h3>
            <div class="card-text">
                <p>La principal atracción es la forma de animales que tienen varias de las rocas en el lugar. Este conjunto de formaciones de piedra (de todos los tamaños) se encuentra en medio de la planicie más alta del país, la meseta de Bombón. La zona posee además numerosos vestigios arqueológicos, como las pinturas rupestres diseminadas en toda el área, las cuales suman más de 500 y dan cuenta de una antigua relación entre el hombre y este singular ecosistema. Enriquecen el paisaje varias hermosas lagunas y fuentes de aguas termales.
</p>
            </div>
        </div>
        <div class="card">
            <div class="card-image">
                <img src="https://www.ytuqueplanes.com/imagenes/fotos/destinos/oxapamapa_card.jpg" alt="">
            </div>
            <h3>Oxapampa</h3>
            <div class="card-text">
                <p>Provincia de Pasco con gran influencia austro-alemana, posee grandiosa arquitectura de estilo europeo e impresionantes atractivos naturales.

</p>
            </div>
        </div>
        <div class="card">
            <div class="card-image">
                <img src="https://www.ytuqueplanes.com/imagenes/fotos/destinos/pozuzo_card.jpg" alt="">
            </div>
            <h3>Pozuzo</h3>
            <div class="card-text">
                <p>Construido con patrones arquitectónicos de los países originales, por lo que las casas están formadas por plantas geométricas, pisos de madera y techos a dos aguas.
Tiene una gran influencia austro-alemana visible en su arquitectura. Un valle que cautiva con sus paisajes y clima caluroso. Construido con patrones arquitectónicos de los países originales, por lo que las casas están formadas por plantas geométricas, pisos de madera y techos a dos aguas. Los pobladores se caracterizan por sus valores culturales europeos, ofreciendo al visitante confianza y hospitalidad. Su clima es agradable y ofrece un paisaje pintoresco a la ciudad, reconocidos por su producción ganadera, también elaboran atractivos collares, cuadros, textiles, calzados y bordados.

</p>
            </div>
        </div>
    </section>
</body>
</html>

