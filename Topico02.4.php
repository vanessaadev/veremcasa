<?php
$AtividadeAvaliativa = $_GET['AA'];
?>
<?php
// EGPCE - Chama o conectamoodle.php
require_once('conectamoodle.php');
?>

<?php
$page = 'Topico02.4';
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

                    <p class="SubTitulo">BIODIVERSIDADE NATIVA E EXÓTICA</p>
                        <hr>
                        <br>


                        <p><strong>Espécie nativa é uma espécie natural de um determinado ecossistema ou bioma.</strong> Ao longo da história, ela se desenvolveu naquele ambiente em conjunto com outras espécies, criando inter-relações que culminaram no equilíbrio ecológico da região. Então, podemos afirmar que uma espécie nativa é importantíssima para que um ecossistema ou bioma continue em harmonia.</p>

                        <div class="row">
                            <div class="col-md-3 col-sm-12">
                                <!-- Titulo Figura -->
                                <div class="text-center">
                                    <a href="imagens/Figura44.png" data-bs-toggle="modal" data-bs-target="#Imagem44">
                                        <img class="img-fluid wow fadeInUp" data-wow-delay="1.0s" width="300" src="imagens/Figura44.png" alt="Alt da imagem fica aqui">
                                    </a>
                                    <p class="FonteFigura">Tatu-bola, mamífero nativo da Caatinga. Foto: Associação Caatinga</p>
                                </div>

                                <!-- Imagem 44 - MODAL -->
                                <div class="modal fade text-center" id="Imagem44" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img class="img-fluid" src="imagens/Figura44.png" alt="Alt da imagem fica aqui">
                                            </div>
                                            <div class="modal-footer text-center">
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <!-- Figura 44 - End -->
                            </div>
                            <div class="col-md-3 col-sm-12">
                                <!-- Titulo Figura -->
                                <div class="text-center">
                                    <a href="imagens/Figura45.png" data-bs-toggle="modal" data-bs-target="#Imagem45">
                                        <img class="img-fluid wow fadeInUp" data-wow-delay="1.0s" width="300" src="imagens/Figura45.png" alt="Alt da imagem fica aqui">
                                    </a>
                                    <p class="FonteFigura"> Umbuzeiro, árvore nativa da Caatinga. Foto: EMBRAPA</p>
                                </div>

                                <!-- Imagem 45 - MODAL -->
                                <div class="modal fade text-center" id="Imagem45" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img class="img-fluid" src="imagens/Figur45.png" alt="Alt da imagem fica aqui">
                                            </div>
                                            <div class="modal-footer text-center">
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <!-- Figura 45 - End -->
                            </div>
                            <div class="col-md-3 col-sm-12">
                                <!-- Titulo Figura -->
                                <div class="text-center">
                                    <a href="imagens/Figura46.png" data-bs-toggle="modal" data-bs-target="#Imagem46">
                                        <img class="img-fluid wow fadeInUp" data-wow-delay="1.0s" width="300" src="imagens/Figura46.png" alt="Alt da imagem fica aqui">
                                    </a>
                                    <p class="FonteFigura">Periquito-cara-suja, ave nativa e endêmica da Mata Atlântica. Foto: SEMA.</p>
                                </div>

                                <!-- Imagem 46 - MODAL -->
                                <div class="modal fade text-center" id="Imagem46" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img class="img-fluid" src="imagens/Figura46.png" alt="Alt da imagem fica aqui">
                                            </div>
                                            <div class="modal-footer text-center">
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <!-- Figura 46 - End -->
                            </div>
                            <div class="col-md-3 col-sm-12">
                                <!-- Titulo Figura -->
                                <div class="text-center">
                                    <a href="imagens/Figura47.png" data-bs-toggle="modal" data-bs-target="#Imagem47">
                                        <img class="img-fluid wow fadeInUp" data-wow-delay="1.0s" width="300" src="imagens/Figura47.png" alt="Alt da imagem fica aqui">
                                    </a>
                                    <p class="FonteFigura"> Facheiro, planta nativa e endêmica da Caatinga. Foto: Wikipedia.</p>
                                </div>

                                <!-- Imagem 47- MODAL -->
                                <div class="modal fade text-center" id="Imagem47" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img class="img-fluid" src="imagens/Figura47.png" alt="Alt da imagem fica aqui">
                                            </div>
                                            <div class="modal-footer text-center">
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <!-- Figura 47 - End -->
                            </div>
                        </div>
                        <br><br>

                        <!-- Saiba Mais -->
                        <div class="SaibaMaisCaixa">
                            <p class="SaibaMaisTitulo"> Saiba Mais</p>
                            <div class="SaibaMaisTexto">
                                <p>Conheça o Soldadinho-do-Araripe, ave nativa e endêmica da região do Cariri. </p>

                                <div class="video-responsive">
                                    <iframe width="560" height="315" src="https://www.youtube.com/embed/0WjRnUmQhU0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                </div>
                            </div>
                        </div>
                        <br><br>


                        <p><strong>Uma espécie exótica é toda aquela que se encontra fora de sua área de distribuição natural, isto é, que não é originária ou nativa de um determinado local.</strong> Ela pode ter sido trazida para uma região intencionalmente ou acidentalmente pelo ser humano.</p>


                        <!-- Titulo Figura -->
                        <div class="text-center">
                            <a href="imagens/Figura48.png" data-bs-toggle="modal" data-bs-target="#Imagem48">
                                <img class="img-fluid wow fadeInUp" data-wow-delay="1.0s" width="300" src="imagens/Figura48.png" alt="Alt da imagem fica aqui">
                            </a>
                            <p class="FonteFigura"> Bananeira é uma espécie exótica, trazida da Ásia. Foto: Afe.</p>
                        </div>

                        <!-- Imagem 48- MODAL -->
                        <div class="modal fade text-center" id="Imagem48" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <img class="img-fluid" src="imagens/Figura48.png" alt="Alt da imagem fica aqui">
                                    </div>
                                    <div class="modal-footer text-center">
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- Figura 48 - End -->

                        <!-- Titulo Figura -->
                        <div class="text-center">
                            <a href="imagens/Figura49.png" data-bs-toggle="modal" data-bs-target="#Imagem49">
                                <img class="img-fluid wow fadeInUp" data-wow-delay="1.0s" width="300" src="imagens/Figura49.png" alt="Alt da imagem fica aqui">
                            </a>
                            <p class="FonteFigura"> Coqueiro é uma espécie exótica, trazida da África. Foto: FazFácil.
                            </p>
                        </div>

                        <!-- Imagem 49- MODAL -->
                        <div class="modal fade text-center" id="Imagem49" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <img class="img-fluid" src="imagens/Figura49.png" alt="Alt da imagem fica aqui">
                                    </div>
                                    <div class="modal-footer text-center">
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- Figura 49 - End -->

                        <!-- Importante -->
                        <div class="ImportanteCaixa">
                            <p class="ImportanteTitulo"> Importante</p>
                            <div class="ImportanteTexto">
                                <p>Não necessariamente uma espécie exótica causa prejuízo ao equilíbrio ecológico de uma área. Contudo, existem espécies exóticas que causam graves danos ambientais. Elas são conhecidas como <strong>espécies exóticas invasoras</strong>. Elas ocupam ecossistemas naturais, alteram sua composição e estrutura e competem com as espécies nativas. As invasoras conseguem se adaptar bem às condições do novo hábitat, e são favorecidas pela ausência de inimigos naturais, o que aumenta o seu potencial degradador.</p>

                            </div>
                        </div>
                        <br><br>

                        <div class="row">
                            <div class="col-md-6 col-sm-12">
                                <!-- Titulo Figura -->
                                <div class="text-center">
                                    <a href="imagens/Figura50.png" data-bs-toggle="modal" data-bs-target="#Imagem50">
                                        <img class="img-fluid wow fadeInUp" data-wow-delay="1.0s" width="300" src="imagens/Figura50.png" alt="Alt da imagem fica aqui">
                                    </a>
                                </div>

                                <!-- Imagem 50 - MODAL -->
                                <div class="modal fade text-center" id="Imagem50" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img class="img-fluid" src="imagens/Figura50.png" alt="Alt da imagem fica aqui">
                                            </div>
                                            <div class="modal-footer text-center">
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <!-- Figura 50 - End -->
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <!-- Titulo Figura -->
                                <div class="text-center">
                                    <a href="imagens/Figura51.png" data-bs-toggle="modal" data-bs-target="#Imagem51">
                                        <img class="img-fluid wow fadeInUp" data-wow-delay="1.0s" width="300" src="imagens/Figura51.png" alt="Alt da imagem fica aqui">
                                    </a>
                                </div>

                                <!-- Imagem 51 - MODAL -->
                                <div class="modal fade text-center" id="Imagem51" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img class="img-fluid" src="imagens/Figur51.png" alt="Alt da imagem fica aqui">
                                            </div>
                                            <div class="modal-footer text-center">
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <!-- Figura 51 - End -->
                            </div>
                        </div>


                        <p class="FonteFigura text-center">A Unha-do-cão ou Viuvinha é a principal espécie vegetal invasora no Ceará. Ela encobre principalmente as carnaúbas, impedindo a fotossíntese. Fotos: Selma Freire de Brito.</p>

                        <div class="row">
                            <div class="col-md-6 col-sm-12">
                                <!-- Titulo Figura -->
                                <div class="text-center">
                                    <a href="imagens/Figura52.png" data-bs-toggle="modal" data-bs-target="#Imagem52">
                                        <img class="img-fluid wow fadeInUp" data-wow-delay="1.0s" width="300" src="imagens/Figura52.png" alt="Alt da imagem fica aqui">
                                    </a>
                                    <p class="FonteFigura">O pardal, natural do Oriente Médio, ocupa abrigos e compete pelos mesmos alimentos com espécies nativas. Foto: InfoEscola. </p>
                                </div>

                                <!-- Imagem 52 - MODAL -->
                                <div class="modal fade text-center" id="Imagem52" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img class="img-fluid" src="imagens/Figura52.png" alt="Alt da imagem fica aqui">
                                            </div>
                                            <div class="modal-footer text-center">
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <!-- Figura 52 - End -->
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <!-- Titulo Figura -->
                                <div class="text-center">
                                    <a href="imagens/Figura53.png" data-bs-toggle="modal" data-bs-target="#Imagem53">
                                        <img class="img-fluid wow fadeInUp" data-wow-delay="1.0s" width="300" src="imagens/Figura53.png" alt="Alt da imagem fica aqui">
                                    </a>
                                    <p class="FonteFigura"> O caramujo-gigante-africano destrói plantações e altera a dieta de animais nativos. Foto: Wikipedia.</p>
                                </div>

                                <!-- Imagem 53- MODAL -->
                                <div class="modal fade text-center" id="Imagem53" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img class="img-fluid" src="imagens/Figura53.png" alt="Alt da imagem fica aqui">
                                            </div>
                                            <div class="modal-footer text-center">
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <!-- Figura 53 - End -->
                            </div>
                        </div>
                        <br><br>

                        <!-- Fique Atento -->
                        <div class="FiqueAtentoCaixa">
                            <p class="FiqueAtentoTitulo"> Fique Atento</p>
                            <div class="FiqueAtentoTexto">
                                <p>O avanço das espécies invasoras é a segunda maior causa de perda de diversidade ecológica no planeta, atrás apenas da destruição de habitats. Vamos valorizar nossas espécies nativas!</p>
                            </div>
                        </div>
                        <br><br>

                        <!-- Importante -->
                        <div class="ImportanteCaixa">
                            <p class="ImportanteTitulo"> Importante</p>
                            <div class="ImportanteTexto">
                                <p>Você já ouviu falar da árvore Nim Indiano? É uma espécie trazida da Índia para arborizar as cidades do Nordeste. Cresce rápido, faz sombra, “suja” pouco. Parece uma maravilha para os seres humanos. Mas, por desconhecimento, ela acabou se tornando uma espécie invasora. Além de se propagar sem controle, ela possui uma substância que causa infertilidade em pássaros e insetos, afetando o equilíbrio ecológico. Tem Nim na sua região? Que tal pensar no projeto <strong>Nim Não! Nativa Sim!</strong></p>
                            </div>
                        </div>
                        <br><br>

                        <!-- Titulo Figura -->
                        <div class="text-center">
                            <a href="imagens/Figura54.png" data-bs-toggle="modal" data-bs-target="#Imagem54">
                                <img class="img-fluid wow fadeInUp" data-wow-delay="1.0s" width="300" src="imagens/Figura54.png" alt="Alt da imagem fica aqui">
                            </a>
                            <p class="FonteFigura"> Nim Indiano é uma espécie invasora muito comum nas cidades cearenses.</p>
                        </div>

                        <!-- Imagem 54- MODAL -->
                        <div class="modal fade text-center" id="Imagem54" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <img class="img-fluid" src="imagens/Figura54.png" alt="Alt da imagem fica aqui">
                                    </div>
                                    <div class="modal-footer text-center">
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- Figura 54 - End -->




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
                <a href="Topico02.3.php?AA=<?php echo $AtividadeAvaliativa ?>" class="btn btn-primary" role="button" aria-pressed="true"><i class="fa fa-chevron-left"></i> Voltar</a>
                <a href="Topico03.php?AA=<?php echo $AtividadeAvaliativa ?>" class="btn btn-primary" role="button" aria-pressed="true">Próximo <i class="fa fa-chevron-right"></i></a>
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