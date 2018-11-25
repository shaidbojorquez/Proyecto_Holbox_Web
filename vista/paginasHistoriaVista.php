
<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Historia Holbox</title>
    <link href='https://fonts.googleapis.com/css?family=Montaga' rel='stylesheet'>
    <link rel="stylesheet" href="<?=$url_base?>resources/css/estilosGenerales.css">

    <link rel="stylesheet" href="<?=$url_base?>resources/css/estiloHistoria.css">

<body>
<header class="header-general">
            <div style="padding: 8px 16px; overflow: hidden;">
                <div class="tamano-5" id="logo"><span>HOLBOX</span></div>
                <div class="tamano-5" id="logo-derecho"><span>VIVE UNA EXPERIENCIA SIN IGUAL</span></div>
            </div>
            <div class="menu-general">
                <nav>
                    <ul class ="nav">
                        <li><a href="<?=$url_base?>paginas/Inicio">Inicio</a></li>
                        <li><a href="">Secciones</a>
                            <ul>
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

    <div id="menu-local">
            <ul>
                    <!--<li><a class="active" href="#historia">Historia</a></li>-->
                    <li style="background: rgb(95, 158, 95)">Historia</li>
                    <li><a href="#inicios">Inicios</a></li>
                    <li><a href="#ocupacion">Ocupación</a></li>
                    <li><a href="#crecimiento">Crecimiento</a></li>
                    <li><a href="#actualidad">Actualemente</a></li>
                    <li><a href="#imagenes">Imagenes</a></li>
                    <li><a href="#about">Acerca de</a></li>
                    <!--<li><a href="gato.php">¿?</a></li>-->
                  </ul>
    </div>

    <div style="margin-right:25%">
            <h1>Holbox a través de la historia</h1>
            <div class="fondo">
                <section id="inicios">
                    <div>
                        <div class="caja-imagen"><img  src="<?=$url_base?>resources/images/historia/Historia.jpg" alt="Principios del pueblo"></div>
                        <p >
                            Para conocer la historia de Holbox como pueblo es necesario remontarse a julio de 1847, mes en que
                            dio
                            inició la rebelión campesina más importante del siglo XIX en América Latina, conocida en la
                            historia
                            regional como “la guerra de castas”. Al fragor de la pólvora, los machetes ensangrentados y las
                            detonaciones de los fusiles, fueron cayendo ciudades, pueblos y ranchos del oriente peninsular. Los
                            pueblos de Xcan, Labcah, Yalahau y sus alrededores fueron abandonados por sus habitantes para
                            buscar
                            refugio en las islas cercanas.
        
                        </p>
                    </div>
                </section>
        
                <section id="ocupacion">
                    <p>
                        Los primeros datos documentales de la ocupación de Holbox datan del 8 y 16 de diciembre de 1852, a
                        través del reporte del comisionado militar Juan Díaz y el oficio del Juez De Paz de Isla Mujeres, Don
                        Bartolomé Magaña dirigido al gobernador de Yucatán. Poco tiempo antes habitantes de la costa de tierra
                        firme en
                        Yalahau habían sido atacados por trescientos mayas rebeldes, tomando prisioneros a 15 vecinos cuando
                        estos
                        trabajaban sus milpas, dejando atrás hogares, y todo cuanto había sido su vida, buscaron refugio en
                        holbox.
                    </p>
        
                    <div class="caja-imagen">
                            <img style="float: right; margin: 15px;" class="imagenes-izq" src="<?=$url_base?>resources/images/historia/d41-235x300.png" alt="Mapa Antiguo">
                        <p>
                            Cuando el Ejército Yucateco se entero, prohibió dicha ocupación y mando la evacuación de la isla
                            ante el temor de otros ataques. Sin embargo los refugiados se negaron a abandonar la isla. En 1854, 
                            los habitantes de la isla, fueron reconocidos como vecinos de Holbox, es decir, holboxeños, cuyo
                            asentamiento estaba en la punta de la isla, conocida como el “Viejo Holbox”.
                        </p>
                        
                    </div>
        
        
                </section>
        
                <section id="crecimiento">
                    <p>
                        Una vez pacificada la región, se establecieron dos grandes empresas forestales con fines de
                        exportación; las cuales indujeron la inmigración de miles de trabajadores al área, permitiendo la
                        activación del
                        comercio regional. Asimismo los navíos incluyeron en su ruta a Holbox.
                    </p>
                    <p>
                        En 1886, un huracán destruyó la isla; por lo que se ordenó el desalojo definitivo, pero los pobladores
                        se negaron, y se opto por trasladar el pueblo al sitio actual. El flujo comercial se repuso y conllevo
                        a
                        la representación de autoridades aduanales y militares, así como la creación de la escuela.
                    </p>
                </section>
        
                <section>
                    <div class="caja-imagen"><img src="<?=$url_base?>resources/images/historia/pesca.jpg" alt="Barcos Pesqueros"></div>
                    <p>
                        El 24 de noviembre de 1902, se creó el territorio federal de Quintana Roo al dividir la Península de
                        Yucatán en tres estados separados e independientes.
                    </p>
                    <p>
                        Durante el periodo revolucionario, las compañías forestales cerraron operaciones, obligando a muchos
                        pobladores de la isla a emigrar en busca de trabajo, pero permanecieron los pescadores.
                        
                    </p>
                </section>
        
            </div>
            <div style="background: rgba(0, 0, 0, 0.637); width:133%; height:150px; border-top:solid snow 1px; border-bottom: solid snow 1px;"></div>
        
            <div class="fondo">
                    <h2>Hoy en día</h2>
                <section id="actualidad">
                    <p>
                        Los pobladores de Holbox se han caracterizado por su carácter firme y reacio; gracias al cual se
                        construyo la comunidad que ahora conocemos, pues no se dejaron vencer ante las adversidades, y
                        resistieron
                        el
                        aislamiento y la carencia de productos básicos de consumo. Ahora Holbox es un destino turístico para
                        los
                        amantes de
                        la naturaleza y el descanso, debido a su exuberante belleza paradisiaca, sus blancas playas de nácar,
                        su
                        gran
                        diversidad de flora y fauna y el trato amable de sus pobladores.
                    </p>
                    <p>
                        Ubicada al noroeste de Cancún, la isla Holbox tiene solo 26 millas de largo y está separada del
                        continente
                        por una laguna poco profunda. Aunque es más pequeña en tamaño y con un poco menos tráfico turístico que
                        la mayoría de los destinos más populares repartidos por todo el país, la isla es un centro de
                        aventuras,
                        una oportunidad emocionante y es un lugar popular si está viajando con mochila en México .
                    </p>
                    <p>
                        La mayoría de la gente de la isla Holbox se gana la vida pescando. Es común ver a los pescadores
                        caminando
                        por Holbox Village con sus capturas del día o cargando sus redes. Las calles de la isla Holbox están
                        hechas
                        de arena blanca, común de las islas del Caribe, y hay muy pocos autos. Holbox es considerado un destino
                        turístico virgen porque muy pocos extranjeros visitan la isla. A pesar de la belleza natural de Holbox,
                        la inaccesibilidad la ha dejado intacta por el turismo de masas. Encontrar ofertas de viaje a Holbox es
                        relativamente fácil.
                    </p>
                </section>
            </div>
        
            <div id="imagenes">
                <figure>
                    <!--<img src="images/barco.jpg" alt="Barco Pescamex">-->
                    <img src="<?=$url_base?>resources/images/historia/boy.jpg" alt="Joven con pelícano">
                    <img src="<?=$url_base?>resources/images/historia/casas.jpg" alt="Casas antiguas">
                    <img src="<?=$url_base?>resources/images/historia/muelle.jpg" alt="Muelle">
                    <img src="<?=$url_base?>resources/images/historia/isla.jpg" alt="Mapa de la isla">
        
                </figure>
            </div>
    </div>


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

<?php
#do_code...
?>