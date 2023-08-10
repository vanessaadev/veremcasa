<?php
$page = 'Apresentacao';
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

        <div class="main-content container-fluid" id="#Apresentacao">
            <!-- Begin main-content -->
            <div class="row">
                <!-- Begin row -->
                <div class="col-md-1"></div>

                <div class="col-md-10">
                    <!-- Begin col-md-10 -->
                    <div class="page-title Texto">


                        <h2 class="Titulo">Apresentação</h2>
                        <hr>
                        <br>

                        <p>Olá, AJA!</p>
                        <p>Tudo bem com você? Vamos dar mais um passo na nossa jornada formativa? Com certeza, em cada passo nessa trilha, você vem acumulando informações e conhecimento que lhes serão muito útil para uma ação exitosa na sua comunidade.</p>
                        <p>O conhecimento sobre o Meio Ambiente é amplo. Aqui, neste curso, estaremos sempre buscando conectá-lo com sua própria vida, pois ele é um conhecimento dinâmico, que exige exercício e prática para ser realmente compreendido.</p>

                        <div class="bd-callout bd-callout-primary wow fadeInUp" data-wow-delay="1.0s">
                            <p>Neste módulo, vamos falar da vida a partir do mundo vegetal. A importância das plantas para a construção da vida como a conhecemos. Como a domesticação das plantas pelo ser humano modificou nossa vida e a paisagem terrestre. Vamos relembrar o impacto do sistema agrícola denominado <em>Plantation</em> devastando florestas. Hoje, herdeiro desse formato, o Agronegócio continua a devastação dos principais Biomas do País e do Planeta. Quais as soluções que se apresentam? Como um AJA pode contribuir para alterar, ou pelo menos mitigar suas consequências?</p>
                        </div>

                        <p>Já aprendemos que na natureza tudo está interligado. E um de seus principais elos são os seres vegetais. Eles ligam a terra, o ar, a água e os outros seres vivos, criando uma complexa rede, a Teia da Vida.</p>
                        <p>Vamos nessa, então?</p>

                        <!-- SCRIPT LIGHTBOX -->
                        <script>
                            $(document).on('click', '[data-toggle="lightbox"]', function(event) {
                                event.preventDefault();
                                $(this).ekkoLightbox();
                            });

                            $(function() {
                                $('[data-toggle="tooltip"]').tooltip()
                            });

                            $(function() {
                                $('.example-popover').popover({
                                    container: 'body'
                                })
                            });
                        </script>

                    </div> <!-- End page-title -->
                </div> <!-- End page-title -->

                <div class="col-md-1"></div>
            </div> <!-- End row -->

            <br>
            <br>

            <!-- Botões de navegação -->
            <div class="text-center">
                <a href="Topico01.php?AA=<?php echo $AtividadeAvaliativa ?>" class="btn btn-primary" role="button" aria-pressed="true">Próximo <i class="fa fa-chevron-right"></i></a>
            </div>

        </div> <!-- End main-content -->


        <!-- FOOTER -->
        <?php include('layout/footer.php') ?>

    </div> <!-- DIV MAIN FIM -->

    <!-- FOOTER JS -->
    <?php include('layout/js.php') ?>

</body>

</html>