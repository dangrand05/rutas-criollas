<?php
session_start(); // Iniciar sesión

// Verificar si hay un usuario logueado
$usuario_logueado = isset($_SESSION["usuario_id"]);
?>

<!DOCTYPE html>
<html >
<head><link rel="icon" type="image/png" href="imagenes/favicon.ico">
    <head>
    <style>
        .comentarios-container {
    width: 50%;
    margin: 30px auto;
    padding: 20px;
    background-color: #000; /* Fondo negro */
    border-radius: 10px;
    box-shadow: 0px 4px 10px rgba(255, 255, 255, 0.2); /* Sombra blanca */
    text-align: left;
    color: white; /* Texto en blanco */
}

.comentarios-container form {
    background-color: #000; /* Fondo negro en el formulario */
    padding: 20px;
    border-radius: 10px;
}

.comentarios-container textarea {
    width: 100%;
    padding: 10px;
    border: 2px solid #66bb6a;
    border-radius: 5px;
    font-size: 16px;
    background-color: #222; /* Fondo oscuro */
    color: white;
    resize: none;
}

.comentarios-container button {
    width: 100%;
    font-size: 18px;
    padding: 12px;
    margin-top: 10px;
    background-color: #66bb6a; /* Verde brillante */
    color: black;
    border: none;
    cursor: pointer;
    border-radius: 5px;
    transition: 0.3s;
}

.comentarios-container button:hover {
    background-color: #388e3c; /* Verde más oscuro */
}
    </style>
</head>

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="https://r.mobirisesite.com/1439588/assets/images/background1.jpg?rnd=1745708116907" type="image/x-icon">
  <meta name="description" content="Descubre Venezuela, un paraíso turístico. Explora el majestuoso Ávila y otros parques nacionales. Encuentra los mejores hoteles, actividades recreativas y la deliciosa gastronomía venezolana. ¡Planifica tu aventura!">
  <title>Turismo en Venezuela: Descubre Parques, Hoteles, Recreación y Comida</title>
  <link rel="stylesheet" href="https://r.mobirisesite.com/1439588/assets/web/assets/mobirise-icons2/mobirise2.css?rnd=1745708116904">
  <link rel="stylesheet" href="https://r.mobirisesite.com/1439588/assets/bootstrap/css/bootstrap.min.css?rnd=1745708116904">
  <link rel="stylesheet" href="https://r.mobirisesite.com/1439588/assets/bootstrap/css/bootstrap-grid.min.css?rnd=1745708116904">
  <link rel="stylesheet" href="https://r.mobirisesite.com/1439588/assets/bootstrap/css/bootstrap-reboot.min.css?rnd=1745708116904">
  <link rel="stylesheet" href="https://r.mobirisesite.com/1439588/assets/parallax/jarallax.css?rnd=1745708116904">
  <link rel="stylesheet" href="https://r.mobirisesite.com/1439588/assets/dropdown/css/style.css?rnd=1745708116904">
  <link rel="stylesheet" href="https://r.mobirisesite.com/1439588/assets/smart-cart/minicart-theme.css?rnd=1745708116904">
  <link rel="stylesheet" href="https://r.mobirisesite.com/1439588/assets/socicon/css/styles.css?rnd=1745708116904">
  <link rel="stylesheet" href="https://r.mobirisesite.com/1439588/assets/theme/css/style.css?rnd=1745708116904">
  <link rel="stylesheet" href="https://r.mobirisesite.com/1439588/assets/recaptcha.css?rnd=1745708116904">
  <link rel="preload" href="https://fonts.googleapis.com/css2?family=Onest:wght@400;700&display=swap&display=swap" as="style" onload="this.onload=null;this.rel='stylesheet'">
  <noscript><link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Onest:wght@400;700&display=swap&display=swap"></noscript>
  <link rel="stylesheet" href="https://r.mobirisesite.com/1439588/assets/css/mbr-additional.css?rnd=1745708116904" type="text/css">
  
  
  
  


<style>

@-webkit-keyframes animationBanner { 0% { opacity: 0; top: -11rem; } 91% { opacity: 0; top: -11rem; } 100% { opacity: 1; top: 0; } }
@-moz-keyframes animationBanner { 0% { opacity: 0; top: -11rem; } 91% { opacity: 0; top: -11rem; } 100% { opacity: 1; top: 0; } }
@-o-keyframes animationBanner { 0% { opacity: 0; top: -11rem; } 91% { opacity: 0; top: -11rem; } 100% { opacity: 1; top: 0; } }
   @keyframes animationBanner { 0% { opacity: 0; top: -11rem; } 91% { opacity: 0; top: -11rem; } 100% { opacity: 1; top: 0; } }
@-webkit-keyframes animationHeight { 0% { height: 0; } 91% { height: 0; } 100% { height: 11rem; } }
@-moz-keyframes animationHeight { 0% { height: 0; } 91% { height: 0; } 100% { height: 11rem; } }
@-o-keyframes animationHeight { 0% { height: 0; } 91% { height: 0; } 100% { height: 11rem; } }
   @keyframes animationHeight { 0% { height: 0; } 91% { height: 0; } 100% { height: 11rem; } }

