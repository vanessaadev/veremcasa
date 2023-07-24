<?php
$AtividadeAvaliativa = $_GET['AA'];
?>
<?php
// EGPCE - Chama o conectamoodle.php
require_once('conectamoodle.php');
?>

<?php
$page = 'Topico01.1';
include('layout/header.php');
?>

<style>
    .sintese {
        border-top: 30px;
    }
</style>

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

        <div class="main-content container-fluid" id="#Apresentacao">
            <!-- Begin main-content -->
            <div class="row">
                <!-- Begin row -->
                <div class="col-md-1"></div>

                <div class="col-md-10">
                    <!-- Begin col-md-10 -->
                    <div class="page-title Texto">

                        <p class="SubTitulo"> O EFEITO ESTUFA E O AQUECIMENTO GLOBAL</p>
                        <hr>
                        <br>


                        <p>O <strong>Efeito Estufa</strong>, como o próprio nome diz, é o aumento da temperatura causado pela energia vinda dos raios do sol, que fica retida em um determinado local. Como acontece em uma estufa de plantas que tem as paredes e o teto de vidro, o calor que é emitido pelos raios do sol entra mas não sai, deixando o ambiente mais quente.</p>

                        <!-- Titulo Figura -->
                        <div class="text-center">
                            <a href="imagens/Figura02.jpg" data-bs-toggle="modal" data-bs-target="#Imagem02">
                                <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s" class="img-fluid" src="imagens/Figura02.jpg" alt="Alt da imagem fica aqui">

                            </a>
                        </div>

                        <!-- Imagem 02 - MODAL -->
                        <div class="modal fade text-center" id="Imagem02" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <img class="img-fluid" src="imagens/Figura02.jpg" alt="Alt da imagem fica aqui">
                                    </div>
                                    <div class="modal-footer text-center">

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Imagem 02 - End -->
                        <br>


                        <p>O mesmo acontece com o planeta Terra. O sol emite radiação que, ao chegar à Terra, gera calor que aquece o planeta. Parte desse calor é absorvido pela superfície terrestre e pelos oceanos e outra parte é refletida. Desse calor que é refletido, uma parte volta para o espaço, e outra fica no planeta, pois é impedido de sair pelos gases que estão na atmosfera.</p>
                        <p>Esse efeito estufa é natural e muito importante, porque mantém a temperatura que possibilita a existência de vida na Terra. Caso esse calor não ficasse na nossa atmosfera, a temperatura média do planeta seria de -18 ºC, tornando impossível a vida como a conhecemos.</p>


                        <!-- Titulo Figura -->
                        <div class="text-center">
                            <a href="imagens/Figura03.jpg" data-bs-toggle="modal" data-bs-target="#Imagem03">
                                <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" class="img-fluid" src="imagens/Figura03.jpg" alt="Alt da imagem fica aqui">
                            </a>
                        </div>

                        <!-- Imagem 02 - MODAL -->
                        <div class="modal fade text-center" id="Imagem03" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <img class="img-fluid" src="imagens/Figura03.jpg" alt="Alt da imagem fica aqui">
                                    </div>
                                    <div class="modal-footer text-center">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Imagem 02 - End -->
                        <br><br>

                        <!-- Fique Atento -->
                        <div class="FiqueAtentoCaixa">
                            <p class="FiqueAtentoTitulo"> Fique Atento</p>
                            <div class="FiqueAtentoTexto">
                                <p>Os gases responsáveis por impedir que o calor volte para o espaço são chamados <strong>Gases de Efeito Estufa (GEE)</strong> .</p>
                            </div>
                            <br><br>


                            <!-- Saiba Mais -->
                            <div class="SaibaMaisCaixa">
                                <p class="SaibaMaisTitulo"> Saiba Mais</p>
                                <div class="SaibaMaisTexto">
                                    <p><a href="https://ecokidsecoteens.mpba.mp.br/noticias/conheca-os-principais-gases-de-efeito-estufa-gee/" target="_blank">Conheça os principais Gases de Efeito Estufa (GEE)</a></p>
                                </div>
                            </div>
                            <br><br>


                            <p>Alguns desses gases são naturais e atuam no efeito estufa, mantendo a temperatura do planeta há milhares de anos. Dentre eles estão: o vapor d’água, o dióxido de carbono (CO2), o metano (CH4) e o óxido nitroso (N2O). Já outros, como os gases fluoretados, foram criados pelas atividades humanas e também vêm se acumulando na atmosfera ao longo dos últimos séculos.</p>

                            <p>Diversos estudos científicos mostram que foi a partir da Revolução Industrial, por volta de 1750, com a utilização mais abrangente de combustíveis fósseis, que a concentração de carbono (C) na atmosfera cresceu, tendo grande parte desse aumento ocorrido nos últimos 50 anos.</p>

                            <p>Isso acontece porque quando o combustível fóssil como carvão, petróleo, gasolina, gás natural, é queimado para gerar energia, ele libera carbono, que é componente de alguns dos principais GEE que se acumulam na atmosfera.</p>

                            <p>Além dos processos industriais e da queima de combustível fóssil, outras atividades também contribuem com a emissão de GEE, e uma das mais relevantes são as <strong>queimadas</strong>.</p>

                            <p>Quando uma floresta sofre um incêndio, além da destruição da biodiversidade, acontece a liberação de todo o carbono que estava armazenado nas plantas e no solo, aumentando ainda mais a concentração desse gás na atmosfera.</p>

                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura04.png" data-bs-toggle="modal" data-bs-target="#Imagem04">
                                    <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s" class="img-fluid" src="imagens/Figura04.png" alt="Alt da imagem fica aqui">
                                    <p class="TituloFigura img-fluid wow fadeInLeft">Incêndios florestais: além de não haver absorção de carbono pelas plantas, ocorre a liberação do que já estava armazenado.<br> Foto: WWF-Brasil</p>
                                </a>
                            </div>

                            <!-- Imagem 04 - MODAL -->
                            <div class="modal fade text-center" id="Imagem03" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura04.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Imagem 04 - End -->

                            <p>É bom lembrar que as folhas das árvores dissipam e absorvem uma gigantesca quantidade de calor emanada do sol, ajudando a refrigerar o ambiente e tornando-o mais agradável. O desmatamento, porém, deixa o solo nu e o torna um rebatedor desse calor para a atmosfera, contribuindo para o aumento da temperatura.</p>

                            <p>Com mais GEE e menos florestas, mais calor acaba ficando preso no planeta, e com isso a temperatura da Terra começa a aumentar de maneira mais rápida.</p>

                            <p>Esse aumento rápido e intenso na temperatura do planeta é o que chamamos de <strong>Aquecimento Global</strong>. Aquecimento global é a elevação da temperatura do planeta provocada pelo aumento de GEE na atmosfera.</p>

                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura05.jpg" data-bs-toggle="modal" data-bs-target="#Imagem05">
                                    <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s" class="img-fluid" src="imagens/Figura05.jpg" alt="Alt da imagem fica aqui">

                                </a>
                            </div>

                            <!-- Imagem 05 - MODAL -->
                            <div class="modal fade text-center" id="Imagem05" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura05.jpg" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Imagem 05 - End -->
                            <br>

                            <br>
                            <div class="bd-callout bd-callout-warning d-flex justify-content-around flex-wrap">
                                <p style="font-size: 1.4em;"> Efeito Estufa</p>
                                <p><i class="fa fa-arrow-right CorAmareloEstadoEscuro fa-2x"></i></p>
                                <p style="font-size: 1.4em;">Aquecimento Global</p>
                                <p><i class="fa fa-arrow-right CorAmareloEstadoEscuro fa-2x"></i></p>
                                <p style="font-size: 1.4em;">Mudança Climática</p>
                            </div>



                            <p>Como apresentado até aqui, é justamente o aquecimento global a causa das <strong>Mudanças Climáticas</strong>. É por essa razão que esses três fenômenos (efeito estufa, aquecimento global e mudança climática) estão sempre juntos, pois estão diretamente relacionados e, por isso, não podem ser trabalhados nem analisados separadamente.</p>











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



                        </div> <!-- End page-title -->
                    </div> <!-- End page-title -->

                    <div class="col-md-1"></div>
                </div> <!-- End row -->

                <!-- Botões de navegação -->
                <div class="text-center">
                    <a href="Topico01.php?AA=<?php echo $AtividadeAvaliativa ?>" class="btn btn-primary" role="button" aria-pressed="true"><i class="fa fa-chevron-left"></i> Voltar </a>
                    <a href="Topico01.2.php?AA=<?php echo $AtividadeAvaliativa ?>" class="btn btn-primary" role="button" aria-pressed="true">Próximo <i class="fa fa-chevron-right"></i></a>
                </div>

            </div> <!-- End main-content -->


            <!-- FOOTER -->
            <?php include('layout/footer.php') ?>

        </div> <!-- DIV MAIN FIM -->

        <!-- FOOTER JS -->
        <?php include('layout/js.php') ?>

        <!-- BOTÃO BACK TO TOP -->
        <a href="#" class="back-to-top"><i class="fas fa-arrow-up"></i></a>

</body>

</html>