<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flora y Fauna</title>
    <link rel="stylesheet" href="<?=$url_base?>resources/css/estiloFloraFauna.css">
    <link rel="stylesheet" href="<?=$url_base?>resources/css/estilosGenerales.css">
    <link href="https://fonts.googleapis.com/css?family=Montaga" rel="stylesheet">

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

<!--.contenido-->
<div id="contenido">

    <div class= "seccion" id="portada">
        <div class= "seccion" id=" portada-imagenes">
            <img id="img-portada" src="<?=$url_base?>resources/images/floraFauna/Luna-de-Miel-en-Holbox.jpg" alt="arbol en medio de playa" style="height: 100%" width=100%>
        </div>
    </div>
    <div class="seccion menu" id="menuContenido">
        <ul id="menu-contenido-lista">
            <li style="border-right: solid #b0b0b0 3px ">
                <a href="#flora"> FLORA</a>
            </li>
            <li>
                <a href="#fauna"> FAUNA</a>
            </li>
        </ul>
    </div>

    <!-- The Modal -->
    <div id="myModal" class="modal">
        <span class="close">&times;</span>
        <img class="modal-content" id="img01">
        <div id="caption"></div>
    </div>

    <!--Seccion FLORA -->

    <div class="seccion" id="flora">
        <div class="titulo">
            <h1 id="titulo-flora">
            <span> FLORA</span>
            </h1>
        </div>

        <div class="flex-container flex-flora">
            <div class="contenedor-flora">
                <img src="<?=$url_base?>resources/images/floraFauna/mangle.jpg" alt="mangle" style="width:100%">
                <div class="descripcion" >
                    <p>Mangle</p>
                </div>
                <span class="infoAdicional">
                 Poseen una alta productividad, alojan gran cantidad de organismos acuáticos, anfibios y terrestres;
                    son motores generadores de vida, como hábitat de los estadios juveniles de cientos de especies de peces, moluscos y crustáceos.
                    También son el hábitat temporal de muchas especies de aves migratorias septentrionales y meridionales.
                </span>
            </div>
            <div class="contenedor-flora">
                <img src="<?=$url_base?>resources/images/floraFauna/mangleBlanco.jpg" alt="flor mangle blanco" style="width:100%">
                <div class="descripcion">
                    <p>Flor de mangle blanco</p>
                </div>
                <span class="infoAdicional">
                       Desempeña un papel clave en el ecosistema del manglar por su hojarasca y detritos movidos por la marea, y como resguardo,
                    crianza y protección para muchas especies de crustáceos, peces, aves y demás vida silvestre.
                </span>
            </div>
            <div class="contenedor-flora" >
                <img src="<?=$url_base?>resources/images/floraFauna/avicennia%20germinans.jpg" alt="flor de mangle negro" style="width:100%">
                <div class="descripcion">
                    <p> Flor de mangle negro</p>
                </div>
                <span class="infoAdicional">
                    El Mangle Negro va cambiando de hojas paulatinamente en ciclos de
                    alrededor de 330 días. Florece durante todo el año y principalmente desde mayo a
                    julio.
                </span>
            </div>
            <div class="contenedor-flora">
                <img src="<?=$url_base?>resources/images/floraFauna/berlandieriana.jpg" alt="flor de juluub" style="width:100%">
                <div class="descripcion">
                    <p>Juluub</p>
                </div>
                <span class="infoAdicional">
                    Bravaisia o Hoolob es un género de plantas con flores perteneciente a la familia Acanthaceae.
                    El género tiene 3 especies de hierbas, naturales de las regiones tropicales de América.
                </span>
            </div>
            <div class="contenedor-flora">
                <img src="<?=$url_base?>resources/images/floraFauna/cruceta.JPG" alt="cactus cruceta" style="width:100%">
                <div class="descripcion">
                    <p>Cactús cruceta</p>
                </div>
                <span class="infoAdicional">
                También conocido como cardón o pitahaya es un cactus de tallo postrado, trepador y arqueado; generalmente de 2 a 3 metros de largo.
                    Florece al final del verano y sus flores se abren durante las noches.
                </span>
            </div>
            <div class="contenedor-flora">
                <img src="<?=$url_base?>resources/images/floraFauna/palma%20(2).jpg" alt="palma real" style="width:100%">
                <div class="descripcion">
                    <p>Palma Real</p>
                </div>
                <span class="infoAdicional">