@-webkit-keyframes animationClosing { 0% { height: 11rem; opacity: 1; } 30% { height: 11rem; opacity: 0.5;} 100% { height: 0; opacity: 0;} }
@-moz-keyframes animationClosing { 0% { height: 11rem; opacity: 1; } 30% { height: 11rem; opacity: 0.5;} 100% { height: 0; opacity: 0;} }
@-o-keyframes animationClosing { 0% { height: 11rem; opacity: 1; } 30% { height: 11rem; opacity: 0.5;} 100% { height: 0; opacity: 0;} }
@keyframes animationClosing { 0% { height: 11rem; opacity: 1; } 30% { height: 11rem; opacity: 0.5;} 100% { height: 0; opacity: 0;} }

@media(max-width: 575px) {
  #mobirisePromo.container-banner {
    height: 14rem;
  }
  #mobirisePromo .banner {
    min-height: 14rem;
  }
  @-webkit-keyframes animationBanner { 0% { opacity: 0; top: -14rem; } 91% { opacity: 0; top: -14rem; } 100% { opacity: 1; top: 0; } }
  @-moz-keyframes animationBanner { 0% { opacity: 0; top: -14rem; } 91% { opacity: 0; top: -14rem; } 100% { opacity: 1; top: 0; } }
  @-o-keyframes animationBanner { 0% { opacity: 0; top: -14rem; } 91% { opacity: 0; top: -14rem; } 100% { opacity: 1; top: 0; } }
    @keyframes animationBanner { 0% { opacity: 0; top: -14rem; } 91% { opacity: 0; top: -14rem; } 100% { opacity: 1; top: 0; } }
  @-webkit-keyframes animationHeight { 0% { height: 0; } 91% { height: 0; } 100% { height: 14rem; } }
  @-moz-keyframes animationHeight { 0% { height: 0; } 91% { height: 0; } 100% { height: 14rem; } }
  @-o-keyframes animationHeight { 0% { height: 0; } 91% { height: 0; } 100% { height: 14rem; } }
    @keyframes animationHeight { 0% { height: 0; } 91% { height: 0; } 100% { height: 14rem; } }

  @-webkit-keyframes animationClosing { 0% { height: 14rem; opacity: 1; } 30% { height: 14rem; opacity: 0.5;} 100% { height: 0; opacity: 0;} }
  @-moz-keyframes animationClosing { 0% { height: 14rem; opacity: 1; } 30% { height: 14rem; opacity: 0.5;} 100% { height: 0; opacity: 0;} }
  @-o-keyframes animationClosing { 0% { height: 14rem; opacity: 1; } 30% { height: 14rem; opacity: 0.5;} 100% { height: 0; opacity: 0;} }
  @keyframes animationClosing { 0% { height: 14rem; opacity: 1; } 30% { height: 14rem; opacity: 0.5;} 100% { height: 0; opacity: 0;} }
}
</style>
</head>
<body>

  
  <section data-bs-version="5.1" class="menu menu01 tradem5 cid-uJw1NzB6JF" once="menu" id="menu-1-uJw1NzB6JF">
    

    <div class="container">
        <nav class="navbar navbar-dropdown navbar-expand-lg">
            <div class="menu-container">
                <div class="navbar-brand">
                    <span class="navbar-caption-wrap"><a class="navbar-caption display-7" href="#">Ruta Criolla</a></span>
                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-bs-toggle="collapse" 
                        data-target="#navbarSupportedContent" data-bs-target="#navbarSupportedContent" 
                        aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <div class="hamburger">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav nav-dropdown">
                        <li class="nav-item"><a class="nav-link display-4" href="parques.html">Parques</a></li>
                        <li class="nav-item"><a class="nav-link link display-4" href="hoteles.html">Hoteles</a></li>
                        <li class="nav-item"><a class="nav-link link display-4" href="puntos de interes.html">Puntos de interés</a></li>
                        <li class="nav-item"><a class="nav-link link display-4" href="comida.html">Comida</a></li>
                    </ul>
        
                    <!-- Control de botones de sesión -->
                    <div class="navbar-buttons mbr-section-btn">
    <?php if ($usuario_logueado): ?>
        <a class="btn btn-danger display-4" id="logout-button" href="logout.php">CERRAR SESIÓN</a>
    <?php else: ?>
        <a class="btn btn-primary display-4" id="login-button" href="login.html">INICIA SESIÓN</a>
        <a class="btn btn-secondary display-4" id="register-button" href="register.html">REGISTRARSE</a>
    <?php endif; ?>
</div>

                </div>
            </div>
        </nav>
    </div>
</section>

