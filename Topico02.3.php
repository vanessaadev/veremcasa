<?php
$AtividadeAvaliativa = $_GET['AA'];
?>
<?php
// EGPCE - Chama o conectamoodle.php
require_once('conectamoodle.php');
?>

<?php
$page = 'Topico02.3';
include('layout/header.php');
?>

<body>
    <!-- PLUGIN DO FADE IN -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

    <!-- MENU -->
    <?php include('layout/menu.php') ?>

    <div id="main">
        <!-- NAV TOP -->
        <?php include('layout/nav.php') ?>
        <!-- CONTEUDO INICIO -->
        <div class="main-content container-fluid Texto">
            <div class="row">
                <!-- Begin row -->
                <div class="col-md-1"></div>
                <div class="col-md-10">
                    <!-- Begin col-md-10 -->
                    <div class="page-title">

                    <p class="SubTitulo">ECOSSISTEMAS ASSOCIADOS</p>
                        <hr>
                        <br>

                        <p>Quando falamos em biomas, logo nos vem à mente outro conceito: ecossistema. Contudo, eles não significam a mesma coisa. Para a classificação de bioma, interessa mais o meio físico (a fisionomia da área, principalmente da vegetação). Já os ecossistemas constituem uma rede de interações entre organismos e entre os organismos e o ambiente, dentro de um bioma.</p>

                        <p>Em outras palavras, o bioma pode ser definido como uma grande área de vida formada por um complexo de ecossistemas com características homogêneas. Assim, nos biomas Caatinga e Mata Atlântica no Ceará, temos uma diversidade de ecossistemas que abrigam inúmeras espécies de seres vivos. Conheça a seguir importantes ecossistemas presentes nos biomas do Ceará.</p>
                        <br><br>

                        <p class="SubSubTitulo">Manguezal</p>
                        <hr>
                        <br>


                        <p>O Manguezal é um ecossistema localizado ao longo do litoral, no encontro da água do rio com o a do mar. É considerado um dos ecossistemas mais complexos e ricos em biodiversidade, onde peixes, aves, crustáceos e outros animais encontram as condições para se reproduzirem, se alimentarem e se abrigarem. Por isso, o manguezal também é conhecido como um berçário natural, tanto para as espécies que vivem nesse ambiente, como as que migram em busca de condições favoráveis para a sobrevivência.</p>

                        <p>No Estado do Ceará, os manguezais são encontrados ao longo de todo o litoral, com cerca de 19.518 ha (1,4% da área de manguezais do Brasil). Sua constituição vegetacional é representada pelas principais espécies de mangue: mangue vermelho (Rhizophora mangue); mangue branco (Laguncularia racemosa); mangue preto, canoé (Avicennia sp); e mangue de botão (Conocarpus erectus).</p>


                        <div class="row">
                            <div class="col-md-3 col-sm-12">
                                <!-- Titulo Figura -->
                                <div class="text-center">
                                    <a href="imagens/Figura36.png" data-bs-toggle="modal" data-bs-target="#Imagem36">
                                        <img class="img-fluid wow fadeInUp" data-wow-delay="1.0s" width="300" src="imagens/Figura36.png" alt="Alt da imagem fica aqui">
                                    </a>
                                    <p class="FonteFigura">Garça-branca. Parque Estadual do Cocó - Fortaleza/CE.</p>
                                </div>

                                <!-- Imagem 36 - MODAL -->
                                <div class="modal fade text-center" id="Imagem36" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img class="img-fluid" src="imagens/Figura36.png" alt="Alt da imagem fica aqui">
                                            </div>
                                            <div class="modal-footer text-center">
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <!-- Figura 36 - End -->
                            </div>
                            <div class="col-md-3 col-sm-12">
                                <!-- Titulo Figura -->
                                <div class="text-center">
                                    <a href="imagens/Figura37.png" data-bs-toggle="modal" data-bs-target="#Imagem37">
                                        <img class="img-fluid wow fadeInUp" data-wow-delay="1.0s" width="300" src="imagens/Figura37.png" alt="Alt da imagem fica aqui">
                                    </a>
                                    <p class="FonteFigura"> Mangue branco. Parque Estadual do Cocó - Fortaleza/CE.</p>
                                </div>

                                <!-- Imagem 37 - MODAL -->
                                <div class="modal fade text-center" id="Imagem37" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img class="img-fluid" src="imagens/Figura37.png" alt="Alt da imagem fica aqui">
                                            </div>
                                            <div class="modal-footer text-center">
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <!-- Figura 37 - End -->
                            </div>
                            <div class="col-md-3 col-sm-12">
                                <!-- Titulo Figura -->
                                <div class="text-center">
                                    <a href="imagens/Figura38.png" data-bs-toggle="modal" data-bs-target="#Imagem38">
                                        <img class="img-fluid wow fadeInUp" data-wow-delay="1.0s" width="300" src="imagens/Figura38.png" alt="Alt da imagem fica aqui">
                                    </a>
                                    <p class="FonteFigura">Aratu. APA do Estuário do Rio Curu - Paracuru e Paraipaba/CE. </p>
                                </div>

                                <!-- Imagem 38 - MODAL -->
                                <div class="modal fade text-center" id="Imagem38" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img class="img-fluid" src="imagens/Figura38.png" alt="Alt da imagem fica aqui">
                                            </div>
                                            <div class="modal-footer text-center">
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <!-- Figura 38 - End -->
                            </div>
                            <div class="col-md-3 col-sm-12">
                                <!-- Titulo Figura -->
                                <div class="text-center">
                                    <a href="imagens/Figura39.png" data-bs-toggle="modal" data-bs-target="#Imagem39">
                                        <img class="img-fluid wow fadeInUp" data-wow-delay="1.0s" width="300" src="imagens/Figura39.png" alt="Alt da imagem fica aqui">
                                    </a>
                                    <p class="FonteFigura"> Mangue vermelho. APA do Estuário do Rio Ceará - Caucaia/CE.</p>
                                </div>

                                <!-- Imagem 39- MODAL -->
                                <div class="modal fade text-center" id="Imagem39" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img class="img-fluid" src="imagens/Figura39.png" alt="Alt da imagem fica aqui">
                                            </div>
                                            <div class="modal-footer text-center">
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <!-- Figura 39 - End -->
                            </div>
                        </div>
                        <br><br>

                        <!-- Importante -->
                        <div class="ImportanteCaixa">
                            <p class="ImportanteTitulo"> Importante</p>
                            <div class="ImportanteTexto">
                                <p class="text-center"><strong> Manguezal = Ecossistema.</strong></p>
                                <p class="text-center"><strong> Mangue = vegetação encontrada no manguezal.</strong></p>
                            </div>
                        </div>
                        <br>
                        <br>

                        <div class="card">
                            <div class="card-body border border-primary" style="background-color: #b7d5e5;">
                                <p>Além da riqueza de vida, a vegetação de mangue serve para fixar as terras, impedindo assim a erosão e ao mesmo tempo estabilizando a costa. As raízes do mangue funcionam como filtros na retenção dos sedimentos. Veja este experimento a seguir:</p>

                                <div class="video-responsive">
                                    <iframe src="https://www.youtube.com/embed/LdvC5GWWDeU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                </div>
                            </div>
                        </div>
                        <br><br>



                        <!-- Fique Atento -->
                        <div class="FiqueAtentoCaixa">
                            <p class="FiqueAtentoTitulo"> Fique Atento</p>
                            <div class="FiqueAtentoTexto">
                                <p>O manguezal produz mais de 95% do alimento que o ser humano captura do mar. Sua preservação é vital para a subsistência das comunidades pesqueiras que vivem em seu entorno.</p>
                            </div>
                        </div>
                        <br><br>

                        <!-- Curiosidade -->
                        <div class="CuriosidadeCaixa">
                            <p class="CuriosidadeTitulo"> Curiosidade</p>
                            <div class="CuriosidadeTexto">
                                <p>Você conhece o EcoMuseu Natural do Mangue? Ele fica em Fortaleza, na comunidade da Sabiaguaba. Conheça seu belo trabalho de educação ambiental no Instagram: <a href="https://www.instagram.com/ecomunam/" target="_blank">@ecomunam</a> Já imaginou como seria rico uma visita ao museu e depois uma trilha de educação ambiental no meio desse ecossistema?!</p>
                            </div>
                        </div>
                        <br><br>


                        <p class="SubSubTitulo">Dunas</p>
                        <hr>
                        <br>


                        <p>As dunas são o cartão-postal de várias praias cearenses, fonte de inspiração para músicos e artistas. Elas são formadas por sedimentos de origem continental que foram transportadas pelos ventos e rios até a costa, acumulando-se em forma de dunas.</p>

                        <p>As dunas funcionam como reservatório natural de água. São extremamente porosas, absorvem muita água das chuvas, por isso são a principal fonte de água doce do litoral do Ceará. Elas são ainda uma importante proteção contra a força das marés, temporais, ressacas do mar e outros fenômenos climáticos.</p>

                        <!-- Importante -->
                        <div class="ImportanteCaixa">
                            <p class="ImportanteTitulo"> Importante</p>
                            <div class="ImportanteTexto">
                                <p>As dunas devem ficar livres da interferência humana, pois suas areias precisam circular: o vento as joga no leito dos rios, que são levadas para o mar, e de lá para as praias, num movimento constante, cíclico e dinâmico.</p>

                                <!-- Titulo Figura -->
                                <div class="text-center">
                                    <a href="imagens/Figura40.png" data-bs-toggle="modal" data-bs-target="#Imagem40">
                                        <img class="img-fluid wow fadeInUp" data-wow-delay="1.0s" width="300" src="imagens/Figura40.png" alt="Alt da imagem fica aqui">
                                    </a>
                                    <p class="FonteFigura"> Ubaia, fruto típico de dunas. <br>Foto: wikipedia. Calango do rabo azul, vive sob a vegetação das dunas. Foto: Pinterest.</p>
                                </div>

                                <!-- Imagem 40- MODAL -->
                                <div class="modal fade text-center" id="Imagem40" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img class="img-fluid" src="imagens/Figura40.png" alt="Alt da imagem fica aqui">
                                            </div>
                                            <div class="modal-footer text-center">
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <!-- Figura 40 - End -->
                            </div>
                        </div>
                        <br><br>

                        <!-- Titulo Figura -->
                        <div class="text-center">
                            <a href="imagens/Figura41.png" data-bs-toggle="modal" data-bs-target="#Imagem41">
                                <img class="img-fluid wow fadeInUp" data-wow-delay="1.0s" width="300" src="imagens/Figura41.png" alt="Alt da imagem fica aqui">
                            </a>
                            <p class="FonteFigura"> A restinga atua como fixadora de dunas. Praia da Tabuba-Caucaia/CE. <br>Foto: Sérgio Mota.</p>
                        </div>

                        <!-- Imagem 41- MODAL -->
                        <div class="modal fade text-center" id="Imagem41" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <img class="img-fluid" src="imagens/Figura41.png" alt="Alt da imagem fica aqui">
                                    </div>
                                    <div class="modal-footer text-center">
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- Figura 41 - End -->





                        <p class="SubSubTitulo">Restingas</p>
                        <hr>
                        <br>


                        <p>A área de Restinga é formada pelo acúmulo de sedimentos arenosos que são transportados por processos naturais, como as marés, as chuvas e os ventos.</p>

                        <p>Sua vegetação é altamente adaptada às condições de salinidade e de poucos nutrientes no solo, sendo uma importante barreira contra o avanço dos mares, atuando como fixadora de dunas e abrigando uma imensa biodiversidade nas praias e dunas.</p>



                        <!-- Titulo Figura -->
                        <div class="text-center">
                            <a href="imagens/Figura42.png" data-bs-toggle="modal" data-bs-target="#Imagem42">
                                <img class="img-fluid wow fadeInUp" data-wow-delay="1.0s" width="300" src="imagens/Figura42.png" alt="Alt da imagem fica aqui">
                            </a>
                            <p class="FonteFigura"> A restinga serve como abrigo e alimento para animais. Praia da Tabuba-Caucaia/CE. <br>Foto: Sérgio Mota.</p>
                        </div>

                        <!-- Imagem 42- MODAL -->
                        <div class="modal fade text-center" id="Imagem42" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <img class="img-fluid" src="imagens/Figura42.png" alt="Alt da imagem fica aqui">
                                    </div>
                                    <div class="modal-footer text-center">
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- Figura 42 - End -->

                        <!-- Titulo Figura -->
                        <div class="text-center">
                            <a href="imagens/Figura43.png" data-bs-toggle="modal" data-bs-target="#Imagem43">
                                <img class="img-fluid wow fadeInUp" data-wow-delay="1.0s" width="300" src="imagens/Figura43.png" alt="Alt da imagem fica aqui">
                            </a>
                            <p class="FonteFigura"> A restinga atua como fixadora de dunas. Praia da Tabuba-Caucaia/CE. <br>Foto: Sérgio Mota.</p>
                        </div>

                        <!-- Imagem 43- MODAL -->
                        <div class="modal fade text-center" id="Imagem41" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <img class="img-fluid" src="imagens/Figura43.png" alt="Alt da imagem fica aqui">
                                    </div>
                                    <div class="modal-footer text-center">
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- Figura 43 - End -->

                        <br><br><!-- SCRIPT LIGHTBOX -->
                        <script>
                            $(document).on('click', '[data-toggle="lightbox"]', function(event) {
                                event.preventDefault();
                                $(this).ekkoLightbox();
                            });

                            $(function() {
                                $('[data-toggle="tooltip"]').tooltip()
                            })
                        </script>

                    </div> <!-- CLASS PAGE TITLE FIM -->
                </div> <!-- End col-md-10 -->

                <div class="col-md-1"></div>
            </div> <!-- End row -->

            <!-- Botões de navegação -->
            <div class="text-center">
                <a href="Topico02.2.php?AA=<?php echo $AtividadeAvaliativa ?>" class="btn btn-primary" role="button" aria-pressed="true"><i class="fa fa-chevron-left"></i> Voltar</a>
                <a href="Topico02.4.php?AA=<?php echo $AtividadeAvaliativa ?>" class="btn btn-primary" role="button" aria-pressed="true">Próximo <i class="fa fa-chevron-right"></i></a>
            </div>

        </div> <!-- CONTEUDO FIM -->

        <!-- FOOTER -->
        <?php include('layout/footer.php') ?>

    </div> <!-- DIV MAIN FIM -->

    <!-- FOOTER JS -->
    <?php include('layout/js.php') ?>

    <!-- BOTÃO BACK TO TOP -->
    <a href="#" class="back-to-top"><i class="fas fa-arrow-up"></i></a>

</body>

</html>