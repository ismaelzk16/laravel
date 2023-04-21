<template>
    <div class="contenedor">
        <div class="carrusel-resultados" style="justify-content: space-between">
            <div class="carousel-container">
                <div class="carousel-arrow left-arrow">&#8249;</div>
                <div class="carousel-content">
                    <div class="slide">
                        <div class="left-panel">
                            <h2>Resultado partido 1</h2>
                            <p>Equipo local: 80</p>
                            <p>Equipo visitante: 75</p>
                        </div>
                        <div class="resultado-vs-carrusel">
                            VS
                        </div>
                        <div class="right-panel">
                            <h2>Resultado partido 2</h2>
                            <p>Equipo local: 90</p>
                            <p>Equipo visitante: 85</p>
                        </div>
                    </div>
                    <div class="slide">
                        <div class="left-panel">
                            <h2>Resultado partido 3</h2>
                            <p>Equipo local: 70</p>
                            <p>Equipo visitante: 65</p>
                        </div>
                        <div class="resultado-vs-carrusel">
                            VS
                        </div>
                        <div class="right-panel">
                            <h2>Resultado partido 4</h2>
                            <p>Equipo local: 85</p>
                            <p>Equipo visitante: 80</p>
                        </div>
                    </div>
                    <div class="slide">
                        <div class="left-panel">
                            <h2>Resultado partido 3</h2>
                            <p>Equipo local: 70</p>
                            <p>Equipo visitante: 65</p>
                        </div>
                        <div class="resultado-vs-carrusel">
                            VS
                        </div>
                        <div class="right-panel">
                            <h2>Resultado partido 4</h2>
                            <p>Equipo local: 85</p>
                            <p>Equipo visitante: 80</p>
                        </div>
                    </div>
                    <div class="slide">
                        <div class="left-panel">
                            <h2>Resultado partido 3</h2>
                            <p>Equipo local: 70</p>
                            <p>Equipo visitante: 65</p>
                        </div>
                        <div class="resultado-vs-carrusel">
                            VS
                        </div>
                        <div class="right-panel">
                            <h2>Resultado partido 4</h2>
                            <p>Equipo local: 85</p>
                            <p>Equipo visitante: 80</p>
                        </div>
                    </div>
                </div>
                <div class="carousel-arrow right-arrow">&#8250;</div>
            </div>
        </div>
        <section class="cuadros">
            <div class="cuadro">
                <a href="#"><img src=""></a>
            </div>
            <div class="cuadro">
                <a href="#"><img src=""></a>
            </div>
            <div class="cuadro">
                <a href="#"><img src=""></a>
            </div>
            <div class="cuadro">
                <a href="#"><img src=""></a>
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

    </div>

</template>

<script>
export default {
    name: "Home"
}
</script>

<style scoped>

</style>
