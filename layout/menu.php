    <!-- PLUGIN DO FADE IN -->

    <style>
        .MenuTopico {
            color: #274F23 !important;
            font-weight: bold !important;
        }

        #menuNumero {
            color: #274F23;
            font-weight: bold !important;
            font-size: 1.2rem;
            padding-right: 0.3rem;
            margin-left: 0;
            margin-right: 0.4rem;
            font-family: "Raleway";
            right: 0.8rem;
            margin-top: -0.23rem;
        }

        .ativo {
            background-color: #e1ebe3;
        }
    </style>

    <div id="app">
        <div id="sidebar" class="active">
            <div class="sidebar-wrapper active ps">
                <div class="m-4 mx-auto text-center">
                    <!-- <a href="index.php">
                    <img class="img-fluid" src="https://atilasilvalima.a2hosted.com/projects/EGPCE/Cedis/cdn/imagens/egpce.png" alt="Logo EGPCE">
                    </a> -->
                    <img class="img-fluid img-responsive" src="https://www.egp.ce.gov.br/wp-content/uploads/sites/8/2021/06/logo-egpce-250x170-1.png" height="140" width="140" alt="Logo EGPCE">
                </div>
                <div class="sidebar-menu">

                    <ul class="menu ms-3">

                        <li class="sidebar-item">
                            <div class="bd-callout-menu bd-callout-success-menu">
                                <a href="index.php?AA=<?php echo $AtividadeAvaliativa ?>" class="MenuTopico sidebar-link <?php if($page=='Apresentacao'){echo'ativo';}?>"><span id="menuNumero"> </span>Apresentação </a>
                            </div>
                        </li>

                        <li class="sidebar-item">
                            <div class="bd-callout-menu bd-callout-success-menu">
                                <a href="Topico01.php?AA=<?php echo $AtividadeAvaliativa ?>" class="MenuTopico sidebar-link <?php if($page=='Topico01'){echo'ativo';}?>"><span id="menuNumero"> 01 </span>VIDA É DIVERSIDADE </a>
                            </div>
                        </li>

                        <li class="sidebar-item has-sub">
                            <div class="bd-callout-menu bd-callout-success-menu">
                                <a href="#" class="MenuTopico sidebar-link <?php if($page=='Topico02'){echo 'ativo';}?>"><span id="menuNumero">02 </span>  BIOMAS DO CEARÁ</a>

                                <ul class="submenu">
                                    <li class="sidebar-item">
                                        <a href="Topico02.php?AA=<?php echo $AtividadeAvaliativa ?>#Inicio" class="sidebar-sub <?php if($page=='Topico02'){echo 'ativo';}?>"><span id="menuNumero">
                                         02 - <span> Início</span>
                                     </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="Topico02.1.php?AA=<?php echo $AtividadeAvaliativa ?>#SubTopico2.1" class="sidebar-sub <?php if($page=='Topico02.1'){echo 'ativo';}?>"><span id="menuNumero">
                                        02.1 - <span> Caatinga</span>
                                        </a>
                                    </li>   
                                    <li class="sidebar-item">
                                        <a href="Topico02.2.php?AA=<?php echo $AtividadeAvaliativa ?>#SubTopico2.2" class="sidebar-sub <?php if($page=='Topico02.2'){echo 'ativo';}?>"><span id="menuNumero">
                                        02.2 - <span> Mata Atlântica</span>
                                        </a>
                                    </li>   
                                    <li class="sidebar-item">
                                        <a href="Topico02.3.php?AA=<?php echo $AtividadeAvaliativa ?>#SubTopico2.3" class="sidebar-sub <?php if($page=='Topico02.3'){echo 'ativo';}?>"><span id="menuNumero">
                                        02.3 - <span> Ecossistemas Associados</span>
                                        </a>
                                    </li>      
                                    <li class="sidebar-item">
                                        <a href="Topico02.4.php?AA=<?php echo $AtividadeAvaliativa ?>#SubTopico2.4" class="sidebar-sub <?php if($page=='Topico02.4'){echo 'ativo';}?>"><span id="menuNumero">
                                        02.4 - <span> Biodiversidade Nativa e Exótica</span>
                                        </a>
                                    </li>                               
                                </ul>
                            </div>
                        </li>

                        <li class="sidebar-item has-sub">
                            <div class="bd-callout-menu bd-callout-success-menu">
                                <a href="#" class="MenuTopico sidebar-link <?php if($page=='Topico03'){echo 'ativo';}?>"><span id="menuNumero">03 </span> UNIDADES DE CONSERVAÇÃO (UCs)</a>

                                <ul class="submenu">
                                    <li class="sidebar-item">
                                        <a href="Topico03.php?AA=<?php echo $AtividadeAvaliativa ?>#Inicio" class="sidebar-sub <?php if($page=='Topico03'){echo 'ativo';}?>"><span id="menuNumero">
                                         03 - <span> Início</span>
                                     </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="Topico03.1.php?AA=<?php echo $AtividadeAvaliativa ?>#SubTopico3.1" class="sidebar-sub <?php if($page=='Topico03.1'){echo 'ativo';}?>"><span id="menuNumero">
                                        03.1 - <span> SNUC - Sistema Nacional de Unidades de Conservação</span>
                                        </a>
                                    </li>      
                                    <li class="sidebar-item">
                                        <a href="Topico03.2.php?AA=<?php echo $AtividadeAvaliativa ?>#SubTopico3.2" class="sidebar-sub <?php if($page=='Topico03.2'){echo 'ativo';}?>"><span id="menuNumero">
                                        03.2 - <span> Categorias de Unidades de Conservação</span>
                                        </a>
                                    </li>                             
                                </ul>
                            </div>
                        </li>
                                                    
                        <li class="sidebar-item">
                            <div class="bd-callout-menu bd-callout-success-menu">
                                <a href="Referencias.php?AA=<?php echo $AtividadeAvaliativa ?>" class="MenuTopico sidebar-link <?php if($page=='Referencias'){echo 'ativo';}?>">Referências</a>
                            </div>
                        </li>
                    </ul>
                </div>
                <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
            </div>
        </div>
    
    
    <!-- SCRIPT - JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

    <script>
        $(document).ready(function() {
            $('ul li a').click(function() {
                $('li a').removeClass("ativo");
                $(this).addClass("ativo");
            });
        });
    </script>
