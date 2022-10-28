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
        <img src="https://www.ytuqueplanes.com/imagenes/fotos/regiones/cajamarca-desktop.jpg" alt="" loading="lazy">
    </div>
    <div class="container2">
        <h1 class="titulo">Cajamarca</h1>
        <p>Cajamarca es una tierra donde la historia se une a la naturaleza para crear una experiencia inolvidable. Encuentra en esta región una magnífica arquitectura colonial, pueblos coloridos y una gastronomía digna de admirar. Relájate en los Baños del Inca, admira el Complejo Arqueológico de Cumbemayo y diviértete en sus carnavales llenos de vida y color. Definitivamente aquí lo pasarás bien!</p>
    </div>
    <h5>Conoce los mejores lugares turísticos de Cajamarca</h5>
    <section class="container3">
        <div class="card">
            <img src="https://www.ytuqueplanes.com/imagenes/fotos/destinos/complejo-cumbemayo_card.jpg" alt="">
            <h3>Complejo Arqueológico de Cumbemayo</h3>
            <div class="card-text">
                <p>Complejo de singular belleza, donde se mezcla el trabajo del hombre y la acción del tiempo. Está rodeado de un impresionante bosque de piedras.
Esta compuesto por el Acueducto (1300 a. C.), singular obra de ingeniería hidráulica; el denominado Santuario, farallón con apariencia de una gigantesca cabeza humana; y las Cuevas, donde existen grabados o petroglifos. Alrededor del complejo se puede apreciar un bosque de piedras con enormes figuras líticas llamadas Frailones, por su parecido a una procesión de frailes. Este impresionante lugar fue descubierto en el año de 1937.Se ubica a 20 km al suroeste de Cajamarca. <br>
</p>
            </div>
        </div>
        <div class="card">
            <div class="card-image">
                <img src="https://www.ytuqueplanes.com/imagenes/fotos/destinos/complejo-turistico-inca_card.jpg" alt="">
            </div>
            <h3>Complejo Turístico Baños del Inca</h3>
            <div class="card-text">
                <p>En estos baños las aguas tienen propiedades terapéuticas y a la vez ofrecen un hermoso paisaje natural, que alberga la famosa Poza del Inca. Se cree que Atahualpa llegaba hasta aquí para poder recuperar sus fuerzas. <br>
A 15 minutos de la ciudad de Cajamarca están los Baños del Inca. Los cronistas cuentan que en este lugar el inca Atahualpa recuperaba fuerzas después de los enfrentamientos de combate. Las aguas termales superan los 70 grados y poseen componentes minerales a los que se les atribuye propiedades medicinales. Cuenta con pozas de uso privado, piscinas al aire libre y otros servicios de tratamiento terapéutico.
</p>
            </div>
        </div>
        <div class="card">
            <div class="card-image">
                <img src="https://www.ytuqueplanes.com/imagenes/fotos/destinos/granja-porcon_card.jpg" alt="">
            </div>
            <h3>Granja Porcón</h3>
            <div class="card-text">
                <p>En la granja Porcón se puede alimentar animales o participar en actividades agrícolas. Sus 12.800 hectáreas son perfectas para la caminata o el paseo a caballo entre los bosques de pinos, quinuales y alisos. Si todavía hay energías, se puede realizar pesca artesanal y ciclismo. <br>
Está ubicada a 30 km al norte de Cajamarca. Los miembros de esta cooperativa han decidido abrir sus puertas al turismo, haciendo posible apreciar su forma de vida. La Granja Porcón reúne en un solo lugar el agroturismo, la naturaleza y el intercambio cultural.
</p>
            </div>
        </div>
    </section>
</body>
</html>
