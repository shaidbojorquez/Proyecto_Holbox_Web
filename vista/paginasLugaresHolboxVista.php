<?php
session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Lugares Holbox</title>
        <meta charset="UTF-8">
        <link href='https://fonts.googleapis.com/css?family=Montaga' rel='stylesheet'>
        <link rel="stylesheet" href="<?=$url_base?>resources/css/estilolugaresHolbox.css">
        <link rel="stylesheet" href="<?=$url_base?>resources/css/estilosGenerales.css">
    </head>
    <body>

        <!-- HEADER -->
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
                                <li><a href="<?=$url_base?>paginas/Inicio">Inicio</a></li>
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
        
        <!-- Introduccion a Lugares para visitar -->
        <div class="section">
            <h1 style="font-size: 30pt"><span>¡Lugares para visitar!</span></h1>
            <p id="intro">
                <strong>Holbox</strong> es un lugar lleno de magia que no querrás dejar pasar, aquí te contamos lo que no te puedes perder si visitas Holbox, mostramos lugares de la isla donde te podrás relajar, podrás presenciar la belleza de la flora y fauna de la isla, disfrutar de las playas que brinda la isla en distintos puntos, disfrutar de las noches con el cielo estrellado y presenciar la bioluminiscencia. Aquí te presentamos muy buenas razones que te harán tener una mágica experiencia.
            </p>
        </div>
        <!-- Introduccion end -->        

        <!-- Lugares para visitar cuerpo -->
        <div class="section">
            <div class="subseccion" style="background-image: url(<?=$url_base?>resources/images/lugaresHolbox/item1.jpg); background-color: rgb(28, 144, 173);">
                <div id="sub1">
                    <h2>Nado con el Tiburón Ballena</h2>
                    <div class="textoIzquierda">
                        <p>Holbox es el santuario del Tiburón Ballena, 
                            que es el pez más grande del planeta y que prefiere las aguas de 
                            la isla porque su superficie es cálida con brotes de agua más fría lo que 
                            la hace ser rica en nutrientes para alimentarse.
                        </p>
                        <p>
                            El avistamiento comienza en mayo y termina en septiembre y el tour que puedes tomar 
                            en Holbox incluye: transportación en lancha con permisos y guías certificados, 
                            equipos de snorkel, nado con las ballenas y comida, además podrás observar delfines, 
                            mantarrayas y otras especies.
                        </p>                
                    </div>
                </div>
            </div>

            <div class="subseccion" style="background-image: url(<?=$url_base?>resources/images/lugaresHolbox/item2.jpg); background-color: rgb(4, 18, 41);">
                <div id="sub2">               
                    <h2>Bioluminiscencia</h2>               
                    <div class="textoDerecha">
                        <p>
                            Adéntrate a las noches más místicas de Holbox, donde el mar se pinta 
                            de un brillo azul celestial, gracias a la bioluminiscencia de miles de 
                            microorganismos. Completamente seguro para toda la familia, 
                            siente como si nadaras entre las estrellas.
                        </p>
                        <p>
                            Para ver este fenómeno, existen tours en kayaks, en lancha, e incluso se percibe 
                            en Punta Coco, a 25km del centro.
                        </p>             
                    </div>                               
                </div>
            </div>

            <div class="subseccion" style="background-image: url(<?=$url_base?>resources/images/lugaresHolbox/item3.jpg); color:black; background-color: rgb(214, 214, 205);">
                <div id="sub3">
                    <h2>Punta Mosquito</h2>
                    <div class="textoIzquierda">
                        <p>
                            Punta Mosquito es una playa que se encuentra a pocos minutos del centro de Holbox. Se puede ir en bici o caminando.
                            En el trayecto hay un extenso banco de arena en el mar en el que podrás relajarte en silencio, caminar y apreciar en 
                            especies de aves, incluyendo flamingos.                      
                        </p>             
                    </div>
                </div>
            </div> 
            
            <div class="subseccion"  style="background-image: url(<?=$url_base?>resources/images/lugaresHolbox/item4.jpg); color:black; background-color: rgb(136, 187, 116);">
                <div id="sub4">
                    <h2>Paseo por los Manglares</h2>
                    <div class="textoDerecha">
                        <p>
                            Si quieres estar estar en contacto con la naturaleza explora los sinuosos manglares en kayaks, 
                            y descubre la maravillosa fauna y flora que habita en Holbox. Podrás encontrar numerosas 
                            aves exóticas, cocodrilos, peces de varios tamaños, entre otros animales.     
                            <br>
                            <br>
                        </p>
                    </div>
                </div>
            </div>    
            <div class="subseccion" style="background-image: url(<?=$url_base?>resources/images/lugaresHolbox/item5.jpg); color:rgba(255, 255, 255, 0.959);background-color: rgb(38, 104, 11);">
                <h2 style="padding:3% 0%;">Yalahau</h2>
                <div class="textoIzquierda">
                    <p>
                        Escondido en un mar de árboles, se encuentra un ojo de agua dulce cristalino. Sus aguas son muy frescas y es muy probable que veas
                        cocodrilos. 
                        <br>
                        <br>                       
                    </p>             
                </div>
            </div>
            <div class="subseccion" style="background-image: url(<?=$url_base?>resources/images/lugaresHolbox/item9.jpg); color:rgba(0, 0, 0, 0.959); background-color: rgb(56, 192, 185);">
                <div id="sub6">
                    <h2>Cabo Catoche</h2>
                    <div class="textoDerecha">
                        <p><strong>
                            A unos 43 Km al este de Holbox, se encuentra Cabo Catoche, punto en el cual se 
                            encuentran el Mar Caribe y el Golfo de Mexico. Se llega en lancha, y en ésta zona se pueden apreciar 
                            increíbles paisajes de playas vírgenes. Dada su exuberante vida marina es el lugar 
                            ideal para practicar la pesca y snorkel.
                        </strong>                        
                        </p>                
                    </div>
                </div>
            </div>   
            <div class="subseccion" style="background-image: url(<?=$url_base?>resources/images/lugaresHolbox/item11.jpg); color:rgba(0, 0, 0, 0.959); background-color: rgb(186, 196, 165);">
                <h2>Punta Cocos</h2>
                <div class="textoIzquierda">
                    <p><strong>
                        En el extremo contrario a Punta Mosquito, está Punta Coco, ubicada a 2.5 kilometros del centro de Holbox. Puedes llegar en bici 
                        o en carrito de golf. En este lugar encuentras colgadas hamacas sobre el mar, ideal para pasar un rato relajado.
                        Lugar ideal para explorar, acampar, ver un atardecer o simplemente 
                        hacer un picnic.
                        <br>
                    </strong>
                    </p>                
                </div>
            </div>

            <div class="subseccion" style="background-image: url(<?=$url_base?>resources/images/lugaresHolbox/item13.jpg); color:rgba(0, 0, 0, 0.959); background-color: rgb(102, 115, 173);">
                <h2>Isla Pasión</h2>
                <div class="textoIzquierda">
                    <p><strong>
                        A unos 15 minutos de Holbox está Isla Pasión, 
                        paraíso de playas vírgenes, aislado de todo ruido, donde solamente se escucha el murmullo de la vegetación 
                        que le rodea. Ideal para para un tiempo de relajación y contacto con la naturaleza.
                    </strong>
                    </p>                
                </div>
            </div>
            
            <div class="subseccion" style="background-image: url(<?=$url_base?>resources/images/lugaresHolbox/item14.jpg); color:rgba(255, 255, 255, 0.959); background-color: rgb(161, 140, 123);">
                <div id="sub8">
                    <h2>Isla Pájaros</h2>
                    <div class="textoDerecha">
                        <p><strong>
                            A 30 minutos de distancia  de Holbox, en Isla Pájaros se podrá observar la gran variedad 
                            de aves que la habitan, muchos en peligro de extinción, por lo que no se permite el paso a pie.                     
                            Desde un mirador, aprecia la diversidad de bellas aves que llegan al islote para hacer su nido. 
                            Entre las especies que admirará se encuentran los flamingos, pelícanos, patos y otros más, 
                            todos ellos en su ambiente natural y sin ataduras pues se hallan en total libertad.     
                        </strong>                  
                        </p>                
                    </div>
                </div>
            </div>                                     
        <!-- Lugares para visitar cuerpo end -->
        </div>
         <!-- Media section start -->
        <div class="section">
            <h1><span>¡Combinación de belleza y magia!</span></h1>
            <div class="video-container">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/uHFzG2Q1AhI" frameborder="1" allow="autoplay; encrypted-media" allowfullscreen></iframe> 
            </div>           
        </div>
        <!-- Media section end -->
        
        <!-- Galeria-->
        <div class="section">
            <h1>Galería de imágenes, te enamorarás aún más...</h1>
            <ul class="galeria">
                <li><a href="#img1"><img src="<?=$url_base?>resources/images/lugaresHolbox/bio/1.jpg"></a></li>
                <li><a href="#img2"><img src="<?=$url_base?>resources/images/lugaresHolbox/bio/2.jpg"></a></li>
                <li><a href="#img3"><img src="<?=$url_base?>resources/images/lugaresHolbox/cabo_catoche/1.jpg"></a></li>
                <li><a href="#img4"><img src="<?=$url_base?>resources/images/lugaresHolbox/cabo_catoche/2.jpg"></a></li>
                <li><a href="#img5"><img src="<?=$url_base?>resources/images/lugaresHolbox/IslaPajaros/1.jpg"></a></li>
                <li><a href="#img6"><img src="<?=$url_base?>resources/images/lugaresHolbox/IslaPajaros/2.jpg"></a></li>
                <li><a href="#img7"><img src="<?=$url_base?>resources/images/lugaresHolbox/IslaPajaros/3.jpg"></a></li>
                <li><a href="#img8"><img src="<?=$url_base?>resources/images/lugaresHolbox/Manglares/1.jpg"></a></li>
                <li><a href="#img9"><img src="<?=$url_base?>resources/images/lugaresHolbox/Manglares/2.jpg"></a></li>
                <li><a href="#img10"><img src="<?=$url_base?>resources/images/lugaresHolbox/Yalahau/1.jpg"></a></li>
                <li><a href="#img11"><img src="<?=$url_base?>resources/images/lugaresHolbox/Yalahau/2.jpg"></a></li>
                <li><a href="#img12"><img src="<?=$url_base?>resources/images/lugaresHolbox/whaleshark/1.jpg"></a></li>
                <li><a href="#img13"><img src="<?=$url_base?>resources/images/lugaresHolbox/whaleshark/2.png"></a></li>
                <li><a href="#img14"><img src="<?=$url_base?>resources/images/lugaresHolbox/Playa/1.jpg"></a></li>
                <li><a href="#img15"><img src="<?=$url_base?>resources/images/lugaresHolbox/Playa/10.jpg"></a></li>
                <li><a href="#img16"><img src="<?=$url_base?>resources/images/lugaresHolbox/Playa/5.jpg"></a></li>
                <li><a href="#img17"><img src="<?=$url_base?>resources/images/lugaresHolbox/Playa/3.jpg"></a></li>
                <li><a href="#img18"><img src="<?=$url_base?>resources/images/lugaresHolbox/PuntaCoco/1.jpg"></a></li>
                <li><a href="#img19"><img src="<?=$url_base?>resources/images/lugaresHolbox/PuntaCoco/4.jpg"></a></li>
                <li><a href="#img20"><img src="<?=$url_base?>resources/images/lugaresHolbox/PuntaCoco/8.jpg"></a></li>
                <li><a href="#img21"><img src="<?=$url_base?>resources/images/lugaresHolbox/PuntaCoco/6.jpg"></a></li>
            </ul>
        
            <div class="modal" id="img1">
                <h3>Bioluminiscencia</h3>
                <div class="imagen">
                    <a href="#img21">&#60;</a>
                    <a href="#img2"><img src="<?=$url_base?>resources/images/lugaresHolbox/bio/1.jpg"></a>
                    <a href="#img2">></a>
                </div>
                <a class="cerrar" href="#galeria">X</a>
            </div>
            
            <div class="modal" id="img2">
                <h3>Bioluminiscencia</h3>
                <div class="imagen">
                    <a href="#img1">&#60;</a>
                    <a href="#img3"><img src="<?=$url_base?>resources/images/lugaresHolbox/bio/2.jpg"></a>
                    <a href="#img3">></a>
                </div>
                <a class="cerrar" href="#galeria">X</a>
            </div>
            
            <div class="modal" id="img3">
                <h3>Cabo Catoche</h3>
                <div class="imagen">
                    <a href="#img2">&#60;</a>
                    <a href="#img4"><img src="<?=$url_base?>resources/images/lugaresHolbox/cabo_catoche/1.jpg"></a>
                    <a href="#img4">></a>
                </div>
                <a class="cerrar" href="#galeria">X</a>
            </div>
            
            <div class="modal" id="img4">
                <h3>Cabo Catoche</h3>
                <div class="imagen">
                    <a href="#img3">&#60;</a>
                    <a href="#img5"><img src="<?=$url_base?>resources/images/lugaresHolbox/cabo_catoche/2.jpg"></a>
                    <a href="#img5">></a>
                </div>
                <a class="cerrar" href="#galeria">X</a>
            </div>

            <div class="modal" id="img5">
                <h3>Isla Pájaros</h3>
                <div class="imagen">
                    <a href="#img4">&#60;</a>
                    <a href="#img6"><img src="<?=$url_base?>resources/images/lugaresHolbox/IslaPajaros/1.jpg"></a>
                    <a href="#img6">></a>
                </div>
                <a class="cerrar" href="#galeria">X</a>
            </div>

            <div class="modal" id="img6">
                <h3>Isla Pájaros</h3>
                <div class="imagen">
                    <a href="#img5">&#60;</a>
                    <a href="#img7"><img src="<?=$url_base?>resources/images/lugaresHolbox/IslaPajaros/2.jpg"></a>
                    <a href="#img7">></a>
                </div>
                <a class="cerrar" href="#galeria">X</a>
            </div>

            <div class="modal" id="img7">
                <h3>Isla Pajaros</h3>
                <div class="imagen">
                    <a href="#img6">&#60;</a>
                    <a href="#img8"><img src="<?=$url_base?>resources/images/lugaresHolbox/IslaPajaros/3.jpg"></a>
                    <a href="#img8">></a>
                </div>
                <a class="cerrar" href="#galeria">X</a>
            </div>

            <div class="modal" id="img8">
                <h3>Manglares</h3>
                <div class="imagen">
                    <a href="#img7">&#60;</a>
                    <a href="#img7"><img src="<?=$url_base?>resources/images/lugaresHolbox/Manglares/1.jpg"></a>
                    <a href="#img9">></a>
                </div>
                <a class="cerrar" href="#galeria">X</a>
            </div>

            <div class="modal" id="img9">
                <h3>Manglares</h3>
                <div class="imagen">
                    <a href="#img8">&#60;</a>
                    <a href="#img10"><img src="<?=$url_base?>resources/images/lugaresHolbox/Manglares/2.jpg"></a>
                    <a href="#img10">></a>
                </div>
                <a class="cerrar" href="#galeria">X</a>
            </div>

            <div class="modal" id="img10">
                    <h3>Yalahau</h3>
                    <div class="imagen">
                        <a href="#img9">&#60;</a>
                        <a href="#img11"><img src="<?=$url_base?>resources/images/lugaresHolbox/Yalahau/1.jpg"></a>
                        <a href="#img11">></a>
                    </div>
                    <a class="cerrar" href="#galeria">X</a>
            </div>

            <div class="modal" id="img11">
                <h3>Yalahau</h3>
                <div class="imagen">
                    <a href="#img10">&#60;</a>
                    <a href="#img12"><img src="<?=$url_base?>resources/images/lugaresHolbox/Yalahau/2.jpg"></a>
                    <a href="#img12">></a>
                </div>
                <a class="cerrar" href="#galeria">X</a>
            </div>

            <div class="modal" id="img12">
                <h3>Tiburón Ballena</h3>
                <div class="imagen">
                    <a href="#img11">&#60;</a>
                    <a href="#img13"><img src="<?=$url_base?>resources/images/lugaresHolbox/whaleshark/1.jpg"></a>
                    <a href="#img13">></a>
                </div>
                <a class="cerrar" href="#galeria">X</a>
            </div>

            <div class="modal" id="img13">
                <h3>Tiburón Ballena</h3>
                <div class="imagen">
                    <a href="#img12">&#60;</a>
                    <a href="#img14"><img src="<?=$url_base?>resources/images/lugaresHolbox/whaleshark/2.png"></a>
                    <a href="#img14">></a>
                </div>
                <a class="cerrar" href="#galeria">X</a>
            </div>

            <div class="modal" id="img14">
                <h3>Punta Mosquito</h3>
                <div class="imagen">
                    <a href="#img13">&#60;</a>
                    <a href="#img15"><img src="<?=$url_base?>resources/images/lugaresHolbox/Playa/1.jpg"></a>
                    <a href="#img15">></a>
                </div>
                <a class="cerrar" href="#galeria">X</a>
            </div>

            <div class="modal" id="img15">
                    <h3>Punta Mosquito</h3>
                    <div class="imagen">
                        <a href="#img14">&#60;</a>
                        <a href="#img16"><img src="<?=$url_base?>resources/images/lugaresHolbox/Playa/10.jpg"></a>
                        <a href="#img16">></a>
                    </div>
                    <a class="cerrar" href="#galeria">X</a>
            </div>

            <div class="modal" id="img16">
                <h3>Punta Mosquito</h3>
                <div class="imagen">
                    <a href="#img15">&#60;</a>
                    <a href="#img17"><img src="<?=$url_base?>resources/images/lugaresHolbox/Playa/5.jpg"></a>
                    <a href="#img17">></a>
                </div>
                <a class="cerrar" href="#galeria">X</a>
            </div> 
            <div class="modal" id="img17">
                <h3>Punta Mosquito</h3>
                <div class="imagen">
                    <a href="#img16">&#60;</a>
                    <a href="#img18"><img src="<?=$url_base?>resources/images/lugaresHolbox/Playa/3.jpg"></a>
                    <a href="#img18">></a>
                </div>
                <a class="cerrar" href="#galeria">X</a>
            </div>

            <div class="modal" id="img18">
                <h3>Punta Coco</h3>
                <div class="imagen">
                    <a href="#img17">&#60;</a>
                    <a href="#img19"><img src="<?=$url_base?>resources/images/lugaresHolbox/PuntaCoco/1.jpg"></a>
                    <a href="#img19">></a>
                </div>
                <a class="cerrar" href="#galeria">X</a>
            </div>

            <div class="modal" id="img19">
                <h3>Punta Coco</h3>
                <div class="imagen">
                    <a href="#img18">&#60;</a>
                    <a href="#img20"><img src="<?=$url_base?>resources/images/lugaresHolbox/PuntaCoco/4.jpg"></a>
                    <a href="#img20">></a>
                </div>
                <a class="cerrar" href="#galeria">X</a>
            </div>

            <div class="modal" id="img20">
                    <h3>Punta Coco</h3>
                    <div class="imagen">
                        <a href="#img19">&#60;</a>
                        <a href="#img21"><img src="<?=$url_base?>resources/images/lugaresHolbox/PuntaCoco/8.jpg"></a>
                        <a href="#img21">></a>
                    </div>
                    <a class="cerrar" href="#galeria">X</a>
            </div>

            <div class="modal" id="img21">
                <h3>Punta Coco</h3>
                <div class="imagen">
                    <a href="#img20">&#60;</a>
                    <a href="#img1"><img src="<?=$url_base?>resources/images/lugaresHolbox/PuntaCoco/6.jpg"></a>
                    <a href="#img1">></a>
                </div>
                <a class="cerrar" href="#galeria">X</a>
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