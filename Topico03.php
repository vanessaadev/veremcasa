<?php
$AtividadeAvaliativa = $_GET['AA'];
?>
<?php
// EGPCE - Chama o conectamoodle.php
require_once('conectamoodle.php');
?>

<?php
$page = 'Topico03';
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



                        <p class="Titulo">Unidades de Conservação (UCs)</p>
                        <hr>
                        <br>

                        <p>As Unidades de Conservação (UCs) são espaços territoriais protegidos por lei, que apresentam características naturais relevantes e têm como principal função proteger a fauna, flora, recursos hídricos, solos, paisagens e processos ecológicos dos ecossistemas naturais, além de contribuir para a manutenção dos modos de vida das culturas tradicionais, como os povos indígenas e quilombolas.</p>

                        <div class="row align-items-end">
                            <div class="col-md-6 col-sm-12">
                                <!-- Titulo Figura -->
                                <div class="text-center">
                                    <a href="imagens/Figura57.jpg" data-bs-toggle="modal" data-bs-target="#Imagem57">
                                        <img class="img-fluid wow fadeInLeft" src="imagens/Figura57.jpg" alt="Alt da imagem fica aqui">
                                    </a>
                                    <p class="FonteFigura">Soldadinho-do-Araripe. Iguana. <br> Foto: Thieres Pinto.</p>
                                </div>

                                <!-- Imagem 57 - MODAL -->
                                <div class="modal fade text-center" id="Imagem57" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img class="img-fluid" src="imagens/Figura57.jpg" alt="Alt da imagem fica aqui">
                                            </div>
                                            <div class="modal-footer text-center">
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <!-- Figura 57 - End -->
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <!-- Titulo Figura -->
                                <div class="text-center">
                                    <a href="imagens/Figura58.jpg" data-bs-toggle="modal" data-bs-target="#Imagem58">
                                        <img class="img-fluid wow fadeInLeft" src="imagens/Figura58.jpg" alt="Alt da imagem fica aqui">
                                    </a>
                                    <p class="FonteFigura">Refúgio da Vida Silvestre Soldadinho-do-Araripe. Crato/CE. Parque Nacional de Jericoacoara/CE. <br> Foto: Luiz Braga.</p>
                                </div>

                                <!-- Imagem 58 - MODAL -->
                                <div class="modal fade text-center" id="Imagem58" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img class="img-fluid" src="imagens/Figura58.jpg" alt="Alt da imagem fica aqui">
                                            </div>
                                            <div class="modal-footer text-center">
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <!-- Figura 58 - End -->
                            </div>
                        </div>
                        <br>

                        <p>Lembra aquele artigo 225 da Constituição Federal? Ele prevê que o Poder Público tem o dever de “definir, em todas as unidades da Federação, espaços territoriais e seus componentes a serem especialmente protegidos, sendo a alteração e a supressão permitidas somente através de lei, vedada qualquer utilização que comprometa a integridade dos atributos que justifiquem sua proteção.” A partir desse artigo, foi criada a Lei n° 9.895/2000 (Sistema Nacional de Unidades de Conservação – SNUC).</p>

                        <!-- Importante -->
                        <div class="ImportanteCaixa">
                            <p class="ImportanteTitulo"> Importante</p>
                            <div class="ImportanteTexto">
                                <p>Entenda a importância das Unidades de Conservação neste vídeo.</p>

                                <div class="video-responsive">
                                    <iframe width="560" height="315" src="https://www.youtube.com/embed/KZkzp4uJKJY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                </div>
                            </div>
                        </div>
                        <br><br>


                        <p class="SubTitulo">SNUC - Sistema Nacional de Unidades de Conservação</p>
                        <hr>
                        <br>

                        <p>O SNUC traz as regras para a criação e a gestão de UCs, objetivos e diretrizes a serem seguidos para assegurar a sua preservação, além das categorias de UC, que podem ser criadas pelo poder público ou até mesmo por um cidadão.</p>

                        <p>Também traz as formas de participação da população na administração e regulação do sistema, possibilitando assim o desenvolvimento de estratégias conjuntas para as áreas naturais a serem preservadas e a potencialização da relação entre o Estado, os cidadãos e o meio ambiente.</p>

                        <p>Na composição do SNUC, temos:</p>

                        <!-- Titulo Figura -->
                        <div class="text-center">
                            <a href="imagens/Figura56.png" data-bs-toggle="modal" data-bs-target="#Imagem56">
                                <img class="img-fluid wow fadeInLeft" src="imagens/Figura56.png" alt="Alt da imagem fica aqui">
                            </a>
                        </div>

                        <!-- Imagem 56 - MODAL -->
                        <div class="modal fade text-center" id="Imagem56" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <img class="img-fluid" src="imagens/Figura56.png" alt="Alt da imagem fica aqui">
                                    </div>
                                    <div class="modal-footer text-center">
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- Figura 56 - End -->

                        <p>Os órgãos que coordenam o SNUC são o Ministério do Meio Ambiente (MMA) e o CONAMA.</p>

                        <p>Uma Unidade de Conservação pode ser criada pelo governo federal, estadual ou municipal, ou ainda por um particular.</p>

                        <div class="row align-items-center">
                            <div class="col-md-6 col-sm-12">
                                <p class="wow fadeInRight" data-wow-delay="0.5s">Em nível federal, quem cria e cuida de UCs é o Instituto Chico Mendes de Conservação Biodiversidade - ICMBio. O ICMBio é uma autarquia federal vinculada ao Ministério do Meio Ambiente. A principal função do ICMBio está relacionada à gestão, implantação, proteção, fiscalização e monitoramento de Unidades de Conservação Federais.</p>
                            </div>

                            <div class="col-md-6 col-sm-12">
                                <!-- Titulo Figura -->
                                <div class="text-center">
                                    <a href="imagens/Figura60.png" data-bs-toggle="modal" data-bs-target="#Imagem60">
                                        <img class="img-fluid wow fadeInLeft" src="imagens/Figura60.png" alt="Alt da imagem fica aqui">
                                    </a>
                                </div>
                                <!-- Fim Imagem -->
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-md-6 col-sm-12">
                                <!-- Titulo Figura -->
                                <div class="text-center">
                                    <a href="imagens/Figura59.png" data-bs-toggle="modal" data-bs-target="#Imagem59">
                                        <img class="img-fluid wow fadeInLeft" src="imagens/Figura59.png" alt="Alt da imagem fica aqui">
                                    </a>
                                    <p class="FonteFigura">Parque Nacional de Jericoacoara/CE. <br> Foto: Assembleia Legislativa-CE.</p>
                                </div>

                                <!-- Imagem 59 - MODAL -->
                                <div class="modal fade text-center" id="Imagem59" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img class="img-fluid" src="imagens/Figura59.png" alt="Alt da imagem fica aqui">
                                            </div>
                                            <div class="modal-footer text-center">
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <!-- Figura 59 - End -->
                            </div>

                            <div class="col-md-6 col-sm-12">
                                <!-- Titulo Figura -->
                                <div class="text-center">
                                    <a href="imagens/Figura61.png" data-bs-toggle="modal" data-bs-target="#Imagem61">
                                        <img class="img-fluid wow fadeInLeft" src="imagens/Figura61.png" alt="Alt da imagem fica aqui">
                                    </a>
                                    <p class="FonteFigura">Área de Proteção Ambiental Delta do Parnaíba (CE/PI/MA) <br> Foto: ICMBio.</p>
                                </div>

                                <!-- Imagem 61 - MODAL -->
                                <div class="modal fade text-center" id="Imagem61" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img class="img-fluid" src="imagens/Figura61.png" alt="Alt da imagem fica aqui">
                                            </div>
                                            <div class="modal-footer text-center">
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <!-- Figura 61 - End -->
                            </div>
                        </div>

                        <p>Em nível <u>estadual</u>, aqui no Ceará, quem cria e faz a gestão das UCs é a <strong>SEMA</strong>. Já em nível <u>municipal</u>, é o <strong>órgão ambiental municipal</strong>.</p>

                        <div class="row">
                            <div class="col-md-6 col-sm-12">
                                <!-- Titulo Figura -->
                                <div class="text-center">
                                    <a href="imagens/Figura62.png" data-bs-toggle="modal" data-bs-target="#Imagem62">
                                        <img class="img-fluid wow fadeInLeft" src="imagens/Figura62.png" alt="Alt da imagem fica aqui">
                                    </a>
                                    <p class="FonteFigura">Parque Estadual Sítio Fundão. Crato/CE. <br> Foto: SEMA.</p>
                                </div>

                                <!-- Imagem 62 - MODAL -->
                                <div class="modal fade text-center" id="Imagem62" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img class="img-fluid" src="imagens/Figura62.png" alt="Alt da imagem fica aqui">
                                            </div>
                                            <div class="modal-footer text-center">
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <!-- Figura 62 - End -->
                            </div>

                            <div class="col-md-6 col-sm-12">
                                <!-- Titulo Figura -->
                                <div class="text-center">
                                    <a href="imagens/Figura63.png" data-bs-toggle="modal" data-bs-target="#Imagem63">
                                        <img class="img-fluid wow fadeInLeft" src="imagens/Figura63.png" alt="Alt da imagem fica aqui">
                                    </a>
                                    <p class="FonteFigura">APA Municipal da Lagoa da Bastiana. Iguatu/CE. <br> Foto: MaisFM Iguatu.</p>
                                </div>

                                <!-- Imagem 63 - MODAL -->
                                <div class="modal fade text-center" id="Imagem63" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img class="img-fluid" src="imagens/Figura63.png" alt="Alt da imagem fica aqui">
                                            </div>
                                            <div class="modal-footer text-center">
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <!-- Figura 63 - End -->
                            </div>
                        </div>
                        <br><br>

                        <!-- Saiba Mais -->
                        <div class="SaibaMaisCaixa">
                            <p class="SaibaMaisTitulo"> Saiba Mais</p>
                            <div class="SaibaMaisTexto">
                                <p><a href="https://www.sema.ce.gov.br/wp-content/uploads/sites/36/2021/03/UCs_Estaduais_Rev.pdf" target="_blank">Acesse aqui o mapa das Unidades de Conservação no Ceará</a>.</p>
                            </div>
                        </div>
                        <br><br>

                        <!-- Importante -->
                        <div class="ImportanteCaixa">
                            <p class="ImportanteTitulo"> Importante</p>
                            <div class="ImportanteTexto">
                                <p>Um cidadão também pode criar uma Unidade de Conservação particular, desde que a área tenha uma relevante importância ambiental. A <strong>Reserva Particular do Patrimônio Natural – RPPN</strong> é uma categoria de UC criada pela vontade do proprietário da terra. No momento em que decide criar uma RPPN, o proprietário assume o compromisso com a conservação da natureza.</p>

                                <!-- Titulo Figura -->
                                <div class="text-center">
                                    <a href="imagens/Figura64.png" data-bs-toggle="modal" data-bs-target="#Imagem64">
                                        <img class="img-fluid wow fadeInLeft" src="imagens/Figura64.png" alt="Alt da imagem fica aqui">
                                    </a>
                                    <p class="FonteFigura">RPPN Serra das Almas. Crateús/CE. <br> Foto: Eco Nordeste.</p>
                                </div>

                                <!-- Imagem 64 - MODAL -->
                                <div class="modal fade text-center" id="Imagem64" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img class="img-fluid" src="imagens/Figura64.png" alt="Alt da imagem fica aqui">
                                            </div>
                                            <div class="modal-footer text-center">
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <!-- Figura 64 - End -->
                            </div>
                        </div>
                        <br><br>

                        <!-- Fique Atento -->
                        <div class="FiqueAtentoCaixa">
                            <p class="FiqueAtentoTitulo"> Fique Atento</p>
                            <div class="FiqueAtentoTexto">
                                <p>Quem cria uma Unidade de Conservação tem que cuidar! Seja o poder público ou um particular.</p>

                                <p>Para auxiliar na gestão de uma Unidade de Conservação, o SNUC prevê a <u>participação da sociedade civil</u> através do <strong>Conselho Gestor</strong>. Esse Conselho tem como função auxiliar a equipe da UC na sua gestão. Podem participar do Conselho: representantes da população da área protegida e seu entorno, órgãos públicos, associações, ONGs, pesquisadores, empresas privadas e interessados. A soma desses saberes ajudará na tomada das decisões para o cumprimento dos objetivos de uma UC.</p>

                                <!-- Titulo Figura -->
                                <div class="text-center">
                                    <a href="imagens/Figura65.png" data-bs-toggle="modal" data-bs-target="#Imagem65">
                                        <img class="img-fluid wow fadeInRight" src="imagens/Figura65.png" alt="Alt da imagem fica aqui">
                                    </a>
                                    <p class="FonteFigura">Reunião do Conselho Gestor da APA da Serra de Baturité. Pacoti/CE. <br> Foto: SEMA.</p>
                                </div>

                                <!-- Imagem 65 - MODAL -->
                                <div class="modal fade text-center" id="Imagem65" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img class="img-fluid" src="imagens/Figura65.png" alt="Alt da imagem fica aqui">
                                            </div>
                                            <div class="modal-footer text-center">
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <!-- Figura 65 - End -->
                            </div>
                        </div>
                        <br><br>


                        <p class="SubTitulo"> Categorias de Unidades de Conservação</p>
                        <hr>
                        <br>

                        <p>Existem diversas categorias de UCs, que variam de acordo com as características do local e os objetivos de proteção que uma área necessita.</p>

                        <p>Por exemplo: em uma área natural que abriga diversas espécies em extinção, é preciso ordenar a visitação humana ou até mesmo proibi-la. Talvez até cercar a área. Já em uma área urbanizada localizada em uma serra, pode ser necessário o controle da expansão das atividades humanas, limitando ou proibindo certos tipos de atividades.</p>

                        <p>O SNUC divide as Unidades de Conservação em duas grandes categorias: <strong>Proteção Integral e Uso Sustentável</strong>.</p>
                        <br>


                        <p class="SubSubTitulo"> Unidades de Conservação de Proteção Integral</p>
                        <hr>
                        <br>

                        <p>O objetivo central das Unidades de Proteção Integral é preservar integralmente a natureza, sendo admitido apenas o uso indireto dos seus recursos naturais. Existem cinco tipos de UCs de proteção integral:</p>


                        <!-- SubSubSubTitulo -->
                        <p><strong> Estação Ecológica</strong></p>
                        <hr>
                        <br>

                        <p>Seus principais objetivos são a preservação da natureza e a realização de pesquisas científicas.</p>

                        <p>Nessas unidades, é proibida a visitação pública, podendo ocorrer visitas com fins educacionais.</p>

                        <div class="row">
                            <div class="col-md-6 col-sm-12">
                                <!-- Titulo Figura -->
                                <div class="text-center">
                                    <a href="imagens/Figura66.png" data-bs-toggle="modal" data-bs-target="#Imagem66">
                                        <img class="img-fluid wow fadeInLeft" src="imagens/Figura66.png" alt="Alt da imagem fica aqui">
                                    </a>
                                    <p class="FonteFigura">Estação Ecológica do Pecém. São Gonçalo do Amarante/CE. <br> Foto: Celso Oliveira.</p>
                                </div>

                                <!-- Imagem 66 - MODAL -->
                                <div class="modal fade text-center" id="Imagem66" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img class="img-fluid" src="imagens/Figura66.png" alt="Alt da imagem fica aqui">
                                            </div>
                                            <div class="modal-footer text-center">
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <!-- Figura 66 - End -->
                            </div>

                            <div class="col-md-6 col-sm-12">
                                <!-- Titulo Figura -->
                                <div class="text-center">
                                    <a href="imagens/Figura67.png" data-bs-toggle="modal" data-bs-target="#Imagem67">
                                        <img class="img-fluid wow fadeInLeft" src="imagens/Figura67.png" alt="Alt da imagem fica aqui">
                                    </a>
                                    <p class="FonteFigura">Estação Ecológica de Aiuaba. Aiuaba/CE. <br> Foto: Eco Nordeste.</p>
                                </div>

                                <!-- Imagem 67 - MODAL -->
                                <div class="modal fade text-center" id="Imagem67" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img class="img-fluid" src="imagens/Figura67.png" alt="Alt da imagem fica aqui">
                                            </div>
                                            <div class="modal-footer text-center">
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <!-- Figura 67 - End -->
                            </div>
                        </div>
                        <br><br>

                        <!-- SubSubSubTitulo -->
                        <p><strong> Reserva Biológica</strong></p>
                        <hr>
                        <br>

                        <p>Os principais objetivos das Reservas Biológicas são a preservação integral da biota e dos atributos naturais existentes em seus limites, de modo que não haja interferência humana direta ou qualquer modificação ambiental, excetuando-se as medidas de recuperação de ecossistemas alterados e as ações de manejo necessárias para recuperar e preservar o equilíbrio ecológico, a diversidade e os processos naturais.</p>

                        <div class="row">
                            <div class="col-md-6 col-sm-12">
                                <!-- Titulo Figura -->
                                <div class="text-center">
                                    <a href="imagens/Figura68.jpg" data-bs-toggle="modal" data-bs-target="#Imagem68">
                                        <img class="img-fluid wow fadeInLeft" src="imagens/Figura68.jpg" alt="Alt da imagem fica aqui">
                                    </a>
                                    <p class="FonteFigura">Reserva Biológica Atol das Rocas. Natal/RN. <br> Foto: ICMBio.</p>
                                </div>

                                <!-- Imagem 68 - MODAL -->
                                <div class="modal fade text-center" id="Imagem68" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img class="img-fluid" src="imagens/Figura68.jpg" alt="Alt da imagem fica aqui">
                                            </div>
                                            <div class="modal-footer text-center">
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <!-- Figura 68 - End -->
                            </div>

                            <div class="col-md-6 col-sm-12">
                                <!-- Titulo Figura -->
                                <div class="text-center">
                                    <a href="imagens/Figura69.png" data-bs-toggle="modal" data-bs-target="#Imagem69">
                                        <img class="img-fluid wow fadeInLeft" src="imagens/Figura69.png" alt="Alt da imagem fica aqui">
                                    </a>
                                    <p class="FonteFigura">Reserva Biológica Poço das Antas. Silva Jardim e Casimiro de Abreu/RJ. <br> Foto: klimanaturali.org</p>
                                </div>

                                <!-- Imagem 69 - MODAL -->
                                <div class="modal fade text-center" id="Imagem69" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img class="img-fluid" src="imagens/Figura69.png" alt="Alt da imagem fica aqui">
                                            </div>
                                            <div class="modal-footer text-center">
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <!-- Figura 69 - End -->
                            </div>
                        </div>
                        <br><br>

                        <!-- SubSubSubTitulo -->
                        <p><strong> Parque Nacional, Estadual e Natural Municipal</strong></p>
                        <hr>
                        <br>

                        <p>O Parque, seja ele nacional, estadual ou natural municipal, apresenta como objetivo a preservação de ecossistemas naturais com relevância ecológica e beleza cênica, de modo a garantir a realização de pesquisas científicas, desenvolvimento de atividades de educação ambiental, recreação em contato com a natureza e turismo ecológico.</p>

                        <p>Devido a sua ampla distribuição no território brasileiro e por incentivarem a visitação pública, os Parques são as Unidades de Conservação que propiciam a maior variedade de experiências e a maior interação entre o visitante e a natureza.</p>

                        <div class="row">
                            <div class="col-md-6 col-sm-12">
                                <!-- Titulo Figura -->
                                <div class="text-center">
                                    <a href="imagens/Figura70.png" data-bs-toggle="modal" data-bs-target="#Imagem70">
                                        <img class="img-fluid wow fadeInLeft" src="imagens/Figura70.png" alt="Alt da imagem fica aqui">
                                    </a>
                                    <p class="FonteFigura">Parque Estadual do Cocó, Fortaleza/CE. <br> Foto: SEMA.</p>
                                </div>

                                <!-- Imagem 70 - MODAL -->
                                <div class="modal fade text-center" id="Imagem70" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img class="img-fluid" src="imagens/Figura70.png" alt="Alt da imagem fica aqui">
                                            </div>
                                            <div class="modal-footer text-center">
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <!-- Figura 70 - End -->
                            </div>

                            <div class="col-md-6 col-sm-12">
                                <!-- Titulo Figura -->
                                <div class="text-center">
                                    <a href="imagens/Figura71.png" data-bs-toggle="modal" data-bs-target="#Imagem71">
                                        <img class="img-fluid wow fadeInLeft" src="imagens/Figura71.png" alt="Alt da imagem fica aqui">
                                    </a>
                                    <p class="FonteFigura">Parque Estadual Botânico do Ceará. Caucaia/CE. <br> Foto: Celso Oliveira.</p>
                                </div>

                                <!-- Imagem 71 - MODAL -->
                                <div class="modal fade text-center" id="Imagem71" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img class="img-fluid" src="imagens/Figura71.png" alt="Alt da imagem fica aqui">
                                            </div>
                                            <div class="modal-footer text-center">
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <!-- Figura 71 - End -->
                            </div>
                        </div>
                        <br><br>

                        <!-- Titulo Figura -->
                        <div class="text-center">
                            <a href="imagens/Figura72.png" data-bs-toggle="modal" data-bs-target="#Imagem72">
                                <img class="img-fluid wow fadeInLeft" src="imagens/Figura72.png" alt="Alt da imagem fica aqui">
                            </a>
                            <p class="FonteFigura">Parque Estadual Pedra da Risca do Meio. Fortaleza/CE. <br> Foto: Celso Oliveira.</p>
                        </div>

                        <!-- Imagem 72 - MODAL -->
                        <div class="modal fade text-center" id="Imagem72" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <img class="img-fluid" src="imagens/Figura72.png" alt="Alt da imagem fica aqui">
                                    </div>
                                    <div class="modal-footer text-center">
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- Figura 72 - End -->

                        <!-- Curiosidade -->
                        <div class="CuriosidadeCaixa">
                            <p class="CuriosidadeTitulo"> Curiosidade</p>
                            <div class="CuriosidadeTexto">
                                <p>Conheça o Parque Estadual do Cocó.</p>

                                <div class="video-responsive">
                                    <iframe width="560" height="315" src="https://www.youtube.com/embed/V2GXRL4kMZQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                </div>
                            </div>
                        </div>

                        <br><br>
                        <!-- SubSubSubTitulo -->
                        <p><strong> Monumento Natural</strong></p>
                        <hr>
                        <br>

                        <p>A principal função dos Monumentos Naturais é a preservação de áreas naturais raras, singulares ou de grande beleza cênica. Esse tipo de Unidade pode ser constituído por áreas particulares, desde que seja possível compatibilizar os objetivos da Unidade com a utilização da terra e dos recursos naturais pelos proprietários.</p>

                        

                        <div class="row">
                            <div class="col-md-6 col-sm-12">
                                <!-- Titulo Figura -->
                                <div class="text-center">
                                    <a href="imagens/Figura73.png" data-bs-toggle="modal" data-bs-target="#Imagem73">
                                        <img class="img-fluid wow fadeInLeft" src="imagens/Figura73.png" alt="Alt da imagem fica aqui">
                                    </a>
                                    <p class="FonteFigura">Monumento Natural Os Monólitos de Quixadá/CE. <br> Foto: Celso Oliveira.</p>
                                </div>

                                <!-- Imagem 73 - MODAL -->
                                <div class="modal fade text-center" id="Imagem73" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img class="img-fluid" src="imagens/Figura73.png" alt="Alt da imagem fica aqui">
                                            </div>
                                            <div class="modal-footer text-center">
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <!-- Figura 73 - End -->
                            </div>

                            <div class="col-md-6 col-sm-12">
                                <!-- Titulo Figura -->
                                <div class="text-center">
                                    <a href="imagens/Figura74.png" data-bs-toggle="modal" data-bs-target="#Imagem74">
                                        <img class="img-fluid wow fadeInLeft" src="imagens/Figura74.png" alt="Alt da imagem fica aqui">
                                    </a>
                                    <p class="FonteFigura">Monumento Natural Falésias de Beberibe/CE. <br> Foto: Celso Oliveira.</p>
                                </div>

                                <!-- Imagem 74 - MODAL -->
                                <div class="modal fade text-center" id="Imagem74" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img class="img-fluid" src="imagens/Figura74.png" alt="Alt da imagem fica aqui">
                                            </div>
                                            <div class="modal-footer text-center">
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <!-- Figura 74 - End -->
                            </div>
                        </div>
                        <br><br>

                        <br><br>
                        <!-- SubSubSubTitulo -->
                        <p><strong> Refúgio de Vida Silvestre</strong></p>
                        <hr>
                        <br>

                        <p>Esse tipo de categoria apresenta como principal objetivo a proteção de ambientes naturais, que assegurem condições para a existência ou reprodução de espécies da flora local e da fauna residente e/ou migratória.</p>

                        <div class="row">
                            <div class="col-md-6 col-sm-12">
                                <!-- Titulo Figura -->
                                <div class="text-center">
                                    <a href="imagens/Figura75.png" data-bs-toggle="modal" data-bs-target="#Imagem75">
                                        <img class="img-fluid wow fadeInUp" src="imagens/Figura75.png" alt="Alt da imagem fica aqui">
                                    </a>
                                    <p class="FonteFigura">Refúgio de Vida Silvestre Pedra da Andorinha. Sobral/CE. <br> Foto: Sobral Online.</p>
                                </div>

                                <!-- Imagem 75 - MODAL -->
                                <div class="modal fade text-center" id="Imagem75" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img class="img-fluid" src="imagens/Figura75.png" alt="Alt da imagem fica aqui">
                                            </div>
                                            <div class="modal-footer text-center">
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <!-- Figura 75 - End -->
                            </div>

                            <div class="col-md-6 col-sm-12">
                                <!-- Titulo Figura -->
                                <div class="text-center">
                                    <a href="imagens/Figura76.png" data-bs-toggle="modal" data-bs-target="#Imagem76">
                                        <img class="img-fluid wow fadeInDown" src="imagens/Figura76.png" alt="Alt da imagem fica aqui">
                                    </a>
                                    <p class="FonteFigura">Refúgio de Vida Silvestre Periquito Cara-Suja. Guaramiranga/CE. <br> Foto: SEMA.</p>
                                </div>

                                <!-- Imagem 76 - MODAL -->
                                <div class="modal fade text-center" id="Imagem76" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img class="img-fluid" src="imagens/Figura76.png" alt="Alt da imagem fica aqui">
                                            </div>
                                            <div class="modal-footer text-center">
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <!-- Figura 76 - End -->
                            </div>
                        </div>

                        <br><br>
                        <p class="SubSubTitulo"><strong> Unidade de Conservação de Uso Sustentável</strong></p>
                        <hr>
                        <br>

                        <p>O objetivo das UCs de Uso Sustentável é compatibilizar a conservação da natureza com o uso sustentável de parcela dos seus recursos naturais. É uma categoria menos restritiva que as UCs de Proteção Integral, ou seja, são permitidas mais atividades humanas nessas áreas.</p>

                        <p>O grupo das Unidades de Uso Sustentável é composto pelos seguintes tipos:</p>

                        <div class="d-flex flex-wrap align-items-center justify-content-center">
                            <p class="miniCaixaVerde wow fadeInLeft" data-wow-delay="0.3s" data-wow-duration="2.5s">Área de Proteção Ambiental (APA)</p>
                            <p class="miniCaixaVerde wow fadeInLeft" data-wow-delay="0.6s" data-wow-duration="2.5s">Área de Relevante Interesse Ecológico (ARIE)</p>
                            <p class="miniCaixaVerde wow fadeInLeft" data-wow-delay="0.9s" data-wow-duration="2.5s">Floresta Nacional, Estadual ou Municipal</p>
                            <p class="miniCaixaVerde wow fadeInLeft" data-wow-delay="1.3s" data-wow-duration="2.5s">Reserva Extravista</p>
                            <p class="miniCaixaVerde wow fadeInLeft" data-wow-delay="1.6s" data-wow-duration="2.5s">Reserva de Desenvolvimento Sustentável</p>
                            <p class="miniCaixaVerde wow fadeInLeft" data-wow-delay="1.9s" data-wow-duration="2.5s">Reserva Particular do Patrimônio Natural (RPPN)</p>
                            <p class="miniCaixaVerde wow fadeInLeft" data-wow-delay="2.3s" data-wow-duration="2.5s">Reserva de Fauna</p>
                        </div>

                        <br><br>
                        <!-- SubSubSubTitulo -->
                        <p class="CorVerdeClaroEstado" style="font-weight: 800; font-size:1.3em;"><strong> Área de Proteção Ambiental (APA)</strong></p>
                        <hr>
                        <br>


                        <p>As APAs são áreas extensas, com certo grau de ocupação humana, dotada de atributos abióticos, bióticos, estéticos e culturais que são importantes para a qualidade de vida e bem-estar humanos. Os principais objetivos dessa categoria são a proteção da diversidade biológica, a disciplina dos processos de ocupação humana e a garantia da sustentabilidade do uso dos recursos naturais.</p>

                        <div class="row">
                            <div class="col-md-6 col-sm-12">
                                <!-- Titulo Figura -->
                                <div class="text-center">
                                    <a href="imagens/Figura77.jpg" data-bs-toggle="modal" data-bs-target="#Imagem77">
                                        <img class="img-fluid wow fadeInLeft" src="imagens/Figura77.jpg" alt="Alt da imagem fica aqui">
                                    </a>
                                    <p class="FonteFigura">Monumento Natural Os Monólitos de Quixadá/CE. <br> Foto: Celso Oliveira.</p>
                                </div>

                                <!-- Imagem 77 - MODAL -->
                                <div class="modal fade text-center" id="Imagem77" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img class="img-fluid" src="imagens/Figura77.jpg" alt="Alt da imagem fica aqui">
                                            </div>
                                            <div class="modal-footer text-center">
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <!-- Figura 77 - End -->
                            </div>

                            <div class="col-md-6 col-sm-12">
                                <!-- Titulo Figura -->
                                <div class="text-center">
                                    <a href="imagens/Figura78.png" data-bs-toggle="modal" data-bs-target="#Imagem78">
                                        <img class="img-fluid wow fadeInLeft" src="imagens/Figura78.png" alt="Alt da imagem fica aqui">
                                    </a>
                                    <p class="FonteFigura">Monumento Natural Falésias de Beberibe/CE. <br> Foto: Celso Oliveira.</p>
                                </div>

                                <!-- Imagem 78 - MODAL -->
                                <div class="modal fade text-center" id="Imagem78" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img class="img-fluid" src="imagens/Figura78.png" alt="Alt da imagem fica aqui">
                                            </div>
                                            <div class="modal-footer text-center">
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <!-- Figura 78 - End -->
                            </div>
                        </div>
                        <br><br>

                        <br><br>
                        <!-- SubSubSubTitulo -->
                        <p><strong> Refúgio de Vida Silvestre</strong></p>
                        <hr>
                        <br>

                        <p>Esse tipo de categoria apresenta como principal objetivo a proteção de ambientes naturais, que assegurem condições para a existência ou reprodução de espécies da flora local e da fauna residente e/ou migratória.</p>

                        <div class="row">
                            <div class="col-md-6 col-sm-12">
                                <!-- Titulo Figura -->
                                <div class="text-center">
                                    <a href="imagens/Figura78.png" data-bs-toggle="modal" data-bs-target="#Imagem78">
                                        <img class="img-fluid wow fadeInUp" src="imagens/Figura78.png" alt="Alt da imagem fica aqui">
                                    </a>
                                    <p class="FonteFigura">Refúgio de Vida Silvestre Pedra da Andorinha. Sobral/CE. <br> Foto: Sobral Online.</p>
                                </div>

                                <!-- Imagem 78 - MODAL -->
                                <div class="modal fade text-center" id="Imagem78" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img class="img-fluid" src="imagens/Figura78.png" alt="Alt da imagem fica aqui">
                                            </div>
                                            <div class="modal-footer text-center">
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <!-- Figura 78 - End -->
                            </div>

                            <div class="col-md-6 col-sm-12">
                                <!-- Titulo Figura -->
                                <div class="text-center">
                                    <a href="imagens/Figura79.png" data-bs-toggle="modal" data-bs-target="#Imagem79">
                                        <img class="img-fluid wow fadeInDown" src="imagens/Figura79.png" alt="Alt da imagem fica aqui">
                                    </a>
                                    <p class="FonteFigura">Refúgio de Vida Silvestre Periquito Cara-Suja. Guaramiranga/CE. <br> Foto: SEMA.</p>
                                </div>

                                <!-- Imagem 79 - MODAL -->
                                <div class="modal fade text-center" id="Imagem79" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img class="img-fluid" src="imagens/Figura79.png" alt="Alt da imagem fica aqui">
                                            </div>
                                            <div class="modal-footer text-center">
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <!-- Figura 79 - End -->
                            </div>

                            <div class="col-md-6 col-sm-12">
                                <!-- Titulo Figura -->
                                <div class="text-center">
                                    <a href="imagens/Figura79.png" data-bs-toggle="modal" data-bs-target="#Imagem79">
                                        <img class="img-fluid wow fadeInDown" src="imagens/Figura79.png" alt="Alt da imagem fica aqui">
                                    </a>
                                    <p class="FonteFigura">Refúgio de Vida Silvestre Periquito Cara-Suja. Guaramiranga/CE. <br> Foto: SEMA.</p>
                                </div>

                                <!-- Imagem 79 - MODAL -->
                                <div class="modal fade text-center" id="Imagem79" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img class="img-fluid" src="imagens/Figura79.png" alt="Alt da imagem fica aqui">
                                            </div>
                                            <div class="modal-footer text-center">
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <!-- Figura 79 - End -->
                            </div>

                            <div class="col-md-6 col-sm-12">
                                <!-- Titulo Figura -->
                                <div class="text-center">
                                    <a href="imagens/Figura79.png" data-bs-toggle="modal" data-bs-target="#Imagem79">
                                        <img class="img-fluid wow fadeInDown" src="imagens/Figura79.png" alt="Alt da imagem fica aqui">
                                    </a>
                                    <p class="FonteFigura">Refúgio de Vida Silvestre Periquito Cara-Suja. Guaramiranga/CE. <br> Foto: SEMA.</p>
                                </div>

                                <!-- Imagem 79 - MODAL -->
                                <div class="modal fade text-center" id="Imagem79" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img class="img-fluid" src="imagens/Figura79.png" alt="Alt da imagem fica aqui">
                                            </div>
                                            <div class="modal-footer text-center">
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <!-- Figura 79 - End -->
                            </div>
                        </div>










                        APA da Lagoa do Uruaú. Beberibe/CE. APA da Bica do Ipu/CE.
                        Foto: Celso Oliveira. Foto: Celso Oliveira.













                        APA da Serra de Aratanha. Maranguape e Pacatuba/CE. APA das Dunas do Paracuru/CE.
                        Foto: Celso Oliveira. Foto: Celso Oliveira.


                        <br><br>
                        <!-- SubSubSubTitulo -->
                        <p><strong> Área de Relevante Interesse Ecológico (ARIE)</strong></p>
                        <hr>
                        <br>

                        As ARIEs são áreas que apresentam pequena extensão, com pouca ou nenhuma ocupação humana. Esse tipo de Unidade, em geral, é implantado em locais com características naturais extraordinárias ou que abriguem exemplares raros da biota regional, de modo a garantir a manutenção dos ecossistemas naturais de importância regional ou local e regular o uso admissível dessas áreas, compatibilizando-os com os objetivos da conservação da natureza.










                        ARIE das Águas Emendadas dos Inhamuns. ARIE do Sítio Curió. Fortaleza/CE.
                        Tauá, Independência e Pedra Branca/CE. Foto: Celso Oliveira.
                        Foto: Celso Oliveira.


                        CURIOSIDADE

                        Faça uma Trilha virtual pela ARIE do Sítio Curió.

