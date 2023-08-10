<?php
$AtividadeAvaliativa = $_GET['AA'];
?>
<?php
// EGPCE - Chama o conectamoodle.php
require_once('conectamoodle.php');
?>

<?php
$page = 'Topico01';
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

                        <h2 class="Titulo"> AS PLANTAS E A VIDA</h2>
                        <hr>
                        <br>

                        <p>Nosso planeta, ao longo de 4,5 bilhões de anos, desenvolveu um sistema, que poderíamos chamar de geofisiológico, permitindo a existência da Vida.</p>
                        <p>A biosfera, esse espaço em que a vida se manifesta sobre o globo terrestre (na terra, na água e no ar) é formado por inúmeros biomas e seus ecossistemas, todos inter-relacionados.</p>
                        <p>A base desse sistema é formada por comunidades de plantas, animais, fungos, milhares de micro-organismos no solo (<strong>Biocenose</strong>), em permanente troca de matéria e energia. Poderíamos chamar esses ciclos de troca que acontecem dentro dessas comunidades e entre biomas e ecossistemas de <strong>Economia da Vida</strong>.</p>
                        <p>O primeiro e mais importante dos elementos desse sistema, que promove e mantém a vida, é o Sol. Ele é a grande fonte de energia e calor provedora de todo esse grande organismo chamado Terra. É a partir da sua energia, dos seus raios, banhando a terra de luz, que todos os seres podem fazer girar os processos de troca das substâncias químicas de que são constituídos seus corpos. Quando nos alimentamos, seja uma salada verde, seja um bife suculento, estamos ingerindo energia processada do Sol.</p>
                        <p>Sim, o Sol derrama seu brilho sobre nós. Sua energia é imprescindível para nossa existência. Mas acontece que, nós não temos aptidão para captar, processar e guardar sua energia. Precisamos terceirizar essa função. E quem capta, processa e armazena o Sol para nós? Quem consegue capturar sua luz para que possamos fazer uso dela transformando-a em glicose, e através da glicose produzir amido, proteínas, aminoácidos? Nossas parceiras, as plantas. Nós, os animais, dependemos totalmente delas para existirmos. E não apenas para “o pão nosso de cada dia”, mas também para o nosso oxigênio de todo instante. Pois no processo da fotossíntese, que produz o alimento para elas e para nós, elas absorvem o CO2 que exalamos e liberam o oxigênio vital para nossa existência.</p>
                        <p>Nossas irmãs mais velhas, as plantas, precisaram vir antes, milhões de anos antes para que a Vida em sua forma animal pudesse emergir do útero marinho e conquistar a terra.</p>
                        <p>As plantas surgiram no nosso planeta há mais de 300 milhões de anos. E de lá para cá, foram evoluindo e produzindo o cenário perfeito para o surgimento da biodiversidade que conhecemos.</p>
                        <p>Os primeiros hominídeos (<strong>Australopitecos</strong>) surgem no planeta por volta de 7 milhões de anos atrás. Pouco se diferenciavam dos demais primatas. Eram onívoros, ou seja, comiam de tudo. Pouco, ou quase nada de técnica e cultura foi desenvolvido por eles. Precisariam mais alguns milhões de anos, e outros degraus e elos evolutivos (<strong><em>Homo erectus, Homo habilis, Homo sapiens neandertalenses</em></strong>), para que, por volta de 40 mil anos antes de nossa era surgir-se o <strong>Homo sapiens sapiens</strong>, herói e vilão de nossa história.</p>

                        <p>Traçamos esse breve histórico evolutivo, porque é importante compreendermos em que momento da nossa história, <strong>nós humanos nos separamos da natureza</strong>. Ou, pelo menos, começamos a achar que a dominávamos e a acreditar que somos algo à parte dela.</p>

                        <!-- Saiba Mais -->
                        <div class="SaibaMaisCaixa">
                            <p class="SaibaMaisTitulo"> Saiba Mais</p>
                            <div class="SaibaMaisTexto">
                                <p> Veja neste incrível vídeo a importância das florestas e como temos nos relacionado com elas.</p>

                                <div class="video-responsive">
                                    <iframe width="560" height="315" src="https://www.youtube.com/embed/Lb_CFxgugSY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                </div>
                            </div>
                        </div>
                        <br><br>


                        <p>Sigamos então essa linha do tempo.</p>

                        <p>Desde seu aparecimento, lá pelo sul do continente africano, o Homo sapiens sapiens vai se deslocando e conquistando todos os “quatro cantos do mundo”. Em pouco mais de 20 mil anos, já havia chegado ao extremo oriente e ao continente americano. Desenvolveu ferramentas, técnicas, linguagem e cultura, o que permitiu a ele, por volta de 10 mil anos antes de nossa era, desenvolver a agricultura.</p>

                        <p>É importante enfatizar que o Planeta vivia um momento de condições climáticas que favoreceu o surgimento de novas formações vegetais, cobrindo os continentes de florestas. Isso favoreceu que o homem caçador-pescador-coletor se fixasse por mais tempo em determinados territórios abundantes de alimentos.</p>

                        <p>Nesse tempo, nossos antepassados já haviam desenvolvido técnicas que lhes permitiam prover melhores ferramentas (machados, enxadas, etc), utensílios (cerâmica cozida) e moradias mais duráveis. É nesse momento em que se inicia o desenvolvimento da agricultura e da criação (domesticação) de animais.</p>

                        <!-- Fique Atento -->
                        <div class="FiqueAtentoCaixa">
                            <p class="FiqueAtentoTitulo"> Fique Atento</p>
                            <div class="FiqueAtentoTexto">
                                <p>Veja alguns dos <a href="#" data-toggle="tooltip" data-placement="top" title="São os benefícios que as pessoas obtêm dos ecossistemas, ou seja, são serviços que o meio ambiente desempenha naturalmente e que resultam em benefícios para os seres humanos.">serviços ambientais<i class="fa fa-search-plus"></i></a> proporcionados pelas plantas:</p>
                                <ul class="none">
                                    <li class="wow fadeInDown" data-wow-delay="0.3s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> São fundamentais no ciclo da água: absorvem a água do solo e a devolvem em forma de vapor através da transpiração;</li>
                                    <li class="wow fadeInDown" data-wow-delay="0.6s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Produzem o oxigênio, essencial para a vida, e captam o dióxido de carbono, gás que produz o efeito estufa;</li>
                                    <li class="wow fadeInDown" data-wow-delay="0.9s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Protegem o solo da erosão causada pelo sol, pela chuva e pelo vento;</li>
                                    <li class="wow fadeInDown" data-wow-delay="1.3s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Protegem as nascentes, rios, lagos e açudes contra o assoreamento e a entrada de poluentes;</li>
                                    <li class="wow fadeInDown" data-wow-delay="1.6s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Abrigam diversos seres vivos essenciais aos ciclos da vida, como polinizadores e decompositores;</li>
                                    <li class="wow fadeInDown" data-wow-delay="1.9s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Funcionam como barreira contra pragas agrícolas, poluição sonora, atmosférica e visual;</li>
                                    <li class="wow fadeInDown" data-wow-delay="2.3s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Fazem sombra, fornecem alimentos e matéria-prima para as atividades humanas;</li>
                                    <li class="wow fadeInDown" data-wow-delay="2.6s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Regulam o macro e microclima, trazendo alívio nos dias mais quentes;</li>
                                    <li class="wow fadeInDown" data-wow-delay="2.9s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Embelezam a paisagem e proporcionam bem-estar físico e mental ao ser humano, criando locais agradáveis ao convívio social.</li>
                                </ul>




                            </div>
                        </div>
                        <br><br>


                        <div class="alert alert-success">
                            <p>Diante de tantos benefícios que as plantas nos trazem, o mínimo que podemos fazer é cuidar bem delas, respeitando seus ciclos e as utilizando com sabedoria.</p>
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



                    </div> <!-- End page-title -->
                </div> <!-- End page-title -->

                <div class="col-md-1"></div>
            </div> <!-- End row -->

            <!-- Botões de navegação -->
            <div class="text-center">
                <a href="index.php?AA=<?php echo $AtividadeAvaliativa ?>" class="btn btn-primary" role="button" aria-pressed="true"><i class="fa fa-chevron-left"></i> Voltar </a>
                <a href="Topico02.php?AA=<?php echo $AtividadeAvaliativa ?>" class="btn btn-primary" role="button" aria-pressed="true">Próximo <i class="fa fa-chevron-right"></i></a>
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