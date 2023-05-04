<template>
        <div class="seccion-principal">
        <div class="carrusel-resultados">
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row rowcarrusel" style="width: 100%; margin: 0px">
                            <div class="col-6 boxl">
                                Rayo Vallecano Basket - FC Barcelona
                            </div>
                            <div class="col-6 boxr">
                                Partido 2
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-6 boxl">
                                Rayo Vallecano Basket - FC Barcelona
                            </div>
                            <div class="col-6 boxr">
                                Partido 4
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" style="width: 24px; height: 40px;" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                    <span class="carousel-control-next-icon" style="width: 24px; height: 40px" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>

        <section class="carrusel-noticias mb-3 w-100">
            <div class="container-fluid p-0">
                <div class="row g-0">
                    <div class="col">
                        <div id="carouselExampleIndicators2" class="carousel slide" data-bs-ride="carousel">
                            <!-- Slides -->
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="https://via.placeholder.com/800x400?text=Slide+1" class="d-block w-100" alt="Slide 1">
                                    <!-- Contenido de la sección -->
                                    <div class="carousel-caption d-md-block bg-black-50 py-3">
                                        <h2 class="text-white fw-bold mb-0">Título de la sección<a href="#" class="btn btn-danger float-end">LEER MÁS</a></h2>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img src="https://via.placeholder.com/800x400?text=Slide+2" class="d-block w-100" alt="Slide 2">
                                    <!-- Contenido de la sección -->
                                    <div class="carousel-caption d-md-block bg-black-50 py-3">
                                        <h2 class="text-white fw-bold mb-0">Título de la sección<a href="#" class="btn btn-danger float-end">LEER MÁS</a></h2>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img src="https://via.placeholder.com/800x400?text=Slide+3" class="d-block w-100" alt="Slide 3">
                                    <!-- Contenido de la sección -->
                                    <div class="carousel-caption d-md-block bg-black-50 py-3">
                                        <h2 class="text-white fw-bold mb-0">Título de la sección<a href="#" class="btn btn-danger float-end">LEER MÁS</a></h2>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img src="https://via.placeholder.com/800x400?text=Slide+4" class="d-block w-100" alt="Slide 4">
                                    <!-- Contenido de la sección -->
                                    <div class="carousel-caption d-md-block bg-black-50 py-3">
                                        <h2 class="text-white fw-bold mb-0">Título de la sección<a href="#" class="btn btn-danger float-end">LEER MÁS</a></h2>
                                    </div>
                                </div>
                            </div>
                            <!-- Indicadores -->
                            <ol class="carousel-indicators">
                                <li data-bs-target="#carouselExampleIndicators2" data-bs-slide-to="0" class="active"></li>
                                <li data-bs-target="#carouselExampleIndicators2" data-bs-slide-to="1" class="active"></li>
                                <li data-bs-target="#carouselExampleIndicators2" data-bs-slide-to="2" class="active"></li>
                                <li data-bs-target="#carouselExampleIndicators2" data-bs-slide-to="3" class="active"></li>
                            </ol>

                            <!-- Botones de control -->
                            <a class="carousel-control-prev" href="#carouselExampleIndicators2" role="button" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Anterior</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleIndicators2" role="button" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Siguiente</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </section>
        <section class="cuadros">
            <div class="row w-100 m-0">
                <div class="cuadro col-md-3">
                    <a href="" class="entrada-banner"></a>
                </div>
                <div class="cuadro col-md-3" >
                    <a href="https://twitter.com/RayoVallecano" class="twitter-banner"></a>
                </div>
                <div class="cuadro col-md-3">
                    <a href="https://www.instagram.com/rayovallecano/" class="instagram-banner"></a>
                </div>
                <div class="cuadro-derecha col-md-3">
                    <a href="https://www.youtube.com/user/rayovallecanotv" class="youtube-banner"></a>
                </div>
            </div>
        </section>
        <section class="imagenes">
            <div class="imagen">
                <img src="">
                <p>Texto de la imagen 1</p>
            </div>
            <div class="imagen">
                <img src="">
                <p>Texto de la imagen 2</p>
            </div>
            <div class="imagen">
                <img src="">
                <p>Texto de la imagen 3</p>
            </div>
            <div class="imagen">
                <img src="">
                <p>Texto de la imagen 4</p>
            </div>
        </section>
        </div>

        <section class="tabla">
            <h2>Tabla de resultados</h2>
            <div class="tabla-responsive">
                <table>
                    <thead>
                    <tr>
                        <th>Equipo</th>
                        <th>PJ</th>
                        <th>PG</th>
                        <th>PP</th>
                        <th>PF</th>
                        <th>PC</th>
                        <th>DIF</th>
                        <th>Pts</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>Equipo 1</td>
                        <td>10</td>
                        <td>8</td>
                        <td>2</td>
                        <td>800</td>
                        <td>700</td>
                        <td>+100</td>
                        <td>18</td>
                    </tr>
                    <tr>
                        <td>Equipo 2</td>
                        <td>10</td>
                        <td>7</td>
                        <td>3</td>
                        <td>750</td>
                        <td>690</td>
                        <td>+60</td>
                        <td>17</td>
                    </tr>
                    <tr>
                        <td>Equipo 3</td>
                        <td>10</td>
                        <td>5</td>
                        <td>5</td>
                        <td>700</td>
                        <td>710</td>
                        <td>-10</td>
                        <td>15</td>
                    </tr>
                    <tr>
                        <td>Equipo 4</td>
                        <td>10</td>
                        <td>4</td>
                        <td>6</td>
                        <td>690</td>
                        <td>730</td>
                        <td>-40</td>
                        <td>14</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </section>
        <div class="menu-lateral">
            <h2>Próximos Eventos de Baloncesto</h2>
            <div class="proximos-eventos-baloncesto">
                <div class="evento">
                    <div class="cuadrado-rojo">13 Abr</div>
                    <div class="info-evento">
                        <div class="hora">19:00</div>
                        <div class="lugar">Pabellón Deportivo</div>
                        <div class="tipo">Liga ACB</div>
                        <div class="jornada">Jornada 33</div>
                        <div class="equipos">Real Madrid vs Valencia Basket</div>
                    </div>
                </div>
                <div class="evento">
                    <div class="cuadrado-negro">15 Abr</div>
                    <div class="info-evento">
                        <div class="hora">20:30</div>
                        <div class="lugar">Palau Blaugrana</div>
                        <div class="tipo">Liga ACB</div>
                        <div class="jornada">Jornada 33</div>
                        <div class="equipos">Barcelona vs Baskonia</div>
                    </div>
                </div>
                <!-- Aquí irían más eventos -->
            </div>
        </div>


</template>

<script>
export default {
    name: "Home"
}
</script>

<style scoped>

</style>