<br><br>
                        <!-- SubSubSubTitulo -->
                        <p><strong> Floresta Nacional, Estadual e Municipal</strong></p>
                        <hr>
                        <br>

                        São áreas com cobertura florestal de espécies predominantemente nativas, que apresentam como principais objetivos o uso múltiplo sustentável dos recursos florestais e a pesquisa científica.












                        Floresta Nacional da Chapada do Araripe. Barbalha, Crato, Jardim, Floresta Nacional do Tapajós. Aveiro, Belterra, Placas e
                        Missão Velha, Nova Olinda e Santana do Cariri/CE. Rurópolis/PA.
                        Foto: ICMBio. Foto: G1-Globo.


                        <br><br>
                        <!-- SubSubSubTitulo -->
                        <p><strong> Reserva Extrativista (Resex)</strong></p>
                        <hr>
                        <br>

                        Área utilizada por populações tradicionais, cuja subsistência baseia-se no extrativismo. Os principais objetivos deste tipo de Unidade são a proteção dos meios de vida e cultura de populações tradicionais e o uso sustentável dos recursos naturais da Unidade.












                        Resex Batoque. Aquiraz e Cascavel/CE. Resex Prainha do Canto Verde. Beberibe/CE.
                        Foto: Márcia Freire Pinto. Foto: Fernando Braga.