<section data-bs-version="5.1" class="header02 tradem5 cid-uJw1NzCIwo mbr-parallax-background" id="hero-2-uJw1NzCIwo">
    

    
    <div class="mbr-overlay" style="opacity: 0.8; background-color: rgb(18, 20, 0);"></div>

    <div class="container">
        <div class="row items-wrap">
            <div class="col-12 card">
                <div class="content-wrapper">
                    <div class="image-wrapper">
                        <img src="https://r.mobirisesite.com/1439588/assets/images/photo-1506260408121-e353d10b87c7.jpeg" alt="">
                    </div>
                    <h2 class="mbr-section-title mbr-fonts-style display-1">Venezuela te espera</h2>
                    <div class="text-wrapper">
                        <p class="mbr-text mbr-fonts-style display-4">Venezuela te espera con experiencias únicas. Desde la selva amazónica hasta las playas caribeñas, hay algo para todos.</p>
                    </div>
                    <div class="mbr-section-btn">
                        <a class="btn btn-primary display-4" href="destinos.php">Comienza aquí</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section data-bs-version="5.1" class="gallery tradem5 cid-uJw1NzCVWi" id="gallery-1-uJw1NzCVWi">
    

    
    

    <div class="container">
        <div class="row items-wrap">
            <div class="item features-image col-12 col-lg-4">
                <div class="item-wrapper">
                    <div class="item-img card_1">
                        <img src="https://r.mobirisesite.com/1439588/assets/images/photo-1502786129293-79981df4e689.jpeg" alt="">
                    </div>
                </div>
            </div>
            <div class="item features-image col-12 col-lg-7">
                <div class="item-wrapper">
                    <div class="item-img card_2">
                        <img src="https://r.mobirisesite.com/1439588/assets/images/photo-1518098268026-4e89f1a2cd8e.jpeg" alt="">
                    </div>
                </div>
            </div>
            <div class="item features-image col-12 col-lg-10">
                <div class="item-wrapper">
                    <div class="item-img card_3">
                        <img src="https://r.mobirisesite.com/1439588/assets/images/photo-1476610182048-b716b8518aae.jpeg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section data-bs-version="5.1" class="features03 tradem5 cid-uJw1NzCUs2" id="features-3-uJw1NzCUs2">
    

    
    

    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="content-wrapper">
                    <h2 class="mbr-section-title mbr-fonts-style display-2">Descubre Venezuela</h2>
                    <div class="row items-wrap">
                        <div class="item features-without-image col-12 col-lg-4">
                            <div class="item-wrapper">
                                <div class="card-box">
                                    <p class="item-number mbr-fonts-style display-4">500</p>
                                    
                                    <p class="item-text mbr-fonts-style display-7">Maravillas naturales</p>
                                </div>
                            </div>
                        </div>
                        <div class="item features-without-image col-12 col-lg-4">
                            <div class="item-wrapper">
                                <div class="card-box">
                                    <p class="item-number mbr-fonts-style display-4">100</p>
                                    
                                    <p class="item-text mbr-fonts-style display-7">Aventuras inolvidables</p>
                                </div>
                            </div>
                        </div>
                        <div class="item features-without-image col-12 col-lg-4">
                            <div class="item-wrapper">
                                <div class="card-box">
                                    <p class="item-number mbr-fonts-style display-4">20</p>
                                    
                                    <p class="item-text mbr-fonts-style display-7">Cultura vibrante</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section data-bs-version="5.1" class="features05 tradem5 cid-uJw1NzD8No" id="features-5-uJw1NzD8No">
    

    
    

    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="title-wrapper">
                    <h2 class="mbr-section-title mbr-fonts-style display-2">Tesoros de Venezuela</h2>
                </div>
            </div>
        </div>
        <div class="row items-wrap">
            <div class="item features-without-image col-12 col-lg-4">
                <div class="item-wrapper">
                    <div class="card-box">
                        <h4 class="item-title mbr-fonts-style display-7">Montañas</h4>
                        <div class="text-wrapper">
                            <p class="item-text mbr-fonts-style display-4">Pico Bolivar, Wuaraira Repano, Sierra Nevada de Merida y la Cordillera de la Costa</p>
                            <div class="mbr-section-btn">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item features-without-image col-12 col-lg-4">
                <div class="item-wrapper">
                    <div class="card-box">
                        <h4 class="item-title mbr-fonts-style display-7">Aventura andina</h4>
                        <div class="text-wrapper">
                            <p class="item-text mbr-fonts-style display-4">Montañas imponentes y paisajes únicos</p>
                            <div class="mbr-section-btn">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item features-without-image col-12 col-lg-4">
                <div class="item-wrapper">
                    <div class="card-box">
                        <h4 class="item-title mbr-fonts-style display-7">Herencia colonial</h4>
                        <div class="text-wrapper">
                            <p class="item-text mbr-fonts-style display-4">Ciudades coloniales llenas de historia</p>
                            <div class="mbr-section-btn">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section data-bs-version="5.1" class="tabs01 tabs tradem5 cid-uJw1NzDOKH" id="features-10-uJw1NzDOKH">
    

    
    

    <div class="container">
        <div class="row items-wrap">
            <div class="col-12 col-lg-6 card">
                <div class="content-wrapper">
                    <h2 class="mbr-section-title mbr-fonts-style display-2">Venezuela Turística</h2>
                    <div class="tabs-wrapper">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item first mbr-fonts-style"><a class="nav-link show mbr-fonts-style active display-4" role="tab" data-toggle="tab" data-bs-toggle="tab" href="#tabs01-z_tab0" aria-selected="true">Canaima</a></li>
                            <li class="nav-item"><a class="nav-link mbr-fonts-style display-4" role="tab" data-toggle="tab" data-bs-toggle="tab" href="#tabs01-z_tab1" aria-selected="false">Los Roques</a></li>
                            <li class="nav-item"><a class="nav-link mbr-fonts-style display-4" role="tab" data-toggle="tab" data-bs-toggle="tab" href="#tabs01-z_tab2" aria-selected="false">Morrocoy</a></li>
                            <li class="nav-item"><a class="nav-link mbr-fonts-style display-4" role="tab" data-toggle="tab" data-bs-toggle="tab" href="#tabs01-z_tab3" aria-selected="false">Mochima</a></li>
                            <li class="nav-item"><a class="nav-link mbr-fonts-style display-4" role="tab" data-toggle="tab" data-bs-toggle="tab" href="#tabs01-z_tab4" aria-selected="false">Sabana</a></li>
                            <li class="nav-item"><a class="nav-link mbr-fonts-style active display-4" role="tab" data-toggle="tab" data-bs-toggle="tab" href="#tabs01-z_tab5" aria-selected="true">Macarao</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6 card">
                <div class="tab-content">
                    <div id="tab1" class="tab-pane in active" role="tabpanel">
                        <div class="item-content">
                            <div class="text-wrapper">
                                <h4 class="item-title mbr-fonts-style display-5">Canaima</h4>
                                <div class="text-wrap">
                                    <p class="item-text mbr-fonts-style display-4">Visita el Parque Nacional Canaima y sus impresionantes tepuyes.</p>
                                </div>
                            </div>
                            <div class="image-wrap">
                                <img src="https://r.mobirisesite.com/1439588/assets/images/photo-1500964757637-c85e8a162699.jpeg" alt="">
                            </div>
                        </div>
                    </div>
                    <div id="tab2" class="tab-pane" role="tabpanel">
                        <div class="item-content ">
                            <div class="text-wrapper">
                                <h4 class="item-title mbr-fonts-style display-5">Los Roques</h4>
                                <div class="text-wrap">
                                    <p class="item-text mbr-fonts-style display-4">Explora las playas de arena blanca y aguas cristalinas de Los Roques.</p>
                                </div>
                            </div>
                            <div class="image-wrap">
                                <img src="https://r.mobirisesite.com/1439588/assets/images/photo-1433838552652-f9a46b332c40.jpeg" alt="">
                            </div>
                        </div>
                    </div>
                    <div id="tab3" class="tab-pane" role="tabpanel">
                        <div class="item-content ">
                            <div class="text-wrapper">
                                <h4 class="item-title mbr-fonts-style display-5">Morrocoy</h4>
                                <div class="text-wrap">
                                    <p class="item-text mbr-fonts-style display-4">Descubre la belleza natural del Parque Nacional Morrocoy.</p>
                                </div>
                            </div>
                            <div class="image-wrap">
                                <img src="https://www.globalnationalparks.com/es/wp-content/uploads/Parque-Nacional-Morrocoy.jpg" alt="">
                            </div>
                        </div>
                    </div>
                    <div id="tab4" class="tab-pane" role="tabpanel">
                        <div class="item-content ">
                            <div class="text-wrapper">
                                <h4 class="item-title mbr-fonts-style display-5">Mochima</h4>
                                <div class="text-wrap">
                                    <p class="item-text mbr-fonts-style display-4">Mochima es famoso por sus bahías, islas e islotes, con playas de arena blanca y aguas turquesas ideales para el descanso y el buceo.</p>
                                </div>
                            </div>
                            <div class="image-wrap">
                                <img src="https://www.journeygourmet.com/continentes/America_Sur/Venezuela/Mochima/Mochima/imagenBig.jpg" alt="">
                            </div>
                        </div>
                    </div>
                    <div id="tab5" class="tab-pane" role="tabpanel">
                        <div class="item-content ">
                            <div class="text-wrapper">
                                <h4 class="item-title mbr-fonts-style display-5">Sabana</h4>
                                <div class="text-wrap">
                                    <p class="item-text mbr-fonts-style display-4">Recorre la Gran Sabana y sus paisajes únicos.</p>
                                </div>
                            </div>
                            <div class="image-wrap">
                                <img src="https://www.entornoturistico.com/wp-content/uploads/2017/11/La-Gran-Sabana-Venezolana-1280x720.jpg" alt="">
                            </div>
                        </div>
                    </div>
                    <div id="tab6" class="tab-pane" role="tabpanel">
                        <div class="item-content ">
                            <div class="text-wrapper">
                                <h4 class="item-title mbr-fonts-style display-5">Macarao</h4>
                                <div class="text-wrap">
                                    <p class="item-text mbr-fonts-style display-4">Disfruta del ambiente de Macarao y sus espacios naturales.</p>
                                </div>
                            </div>
                            <div class="image-wrap">
                                <img src="https://haimaneltroudi.com/wp-content/uploads/2023/02/Haiman-el-troudi-parque-nacional-macarao-tierra-de-herencia-ancestral-01-1024x684.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section data-bs-version="5.1" class="header01 tradem5 cid-uJw1NzDGok mbr-fullscreen" data-bg-video="https://www.youtube.com/watch?v=_K-Gtb_ywfg?autoplay=1&amp;loop=1&amp;playlist=3YTohytF9oE&amp;t=20&amp;mute=1&amp;playsinline=1&amp;controls=0&amp;showinfo=0&amp;autohide=1&amp;allowfullscreen=true&amp;mode=transparent" id="video-3-uJw1NzDGok">
    

    <div class="mbr-fallback-image disabled"></div>
    

    <div class="container">
        <div class="row">
        </div>
    </div>
