<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>City Tours</title>
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
            background: #0070ba;
            border-radius: 10px;
        }

        body::-webkit-scrollbar-thumb:hover {
            background-color: #005c99;
        }
        .header{
            width: 100%;
            height: 60px;
            display: flex;
            align-items: center;
        }
        .header img{
            width: 40px;
            margin-left: 30px;
            margin-top: 30px;
        }

        .parallax{
            position: relative;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin-bottom: 20px;
        }
        .parallax img{
            position: absolute;
            left: 0;
            bottom: 0;
            width: 100%;
            pointer-events: none;
        }

        .titulo {
            position: absolute;
            text-align: center;
            top: 0%;
            color: #0070ba;
            font-family: "Bree Peru";
            font-size: 4em;
            margin: 15px;
        }

        .grillas {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
            min-height: 100vh;
            flex-wrap: wrap;
            gap: 20px;
            margin-bottom: 20px;
        }

        .card-poster,.card-poster img  {
            position: relative;
            display: flex;
            flex-direction: column;
            justify-content: flex-end;
            align-items: center;
            width: 300px;
            object-fit: cover;
            height: 250px;
            border-radius: 10px;
            transition: 0.5s;
            overflow: hidden;
        }
        .card-poster:before{
            content: "";
            background-color: #00000050;
            position: absolute;
            width: 100%;
            height: 100%;
            z-index: 1000;
        }
        .card-poster:hover img {
            transform: scale(1.1);
        }

        .card-poster h2 {
            position: absolute;
            display: block;
            font-size: 1.5em;
            transform: translateY(-115px);
            z-index: 100000;
            color: var(--color-secondary);
            transition: 0.5s;
            font-family: "Bree Peru";
        }
        .card-poster:hover h2{
            transform: translateY(-115px) scale(1.1);
        }

        .card-poster a {
            position: absolute;
            z-index: 100000;
            text-decoration: none;
            color: var(--color-secondary);
        }
        .footer{
            background-color: #0070ba;
            text-align: center;
            color: var(--color-secondary);
            font-family: "Bree Peru";
            font-size: 0.7em;
            height: 40px;
            display: flex;
            justify-content: center;
            align-items: center;
            font-weight: 200;
        }
    </style>
</head>