<br><br>
                        <!-- SubSubSubTitulo -->
                        <p><strong> Reserva de Fauna</strong></p>
                        <hr>
                        <br>

                        Áreas naturais com populações animais de espécies nativas, terrestres ou aquáticas, residentes ou migratórias. Essas áreas funcionam como locais adequados para estudos técnico-científicos sobre manejo econômico sustentável de recursos faunísticos.











                        Reserva de Fauna Baia de Babitonga/SC.
                        Foto: Meio Sustentável.

                        <br><br>
                        <!-- SubSubSubTitulo -->
                        <p><strong> Reserva de Desenvolvimento Sustentável (RDS)</strong></p>
                        <hr>
                        <br>

                        <p>Áreas naturais com populações tradicionais que utilizam sistemas sustentáveis de exploração dos recursos naturais. O principal objetivo desse tipo de Unidade é a preservação da natureza, de modo que sejam asseguradas as condições e meios necessários para a reprodução e melhoria dos modos e da qualidade de vida das populações tradicionais.</p>










                        RDS Itatupã-Baquiá. Gurupá/PA. RDS Mapurilândia/AM.
                        Foto: ICMBIO Foto: Dida Sampaio.

                        <br><br>
                        <!-- SubSubSubTitulo -->
                        <p><strong> Monumento Natural</strong></p>
                        <hr>
                        <br>
                        3.2.2.7. Reserva Particular do Patrimônio Natural (RPPN)

                        Áreas privadas, criadas por iniciativa do proprietário e gravadas com perpetuidade, de modo a garantir a conservação da diversidade biológica. Em RPPNs são permitidas apenas a pesquisa científica e a visitação com objetivos turísticos, recreativos e educacionais.













                        RPPN Fazenda Não Me Deixes. Quixadá/CE. RPPN Serra das Almas. Crateús/CE.
                        Foto: Luzilene Saboia. Foto: Associação Caatinga.



                        IMPORTANTE

                        Quando uma RPPN é criada pelo dono da área, essa proteção vale para sempre! Inclusive se a área for vendida, herdada ou dividida.


                        3.2.3. Outros conceitos importantes

                        3.2.3.1. Corredor Ecológico

                        Embora o Corredor Ecológico não seja considerado uma categoria de UC pelo SNUC, ele é previsto na lei como uma forma de interligar Unidades de Conservação, de modo a aumentar a possibilidade de movimento das espécies, recolonização de áreas degradadas e manutenção de populações que demandem grandes áreas de sobrevivência.













                        Corredor Ecológico do Rio Pacoti. Interliga a APA da Serra de Baturité com a APA do Rio Pacoti.
                        Foto: Celso Oliveira.























                        3.2.3.2. Plano de Manejo

                        É o documento oficial de planejamento de uma Unidade de Conservação. Fundamentado nos objetivos de gerais da Unidade, é nele que se estabelece o seu zoneamento e as normas que devem presidir o uso da área e o manejo dos recursos naturais.

                        O processo de elaboração de Planos de Manejo é um ciclo contínuo de consulta e tomada de decisão com base no entendimento das questões ambientais, socioeconômicas, históricas e culturais que caracterizam uma Unidade de Conservação e a região onde esta se insere. A participação do Conselho Gestor é fundamental para a elaboração e monitoramento.


                        3.2.3.3. Zona de Amortecimento

                        Imagine um imenso Parque Natural Municipal, todo protegido e preservado. Será que uma indústria poderia se instalar bem ao lado desse Parque? A resposta é não, pois vários danos seriam causados, como emissão de fumaça, esgoto e barulho.

                        Para minimizar e/ou evitar impactos sobre as Unidades de Conservação, o SNUC definiu as chamadas Zonas de Amortecimento. Elas são áreas no entorno das Unidades, onde as atividades humanas são regradas, de modo a garantir a manutenção dos processos ecológicos no interior da Unidade. A ideia é que, à medida que vai se afastando da UC, mais atividades vão sendo liberadas.



















                        Zona de Amortecimento (linha vermelha) de uma UC (em amarelo).
                        Imagem: SEMA.


                        PARA SABER MAIS

                        No Estado do Ceará, o Cadastro Estadual de Unidades de Conservação (CEUC) reúne informações sobre as Unidades de Conservação Federais, Estaduais, Municipais e Particulares inseridas no Ceará.


















                        Quantidade de UCs em terras cearenses.
                        Imagem: SEMA.





























                        Áreas protegidas pelas UCs em terras cearenses.
                        Imagem: SEMA.



                        FIQUE LIGADO

                        Acesse o CEUC e pesquise quais Unidades de Conservação existem no seu município.


                        3.2.4. Atividades educativas que podem ser desenvolvidas pelos AJAs

                        As Unidades de Conservação são excelentes locais para colocar em prática nossa vontade de ajudar o meio ambiente. Educação Ambiental em Unidades de Conservação é uma das principais formas de sensibilizar a população para a reconexão com a natureza.

                        Existem muitas atividades possíveis nessas áreas, desde que estejam de acordo com objetivos da UC. Vamos conhecer algumas possibilidades:


                        Condução de grupos em trilhas Organização de mutirões de limpeza













                        Mutirão de plantio de árvores Produção de mudas de plantas












                        E ai AJA , já pensou em atuar numa Unidade de Conservação? Com qual atividade você se identifica? Ah! Lembre-se que essas ações também podem ser realizadas fora de UCs, como nas praças, polos e areninhas!


                        Educação ambiental se faz em todo canto, a toda hora!


                        Agora prossiga ao questionário para fixar os seus conhecimentos.


                        ---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
                        <!-- Título -->
                        <p class="Titulo">ADAPTAÇÕES A UM CLIMA EM MUDANÇA </p>
                        <hr>
                        <br>

                        <p>O clima está mudando, e continuará mudando, mesmo que as emissões de GEE parem por completo. Com essa terrível constatação dos cientistas, a adaptação aos efeitos adversos da mudança do clima tornou-se uma preocupação ainda maior, após a divulgação do 4º Relatório do IPCC, que afirma que <em><strong>“o aquecimento do sistema climático é inequívoco, como agora é evidente pelas observações dos aumentos das temperaturas médias do ar e dos oceanos, o derretimento generalizado de neve e gelo e o aumento global médio do nível do mar”.</strong></em></p>

                        <p>Há um consenso entre os países de que será necessário promover medidas de adaptação em escala nacional e global, independente dos esforços de redução das emissões, já que a ocorrência de algum nível de mudança do clima é inevitável. O estabelecimento de medidas de adaptação representa uma estratégia essencial para a redução da severidade do impacto e dos custos da mudança do clima atual e futuro.</p>

                        <p>Existem várias ações para se adaptar melhor a um planeta em aquecimento, como o planejamento dos espaços onde as pessoas vivem, para que seja possível lidar melhor com verões mais quentes e chuvas mais intensas, intercalados com períodos cada vez mais longos de seca.</p>

                        <p>No caso do Nordeste, a gestão adequada dos recursos hídricos é fundamental para as épocas de seca, que estão sendo cada vez mais frequentes.</p>

                        <p>Independente da ação, o importante é que ela seja planejada para resolver o problema ou o risco criado com a mudança do clima. Por isso, o sucesso das medidas de adaptação dependerá:</p>

                        <ul class="none">
                            <li class="wow fadeInDown" data-wow-delay="0.3s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Da detecção do risco;</li>
                            <li class="wow fadeInDown" data-wow-delay="0.6s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Da percepção do risco tanto pelo indivíduo como pela sociedade;</li>
                            <li class="wow fadeInDown" data-wow-delay="0.9s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Dos objetivos, critérios e justificativas adotados para intervenção;</li>
                            <li class="wow fadeInDown" data-wow-delay="1.3s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Da escala de implementação das ações;</li>
                            <li class="wow fadeInDown" data-wow-delay="1.6s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Do contexto no qual o risco se insere para que a ação e adaptação seja realizada.</li>
                        </ul>





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
                <a href="Topico03.1.php?AA=<?php echo $AtividadeAvaliativa ?>" class="btn btn-primary" role="button" aria-pressed="true">Próximo <i class="fa fa-chevron-right"></i></a>
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