<?php
$AtividadeAvaliativa = $_GET['AA'];
?>
<?php
// EGPCE - Chama o conectamoodle.php
require_once('conectamoodle.php');
?>

<?php
$page = 'Topico04';
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

                        <h2 class="Titulo"> REGENERANDO O SOLO E A VIDA
                        </h2>
                        <hr>


                        <p>Mas será que é assim que essa história se encerra? Será que os livros de história escritos a partir da história do homem europeu, que aprendemos nas escolas, e que agora se confunde com nossa própria história, nos conduzirá a esse fim desastroso? Nos levará a um ponto final na história humana na Terra? Haverá outras formas de prover o alimento e preservar a saúde do Planeta? É possível produzir alimento para toda humanidade sem derrubar, queimar, destruir florestas?</p>

                        <br>
                        <h2 class="SubTitulo"> AGROECOLOGIA</h2>
                        <hr>
                        <br>


                        <p>A partir dos anos de 1970, no esteio dos movimentos ambientalistas, vários cientistas, agrônomos, agricultores, em vários lugares do mundo, começaram a questionar esse formato danoso de se fazer agricultura.</p>

                        <p>A agricultura vista como paisagem artificial, destinada a produção de uma única espécie, em solo árido de vida, suplementado de produtos sintéticos, encharcado de veneno para impedir a concorrência de outras formas de vida que teimam em nascer, é a antivida. A monocultura é cultura de morte, produtora de desertos.</p>

                        <p>Opondo-se a esse modelo que havia se tornado hegemônico em praticamente todo planeta na chamada “Revolução Verde”, comandada pelos grandes laboratórios e empresas petroquímicas, esses cientistas começaram a propor alternativas para uma agricultura sustentável ecológica e economicamente, <strong>unindo o conhecimento científico e os saberes populares e tradicionais</strong>, provenientes de experiências de agricultores familiares de comunidades indígenas, quilombolas e camponesas.</p>

                        <p>Essas diversas técnicas, como a <strong>Permacultura, a Agrofloresta, Agricultura Orgânica</strong>, podem estar unificadas no escopo da <strong>Agroecologia</strong>.</p>

                        <p>Uma das principais características da Agroecologia é a sua visão sistêmica, na qual <strong>a natureza, compreendida aqui como o conjunto de todos os seres vivos, incluindo os seres humanos</strong>, e todas as suas relações são percebidas de forma integrada como fonte e suporte de vida, e não apenas como fonte inesgotável de recurso para benefício da ganância humana.</p>


                        <!-- Fique Atento -->
                        <div class="FiqueAtentoCaixa">
                            <p class="FiqueAtentoTitulo"> Fique Atento</p>
                            <div class="FiqueAtentoTexto">
                                <p>Basicamente, a proposta agroecológica para a produção agropecuária faz oposição direta ao agronegócio, por condenar a produção centrada na monocultura, na dependência de insumos químicos (agrotóxicos e adubos químicos) e no uso intenso do trator (mecanização).</p>

                                <!-- Titulo Figura -->
                                <div class="text-center">
                                    <a href="imagens/Figura05.png" data-bs-toggle="modal" data-bs-target="#Imagem05">
                                        <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s" width="350" src="imagens/Figura05.png" alt="Alt da imagem fica aqui">
                                        <p class="TituloFigura">Quintal agroecológico no sertão de Irauçuba/CE. <br> Foto: Allan Lustosa/Cáritas.</p>
                                    </a>
                                </div>
                                <!-- Imagem 05 - MODAL -->
                                <div class="modal fade text-center" id="Imagem05" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img class="img-fluid" src="imagens/Figura05.png" alt="Alt da imagem fica aqui">
                                            </div>
                                            <div class="modal-footer text-center">
                                                <p class="TituloFigura"></p>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <!-- Figura 05 - End -->
                            </div>
                        </div>
                        <br><br>






                        <!-- Saiba Mais -->
                        <div class="SaibaMaisCaixa">
                            <p class="SaibaMaisTitulo"> Saiba Mais</p>
                            <div class="SaibaMaisTexto">
                                <p>Agrotóxicos usualmente são chamados de defensivos agrícolas ou remédios para as plantas. Isso é baseado na ideia de que esses produtos defendem 100% da produtividade. A grande pergunta é: quais custos estamos dispostos a pagar pelo uso desses produtos?</p>


                            </div>
                        </div>
                        <br><br>

                        <p>Os ingredientes ativos presentes nos agrotóxicos podem causar esterilidade masculina, formação de cataratas, mutagenicidade, reações alérgicas, distúrbios neurológicos, respiratórios, cardíacos, pulmonares, no sistema imunológico e no sistema endócrino, ou seja, na produção de hormônios, desenvolvimento de câncer, dentre outros agravos à saúde. O uso de agrotóxicos está deixando de ser uma questão relacionada especificamente à produção agrícola e se transformando em um problema de saúde pública e preservação da natureza.</p>
                        <br>

                        <div class="row">
                            <div class="col-sm">
                                <!-- Titulo Figura -->
                                <div class="text-center">
                                    <a href="imagens/Figura06.png" data-bs-toggle="modal" data-bs-target="#Imagem06">
                                        <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" width="400" src="imagens/Figura06.png" alt="Alt da imagem fica aqui">
                                    </a>
                                </div>
                                <!-- Imagem 06 - MODAL -->
                                <div class="modal fade text-center" id="Imagem06" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img class="img-fluid" src="imagens/Figura06.png" alt="Alt da imagem fica aqui">
                                            </div>
                                            <div class="modal-footer text-center">
                                                <p class="TituloFigura"></p>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <!-- Figura 06 - End -->
                            </div>

                            <div class="col-sm">
                                <!-- Titulo Figura -->
                                <div class="text-center">
                                    <a href="imagens/Figura07.png" data-bs-toggle="modal" data-bs-target="#Imagem07">
                                        <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s" width="250" src="imagens/Figura07.png" alt="Alt da imagem fica aqui">
                                    </a>
                                </div>
                                <!-- Imagem 07 - MODAL -->
                                <div class="modal fade text-center" id="Imagem07" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img class="img-fluid" src="imagens/Figura07.png" alt="Alt da imagem fica aqui">
                                            </div>
                                            <div class="modal-footer text-center">
                                                <p class="TituloFigura"></p>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <!-- Figura 07 - End -->
                            </div>
                        </div>
                        <br><br>



                        <!-- Fique Atento -->
                        <div class="FiqueAtentoCaixa">
                            <p class="FiqueAtentoTitulo"> Fique Atento</p>
                            <div class="FiqueAtentoTexto">
                                <p>Este tema pode ser trabalhado pelos AJAs em seus projetos. Já pensou em levar essa discussão sobre agrotóxicos às escolas, às reuniões comunitárias, aos Sindicatos dos Trabalhadores e Trabalhadoras Rurais do seu município? E que tal propor soluções para esse tipo de prática, seja no campo ou na cidade?</p>
                            </div>
                        </div>
                        <br><br>

                        <h2 class="SubTitulo"> PRODUÇÃO AGROECOLÓGICA</h2>
                        <hr>
                        <br>

                        <p>A produção agroecológica atua em equilíbrio com a natureza, produzindo alimentos e produtos sadios e ecologicamente sustentáveis. É um sistema de produção agrícola que prima pelo manejo da propriedade rural como um organismo vivo, complexo e interativo, visando maximizar o uso e reuso de nutrientes (esterco, bagana, folhas e galhos) e reduzir custos da produção. </p>

                        <div class="row">
                            <div class="col-sm">
                                <!-- Titulo Figura -->
                                <div class="text-center">
                                    <a href="imagens/Figura08.png" data-bs-toggle="modal" data-bs-target="#Imagem08">
                                        <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" src="imagens/Figura08.png" alt="Alt da imagem fica aqui">
                                    </a>
                                </div>
                                <!-- Imagem 08 - MODAL -->
                                <div class="modal fade text-center" id="Imagem08" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img class="img-fluid" src="imagens/Figura08.png" alt="Alt da imagem fica aqui">
                                            </div>
                                            <div class="modal-footer text-center">
                                                <p class="TituloFigura"></p>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <!-- Figura 08 - End -->
                            </div>

                            <div class="col-sm">
                                <!-- Titulo Figura -->
                                <div class="text-center">
                                    <a href="imagens/Figura09.png" data-bs-toggle="modal" data-bs-target="#Imagem09">
                                        <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s" src="imagens/Figura09.png" alt="Alt da imagem fica aqui">
                                    </a>
                                </div>
                                <!-- Imagem 09 - MODAL -->
                                <div class="modal fade text-center" id="Imagem09" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img class="img-fluid" src="imagens/Figura09.png" alt="Alt da imagem fica aqui">
                                            </div>
                                            <div class="modal-footer text-center">
                                                <p class="TituloFigura"></p>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <!-- Figura 09 - End -->
                            </div>
                        </div>
                        <br><br>

                        <!-- Saiba Mais -->
                        <div class="SaibaMaisCaixa">
                            <p class="SaibaMaisTitulo"> Saiba Mais</p>
                            <div class="SaibaMaisTexto">
                                <p>Assista ao vídeo <strong>“O Que é Agroecologia?”</strong></p>

                                <div class="video-responsive">
                                    <iframe width="560" height="315" src="https://www.youtube.com/embed/QFrNNj9RM5o" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                </div>
                            </div>
                        </div>
                        <br><br>

                        <h2 class="SubTitulo"> TÉCNICAS AGROECOLÓGICAS</h2>
                        <hr>
                        <br>

                        <!-- Início Accordion -->
                        <div class="accordion accordion-flush" id="AccordionFase01">
                            <center>
                                <h6 class="fs-6 SmallCaps badge bg-warning"><i class="fa fa-lightbulb"></i> Clique nos títulos abaixo para mais informações</h6>
                            </center>
                            <!-- Accordion 01 -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="Item01">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                        <strong>1. Manejo correto do solo</strong>
                                    </button>
                                </h2>
                                <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="Item01" data-bs-parent="#AccordionFase01">
                                    <div class="accordion-body">
                                        <p>O solo, visto quase sempre como um amontoado de minerais liberados pela erosão das rochas, rico ou pobre de certos elementos químicos, é na verdade a base sólida da Vida. Junto com a água e os gases da atmosfera, formam o suporte de toda forma Vida. Num centímetro cúbico de solo vivo, milhões de seres, das mais diferentes formas e funções, pululam. Invisíveis aos olhos, mas indispensáveis para nossa existência.</p>
                                        <p>A saúde do ser humano, dos animais e das plantas é dependente da saúde do solo. Ele precisa estar bem nutrido e protegido para produzir plantas e humanos fortes e resistentes.</p>

                                        <!-- Importante -->
                                        <div class="ImportanteCaixa">
                                            <p class="ImportanteTitulo"> Importante</p>
                                            <div class="ImportanteTexto">
                                                <p>Importante salientar que o que na agricultura hegemônica é chamado de praga (doença), na agroecologia é compreendido como um indicador de um solo adoecido.</p>
                                            </div>
                                        </div>
                                        <br><br>

                                        <p>Uma técnica bastante utilizada, para proteção e fertilidade é a <strong>cobertura de solo</strong>. Manter o solo coberto com matéria orgânica (palhadas, podas, etc.) e com plantas perenes vai protegê-lo contra a ação direta do sol, das chuvas e dos ventos. Além de proteção, a cobertura ajuda a manter a umidade e a fertilidade, além de criar o ecossistema favorável para uma grande variedade de seres vivos importantes para o solo, como insetos, fungos e bactérias.</p>

                                        <div class="row">
                                            <div class="col-sm">
                                                <!-- Titulo Figura -->
                                                <div class="text-center">
                                                    <a href="imagens/Figura10.png" data-bs-toggle="modal" data-bs-target="#Imagem10">
                                                        <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s" src="imagens/Figura10.png" alt="Alt da imagem fica aqui">
                                                    </a>
                                                </div>

                                                <!-- Imagem 10 - MODAL -->
                                                <div class="modal fade text-center" id="Imagem10" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                                        <div class="modal-content">
                                                            <div class="modal-body">
                                                                <img class="img-fluid" src="imagens/Figura10.png" alt="Alt da imagem fica aqui">
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                                <!-- Figura 10 - End -->
                                            </div>
                                            <div class="col-sm">
                                                <!-- Titulo Figura -->
                                                <div class="text-center">
                                                    <a href="imagens/Figura11.png" data-bs-toggle="modal" data-bs-target="#Imagem11">
                                                        <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" src="imagens/Figura11.png" alt="Alt da imagem fica aqui">
                                                    </a>
                                                </div>

                                                <!-- Imagem 11 - MODAL -->
                                                <div class="modal fade text-center" id="Imagem11" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                                        <div class="modal-content">
                                                            <div class="modal-body">
                                                                <img class="img-fluid" src="imagens/Figura11.png" alt="Alt da imagem fica aqui">
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                                <!-- Figura 11 - End -->
                                            </div>
                                        </div>
                                        <p class="FonteFigura text-center">Técnica de cobertura morta de solo.</p>




                                        <div class="bd-callout bd-callout-primary">

                                            <p>Essa técnica reutiliza as palhas, galhos e folhas secas da propriedade, reciclando a matéria orgânica para proteger e produzir solo. Então, na agroecologia não existe a queima de material orgânico. <strong>Nada se perde! Tudo se reaproveita, fechando os ciclos naturais.</strong> Com um solo coberto, diminui a necessidade de irrigação, de adubação e de controle de pragas.</p>

                                            <!-- Fique Atento -->
                                            <div class="FiqueAtentoCaixa">
                                                <p class="FiqueAtentoTitulo"> Fique Atento</p>
                                                <div class="FiqueAtentoTexto">
                                                    <p>Não limpe o terreno ou queime folhas, galhos, podas e palha seca! Além de poluir o ar com a fumaça, prejudica a fertilidade do solo. Cubra o solo! Ele é a base de uma agricultura sustentável.</p>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Fim Accordion 01 -->

                            <!-- Accordion 02 -->
                            <div class="accordion-item Texto">
                                <h2 class="accordion-header" id="Item02">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                        <strong>2. Diversidade da produção</strong>
                                    </button>
                                </h2>
                                <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="Item02" data-bs-parent="#AccordionFase01">
                                    <div class="accordion-body">

                                        <p>Já aprendemos a importância da biodiversidade para a manutenção do equilíbrio ecológico. Na agroecologia é a mesma lógica. Quando juntamos intencionalmente mais de uma planta, estamos fazendo um <strong>consórcio de culturas</strong>. Uma planta vai ajudar a outra, compartilhando nutrientes, dando suporte para seu crescimento.</p>

                                        <p>Quanto maior a diversidade na produção, maior a diversidade de animais que serão atraídos, como pássaros, sapos, lagartos e insetos. Essa galera toda vai fazer o <strong>controle biológico</strong> das pragas. <strong>A diversidade é fundamental para a agroecologia</strong>.</p>

                                        <p>Um exemplo disso é o consórcio entre milho, feijão e abóbora (MILPA*), uma técnica milenar compreendida hoje pela ciência. O milho fornece a haste para o feijão subir. O feijão capta nitrogênio e fornece para o solo nutrir o milho. A abóbora protege o solo contra plantas indesejadas, protege a umidade e as raízes do milho. Todos ganham nessa relação.</p>

                                        <!-- Titulo Figura -->
                                        <div class="text-center">
                                            <a href="imagens/Figura12.png" data-bs-toggle="modal" data-bs-target="#Imagem12">
                                                <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s" width="350" src="imagens/Figura12.png" alt="Alt da imagem fica aqui">
                                                <p class="TituloFigura">Consórcio entre milho, feijão e abóbora, todos ganham nessa relação.</p>
                                            </a>
                                        </div>
                                        <!-- Imagem 12 - MODAL -->
                                        <div class="modal fade text-center" id="Imagem12" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-body">
                                                        <img class="img-fluid" src="imagens/Figura12.png" alt="Alt da imagem fica aqui">
                                                    </div>
                                                    <div class="modal-footer text-center">
                                                        <p class="TituloFigura"></p>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <!-- Figura 12 - End -->

                                        <p>Além de promover uma agricultura ecológica e uma alimentação mais balanceada, a diversidade da produção também ajuda financeiramente o produtor durante o ano todo, visto que ele poderá produzir alimentos nas diversas épocas do ano.</p>
                                        <br>

                                        <!-- Curiosidade -->
                                        <div class="CuriosidadeCaixa">
                                            <p class="CuriosidadeTitulo"> Curiosidade</p>
                                            <div class="CuriosidadeTexto">
                                                <p>O nome Milpa deriva do idioma <em>Náhuatl</em>, no qual milli significa parcela semeada, e pan, em cima, em, ou seja, literalmente, “o que se semeia em cima da parcela”. A Milpa é tanto o espaço físico, a terra, como as espécies vegetais, a diversidade produtiva que cresce sobre ela. Também é reflexo dos conhecimentos, da tecnologia e das práticas agrícolas necessárias para obter da terra e do trabalho humano os produtos para satisfazer as necessidades básicas da família camponesa. Neste sentido, significa um sistema de conhecimentos da natureza e da agricultura, sinônimo de sobrevivência biológica e de reprodução social. A diversidade genética das espécies cultivadas, combinada com a diversidade de plantas espontâneas, faz da milpa um dos agroecosistemas mais ricos e complexos da agricultura camponesa latino-americana.</p>

                                                <p>FONTE: <a href="https://ainfo.cnptia.embrapa.br/digital/bitstream/item/37364/1/panfleto-milpa.pdf" target="_Blank">https://ainfo.cnptia.embrapa.br/</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Fim Accordion 02 -->
                            <!-- Accordion 03 -->
                            <div class="accordion-item Texto">
                                <h2 class="accordion-header" id="Item03">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                        <strong>3. Adubação verde</strong>
                                    </button>
                                </h2>
                                <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="Item03" data-bs-parent="#AccordionFase01">
                                    <div class="accordion-body">

                                        <p>Adubar significa disponibilizar nutrientes para melhorar a fertilidade do solo e o potencial de crescimento das plantas. Uma das formas de adubação que não agride o solo e o meio ambiente é a adubação verde.</p>

                                        <p><strong>Adubos verdes são plantas vivas utilizadas para adubação do solo.</strong> Existem alguns tipos de plantas que são capazes de tirar nutrientes de lugares que a maioria das plantas não consegue. Elas são chamadas de leguminosas, e incluem plantas como o feijão, mucuna, crotalária, soja. Essas espécies adubadeiras devem ser plantadas junto da cultura principal ou no momento de descanso da terra. O princípio da adubação verde serve tanto nas áreas de reflorestamento, quanto nas áreas que você utiliza para o cultivo de culturas.</p>

                                        <div class="row">
                                            <div class="col-sm">
                                                <!-- Titulo Figura -->
                                                <div class="text-center">
                                                    <a href="imagens/Figura13.png" data-bs-toggle="modal" data-bs-target="#Imagem13">
                                                        <img class="img-fluid wow fadeInUp" data-wow-delay="0.5s" width="350" src="imagens/Figura13.png" alt="Alt da imagem fica aqui">
                                                    </a>
                                                </div>
                                                <!-- Imagem 13 - MODAL -->
                                                <div class="modal fade text-center" id="Imagem13" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                                        <div class="modal-content">
                                                            <div class="modal-body">
                                                                <img class="img-fluid" src="imagens/Figura13.png" alt="Alt da imagem fica aqui">
                                                            </div>
                                                            <div class="modal-footer text-center">
                                                                <p class="TituloFigura"></p>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                                <!-- Figura 13 - End -->
                                            </div>
                                            <div class="col-sm">
                                                <!-- Titulo Figura -->
                                                <div class="text-center">
                                                    <a href="imagens/Figura14.png" data-bs-toggle="modal" data-bs-target="#Imagem14">
                                                        <img class="img-fluid wow fadeInDown" data-wow-delay="0.5s" width="350" src="imagens/Figura14.png" alt="Alt da imagem fica aqui">
                                                    </a>
                                                </div>
                                                <!-- Imagem 14 - MODAL -->
                                                <div class="modal fade text-center" id="Imagem14" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                                        <div class="modal-content">
                                                            <div class="modal-body">
                                                                <img class="img-fluid" src="imagens/Figura14.png" alt="Alt da imagem fica aqui">
                                                            </div>
                                                            <div class="modal-footer text-center">
                                                                <p class="TituloFigura"></p>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                                <!-- Figura 14 - End -->
                                            </div>
                                        </div>
                                        <p class="FonteFigura text-center">A crotalária e a mucuna-preta são usadas para captar nitrogênio para o solo, reduzindo a necessidade de aplicação de fertilizantes nitrogenados nas culturas. </p>

                                    </div>
                                </div>
                            </div>
                            <!-- Fim Accordion 03 -->
                            <!-- Accordion 04 -->
                            <div class="accordion-item Texto">
                                <h2 class="accordion-header" id="Item04">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                                        <strong>4. Rotação de cultura </strong>
                                    </button>
                                </h2>
                                <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="Item04" data-bs-parent="#AccordionFase01">
                                    <div class="accordion-body">

                                        <p>O que você acha que acontece com o solo quando se planta sempre a mesma cultura em uma mesma área, todos os anos? Os nutrientes que aquela planta demanda do solo vão se esgotar ao longo do tempo, e o solo vai ficar pobre! Para evitar esse esgotamento, além de outras técnicas que já vimos, a agroecologia utiliza a rotação de culturas.</p>

                                        <p><strong>É uma técnica agrícola que alterna, de maneira planejada, diferentes culturas em uma mesma área em um dado período.</strong> Essa técnica de plantio tem como objetivos a conservação dos nutrientes do solo, a diminuição de pragas e a produção durante todo o ano.</p>

                                        <!-- Titulo Figura -->
                                        <div class="text-center">
                                            <a href="imagens/Figura15.png" data-bs-toggle="modal" data-bs-target="#Imagem15">
                                                <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s" width="350" src="imagens/Figura15.png" alt="Alt da imagem fica aqui">

                                            </a>
                                            <p class="FonteFigura">
                                            <p>Esquema ilustrativo de um sistema de rotação de culturas.</p>
                                        </div>
                                        <!-- Imagem 15 - MODAL -->
                                        <div class="modal fade text-center" id="Imagem15" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-body">
                                                        <img class="img-fluid" src="imagens/Figura15.png" alt="Alt da imagem fica aqui">
                                                    </div>
                                                    <div class="modal-footer text-center">
                                                        <p class="TituloFigura"></p>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <!-- Figura 15 - End -->


                                    </div>
                                </div>
                            </div>
                            <!-- Fim Accordion 04 -->
                            <!-- Accordion 05 -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="Item05">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
                                        <strong>5. Produção de adubo e sementes </strong>
                                    </button>
                                </h2>
                                <div id="flush-collapseFive" class="accordion-collapse collapse" aria-labelledby="Item05" data-bs-parent="#AccordionFase01">
                                    <div class="accordion-body">

                                        <p>Adubo e sementes representam um custo alto para um pequeno agricultor. Para sair desse ciclo vicioso de compra de insumos, pode-se produzir adubo em casa e coletar sementes nas redondezas.</p>

                                        <p>O adubo pode ser feito através da mistura de resto de comida com folhas e palhas secas. Resolve dois problemas de uma só vez: trata o “lixo orgânico” e produz adubo.</p>

                                        <p>Sementes podem ser coletadas em determinadas épocas do ano na região. Pode ser até um mutirão de vizinhos. Todos vão sair ganhando.</p>

                                        <div class="row">
                                            <div class="col-sm">
                                                <!-- Titulo Figura -->
                                                <div class="text-center">
                                                    <a href="imagens/Figura16.png" data-bs-toggle="modal" data-bs-target="#Imagem16">
                                                        <img class="img-fluid wow fadeInDown" data-wow-delay="0.5s" width="350" src="imagens/Figura16.png" alt="Alt da imagem fica aqui">
                                                    </a>
                                                </div>
                                                <!-- Imagem 16 - MODAL -->
                                                <div class="modal fade text-center" id="Imagem16" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                                        <div class="modal-content">
                                                            <div class="modal-body">
                                                                <img class="img-fluid" src="imagens/Figura16.png" alt="Alt da imagem fica aqui">
                                                            </div>
                                                            <div class="modal-footer text-center">
                                                                <p class="TituloFigura"></p>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                                <!-- Figura 16 - End -->
                                            </div>
                                            <div class="col-sm">
                                                <!-- Titulo Figura -->
                                                <div class="text-center">
                                                    <a href="imagens/Figura17.png" data-bs-toggle="modal" data-bs-target="#Imagem17">
                                                        <img class="img-fluid wow fadeInUp" data-wow-delay="0.5s" width="350" src="imagens/Figura17.png" alt="Alt da imagem fica aqui">
                                                    </a>
                                                </div>
                                                <!-- Imagem 17 - MODAL -->
                                                <div class="modal fade text-center" id="Imagem17" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                                        <div class="modal-content">
                                                            <div class="modal-body">
                                                                <img class="img-fluid" src="imagens/Figura17.png" alt="Alt da imagem fica aqui">
                                                            </div>
                                                            <div class="modal-footer text-center">
                                                                <p class="TituloFigura"></p>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                                <!-- Figura 17 - End -->
                                            </div>
                                        </div>
                                        <p class="FonteFigura text-center">Foto: @agente.jovem (Juazeiro do Norte)</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Accordion 05 -->
                            <!-- Accordion 06 -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="Item06">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSix" aria-expanded="false" aria-controls="flush-collapseSix">
                                        <strong>6. Preservar e aproveitar a água </strong>
                                    </button>
                                </h2>
                                <div id="flush-collapseSix" class="accordion-collapse collapse" aria-labelledby="Item06" data-bs-parent="#AccordionFase01">
                                    <div class="accordion-body">

                                        <p>Cuidar da água disponível com a proteção de nascentes, rios ou açudes, através do reflorestamento das <a href="#" data-toggle="tooltip" data-placement="top" title="Vegetação que margeia os recursos hídricos.">matas ciliares<i class="fa fa-search-plus"></i></a>, é essencial para poder produzir por muito tempo.</p>

                                        <p>Algumas das técnicas apresentadas até aqui ajudam a reter a umidade, mas é preciso também a utilização consciente da água na propriedade.</p>

                                        <p>Cisternas garantem água nos períodos de seca, e a água usada pode ser reaproveitada nas hortas e quintais.</p>

                                        <p>O método de irrigação deve ser bem planejado, dimensionado com objetivo de fornecer a quantidade de água necessária para cada tipo de cultura. Um bom exemplo é a técnica de gotejamento.</p>

                                        <div class="row">
                                            <div class="col-sm">
                                                <!-- Titulo Figura -->
                                                <div class="text-center">
                                                    <a href="imagens/Figura18.png" data-bs-toggle="modal" data-bs-target="#Imagem18">
                                                        <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s" width="350" src="imagens/Figura18.png" alt="Alt da imagem fica aqui">
                                                    </a>
                                                </div>
                                                <!-- Imagem 18 - MODAL -->
                                                <div class="modal fade text-center" id="Imagem18" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                                        <div class="modal-content">
                                                            <div class="modal-body">
                                                                <img class="img-fluid" src="imagens/Figura18.png" alt="Alt da imagem fica aqui">
                                                            </div>
                                                            <div class="modal-footer text-center">
                                                                <p class="TituloFigura"></p>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                                <!-- Figura 18 - End -->
                                            </div>
                                            <div class="col-sm">
                                                <!-- Titulo Figura -->
                                                <div class="text-center">
                                                    <a href="imagens/Figura19.png" data-bs-toggle="modal" data-bs-target="#Imagem19">
                                                        <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s" width="350" src="imagens/Figura19.png" alt="Alt da imagem fica aqui">
                                                    </a>
                                                </div>
                                                <!-- Imagem 19 - MODAL -->
                                                <div class="modal fade text-center" id="Imagem19" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                                        <div class="modal-content">
                                                            <div class="modal-body">
                                                                <img class="img-fluid" src="imagens/Figura19.png" alt="Alt da imagem fica aqui">
                                                            </div>
                                                            <div class="modal-footer text-center">
                                                                <p class="TituloFigura"></p>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                                <!-- Figura 19 - End -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Accordion 06 -->
                            <!-- Accordion 07 -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="Item07">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSeven" aria-expanded="false" aria-controls="flush-collapseSeven">
                                        <strong> 7. Plantar e preservar as matas nativas </strong>
                                    </button>
                                </h2>
                                <div id="flush-collapseSeven" class="accordion-collapse collapse" aria-labelledby="Item07" data-bs-parent="#AccordionFase01">
                                    <div class="accordion-body">

                                        <p>É fundamental para o equilíbrio na propriedade. Elas ajudam no controle de pragas, mantém a umidade, regulam o clima, dão frutos e madeira, fertilizam o solo e abrigam a fauna. </p>
                                        <div class="row">
                                            <div class="col-sm">
                                                <!-- Titulo Figura -->
                                                <div class="text-center">
                                                    <a href="imagens/Figura20.png" data-bs-toggle="modal" data-bs-target="#Imagem20">
                                                        <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s" width="350" src="imagens/Figura20.png" alt="Alt da imagem fica aqui">
                                                    </a>
                                                </div>
                                                <!-- Imagem 20 - MODAL -->
                                                <div class="modal fade text-center" id="Imagem20" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                                        <div class="modal-content">
                                                            <div class="modal-body">
                                                                <img class="img-fluid" src="imagens/Figura20.png" alt="Alt da imagem fica aqui">
                                                            </div>
                                                            <div class="modal-footer text-center">
                                                                <p class="TituloFigura"></p>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                                <!-- Figura 20 - End -->
                                            </div>
                                            <div class="col-sm">
                                                <!-- Titulo Figura -->
                                                <div class="text-center">
                                                    <a href="imagens/Figura21.png" data-bs-toggle="modal" data-bs-target="#Imagem21">
                                                        <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" width="350" src="imagens/Figura21.png" alt="Alt da imagem fica aqui">
                                                    </a>
                                                </div>
                                                <!-- Imagem 21 - MODAL -->
                                                <div class="modal fade text-center" id="Imagem21" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                                        <div class="modal-content">
                                                            <div class="modal-body">
                                                                <img class="img-fluid" src="imagens/Figura21.png" alt="Alt da imagem fica aqui">
                                                            </div>
                                                            <div class="modal-footer text-center">
                                                                <p class="TituloFigura"></p>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                                <!-- Figura 21 - End -->
                                            </div>
                                        </div>
                                        <p class="FonteFigura text-center">A mata nativa é fundamental para preservar a biodiversidade e garantir a produção ecológica.</p>

                                        <!-- Importante -->
                                        <div class="ImportanteCaixa">
                                            <p class="ImportanteTitulo"> Importante</p>
                                            <div class="ImportanteTexto">
                                                <p>A mata nativa pode ser usada como cerca viva, funcionando como barreira de proteção contra o vento e de possíveis invasões de pragas. Podem ser utilizadas espécies como o Sabiá, que tem grande utilidade na propriedade com uso de suas estacas ou a Palma que, além de guardar água, mantendo o solo úmido, serve de alimentação para o gado e funciona como também como aceiro, resguardando e prevenindo a propagação de incêndios.</p>
                                            </div>
                                        </div>
                                        <br><br>


                                        <!-- Titulo Figura -->
                                        <div class="text-center">
                                            <a href="imagens/Figura22.png" data-bs-toggle="modal" data-bs-target="#Imagem22">
                                                <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s" width="350" src="imagens/Figura22.png" alt="Alt da imagem fica aqui">
                                                <p class="TituloFigura">Cerca-viva com mata nativa. Abriga a biodiversidade local e protege a plantação.</p>
                                            </a>
                                        </div>
                                        <!-- Imagem 22 - MODAL -->
                                        <div class="modal fade text-center" id="Imagem22" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-body">
                                                        <img class="img-fluid" src="imagens/Figura22.png" alt="Alt da imagem fica aqui">
                                                    </div>
                                                    <div class="modal-footer text-center">
                                                        <p class="TituloFigura"></p>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <!-- Figura 22 - End -->





                                    </div>
                                </div>
                            </div>
                        </div><br><br>
                        <!-- Accordion 07 -->
                        <!-- FIM Accordion -->

                        <!-- Saiba Mais -->
                        <div class="SaibaMaisCaixa">
                            <p class="SaibaMaisTitulo"> Saiba Mais</p>
                            <div class="SaibaMaisTexto">
                                <p><a href="https://www.manejebem.com.br/uploads/filemanager/source/BANNER/NOVIDADE/MANUAL AGRI ORGANICA/agroecologia-incaper.pdf" target="_blank">CLIQUE AQUI e conheça outras técnicas agroecológicas nesta cartilha</a>.</p>
                            </div>
                        </div>
                        <br><br>

                        <!-- Fique Atento -->
                        <div class="FiqueAtentoCaixa">
                            <p class="FiqueAtentoTitulo"> Fique Atento</p>
                            <div class="FiqueAtentoTexto">
                                <p>70% da comida que chega em nossas mesas vêm da agricultura familiar. É urgente que ocorra a transição agroecológica na produção! E para isso, o consumidor também precisa ser orientado! Isso é consumo consciente! Que tal um projeto sobre isso?</p>


                            </div>
                        </div>
                        <br><br>

                        <p>Essas são algumas das técnicas que compõem o rico mundo da Agroecologia. Mas a principal mudança para uma agricultura sustentável está na cabeça do produtor. Ele precisa entender a interligação de todos os elementos no sistema de produção e entrar de vez para o time da preservação.</p>
                        <p><strong>Aqui entra o trabalho dos AJAs!</strong> Projetos de educação ambiental para a agroecologia podem ser executados através palestras, oficinas, produções teatrais, jogos infantis, uso das redes sociais, etc. Podem ser aplicados para as hortas escolares, hortas comunitárias, feiras agroecológicas, canteiros nas cidades ou até dentro de casa. Todo lugar dá pra plantar com saúde e respeito. <strong>Os AJAs são as sementes da agroecologia!</strong></p>

                        <div class="row">
                            <div class="col-sm">
                                <!-- Titulo Figura -->
                                <div class="text-center">
                                    <a href="imagens/Figura23.png" data-bs-toggle="modal" data-bs-target="#Imagem23">
                                        <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s" width="350" src="imagens/Figura23.png" alt="Alt da imagem fica aqui">

                                    </a>
                                </div>
                                <!-- Imagem 23 - MODAL -->
                                <div class="modal fade text-center" id="Imagem23" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img class="img-fluid" src="imagens/Figura23.png" alt="Alt da imagem fica aqui">
                                            </div>
                                            <div class="modal-footer text-center">
                                                <p class="TituloFigura"></p>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <!-- Figura 23 - End -->
                            </div>

                            <div class="col-sm">
                                <!-- Titulo Figura -->
                                <div class="text-center">
                                    <a href="imagens/Figura24.png" data-bs-toggle="modal" data-bs-target="#Imagem24">
                                        <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s" width="350" src="imagens/Figura24.png" alt="Alt da imagem fica aqui">

                                    </a>
                                </div>
                                <!-- Imagem 24 - MODAL -->
                                <div class="modal fade text-center" id="Imagem24" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img class="img-fluid" src="imagens/Figura24.png" alt="Alt da imagem fica aqui">
                                            </div>
                                            <div class="modal-footer text-center">
                                                <p class="TituloFigura"></p>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <!-- Figura 24 - End -->
                            </div>
                        </div>


                        <p class="TituloFigura text-center">Fotos: @horta_escolar (Tamboril) e @horta.boa.fe (Boa Viagem)</p>
                        <br><br>

                        <!-- Sub Título -->
                        <p class="SubTitulo">AGROFLORESTA</p>
                        <hr>

                        <div class="bd-callout bd-callout-primary">
                            <p class="SubSubTitulo"> Um pouco de história</p>
                            <hr>
                            <p>Façamos um breve retorno ao início de nossa colonização e observemos como Pero Vaz de Caminha, escrivão da frota de Pedro Álvares Cabral, em sua famosa carta ao Rei de Portugal, descreve a exuberância das terras que ele dizia ter descoberto:</p>
                            <div class="bd-callout bd-callout-success">
                                <p>“Tome Vossa Alteza, porém, minha ignorância por boa vontade, e creia bem por certo que, para aformosear nem afear, não porei aqui mais do que aquilo que vi e me pareceu. (…)”</p>
                            </div>
                            <br><br>

                            <p>E falando dos povos da terra dizia:</p>

                            <div class="bd-callout bd-callout-success">
                                <p>“Eles não lavram, nem criam. Não há aqui boi, nem vaca, nem cabra, nem ovelha, nem galinha, nem qualquer outra alimária, que costumada seja ao viver dos homens. Nem comem senão desse inhame, que aqui há muito, e dessa semente e frutos, que a terra e as árvores de si lançam. E com isto andam tais e tão rijos e tão nédios, que o não somos nós tanto, com quanto trigo e legumes comemos.”</p>
                            </div>
                            <br><br>

                            <p>O conquistador europeu, ignorante de outras formas de ser, estar e fazer o mundo, não conseguiu enxergar uma agricultura diferente da sua, que destruía florestas para plantar.</p>
                            <p>Conhecendo apenas sua agricultura baseada em alguns grãos e legumes, não imaginava haver povos que conviviam em harmonia com a natureza. Que mesmo dominando o plantar e o colher; selecionando e domesticando espécies, não reduziam a floresta à uma savana de gramíneas e arbustos, nem conduziam o solo à desertificação. E que, para surpresa do vaidoso português, tinham corpos rijos e luminosos.</p>
                            <p>A agricultura praticada pelos homo sapiens sapiens desse lado do oceano Atlântico, desconhecida do colonizador, permaneceu invisível (ou foi invisibilizada, quem sabe) por muitos séculos. A visão fragmentada da vida do branco europeu, que separa cultura e natureza, que esquece que somos natureza, não compreendeu a ciência, o conhecimento e a sabedoria dos povos que a milhares de anos conviviam com a floresta, manejando-a para dela retirar seu alimento, comida para o corpo, para a alma e espírito. Que ao preservar a floresta, preservava a si mesmo, seu povo, sua cultura, sua vida.</p>
                            <p>Essa forma de fazer agricultura é o que nos dias de hoje chamamos de <strong>Agrofloresta</strong>.</p>

                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura25.png" data-bs-toggle="modal" data-bs-target="#Imagem25">
                                    <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s" width="350" src="imagens/Figura25.png" alt="Alt da imagem fica aqui">
                                </a>
                                <p class="FonteFigura">Agroecologia + Floresta = Agrofloresta</p>
                            </div>
                            <!-- Imagem 25 - MODAL -->
                            <div class="modal fade text-center" id="Imagem25" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura25.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"></p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!-- Figura 25 - End -->
                        </div>
                        <br><br>

                        <!-- Curiosidade -->
                        <div class="CuriosidadeCaixa">
                            <p class="CuriosidadeTitulo"> Curiosidade</p>
                            <div class="CuriosidadeTexto">
                                <p><strong>Mas, o que é uma floresta?</strong></p>

                                <p>Uma floresta é mais do que um conjunto de árvores juntas, ela é uma rede dinâmica e complexa de plantas, animais, solo vivo, água, ar, luz, vento, interagindo em fluxos e ciclos de trocas entre si.</p>

                                <p>Como um corpo que evolui de uma única célula que se divide multiplicando-se, formando tecidos e órgãos especializados, a floresta é um organismo vivo. Um corpo que evolui, se desenvolve, se complexifica, e também envelhece, morre e se renova. Ela se transforma no tempo e no espaço.</p>

                                <p>A floresta é a vida funcionando em redes dentro de redes, em processos inclusivos, sempre rumo a diversidade e a abundância. <strong>A floresta é um ser vivo</strong>.</p>

                                <!-- Titulo Figura -->
                                <div class="text-center">
                                    <a href="imagens/Figura26.png" data-bs-toggle="modal" data-bs-target="#Imagem26">
                                        <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s" width="350" src="imagens/Figura26.png" alt="Alt da imagem fica aqui">
                                    </a>
                                </div>
                                <!-- Imagem 26 - MODAL -->
                                <div class="modal fade text-center" id="Imagem26" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img class="img-fluid" src="imagens/Figura26.png" alt="Alt da imagem fica aqui">
                                            </div>
                                            <div class="modal-footer text-center">
                                                <p class="TituloFigura"></p>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <!-- Figura 26 - End -->

                            </div>
                        </div>
                        <br><br>


                        <p class="SubSubTitulo" style="color: #ffa73e;">Trabalhando com a floresta para produzir alimento</p>
                        <hr>

                        <p>Na Agrofloresta, o homem, reconhecendo-se parte integrada da natureza, busca entender as leis que criam e mantém uma floresta, e junto com ela torna-se co-criador.</p>

                        <p>Em primeiro lugar se percebe que na floresta não há espaços vazios. Nem em sua horizontalidade, nem em sua verticalidade. O adensamento, a abundância, a diversidade, a estratificação são ensinamentos fundamentais que a floresta nos oferece.</p>

                        <p>Aparentemente caótica, a floresta, em sua multiplicidade e abundância de espécies, é harmoniosa, ordenada num equilíbrio dinâmico em que cada elemento que a constitui, contribui para o seu crescimento e manutenção. A isso chamamos de sintropia.</p>

                        <p>Estratificada, ela tem em cada andar de seu espaço aéreo, plantas que se distribuem segundo sua necessidade de luz solar. Plantas que necessitam mais de sol, erguem suas copas ocupando a cobertura da floresta, as que não exigem tanto a luz solar se abrigam sob elas próximas ao solo.</p>

                        <p>Juntas interagem numa rede de raízes sob o solo, trocando favores e informações, cooperando para o crescimento coletivo. Solidárias, buscam nas profundezas, segundo o tamanho de suas raízes, água e nutrientes, que compartilham com a coletividade.</p>

                        <p>As plantas que se situam à margem da floresta, controlam o calor e o vento para que aquelas que vivem ao centro possam viver melhor. Cada planta vai assim se especializando como um órgão específico do corpo florestal.</p>

                        <p>Quando uma velha árvore, havendo cumprido seu ciclo de existência, tomba devolvendo seu corpo ao solo e abre uma clareira na floresta, o solo exposto se abre ao sol que a fertiliza, fazendo despertar as sementes adormecidas das plantas pioneiras. Reinicia assim o ciclo da vida.</p>

                        <p>Primeiro, vêm as ervas, as gramíneas, os arbustos. Depois as arvoretas de crescimento ligeiro. Depois aquelas árvores mais exigentes, que buscam solos mais profundos e precisaram da sombra das que lhes antecederam. Por último, vem as emergentes que tornarão a ocupar a cobertura da floresta. Sol, solo, sementes, a floresta se refaz em ciclos longos e permanentes.</p>

                        <p>O agroflorestor, como os pássaros e os mamíferos que se alimentam de vegetais, colhem, comem, plantam floresta, fazendo girar a vida. As abelhas, polinizam colhendo o mel das flores, que alimentam com sua beleza nossa fome estética e prenunciam o nascer do fruto. Os fungos e as bactérias nos ensinam que a vida é eterna mudança e transformação.</p>
                        <br>

                        <!-- Titulo Figura -->
                        <div class="text-center">
                            <a href="imagens/Figura27.jpg" data-bs-toggle="modal" data-bs-target="#Imagem27">
                                <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s" width="350" src="imagens/Figura27.jpg" alt="Alt da imagem fica aqui">
                            </a>
                        </div>
                        <!-- Imagem 27 - MODAL -->
                        <div class="modal fade text-center" id="Imagem27" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <img class="img-fluid" src="imagens/Figura27.jpg" alt="Alt da imagem fica aqui">
                                    </div>
                                    <div class="modal-footer text-center">
                                        <p class="TituloFigura"></p>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- Figura 27 - End -->
                        <br>
                        <br>


                        <p>Essa é a ciência que o conquistador na sua ganância predadora não viu, não quis ver. A sabedoria dos povos da floresta, de que todos vivemos no mundo, que somos parte dele, compartilhando com os outros seres, plantas e bichos, o processo vital.</p>

                        <br>
                        <p class="p-3 mb-2 bg-warning text-dark text-center"><strong>Agroflorestar é construir o mundo e ser construído por ele.</strong></p>
                        <br>

                        <p>Com a implantação de agroflorestas, há introdução de muitas espécies vegetais ao sistema de cultivo de forma gradual. São os consórcios, os policultivos, quebra-ventos, corredores de vegetação, áreas de plantio separadas por faixas de agroflorestas, módulos de agroflorestas com 50 ou mais espécies vegetais. Esse método irá fazer com que a produção melhore e aumente com o decorrer do tempo.</p>

                        <div class="row">
                            <div class="col-sm">
                                <!-- Titulo Figura -->
                                <div class="text-center">
                                    <a href="imagens/Figura28.png" data-bs-toggle="modal" data-bs-target="#Imagem28">
                                        <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s" width="350" src="imagens/Figura28.png" alt="Alt da imagem fica aqui">

                                    </a>
                                </div>
                                <!-- Imagem 28 - MODAL -->
                                <div class="modal fade text-center" id="Imagem28" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img class="img-fluid" src="imagens/Figura28.png" alt="Alt da imagem fica aqui">
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <!-- Figura 28 - End -->
                            </div>

                            <div class="col-sm">
                                <!-- Titulo Figura -->
                                <div class="text-center">
                                    <a href="imagens/Figura29.png" data-bs-toggle="modal" data-bs-target="#Imagem29">
                                        <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s" width="350" src="imagens/Figura29.png" alt="Alt da imagem fica aqui">

                                    </a>
                                </div>
                                <!-- Imagem 29 - MODAL -->
                                <div class="modal fade text-center" id="Imagem29" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img class="img-fluid" src="imagens/Figura29.png" alt="Alt da imagem fica aqui">
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <!-- Figura 29 - End -->
                            </div>
                        </div>

                        <p class="FonteFigura text-center">Na monocultura de tangerina, foram inseridas nas entrelinhas: abacaxi, banana, fava e mandioca.</p>

                        <div class="row">
                            <div class="col-sm">
                                <!-- Titulo Figura -->
                                <div class="text-center">
                                    <a href="imagens/Figura30.png" data-bs-toggle="modal" data-bs-target="#Imagem30">
                                        <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s" width="350" src="imagens/Figura30.png" alt="Alt da imagem fica aqui">

                                    </a>
                                </div>
                                <!-- Imagem 30 - MODAL -->
                                <div class="modal fade text-center" id="Imagem30" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img class="img-fluid" src="imagens/Figura30.png" alt="Alt da imagem fica aqui">
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <!-- Figura 30 - End -->
                            </div>

                            <div class="col-sm">
                                <!-- Titulo Figura -->
                                <div class="text-center">
                                    <a href="imagens/Figura31.png" data-bs-toggle="modal" data-bs-target="#Imagem31">
                                        <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s" width="350" src="imagens/Figura31.png" alt="Alt da imagem fica aqui">

                                    </a>
                                </div>
                                <!-- Imagem 31 - MODAL -->
                                <div class="modal fade text-center" id="Imagem31" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img class="img-fluid" src="imagens/Figura31.png" alt="Alt da imagem fica aqui">
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <!-- Figura 31 - End -->
                            </div>
                        </div>

                        <p class="FonteFigura text-center">Após alguns meses, foi feito o consórcio de espécies leguminosas arbustivas e arbóreas adubadeiras. <br> Em dois anos, surgiu uma floresta cheia de alimentos, bichos, madeiras, matéria orgânica e água.</p>


                        <p>Além das técnicas agroecológicas que aprendemos, uma técnica fundamental da agrofloresta é a poda. Isso porque, com o tempo, as árvores farão sombra sobre outras plantas menores, o que pode prejudicar a fotossíntese. Por meio de podas planejadas, é possível abrir espaços para entrada de luz, estimular o crescimento da planta no sentido desejado e ainda produzir matéria orgânica para o solo.</p>

                        <div class="bd-callout bd-callout-primary">
                            <p>Assista o vídeo para ver as diversas técnicas de implementação de uma Agrofloresta:</p>

                            <div class="video-responsive text-center">
                                <iframe width="560" height="315" src="https://www.youtube.com/embed/gSPNRu4ZPvE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                            </div>
                        </div>
                        <br><br>


                        <!-- Sub Título -->
                        <p class="SubTitulo">PERMACULTURA</p>
                        <hr>


                        <p>A Permacultura é um sistema em que o habitante, a moradia e o meio ambiente estão integrados em um mesmo organismo vivo. Ela é um método e uma filosofia de vida.</p>

                        <p>Os princípios da permacultura afirmam que as necessidades humanas estão ligadas a soluções sustentáveis, sempre levando em consideração o equilíbrio entre os ecossistemas naturais e o respeito ao próximo.</p>

                        <p>Os criadores desse conceito são os australianos Bill Mollison e David Holmgren. Na década de 70, percebendo que os recursos naturais da região em que moravam estavam acabando, eles resolveram criar um modelo de trabalho e desenvolvimento em que a <a href="https://www.ecycle.com.br/agricultura/" target="_blank">agricultura</a>, ligada às atividades humanas e sempre integrada ao <a href="https://www.ecycle.com.br/o-que-e-meio-ambiente/" target="_blank">meio ambiente</a>, produzisse recursos suficientes e de forma não predatória. Por isso, no início, o conceito era chamado de agricultura permanente. Com o passar dos anos, o termo foi alterado para cultura permanente, cuja abreviação é permacultura.</p>

                        <div class="bd-callout bd-callout-warning">
                            <p>A partir disso, entram em cena certos pilares básicos, como:</p>

                            <ul class="none">
                                <li class="wow fadeInDown" data-wow-delay="0.3s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> o cuidado com a terra, para que ela seja saudável e os sistemas de vida se multipliquem;</li>
                                <li class="wow fadeInDown" data-wow-delay="0.6s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> o cuidado com as pessoas, com o intuito de que todas possam ter acesso aos recursos necessários para sua existência;</li>
                                <li class="wow fadeInDown" data-wow-delay="0.9s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> a partilha justa dos excedentes, como o dinheiro, o tempo e a energia para poder alcançar os objetivos das outras duas éticas.</li>
                            </ul>

                            <p>Além dos pilares, o <strong>planejamento permacultural</strong> segue 12 princípios éticos para se tornar uma filosofia de vida:</p>

                            <ul class="none">
                                <li class="wow fadeInDown" data-wow-delay="0.3s"><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> observe e interaja;</li>
                                <li class="wow fadeInDown" data-wow-delay="0.6s"><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> capte e armazene a energia;</li>
                                <li class="wow fadeInDown" data-wow-delay="0.9s"><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> obtenha um rendimento;</li>
                                <li class="wow fadeInDown" data-wow-delay="1.3s"><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> pratique a autorregulação e aceite retorno;</li>
                                <li class="wow fadeInDown" data-wow-delay="1.6s"><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> use e valorize os serviços e recursos renováveis;</li>
                                <li class="wow fadeInDown" data-wow-delay="1.9s"><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> produza e não desperdice;</li>
                                <li class="wow fadeInDown" data-wow-delay="2.3s"><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> desenhe partindo de padrões para chegar a detalhes;</li>
                                <li class="wow fadeInDown" data-wow-delay="2.6s"><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> integre ao invés de segregar;</li>
                                <li class="wow fadeInDown" data-wow-delay="2.9s"><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> use soluções pequenas e lentas;</li>
                                <li class="wow fadeInDown" data-wow-delay="3.3s"><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> use e valorize a diversidade;</li>
                                <li class="wow fadeInDown" data-wow-delay="3.6s"><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> utilize caminhos paralelos e ideias criativas e responda à mudança coli criatividade.</p>
                            </ul>
                            <br>

                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura32.png" data-bs-toggle="modal" data-bs-target="#Imagem32">
                                    <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s" width="350" src="imagens/Figura32.png" alt="Alt da imagem fica aqui">

                                </a>
                            </div>
                            <!-- Imagem 32 - MODAL -->
                            <div class="modal fade text-center" id="Imagem32" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura32.png" alt="Alt da imagem fica aqui">
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!-- Figura 32 - End -->
                            <br>


                            <p>A ideia deu certo, proporcionou alimentos mais saudáveis, uma relação mais justa e com harmonia com a natureza. Como consequência, o modelo cresceu e se expandiu por vários países.</p>

                            <p class="FonteFigura">Fonte: adaptado de <a href="https://www.ecycle.com.br/permacultura/" target="_blank">https://www.ecycle.com.br/permacultura/</a> (acessado em 20/07/2023)</p>
                        </div>
                        <br>
                        <br>

                        <!-- Saiba Mais -->
                        <div class="SaibaMaisCaixa">
                            <p class="SaibaMaisTitulo"> Saiba Mais</p>
                            <div class="SaibaMaisTexto">
                                <p>Assista ao vídeo para aprender mais sobre Permacultura:</p>
                                <p><strong>O que é Permacultura e como ela pode salvar o planeta?</strong></p>

                                <div class="video-responsive">
                                    <iframe width="560" height="315" src="https://www.youtube.com/embed/LIq0td2f34U" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                </div>
                            </div>
                        </div>
                        <br><br>

                        <div class="bd-callout bd-callout-primary">
                            <h3><strong>Rolê Regenerativo</strong></h3>
                            <hr>
                            <p><strong><em>“Mas não precisa ser assim” (parte 2)</em></strong></p>
                            <p>Vamos largar um pouco a leitura e voltar a por a mão na terra?</p>
                            <p>Boné na cabeça e chinelo nos pés. Retornemos ao 1m² demarcado e iniciemos a regeneração desse pedacinho de solo que você cercou. (Lembrando: você pode demarcar com estacas, pedra, ou outro material que você tenha às mãos.)</p>

                            <ol>
                                <li> O primeiro passo é descompactar o solo. Com um enxada ou uma pazinha, revolva a terra permitindo que ela fique solta e arejada. 20 cm de profundidade é o suficiente.</li>
                                <br>
                                <li> Limpe toda a área retirando entulhos, pedras e outros empecilhos para plantio da sua mini-floresta.</li>
                                <br>
                                <li> Acrescente um pouco de adubo. Pode ser o que você tiver às mãos: Esterco de galinha, estrume de gado, bagana de carnaúba. Se não conseguir nenhum adubo também não tem problemas. Façamos no tempo da natureza. E lembre-se: “O melhor insumo é o conhecimento.”</li>
                                <br>
                                <li> Agora cubra o seu solo com palha ou folhas secas. Seja generoso com a terra. Lembre-se que essa cobertura, além de proteger o solo ele também estará criando vida, alimentando a terra. Agora molhe bem a terra e deixe-a descansar.</li>
                                <br>
                                <li> Em casa faça um desenho planejando o plantio do seu espaço. No centro você vai plantar uma muda de árvore de sua preferência (se for frutífera melhor). Lembre-se que ela vai crescer. Então observe o espaço que você escolheu. Se for numa calçada ou próximo à um muro ou encanamento, certifique-se que ela não vai causar nenhum transtorno futuro.</li>
                                <br>
                                <li> No entorno de sua muda de árvore, insira algumas plantas que auxiliarão no crescimento dela. De preferência plantas resistentes e suculentas que fornecerão sombra e água. Pode ser Palma, Espada de São Jorge, Mandacaru sem espinho, etc. E nas bordas de sua mini-floresta, você vai plantar flores ou hortaliças. Escolha sempre plantas que você gosta e que você tenha à mão.</li>
                                <br>
                                <li> Você deve ter percebido que no planejamento estamos criando 03 círculos concêntricos de plantio. Uma muda de árvore ao centro, depois plantas auxiliares no entorno, e nas margem flores, hortaliças, ou outras ervas que você goste.</li>
                                <br>
                                <li> Um dia após seu preparo do solo você irá executar o plantio.</li>
                                <br>
                                <li> Pronto. Agora você deu o pontapé inicial no seu trabalho de regeneração da natureza. Lembre-se de sempre acompanhar o crescimento do seu canteiro. Se cada AJA fizer a sua parte, teremos 10 mil novas árvores no chão do Ceará.</li>
                                <br><br>

                                <!-- Titulo Figura -->
                                <div class="text-center">
                                    <a href="imagens/Figura33.jpg" data-bs-toggle="modal" data-bs-target="#Imagem33">
                                        <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s" width="350" src="imagens/Figura33.jpg" alt="Alt da imagem fica aqui">
                                    </a>
                                    <p class="FonteFigura">Foto: @thiago.agrofloresta</p>
                                </div>
                                <!-- Imagem 33 - MODAL -->
                                <div class="modal fade text-center" id="Imagem33" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img class="img-fluid" src="imagens/Figura33.jpg" alt="Alt da imagem fica aqui">
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <!-- Figura 33 - End -->
                            </ol>


                        </div>
                        <br><br>


                        <p>Para finalizarmos esse nosso módulo, apresentaremos a seguir outras ações importantes no trabalho de regenerar os solos e as florestas, no campo e na cidade.</p>

                        <!-- Sub Sub Título -->
                        <p class="SubSubTitulo">CASA DE SEMENTES</p>
                        <hr>


                        <p>A Casa de Sementes é uma organização comunitária criada com o objetivo de promover a autossuficiência dos associados no abastecimento de sementes de determinadas espécies vegetais importantes para a agricultura local, como milho, feijão, fava e outros, mediante empréstimo de sementes crioulas (nativas) a seus associados, os quais deverão devolver, após prazo certo e determinado, em mesmo gênero e qualidade, e em quantidade definidas.</p>
                        <p>Tem a finalidade de promover o resgate e a tradição de cultivar, produzir e armazenar sementes crioulas (nativas), garantindo a autonomia e a soberania alimentar das famílias, não dependendo das sementes vendidas no comércio.</p>
                        <p>A certeza de manutenção das melhores sementes, em local seguro, também pode representar uma saída contra as perdas referentes a problemas como seca ou excesso de chuva. No caso de perda de uma safra, os agricultores ainda podem contar com os grãos estocados.</p>

                        <div class="row">
                            <div class="col-sm">
                                <!-- Titulo Figura -->
                                <div class="text-center">
                                    <a href="imagens/Figura33.png" data-bs-toggle="modal" data-bs-target="#Imagem33">
                                        <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" width="350" src="imagens/Figura33.png" alt="Alt da imagem fica aqui">
                                    </a>
                                </div>
                                <!-- Imagem 33 - MODAL -->
                                <div class="modal fade text-center" id="Imagem33" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img class="img-fluid" src="imagens/Figura33.png" alt="Alt da imagem fica aqui">
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <!-- Figura 33 - End -->
                            </div>

                            <div class="col-sm">
                                <!-- Titulo Figura -->
                                <div class="text-center">
                                    <a href="imagens/Figura34.png" data-bs-toggle="modal" data-bs-target="#Imagem34">
                                        <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s" width="350" src="imagens/Figura34.png" alt="Alt da imagem fica aqui">
                                    </a>
                                </div>
                                <!-- Imagem 34 - MODAL -->
                                <div class="modal fade text-center" id="Imagem34" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img class="img-fluid" src="imagens/Figura34.png" alt="Alt da imagem fica aqui">
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <!-- Figura 34 - End -->
                            </div>
                        </div>

                        <p class="FonteFigura text-center">Casa de semente em Tianguá/Ce. <br> Fotos: Virgínia Maria Yunes / Cáritas Brasileira.</p>
                        <br>



                        <!-- Fique Atento -->
                        <div class="FiqueAtentoCaixa">
                            <p class="FiqueAtentoTitulo"> Fique Atento</p>
                            <div class="FiqueAtentoTexto">
                                <p>A semente crioula é importante na produção agroecológica. A semente é a responsável pela garantia da continuidade da vida vegetal e consequentemente pela grande variedade de espécies existentes em nosso planeta. Elas são ao mesmo tempo, protetoras e propagadoras da sua espécie, carregando dentro de si o embrião, representante da nova vida. Que tal um projeto para criar uma Casa de Sementes na sua comunidade, escola ou região?</p>

                                <p>Veja este vídeo sobre Casa de Sementes.</p>

                                <div class="video-responsive">
                                    <iframe width="560" height="315" src="https://www.youtube.com/embed/G3h8MGvqTIg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                </div>
                            </div>
                        </div>
                        <br>
                        <br>


                        <!-- Sub Sub Título -->
                        <p class="SubSubTitulo">REFLORESTAMENTO</p>
                        <hr>


                        <p>Sabendo da importância vital das áreas naturais e considerando que, ao longo da história, o ser humano vem desmatando, queimando e poluindo, <strong>é urgente reflorestar nosso planeta a fim de reverter esse quadro</strong>.</p>
                        <p>Existem muitas técnicas e conceitos relacionados ao reflorestamento e à recuperação de áreas degradadas. Não é só sair plantando árvores. São muitos saberes envolvidos: tanto o científico, quanto o popular.</p>

                        <!-- Titulo Figura -->
                        <div class="text-center">
                            <a href="imagens/Figura35.jpg" data-bs-toggle="modal" data-bs-target="#Imagem35">
                                <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s" src="imagens/Figura35.jpg" alt="Alt da imagem fica aqui">
                            </a>
                            <p class="FonteFigura">Fazenda Bulcão, antes (2001), e depois de ser transformada em RPPN e passar por reflorestamento com plantas nativas da Mata Atlântica (2019) na Bahia – <br>Foto: Instituto Terra.</p>
                        </div>
                        <!-- Imagem 35 - MODAL -->
                        <div class="modal fade text-center" id="Imagem35" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <img class="img-fluid" src="imagens/Figura35.jpg" alt="Alt da imagem fica aqui">
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- Figura 35 - End -->
                        <br><br>

                        <!-- Saiba Mais -->
                        <div class="SaibaMaisCaixa">
                            <p class="SaibaMaisTitulo"> Saiba Mais</p>
                            <div class="SaibaMaisTexto">
                                <p>Confira o projeto de reflorestamento Olhos D’água:</p>

                                <div class="video-responsive">
                                    <iframe width="560" height="315" src="https://www.youtube.com/embed/YWWjmQ9PlMI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                </div>
                            </div>
                        </div>
                        <br><br>


                        <!-- Sub Sub Título -->
                        <p class="SubSubTitulo">ARBORIZAÇÃO DAS CIDADES</p>
                        <hr>

                        <p>Atualmente, a maioria da população brasileira vive nos centros urbanos. De acordo com dados do Instituto Brasileiro de Geografia e Estatística (IBGE), 85% da população vive em cidades no país. A estimativa é que, entre 2001 e 2030, a área urbana ocupada triplicará e, até 2050, concentrará cerca de 70% da população mundial.</p>

                        <p>Devido à falta de planejamento, esses ambientes invadem as áreas verdes e as transformam em concreto, poluição, trânsito e barulho. Com isso, a biodiversidade perde seu habitat e fica cada vez mais restrita a alguns “pontos verdes” nas cidades.</p>

                        <p>Você pode até nem perceber, mas esse ritmo de crescimento urbano também nos causa grandes males, desde o estresse até problemas sérios de saúde. Um estudo brasileiro feito pela Universidade de Brasília comprovou essa relação. Os resultados mostraram que quanto mais contato temos com a natureza, menores serão os eventos de depressão e tristeza. Isso sem falar nas questões imunológicas, pois o contato com a terra, plantas e bichos faz o nosso corpo desenvolver anticorpos.</p>

                        <p><strong>O afastamento das áreas naturais é um dos grandes problemas ambientais atuais, e vem causando o que já discutimos no Módulo 1: a separação humanos e natureza.</strong> Reaproximar-se do mundo natural é fundamental para nossa saúde física e mental.</p>

                        <div class="row">
                            <div class="col-sm">
                                <!-- Titulo Figura -->
                                <div class="text-center">
                                    <a href="imagens/Figura36.png" data-bs-toggle="modal" data-bs-target="#Imagem36">
                                        <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s" width="350" src="imagens/Figura36.png" alt="Alt da imagem fica aqui">
                                    </a>
                                </div>
                                <!-- Imagem 36 - MODAL -->
                                <div class="modal fade text-center" id="Imagem36" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img class="img-fluid" src="imagens/Figura36.png" alt="Alt da imagem fica aqui">
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <!-- Figura 36 - End -->
                            </div>

                            <div class="col-sm">
                                <!-- Titulo Figura -->
                                <div class="text-center">
                                    <a href="imagens/Figura37.png" data-bs-toggle="modal" data-bs-target="#Imagem37">
                                        <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" width="350" src="imagens/Figura37.png" alt="Alt da imagem fica aqui">
                                    </a>
                                </div>
                                <!-- Imagem 37 - MODAL -->
                                <div class="modal fade text-center" id="Imagem37" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img class="img-fluid" src="imagens/Figura37.png" alt="Alt da imagem fica aqui">
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <!-- Figura 37 - End -->
                            </div>
                        </div>
                        <p class="FonteFigura text-center">Lazer em áreas arborizadas proporciona qualidade de vida para a população.</p>

                        <p><strong>E quanto mais nos sentimos felizes nesses ambientes, mais desejamos preservá-los.</strong> Por isso é urgente recuperar e criar espaços verdes nas cidades. Quanto mais verde, mais felicidade, mais saúde, mais esporte e mais vontade de preservar.</p>


                        <!-- Fique Atento -->
                        <div class="FiqueAtentoCaixa">
                            <p class="FiqueAtentoTitulo"> Fique Atento</p>
                            <div class="FiqueAtentoTexto">
                                <p><strong>A árvore é o ser vivo mais evoluído do planeta!</strong> Sem sair do lugar, ela faz sombra, produz o oxigênio, capta o gás carbônico, bombeia água pra atmosfera, protege contra erosão, é a casa de um monte de bichos e ainda produz frutos e madeira. <strong>Árvore é vida!</strong></p>


                                <div class="row">
                                    <div class="col-sm">
                                        <!-- Titulo Figura -->
                                        <div class="text-center">
                                            <a href="imagens/Figura38.jpg" data-bs-toggle="modal" data-bs-target="#Imagem38">
                                                <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s" width="350" src="imagens/Figura38.jpg" alt="Alt da imagem fica aqui">
                                            </a>
                                        </div>
                                        <!-- Imagem 38 - MODAL -->
                                        <div class="modal fade text-center" id="Imagem38" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-body">
                                                        <img class="img-fluid" src="imagens/Figura38.jpg" alt="Alt da imagem fica aqui">
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <!-- Figura 38 - End -->
                                    </div>

                                    <div class="col-sm">
                                        <!-- Titulo Figura -->
                                        <div class="text-center">
                                            <a href="imagens/Figura39.png" data-bs-toggle="modal" data-bs-target="#Imagem39">
                                                <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" width="350" src="imagens/Figura39.png" alt="Alt da imagem fica aqui">
                                            </a>
                                        </div>
                                        <!-- Imagem 39 - MODAL -->
                                        <div class="modal fade text-center" id="Imagem39" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-body">
                                                        <img class="img-fluid" src="imagens/Figura39.png" alt="Alt da imagem fica aqui">
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <!-- Figura 39 - End -->
                                    </div>
                                </div>
                                <p class="FonteFigura text-center">Rua arborizada em Fortaleza/CE. <br> Foto: SomosVos / @arvoreagua</p>
                            </div>
                        </div>
                        <br><br>




                        <p>Veja alguns dos objetivos da arborização nos municípios:</p>

                        <ul class="none">
                            <li class="wow fadeInDown" data-wow-delay="0.3s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Reduzir a poluição atmosférica e sonora;</li>
                            <li class="wow fadeInDown" data-wow-delay="0.6s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Interceptar a água de chuva;</li>
                            <li class="wow fadeInDown" data-wow-delay="0.9s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Sombrear e amenizar a temperatura;</li>
                            <li class="wow fadeInDown" data-wow-delay="1.3s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Abrigar e alimentar a biodiversidade;</li>
                            <li class="wow fadeInDown" data-wow-delay="1.6s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Embelezar a paisagem;</li>
                            <li class="wow fadeInDown" data-wow-delay="1.9s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Promover melhorias no bem-estar psicológico e físico da população.</li>
                        </ul>


                        <!-- Titulo Figura -->
                        <div class="text-center">
                            <a href="imagens/Figura40.jpg" data-bs-toggle="modal" data-bs-target="#Imagem40">
                                <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s" width="350" src="imagens/Figura40.jpg" alt="Alt da imagem fica aqui">
                                <p class="FonteFigura">Praça arborizada em Sobral/CE. <br> Foto: Diário do Nordeste.</p>
                            </a>
                        </div>
                        <!-- Imagem 40 - MODAL -->
                        <div class="modal fade text-center" id="Imagem40" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <img class="img-fluid" src="imagens/Figura40.jpg" alt="Alt da imagem fica aqui">
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- Figura 40 - End -->
                        <br><br>


                        <!-- Curiosidade -->
                        <div class="CuriosidadeCaixa">
                            <p class="CuriosidadeTitulo"> Curiosidade</p>
                            <div class="CuriosidadeTexto">
                                <p>As árvores estão mais presentes na nossa vida do que imaginamos. Elas estão no sobrenome das pessoas (Pereira, Pinheiro, Carvalho, Oliveira, etc.) e no nome dos municípios cearenses (Mulungu, Cedro, Juazeiro do Norte, Carnaubal, Tamboril, etc.). Você tem sobrenome de árvore? Mora em um município com nome de árvore? Fica a dica de projeto para valorizar essa espécie. Ela merece!</p>
                            </div>
                        </div>
                        <br><br>

                        <!-- Importante -->
                        <div class="ImportanteCaixa">
                            <p class="ImportanteTitulo"> Importante</p>
                            <div class="ImportanteTexto">
                                <p><strong>SAIBA COMO PLANTAR UMA ÁRVORE:</strong></p>

                                <ol>
                                    <li class="wow fadeInUp" data-wow-delay="0.3s">Escolha mudas de árvores nativas da região.</li>
                                    <li class="wow fadeInUp" data-wow-delay="0.6s">Reserve o local adequado para plantar a árvore de acordo com o tamanho que ela pode alcançar para evitar podas mutiladoras.</li>
                                    <li class="wow fadeInUp" data-wow-delay="0.9s">Faça um berço (buraco) de 50x50x50 cm.</li>
                                    <li class="wow fadeInUp" data-wow-delay="1.3s">Misture a terra que você cavou com adubo orgânico (na proporção de 1 parte de terra para 1 parte de adubo).</li>
                                    <li class="wow fadeInUp" data-wow-delay="1.6s">Coloque parte dessa mistura no berço até encher 1/3 do espaço.</li>
                                    <li class="wow fadeInUp" data-wow-delay="1.9s">Retire com cuidado a muda do saquinho que a envolve.</li>
                                    <li class="wow fadeInUp" data-wow-delay="2.3s">Ponha a planta no berço, cobrindo o espaço com a mistura que sobrou.</li>
                                    <li class="wow fadeInUp" data-wow-delay="2.6s">Coloque um tutor (galho, estaca) ao lado da planta e amarre-a suavemente nele para orientar o crescimento e evitar a quebra do caule pelo vento.</li>
                                    <li class="wow fadeInUp" data-wow-delay="2.9s">Para protegê-la, cerque-a.</li>
                                    <li class="wow fadeInUp" data-wow-delay="3.3s">Para a planta crescer com saúde é preciso regá-la uma vez ao dia, de preferência pela manhã cedo ou ao final da tarde.</li>
                                </ol>


                            </div>
                        </div>
                        <br><br>

                        <!-- Fique Atento -->
                        <div class="FiqueAtentoCaixa">
                            <p class="FiqueAtentoTitulo"> Fique Atento</p>
                            <div class="FiqueAtentoTexto">
                                <p>Nunca plante árvores exóticas invasoras. O <strong>Programa Estadual de Valorização das Espécies Vegetais Nativas</strong> traz a lista de espécies NÃO INDICADAS PARA PLANTIO. <a href="https://www.sema.ce.gov.br/wp-content/uploads/sites/36/2021/05/IN-01-2018.pdf" target="_blank">Clique aqui e confira</a>.</p>
                            </div>
                        </div>
                        <br><br>

                        <!-- Sub Sub Título -->
                        <p class="SubSubTitulo">RECUPERAÇÃO DE NASCENTES E RECURSOS HÍDRICOS</p>
                        <hr>

                        <p>Nascente, conhecida como fonte, mina d’água ou olho d’água, é o local onde se iniciam, por exemplo, os recursos hídricos (riachos, rios, lagoas). A vegetação no entorno dessas águas é chamada de Mata Ciliar, que tem a função de proteger contra erosão e absorver a água da chuva, que se infiltra no solo, alimenta os lençóis freáticos, e estes alimentarão as nascentes e olhos D'Água.</p>


                        <!-- Titulo Figura -->
                        <div class="text-center">
                            <a href="imagens/Figura41.png" data-bs-toggle="modal" data-bs-target="#Imagem41">
                                <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s" width="350" src="imagens/Figura41.png" alt="Alt da imagem fica aqui">
                                <p class="FonteFigura"> Nascente do Riacho Ipuçaba, no município de Ipu/Ceará. <br>Foto: Sema</p>
                            </a>
                        </div>
                        <!-- Imagem 41 - MODAL -->
                        <div class="modal fade text-center" id="Imagem41" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <img class="img-fluid" src="imagens/Figura41.png" alt="Alt da imagem fica aqui">
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- Figura 41 - End -->



                        Nascente do Riacho Ipuçaba, no município de Ipu/Ceará. Foto: Sema

                        <p>Para a conservação de nascentes e recursos hídricos, podem ser adotadas algumas medidas de proteção do solo e da vegetação:</p>

                        <ul class="none">
                            <li class="wow fadeInUp" data-wow-delay="0.3s"><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> Eliminação das práticas de queimadas;
                            <li class="wow fadeInUp" data-wow-delay="0.6s"><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> Enriquecimento das matas nativas;
                            <li class="wow fadeInUp" data-wow-delay="0.9s"><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> Evitar a construção de currais, chiqueiros, galinheiros e fossas sépticas nas proximidades;
                            <li class="wow fadeInUp" data-wow-delay="1.3s"><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> Não desmatar no entorno das nascentes e margens de recursos hídricos;
                            <li class="wow fadeInUp" data-wow-delay="1.6s"><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> Evitar acúmulo de lixo nas proximidades.
                        </ul>

                        <p>Tomando esses cuidados, já é uma boa ajuda para a natureza se recuperar sozinha. Mas às vezes isso não é possível. É preciso uma ajudinha nossa. Veja alguns passos para acelerar a recuperação dessas áreas:</p>

                        <ul class="none">
                            <li class="wow fadeInUp" data-wow-delay="0.3s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Cercamento do entorno de nascentes para delimitar o espaço a ser preservado;</li>
                            <li class="wow fadeInUp" data-wow-delay="0.6s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Limpeza da área, com a retirada de lixo e qualquer material estranho;</li>
                            <li class="wow fadeInUp" data-wow-delay="0.9s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Controle de erosão (cobertura vegetal);</li>
                            <li class="wow fadeInUp" data-wow-delay="1.3s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Replantio com espécies nativas (imitação da natureza);</li>
                            <li class="wow fadeInUp" data-wow-delay="1.6s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Realizar a manutenção da área protegida, no caso de replantio;</li>
                            <li class="wow fadeInUp" data-wow-delay="1.9s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Conversa com moradores e frequentadores do local sobre a importância da preservação do meio ambiente.</li>
                        </ul>

                        <!-- Titulo Figura -->
                        <div class="text-center">
                            <a href="imagens/Figura42.png" data-bs-toggle="modal" data-bs-target="#Imagem42">
                                <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" src="imagens/Figura42.png" alt="Alt da imagem fica aqui">
                                <p class="FonteFigura"></p>
                            </a>
                        </div>
                        <!-- Imagem 42 - MODAL -->
                        <div class="modal fade text-center" id="Imagem42" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <img class="img-fluid" src="imagens/Figura42.png" alt="Alt da imagem fica aqui">
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- Figura 42 - End -->
                        <br><br>

                        <!-- Titulo Figura -->
                        <div class="text-center">
                            <a href="imagens/Figura43.png" data-bs-toggle="modal" data-bs-target="#Imagem43">
                                <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s" src="imagens/Figura43.png" alt="Alt da imagem fica aqui">
                                <p class="FonteFigura">Trecho do Rio Cocó com mata ciliar preservada. <br>Foto: Sema</p>
                            </a>
                        </div>
                        <!-- Imagem 43 - MODAL -->
                        <div class="modal fade text-center" id="Imagem43" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <img class="img-fluid" src="imagens/Figura43.png" alt="Alt da imagem fica aqui">
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- Figura 43 - End -->
                        <br><br>

                        <!-- Saiba Mais -->
                        <div class="SaibaMaisCaixa">
                            <p class="SaibaMaisTitulo"> Saiba Mais</p>
                            <div class="SaibaMaisTexto">
                                <p>Veja neste vídeo um belo exemplo de Projeto de <strong>Recuperação de Nascentes</strong>.</p>

                                <div class="video-responsive">
                                    <iframe width="560" height="315" src="https://www.youtube.com/embed/aMKw2ExGb4w" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                </div>
                            </div>
                        </div>
                        <br><br>

                        <p class="alert alert-success"><strong>Chegamos ao final deste Módulo. Depois de colocar a mão na terra, é hora de testar o conhecimento aprendido.</strong></p>








                        <br><br><!-- SCRIPT LIGHTBOX -->
                        <script src="cdn-2022/assets/js/show-more.js"></script>

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
                <a href="Topico03.php?AA=<?php echo $AtividadeAvaliativa ?>" class="btn btn-primary" role="button" aria-pressed="true"><i class="fa fa-chevron-left"></i> Voltar</a>
                <a href="Referencias.php?AA=<?php echo $AtividadeAvaliativa ?>" class="btn btn-primary" role="button" aria-pressed="true">Próximo <i class="fa fa-chevron-right"></i></a>
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