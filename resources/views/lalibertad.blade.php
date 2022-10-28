<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>La Libertad</title>
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
        <img src="https://www.ytuqueplanes.com/imagenes/fotos/regiones/la-libertad-desktop.jpg" alt="" loading="lazy">
    </div>
    <div class="container2">
        <h1 class="titulo">La Libertad</h1>
        <p>Visita la ciudad de barro de Chan Chan, templos, pirámides y huacas. Vive una experiencia inolvidable en La Libertad por Semana Santa.</p>
    </div>
    <h5>Conoce los mejores lugares turísticos de La Libertad</h5>
    <section class="container3">
        <div class="card">
            <img src="https://www.ytuqueplanes.com/imagenes/fotos/destinos/complejo-chan-chan_card.jpg" alt="">
            <h3>Complejo Arqueológico Chan Chan</h3>
            <div class="card-text">
                <p>Es uno de los sitios arqueológicos más importantes de Perú y la ciudad de barro más grande América. Su complejidad arquitectónica maravilla al mundo.
Chan Chan fue el principal centro del reino Chimú y es la ciudad prehispánica de barro más grande de América. Estaba conformada por calles, murallas y templos piramidales. Aun se pueden apreciar sus majestuosos muros decorados con relieves de figuras geométricas y seres zoomorfos. Cuenta con un museo de sitio y fue declarada Patrimonio Cultural de la Humanidad.
Atención de la ciudadela L - D: 9:00 – 16:00 h / Museo de sitio Mar - D: 9:00 – 16:00 h.

</p>
            </div>
        </div>
        <div class="card">
            <div class="card-image">
                <img src="https://www.ytuqueplanes.com/imagenes/fotos/destinos/complejo-el-brujo_card.jpg" alt="">
            </div>
            <h3>Complejo arqueológico El Brujo</h3>
            <div class="card-text">
                <p>Alberga miles de años de historia. Su territorio lo dominó una mujer conocida como la Dama de Cao. Los restos de la gobernante se conservan en el complejo.
Consta de dos grandes edificaciones del periodo Moche (Huaca Cao Viejo y Huaca Cortada) y un montículo pre cerámico de 14 mil años de antigüedad (Huaca Prieta). De ellas, la Huaca Cao Viejo, un templo del periodo Mochica de más de 30 m de altura, conserva aún en sus muros imágenes en relieve policromado y representaciones marinas.

</p>
            </div>
        </div>
        <div class="card">
            <div class="card-image">
                <img src="https://www.ytuqueplanes.com/imagenes/fotos/destinos/515x7509261.jpg" alt="">
            </div>
            <h3>Complejo Arqueológico Huacas de Moche</h3>
            <div class="card-text">
                <p>Este complejo arqueológico está formado por la Huaca del Sol que funcionó como centro político y administrativo, y por la Huaca de la Luna que fue un centro ceremonial. Entre ambas, se ubica la zona urbana compuesta por: viviendas, grandes avenidas, callejones, corredores y plazas. Estas construcciones confirman la alta organización política, religiosa, económica y social de los Moches.
En la Huaca de la Luna encontramos templos superpuestos de acuerdo a distintas etapas del poderío mochica. En algunas paredes se observan hermosos murales polícromos con figuras que representan al dios Ai-apaec. En el templo, los arqueólogos han descubierto una tumba con más de 40 guerreros sacrificados.
</p>
            </div>
        </div>
    </section>
</body>
</html>

