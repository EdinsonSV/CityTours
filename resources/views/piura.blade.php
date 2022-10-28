<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Piura</title>
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
        <img src="https://www.ytuqueplanes.com/imagenes/fotos/regiones/piura-desktop.jpg" alt="" loading="lazy">
    </div>
    <div class="container2">
        <h1 class="titulo">Piura</h1>
        <p>En Piura, la tierra del verano eterno, encuentras balnearios y playas que son las favoritas de los surfistas: Máncora, Colán, Los Órganos, Vichayito, Cabo Blanco, Lobitos. En esta región también puedes disfrutar de su variada gastronomía, así como conocer templos coloniales, visitar pueblos de artesanos, además de disfrutar de lagunas milagrosas como Las Huaringas. ¡Te invitamos a disfrutar de esto y mucho más en Piura!</p>
    </div>
    <h5>Conoce los mejores lugares turísticos de Piura</h5>
    <section class="container3">
        <div class="card">
            <img src="https://www.ytuqueplanes.com/imagenes/fotos/destinos/las-huaringas_card.jpg" alt="">
            <h3>Lagunas Las Huaringas</h3>
            <div class="card-text">
                <p>La Laguna Negra o también conocida Laguna Huaringa está ubicada a 3500 m.s.n.m. Esta laguna es muy visitada porque los maestros curanderos afirman que puede curar enfermedades físicas (dolor de cabeza, problemas de la vista, etc). Sin embargo, también puede ser utilizada para inducir el daño o maleficio.
La denominada Shimbe o Siviricuche (Lago Turquesa) es la más extensa y se ubica a 3300 m.s.n.m. Es considerada como una laguna curandera porque trae suerte en el amor, en el trabajo, los negocios, y despeja la mente y el espíritu. El tiempo de visita es de un día para cada laguna.
</p>
            </div>
        </div>
        <div class="card">
            <div class="card-image">
                <img src="https://www.ytuqueplanes.com/imagenes/fotos/destinos/playa-colan-turistas_card.jpg" alt="">
            </div>
            <h3>Colán</h3>
            <div class="card-text">
                <p>Playa arenosa, de aguas tranquilas y cálidas. El balneario se caracteriza por sus casonas de madera ubicadas en terrazas de piedra y levantadas sobre pilotes. Desde sus balcones se pueden apreciar inolvidables puestas de sol.
La temperatura llega a los 32 ºC en verano. En este cálido paraíso se realizan competencias deportivas y se practican deportes acuáticos como el windsurf. Además, puede aventurarse en largas caminatas a la Bocana y subir al tablazo para observar las riberas del río Chira y su desembocadura en el mar.
</p>
            </div>
        </div>
        <div class="card">
            <div class="card-image">
                <img src="https://www.ytuqueplanes.com/imagenes/fotos/destinos/cerros-de-amotape_card.jpg" alt="">
            </div>
            <h3>Cerros de Amotape</h3>
            <div class="card-text">
                <p>Naturaleza en todo su esplendor, esta zona posee un clima cálido-seco que permite el desarrollo de una gran biodiversidad. Alberga especies única de Perú.
El parque es un espectacular oasis de vida en la costa peruana. Sus 91 300 ha presentan altitudes variables que van desde los 200 hasta los 1 613 m s. n. m. Su relieve está marcado por colinas y cerros de la cadena de La Brea.
Con una temperatura anual promedio de 24 °C, este bosque seco ecuatorial posee una gran diversidad biológica. Entre los árboles más característicos destacan los algarrobos, los hualtacos, los charanes, los zapotes, los pasallos y los guayacanes.
</p>
            </div>
        </div>
    </section>
</body>
</html>
