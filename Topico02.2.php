<?php
$AtividadeAvaliativa = $_GET['AA'];
?>
<?php
// EGPCE - Chama o conectamoodle.php
require_once('conectamoodle.php');
?>

<?php
$page = 'Topico02.2';
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

                        <p class="SubTitulo">MATA ATLÂNTICA</p>
                        <hr>
                        <br>

                        <p>A Mata Atlântica é considerada Patrimônio Nacional pela Constituição Federal. Ela está presente em 17 estados brasileiros (3.429 municípios).</p>

                        <p>Hoje, esse Bioma mantém apenas 12,4% da sua área original. Mesmo assim ela abriga uma imensa biodiversidade: 20.000 espécies de plantas, 850 espécies de aves, 370 espécies de anfíbios, 200 espécies de répteis, 270 espécies de mamíferos e 350 espécies de peixes.</p>

                        <p>Atualmente, cerca de 72% da população brasileira vive em área de Mata Atlântica (IBGE). São mais de 145 milhões de habitantes. Não é de se admirar que esse bioma seja um dos mais ameaçados do país.</p>

                        <!-- Fique Atento -->
                        <div class="FiqueAtentoCaixa">
                            <p class="FiqueAtentoTitulo"> Fique Atento</p>
                            <div class="FiqueAtentoTexto">
                                <p>Você conhece a Mata Atlântica do Ceará?</p>

                                <p>Nem só de Caatinga vive nosso Estado. A Mata Atlântica no Ceará está localizada na Chapada do Araripe, Litoral, Chapada da Ibiapaba, Maciço de Baturité, Serra da Meruoca e Serra de Uruburetama. São áreas de domínio da Mata Atlântica: a Serra da Aratanha, Serra do Machado, Serra das Matas e Serra de Maranguape.</p>

                                <!-- Titulo Figura -->
                                <div class="text-center">
                                    <a href="imagens/Figura27.png" data-bs-toggle="modal" data-bs-target="#Imagem27">
                                        <img class="img-fluid wow fadeInUp" data-wow-delay="1.0s" width="300" src="imagens/Figura27.png" alt="Alt da imagem fica aqui">
                                    </a>
                                    <p class="FonteFigura">Áreas de Mata Atlântica do Estado do Ceará - <br>Fonte: IBGE 2008</p>
                                </div>

                                <!-- Imagem 27 - MODAL -->
                                <div class="modal fade text-center" id="Imagem27" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img class="img-fluid" src="imagens/Figura27.png" alt="Alt da imagem fica aqui">
                                            </div>
                                            <div class="modal-footer text-center">
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <!-- Figura 27 - End -->
                            </div>
                        </div>
                        <br><br>

                        <div class="bd-callout bd-callout-primary">
                            <p><strong>EXEMPLOS DE FLORA DA MATA ATLÂNTICA NO CEARÁ</strong></p>

                            <div class="row">
                                <div class="col-md-3 col-sm-12">
                                    <!-- Titulo Figura -->
                                    <div class="text-center">
                                        <a href="imagens/Figura28.png" data-bs-toggle="modal" data-bs-target="#Imagem28">
                                            <img class="img-fluid wow fadeInUp" data-wow-delay="1.0s" width="300" src="imagens/Figura28.png" alt="Alt da imagem fica aqui">
                                        </a>
                                        <p class="FonteFigura">Mulungu.<br> Foto: Sérgio Mota</p>
                                    </div>

                                    <!-- Imagem 28 - MODAL -->
                                    <div class="modal fade text-center" id="Imagem28" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-body">
                                                    <img class="img-fluid" src="imagens/Figura28.png" alt="Alt da imagem fica aqui">
                                                </div>
                                                <div class="modal-footer text-center">
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <!-- Figura 28 - End -->
                                </div>
                                <div class="col-md-3 col-sm-12">
                                    <!-- Titulo Figura -->
                                    <div class="text-center">
                                        <a href="imagens/Figura29.png" data-bs-toggle="modal" data-bs-target="#Imagem29">
                                            <img class="img-fluid wow fadeInUp" data-wow-delay="1.0s" width="300" src="imagens/Figura29.png" alt="Alt da imagem fica aqui">
                                        </a>
                                        <p class="FonteFigura">Gameleira. <br>Foto: recantodacanastra.com.br</p>
                                    </div>

                                    <!-- Imagem 29 - MODAL -->
                                    <div class="modal fade text-center" id="Imagem29" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-body">
                                                    <img class="img-fluid" src="imagens/Figura29.png" alt="Alt da imagem fica aqui">
                                                </div>
                                                <div class="modal-footer text-center">
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <!-- Figura 29 - End -->
                                </div>
                                <div class="col-md-3 col-sm-12">
                                    <!-- Titulo Figura -->
                                    <div class="text-center">
                                        <a href="imagens/Figura30.png" data-bs-toggle="modal" data-bs-target="#Imagem30">
                                            <img class="img-fluid wow fadeInUp" data-wow-delay="1.0s" width="300" src="imagens/Figura30.png" alt="Alt da imagem fica aqui">
                                        </a>
                                        <p class="FonteFigura">Lírio-amarelo. <br>Foto: Celso Oliveira </p>
                                    </div>

                                    <!-- Imagem 30 - MODAL -->
                                    <div class="modal fade text-center" id="Imagem30" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-body">
                                                    <img class="img-fluid" src="imagens/Figura30.png" alt="Alt da imagem fica aqui">
                                                </div>
                                                <div class="modal-footer text-center">
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <!-- Figura 30 - End -->
                                </div>
                                <div class="col-md-3 col-sm-12">
                                    <!-- Titulo Figura -->
                                    <div class="text-center">
                                        <a href="imagens/Figura31.png" data-bs-toggle="modal" data-bs-target="#Imagem31">
                                            <img class="img-fluid wow fadeInUp" data-wow-delay="1.0s" width="300" src="imagens/Figura31.png" alt="Alt da imagem fica aqui">
                                        </a>
                                        <p class="FonteFigura"> Ipê-amarelo. <br>Foto: wikipedia</p>
                                    </div>

                                    <!-- Imagem 31 - MODAL -->
                                    <div class="modal fade text-center" id="Imagem31" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-body">
                                                    <img class="img-fluid" src="imagens/Figura31.png" alt="Alt da imagem fica aqui">
                                                </div>
                                                <div class="modal-footer text-center">
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <!-- Figura 31 - End -->
                                </div>
                            </div>

                            <br><br>
                            <p><strong>EXEMPLOS DE FAUNA DA MATA ATLÂNTICA NO CEARÁ</strong></p>

                            <div class="row">
                                <div class="col-md-3 col-sm-12">
                                    <!-- Titulo Figura -->
                                    <div class="text-center">
                                        <a href="imagens/Figura32.png" data-bs-toggle="modal" data-bs-target="#Imagem32">
                                            <img class="img-fluid wow fadeInUp" data-wow-delay="1.0s" width="300" src="imagens/Figura32.png" alt="Alt da imagem fica aqui">
                                        </a>
                                        <p class="FonteFigura">Coandu-espinho.<br> Foto: Culturamix</p>
                                    </div>

                                    <!-- Imagem 32 - MODAL -->
                                    <div class="modal fade text-center" id="Imagem32" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-body">
                                                    <img class="img-fluid" src="imagens/Figura32.png" alt="Alt da imagem fica aqui">
                                                </div>
                                                <div class="modal-footer text-center">
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <!-- Figura 28 - End -->
                                </div>
                                <div class="col-md-3 col-sm-12">
                                    <!-- Titulo Figura -->
                                    <div class="text-center">
                                        <a href="imagens/Figura33.png" data-bs-toggle="modal" data-bs-target="#Imagem33">
                                            <img class="img-fluid wow fadeInUp" data-wow-delay="1.0s" width="300" src="imagens/Figura33.png" alt="Alt da imagem fica aqui">
                                        </a>
                                        <p class="FonteFigura"> Sairá-militar.<br> Foto: Sérgio Mota</p>
                                    </div>

                                    <!-- Imagem 33 - MODAL -->
                                    <div class="modal fade text-center" id="Imagem33" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-body">
                                                    <img class="img-fluid" src="imagens/Figura33.png" alt="Alt da imagem fica aqui">
                                                </div>
                                                <div class="modal-footer text-center">
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <!-- Figura 29 - End -->
                                </div>
                                <div class="col-md-3 col-sm-12">
                                    <!-- Titulo Figura -->
                                    <div class="text-center">
                                        <a href="imagens/Figura34.png" data-bs-toggle="modal" data-bs-target="#Imagem34">
                                            <img class="img-fluid wow fadeInUp" data-wow-delay="1.0s" width="300" src="imagens/Figura34.png" alt="Alt da imagem fica aqui">
                                        </a>
                                        <p class="FonteFigura">Macrophyes pacoti.<br> Foto: UNILAB. </p>
                                    </div>

                                    <!-- Imagem 34 - MODAL -->
                                    <div class="modal fade text-center" id="Imagem34" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-body">
                                                    <img class="img-fluid" src="imagens/Figura34.png" alt="Alt da imagem fica aqui">
                                                </div>
                                                <div class="modal-footer text-center">
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <!-- Figura 34 - End -->
                                </div>
                                <div class="col-md-3 col-sm-12">
                                    <!-- Titulo Figura -->
                                    <div class="text-center">
                                        <a href="imagens/Figura35.png" data-bs-toggle="modal" data-bs-target="#Imagem35">
                                            <img class="img-fluid wow fadeInUp" data-wow-delay="1.0s" width="300" src="imagens/Figura35.png" alt="Alt da imagem fica aqui">
                                        </a>
                                        <p class="FonteFigura"> Jibóia. <br>Foto: InfoEscola</p>
                                    </div>

                                    <!-- Imagem 35 - MODAL -->
                                    <div class="modal fade text-center" id="Imagem35" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-body">
                                                    <img class="img-fluid" src="imagens/Figura35.png" alt="Alt da imagem fica aqui">
                                                </div>
                                                <div class="modal-footer text-center">
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <!-- Figura 35 - End -->
                                </div>
                            </div>
                            <br><br>

                        </div>


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
                <a href="Topico02.1.php?AA=<?php echo $AtividadeAvaliativa ?>" class="btn btn-primary" role="button" aria-pressed="true"><i class="fa fa-chevron-left"></i> Voltar</a>
                <a href="Topico02.3.php?AA=<?php echo $AtividadeAvaliativa ?>" class="btn btn-primary" role="button" aria-pressed="true">Próximo <i class="fa fa-chevron-right"></i></a>
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