</section>

<section data-bs-version="5.1" class="article02 tradem5 cid-uJw1NzEVSt" id="generic-text-2-uJw1NzEVSt">
    

    
    

    <div class="container">
        <div class="row items-wrap">
            <div class="col-12 col-lg-6 card">
                <div class="content-wrapper">
                    <h2 class="mbr-section-title mbr-fonts-style display-2">¡Visítanos!</h2>
                    <div class="text-wrapper">
                        <p class="mbr-text mbr-fonts-style display-4">Planifica tu próxima escapada a Venezuela. ¡Te esperamos con los brazos abiertos!</p>
                    </div>
                    <div class="mbr-section-btn">
                        <a class="btn btn-primary display-4" href="destinos.php">Más</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="content-wrapper">
                    <div class="image-wrapper">
                        <img src="https://r.mobirisesite.com/1439588/assets/images/photo-1532274402911-5a369e4c4bb5.jpeg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section data-bs-version="5.1" class="header02 tradem5 cid-uJw1NzEbmM mbr-fullscreen mbr-parallax-background" id="image-2-uJw1NzEbmM">
    

    
    

    <div class="container">
        <div class="row">
        </div>
    </div>
</section>

<section data-bs-version="5.1" class="list01 tradem5 cid-uJw1NzFyaQ" id="faq-1-uJw1NzFyaQ">
    

    
    

    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="content-wrapper">
                    <h2 class="mbr-section-title mbr-fonts-style display-2">¿Preguntas?</h2>
                    <div id="bootstrap-accordion_18" class="panel-group accordionStyles accordion" role="tablist" aria-multiselectable="true">
                        <div class="card">
                            <div class="card-header" role="tab" id="headingOne">
                                <a role="button" class="panel-title collapsed" data-toggle="collapse" data-bs-toggle="collapse" data-core="" href="#collapse1_18" aria-expanded="false" aria-controls="collapse1">
                                    <h4 class="panel-title-edit mbr-fonts-style display-5">¿Son seguros los parques?</h4>
                                    <div class="icon-wrapper">
                                        <span class="sign mbr-iconfont mobi-mbri-plus mobi-mbri"></span>
                                    </div>
                                </a>
                            </div>
                            <div id="collapse1_18" class="panel-collapse noScroll collapse" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion" data-bs-parent="#bootstrap-accordion_18">
                                <div class="panel-body">
                                    <p class="panel-text mbr-fonts-style display-4">Nuestros parques ofrecen senderos seguros y vistas impresionantes.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" role="tab" id="headingTwo">
                                <a role="button" class="panel-title collapsed" data-toggle="collapse" data-bs-toggle="collapse" data-core="" href="#collapse2_18" aria-expanded="false" aria-controls="collapse2">
                                    <h4 class="panel-title-edit mbr-fonts-style display-5">¿Hay descuentos en hoteles?</h4>
                                    <div class="icon-wrapper">
                                        <span class="sign mbr-iconfont mobi-mbri-plus mobi-mbri"></span>
                                    </div>
                                </a>
                            </div>
                            <div id="collapse2_18" class="panel-collapse noScroll collapse" role="tabpanel" aria-labelledby="headingTwo" data-parent="#accordion" data-bs-parent="#bootstrap-accordion_18">
                                <div class="panel-body">
                                    <p class="panel-text mbr-fonts-style display-4">Muchos hoteles ofrecen paquetes turísticos con descuentos.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" role="tab" id="headingThree">
                                <a role="button" class="panel-title collapsed" data-toggle="collapse" data-bs-toggle="collapse" data-core="" href="#collapse3_18" aria-expanded="false" aria-controls="collapse3">
                                    <h4 class="panel-title-edit mbr-fonts-style display-5">¿Qué actividades hay?</h4>
                                    <div class="icon-wrapper">
                                        <span class="sign mbr-iconfont mobi-mbri-plus mobi-mbri"></span>
                                    </div>
                                </a>
                            </div>
                            <div id="collapse3_18" class="panel-collapse noScroll collapse" role="tabpanel" aria-labelledby="headingThree" data-parent="#accordion" data-bs-parent="#bootstrap-accordion_18">
                                <div class="panel-body">
                                    <p class="panel-text mbr-fonts-style display-4">Hay actividades para todas las edades, desde niños hasta adultos mayores.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" role="tab" id="headingFour">
                                <a role="button" class="panel-title collapsed" data-toggle="collapse" data-bs-toggle="collapse" data-core="" href="#collapse4_18" aria-expanded="false" aria-controls="collapse4">
                                    <h4 class="panel-title-edit mbr-fonts-style display-5">¿Qué tal la comida?</h4>
                                    <div class="icon-wrapper">
                                        <span class="sign mbr-iconfont mobi-mbri-plus mobi-mbri"></span>
                                    </div>
                                </a>
                            </div>
                            <div id="collapse4_18" class="panel-collapse noScroll collapse" role="tabpanel" aria-labelledby="headingFour" data-parent="#accordion" data-bs-parent="#bootstrap-accordion_18">
                                <div class="panel-body">
                                    <p class="panel-text mbr-fonts-style display-4">La gastronomía venezolana es rica en sabores y tradiciones.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" role="tab" id="headingFive">
                                <a role="button" class="panel-title collapsed" data-toggle="collapse" data-bs-toggle="collapse" data-core="" href="#collapse5_18" aria-expanded="false" aria-controls="collapse5">
                                    <h4 class="panel-title-edit mbr-fonts-style display-5">¿Hay guías turísticos?</h4>
                                    <div class="icon-wrapper">
                                        <span class="sign mbr-iconfont mobi-mbri-plus mobi-mbri"></span>
                                    </div>
                                </a>
                            </div>
                            <div id="collapse5_18" class="panel-collapse noScroll collapse" role="tabpanel" aria-labelledby="headingFive" data-parent="#accordion" data-bs-parent="#bootstrap-accordion_18">
                                <div class="panel-body">
                                    <p class="panel-text mbr-fonts-style display-4">Ofrecemos guías turísticos expertos en la historia y cultura.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" role="tab" id="headingSix">
                                <a role="button" class="panel-title collapsed" data-toggle="collapse" data-bs-toggle="collapse" data-core="" href="#collapse6_18" aria-expanded="false" aria-controls="collapse6">
                                    <h4 class="panel-title-edit mbr-fonts-style display-5">¿Opciones económicas?</h4>
                                    <div class="icon-wrapper">
                                        <span class="sign mbr-iconfont mobi-mbri-plus mobi-mbri"></span>
                                    </div>
                                </a>
                            </div>
                            <div id="collapse6_18" class="panel-collapse noScroll collapse" role="tabpanel" aria-labelledby="headingSix" data-parent="#accordion" data-bs-parent="#bootstrap-accordion_18">
                                <div class="panel-body">
                                    <p class="panel-text mbr-fonts-style display-4">Tenemos opciones para todos los presupuestos, desde económicos hasta lujosos.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section data-bs-version="5.1" class="features09 tradem5 cid-uJw1NzFtbh" id="features-9-uJw1NzFtbh">
    

    
    

    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="content-wrapper">
                    <h2 class="mbr-section-title mbr-fonts-style display-2">¡Venezuela!</h2>
                    <div class="row items-wrap">
                        <div class="item features-without-image col-12 col-lg-3">
                            <div class="item-wrapper card-mini">
                                <div class="card-box">
                                    <div class="title-wrap">
                                        <h4 class="item-title mbr-fonts-style display-4">Aventura</h4>
                                    </div>
                                    <p class="item-text mbr-fonts-style display-4">Descubre la belleza natural de Venezuela.</p>
                                </div>
                            </div>
                        </div>
                        <div class="item features-without-image col-12 col-lg-3">
                            <div class="item-wrapper card-mini">
                                <div class="card-box">
                                    <div class="title-wrap">
                                        <h4 class="item-title mbr-fonts-style display-4">Confort</h4>
                                    </div>
                                    <p class="item-text mbr-fonts-style display-4">Relájate en los mejores hoteles del país.</p>
                                </div>
                            </div>
                        </div>
                        <div class="item features-without-image col-12 col-lg-3">
                            <div class="item-wrapper card-mini">
                                <div class="card-box">
                                    <div class="title-wrap">
                                        <h4 class="item-title mbr-fonts-style display-4">Diversión</h4>
                                    </div>
                                    <p class="item-text mbr-fonts-style display-4">Disfruta de actividades para toda la familia.</p> 
                                </div>
                            </div>
                        </div>
                        <div class="item features-without-image col-12 col-lg-3">
                            <div class="item-wrapper card-mini">
                                <div class="card-box">
                                    <div class="title-wrap">
                                        <h4 class="item-title mbr-fonts-style display-4">Sabor</h4>
                                    </div>
                                    <p class="item-text mbr-fonts-style display-4">Saborea la auténtica cocina venezolana.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section data-bs-version="5.1" class="features04 tradem5 cid-uJw1NzFskS" id="features-4-uJw1NzFskS">
    

    
    

    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="content-wrapper">
                    <h2 class="mbr-section-title mbr-fonts-style display-2">Tu destino</h2>
                    <div class="row items-wrap">
                        <div class="item features-image col-12 col-lg-4">
                            <div class="item-wrapper">
                                <div class="item-img">
                                    <h4 class="item-title mbr-fonts-style display-5">Parques</h4>
                                    <div class="image-wrap">
                                        <img src="https://r.mobirisesite.com/1439588/assets/images/photo-1494625927555-6ec4433b1571.jpeg" alt="">
                                    </div>
                                </div>
                                <div class="border-wrap"></div>
                                <div class="item-content">
                                    <ul class="list mbr-fonts-style display-4">
                                        <li class="item-wrap">Naturales</li>
                                        <li class="item-wrap">Exclusivos</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="item features-image col-12 col-lg-4">
                            <div class="item-wrapper">
                                <div class="item-img">
                                    <h4 class="item-title mbr-fonts-style display-5">Hoteles</h4>
                                    <div class="image-wrap">
                                        <img src="https://r.mobirisesite.com/1439588/assets/images/photo-1419242902214-272b3f66ee7a.jpeg" alt="">
                                    </div>
                                </div>
                                <div class="border-wrap"></div>
                                <div class="item-content">
                                    <ul class="list mbr-fonts-style display-4">
                                        <li class="item-wrap">Familiar</li>
                                        <li class="item-wrap">Gastronomía</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="item features-image col-12 col-lg-4">
                            <div class="item-wrapper">
                                <div class="item-img">
                                    <h4 class="item-title mbr-fonts-style display-5">Recreación</h4>
                                    <div class="image-wrap">
                                        <img src="https://r.mobirisesite.com/1439588/assets/images/photo-1434725039720-aaad6dd32dfe.jpeg" alt="">
                                    </div>
                                </div>
                                <div class="border-wrap"></div>
                                <div class="item-content">
                                    <ul class="list mbr-fonts-style display-4">
                                        <li class="item-wrap">Tradicional</li>
                                        <li class="item-wrap">Aventuras</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mbr-section-btn">
                        <a class="btn btn-primary display-4" href="destinos.php">¡Vamos!</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section data-bs-version="5.1" class="features02 tradem5 cid-uJw1NzGCTw" id="features-2-uJw1NzGCTw">
    

    
    

    <div class="container">
        <div class="row items-wrap">
            <div class="col-12 col-lg-5 card">
                <div class="title-wrapper">
                    <h2 class="mbr-section-title mbr-fonts-style display-2">Actividades Únicas</h2>
                </div>
            </div>
            <div class="col-12 col-lg-6 card">
                <div class="items-wrapper">
                    <div class="item features-image">
                        <div class="item-wrapper">
                            <div class="item-content">
                                <h4 class="item-title mbr-fonts-style display-5">Aventura</h4>
                                <p class="item-text mbr-fonts-style display-4">Senderismo y Kayak</p>
                            </div>
                            <div class="item-img">
                                <img src="https://r.mobirisesite.com/1439588/assets/images/photo-1500964757637-c85e8a162699.jpeg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="item features-image">
                        <div class="item-wrapper">
                            <div class="item-content">
                                <h4 class="item-title mbr-fonts-style display-5">Relax</h4>
                                <p class="item-text mbr-fonts-style display-4">Playas y Spas</p>
                            </div>
                            <div class="item-img">
                                <img src="https://r.mobirisesite.com/1439588/assets/images/photo-1433838552652-f9a46b332c40.jpeg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section data-bs-version="5.1" class="features08 tradem5 cid-uJw1NzGzd7" id="features-8-uJw1NzGzd7">
    

    
    

    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="title-wrapper">
                    <h2 class="mbr-section-title mbr-fonts-style display-2">Goza</h2>
                </div>
            </div>
        </div>
        <div class="row items-wrap">
            <div class="item features-image col-12 col-lg-6">
                <div class="item-wrapper">
                    <div class="item-content">
                        <h4 class="item-title mbr-fonts-style display-5">Selva</h4>
                        <p class="item-text mbr-fonts-style display-4">Explora la selva tropical</p>
                    </div>
                    <div class="item-img">
                        <img src="https://www.cinco8.com/wp-content/uploads/2021/05/IMG_6667-768x432.png" alt="">
                    </div>
                </div>
            </div>
            <div class="item features-image col-12 col-lg-6">
                <div class="item-wrapper">
                    <div class="item-content">
                        <h4 class="item-title mbr-fonts-style display-5">Playas</h4>
                        <p class="item-text mbr-fonts-style display-4">Nada en aguas cristalinas</p>
                    </div>
                    <div class="item-img">
                        <img src="https://caracashermosadotcom.wordpress.com/wp-content/uploads/2016/05/puerto-frances.jpg?w=1086" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section data-bs-version="5.1" class="map-container cid-uJw1NzGdqG" id="map-section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="title-wrapper">
                    <h2 class="mbr-section-title mbr-fonts-style display-2">
                        <p>Mapa interactivo de Venezuela</p>
                    </h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="google-map" style="width: 100%; height: 80vh;">
                    <iframe frameborder="0" style="border:0; width: 100%; height: 100%;" 
                        src="https://www.google.com/maps/embed/v1/place?key=AIzaSyCt1265A4qvZy9HKUeA8J15AOC4SrCyZe4&amp;q=Venezuela" 
                        allowfullscreen>
                    </iframe>
                </div>
            </div>
        </div>
    </div>
