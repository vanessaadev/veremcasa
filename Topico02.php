<?php
$AtividadeAvaliativa = $_GET['AA'];
?>
<?php
// EGPCE - Chama o conectamoodle.php
require_once('conectamoodle.php');
?>

<?php
$page = 'Topico02';
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

                        <h2 class="Titulo">O NASCIMENTO DA AGRICULTURA</h2>
                        <hr>
                        <br>

                        <p>Entre dez ou doze mil anos antes de nossa era, a humanidade, em diversos pontos do Planeta, inicia uma revolução que transformará toda sua forma de ser e estar sobre a Terra. E também toda a paisagem do planeta.</p>

                        <p>Os grãos, de cereais e leguminosas (o nosso velho e bom baião-de-dois, ou outras combinações como o trigo e a lentilha, ou trigo e grão de bico) haviam se tornado parte importante de sua dieta, excelente fonte de carboidrato e proteína. Abundante nas savanas, suas sementes eram coletadas, armazenadas, trituradas. O homo sapiens sapiens já havia desenvolvido diversas tecnologias para isso. O fogo já havia sido dominado, com a cerâmica de argila cozida produzia jarros e potes, de pedra fazia pilões, machados, lanças e facas.</p>

                        <p>A grande revolução foi então efetivada. Provavelmente, comandada por mulheres que ficavam nas aldeias, enquanto os homens se deslocavam para a caça, a revolução se fez ali no terreiro de suas casas.</p>

                        <p>Eis que elas observam que as sementes caídas ao solo, ou guardadas e esquecidas em locais úmidos, brotavam bem ali no seu quintal. Pela observação, repetição dos processos e seleção das espécies, inicia-se a domesticação das plantas. O que era longe, ficou perto. Lembrando que domesticar significa trazer para casa, tornar caseiro. E tem a mesma raiz da palavra dominar, que significa se assenhorar, referente aquele que é dono de uma casa. A planta que era selvagem tornou-se caseira.</p>

                        <p>Domesticação de plantas e animais significou aumento de alimento. O que por sua vez significou maior segurança alimentar. Significou também, como disse a princípio, mudança na cultura. De caçadores-pescadores-coletores-nômades, os Homo sapiens sapiens paulatinamente tornam-se cultivadores-criadores-sedentários. Dominando o ciclo de plantio, colheita e armazenamento dos cereais e leguminosas, o homem já não precisa se deslocar longas distâncias para alimentar a aldeia, multiplicando assim sua população. Está dado o pontapé para o desenvolvimento das grandes civilizações.</p>

                        <p>O desenvolvimento da agricultura porém, exige cada vez mais solo para plantar, mais espaço para o alimento de uma população que cresce. As florestas sedem espaço para as culturas de grãos. Junto com a domesticação das plantas, acontece também a domesticação de animais. A criação de porcos, cabras, ovelhas e bois vão substituindo pouco a pouco a caça, sua principal fonte de proteínas. Estes, por sua vez, exigem também mais grãos para sua alimentação e, por conseguinte, mais floresta derrubada. Assim os ecossistemas naturais vão cedendo espaço para os ecossistemas cultivados.</p>


                        <!-- Titulo Figura -->
                        <div class="text-center">
                            <a href="imagens/Figura01.png" data-bs-toggle="modal" data-bs-target="#Imagem01">
                                <img class="img-fluid wow fadeInLeft" src="imagens/Figura01.png" alt="Alt da imagem fica aqui">
                            </a>
                            <p class="FonteFigura">O avanço da agropecuária altera profundamente a paisagem terrestre. <br> Foto: WWF</p>
                        </div>

                        <!-- Imagem 01 - MODAL -->
                        <div class="modal fade text-center" id="Imagem01" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <img class="img-fluid" src="imagens/Figura01.png" alt="Alt da imagem fica aqui">
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- Figura 01 - End -->

                        <p>Outro fator que precisamos ressaltar é que o ser humano que se alimentava de quase tudo, vai aos pouco se especializando em alimentar-se de uns poucos grãos, criando uma dependência de sua fonte de alimentos. Considerando que temos na Natureza algo em torno de 300 mil espécies de plantas que constituem fontes alternativas de alimento, reduzi-las à algumas poucas espécies nos traz um risco enorme de segurança alimentar, pois alguma doença ou mudança no clima os humanos seriam gravemente atingidos. Outro fator, e aqui acredito pessoalmente de mais graves consequências, é a monocultura se instalando onde antes reinava a diversidade. Analisemos então esse fator.</p>

                        <!-- Titulo Figura -->
                        <div class="text-center">
                            <a href="imagens/Figura02.png" data-bs-toggle="modal" data-bs-target="#Imagem02">
                                <img class="img-fluid wow fadeInLeft" src="imagens/Figura02.png" alt="Alt da imagem fica aqui">
                            </a>
                            <p class="FonteFigura">Monocultura vai contra a lei da diversidade na natureza, que leva a uma série de consequências desastrosas para o meio ambiente.<br> Foto: UOL.</p>
                        </div>

                        <!-- Imagem 02 - MODAL -->
                        <div class="modal fade text-center" id="Imagem02" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <img class="img-fluid" src="imagens/Figura02.png" alt="Alt da imagem fica aqui">
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- Figura 02 - End -->

                        <p>Fervilhante de seres vivos, a Natureza é sinônimo de abundância e diversidade. Nossa Casa Comum abriga quase nove milhões de espécies de seres vivos. Os taxonomistas (os cientistas que descrevem e nomeiam as novas espécies) vêm, desde o século XVIII, classificando animais, plantas, algas, fungos, etc. Hoje são quase duas milhões de espécies catalogadas. Todos os anos, mais de dezoito mil novas espécies são descobertas. As plantas, calculam os cientistas, são hoje algo em torno de 400.000 espécies conhecidas. Volto a repetir: em um centímetro cúbico de solo vivo, milhões de seres, das mais diferentes formas e funções, pululam. A Vida é diversa. Vida é diversidade.</p>

                        <p>Voltemos então ao nosso Homo sapiens sapiens refazendo as paisagens naturais, construídas ao longo de bilhões de anos de evolução do Planeta Terra. Desflorestando o solo, alterando cursos d’água, sugando da natureza recursos que não são repostos, destruindo sistemas. Onde fervilhava diversidade de formas de vida, agora reina uma paisagem uniforme e monótona.</p>

                        <p>Lembram-se da Economia? Do cuidar bem da casa? Do administrar sistemas? Lembram-se do significado de Ecologia? Ciência que estuda as relações dos seres vivos entre si e com o meio orgânico ou inorgânico no qual vivem. Pois bem, a diversidade da natureza e suas relações e interdependências ainda estão por ser estudas, entendidas, esclarecidas em toda sua complexidade. Mas, a drástica redução de espécies imposta pela agricultura iniciada no paleolítico, criando ecossistemas artificiais com algumas poucas gramíneas e leguminosas e uma meia dúzia de animais, logo se fez ver seus resultados.</p>

                        <p>São diversos os exemplos de exuberantes civilizações que desapareceram tão logo exterminaram suas florestas e o meio ambiente. Esse fenômeno é conhecido como <strong>ECOCÍDIO</strong>. Hoje se vêem as pegadas civilizatórias no grande deserto do Saara, que avança ameaçadoramente sobre o norte da África. O exemplo se replica em todos os continentes.</p>

                        <p>Ao longo de milhares de anos, por exemplo, povos da Mesopotâmia surgiram e desapareceram, havendo construído enormes impérios. Após mais de 5 mil anos de exploração, o que resta hoje é um grande deserto no qual nenhuma grande plantação pode existir sem o uso de tecnologias específicas. Outros exemplos poderíamos citar: Os Anasazi e os os Maias nas Américas; e a Ilha de Páscoa no Oceano Pacífico. Esses exemplos, porém, são tragédias regionais, sem necessariamente com repercussões planetárias.</p>

                        <!-- Titulo Figura -->
                        <div class="text-center">
                            <a href="imagens/Figura03.png" data-bs-toggle="modal" data-bs-target="#Imagem03">
                                <img class="img-fluid wow fadeInLeft" src="imagens/Figura03.png" alt="Alt da imagem fica aqui">
                            </a>
                            <p class="FonteFigura">Representação histórica da Ilha de Páscoa antes da colonização humana. <br> Foto: tunesambiental.com</p>
                        </div>

                        <!-- Imagem 03 - MODAL -->
                        <div class="modal fade text-center" id="Imagem03" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <img class="img-fluid" src="imagens/Figura03.png" alt="Alt da imagem fica aqui">
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- Figura 03 - End -->

                        <!-- Titulo Figura -->
                        <div class="text-center">
                            <a href="imagens/Figura04.png" data-bs-toggle="modal" data-bs-target="#Imagem04">
                                <img class="img-fluid wow fadeInRight" src="imagens/Figura04.png" alt="Alt da imagem fica aqui">
                            </a>
                            <p class="FonteFigura">Ilha de Páscoa atualmente. Onde está sua floresta? <br>Foto: marsemfim.com.br</p>
                        </div>

                        <!-- Imagem 04 - MODAL -->
                        <div class="modal fade text-center" id="Imagem04" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <img class="img-fluid" src="imagens/Figura04.png" alt="Alt da imagem fica aqui">
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- Figura 04 - End -->

                        <!-- Saiba Mais -->
                        <div class="SaibaMaisCaixa">
                            <p class="SaibaMaisTitulo"> Saiba Mais</p>
                            <div class="SaibaMaisTexto">
                                <p>Conheça outras civilizações que padeceram pelo Ecocídio: <a href="https://tunesambiental.com/ecocidio/" target="_blank">https://tunesambiental.com/ecocidio/</a></p>
                            </div>
                        </div>

                        <div class="bd-callout bd-callout-success">
                            <p><em>"Árvores gigantescas, incendiadas pelo pé, tombavam com fragor, quebrando outras, ainda não atingidas pelo fogo. Depois, sobre o chão em cinzas onde fora a mata virgem, os destroços dos galhos e dos troncos reduzidos a carvão. E tudo isso o sertanejo faz para colher alguns alqueires de milho, arriscando-se pela falta de precaução, a perder uma floresta, como se sem floresta fosse possível haver cultura. A gente simples, deslumbrada com a natureza e crente de nunca lhes faltar as suas dádivas, destrói a floresta como desperdiçavam o ouro extraído das minas."</em></p>
                            <p class="text-end"><em>- Fragmento extraído de "August de Saint'Hilaire"</em>  </p>
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
                <a href="Topico01.php?AA=<?php echo $AtividadeAvaliativa ?>" class="btn btn-primary" role="button" aria-pressed="true"><i class="fa fa-chevron-left"></i> Voltar</a>
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