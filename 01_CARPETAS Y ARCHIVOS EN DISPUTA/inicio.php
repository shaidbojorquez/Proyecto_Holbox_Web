<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es-Mx">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="archivos_necesarios/css/estilosInicio.css">
        <link rel="stylesheet" href="archivos_necesarios/css/estilosGenerales.css">
        <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Montaga'>
        <script src="archivos_necesarios/js/jquery.min.js"></script>
        <script src="archivos_necesarios/js/moment.min.js"></script>
        <link rel="stylesheet" href="archivos_necesarios/css/fullcalendar.min.css">
        <link rel="stylesheet" href="archivos_necesarios/css/estilos.css">
        <script src="archivos_necesarios/js/fullcalendar.min.js"></script>
        <script src="archivos_necesarios/js/es.js"></script>
        <style>
            .video {
                background-color: rgba(252,211,21,.35);
                background-color: #fff;
                box-shadow: 0 2px 5px 0;
                text-align: center;
                padding: 15px;
                
                margin-top: 20px;
                margin-bottom: 10px;
                
                top: 0;
                bottom: 0;
                left: 0;
                right: 0;
                overflow: hidden;
                position: relative;

            }
            
            #calendario{
                box-shadow: 0 2px 5px 0;
                padding: 20px;
            }
        </style>
        <title>Inicio</title>
    
        <script src="resources/js/autologout.js"></script>
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
                        <li><a href="inicio.php">Inicio</a></li>
                        <li><a href="">Secciones</a>
                            <ul>
                                <li><a href="paginas/Historia.php">Historia</a></li>
                                <li><a href="paginas/LugaresHolbox.php">¿Qué hacer?</a></li>
                                <li><a href="paginas/Gastronomia.php">Gastronomía</a></li>
                                <li><a href="paginas/FloraFauna.php">Flora y Fauna</a></li>
                            </ul>
                        </li>
                        <li><a href="paginas/experienciasH.php">Experiencias</a></li>
                        <li><a href="paginas/catalogo.php">Catálogo</a></li>
                        <?php
                        include("sistemas/sistema_login/manejador_sesiones.php");
                        $menu = get_Menu();

                        foreach( $menu as $opcion => $link){
                            echo "<li><a href=\"$link\">$opcion</a></li>";
                        }
                        ?>
                    </ul>
                </nav>
            </div>
            <div id="sesiones">
                <?php
                if(empty($_SESSION)){
                    echo "<label><a href='sistemas/sistema_login/login.php'>Iniciar Sesión  </a></label>";
                    echo "<label><a href='sistemas/sistema_signup/signup.php'> Registrarse</a></label>";
                }else{
                    echo "<label>Bienvenido ".$_SESSION['nombre'] ." </label>";
                    echo "<label><a href='sistemas/sistema_login/logout.php'>Cerrar Sesión </a></label>";
                }
                ?>
            </div>
            </header>
        <div class = "middle-content">
            <div class="slider">
                <ul>
                    <li>
                        <img src="images/Inicio/slider-inicio.jpg" alt="Inicio" title="Inicio">
                        <div class="image-text"><span>Bienvenido, disfrute de las maravillas de <b>Holbox</b>.</span></div>
                    </li>
                    <li>
                        <img src="images/Inicio/slider-historia.jpg" alt="Historia" title="historia">
                        <div class="image-text"><span>Conozca la fascinante historia de <b>Holbox</b>.</span></div>
                    </li>
                    <li>
                        <img src="images/Inicio/slider-todo.jpg" alt="que hacer?" title="¿Qué hacer?">
                        <div class="image-text"><span>Le proporcionamos una lista de lugares que debe conocer sobre <b>Holbox</b>.</span></div>
                    </li>
                    <li>
                        <img src="images/Inicio/slide-food2.jpg" alt="comida" title="Comida">
                        <div class="image-text"><span>La rica comida lo enamorará.</span></div>
                    </li>
                    <li>
                        <img src="images/Inicio/slider-flora-fauna.jpg" alt="flora y fauna" title="Flora y Fauna">
                        <div class="image-text"><span>Conozca la famosa luminiscencia.</span></div>
                    </li>
                </ul>
            </div>
            <div id="center">
                <div class="tamano-7" id="information">
                    <h2>Holbox</h2>
                    <p><b>Holbox</b> (en maya: hoyo negro, agujero negro) es una pequeña isla mexicana, peculiar por sus calles de arena blanca y platillos tradicionales, por su ubicación estratégica en límites del mar Caribe y Golfo de México. Sus aguas ricas en fitoplacton y otros pequeños crustáceos la hacen un santuario natural para el tiburon ballena, siendo el nado con el tiburon ballena una de las principales actividades recreativas de la isla.</p>
                </div>
                <div class="tamano-5" id="maps">
                    <h2>Ubicación</h2>
                    <div>
                        <iframe  class="maps" allowfullscreen="" frameborder="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d237497.60465166878!2d-87.39438225116474!3d21.55076228611968!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f4d9677b0abe2f1%3A0xa56edc4fcc77e54e!2sHolbox!5e0!3m2!1ses!2smx!4v1496856187824"></iframe>
                    </div>
                </div>
            </div>
            <!-- The Modal for Video-->
            <div id="myModal" class="tamano-12 modal">
                <span class="close">&times;</span>
                <video class="modal-content" id="vid01" controls></video>
            </div>
            
            <div id="bottom" class="tamano-12" style="background-color:white; overflow:hidden;">
                <div class="tamano-4" id= "calendario" style="background-color:white;">
                    <h3>Calendario de eventos</h3>
                    <div id ="CalendarioWeb"></div>
                </div>
                <div class="tamano-8 video">
                    <h3>Siente la experiencia.</h3>
                    <video id="video-experiencia" src="video/To%20my%20Holbox.webm" width="60%"></video>
                    <div id="video-over">Toca el video para ampliar.</div>
                </div>
                
            </div>
            
            <!-- The Modal  for Calendar-->
            <div id="myModalCalendar" class="modal tamano-12">
                <!-- Modal content -->
                <div class="modal-content">
            <div class="modal-header">
            <span class="closeCalendar">&times;</span>
            <h2>Evento</h2>
            <h4 id="tituloEvento"></h4>
            </div>
            <div class="modal-body">
                    <div class="campo">
                    <input type="hidden" id="txtID"  name="txtID"/>
                    </div>

                    <div class="campo">
                            <label for="txtFecha">Fecha: </label>
                            <input type="text" name="txtfecha" disabled id="txtFecha" placeholder="Fecha"><br/>
                    </div>

                    <div class="campo">
                            <label for="txtTitulo">Titulo: </label>
                            <input type="text" name="txttitulo"  id="txtTitulo" placeholder="Titulo del evento"><br/>
                    </div>

                    <div class="campo">
                            <label for="txtHora">Hora: </label>
                            <input type="datetime" name="txthora"  id="txtHora" placeholder="Hora" value = "10:30" ><br/>
                    </div>

                    <div class="campo" >
                            <label for="txtDescripcion">Descripcion: </label>
                            <textarea   id = "txtDescripcion" rows = "3" placeholder="Descripcion del evento" ></textarea><br/>
                    </div>
            </div>
            <div class="modal-footer" style="text-align:center;">
            <button type="button" id="btnOk" class="botonModalC">OK</button>
            </div>
            </div>

            </div>
            
        </div>
        <footer>
            <div id="about">
                <div class="tamano-7" id="menu-footer">
                    <nav>
                        <ul>
                            <li><a href="inicio.php">Inicio</a></li>
                            <li><a href="paginas/Historia.php">Historia</a></li>
                            <li><a href="paginas/LugaresHolbox.php">¿Qué hacer?</a></li>
                            <li><a href="paginas/Gastronomia.php">Gastronomía</a></li>
                            <li><a href="paginas/FloraFauna.php">Flora y Fauna</a></li>
                            <li><a href="paginas/experienciasH.php">Experiencias</a></li>
                            <li><a href="paginas/catalogo.php">Catálogo</a></li>
                            <?php
                                $menu = get_Menu();

                                foreach( $menu as $opcion => $link){
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

    <!---modal for video--->
        <script>

            document.getElementById("video-experiencia").addEventListener('click',llamarModal);
            // Get the modal
            const modal = document.getElementById('myModal');
            //variables img y caption del modal
            let modalImg = document.getElementById("vid01");
            //Modificar el contenido del modal
            function llamarModal(){
                modal.style.display = "block";
                modalImg.src = this.src;
                modalImg.play();
            }
            function playPause(myVideo) {
                if (myVideo.play)
                    myVideo.pause();
            }
            // Get the <span> element that closes the modal
            let spanMod = document.getElementsByClassName("close")[0];

            // When the user clicks on <span> (x), close the modal
            spanMod.onclick= function close() {
                modalImg.pause();
                modal.style.display = "none";

            }
            // When the user clicks anywhere outside of the modal, close it
                window.onclick = function(event) {
                    if (event.target == modal) {
                        modal.style.display = "none";
                    }
                }

            </script>
        <!--modal for calendar-->
            <script>
                $(document).ready(function(){
                    $('#CalendarioWeb').fullCalendar({
                        events: 'funciones/base_de_datos/eventos.php',
                        eventClick:function(calEvent, jsEvent, view){
                            $('#tituloEvento').html(calEvent.title);
                            $('#txtDescripcion').val(calEvent.descripcion);
                            $('#txtID').val(calEvent.id);
                            $('#txtTitulo').val(calEvent.title);
                            FechaHora =calEvent.start._i.split(" ");
                            $('#txttFecha').val(FechaHora[0]);
                            $('#txtHora').val(FechaHora[1]);
                            document.getElementById('myModalCalendar').style.display = "block";
                        }

                    });
                });
            </script>

            <script>
                // Get the modal
                var modalCalendar = document.getElementById('myModalCalendar');

                // Get the <span> element that closes the modal
                var spanCalendar = document.getElementsByClassName("closeCalendar")[0];

                // When the user clicks on <span> (x), close the modal
                spanCalendar.onclick = function() {
                    modal.style.display = "none";
                }

                // When the user clicks anywhere outside of the modal, close it
                window.onclick = function(event) {
                    if (event.target == modalCalendar) {
                        modalCalendar.style.display = "none";
                    }
                }
            </script>

            <script>
            var NuevoEvento;
            $('#btnOk').click(function(){
                document.getElementById('myModalCalendar').style.display = "none";     
            });
            function limpiarFormulario(){
                $('#txtDescripcion').val('');
                $('#txtID').val('');
                $('#txtTitulo').val('');
                $('#txtColor').val('');
            }

        </script>
    </body>
</html>