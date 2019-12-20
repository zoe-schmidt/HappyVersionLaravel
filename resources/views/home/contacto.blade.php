@extends("plantilla")

@section("main")
<link href="https://fonts.googleapis.com/css?family=Comfortaa&display=swap" rel="stylesheet">
<link rel="stylesheet" href="/css/contacto.css">

<div class="contenedor-principal">

            <main>
                <section class="contacto-happy">

                    <br>

                    <article class="formulario-contacto">

                        <div class="contacto-texto">
                            <h3 class="titulos-seccion">Contactanos:</h3 class="titulos-seccion">
                            </div>

                            <br>

                        <form action="">
                            <p>
                                <label for="email" class="fuente-label">Email:</label>
                                <input type="email" name="email" id="email"placeholder="ejemplo@email.com">
                            </p>

                            <br>

                            <p>
                            <label for="nombre" class="fuente-label">Nombre:</label>
                            <input type="text"  name="nombre" id="nombre">
                            </p>

                            <br>

                            <p>
                                <label for="apellido" class="fuente-label">Apellido:</label>
                                <input type="text" name="apellido" id="apellido">
                            </p>

                            <br>

                            <textarea name="consulta" id="consulta" cols="50" rows="10" placeholder="Dejanos tu consulta"></textarea>

                            <br>
                            <button type="submit" class="boton">Enviar</button>
                            <button  class="boton" type="reset">Cancelar</button>
                        </form>
                    </article>




                </section>

                        <section class="mapa">
                                <div class="texto-mapa">
                                    <h3 class="titulos-seccion">Nuestras Oficinas</h3 class="titulos-seccion">
                                </div>

                            <div class="mapa-google">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3283.989667667361!2d-58.39448438502076!3d-34.60442278045921!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bccac198206de7%3A0x31a4c79ffb528624!2sAv.%20Corrientes%20%26%20Av.%20Callao%2C%20C1042%20CABA!5e0!3m2!1ses!2sar!4v1567982631375!5m2!1ses!2sar" width="600" height="300" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                            </div>
                        </section>

                        <section class="redes">
                            <div class="texto-redes">
                                <h3 class="titulos-seccion">Nuestras Redes:</h3 class="titulos-seccion">
                            </div>
                            <div class="lista-redes">
                                <ul>
                                    <li><a href="https://www.facebook.com/"><i class="fab fa-facebook"></i></a></li>
                                    <li><a href="https://twitter.com/"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="https://www.instagram.com/?hl=es-la"><i class="fab fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </section>
            </main>


</div>

@endsection