Roystonea regia, conocida como palma real, es una especie de palma cuya altura, elegancia y fácil cultivo la ha convertido en una de los árboles utilizados como ornamental más común en el mundo.
                </span>
            </div>
            <div class="contenedor-flora">
                <img src="<?=$url_base?>resources/images/floraFauna/keyense.jpg" alt="flor ya'ax k'aax" style="width:100%">
                <div class="descripcion">
                    <p>Ya'ax k'aax</p>
                </div>
                <span class="infoAdicional">
                Planta conocida como la "oreja de mono".
                </span>
            </div>
            <div class="contenedor-flora">
                <img src="<?=$url_base?>resources/images/floraFauna/palo%20de%20tinte-%20adentro.jpg" alt="palo de tinte" style="width:100%">
                <div class="descripcion">
                    <p>Palo de tinte</p>
                </div>
                <span class="infoAdicional">
                Conocido como "madera que sangra" , mide hasta 8m de altura y se usa para sacar tintes o colorantes  naturales.
                </span>
            </div>
            <div class="contenedor-flora">
                <img src="<?=$url_base?>resources/images/floraFauna/planta-bromelia.jpg" alt="bromelia" style="width:100%">
                <div class="descripcion">
                    <p>Bromelias</p>
                </div>
                <span class="infoAdicional">
                    Son una extensa familia de más de 3,000 especies, todas de origen americano (con excepción de una africana). Se caracterizan por tener raíces aéreas y, al igual que las orquídeas pueden crecer adheridas a árboles e incluso piedras.
                </span>
            </div>
            <div class="contenedor-flora">
                <img src="<?=$url_base?>resources/images/floraFauna/bromélia.jpg" alt="bromelia" style="width:100%">
                <div class="descripcion">
                    <p>Diversas bromelias</p>
                </div>
                <span class="infoAdicional">
                    Se caracterizan por sus duras y largas hojas verdes y por su flor central de colores llamativos, los más típicos son el rojo, el amarillo y el naranja, aunque también las hay rosas, moradas ¡y hasta azules!
                </span>
            </div>
            <div class="contenedor-flora">
                <img src="<?=$url_base?>resources/images/floraFauna/orquideas.jpg" alt="orquidea blanca" style="width:100%">
                <div class="descripcion">
                    <p>Orquídea blanca</p>
                </div>
                <span class="infoAdicional">
                    Seguro que alguna vez has oído la frase “la sabiduría de la orquídea blanca” y es que desde hace muchísimo tiempo se cuenta que las flores nos conducen a la sensibilización y armonización del alma. También se dice que las flores nos desvelan la sabiduría del universo a través de la belleza y la orquídea blanca es una de las flores más bellas del mundo.
                </span>
            </div>
            <div class="contenedor-flora">
                <img src="<?=$url_base?>resources/images/floraFauna/bletantillana%20orquidea.jpg" alt="orquidea morada" style="width:100%">
                <div class="descripcion">
                    <p>Orquidea morada</p>
                </div>
                <span class="infoAdicional">
                    La orquídea morada es el símbolo de justicia, prudencia y sabiduría.
                </span>
            </div>
            <div class="contenedor-flora" >
                <img src="<?=$url_base?>resources/images/floraFauna/Metopium_brownei_07.jpg" alt="arbol chechem" style="width:100%" >
                <div class="descripcion">
                    <p>Chechen</p>
                </div>
                <span class="infoAdicional">
                    Cuentan que existió  un rey maya llamado  Chechén, que cometió terribles excesos con su pueblo. El monarca tenía atemorizados a todos sus súbditos, a los que perseguía, acosaba, maltrataba y llego a matar sólo por el placer de mantenerlos sometidos y aterrorizados.Un buen día, el pueblo se sublevó y se levantó en armas contra su malévolo monarca. Chechén fue perseguido, acorralado y  finalmente matado, pero antes de morir juró que regresaría a vengarse. Se le sepultó en mitad de la selva dejando su cuerpo alejado del pueblo. Meses después, sobre su tumba comenzaron a brotar una planta que continuo creciendo hasta convertirse en un árbol oscuro, recio y con veneno en sus venas que muy pronto empezó a extenderse como una plaga por toda la selva. Todo aquel indígena maya que entraba en contacto con su savia dañina padecía los males de aquel veneno. El rey había conseguido mantener su maldad incluso después de su muerte,  manteniendo atemorizado a su pueblo. Ese árbol fue bautizado con el nombre de chechén.
                </span>
            </div>

        </div>
    </div>

    <div class="seccion" id="fauna">
        <div class="titulo">
            <h1 id="titulo-fauna">
                <span>FAUNA</span>
            </h1>
        </div>
        <!-- Fauna photo Grid -->
        <div class="fila-flex-fauna flex-container">
            <div class="columna-flex-fauna">
                <div class="contenedor-img-fauna">
                    <img src="<?=$url_base?>resources/images/floraFauna/espatula%20rosada.jpg" alt="espatula rosada" style="width: 100%">
                    <div class="overlay">
                        <b class="nombreFauna"> Espátula Rosada</b>
                    </div>
                </div>
                <div class="contenedor-img-fauna">
                    <img src="<?=$url_base?>resources/images/floraFauna/hocofaisan.jpg" alt="Hocofaisan" style="width: 100%">
                    <div class="overlay">
                        <b class="nombreFauna"> Hocofaisan</b>
                    </div>
                </div>
                <div class="contenedor-img-fauna">
                    <img src="<?=$url_base?>resources/images/floraFauna/puma.jpg" alt="Puma" style="width: 100%">
                    <div class="overlay">
                        <b class="nombreFauna"> Puma</b>
                    </div>
                </div>
                <div class="contenedor-img-fauna">
                    <img src="<?=$url_base?>resources/images/floraFauna/mono%20araña.jpg" alt="Mono araña" style="width: 100%">
                    <div class="overlay">
                        <b class="nombreFauna"> Mono Araña</b>
                    </div>
                </div>
                <div class="contenedor-img-fauna">
                    <img src="<?=$url_base?>resources/images/floraFauna/langosta.jpg" alt="Langosta" style="width: 100%">
                    <div class="overlay">
                        <b class="nombreFauna"> Langosta </b>
                    </div>
                </div>
                <div class="contenedor-img-fauna">
                    <img src="<?=$url_base?>resources/images/floraFauna/manaties.jpg" alt="Manati" style="width: 100%">
                    <div class="overlay">
                        <b class="nombreFauna">Manatí</b>
                    </div>
                </div>
            </div>
            <div class="columna-flex-fauna">
                <div class="contenedor-img-fauna">
                    <img src="<?=$url_base?>resources/images/floraFauna/flamingos.jpg" alt="Flamingos" style="width: 100%">
                    <div class="overlay">
                        <b class="nombreFauna">Flamingos </b>
                    </div>
                </div>

                <div class="contenedor-img-fauna">
                    <img src="<?=$url_base?>resources/images/floraFauna/garza1.jpg" alt="Garza" style="width: 100%">
                    <div class="overlay">
                        <b class="nombreFauna">Garza </b>
                    </div>
                </div>

                <div class="contenedor-img-fauna">
                    <img src="<?=$url_base?>resources/images/floraFauna/ocelotes.jpg" alt="Ocelote" style="width: 100%">
                    <div class="overlay">
                        <b class="nombreFauna">Ocelote</b>
                    </div>
                </div>

                <div class="contenedor-img-fauna">
                    <img src="<?=$url_base?>resources/images/floraFauna/cacerola.jpg" alt="Cacerola Marina" style="width: 100%">
                    <div class="overlay">
                        <b class="nombreFauna"> Cacerola Marina</b>
                    </div>
                </div>

                <div class="contenedor-img-fauna">
                    <img src="<?=$url_base?>resources/images/floraFauna/tiburon%20ballena.jpg" alt="Tiburón ballena" style="width: 100%">
                    <div class="overlay">
                        <b class="nombreFauna"> Tiburón ballena</b>
                    </div>
                </div>

            </div>
            <div class="columna-flex-fauna">
                <div class="contenedor-img-fauna">
                    <img src="<?=$url_base?>resources/images/floraFauna/jaribu.jpg" alt="Cigueñas jabiru" style="width: 100%">
                    <div class="overlay">
                        <b class="nombreFauna">Cigueñas jabirú</b>
                    </div>
                </div>
                <div class="contenedor-img-fauna">
                    <img src="<?=$url_base?>resources/images/floraFauna/mapache1.jpg" alt="Mapache" style="width: 100%">
                    <div class="overlay">
                        <b class="nombreFauna">Mapache</b>
                    </div>
                </div>
                <div class="contenedor-img-fauna">
                    <img src="<?=$url_base?>resources/images/floraFauna/cocodrilo.jpg" alt="Cocodrilo" style="width: 100%">
                    <div class="overlay">
                        <b class="nombreFauna">Cocodrilo</b>
                    </div>
                </div>

                <div class="contenedor-img-fauna">
                    <img src="<?=$url_base?>resources/images/floraFauna/jaguar.jpg" alt="Jaguar" style="width: 100%">
                    <div class="overlay">
                        <b class="nombreFauna">Jaguar</b>
                    </div>
                </div>
                <div class="contenedor-img-fauna">
                    <img src="<?=$url_base?>resources/images/floraFauna/mantarrayas.jpg" alt="Mantarraya" style="width: 100%">
                    <div class="overlay">
                        <b class="nombreFauna">Mantarraya</b>
                    </div>
                </div>
                <div class="contenedor-img-fauna">
                    <img src="<?=$url_base?>resources/images/floraFauna/tortuga-blanca-4-1.jpg" alt="Tortuga Blanca" style="width: 100%">
                    <div class="overlay">
                        <b class="nombreFauna">Tortuga Blanca</b>
                    </div>
                </div>


            </div>
        </div>

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

<script>
    let divGroup = document.getElementsByClassName('contenedor-flora');

    for (let i=0; i< divGroup.length; i++) {
        let divElement = divGroup[i]
        divElement.addEventListener('click',expandirInfo,false);
    }

    // Get the modal


    function expandirInfo(){
//obtener span de informacion del div principal que contiene el span
        let inf= this.getElementsByClassName("infoAdicional");
        let informacion= inf[0];

        //obtener imagen del div principal
        let imagenes= this.getElementsByTagName("img");
        let imagen= imagenes[0];
        // Get the image and insert it inside the modal - use its "alt" text as a caption
        llamarModal(imagen,informacion);

    }

    const modal = document.getElementById('myModal');
    //variables img y caption del modal
    let modalImg = document.getElementById("img01");
    let captionText = document.getElementById("caption");

    //Modificar el contenido del modal
    function llamarModal(imagen,informacion){
        modal.style.display = "block";
        modalImg.src = imagen.src;
        captionText.innerHTML = informacion.textContent;
    }

    // Get the <span> element that closes the modal
    let spanMod = document.getElementsByClassName("close")[0];

    // When the user clicks on <span> (x), close the modal
    spanMod.onclick= function close() {
        modal.style.display = "none";
    }

</script>

</body>
</html>