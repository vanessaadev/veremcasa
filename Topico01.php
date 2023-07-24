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

                        <h2 class="Titulo"> VIDA É DIVERSIDADE</h2>
                        <hr>
                        <br>
                        <p>Para falarmos de vida, precisamos falar de diversidade. A <strong>Diversidade</strong> é um pressuposto da vida, de toda vida. Da vida que está fora da gente e da vida que está dentro da gente. Assim como o mundo fora de nós é biodiverso, o mundo dentro de nós também o é. Nós somos seres biodiversos.</p>

                        <p>Biodiversidade é um conceito mais amplo que o “conjunto de seres vivos existentes na Terra”. Ele inclui a diversidade genética, fator fundamental para se compreender os ecossistemas em sua totalidade e integridade.</p>

                        <p>Você já se perguntou porque somos parecidos com nossos irmãos, primos, tios, pais, avós? A resposta é: porque temos no nosso corpo moléculas (genes), que nos foram transmitidas por nosso pais, que funcionam como um manual de instruções para o nosso crescimento, funcionamento e reprodução. Cada gene desses tem um papel a desempenhar. Eles são responsáveis pela cor da nossa pele, dos nossos cabelos, dos nossos olhos. Mas também vão dizer da nossa saúde, do nosso desenvolvimento, e junto com os estímulos socioambientais (nossas relações pessoais, nossa alimentação, contato com a natureza, educação, etc.), vão determinar nosso comportamento, desenvolvimento e aprendizagem.</p>

                        <p>Assim como acontece com nós humanos, também acontece com os demais seres vivos. Plantas, bichos, fungos, bactérias, todos têm uma constituição genética que, interagindo com o ecossistema em que eles vivem, vai determinar seu comportamento, seu desenvolvimento e sua função no mundo.</p>

                        <br>
                        <!-- Titulo Figura -->
                        <div class="text-center">
                            <a href="imagens/Figura01.png" data-bs-toggle="modal" data-bs-target="#Imagem01">
                                <img class="img-fluid wow fadeInLeft" width="700" src="imagens/Figura01.png" alt="Alt da imagem fica aqui">
                            </a>
                            <p class="FonteFigura"> Diversidade de mamíferos encontrados no Ceará. <br>
                                Fotos: Castiele Holanda Bezerra, John A. A. Oliveira, Ingrid Andrade e Déborah Praciano de Castro.</p>
                        </div>

                        <!-- Imagem 01 - MODAL -->
                        <div class="modal fade text-center" id="Imagem01" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <img class="img-fluid" src="imagens/Figura01.png" alt="Alt da imagem fica aqui">
                                    </div>
                                    <div class="modal-footer text-center">
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- Figura 01 - End -->
                        <br>


                        <p>Se olharmos para o planeta como um gigantesco organismo, compreenderemos a função e a importância dessa diversidade genética. Cada ser, individualmente e como espécie, com seu conjunto de genes, possui sua função e importância nesse enorme ser vivo chamado Terra.</p>

                        <p>Sem as plantas, por exemplo, não haveria oxigênio, não haveria quem captasse a energia do sol e a transformasse em alimento para todos os animais, inclusive o animal humano. As plantas, porém, precisam das abelhas e outros insetos, para fazer a polinização e assim produzir os frutos. Sem os fungos, não haveria a decomposição e reciclagem da matéria orgânica. Os pássaros, por sua vez, têm a função de disseminar sementes, controlar a população de insetos, dentre outras funções. Tudo está interligado!</p>

                        <!-- Titulo Figura -->
                        <div class="text-center">
                            <a href="imagens/Figura02.png" data-bs-toggle="modal" data-bs-target="#Imagem02">
                                <img class="img-fluid wow fadeInLeft" src="imagens/Figura02.png" alt="Alt da imagem fica aqui">
                            </a>
                            <p class="FonteFigura"> Perereca-Macaco (Pithecopus nordestinus), Perereca-de-capacete (Corythomantis greeningi) e Sapo-boi (Proceratophrys cristiceps).<br>A diversidade de anfíbios encontrados no Ceará. Fotos: Déborah Praciano e Kássio de Castro.
                            </p>
                        </div>

                        <!-- Imagem 02 - MODAL -->
                        <div class="modal fade text-center" id="Imagem02" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <img class="img-fluid" src="imagens/Figura02.png" alt="Alt da imagem fica aqui">
                                    </div>
                                    <div class="modal-footer text-center">
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- Figura 02 - End -->


                        <br>
                        <!-- Fique Atento -->
                        <div class="FiqueAtentoCaixa">
                            <p class="FiqueAtentoTitulo"> Fique Atento</p>
                            <div class="FiqueAtentoTexto">
                                <p>Observe no vídeo a seguir a importância do equilíbrio da biodiversidade:</p>

                                <div class="video-responsive">
                                    <iframe width="560" height="315" src="https://www.youtube.com/embed/S1wR9HBC49M" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                </div>

                            </div>
                        </div>
                        <br><br>

                        <p>A biodiversidade é importante porque é justamente o equilíbrio proporcionado por ela que traz purificação da água e do ar, controle de doenças e pestes, polinização, fixação de carbono no solo, produzindo fertilidade e proteção ao aquecimento global. Esses “serviços” que a natureza nos oferece gratuitamente são chamados de <a href="#" data-toggle="tooltip" data-placement="top" title="São os benefícios que os seres humanos obtém da natureza direta ou indiretamente, através dos ecossistemas, a fim de sustentar a vida no Planeta." style="color: #ffa73e;"><strong>Serviços Ambientais </strong><i class="fa fa-search-plus"></i></a>.</p>

                        <!-- Titulo Figura -->
                        <div class="text-center">
                            <a href="imagens/Figura03.png" data-bs-toggle="modal" data-bs-target="#Imagem03">
                                <img class="img-fluid wow fadeInLeft" src="imagens/Figura03.png" alt="Alt da imagem fica aqui">
                            </a>
                            <p class="FonteFigura">A diversidade de insetos do Ceará: Borboleta-asas-de-vidro (Pseudoscada sp.), Mane-Magro (Stiphra sp.) e Abelha Uruçu (Melipona sp.). <br> Fotos: Eric Andrei, Juliana Lima e Joaquim Saldanha.
                            </p>
                        </div>

                        <!-- Imagem 03 - MODAL -->
                        <div class="modal fade text-center" id="Imagem03" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <img class="img-fluid" src="imagens/Figura03.png" alt="Alt da imagem fica aqui">
                                    </div>
                                    <div class="modal-footer text-center">
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- Figura 03 - End -->


                        <p>O trabalho dos cientistas é fundamental nesse contexto. As pesquisas e estudos que eles realizam sobre a biodiversidade contribuem para que possamos entender como funcionam os ecossistemas e como preservar as espécies, para que elas possam viver, se reproduzir e se perpetuar, mas para que se efetive essa preservação é fundamental a participação de todos.</p>

                        <div class="FiveCols">
                            <div class="grid-container" style="grid-template-columns: repeat(2, 1fr);">
                                <!-- Titulo Figura -->
                                <div class="text-center">
                                    <a href="imagens/Figura04.png" data-bs-toggle="modal" data-bs-target="#Imagem04">
                                        <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s" width="295" src="imagens/Figura04.png" alt="Alt da imagem fica aqui">
                                    </a>
                                </div>

                                <!-- Imagem 04 - MODAL -->
                                <div class="modal fade text-center" id="Imagem04" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                <!-- Figura 04 - End -->

                                <!-- Titulo Figura -->
                                <div class="text-center">
                                    <a href="imagens/Figura05.jpg" data-bs-toggle="modal" data-bs-target="#Imagem05">
                                        <img class="img-fluid wow fadeInUp" data-wow-delay="1.0s" src="imagens/Figura05.jpg" alt="Alt da imagem fica aqui">
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
                                <!-- Figura 05 - End -->

                                <!-- Titulo Figura -->
                                <div class="text-center">
                                    <a href="imagens/Figura06.jpg" data-bs-toggle="modal" data-bs-target="#Imagem06">
                                        <img class="img-fluid wow fadeInLeft" data-wow-delay="1.5s" width="500" src="imagens/Figura06.jpg" alt="Alt da imagem fica aqui">
                                    </a>
                                </div>

                                <!-- Imagem 06 - MODAL -->
                                <div class="modal fade text-center" id="Imagem06" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img class="img-fluid" src="imagens/Figura06.jpg" alt="Alt da imagem fica aqui">
                                            </div>
                                            <div class="modal-footer text-center">
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <!-- Figura 06 - End -->

                                <!-- Titulo Figura -->
                                <div class="text-center">
                                    <a href="imagens/Figura07.jpg" data-bs-toggle="modal" data-bs-target="#Imagem07">
                                        <img class="img-fluid wow fadeInDown" data-wow-delay="2.0s" width="320" src="imagens/Figura07.jpg" alt="Alt da imagem fica aqui">
                                    </a>
                                </div>

                                <!-- Imagem 07 - MODAL -->
                                <div class="modal fade text-center" id="Imagem07" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img class="img-fluid" src="imagens/Figura07.jpg" alt="Alt da imagem fica aqui">
                                            </div>
                                            <div class="modal-footer text-center">
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <!-- Figura 07 - End -->

                            </div>
                        </div>
                    </div>


                    <p class="FonteFigura text-center">A diversidade de frutos encontrados no Ceará: caju, tamarindo, siriguela e ameixa.
                        <br> Fotos: Google.
                    </p>


                    <p>Nessa luta pela diversidade é preciso unir esforços. Do doutor ao agricultor, do menino ao idoso, homem, mulher e quem mais quiser ver a vida fluir. Nessa luta, você AJA, é peça fundamental. Educando, conscientizando, organizando as ações de preservação através de seus Planos de Ação Comunitária.</p>

                    <!-- Titulo Figura -->
                    <div class="text-center">
                        <a href="imagens/Figura08.png" data-bs-toggle="modal" data-bs-target="#Imagem08">
                            <img class="img-fluid wow fadeInLeft" width="800" src="imagens/Figura08.png" alt="Alt da imagem fica aqui">
                        </a>
                        <p class="FonteFigura">PAC Abelhas Sem Ferrão conscientiza os visitantes do Parque Estadual Botânico, em Caucaia/CE, sobre a importância das abelhas nativas. Foto: @ajaabelhassemferrao</p>
                    </div>

                    <!-- Imagem 08 - MODAL -->
                    <div class="modal fade text-center" id="Imagem08" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-lg">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <img class="img-fluid" src="imagens/Figura08.png" alt="Alt da imagem fica aqui">
                                </div>
                                <div class="modal-footer text-center">
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- Figura 08 - End -->

                    <div class="FiveCols">
                        <div class="grid-container" style="grid-template-columns: repeat(2, 1fr);">
                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura09.jpg" data-bs-toggle="modal" data-bs-target="#Imagem09">
                                    <img class="img-fluid wow fadeInUp" width="413" src="imagens/Figura09.jpg" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 09 - MODAL -->
                            <div class="modal fade text-center" id="Imagem09" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura09.jpg" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!-- Figura 09 - End -->

                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura09_1.png" data-bs-toggle="modal" data-bs-target="#Imagem09_1">
                                    <img class="img-fluid wow fadeInDown" src="imagens/Figura09_1.png" alt="Alt da imagem fica aqui">
                                </a>

                            </div>

                            <!-- Imagem 09_1 - MODAL -->
                            <div class="modal fade text-center" id="Imagem09_1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura09_1.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!-- Figura 09_1 - End -->

                        </div>
                    </div>
                    <p class="FonteFigura text-center">Os animais domésticos também fazem parte da biodiversidade e precisam de PACs para sua proteção.<br> Fotos: @comedouroparapetnapraia e @ajasdeitapaje</p>


                    <!-- Saiba Mais -->
                    <div class="SaibaMaisCaixa">
                        <p class="SaibaMaisTitulo"> Saiba Mais</p>
                        <div class="SaibaMaisTexto">
                            <p>Os animais domésticos são aqueles que, ao longo de milhares de anos, passaram por um processo de domesticação e, portanto, estão acostumados com a presença humana. Eles foram domesticados para atender alguma necessidade do ser humano, seja de alimentação, transporte, entretenimento ou proteção. <a href="https://www.sema.ce.gov.br/wp-content/uploads/sites/36/2018/11/Cartilha-contra-abandono-de-animais.pdf" target="_blank">Confira mais informações sobre os cuidados com os animais domésticos nesta cartilha</a>.</p>
                        </div>
                    </div>
                    <br><br>

                    <div class="FiveCols">
                        <div class="grid-container">
                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura10.jpg" data-bs-toggle="modal" data-bs-target="#Imagem10">
                                    <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" src="imagens/Figura10.jpg" alt="Alt da imagem fica aqui">
                                </a>

                            </div>

                            <!-- Imagem 10 - MODAL -->
                            <div class="modal fade text-center" id="Imagem10" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura10.jpg" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!-- Figura 10 - End -->

                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura11.jpg" data-bs-toggle="modal" data-bs-target="#Imagem11">
                                    <img class="img-fluid wow fadeInLeft" data-wow-delay="1.0s" src="imagens/Figura11.jpg" alt="Alt da imagem fica aqui">
                                </a>

                            </div>

                            <!-- Imagem 11 - MODAL -->
                            <div class="modal fade text-center" id="Imagem11" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura11.jpg" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!-- Figura 11 - End -->

                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura12.jpg" data-bs-toggle="modal" data-bs-target="#Imagem12">
                                    <img class="img-fluid wow fadeInLeft" data-wow-delay="1.5s" src="imagens/Figura12.jpg" alt="Alt da imagem fica aqui">
                                </a>

                            </div>

                            <!-- Imagem 12 - MODAL -->
                            <div class="modal fade text-center" id="Imagem12" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura12.jpg" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!-- Figura 12 - End -->

                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura13.jpg" data-bs-toggle="modal" data-bs-target="#Imagem13">
                                    <img class="img-fluid wow fadeInLeft" data-wow-delay="2.0s" src="imagens/Figura13.jpg" alt="Alt da imagem fica aqui">
                                </a>

                            </div>

                            <!-- Imagem 13 - MODAL -->
                            <div class="modal fade text-center" id="Imagem13" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura13.jpg" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!-- Figura 13 - End -->

                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura14.jpg" data-bs-toggle="modal" data-bs-target="#Imagem14">
                                    <img class="img-fluid wow fadeInLeft" data-wow-delay="2.5s" src="imagens/Figura14.jpg" alt="Alt da imagem fica aqui">
                                </a>

                            </div>

                            <!-- Imagem 14 - MODAL -->
                            <div class="modal fade text-center" id="Imagem14" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura14.jpg" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!-- Figura 14 - End -->
                        </div>
                    </div>

                    <p class="FonteFigura text-center">Os fungos são os recicladores da matéria orgânica na natureza. Fotos: Sérgio Mota.</p>
                    <br><br>



                    <!-- Titulo Figura -->
                    <div class="text-center">
                        <a href="imagens/Figura15.png" data-bs-toggle="modal" data-bs-target="#Imagem15">
                            <img class="img-fluid wow fadeIn" src="imagens/Figura15.png" alt="Alt da imagem fica aqui">
                        </a>
                        <p class="FonteFigura">Diversidade de aves no Ceará: Choca-do-nordeste (Sakesphorus cristatus), Tucaninho-da-serra (Selenidera gouldii baturitensis), Pica-pau-dourado-escuro (Piculus chrysochloros), Mãe-da-lua (Nyctibius griseus), Galo-campina (Paroaria dominicana) e Besourinho-de-bico-vermelho (Chlorostilbon lucidus). <br>Fotos: Manoel Monte, Douglas Pinheiro e Adilene Albuquerque. </p>
                    </div>

                    <!-- Imagem 15 - MODAL -->
                    <div class="modal fade text-center" id="Imagem15" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-lg">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <img class="img-fluid" src="imagens/Figura15.png" alt="Alt da imagem fica aqui">
                                </div>
                                <div class="modal-footer text-center">
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- Figura 15 - End -->


                    <!-- Curiosidade -->
                    <div class="CuriosidadeCaixa">
                        <p class="CuriosidadeTitulo"> Curiosidade</p>
                        <div class="CuriosidadeTexto">
                            <p><strong>Biodiversidade no Mundo e no Brasil</strong></p>
                            <p>De acordo com a <strong><em>WWF</em></strong>, existem entre 10 e 50 milhões de espécies de animais e plantas na Terra. Porém, apenas 1,5 milhão foi catalogada.</p>
                            <p>Já no Brasil, segundo o Ministério do Meio Ambiente e Mudança do Clima (MMA), o “somos o país com a maior biodiversidade do mundo. São mais de 116.000 espécies animais e mais de 46.000 espécies vegetais conhecidas no País.” Essa diversidade de vida abriga mais de 20% do total de espécies do mundo encontradas em terra e água.</p>
                        </div>
                    </div>
                    <br><br>

                    <!-- Importante -->
                    <div class="ImportanteCaixa">
                        <p class="ImportanteTitulo"> Importante</p>
                        <div class="ImportanteTexto">
                            <p>É da biodiversidade que provém os nossos alimentos; os remédios para nossa saúde; a matéria-prima para construir nossos abrigos, nossas casas; o ar que respiramos, a água que mata nossa sede, e até a alegria de nossas festas e tradições provém da nossa biodiversidade. É preciso então conhecê-la, pois só se ama e se protege aquilo que conhecemos.</p>
                            <p>Mas não é só de fauna e flora que vive a nossa riqueza em diversidade genética. Nosso País abriga uma rica sociobiodiversidade, constituída por mais de 300 povos indígenas e diversas comunidades quilombolas, caiçaras e seringueiros, os quais possuem imensurável conhecimento acerca da conservação da biodiversidade.</p>
                        </div>
                    </div>
                    <br><br>

                    <!-- Fique Atento -->
                    <div class="FiqueAtentoCaixa">
                        <p class="FiqueAtentoTitulo"> Fique Atento</p>
                        <div class="FiqueAtentoTexto">
                            <p><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> O <strong>Programa Cientista-Chefe Meio Ambiente</strong> catalogou e lançou dois inventários da biodiversidade cearense:</p>
                            <p><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> O <strong>Inventário da Fauna do Ceará</strong> catalogou <strong>1.275 espécies animais</strong>, sendo 140 mamíferos, 133 répteis, 57 anfíbios, 443 aves e 502 peixes. <a href="https://www.sema.ce.gov.br/fauna-do-ceara/" target="_blank">CLIQUE AQUI para acessar</a></p>
                            <p><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> O <strong>Inventário da Flora do Ceará</strong> catalogou <strong>2.465 espécies de plantas com flores e frutos</strong>. <a href="https://www.sema.ce.gov.br/flora-do-ceara/" target="_blank">CLIQUE AQUI para acessar</a>.</p>
                        </div>
                    </div>
                    <br><br>

                    <!-- Titulo Figura -->
                    <div class="text-center">
                        <a href="imagens/Figura16.png" data-bs-toggle="modal" data-bs-target="#Imagem16">
                            <img class="img-fluid wow fadeInLeft" src="imagens/Figura16.png" alt="Alt da imagem fica aqui">
                        </a>
                        <p class="FonteFigura">Diversidade de espécies no Ceará é impressionante! Cobra-verde (Philodryas olfersii), Papa-vento (Enyalius bibronii), Tartaruga-de-pente (Eretmochelys imbricata), Caranguejo-Uça (Ucides cordatus), Aranha - prateada (Argiope argentata) e Marinha-farinha (Ocypode quadrata). <br> Fotos: Victor Rodrigues, Castiele Holanda, Gabriel Chagas, Célio Alves e Pedro Elder.</p>
                    </div>

                    <!-- Imagem 16 - MODAL -->
                    <div class="modal fade text-center" id="Imagem16" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-lg">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <img class="img-fluid" src="imagens/Figura16.png" alt="Alt da imagem fica aqui">
                                </div>
                                <div class="modal-footer text-center">
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- Figura 16 - End -->








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