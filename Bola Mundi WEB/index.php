<?php 

 session_start();

   //Recebe o nome do arquivo login.php e vai para a var logado
   if(isset($_SESSION['acesso'])){
     $logado=$_SESSION['acesso'];
   }else{
   $_SESSION["deslogar"]=false;
   }

   if(isset($_SESSION['nome'])){
    $nome=$_SESSION['nome'];
    $recepcao=$_SESSION['nome'];
   }else{
   $nome="Usuário não logado";
     $recepcao="";
   }


?>

<html lang="pt-BR">

    <!--========== INÍCIO HEAD ==========-->

    <head>
        
        <!-- Informações base -->

        <meta charset="utf-8">
        <title>Bola Mundi</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="img/icon/bolamundilogo.ico"/>
        
        <!-- Fontes (google) -->

        <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,500' rel='stylesheet' type='text/css'> <!-- Body -->
        <link href='http://fonts.googleapis.com/css?family=Lato:300,400' rel='stylesheet' type='text/css'> <!-- Navbar -->

        <!-- Plugins CSS -->

        <link rel="stylesheet" href="inc/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="inc/animations/css/animate.min.css">
        <link rel="stylesheet" href="inc/font-awesome/css/font-awesome.min.css"> <!-- Font Icons -->
        <link rel="stylesheet" href="inc/owl-carousel/css/owl.carousel.css">
        <link rel="stylesheet" href="inc/owl-carousel/css/owl.theme.css">
       

        <!-- Base CSS -->

        <link rel="stylesheet" href="css/reset.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/skin/indexcolor.css">
        <link rel="stylesheet" href="css/contador/contagemcss.css">

        
        <!-- Tabela CSS -->
      <link rel="stylesheet" href="css/tabelapartidas.css">
       

    </head>

    <!--========== FIM HEAD ==========-->

    <!--========== INÍCIO BODY ==========-->

    <body data-spy="scroll" data-target="#main-navbar">
        <div class="page-loader"></div>  <!-- O loading aparece enquanto a página está carregando -->
        <div class="body">
        
            <!--========== INÍCIO DO HEADER ==========-->

            <header id="header" class="header-main">

                <!-- Início Navbar -->
                <nav id="main-navbar" class="navbar navbar-default navbar-fixed-top" role="navigation">

                  <div class="container">

                    <!-- Melhora no mobile o visual -->
                    <div class="navbar-header">
                      <a class="navbar-brand page-scroll" href="index.php">Bola Mundi</a>
                    </div>

                    <!-- Divisão-->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a class="page-scroll" href=historiadacopa.php>História da Copa</a></li>
                            <li><a class="page-scroll" href="#selecoes-section">Seleções</a></li>
                            <li><a class="page-scroll" href="#partidas-section">Partidas</a></li>
                            <li><a class="page-scroll" href="#placar-section">Placar</a></li>
                            <li><a class="page-scroll" href="#classificacao-section">Classificação</a></li>
                            <li><a class="page-scroll" href="friendsarena.php">Friends Arena</a></li>
                            <li><a class="page-scroll" href="loja/loja.php">Loja</a></li>
                            <li><a class="page-scroll" data-toggle="dropdown" href="#"><?php echo $nome; ?><span class="caret"></span></a>
                              <ul class="dropdown-menu">
                               <li><a href="perfil/perfil.php">Seu Perfil</a></li>
       <?php                        
                               if(isset($_SESSION['acesso']) and $_SESSION['acesso']=="Admin"){
     echo '<li><a href="admin/admindocker.php?pag=1" id="admin">Admin</a></li>';
   } ?>
                               
                               <li><a class="page-scroll" id="login" href="acesso/login/login.html">Login</a></li>
                               <li><a class="page-scroll" id="deslogar" href="acesso/login/deslogar.php">Deslogar</a></li>
                              </ul>
                           </li>
                           <li><a class="page-scroll" href="../../eng/index.php">ENG</a></li>
                      </ul>
                    </div>
                  </div>
                </nav>

                <!-- Fim Navbar -->

            </header>


            <!--========== INÍCIO DO CAROUSEL HOME ==========-->
            
            <!-- Frases de efeito do home (carousel) -->
            <section id="text-carousel-intro-section" class="parallax" data-stellar-background-ratio="0.5" style="background-image: url(img/slider-bg.jpg);">
                
                <div class="container">
                    <div class="caption text-center text-white" data-stellar-ratio="0.7">

                        <div id="owl-intro-text" class="owl-carousel">
                            <div class="item">
                                <h1>BEM-VINDO AO BOLA MUNDI <?php echo $recepcao; ?>!</h1>
                            </div>
                          
                        </div>

                    </div> 
                </div> 

            </section>
            
            <!-- ========= FIM DO CAROUSEL HOME =========-->   

                
            <!--========== INÍCIO DO SOBRE NÓS ==========-->    
                
            
            <section id="about-section" class="page bg-style1">
                
                <div class="page-header-wrapper">
                    <div class="container">
                        <div class="page-header text-center wow fadeInUp" data-wow-delay="0.3s">
                            <h2>Quem somos?</h2>
                            <div class="devider">
                              
                          </div>
                        </div>
                    </div>
                </div>
              
                <div class="rotate-box-1-wrapper">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-3 col-sm-6">
                                <p style="background-color: white; width: 1100px; border: 1px dashed red; padding: 50px; margin: 20px;">O Bola Mundi é um site que tem como objetivo melhorar a interação dos torcedores com a Copa do Mundo de 2022, integrando todos os detalhes sobre a competição. Além de contribuir com a indicação de ONGs esportivas confiáveis. Você pode conferir essa lista clicando em "Friends Arena".</p>
                            </div>
                        </div> 
                    </div> 
                </div>           
          </section>
          
          <!--========== FIM DO SOBRE NÓS ==========-->     

          <!--========== INÍCIO DAS SELEÇÕES ==========-->      
              
            
            <section id="selecoes-section">
                <div id="selecoes-trigger" class="selecoes text-white parallax" data-stellar-background-ratio="0.5" style="background-image: url(img/selecoes-bg.jpg);">
                    <div class="cover"></div>
                    <!-- Início do header das seleções-->
                    <div class="page-header-wrapper">
                        <div class="container">
                            <div class="page-header text-center wow fadeInDown" data-wow-delay="0.4s">
                                <h1>SELEÇÕES</h1>
                                <div class="devider"></div>
                                <p class="subtitle">Fique por dentro de todos os jogos da sua seleção favorita!</p>
                            </div>
                        </div>
                    </div>
                    <!-- Fim do header das seleções-->
                    <div class="container">
                        <div class="selecoes-inner center-block text-center">
                            <div id="owl-selecoes" class="owl-carousel">
                                <div class="item">
                                    <blockquote>
                                        <div class="selecoescarousel">
                                          <img src="img/selecoes/brasil.jpg" alt="Bandeira do Brasil" style="width:100%"> 
                                          <h2> SELEÇÃO BRASILEIRA </h2>
                                          <a href="selecoes/selecao.php?id=1&pag=1"><button type="submit" class="selecoes-inner" style="color: #FFFFFF">Clique Aqui</button></a>              
                                        </div>
                                    </blockquote>
                                </div>
                                <div class="item">
                                    <blockquote>
                                        <div class="selecoescarousel">
                                          <img src="img/selecoes/seleçõesmandantes.jpg" alt="Seleções mandantes" style="width:100%"> 
                                          <h2> SELEÇÕES MANDANTES </h2>
                                           <a href="selecoes/selecoesmandantes.php"><button type="submit" class="selecoes-inner" style="color: #FFFFFF">Clique Aqui</button></a>        
                                        </div>
                                    </blockquote>
                                </div>
                                <div class="item">
                                    <blockquote>
                                        <div class="selecoescarousel">
                                          <img src="img/selecoes/todasseleções.jpg" alt="Todas as seleções" style="width:100%"> 
                                          <h2> TODAS AS SELEÇÕES </h2>
                                          <a href="selecoes/todasaselecoes.php"><button type="submit" class="selecoes-inner" style="color: #FFFFFF">Clique Aqui</button></a>             
                                        </div>
                                    </blockquote>
                                </div>
                                                                <div class="item">
                                    <blockquote>
                                        <div class="selecoescarousel">
                                          <img src="img/selecoes/perfiljogadores.jpg" alt="Todas as seleções" style="width:100%"> 
                                          <h2> PERFIL DOS JOGADORES BRASILEIROS </h2>
                                          <a href="perfiljogadoresbr/galeria.html"><button type="submit" class="selecoes-inner" style="color: #FFFFFF">Clique Aqui</button></a>             
                                        </div>
                                    </blockquote>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            
          <!--========== FIM SELEÇÕES ==========-->
            
          <!--========== INÍCIO DAS PARTIDAS ==========-->

          <section id="partidas-section" class="page bg-style1">
                
                <div class="page-header-wrapper">
                    <div class="container">
                        <div class="page-header text-center wow fadeInUp" data-wow-delay="0.3s">
                            <h2>PRÓXIMOS JOGOS</h2>
                            <div class="devider"></div>
                      </div>
                           
                    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
                      
                    <center>
                        <b> <input id="gfg" type="text"placeholder="Pesquise aqui a partida que desejar"> </b>
                        <br>
                        <br>
                           <table id="table">
                                <tr>
                                    <th>Seleções</th>
                                    <th>Data</th>
                                    <th>Horário</th>
                                    <th>Local</th>
                                    <th>Status</th>
                                    <th>Vencedor</th>
                                </tr> 
                            <tbody id="geeks">
                                <tr>
                           
                                    <td>Senegal X Holanda</td>
                                    <td>21/11</td>
                                    <td>07:00</td>
                                    <td>Al Thumama</td>
                                    <td>Não realizado</td>
                                    <td>Sem informação</td>
                                </tr>
                                <tr>
                                    <td>Inglaterra X Irã</td>
                                    <td>21/11</td>
                                    <td>10:00</td>
                                    <td>Khalifa</td>
                                    <td>Não realizado</td>
                                    <td>Sem informação</td>
                                </tr>
                                <tr>
                                    <td>Catar X Equador</td>
                                    <td>21/11</td>
                                    <td>13:00</td>
                                    <td>Al Bayt Stadium</td>
                                    <td>Não realizado</td>
                                    <td>Sem informação</td>
                                </tr>
                                <tr>
                                    <td>Estados Unidos x Gales</td>
                                    <td>21/11</td>
                                    <td>16:00</td>
                                    <td>Ahmad Bin Ali </td>
                                    <td>Não realizado</td>
                                    <td>Sem informação</td>
                                </tr>
                                <tr>
                                    <td>Argentina x Arábia Saudita</td>
                                    <td>22/11</td>
                                    <td>07:00</td>
                                    <td>Lusail</td>
                                    <td>Não realizado</td>
                                    <td>Sem informação</td>
                                </tr>
                                <tr>
                                    <td>Dinamarca x Tunísia</td>
                                    <td>22/11</td>
                                    <td>10:00</td>
                                    <td>Education City</td>
                                    <td>Não realizado</td>
                                    <td>Sem informação</td>
                                </tr>
                                <tr>
                                    <td>México x Polônia</td>
                                    <td>22/11</td>
                                    <td>13:00</td>
                                    <td>Porto de Doha</td>
                                    <td>Não realizado</td>
                                    <td>Sem informação</td>
                                </tr>
                                <tr>
                                    <td>França x A confirmar</td>
                                    <td>22/11</td>
                                    <td>16:00</td>
                                    <td>Al Janoub</td>
                                    <td>Não realizado</td>
                                    <td>Sem informação</td>
                                </tr>
                                <tr>
                                    <td>Marrocos x Croácia</td>
                                    <td>23/11</td>
                                    <td>07:00</td>
                                    <td>Al Bayt</td>
                                    <td>Não realizado</td>
                                    <td>Sem informação</td>
                                </tr>
                                <tr>
                                    <td>Alemanha x Japão</td>
                                    <td>23/11</td>
                                    <td>10:00</td>
                                    <td> Khalifa</td>
                                    <td>Não realizado</td>
                                    <td>Sem informação</td>
                                </tr>
                                <tr>
                                    <td>Espanha x A confirmar</td>
                                    <td>23/11</td>
                                    <td>13:00</td>
                                    <td>Al Thumama</td>
                                    <td>Não realizado</td>
                                    <td>Sem informação</td>
                                </tr>
                                <tr>
                                    <td>Bélgica x Canadá</td>
                                    <td>23/11</td>
                                    <td>16:00</td>
                                    <td>Ahmad Bin Ali </td>
                                    <td>Não realizado</td>
                                    <td>Sem informação</td>
                                </tr>
                                <tr>
                                    <td>Suíça x Camarões</td>
                                    <td>24/11</td>
                                    <td>07:00</td>
                                    <td>Al Janoub</td>
                                    <td>Não realizado</td>
                                    <td>Sem informação</td>
                                </tr>
                                <tr>
                                    <td>Uruguai x Coreia do Sul</td>
                                    <td>24/11</td>
                                    <td>10:00</td>
                                    <td>Education City</td>
                                    <td>Não realizado</td>
                                    <td>Sem informação</td>
                                </tr>
                                <tr>
                                    <td>Portugal x Gana</td>
                                     <td>24/11</td>
                                    <td>13:00</td>
                                    <td>Porto de Doha</td>
                                    <td>Não realizado</td>
                                    <td>Sem informação</td>
                                </tr>
                                <tr>
                                    <td>Brasil x Sérvia</td>
                                    <td>24/11</td>
                                    <td>16:00</td>
                                    <td>Lusail</td>
                                    <td>Não realizado</td>
                                    <td>Sem informação</td>
                                </tr>
                                <tr>
                                    <td>Irã x País de Gales</td>
                                    <td>25/11</td>
                                    <td>07:00</td>
                                    <td>Ahmad Bin Ali </td>
                                    <td>Não realizado</td>
                                    <td>Sem informação</td>
                                </tr>
                                <tr>
                                    <td>Catar x Senegal</td>
                                    <td>25/11</td>
                                    <td>10:00</td>
                                    <td>Al Thumama</td>
                                    <td>Não realizado</td>
                                    <td>Sem informação</td>
                                </tr>
                                <tr>
                                    <td>Holanda x Equador</td>
                                    <td>25/11</td>
                                    <td>13:00</td>
                                    <td>Khalifa</td>
                                    <td>Não realizado</td>
                                    <td>Sem informação</td>
                                </tr>
                                <tr>
                                    <td>Inglaterra x Estados Unidos</td>
                                    <td>25/11</td>
                                    <td>16:00</td>
                                    <td>Al Bayt</td>
                                    <td>Não realizado</td>
                                    <td>Sem informação</td>
                                </tr>
                                <tr>
                                    <td>Tunísia x A confirmar</td>
                                    <td>26/11</td>
                                    <td>07:00</td>
                                    <td>Al Janoub </td>
                                    <td>Não realizado</td>
                                    <td>Sem informação</td>
                                </tr>
                                <tr>
                                    <td>Polônia x Arábia Saudita</td>
                                    <td>26/11</td>
                                    <td>10:00</td>
                                    <td>Education City</td>
                                    <td>Não realizado</td>
                                    <td>Sem informação</td>
                                </tr>
                                <tr>
                                    <td>França x Dinamarca</td>
                                    <td>26/11</td>
                                    <td>13:00</td>
                                    <td>Porto de Doha</td>
                                    <td>Não realizado</td>
                                    <td>Sem informação</td>
                                </tr>
                                <tr>
                                    <td>Argentina x México</td>
                                    <td>26/11</td>
                                    <td>16:00</td>
                                    <td>Lusail</td>
                                    <td>Não realizado</td>
                                    <td>Sem informação</td>
                                </tr>     
                                <tr>
                                    <td>Japão x A confirmar</td>
                                    <td>27/11</td>
                                    <td>07:00</td>
                                    <td>Ahmad Bin Ali</td>
                                    <td>Não realizado</td>
                                    <td>Sem informação</td>
                                </tr>
                                <tr>
                                    <td>Bélgica x Marrocos</td>
                                    <td>27/11</td>
                                    <td>10:00</td>
                                    <td>Al Thumama</td>
                                    <td>Não realizado</td>
                                    <td>Sem informação</td>
                                </tr>
                                <tr>
                                    <td>Croácia x Canadá</td>
                                    <td>27/11</td>
                                    <td>13:00</td>
                                    <td> Khalifa</td>
                                    <td>Não realizado</td>
                                    <td>Sem informação</td>
                                </tr>
                                <tr>
                                    <td>Espanha x Alemanha</td>
                                    <td>27/11</td>
                                    <td>16:00</td>
                                    <td>Al Bayt</td>
                                    <td>Não realizado</td>
                                    <td>Sem informação</td>
                               </tr>
                               <tr>
                                    <td>Camarões x Sérvia</td>
                                    <td>28/11</td>      
                                    <td>07:00</td>
                                    <td>Al Janoub </td>
                                    <td>Não realizado</td>
                                    <td>Sem informação</td>
                                </tr>
                                <tr>
                                    <td>Coreia do Sul x Gana</td>
                                    <td>28/11</td>
                                    <td>10:00</td>
                                    <td>Education City</td>
                                    <td>Não realizado</td>
                                    <td>Sem informação</td>
                                </tr>
                                <tr>
                                    <td>Brasil x Suíça</td>
                                    <td>28/11</td>
                                    <td>13:00</td>
                                    <td>Porto de Doha</td>
                                    <td>Não realizado</td>
                                    <td>Sem informação</td>
                                </tr>
                                <tr>
                                    <td>Portugal x Uruguai</td>
                                    <td>28/11</td>
                                    <td>16:00</td>
                                    <td>Lusail</td>
                                    <td>Não realizado</td>
                                    <td>Sem informação</td>
                                </tr>
                                <tr>
                                    <td>Holanda x Catar</td>
                                    <td>29/11</td>  
                                    <td>12:00</td>
                                    <td>Al Bayt </td>
                                    <td>Não realizado</td>
                                    <td>Sem informação</td>
                                </tr>
                                <tr>
                                    <td>Equador x Senegal</td>
                                    <td>29/11</td>
                                    <td>12:00</td>
                                    <td>Khalifa</td>
                                    <td>Não realizado</td>
                                    <td>Sem informação</td>
                                </tr>
                                <tr>
                                    <td>Inglaterra x País de Gales</td>
                                    <td>29/11</td>
                                    <td>16:00</td>
                                    <td>Al Rayyan</td>
                                    <td>Não realizado</td>
                                    <td>Sem informação</td>
                                </tr>
                                <tr>
                                    <td> Irã x Estados Unidos</td>
                                    <td>29/11</td>
                                    <td>16:00</td>
                                    <td> Al Thumama</td>
                                    <td>Não realizado</td>
                                    <td>Sem informação</td>
                                </tr>
                                <tr>
                                    <td>Tunísia x França</td>
                                    <td>30/11 </td>
                                    <td>12:00</td>
                                    <td>Education City </td>
                                    <td>Não realizado</td>
                                    <td>Sem informação</td>
                                </tr>
                                <tr>
                                    <td>Dinamarca x A confirmar</td>
                                    <td>30/11 </td>
                                    <td>12:00</td>
                                    <td>Al Janoub</td>
                                    <td>Não realizado</td>
                                    <td>Sem informação</td>
                                </tr>
                                <tr>
                                    <td>Polônia x Argentina</td>
                                    <td>30/11 </td>
                                    <td>16:00</td>
                                    <td>Porto de Doha</td>
                                    <td>Não realizado</td>
                                    <td>Sem informação</td>
                                </tr>
                                <tr>
                                    <td>Arábia Saudita x México</td>
                                    <td>30/11 </td>
                                    <td>16:00</td>
                                    <td>Lusail</td>
                                    <td>Não realizado</td>
                                    <td>Sem informação</td>
                                </tr>
                                <tr>
                                    <td>Croácia x Bélgica</td>
                                    <td>1/12</td>
                                    <td>12:00</td>
                                    <td>Al Rayyan</td>
                                    <td>Não realizado</td>
                                    <td>Sem informação</td>
                                </tr>
                                <tr>
                                    <td>Canadá x Marrocos</td>
                                    <td>1/12</td>
                                    <td>12:00</td>
                                    <td>Al Thumama</td>
                                    <td>Não realizado</td>
                                    <td>Sem informação</td>
                                </tr>
                                <tr>
                                    <td>Japão x Espanha</td>
                                    <td>1/12</td>
                                    <td>16:00</td>
                                    <td>Khalifa</td>
                                    <td>Não realizado</td>
                                    <td>Sem informação</td>
                                </tr>
                                <tr>
                                    <td>Alemanha x A confirmar</td>
                                    <td>1/12</td>
                                    <td>16:00</td>
                                    <td>Al Bayt</td>
                                    <td>Não realizado</td>
                                    <td>Sem informação</td>
                                </tr>
                                <tr>
                                    <td>Coreia do Sul x Portugal</td>
                                    <td>2/12 </td>
                                    <td>12:00</td>
                                    <td>Education City </td>
                                    <td>Não realizado</td>
                                    <td>Sem informação</td>
                                </tr>
                                <tr>
                                    <td>Gana x Uruguai</td>
                                    <td>2/12 </td>
                                    <td>12:00</td>
                                    <td>Al Janoub</td>
                                    <td>Não realizado</td>
                                    <td>Sem informação</td>
                                </tr>
                                <tr>
                                    <td>Camarões x Brasil</td>
                                    <td>2/12 </td>
                                    <td>16:00</td>
                                    <td> Lusail</td>
                                    <td>Não realizado</td>
                                    <td>Sem informação</td>
                                </tr>
                                <tr>
                                    <td>Sérvia x Suíça</td>
                                    <td>2/12 </td>
                                    <td>16:00</td>
                                    <td>Porto de Doha</td>
                                    <td>Não realizado</td>
                                    <td>Sem informação</td>
                                </tr>
                              
                            </tbody>
                        </table> 
                      </center>
                     </div>
                 </div>
            
          <!--========== FIM DAS PARTIDAS ==========-->  
            
                 
          <!--========== INÍCIO DO PLACAR ==========-->
            
          
          <section id="placar-section" class="page bg-style1">
                
                <div class="page-header-wrapper">
                    <div class="container">
                        <div class="page-header text-center wow fadeInUp" data-wow-delay="0.3s">
                            <h2>PLACAR AO-VIVO</h2>
                            <div class="devider"></div>
                        </div>
                    </div>
                </div>
               

                <!-- API -->
            
                    <div class="container">
                            <div class="col-md-3 col-sm-6" style= "width: 1125px">
                               <div id="wg-api-football-livescore" data-host="v3.football.api-sports.io" data-refresh="60" data-key="52bdc83e957e93a6343e282ebcf1ff57" data-theme="gray" data-show-errors="false" class="api_football_loader"> </div>
                          </div>
                    </div> 

                
          <!--========== FIM DO PLACAR ==========-->
            
          <!--========== INÍCIO DA CLASSIFICAÇÃO ==========-->
            
          
          <section id="classificacao-section" class="page bg-style1">
                
                <div class="page-header-wrapper">
                    <div class="container">
                        <div class="page-header text-center wow fadeInUp" data-wow-delay="0.3s">
                            <h2>CLASSIFICAÇÃO ATUALIZADA</h2>
                            <div class="devider"></div>
                        </div>
                    </div>
                </div>
            
                <!-- API -->
                <div class="container">
                  <div class="col-md-3 col-sm-6" style= "width: 1125px">
                    <div id="wg-api-football-standings" data-host="v3.football.api-sports.io" data-league="1" data-team="" data-season="2018" data-key="52bdc83e957e93a6343e282ebcf1ff57" data-theme="dark" data-show-errors="false" class="api_football_loader"> </div>
                  </div>
                </div>

          <!--========== INICIO PORTFOLIO ==========-->          
          
            <section id="portfolio-section" class="page bg-style1">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="portfolio">
                                <!-- Header -->
                                <div class="page-header-wrapper">
                                    <div class="container">
                                        <div class="page-header text-center wow fadeInDown" data-wow-delay="0.4s">
                                            <h2>SEDES</h2>
                                            <div class="devider"></div>
                                            <p class="subtitle">Conheça mais sobre as últimas sedes da Copa do Mundo!</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Filtro -->
                                <div class="portfoloi_content_area" >
                                    <div class="portfolio_menu" id="filters">
                                        <ul>
                                            <li class="active_prot_menu"><a href="#porfolio_menu" data-filter="*">all</a></li>
                                            <li><a href="#porfolio_menu" data-filter=".russia">rússia</a></li>
                                            <li><a href="#porfolio_menu" data-filter=".brasil" >brasil</a></li>
                                            <li><a href="#porfolio_menu" data-filter=".africadosul">áfrica do sul</a></li>
                                            <li><a href="#porfolio_menu" data-filter=".alemanha">alemanha</a></li>
                                            <li><a href="#porfolio_menu" data-filter=".japãocoreiadosul">japão/coreia do sul</a></li>
                                        </ul>
                                    </div>
                                    <!-- Imagens Rússia -->
                                    <div class="portfolio_content">
                                        <div class="row"  id="portfolio">
                                            <div class="col-xs-12 col-sm-4 russia">
                                                <div class="portfolio_single_content">
                                                    <img src="img/portfolio/p2.jpg" alt="Moscou"/>
                                                    <div>
                                                        <a href="#">MOSCOW</a>
                                                        <span>2018</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-4 russia">
                                                <div class="portfolio_single_content">
                                                    <img src="img/portfolio/p1.jpg" alt="Estádio em Moscou"/>
                                                    <div>
                                                        <a href="#">Matriosca</a>
                                                        <span>O logo da Copa é inspirado na matriosca, uma boneca tradicional russa que é um dos símbolos do país.</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-4 russia">
                                                <div class="portfolio_single_content">
                                                    <img src="img/portfolio/p3.jpg" alt="Brasil em jogo"/>
                                                    <div>
                                                        <a href="#">BRASIL</a>
                                                        <span>O time brasileiro chegou até as quartas de final</span>
                                                    </div>
                                                </div>
                                            </div>
                                           <!-- Imagens Brasil -->
                                            <div class="col-xs-12 col-sm-4 brasil">
                                                <div class="portfolio_single_content">
                                                    <img src="img/portfolio/p5.jpg" alt="Rio de Janeiro"/>
                                                    <div>
                                                        <a href="#">RIO DE JANEIRO</a>
                                                        <span>2014</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-4 brasil">
                                                <div class="portfolio_single_content">
                                                    <img src="img/portfolio/p4.jpg" alt="Vista Cristo"/>
                                                    <div>
                                                        <a href="#">FULECO</a>
                                                        <span>O tatu é um animal típico do Brasil, encontrado em savanas, cerrados abertos e locais com vegetação seca. Essa espécie de tatu tem a capacidade de se enrolar e ficar no formato de uma bola, objeto principal do futebol.</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-4 brasil">
                                                <div class="portfolio_single_content">
                                                    <img src="img/portfolio/p6.jpg" alt="Seleção Brasileira"/>
                                                    <div>
                                                        <a href="#">BRASIL</a>
                                                        <span>O time brasileiro chegou até a semifinal</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Imagens África do Sul -->
                                            <div class="col-xs-12 col-sm-4 africadosul">
                                                <div class="portfolio_single_content">
                                                    <img src="img/portfolio/p7.jpg" alt="title"/>
                                                    <div>
                                                        <a href="#">Johanesburgo</a>
                                                        <span>2010</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-4 africadosul">
                                                <div class="portfolio_single_content">
                                                    <img src="img/portfolio/p8.jpg" alt="title"/>
                                                    <div>
                                                        <a href="#">Primeira Vez</a>
                                                        <span>Pela primeira vez, uma Copa do Mundo foi disputada no continente africano.</span>
                                                        <span>A música escolhida como hino da competição foi Waka-Waka, da cantora Shakira.</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-4 africadosul">
                                                <div class="portfolio_single_content">
                                                    <img src="img/portfolio/p9.jpg" alt="title"/>
                                                    <div>
                                                        <a href="#">BRASIL</a>
                                                        <span>O time brasileiro chegou até as quartas de final</span>
                                                    </div>
                                                </div>
                                            </div>
                                           <!-- Imagens Alemanha -->
                                           <div class="col-xs-12 col-sm-4 alemanha">
                                                <div class="portfolio_single_content">
                                                    <img src="img/portfolio/p10.jpg" alt="Berlim"/>
                                                    <div>
                                                        <a href="#">BERLIM</a>
                                                        <span>2006</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-4 alemanha">
                                                <div class="portfolio_single_content">
                                                    <img src="img/portfolio/p11.jpg" alt="Estádio"/>
                                                    <div>
                                                        <a href="#">RECORD</a>
                                                        <span>A seleção brasileira atingiu o recorde de maior número de vitórias consecutivas em Copas do Mundo.</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-4 alemanha">
                                                <div class="portfolio_single_content">
                                                    <img src="img/portfolio/p12.jpg" alt="Seleção Brasileira"/>
                                                    <div>
                                                        <a href="#">BRASIL</a>
                                                        <span>O time brasileiro chegou até as quartas de final</span>
                                                    </div>
                                                </div>
                                            </div>
                                          <!-- Imagens Japão/Coreia do Sul -->
                                           <div class="col-xs-12 col-sm-4 japãocoreiadosul">
                                                <div class="portfolio_single_content">
                                                    <img src="img/portfolio/p13.jpg" alt="Seoul"/>
                                                    <div>
                                                        <a href="#">SEOUL/TOKYO</a>
                                                        <span>2002</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-4 japãocoreiadosul">
                                                <div class="portfolio_single_content">
                                                    <img src="img/portfolio/p14.jpg" alt="Estádio"/>
                                                    <div>
                                                        <a href="#">DUPLA</a>
                                                        <span>Primeira vez que a Copa do Mundo foi sediada em dois países ao mesmo tempo.</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-4 japãocoreiadosul">
                                                <div class="portfolio_single_content">
                                                    <img src="img/portfolio/p15.jpg" alt="Seleção Brasileira"/>
                                                    <div>
                                                        <a href="#">BRASIL</a>
                                                        <span>O time brasileiro ganhou a disputa, chegando ao seu 5º título de melhor seleção do mundo!</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            
           <!--========== FIM PORTFOLIO ==========-->
            
           <!--========== INÍCIO SELEÇÕES FAVORITAS ==========--> 
            
             <section id="selecoesfav-section" class="page bg-style1">
                
                <div class="page-header-wrapper">
                    <div class="container">
                        <div class="page-header text-center wow fadeInUp" data-wow-delay="0.3s">
                            <h2>SELEÇÕES FAVORITAS</h2>
                            <div class="devider"></div>
                        </div>
                    </div>
                </div>
               

                <!-- Explicação -->
               
                <div class="our-skills">
                    <div class="container">
                        <div class="row">
                        
                            <div class="col-sm-6">
                                <div class="skill-bar wow slideInLeft" data-wow-delay="0.2s">
                                    <div class="progress-lebel">
                                        <h6>Brasil - 84%</h6>
                                    </div>
                                    <div class="progress">
                                      <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 84%;">
                                      </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-sm-6">
                                <div class="skill-bar wow slideInRight" data-wow-delay="0.2s">
                                    <div class="progress-lebel">
                                        <h6>Inglaterra - 81%</h6>
                                    </div>
                                    <div class="progress">
                                      <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 81%;">
                                      </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-sm-6">
                                <div class="skill-bar wow slideInLeft" data-wow-delay="0.4s">
                                    <div class="progress-lebel">
                                        <h6>França - 80%</h6>
                                    </div>
                                    <div class="progress">
                                      <div class="progress-bar" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" style="width: 80%;">
                                      </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-sm-6">
                                <div class="skill-bar wow slideInRight" data-wow-delay="0.4s">
                                    <div class="progress-lebel">
                                        <h6>Espanha - 77%</h6>
                                    </div>
                                    <div class="progress">
                                      <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 77%;">
                                      </div>
                                    </div>
                                </div>
                            </div>
                      </div>
                  </div>
               </div>
            </section>    
            

          <!--========== INÍCIO DO CONTATO ==========-->    

           
            <section id="contact-section" class="page text-white parallax" data-stellar-background-ratio="0.5" style="background-image: url(img/map-bg.png);">
            <div id="contact" class="cover"></div>
            
                <!-- Header -->
                <div class="page-header-wrapper">
                    <div class="container">
                        <div class="page-header text-center wow fadeInDown" data-wow-delay="0.4s">
                            <h2>Contato</h2>
                            <div class="devider"></div>
                            <p class="subtitle">Fale conosco</p>
                        </div>
                    </div>
                </div>
               
                <!-- Form -->
                <div class="contact wow bounceInRight" data-wow-delay="0.4s">
                    <div class="container">
                        <div class="row">
                        
                            <div class="col-sm-6">
                                <div class="contact-info">
                                    <h4>Nosso Contato</h4>
                                    <ul class="contact-address">
                                        <li><i class="fa fa-envelope"></i> copadomundotcc@gmail.com</li>
                                    </ul>
                                </div>
                            </div>
                        
                            <div class="col-sm-6">
                                <div class="contact-form">
                                    <h4>Mande uma mensagem</h4>
                                    <form role="form" action="contato/registra.php" method = "post">
                                        <div class="form-group">
                                            <input type="text" class="form-control input-lg" name = nome placeholder="Seu Nome" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="email" class="form-control input-lg" name = email placeholder="Seu E-mail" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control input-lg" name = assunto  placeholder="Cabeçalho" required>
                                        </div>
                                        <div class="form-group">
                                            <textarea class="form-control input-lg" rows="5" name = conteudo placeholder="Mensagem" required></textarea>
                                        </div>
                                        <button type="submit" class="btn wow bounceInRight" data-wow-delay="0.8s">Enviar</button>
                                    </form>
                                    <?php
                                    if(isset($_SESSION['msg'])){
                                        echo "<h5 style = 'color: green; font-weight: 400; text-align: center; margin: 10px;'>" . $_SESSION['msg'] . "</h5>";
                                        unset($_SESSION['msg']);
                                    }
                                    ?>
                                </div>  
                            </div>
                                                                                
                        </div> 
                    </div> 
                </div>
            </section>
            
            <!--========== FIM DO CONTATO ==========-->
                
            <!--========== INÍCIO DO FOOTER ==========-->        
  
            <footer class="text-off-white">
            
                <div class="footer-top">
                    <div class="container">
                        <div class="row wow bounceInLeft" data-wow-delay="0.4s">
                            <!-- Alunos -->
                            <div class="col-sm-6 col-md-4">
                                <h4>Alunos</h4>
                                <ul class="ft-list">
                                    <li>Ana Clara Alves de Souza</li>
                                    <li>Caroline Cuba da Silva dos Santos Pereira</li>
                                    <li>Guilherme Henrique Chafim Duarte</li>
                                    <li>Lucas Castelano dos Santos</li>
                                    <li>Nicolle de Jesus Pereira da Silva</li>
                                    <li>Sofia Botelho Viegas</li>
                                </ul>
                            </div>
                            <!-- Turma -->
                            <div class="col-sm-6 col-md-4">
                                <h4>Turma</h4> 
                                <p>1303</p> 
                            </div>
                            <!-- Professores -->
                            <div class="col-sm-12 col-md-4">
                                <h4>Professores</h4>
                                <ul class="ft-list">
                                    <li>Antônio Eduardo Brívio</li>
                                    <li>Arnaldo de Carvalho Filho</li>
                                    <li>Marcus Vinícius dos Santos Claro</li>
                                    <li>Sancrey Rodrigues Alves</li>
                                </ul>
                            </div>
                            
                        </div> 
                    </div> 
                </div>
                
                <div class="footer">
                    <div class="container text-center wow fadeIn" data-wow-delay="0.4s">
                        <p class="copyright">Créditos para W3schools, Unika </p>
                        <p class="copyright">Códigos usados apenas para fins acadêmicos.</p>
                    </div>
                </div>

            </footer>
            
        </div>    
            

            <!--========== FIM DO FOOTER ==========-->    

            <a href="#" class="scrolltotop"><i class="fa fa-arrow-up"></i></a> <!-- Scroll to top button -->
                                              

          <!-- Tabela JS -->
          
          <script src="js/partidastabela.js"></script> 
         
          
        <!-- Plugins JS -->
        <script src="inc/jquery/jquery-1.11.1.min.js"></script>
        <script src="inc/bootstrap/js/bootstrap.min.js"></script>
        <script src="inc/owl-carousel/js/owl.carousel.min.js"></script>
        <script src="inc/stellar/js/jquery.stellar.min.js"></script>
        <script src="inc/animations/js/wow.min.js"></script>
        <script src="inc/waypoints.min.js"></script>
        <script src="inc/isotope.pkgd.min.js"></script>
        <script src="inc/classie.js"></script>
        <script src="inc/jquery.easing.min.js"></script>
        <script src="inc/jquery.counterup.min.js"></script>
        <script src="inc/smoothscroll.js"></script>

        <!-- Theme JS -->
        <script src="js/theme.js"></script>
        <script src="js/contador/contagemjs.js"></script>
            
        <!-- APIs -->

        <script type="module" src="https://widgets.api-sports.io/football/1.1.8/widget.js"> </script>
        <script type="module" src="https://widgets.api-sports.io/football/1.1.8/widget.js"> </script> 
        
        <script>
            document.getElementsByClassName("tablink")[0].click();
            function openPerfil(evt, dadoName) {
                var i, x, tablinks;
                x = document.getElementsByClassName("dado");
                for (i = 0; i < x.length; i++) {
                    x[i].style.display = "none";
                }
                tablinks = document.getElementsByClassName("tablink");
                for (i = 0; i < x.length; i++) {
                    tablinks[i].classList.remove("w3-light-grey");
                }
                 document.getElementById(dadoName).style.display = "block";
                evt.currentTarget.classList.add("w3-light-grey");
                }
        </script>


    </body>

    <!-- ========= FIM BODY ========== -->

<?php
echo "
<script>
   document.getElementById('controle').style.display='none'
</script>
";
            
            
if(isset($_SESSION['acesso'])){
echo "
<script>
   document.getElementById('login')
   document.getElementById('deslogar')
   login.style.display='none'
   deslogar.style.display='block'
</script>
";

if ($_SESSION["acesso"]=="Admin"){
echo "
<script>
   document.getElementById('controle').style.display='block'
</script>
";

}
}

if(isset($_SESSION['deslogar'])){
    
unset($_SESSION["deslogar"]);
echo "
<script>  
  document.getElementById('login')
  document.getElementById('deslogar')
  deslogar.style.display='none'
  login.style.display='block'  
</script> ";
    
}
?>
     
</html>