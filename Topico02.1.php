<?php
$AtividadeAvaliativa = $_GET['AA'];
?>
<?php
// EGPCE - Chama o conectamoodle.php
require_once('conectamoodle.php');
?>

<?php
$page = 'Topico02.1';
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

                  <p class="SubTitulo">CAATINGA</p>
                  <hr>
                  <br>


                  <p>Conhecida também como sertão, agreste, cariri, seridó, carrasco – denominações populares para as diferentes formações vegetais do bioma, a Caatinga abrange os estados da Bahia, Sergipe, Alagoas, Pernambuco, Paraíba, Rio Grande do Norte, Ceará, Piauí e norte de Minas Gerais, com uma área de 844.453 km², <strong>aproximadamente 10% do território nacional, não sendo encontrado em mais nenhum outro local do planeta</strong>.</p>

                  <p>Originado do tupi-guarani, o termo é tradicionalmente interpretado como <strong>mata</strong> (caa) <strong>branca</strong> (tinga). Esse nome remete à cor que sua vegetação adquire no período da estiagem. Nesse período, nossas florestas soltam as folhas para evitar a perda de água. As folhas secas cobrem o solo, refletindo a luz solar e evitando o superaquecimento. Essa é a estratégia que nossa vegetação desenvolveu para conviver com os meses de ausência de chuvas.</p>

                  <!-- Titulo Figura -->
                  <div class="text-center">
                     <a href="imagens/Figura18.png" data-bs-toggle="modal" data-bs-target="#Imagem18">
                        <img class="img-fluid wow fadeInLeft" src="imagens/Figura18.png" alt="Alt da imagem fica aqui">
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
                           </div>
                        </div>

                     </div>
                  </div>
                  <!-- Figura 18 - End -->
                  <br><br>


                  <p>Um dos grandes mitos que envolvem o bioma Caatinga, é que há pouca vida nesta região devido às condições climáticas (média de chuvas anuais de 800 mm). Provavelmente você já viu, nos meios de comunicação, a imagem de solos rachados, sem plantas ou animais, ou a imagem de pessoas andando quilômetros em busca de água.</p>

                  <p>Isso acontece em algumas regiões, em determinadas épocas do ano. Contudo, as espécies que habitam a Caatinga foram selecionadas naturalmente ao longo do tempo e desenvolveram estratégias de sobrevivência.</p>

                  <p>De acordo com a <a href="https://www.acaatinga.org.br/qual-e-papel-da-caatinga-na-biodiversidade-do-brasil/" target="_blank">Associação Caatinga</a>, na Caatinga já foram registradas 3.150 espécies de plantas, 548 aves, 386 peixes, 276 formigas, 167 répteis e 98 anfíbios e 148 mamíferos. O nível de <strong>endemismo</strong> nesses grupos varia de 6% entre mamíferos a 52,9% entre os peixes, um número bem alto se comparados com outras florestas secas do mundo. Supõe-se que o número real de espécies é ainda maior, visto que uma quantidade significativa da região ainda não foi estudada de forma eficiente.</p>

                  <!-- Fique Atento -->
                  <div class="FiqueAtentoCaixa">
                     <p class="FiqueAtentoTitulo"> Fique Atento</p>
                     <div class="FiqueAtentoTexto">
                        <p>Endemismo é quando uma determinada espécie se desenvolve somente em uma região específica. Por exemplo, quando dizemos que 52,9% dos peixes da Caatinga são endêmicos, estamos afirmando que mais da metade das espécies vivem <u>exclusivamente</u> nesse bioma.</p>
                     </div>
                  </div>
                  <br><br>

                  <div class="bd-callout bd-callout-warning">
                     <p><strong>EXEMPLOS DE FLORA DA CAATINGA</strong></p>

                     <div class="row">
                        <div class="col-md-3 col-sm-12">
                           <!-- Titulo Figura -->
                           <div class="text-center">
                              <a href="imagens/Figura19.png" data-bs-toggle="modal" data-bs-target="#Imagem19">
                                 <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s" src="imagens/Figura19.png" alt="Alt da imagem fica aqui">
                              </a>
                              <p class="FonteFigura">Aroeira. <br> Foto: J. A. Araújo Filho.</p>
                           </div>

                           <!-- Imagem 19 - MODAL -->
                           <div class="modal fade text-center" id="Imagem19" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                              <div class="modal-dialog modal-dialog-centered modal-lg">
                                 <div class="modal-content">
                                    <div class="modal-body">
                                       <img class="img-fluid" src="imagens/Figura19.png" alt="Alt da imagem fica aqui">
                                    </div>
                                    <div class="modal-footer text-center">
                                    </div>
                                 </div>

                              </div>
                           </div>
                           <!-- Figura 19 - End -->
                        </div>
                        <div class="col-md-3 col-sm-12">
                           <!-- Titulo Figura -->
                           <div class="text-center">
                              <a href="imagens/Figura22.png" data-bs-toggle="modal" data-bs-target="#Imagem22">
                                 <img class="img-fluid wow fadeInDown" data-wow-delay="2.0s" src="imagens/Figura22.png" alt="Alt da imagem fica aqui">
                              </a>
                              <p class="FonteFigura">Xique-xique. <br> Foto: Sérgio Mota</p>
                           </div>

                           <!-- Imagem 22 - MODAL -->
                           <div class="modal fade text-center" id="Imagem22" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                              <div class="modal-dialog modal-dialog-centered modal-lg">
                                 <div class="modal-content">
                                    <div class="modal-body">
                                       <img class="img-fluid" src="imagens/Figura22.png" alt="Alt da imagem fica aqui">
                                    </div>
                                    <div class="modal-footer text-center">
                                    </div>
                                 </div>

                              </div>
                           </div>
                           <!-- Figura 22 - End -->
                        </div>
                        <div class="col-md-3 col-sm-12">
                           <!-- Titulo Figura -->
                           <div class="text-center">
                              <a href="imagens/Figura21.png" data-bs-toggle="modal" data-bs-target="#Imagem21">
                                 <img class="img-fluid wow fadeInLeft" data-wow-delay="1.5s" src="imagens/Figura21.png" alt="Alt da imagem fica aqui">
                              </a>
                              <p class="FonteFigura">Carnaúba. <br> Foto: Marcos Vieira</p>
                           </div>

                           <!-- Imagem 21 - MODAL -->
                           <div class="modal fade text-center" id="Imagem21" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                              <div class="modal-dialog modal-dialog-centered modal-lg">
                                 <div class="modal-content">
                                    <div class="modal-body">
                                       <img class="img-fluid" src="imagens/Figura21.png" alt="Alt da imagem fica aqui">
                                    </div>
                                    <div class="modal-footer text-center">
                                    </div>
                                 </div>

                              </div>
                           </div>
                           <!-- Figura 21 - End -->
                        </div>
                        <div class="col-md-3 col-sm-12">
                           <!-- Titulo Figura -->
                           <div class="text-center">
                              <a href="imagens/Figura20.png" data-bs-toggle="modal" data-bs-target="#Imagem20">
                                 <img class="img-fluid wow fadeInUp" data-wow-delay="1.0s" width="300" src="imagens/Figura20.png" alt="Alt da imagem fica aqui">
                              </a>
                              <p class="FonteFigura">Pau branco. <br> Foto: J. A. Araújo Filho</p>
                           </div>

                           <!-- Imagem 20 - MODAL -->
                           <div class="modal fade text-center" id="Imagem20" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                              <div class="modal-dialog modal-dialog-centered modal-lg">
                                 <div class="modal-content">
                                    <div class="modal-body">
                                       <img class="img-fluid" src="imagens/Figura20.png" alt="Alt da imagem fica aqui">
                                    </div>
                                    <div class="modal-footer text-center">
                                    </div>
                                 </div>

                              </div>
                           </div>
                           <!-- Figura 20 - End -->
                        </div>
                     </div>

                     <p><strong>EXEMPLOS DE FAUNA DA CAATINGA</strong></p>

                     <div class="row">
                        <div class="col-md-3 col-sm-12">
                           <!-- Titulo Figura -->
                           <div class="text-center">
                              <a href="imagens/Figura23.png" data-bs-toggle="modal" data-bs-target="#Imagem23">
                                 <img class="img-fluid wow fadeInUp" data-wow-delay="1.0s" width="300" src="imagens/Figura23.png" alt="Alt da imagem fica aqui">
                              </a>
                              <p class="FonteFigura">Mocó. Foto: Samuel Portela</p>
                           </div>

                           <!-- Imagem 23 - MODAL -->
                           <div class="modal fade text-center" id="Imagem23" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                              <div class="modal-dialog modal-dialog-centered modal-lg">
                                 <div class="modal-content">
                                    <div class="modal-body">
                                       <img class="img-fluid" src="imagens/Figura23.png" alt="Alt da imagem fica aqui">
                                    </div>
                                    <div class="modal-footer text-center">
                                    </div>
                                 </div>

                              </div>
                           </div>
                           <!-- Figura 23 - End -->
                        </div>
                        <div class="col-md-3 col-sm-12">
                           <!-- Titulo Figura -->
                           <div class="text-center">
                              <a href="imagens/Figura24.png" data-bs-toggle="modal" data-bs-target="#Imagem24">
                                 <img class="img-fluid wow fadeInUp" data-wow-delay="1.0s" width="300" src="imagens/Figura24.png" alt="Alt da imagem fica aqui">
                              </a>
                              <p class="FonteFigura">Corrupião. Foto: Samuel Portela</p>
                           </div>

                           <!-- Imagem 24 - MODAL -->
                           <div class="modal fade text-center" id="Imagem24" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                              <div class="modal-dialog modal-dialog-centered modal-lg">
                                 <div class="modal-content">
                                    <div class="modal-body">
                                       <img class="img-fluid" src="imagens/Figura24.png" alt="Alt da imagem fica aqui">
                                    </div>
                                    <div class="modal-footer text-center">
                                    </div>
                                 </div>

                              </div>
                           </div>
                           <!-- Figura 24 - End -->
                        </div>
                        <div class="col-md-3 col-sm-12">
                           <!-- Titulo Figura -->
                           <div class="text-center">
                              <a href="imagens/Figura25.png" data-bs-toggle="modal" data-bs-target="#Imagem25">
                                 <img class="img-fluid wow fadeInUp" data-wow-delay="1.0s" width="300" src="imagens/Figura25.png" alt="Alt da imagem fica aqui">
                              </a>
                              <p class="FonteFigura"> . Foto: Genário Azevedo </p>
                           </div>

                           <!-- Imagem 25 - MODAL -->
                           <div class="modal fade text-center" id="Imagem25" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                              <div class="modal-dialog modal-dialog-centered modal-lg">
                                 <div class="modal-content">
                                    <div class="modal-body">
                                       <img class="img-fluid" src="imagens/Figura25.png" alt="Alt da imagem fica aqui">
                                    </div>
                                    <div class="modal-footer text-center">
                                    </div>
                                 </div>

                              </div>
                           </div>
                           <!-- Figura 25 - End -->
                        </div>
                        <div class="col-md-3 col-sm-12">
                           <!-- Titulo Figura -->
                           <div class="text-center">
                              <a href="imagens/Figura26.png" data-bs-toggle="modal" data-bs-target="#Imagem26">
                                 <img class="img-fluid wow fadeInUp" data-wow-delay="1.0s" width="300" src="imagens/Figura26.png" alt="Alt da imagem fica aqui">
                              </a>
                              <p class="FonteFigura">Cobra-verde. Foto: Samuel Portela.</p>
                           </div>

                           <!-- Imagem 26 - MODAL -->
                           <div class="modal fade text-center" id="Imagem26" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                              <div class="modal-dialog modal-dialog-centered modal-lg">
                                 <div class="modal-content">
                                    <div class="modal-body">
                                       <img class="img-fluid" src="imagens/Figura26.png" alt="Alt da imagem fica aqui">
                                    </div>
                                    <div class="modal-footer text-center">
                                    </div>
                                 </div>

                              </div>
                           </div>
                           <!-- Figura 26 - End -->
                        </div>
                     </div>
                  </div>



                  <div class="bd-callout bd-callout-primary">
                     <p><strong>ROLÊ INVESTIGATIVO</strong></p>
                     <div class="p-3 border border-success">
                        <p><em>“Ninguém ama aquilo que não conhece.”</em></p>
                        <p class="FonteFigura"><strong>Agostinho de Hipona.</strong></p>
                     </div>
                     <br><br>
                     
                     <p>Para conhecer os caminhos que compõem a sua realidade, é preciso andar junto aos outros caminhantes. Trilhar com eles o mundo que com eles se divide. Saber seus nomes, como vivem, onde moram, o que comem. O cachorro que dorme na rua, o menino que brinca com ele, a abelha que visita a flor do jardim do vizinho, a flor do jardim, o vizinho. Todos compõem o caminho que se trilha. Cada coisa, cada planta, é um ser que pode ensinar, um elo da sua vida, que pode te dar remédio e comida e o ar que você respira. O caminho é a própria vida, e caminhar é vivê-la. Não sem conhecê-la, não sem amá-la. E para amá-la é preciso conhecê-la.</p>
                     <p>A proposta do <strong>ROLÊ INVESTIGATIVO</strong> desse módulo é listar tudo que é vivo à sua volta. Plantas, bichos, gentes.</p>
                     <p>De chinelo no pé, boné na cabeça e o seu caderno de anotações na mão.</p>
                     <p>Tudo pronto? Então bora lá!</p>
                     <p>Antes de sair de casa, crie na sua mente um percurso imaginário. Tente vê-lo antes de trilhá-lo. Agora saia e observe. Olhe tudo com admiração e a surpresa de uma criança que descobre o mundo. Prenda-se nos <strong>detalhes</strong>.</p>
                     <p>Quantas espécies diferentes de seres vivos você consegue identificar? Faça uma lista das plantas e bichos que você sabe o nome. Alguma planta ou bicho que te chamou atenção mas que lhe é desconhecido? Fotografe. Em casa você poderá pesquisar sobre ele na internet. Mas não deixe de observar também a diversidade humana. Veja as muitas raças que compõem a sua comunidade. Descreva-os também. Isso tudo é parte da rica biodiversidade da sua região.</p>
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
            <a href="Topico02.php?AA=<?php echo $AtividadeAvaliativa ?>" class="btn btn-primary" role="button" aria-pressed="true"><i class="fa fa-chevron-left"></i> Voltar</a>
            <a href="Topico02.2.php?AA=<?php echo $AtividadeAvaliativa ?>" class="btn btn-primary" role="button" aria-pressed="true">Próximo <i class="fa fa-chevron-right"></i></a>
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