</section>

<section data-bs-version="5.1" class="contacts01 tradem5 cid-uJw1NzG96I" id="contacts-1-uJw1NzG96I">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="content-wrapper">
                    <h2 class="mbr-section-title mbr-fonts-style display-2">¡Visítanos Ahora!</h2>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
// Conexión a la base de datos
$conexion = new mysqli("localhost", "root", "", "rutas_criollas");

// Obtener los comentarios con el email del usuario correcto
$sql = "SELECT usuarios.email, comentarios.comentario, comentarios.fecha 
        FROM comentarios 
        JOIN usuarios ON comentarios.usuario_id = usuarios.id 
        ORDER BY comentarios.fecha DESC";

$resultado = $conexion->query($sql);
?>

<section class="comentarios-container">
    <h2>Comentarios de los usuarios</h2>
    <?php if ($resultado->num_rows > 0): ?>
        <?php while($row = $resultado->fetch_assoc()): ?>
            <p><strong><?php echo htmlspecialchars($row["email"]); ?>:</strong> <?php echo htmlspecialchars($row["comentario"]); ?>
            <br><small><?php echo $row["fecha"]; ?></small></p>
        <?php endwhile; ?>
    <?php else: ?>
        <p>No hay comentarios aún. ¡Sé el primero en comentar!</p>
    <?php endif; ?>
