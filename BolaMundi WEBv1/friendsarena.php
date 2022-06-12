<?php 
session_start();
if(isset($_SESSION['nome'])){
$nome=$_SESSION['nome'];
    
}else {
    $nome='usuário não logado';
    
}

?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="TemplateMo">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <title>Bola Mundi - Friends Arena</title>


    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">



    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-edu-meeting.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/lightbox.css">
    
</head>

<body>


  <header class="header-area header-sticky">
      <div class="container">
          <div class="row">
              <div class="col-12">
                  <nav class="main-nav">
                   
                      <a href="index.php" class="logo">
                          Friends Arena
                      </a>
                      
                  </nav>
              </div>
          </div>
      </div>
  </header>

  <section class="section main-banner" id="top" data-section="section1">
      <video autoplay muted loop id="bg-video">
          <source src="assets/images/course-video.mp4" type="video/mp4" />
      </video>

      <div class="video-overlay header-text">
          <div class="container">
            <div class="row">
              <div class="col-lg-12">
                <div class="caption">
              <h6>Olá, <?php echo $nome; ?>!</h6>
              <h2>BEM-VINDO(A) AO FRIENDS ARENA</h2>
              <p>Onde "Uma jogada pode mudar o mundo" - Zico</p>
          </div>
              </div>
            </div>
          </div>
      </div>
  </section>


  <section class="services">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="owl-service-item owl-carousel">
          
            <div class="item">
              <div class="icon">
                <img src="assets/images/service-icon-01.png" alt="">
              </div>
              <div class="down-content">
                <h4>Instituto Neymar Jr</h4>
                <a href="https://www.institutoneymarjr.org.br/doe/">Doe</a>
              </div>
            </div>
            
            <div class="item">
              <div class="icon">
                <img src="assets/images/service-icon-02.png" alt="">
              </div>
              <div class="down-content">
                <h4>Fundação Gol de Letra</h4>
                <a href="https://doe.goldeletra.org.br/doe/">Doe</a>
              </div>
            </div>
            
            <div class="item">
              <div class="icon">
                <img src="assets/images/service-icon-03.png" alt="">
              </div>
              <div class="down-content">
                <h4>Instituto Bola Pra Frente</h4>
                <a href="https://bolaprafrente.org.br/2019/doe-online/">Doe</a>
              </div>
            </div>
            
            <div class="item">
              <div class="icon">
                <img src="assets/images/service-icon-02.png" alt="">
              </div>
              <div class="down-content">
                <h4>Instituto Futebol de Rua</h4>
                 <a href="https://www.futebolderua.org/voluntariado">Doe</a>
              </div>
            </div>
            
          </div>
        </div>
      </div>
    </div>
  </section>
  
