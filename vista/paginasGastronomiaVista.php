<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es-MX">
    <head>
        <meta charset="utf-8">

        <link rel="stylesheet" href="<?=$url_base?>resources/css/estiloComida.css">
        <link rel="stylesheet" href="<?=$url_base?>resources/css/estilosGenerales.css">
        <link href='https://fonts.googleapis.com/css?family=Montaga' rel='stylesheet'>   
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimun-scale=1.0">
    </head>
    <body>
        <header class="header-general">
            <div style="padding: 8px 16px; overflow: hidden;">
                <div class="tamano-5" id="logo"><span>HOLBOX</span></div>
                <div class="tamano-5" id="logo-derecho"><span>VIVE UNA EXPERIENCIA SIN IGUAL</span></div>
            </div>
            <div class="menu-general">
                <nav>
                    <ul class ="nav">
                        <li><a href="<?$url_base?>paginas/Inicio">Inicio</a></li>
                        <li><a href="">Secciones</a>
                            <ul>
                                <li><a href="<?=$url_base?>paginas/inicio">Inicio</a></li>
                                <li><a href="<?= $url_base ?>paginas/Historia">Historia</a></li>
                                <li><a href="<?= $url_base ?>paginas/LugaresHolbox">¿Qué hacer?</a></li>
                                <li><a href="<?= $url_base ?>paginas/Gastronomia">Gastronomía</a></li>
                                <li><a href="<?= $url_base ?>paginas/FloraFauna">Flora y Fauna</a></li>
                            </ul>
                        </li>
                        <li><a href="experienciasH.php">Experiencias</a></li>
                        <li><a href="catalogo.php">Catálogo</a></li>
                        <?php
                        include("{$url_base}libs/manejador_sesiones.php");
                        $menu = get_Menu();

                        foreach( $menu as $opcion => $link){
                            $link = "../".$link;
                            echo "<li><a href=\"$link\">$opcion</a></li>";
                        }
                        ?>
                    </ul>
                </nav>
            </div>
            <div id="sesiones">
                <?php
                if(empty($_SESSION)){
                    echo "<label><a href='{$url_base}inicioSesion/iniciarSesion'>Iniciar Sesión  </a></label>";
                    echo "<label><a href='../sistemas/sistema_signup/signup.php'> Registrarse</a></label>";
                }else{
                    echo "<label>Bienvenido ".$_SESSION['nombre'] ." </label>";
                    echo "<label><a href='../sistemas/sistema_login/logout.php'>Cerrar Sesión </a></label>";
                }
                ?>
            </div>
            </header>
        <!--Aqui va el contenido-->

        <div class="contenido contenedor">
            <main>
                <article>
                    <h2>Pescado Frito</h2>
                    <img src="<?=$url_base?>resources/images/comida/imagen_1.jpg" alt="imagen pescado frito">
                    <p>Pescados y mariscos frescos son parte de la comida típica que no puedes dejar de probar, algunos de los platillos recomendados son el ceviche, unas empanadas de pescado, una sabrosa langosta, cocteles de camarones, almejas, todos con una preparación deliciosa que te va a fascinar.</p>

                    <p> La gastronomía de Isla Holbox sobresale por su cosmopolitismo, suntuosidad y su capacidad innovadora. Es un aspecto que complementa de manera perfecta a los muchos otros atractivos con los que cuenta, esta auténtica perla del Caribe Mexicano: en Holbox, pequeña isla quintanarroense, se pueden hallar creaciones culinarias de los cinco continentes. Es un auténtico carnaval de sabores y aromas que cautiva a los lugareños y turistas.</p>
                    <a href="#" class="boton">Leer mas</a>
                </article>
                <article>
                    <h2>Pizza de langosta</h2>
                    <img src="<?=$url_base?>resources/images/comida/imagen_2.jpg" alt="imagen pizza de langosta">
                    <p>De igual manera, la gastronomía de Holbox comprende menús tanto regionales como de origen internacional o una combinación de ellos, con una población cosmopolita y su gran afluencia turística, la propuesta culinaria es diversa y de calidad. Es por ello que los platillos con influencia maya también pueden complementarse con una propuesta de la cocina italiana tradicional, logrando así una deliciosa pizza de langosta que es un manjar; otras opciones que seguro también te gustará probar son los cortes de carnes, los diferentes platillos de cocina fusión y gourmet, que ofrecen sabrosas comidas para degustar con hermosas vistas del mar.</p>

                    <a href="#" class="boton">Leer mas</a>
                </article>
                <article>
                    <h2>Ceviche</h2>
                    <img src="<?=$url_base?>resources/images/comida/imagen_3.jpg" alt="imagen ceviche">
                    <p>Complemento ideal para tu selección de platillos, una deliciosa agua de coco con ron, es la bebida perfecta para disfrutar.</p>

                    <p> Además de este disfrute de sus tradiciones culinarias, se pueden hallar otras opciones para divertirse en Isla Holbox, tales como los recorridos a caballo por las playas del lugar, las exploraciones por los manglares cercanos, la práctica del kitesurf, las excursiones a sitios arqueológicos famosos de esta región maya, como Ek Balam, Chichen Itza, Tulum y Uxmal; y visitas a hermosas ciudades de la Península de Yucatán, como es el caso de la blanca Mérida o de la notable Valladolid.</p>
                    <a href="#" class="boton">Leer mas</a>
                </article>
            </main>

            <aside class="sidebar">
                <h2>Otros posts</h2>
                <ul>
                    <li><a href="http://google.com" target="_blank">Ir a Google </a></li>
                    <li><a href="<?=$url_base?>resources/pdf/holbox.pdf" download>Descargar informacion</a></li>
                    <li><a href="https://www.instagram.com/holboxlosangeles/" target="_blank">Instagram</a></li>
                </ul>
            </aside>
        </div>

        <!--aqui termina el contenido-->
       <footer>
            <div id="about">
                <div class="tamano-7" id="menu-footer">
                    <nav>
                        <ul>
                            <li><a href="<?=$url_base?>paginas/Inicio">Inicio</a></li>
                            <li><a href="<?= $url_base ?>paginas/Historia">Historia</a></li>
                            <li><a href="<?= $url_base ?>paginas/LugaresHolbox">¿Qué hacer?</a></li>
                            <li><a href="<?= $url_base ?>paginas/Gastronomia">Gastronomía</a></li>
                            <li><a href="<?= $url_base ?>paginas/FloraFauna">Flora y Fauna</a></li>
                            <li><a href="experienciasH.php">Experiencias</a></li>
                            <li><a href="catalogo.php">Catálogo</a></li>
                            <?php
                                $menu = get_Menu();

                                foreach( $menu as $opcion => $link){
                                    $link = "../".$link;
                                    echo "<li><a href=\"$link\">$opcion</a></li>";
                                }
                            ?>
                        </ul>
                    </nav>
                </div>
                <div class="tamano-5" id="nosotros">
                    <h3>Sobre Nosotros</h3>
                    <ul>
                        <li>Chuc Arcia Alejandro</li>
                        <li>Ancona Graniel Ulises</li>
                        <li>Interian Bojorquez Shaid</li>
                        <li>Pech Huchin Humberto</li>
                        <li>Sosa Lopez Wendy</li>
                    </ul>
                </div>
            </div>
            <p id="copyright">
                Todos los derechos reservados &copy;. Holbox 2018
            </p>
        </footer>
    </body>
</html>