<body>
    <header class="header">
        <a href="#" class="logo"><img src="https://seeklogo.com/images/E/escudo-nacional-del-peru-logo-8CA1DC108F-seeklogo.com.png" alt=""></a>
    </header>

    <section class="parallax">
        <h1 class="titulo">¡Que comience la aventura!</h1>
        <img src="https://lh3.googleusercontent.com/2ifQ9skxuGr8aAq7YZfgES9-YOzOEkISmUDMdAXEc5eoC2jVykQxMKqKr4tEi_ieEt4XNYTbBb7nunBNUbzALQWjcY1pj4ynY6PWmdMZxgEVY0EpOV6ySgLaAqfl8zQ7duTzlBFIwLAf-vw6i2u7SY9-YLQp5fXi7LAA5wqBXtnvI9S5EUkOe0nPp3EeTNDeUt7H5HA0eA50zWMwUhupP9BdOtjCD45-x2fFb5wqA8BAjHjsj3NHg2d78LeDSqiD8AnQ88tVSgTnTsS8bV3X-JM1u1GoMJSew9z-OE9X1ha5Uc9aZhrVEqxIDZWnuftsa_9F-gXa-xOSLHU2PuGLr4ttJbndQQPUFo1VJhNAkE_wYK7rVVeaBJigj3u64qGDyrogdeXGsBXzdTrXPpRcnyysndlbDtcK0v8swsm89vk2troG9kbaVJ0ESQg9zcYuJbM_5pHkOJGcroskxkoo-543C-efxWbfn4Q4kjxhTgogCh_WyV2w-90TjodLV7F4MJv_6Ea7TumALxPdwyl7d0knoM0BVtOUYD3beZ5YQpq6gdy3fsV1ovcVylH_vpiRFnwEdNIgkJqPlB_ctVM6dYycsc3tHWbvw4gzzzIGat8P2e9QXu8yChLF0AYXnMjerzWXc3olIhcMJh2hJlHakIKcMvReUvYGfo-hp8WMUnPXT3OLzPPC64ysxCon4bYiJEGHrYD9BCD-1uSs9Iy14VzynOGguzxzy6dFAvfGQ5rhD8xIhzJb99frI0x2q2cL2Uj1iJmH1GDQkoxAq0LDbVIG97LstuIRIN9U8phv3GQv-djLGOD9YUjHkcOt5XPmfBNLquasBk52aJ2hPxXmsG1zOU2c0lTQD0UPrwKd9WPSJvnGURXmGFDpgGBMYbGCM5mAI4DgyNYCiJ8mTYK9RLcrtQNynGdcYnpSCDNmxOaJ7kNeiTRj8xLG45reKqUiFuyCyiVNoh6v-ot526RlmF3Q9_BroHmbRnmSskeZuHHlyRWDOGLPYqEE-5y6fcne1MD4Y5TLuvoEEpzxl4J2-hNYsZtS3p7qqMKwZ0wMSjTF9PQAeH433Lr3ZjT32ldvdEZhxbNndePQTmDV1ki6SKw_4sbHzWY-gw=w1607-h905-no?authuser=5" alt="" class="montaña01">
        <img src="https://lh3.googleusercontent.com/AKCnBywm1YyydWXAGpcsUZjK6Tud5f8aLv6VoWyUZPrnpLx4XGvKYYDQO5YsvMe-A39L25XLINaayumHC4y7jNgrSzFytuxwMllMP5PivhtezuRBJUZWauizgCUs-JrQjiLv7n40FpgAWm1GWkYGSGW7BnkRxenKAjDDzmN-m2x7p4rtk3vgU3CaUc_xr8Cv0Fm0CkNwRXxfv0duswt-PR82vPkilSeyldjsM-mFroqUg9qYLuN2OVveU814k9AaNNOq6s4nPEkpmprYUrKcdm_gTJBnS1TtaZ4OfMXI2xjxnBvohmoyYfw34b8FSVAHtqjV_K81w0ycywB7lqJw8WAjT8yiDljQ0Q_w0XL9axY71qhHHvCejcE8-Ss2wwtWM3wTKa6ZOQnSkjbWwP54dJRzFR8s6vTO-0tcWjq0SiJwAm64uKWhHShUcZjCQzOCapV-uryBXg-vGRmOUf5-JncURru7nqYam-lmfw3Hbn1zwAHasm76SgFn2DDuOa6KtB5ofMaMphFUR-RBq3KA4Rgg5GioeyAodfZmFcjcdR_HfK-62k2bGaUvEnvvOeioAqWEKFhO64Agj8D_0WFsUl9AWq9DRxCOHKzj_nh8EiKdLYQZDDncZyDYvXZg7NcfWlAHwe025Huepd20No4VLhnCrWdNzGqtTmeDmwS_BqLZ0uSjmDyqMrXY7SIzv8eh2BN0K7d29UBKgSCltS1UOchR4l6tfXk0E3u4kW7GS2_jPcruTkDpW0FA_0Xao1dc0c3wM_Miy0T8s5ohk4OAPri75jmv0TEdDaWq1sVbbl39WJknVrI1U-TZXeHhLhJXMvuLSwVQ9FmNEHOgjaxTmLyJAqNy2j7jNzLVRmGBIJxB-3uJ3R_JiXotGw310dNuP2hNaarmQCQy0C5H_-GP1MmP1LBBdoquSKLiuNcVek-T33k2wYOdvG3CDnMy_-BO7LIWrxjSLbXqHMHO8AogY3MXbsD0x2zxGyr6amUwMsP9MMTcdDYy0v-Z3pX1i9XXx_J930I-FpGJSyKrQrkDgbKljAJGxCei0NZkEaDeSHYfUgrPkpIMxvPYyVKOR6oKa5TNkPhB-jQFxSbPQReASrC9iKEXSz0uUQ=w1607-h905-no?authuser=5" alt="" class="plantas02">
        <img src="https://lh3.googleusercontent.com/d0w5VvuEWf3DPLixmzxsci0bVvI-felcq18g74xFo0Mc7INnNnxTg5oq8SjuuwELz_FMUhjomNM1tXyT0J3N5mhlztCv7SG5eICxA32Fv3G43Wor2S46ry_sV0RIvvRsxen47cZKbgu9vEp5QWHXVZh48kl5SU2DA1jnY0_3le6wbt20HQU2Zc_vDT2DNdkZ6V9hYMUmi25WGFB6cuofgsktWxJHsIya1Xc4lFWLQsbwjBV6db5_NNJtm5RLguTLeVU1DfxqYYUJUpEpMg1Qzg6GqrSwhSibm7R9sVrdT4bf0-X-3xwFLteTfKFehUehySduLDiN73VbRzjFvGtA74HLX5f__J49UrLs0L_vdSS7jXRbRtWp2zSR67_hx0xIUvRtdrNpCC7duR04xzZzQhf3I7g8rxK1sN8FvTKc_7SC3_jR4XNzAkYwcmm4PTsWcO3CsZqgIoYf9ZUOhS_s6JNxQpvWjJzkSdeHn8VzWg4i68SUa_PM50jzQQyEph1lTbnxrfc7uanMhVmTpmD2MIdUKq_0UVYLRmTqPZfmsOLcJ1v9XVkUOlm2ekwU-lKfmc--VY-6UFBwicHomY30DesYMu-Nz8YEZ8wEgeiitKd4aj5GMozOnMObQkK2QDeW6RFaa5m66S2Lo9N0cICmPk2v0cUoeWhM25iMIRY-f_s33PY8IxbHVvsd8g-KQJHpr2IYqKCiXmdPZCBq1O26gv3bPlzDsljiGrtnGGXzLOIkLfZLtXSAomI5v8HH-jt3UqHGlRWX6kjYA07J9HC2qdcMWlvXzcV4wVnRbC4CWUUWckGpch0cBg-NcBkw6zhtBi5TYwK7io0MPFJc9C8khNnnqq7X5Ce2NXV2fDMyzeJU8V0DBzxZ5PHuCs_G275RApBwr-PzZiVYmqk8jadfiGtj2yOghI8MQGyZHw2YYW0Gfr2cPwP2RZvjFIxqBaaoJwBNwmNL8tzSUuIb6-dYe6xmciyy9gXFF_FSQtJjjyqtmQ_3ZABRR66xAL0xG0iwOUUy2EUBdnqXuXOStlquLbGTbEuo8tuWnTIDIqAXAHq1Wx8sFoHL-uens6R3fUK7plPHMjmtukb3usjrXPI9UriIe_Kg8w2L_Q=w1607-h905-no?authuser=5" alt="" class="montaña02">
        <img src="https://lh3.googleusercontent.com/SLIj3z3oFhhCTO1IyKBK9VE5Um8j0wsIgR54GgfTzYhWd8M8UkRXqquuQe_sAjtT2LLGvw5xqE2bGMq_vMekxBZF2BrzQPUMdo1szBIC2eRZB5O_dfAeHjBpv6vNJQcw3JRygX_1CVOJg9qnAGs_2fCxFQFvZ4LxvePEZ-ycH5NVgDOUd79rddMfxhUPVe2UoXHXlhUUvgpjkWtAU0BmQ_QmX--XnOyaH5wv4RxQ7B7GosD0A0NamkZ1VGoYqn8-qvPHMWOdBvBHkmHz2ZRdy0miqGatymQm2Tc88a1w-ff635ZZXFiPAebcQXv7NDwa4fGyyV6Q64fXBg2tQlbWA4OK_Io60pfGwFphwWgV_5Xgf0jNa8laJbfSudcOgscn0gS60YySqvOB0bUpJpaMWkkVC_crFCrKyh9Sg_vGkWjSTeyD8lo7GbvvbHeTcEEEnGVrqAo3P37stTMDGlLzOZU3GGJM6cVzLuvpCk5IGY9RkJRVQqRYecmhXqtDN5t0kLGZKm3f4l9_oZ5DFfmvDkkBR1VZuu_jHaA81sCJuskl-VJKeARv0JILDOEvVUN102pqdobW8dxaCT6thj-mUb84x605PxdjLn7k6EqlizmXRvv4_ORRKa7yBGZrjxybfXi7nrNWiqihySGvobWsJuwL7SpqFZAOASBN4P8CO6dBR7O_xbaC4YQtH7OUX4q2rkPoo0a0LXGxzEVgNC2P9XpF1YKM--dq42c3d9pTWX9Ah393Kf0P-XcDaHU7LQQ9r0A15gipWAGxq1KpIV66CEw620xZP6f02VFTK8tEFmwRJ8b_yHVmIuxhkJptnUDhQGhWVHL5Fp9wndjYT7GGTHLP8IJej4IwFKWtBQKSdWKewGhdnXFoFYO6lcBsWhrSAjw9ll9MiHIxPEzGN322HyNmnUr6828rtkuULRctjE6Qi5PhPAVzXNgrDF0fhgCQbWcfsAX1uH_1G_rnTVItkArDkkJm1EziRNcnC-zrwidKbs1bqSpCh-t5W6303xHJ-3qqo9a9NdKQ1mwRWA04sYMy92Mdiw5Far4TYpa6ex3LevrLLYWqOb645NwmBLutbgr_z2y_v2cf0VFY0EX15c5Q23H9_RRyTQ=w1607-h905-no?authuser=5" alt="" class="plantas01">
        <img src="https://lh3.googleusercontent.com/v99VO8kvYkzHPtgJ7tUiRQDEjGS0CsN7KpkTBzfRvRbbey04eTi-ul_5VTO5JSgsll0wCe7GQ-G3oCBiXjkfFdROf5-5uY9BLebUmjgb5i8MMbqJjhQJ_J4sCN67zvM1cGsIJalqrTSEIBWd2G3Of0tmPyWKhEyLg7yZFIUk4igQFKNXvFSZxMSjn84SmpCZQ2VSBTLzP7xyHu0xEa4eHVzoKHWqfHRiVfxk3VJGxH5U9-LRmjjRYHC9XyM5KxibTr4tMC8f4LGJqqdJE4TOKCwdgwU-P2tC_3Pkz5D-CbJJOCDLu4Kge5oq3WMCNqeyuerI8FuK7j00jNozGCsadkO2gUU7r_MOI6TCXBo49ULuKj5_NicKymBqbhS2DFPBL5MQ9LKos0NPity1XFCwrBrznfcWChBcIX-kGOeT35iUF2ANQtyTy7mrjG1CBdRUY17n29t9_u2XpcfPdexALTm1tyUt5yYxsAKbZSoy8CwuUvzL6JGk9fMtbpy49e6OvVlSj5p2I97jkIRJ7eNtZo2Oqo5qLr8ZZ26fkVoryrHzHFgibdvkYZKW_mejMK_qZ9NADF8Rvq3IyfnjWlUSAueAx7_gKmVJix3sHYeRZT4B0sRRLeYUfHfxANXLrCLFBXty2sZFjduoW_PWVhuptXjp7krje1ls13vOzJmT5q1-umUFHt1iJvE6l2864Kw6LVAhCnfKIPa29NzwOyjMtIWTpoMhWw85Kgb3zMP-Zu8hueyFksUjWR02jotUTrwCf8kijIFgJp70lHnmcJ6UdI2s22GJLtM2j9zJlW8JY_k5IECNOUj-9FmEsNqXvbfqSb-j1UB8XXb2JfaGOa6n67dKbzL96Cgo7njnmKGYafsMFslTLjAoHCPC9qjXlaSRIzzidwIrja6dnZItGsGlz7mofiYgcDbbfS46lOHyShgTdme58L2Csoz5D2BMqK_WZzTstSMw55K0E2iKgrMTvgFmXAhtomGg-rg5VgiJKyTyOJCYHAKHy5JLZ-kmdlDCT5VwkUxRaULJpDmMpmxyRRN4Xwjb6KX31Jlz8AoLsoCmPucASjaSBKTwYW6g8RsOVQUFW7QrBoJYiE1c8-rj6afDKgjI8kEU7A=w1607-h905-no?authuser=5" alt="" class="hombre">
        <img src="https://lh3.googleusercontent.com/MPSr4VI80lp16_c-2r3n2Y0XkGF1gNE-Lgc0JNgS-BW1tdSbyX15UrpjuKKsUhht6cz44tGMhPoNUnthIEljUjEa1AbuyKge-B-RCUxBwVG-QCQSuvUsjr2Ku5XBYGOuqtUQAA_3ljL8oEoKjWT8vCTlGH6lG0kO-W1pz_7LYVdYUoH3vl2TlBIDfM-mQb_QHxRb0zGUUSj_DRR6eQwnIa4Mz7Ma7ORW1ql2FUxaR9YfkCzby70WlVNUmL6h-6KqOb5LlaD3eO9kMbP-nsV5NF1iK1u3ssVO_mLbp_ChEJAmc0APRFRK9bVUZ9NrNEcMGClhgvN3exl5_VT6VTMDUOjxxI9vXX2eiHzpLOSCKe9k0oSBySEsIuqUWbswDvEcD5F4NVbusFwCYOViu9sdNCB6kSOe_VOzoUGpoaIl9xgsvxYUf924wrGRE1cITDFC3x9nG0wmX7PJl30W2GtCE4WgVgEs_v9kx-879HSbKseSFM76_PHwaUVKXc8CK_HY67wfPVrZfBN3NJDVheq19T5mTb5epzMvkDGOKsr-F0QoURPN7CUv5HkcitTRa_a9otPykCn3OW6EcH1DcAkgkkHVUNJvG560M0GeGP1HBJ5LeWMFU5rYhnSJBwbHimS2a86VcEa5c-x-sXnMxq7amk7EFk4vVKe4AN2c1H_gXSOa-vtF5KSiZIkbuf7B0vzjgkK822ZOAZStW9wJ96c2JPXKK-uaYPxHMgPB-SVFk3_fPke7wCpjP_VkcJ-f5WLczCkkkujR7GUwbgk7WqHrkFP53hoFi6t9u4C_dYZ4pUwagyNdelT2QgGQ_y-oRXxpgnSp-zCzwOqUh0Gm0r0VhySVaMhpfT_tEG4Q3IxqIJL-Xdu2EjJH-9YYVVKE4m4os_7nePcHfyltPSr7RKmFBHtiCfRxaazWN44QvuQTkF3dNyiOLXpzbPjnpwnLcVzU2nEBoNXsE-tMDbgnlSftmvcZkXKMIM3NYajtJbGREXqEneGWkCxgffTuhSBuLgOID3_ea-HXoEbxdkAzecAEvCLjbt7LwtHa_KWa_IesYV9Oy4Mec1_MDJV_8dCDIv4wIr3gKYT4-W4CESPN2K1HsaYkqDJxA2ft7Q=w1607-h905-no?authuser=5" alt="" class="plantas03">
    </section>

    <div class="grillas">
        <div class="card-poster">
            <img src="https://www.ytuqueplanes.com/imagenes/fotos/regiones/RC-CARD-Amazonas.jpg" alt="Amazonas" class="card-poster__imagen">
            <h2 class="card-poster__titulo">Amazonas</h2>
            <a href="/amazonas" class="card-poster__mas-informacion">Más información</a>
        </div>
        <div class="card-poster">
            <img src="https://www.ytuqueplanes.com/imagenes/fotos/regiones/ancash-card.jpg" alt="Áncash" class="card-poster__imagen">
            <h2 class="card-poster__titulo">Áncash</h2>
            <a href="/ancash" class="card-poster__mas-informacion">Más información</a>
        </div>
        <div class="card-poster">
            <img src="https://www.ytuqueplanes.com/imagenes/fotos/regiones/RC-CARD-ApurImac.jpg" alt="Apurimac" class="card-poster__imagen">
            <h2 class="card-poster__titulo">Apurimac</h2>
            <a href="/apurimac" class="card-poster__mas-informacion">Más información</a>
        </div>
        <div class="card-poster">
            <img src="https://www.ytuqueplanes.com/imagenes/fotos/regiones/RC-CARD-Arequipa.jpg" alt="Amazonas" class="card-poster__imagen">
            <h2 class="card-poster__titulo">Arequipa</h2>
            <a href="/arequipa" class="card-poster__mas-informacion">Más información</a>
        </div>
        <div class="card-poster">
            <img src="https://www.ytuqueplanes.com/imagenes/fotos/regiones/RC-CARD-Ayacucho.jpg" alt="Amazonas" class="card-poster__imagen">
            <h2 class="card-poster__titulo">Ayacucho</h2>
            <a href="/ayacucho" class="card-poster__mas-informacion">Más información</a>
        </div>
        <div class="card-poster">
            <img src="https://www.ytuqueplanes.com/imagenes/fotos/regiones/RC-CARD-Cajamarca.jpg" alt="Amazonas" class="card-poster__imagen">
            <h2 class="card-poster__titulo">Cajamarca</h2>
            <a href="/cajamarca" class="card-poster__mas-informacion">Más información</a>
        </div>
        <div class="card-poster">
            <img src="https://www.ytuqueplanes.com/imagenes/fotos/regiones/RC-CARD-Cusco.jpg" alt="Amazonas" class="card-poster__imagen">
            <h2 class="card-poster__titulo">Cusco</h2>
            <a href="/cusco" class="card-poster__mas-informacion">Más información</a>
        </div>
        <div class="card-poster">
            <img src="https://www.ytuqueplanes.com/imagenes/fotos/regiones/RC-CARD-Huancavelica.jpg" alt="Amazonas" class="card-poster__imagen">
            <h2 class="card-poster__titulo">Huancavelica</h2>
            <a href="/huancavelica" class="card-poster__mas-informacion">Más información</a>
        </div>
        <div class="card-poster">
            <img src="https://www.ytuqueplanes.com/imagenes/fotos/regiones/RC-CARD-Huanuco.jpg" alt="Amazonas" class="card-poster__imagen">
            <h2 class="card-poster__titulo">Huánuco</h2>
            <a href="/huanuco" class="card-poster__mas-informacion">Más información</a>
        </div>
        <div class="card-poster">
            <img src="https://www.ytuqueplanes.com/imagenes/fotos/regiones/RC-CARD-Ica.jpg" alt="Amazonas" class="card-poster__imagen">
            <h2 class="card-poster__titulo">Ica</h2>
            <a href="/ica" class="card-poster__mas-informacion">Más información</a>
        </div>
        <div class="card-poster">
            <img src="https://www.ytuqueplanes.com/imagenes/fotos/regiones/RC-CARD-Junin.jpg" alt="Amazonas" class="card-poster__imagen">
            <h2 class="card-poster__titulo">Junín</h2>
            <a href="/junin" class="card-poster__mas-informacion">Más información</a>
        </div>
        <div class="card-poster">
            <img src="https://www.ytuqueplanes.com/imagenes/fotos/regiones/RC-CARD-La-Libertad.jpg" alt="Amazonas" class="card-poster__imagen">
            <h2 class="card-poster__titulo">La Libertad</h2>
            <a href="/lalibertad" class="card-poster__mas-informacion">Más información</a>
        </div>
        <div class="card-poster">
            <img src="https://www.ytuqueplanes.com/imagenes/fotos/regiones/RC-CARD-Lambayeque.jpg" alt="Amazonas" class="card-poster__imagen">
            <h2 class="card-poster__titulo">Lambayeque</h2>
            <a href="/lambayeque" class="card-poster__mas-informacion">Más información</a>
        </div>
        <div class="card-poster">
            <img src="https://www.ytuqueplanes.com/imagenes/fotos/regiones/RC-CARD-Lima.jpg" alt="Amazonas" class="card-poster__imagen">
            <h2 class="card-poster__titulo">Lima</h2>
            <a href="/lima" class="card-poster__mas-informacion">Más información</a>
        </div>
        <div class="card-poster">
            <img src="https://www.ytuqueplanes.com/imagenes/fotos/regiones/RC-CARD-Loreto.jpg" alt="Amazonas" class="card-poster__imagen">
            <h2 class="card-poster__titulo">Loreto</h2>
            <a href="/loreto" class="card-poster__mas-informacion">Más información</a>
        </div>
        <div class="card-poster">
            <img src="https://www.ytuqueplanes.com/imagenes/fotos/regiones/RC-CARD-Madre-de-Dios.jpg" alt="Amazonas" class="card-poster__imagen">
            <h2 class="card-poster__titulo">Madre de Dios</h2>
            <a href="/madrededios" class="card-poster__mas-informacion">Más información</a>
        </div>
        <div class="card-poster">
            <img src="https://www.ytuqueplanes.com/imagenes/fotos/regiones/RC-CARD-Moquegua.jpg" alt="Amazonas" class="card-poster__imagen">
            <h2 class="card-poster__titulo">Moquegua</h2>
            <a href="/moquegua" class="card-poster__mas-informacion">Más información</a>
        </div>
        <div class="card-poster">
            <img src="https://www.ytuqueplanes.com/imagenes/fotos/regiones/RC-CARD-Pasco.jpg" alt="Amazonas" class="card-poster__imagen">
            <h2 class="card-poster__titulo">Pasco</h2>
            <a href="/pasco" class="card-poster__mas-informacion">Más información</a>
        </div>
        <div class="card-poster">
            <img src="https://www.ytuqueplanes.com/imagenes/fotos/regiones/RC-CARD-Piura.jpg" alt="Amazonas" class="card-poster__imagen">
            <h2 class="card-poster__titulo">Piura</h2>
            <a href="/piura" class="card-poster__mas-informacion">Más información</a>
        </div>
        <div class="card-poster">
            <img src="https://www.ytuqueplanes.com/imagenes/fotos/regiones/RC-CARD-Puno.jpg" alt="Amazonas" class="card-poster__imagen">
            <h2 class="card-poster__titulo">Puno</h2>
            <a href="/puno" class="card-poster__mas-informacion">Más información</a>
        </div>
        <div class="card-poster">
            <img src="https://www.ytuqueplanes.com/imagenes/fotos/regiones/RC-CARD-San-Martin.jpg" alt="Amazonas" class="card-poster__imagen">
            <h2 class="card-poster__titulo">San Martín</h2>
            <a href="/sanmartin" class="card-poster__mas-informacion">Más información</a>
        </div>
        <div class="card-poster">
            <img src="https://www.ytuqueplanes.com/imagenes/fotos/regiones/RC-CARD-Tacna.jpg" alt="Amazonas" class="card-poster__imagen">
            <h2 class="card-poster__titulo">Tacna</h2>
            <a href="/tacna" class="card-poster__mas-informacion">Más información</a>
        </div>
        <div class="card-poster">
            <img src="https://www.ytuqueplanes.com/imagenes/fotos/regiones/RC-CARD-Tumbes.jpg" alt="Amazonas" class="card-poster__imagen">
            <h2 class="card-poster__titulo">Tumbes</h2>
            <a href="/tumbes" class="card-poster__mas-informacion">Más información</a>
        </div>
        <div class="card-poster">
            <img src="https://www.ytuqueplanes.com/imagenes/fotos/regiones/RC-CARD-Ucayali.jpg" alt="Amazonas" class="card-poster__imagen">
            <h2 class="card-poster__titulo">Ucayali</h2>
            <a href="/ucayali" class="card-poster__mas-informacion">Más información</a>
        </div>
    </div>
    <footer class="footer">
        <h1>@Copyright 2022</h1>
    </footer>
    <script type="text/javascript">
        let montaña01 = document.querySelector('.montaña01');
        let montaña02 = document.querySelector('.montaña02');
        let plantas01 = document.querySelector('.plantas01');
        let plantas02 = document.querySelector('.plantas02');
        let plantas03 = document.querySelector('.plantas03');
        let hombre = document.querySelector('.hombre');
        let titulo = document.querySelector('.titulo')

        window.addEventListener('scroll', function(){
            let value = window.scrollY;
            montaña01.style.bottom = value * 0.1 + 'px';
            montaña02.style.bottom = value * 0.1 + 'px';
            plantas01.style.left = value * 0.1 + 'px';
            plantas01.style.bottom = value * 0.1 + 'px';
            plantas02.style.bottom = value * 0.1 + 'px';
            plantas03.style.bottom = value * 0.1 + 'px';
            hombre.style.bottom = value * 0.1 + 'px';
            titulo.style.top = value * 0.5 + 'px';
        })
    </script>
</body>
</html>
