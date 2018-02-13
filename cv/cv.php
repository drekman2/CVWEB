<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta name="author" content="Miguel Ángel Díez Delgado">
        <meta charset="UTF-8"> 

        <link href="../css/bootstrap.min.css" rel="stylesheet" />
        <link type="text/css" rel="stylesheet" href="../css/estilosCV.css">
        <link href='http://fonts.googleapis.com/css?family=Rokkitt:400,700|Lato:400,300' rel='stylesheet' type='text/css'>

    </head>
    <body id="top">
        <?php
        //COMPROBAR SESION
        //reanudamos la sesion creada para el usuario logeado para poder rescatar lo almacenado en la variable super global.
//        session_start();
//        //Comprobamos que la sesion esta abierta con el login correcto sino redirrrecionamos
//        if (empty($_SESSION["dni"])) {
//            header("Location:index.php");
//        }
        ?>
        <div id="cv" class="instaFade">
            <div class="mainDetails">
                <div id="headshot" class="quickFade">
                    <img id="foto" src="" alt="" />
                </div>
                <div id="name">
                    <h1 id="nombre" class="quickFade"></h1>
                    <h2 class="quickFade">Curriculum Vitae</h2>
                </div>
                <div id="contactDetails" class="quickFade">
                </div>
                <div class="clear"></div>
            </div>
            <div id="mainArea" class="quickFade">
                <section>
                    <div class="sectionTitle">
                        <h1>Experiencia Laboral</h1>
                    </div>

                    <div class="sectionContent" id="experiencia">
                        
                    </div>
                    <div class="clear"></div>
                </section>
                <section>
                    <div class="sectionTitle">
                        <h1>Formación</h1>
                    </div>

                    <div class="sectionContent" id="formacion">
                        
                    </div>
                    <div class="clear"></div>
                </section>
                <section>
                    <div class="sectionTitle">
                        <h1>Otra formación</h1>
                    </div>

                    <div class="sectionContent" id="otraFormacion">
                        
                    </div>
                    <div class="clear"></div>
                </section>
                <section>
                    <div class="sectionTitle">
                        <h1>Conocimientos Principales</h1>
                    </div>

                    <div class="sectionContent">
                        <article>
                            <h2>Bases de Datos</h2>
                            <p>Access, SQL, MySql, Oracle.</p>
                        </article>
                        <article>
                            <h2>Frontend</h2>
                            <p class="detalles">Lenguaje de Marcas HTML/XHTML</p>
                            <p class="detalles">Hojas de estilo: CSS 2.0 / 3.0<p>
                            <p class="detalles">Lenguajes de Guion: JavaScript y JQuery.<p>
                        </article>
                        <article>
                            <h2>Backend</h2>
                            <p class="detalles">PHP</p>

                        </article>
                        <article>
                            <h2>Lenguaje de alto nivel</h2>
                            <p class="detalles">Java</p>
                        </article>
                        <article>
                            <h2>Lenguaje de programación dispositivos móviles</h2>
                            <p class="detalles">Android</p>
                        </article>
                        <article>
                            <h2>Otros Lenguajes de Programación</h2>
                            <p class="detalles">VB.NET y Python</p>
                        </article>
                        <article>
                            <h2>Otros Conocimientos</h2>
                            <p class="detalles">Administrador de Redes Windows y Linux</p>
                            <p class="detalles">Administrador Discos Windows y Linux</p>
                            <p class="detalles">Administrador usuarios y permisos Windows y Linux</p>
                            <p class="detalles">Copias de seguridad Windows y Linux</p>
                            <p class="detalles">Uso del servidor gratuito de Apache Xamp.</p>
                            <p class="detalles">Uso FTP(File transfer protocol)- Filezilla</p>
                            <p class="detalles">Servlet, XML, Microsoft SQL Servet.</p>
                        </article>
                        <article>
                            <h2>IDE</h2>
                            <p>eclipse, Netbeans y jdeveloper</p>
                        </article>
                    </div>
                    <div class="clear"></div>
                </section>
                <section>
                    <div class="sectionTitle">
                        <h1>Otra Datos de Interés</h1>
                    </div>
                    <div class="sectionContent">
                        <article>
                            <p>Incorporación inmediata.</p>
                            <p>Disponibilidad horaria.</p>
                            <p>Disponibilidad para viajar.</p>
                            <p><u>Informática conocimientos medios a nivel profesional:</u></p>
                            <p class="detalles">Sistemas Operativos: Windows, Ubuntu, Android.</p>
                            <p class="detalles">Ofimática(Microsoft Office, OpenOffice, LibreOffice)</p>
                            <p class="detalles">Diseño: paint.net, GIMP, Photoshop.</p>
                            <p class="detalles">Comunicaciones: Wireless, TCP/IP.</p>
                            <p>Carne de conducir clase B</p>
                        </article>
                    </div>
                    <div class="clear"></div>
                </section>
            </div>
        </div>
        <!-- Modal Saludos-->
        <div class="modal fade" id="modal" role="dialog">
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Saludos</h4>
                    </div>
                    <div class="modal-body">
                        <p id="mensaje"></p>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">
                                <i class="fa fa-times" aria-hidden="true"></i>Cerrar
                            </button>  
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="../js/jquery-2.2.0.js"></script>
        <script src="../js/bootstrap.min.js"></script>
        <script src="../js/scriptCargarDatos.js"></script>
        <script type="text/javascript">
            $(function () {
                //Mostrar Saludo
                $("#modal").modal();
            });
        </script>
        
    </body>
</html>