<section class="upcoming-meetings" id="meetings">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="section-heading">
            <h2>INSTITUIÇÕES</h2>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="categories">
            <h4>Márcio Augusto</h4>
            <p>Um jogo de Futebol não é apenas 22 jogadores medindo suas forças e habilidades, mas sim um jogo que unem milhões de pessoas por amor a uma determinada equipe.</p>
          </div>
        </div>
        <div class="col-lg-8">
          <div class="row">
            <div class="col-lg-6">
              <div class="meeting-item">
                <div class="thumb">
                  <div class="price">
                    <span>DESDE 2014</span>
                  </div>
                  <a href="https://www.institutoneymarjr.org.br/"><img src="https://www.abcdacomunicacao.com.br/wp-content/uploads/instituto_neymar_jr.jpg"></a>
                </div>
                <div class="down-content">
                  <a href="https://www.institutoneymarjr.org.br/"><h4>INSTITUTO NEYMAR JR</h4></a>
                  <p>O Instituto Projeto Neymar Jr. é uma associação civil sem fins lucrativos, que tem por objetivo ampliar as oportunidades de crianças, adolescentes e suas famílias, que vivem em situação de vulnerabilidade social, por meio da educação, cultura, esporte e saúde. Sua história começou em 2010, e após dois anos, ele foi constituído. Foram diversas etapas de construção até sua inauguração, ocorrida em dezembro de 2014. Atualmente são atendidas milhares de crianças e jovens, em uma área de 8.400 m², com impacto em mais de 10.000 pessoas. O instituto está localizado no Jardim Glória, na Praia Grande, comunidade que possui diversas dificuldades e limitações já vivenciadas por Neymar Jr. e sua família, que foram moradores do bairro.</p>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="meeting-item">
                <div class="thumb">
                  <div class="price">
                    <span>DESDE 1998</span>
                  </div>
                  <a href="https://www.goldeletra.org.br/"><img src="data:image/png;base64,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"></a>
                </div>
                <div class="down-content">
                  <a href="https://www.goldeletra.org.br/"><h4>FUNDAÇÃO GOL DE LETRA</h4></a>
                  <p>Criada em 10 de dezembro de 1998, Dia Internacional dos Direitos Humanos, a Fundação Gol de Letra é uma organização da sociedade civil, sem fins lucrativos, que nasceu do sonho dos tetracampeões mundial de futebol Raí e Leonardo de contribuir com a educação de crianças e jovens de comunidades socialmente vulneráveis, para que tenham mais oportunidades e perspectivas de vida.</p>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="meeting-item">
                <div class="thumb">
                  <div class="price">
                    <span>DESDE 2000</span>
                  </div>
                  <a href="https://bolaprafrente.org.br/2019/"><img src="https://storage.googleapis.com/atados-v3/user-uploaded/images/b8be9182-4a3a-4b48-bf45-b137afdb9d22.png"></a>
                </div>
                <div class="down-content">
                  <a href="https://bolaprafrente.org.br/2019/"><h4>INSTITUTO BOLA PRA FRENTE</h4></a>
                  <p>O Bola Pra Frente é uma Organização da Sociedade Civil fundada em 29 de junho de 2000 pelo tetracampeão mundial de futebol Jorginho. Há 18 anos atuamos em comunidades socialmente vulneráveis utilizando o esporte e a cultura como ferramentas impulsionadoras da promoção social dos nossos beneficiários. Nosso objetivo é promover a educação integral por meio do esporte e da cultura, e hoje atendemos a 430 crianças e adolescentes, entre 06 e 17 anos, regularmente matriculados na rede pública de ensino e que sejam moradores do Complexo do Muquiço, Zona Norte do Rio de Janeiro.</p>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="meeting-item">
                <div class="thumb">
                  <div class="price">
                    <span>DESDE 2006</span>
                  </div>
                  <a href="https://www.futebolderua.org/"><img src="https://www.guarulhos.sp.gov.br/sites/default/files/futebol%20de%20rua.jpeg"></a>
                </div>
                <div class="down-content">
                 
                  <a href="https://www.futebolderua.org/"><h4>INSTITUTO FUTEBOL DE RUA</h4></a>
                  <p>O Instituto Futebol de Rua é uma organização sem fins lucrativos, com sede em Curitiba, e núcleos pelo Brasil, que desde 2006 utiliza o esporte, a educação e a cultura como ferramentas para o desenvolvimento humano. A missão é ser agente de transformação social atuando em prol da inclusão esportiva, cultural e social de crianças e adolescentes em situação de vulnerabilidade social Além de agir em prol da formação profissional de jovens aprendizes.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  <section class="our-facts">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="row">
            <div class="col-lg-12">
              <h2>SOBRE A FRIENDS ARENA</h2>
            </div>
            <div class="col-lg-6">
              <div class="row">
                <div class="col-12">
                  <div class="count-area-content percentage">
                    <div class="count-title">Localizada no município de Solna, nos arredores de Estocolmo, na Suécia.</div>
                  </div>
                </div>
                <div class="col-12">
                  <div class="count-area-content">
                    <div class="count-title">A arena, inaugurada em 2012, tem capacidade para 50 mil torcedores.</div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="row">
                <div class="col-12">
                  <div class="count-area-content new-students">
                    <div class="count-title">Era chamado de Rasunda, estádio em que o Brasil venceu o Mundial pela primeira vez contra os suecos na Copa do Mundo de 1958.</div>
                  </div>
                </div> 
                <div class="col-12">
                  <div class="count-area-content">
                    <div class="count-title">Atualmente, o objetivo do local é alertar a população sueca contra o bullying sofrido por 66 mil crianças no país a cada ano.</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div> 
        <div class="col-lg-6 align-self-center">
          <div class="video">
            <a href="https://www.youtube.com/watch?v=3A3YbP9_Ty8" target="_blank"><img src="assets/images/play-icon.png" alt=""></a>
          </div>
        </div>
      </div>
    </div>
  </section>


    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="assets/js/isotope.min.js"></script>
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/lightbox.js"></script>
    <script src="assets/js/tabs.js"></script>
    <script src="assets/js/video.js"></script>
    <script src="assets/js/slick-slider.js"></script>
    <script src="assets/js/custom.js"></script>
    <script>
       
        $('.nav li:first').addClass('active');

        var showSection = function showSection(section, isAnimate) {
          var
          direction = section.replace(/#/, ''),
          reqSection = $('.section').filter('[data-section="' + direction + '"]'),
          reqSectionPos = reqSection.offset().top - 0;

          if (isAnimate) {
            $('body, html').animate({
              scrollTop: reqSectionPos },
            800);
          } else {
            $('body, html').scrollTop(reqSectionPos);
          }

        };

        var checkSection = function checkSection() {
          $('.section').each(function () {
            var
            $this = $(this),
            topEdge = $this.offset().top - 80,
            bottomEdge = topEdge + $this.height(),
            wScroll = $(window).scrollTop();
            if (topEdge < wScroll && bottomEdge > wScroll) {
              var
              currentId = $this.data('section'),
              reqLink = $('a').filter('[href*=\\#' + currentId + ']');
              reqLink.closest('li').addClass('active').
              siblings().removeClass('active');
            }
          });
        };

        $('.main-menu, .responsive-menu, .scroll-to-section').on('click', 'a', function (e) {
          e.preventDefault();
          showSection($(this).attr('href'), true);
        });

        $(window).scroll(function () {
          checkSection();
        });
    </script>
</body>

</body>
</html>