</section>

<?php $conexion->close(); 
?>

<section class="comentarios-container">
    <h2>Deja tu comentario</h2>
    <form action="guardar_comentario.php" method="POST">
        <input type="hidden" name="usuario_id" value="1"> <!-- ID del usuario logueado -->
        <textarea name="comentario" placeholder="Escribe tu comentario aquí..." required></textarea>
        <button type="submit">Enviar comentario</button>
    </form>
</section>



<script>
    document.addEventListener("DOMContentLoaded", function() {
        var isLoggedIn = localStorage.getItem("loggedIn"); // Simulación de sesión en el navegador
    
        if (isLoggedIn === "true") {
            document.getElementById("login-button").style.display = "none";
            document.getElementById("register-button").style.display = "none";
            document.getElementById("logout-button").style.display = "inline-block";
        } else {
            document.getElementById("login-button").style.display = "inline-block";
            document.getElementById("register-button").style.display = "inline-block";
            document.getElementById("logout-button").style.display = "none";
        }
    });
    </script>
    
  <script src="https://r.mobirisesite.com/1439588/assets/web/assets/jquery/jquery.min.js?rnd=1745708116904"></script>
  <script src="https://r.mobirisesite.com/1439588/assets/bootstrap/js/bootstrap.bundle.min.js?rnd=1745708116904"></script>
  <script src="https://r.mobirisesite.com/1439588/assets/parallax/jarallax.js?rnd=1745708116904"></script>
  <script src="https://r.mobirisesite.com/1439588/assets/smoothscroll/smooth-scroll.js?rnd=1745708116904"></script>
  <script src="https://r.mobirisesite.com/1439588/assets/ytplayer/index.js?rnd=1745708116904"></script>
  <script src="https://r.mobirisesite.com/1439588/assets/dropdown/js/navbar-dropdown.js?rnd=1745708116904"></script>
  <script src="https://r.mobirisesite.com/1439588/assets/smart-cart/minicart.js?rnd=1745708116904"></script>
  <script src="https://r.mobirisesite.com/1439588/assets/smart-cart/minicart-customizer.js?rnd=1745708116904"></script>
  <script src="https://r.mobirisesite.com/1439588/assets/embla/embla.min.js?rnd=1745708116904"></script>
  <script src="https://r.mobirisesite.com/1439588/assets/embla/script.js?rnd=1745708116904"></script>
  <script src="https://r.mobirisesite.com/1439588/assets/playervimeo/vimeo_player.js?rnd=1745708116904"></script>
  <script src="https://r.mobirisesite.com/1439588/assets/mbr-tabs/mbr-tabs.js?rnd=1745708116904"></script>
  <script src="https://r.mobirisesite.com/1439588/assets/vimeoplayer/player.js?rnd=1745708116904"></script>
  <script src="https://r.mobirisesite.com/1439588/assets/mbr-switch-arrow/mbr-switch-arrow.js?rnd=1745708116904"></script>
  <script src="https://r.mobirisesite.com/1439588/assets/scrollgallery/scroll-gallery.js?rnd=1745708116904"></script>
  <script src="https://r.mobirisesite.com/1439588/assets/theme/js/script.js?rnd=1745708116904"></script>
  <script src="https://r.mobirisesite.com/1439588/assets/formoid.min.js?rnd=1745708116904"></script>
  
  
  

</body>
</html>