<?php

 session_start();

   if(isset($_SESSION['nome'])){
    $nome=$_SESSION['nome'];
   }else {
    $nome='usuário não logado';   
   }

?>

<!DOCTYPE html>

<html lang="pt-br">

<!DOCTYPE html>

<html lang="pt-br">
  
<!--========== INÍCIO HEAD ==========-->

  <head>
    
    <!-- Informações base -->    

    <meta charset="utf-8">
    <title>Bola Mundi - História da Copa</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Fonte (google) -->
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    
    <!-- Plugin CSS -->
    
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Base CSS -->
    
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/base.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/lightbox.css">

  </head>
  
  <!--========== FIM HEAD ==========-->

  <!--========== INÍCIO BODY ==========-->
  
  <body>
    
  <!--========== INÍCIO HEADER ==========-->    

  <!-- Início header -->
   <header class="header-area header-sticky">
      <div class="container">
          <div class="row">
              <div class="col-12">
                      <nav class="main-nav">
                      <a href="https://bolamundi.x10.mx" class="logo"> História da Copa </a>
                  </nav>
              </div>
          </div>
      </div>
   </header>
    
  <!--========== FIM HEADER ==========-->    
    
   <!-- Vídeo -->
   <section class="section main-banner" id="top" data-section="section1">
      <video autoplay muted loop id="bg-video">
          <source src="assets/images/video.mp4" type="video/mp4" />
      </video>
      <!-- Mensagem de boas vindas -->
      <div class="video-overlay header-text">
          <div class="container">
            <div class="row">
              <div class="col-lg-12">
                <div class="caption">
                 <h6>Olá, <?php echo $nome; ?>!</h6>
                 <h2>BEM-VINDO(A) A HISTORIA DA COPA </h2>
                 <p>Paz no futuro e glória no passado</p>
                </div>
              </div>
            </div>
          </div>
      </div>
   </section>

  <!--========== INÍCIO HISTÓRICO ==========-->    
    
  <section class="upcoming-meetings">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="section-heading">
            <h2>Histórico</h2>
          </div>
        </div>
        <!-- Primeira caixa -->
        <div class="col-lg-4">
          <div class="categories">
            <h4>Introdução</h4>
            <p>A primeira Copa do Mundo, realizada no Uruguai em 1930, foi resultado de um esforço de longo prazo da FIFA para criar a competição. A FIFA é naturalmente responsável pela profissionalização e popularização do futebol mundial, e a Copa do Mundo teve um papel muito importante nisso. A FIFA surgiu no início do século XX, em 1904, com os seguintes países: Bélgica, Dinamarca, França, Holanda, Espanha, Suécia e Suíça.</p>
            <p>O primeiro esforço para sediar a Copa do Mundo foi realizado por um holandês chamado Karl Anton Wilhelm Hirschmann. No entanto, o maior responsável por tornar a Copa do Mundo possível é o francês Jules Rimet, que foi presidente da FIFA por mais de 30 anos.</p>
          </div>
        </div>
        <!-- Segunda caixa -->        
        <div class="col-lg-8">
          <div class="row">
            <div class="col-lg-6">
              <div class="meeting-item">
                <div class="down-content">>
                  <h4>Fatores e decisão</h4>
                  <p>Os fatores que determinaram a probabilidade de sediar a Copa do Mundo foram o sucesso dos jogos de futebol masculino nas Olimpíadas de 1924 e 1928 (ambos vencidos pelo Uruguai). Essas partidas olímpicas de futebol são organizadas em parceria pela FIFA e pelo Comitê Olímpico Internacional (COI). </p>
                  <p>A decisão de organizar a Copa do Mundo ocorreu em duas conferências: uma em Amsterdã (Holanda) e outra em Zurique (Suíça), ambas em 1928, e a escolha da sede foi feita em 1929. A candidatura uruguaia superou largamente uma série de candidatos europeus, de fato, os uruguaios concordaram em pagar os inscritos, além de autorizar a construção de um enorme estádio para o evento.</p>
                </div>
              </div>
            </div>
            <!-- Terceira caixa -->
            <div class="col-lg-6">
              <div class="meeting-item">
                <div class="thumb">
                <div class="down-content">
                  <h4>Crise econômica e vencedor </h4>
                  <p> No entanto, a primeira Copa do Mundo foi severamente prejudicada pela crise de 1929, também conhecida como Grande Depressão. A crise econômica que varre o mundo fez com que vários times europeus relutassem em jogar. Assim, a primeira Copa contou com a presença de treze seleções: Europa - Bélgica, Romênia, Iugoslávia e França, América do Norte - Estados Unidos e México, e América do Sul - Argentina, Bolívia, Brasil, Chile, Paraguai, Peru e Uruguai. </p>
                  <p> Na edição de 1930, os uruguaios confirmaram a preferência e venceram a partida com quatro vitórias. O uruguaio venceu Peru, Romênia, Iugoslávia e enfrentou a Argentina na final, vencendo por 4x2. A participação dos brasileiros tem sido bastante baixa, principalmente devido à divisão entre jogadores do São Paulo boicotando a seleção brasileira. O Brasil perdeu para a Iugoslávia por 2x1 na primeira fase e a Bolívia por 4x0. </p> 
                </div>
              </div>
            </div>
              
                </div>
              </div>
            </div>
          </div>
        </div>
     
  </section>
    
  <!--========== FIM HISTÓRICO ==========-->
    
  <!--========== INICIO GRANDES JOGADORES ==========-->          

  <section class="apply-now" id="apply">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 align-self-center">
          <div class="row">
            <!-- Container 1 -->
            <div class="col-lg-12">
              <div class="item">
                <h3>VOCÊ SABIA?</h3>
                <p>Em 1930, um jogador chamou a atenção na Copa do 
                 Uruguai. Seu nome era Héctor Castro e por não possuir 
                  uma das mãos e ter uma notável habilidade com a bola
                no pé, ganhou o apelido de "o divino manco".</p>
              </div>
            </div>
            <!-- Container 2 -->
            <div class="col-lg-12">
              <div class="item">
                <h3>Young Pelé</h3>
                <p>O jogador de futebol mais jovem a marcar um gol na Copa do Mundo foi o brasileiro Pelé. Ele tinha apenas 17 anos e marcou um gol contra a seleção do País de Gales, em 1958.</p>
              </div>
            </div>
          </div>
        </div>
        
        <div class="col-lg-6">
          <div class="accordions is-first-expanded">
            <!-- Jogadores famosos mundiais -->
            <article class="accordion">
                <div class="accordion-head">
                    <span>MUNDIAIS</span>
                    <span class="icon">
                        <i class="icon fa fa-chevron-right"></i>
                    </span>
                </div>
                <div class="accordion-body">
                    <div class="content">
                      <h3>Maradona</h3>
                        <p>Diego Armando Maradona, foi um atacante argentino. Considerado um dos maiores futebolistas do mundo. Sua primeira convocação para a Seleção Argentina foi em 1977, aos 17 anos. Em 1979 foi eleito o melhor jogador do torneio. Liderou a vitória da Copa do Mundo de 1986, marcando o Gol do Século.</p>
                      <h3>Franz Beckenbauer</h3>
                        <p>Franz Anton Albert Beckenbauer é um ex-futebolista alemão que atuava como zagueiro, líbero, volante e meia. Venceu 2 Bolas de Ouro, 1972 e 1976. Participou de 3 Copas do Mundo e levantou a taça em 1974 junto com a seleção alemã. </p>
                      <h3>Gerd Müller</h3>
                        <p>Gerhard Müller, foi um futebolista alemão. É considerado o maior centro-avante da história do futebol europeu, e um dos maiores do futebol mundial. Tendo como diferencial a sua velocidade de movimentos em pequenos espaços e seu chute preciso. Esteve nas edições da Copa do Mundo de 1970 e 1974, em duas Copas somou 14 gols sendo considerado o maior goleador de todas as Copas do Mundo, até que aparecesse Ronaldo Fenômeno.</p>
                      <h3>Johan Cruijff</h3>
                        <p>Hendrik Johannes Cruijff, mais conhecido como Johan Cruijff, Johan Cruyff, ou simplesmente Cruijff foi um futebolista e técnico neerlandês que atuava como meia e atacante. É considerado pela IFFHS (Federação Internacional de História e Estatísticas do Futebol) como melhor futebolista europeu do século XX e um dos maiores jogadores da história do futebol. Implementou na Seleção Holandesa um esquema em que os jogadores faziam muitas funções no campo sem prejudicar a original (esquema tático do “carrossel”), um dos motivos para a seleção ser chamada de Laranja Mecânica.</p>
                      <h3>Just Fontaine</h3>
                        <p>Just Fontaine é um ex-futebolista francês nascido no Marrocos, então colônia da França. Atuava como atacante e se tornou muito importante na Copa do Mundo de 1958, sendo o único jogador que marcou 13 gols em uma única Copa do Mundo. Ele tinha como maiores características sua velocidade, dribles curtos, chutes certeiros e, embora não fosse um jogador muito alto, um ótimo cabeceio.</p>
                      <h3>Miroslav Klose</h3> 
                        <p>Miroslav Josef Klose, mais conhecido como Miroslav Klose, ou simplesmente Klose, é um ex-futebolista que nasceu na Polônia, mas se naturalizou alemão e que atuava como atacante. Atualmente é o maior artilheiro da Copa do Mundo, com 16 gols pela Alemanha. Ronaldo Fenômeno, o segundo maior artilheiro da Copa do Mundo, com 15 gols pelo Brasil. Pelé marcou 12 gols para o Brasil na competição.</p>
                    </div>
                </div>
            </article>
            <!-- Jogadores famosos brasileiros -->
            <article class="accordion">
                <div class="accordion-head">
                    <span>BRASILEIROS</span>
                    <span class="icon">
                        <i class="icon fa fa-chevron-right"></i>
                    </span>
                </div>
                <div class="accordion-body">
                    <div class="content">
                      <h3>Pelé</h3>
                       <p>Edson Arantes do Nascimento, mais conhecido como o Rei Pelé, atuava como atacante. Ele é amplamente considerado como um dos maiores joagadores de futebol do mundo. Participou de 3 das 5 Copas do Mundo que o Brasil ganhou até então, que são as de 1958, 1962 e a de 1970 e fez mais de mil gols em toda a sua carreira.</p>
                      <h3>Mané Garrincha</h3>
                       <p>Manoel Francisco dos Santos, o Mané Garrincha ou simplesmente Garrincha foi um futebolista brasileiro. É considerado por muitos o mais célebre ponta-direita e o melhor driblador da história do futebol. Participou das edições da Copa do Mundo de 1958 e de 1962, saindo vitorioso com a seleção brasileira.</p>
                      <h3>Zagallo</h3>
                       <p>Mário Jorge Lobo Zagallo é um ex-treinador e ex-futebolista brasileiro que atuava como ponta-esquerda. Já vitorioso pela seleção brasileira como jogador em 1958 e 1962, ganhou a Copa do Mundo como treinador em 1970 (sendo, até hoje, uma das três únicas pessoas a conquistarem a competição como jogador e como treinador) e depois como coordenador técnico em 1994, totalizando quatro conquistas em três funções diferentes.</p>
                      <h3>Nilton Santos</h3>
                       <p>Nilton dos Santos, mais conhecido como Nilton Santos, foi um futebolista brasileiro que atuava como lateral-esquerdo. Em 2000, foi eleito pela FIFA como o melhor lateral-esquerdo de todos os tempos. Participou da Seleção Brasileira nos campeonatos mundiais de 1950, 1954, 1958 e 1962, sendo bicampeão nas duas últimas. Era chamado de "A Enciclopédia" por conta dos conhecimentos sobre o futebol e por ser completo como jogador, foi o pioneiro em arriscar subidas ao ataque através da lateral do campo. Inovou a posição de lateral-esquerdo.</p>
                      <h3>Vavá</h3>
                       <p>Edvaldo Izídio Neto, conhecido por Vavá, foi um futebolista brasileiro que atuava como atacante. Também apelidado de Peito de Aço por sua forma corajosa de jogar. Na Copa do Mundo de 1958 começou como reserva, mas substituiu Mazzola ao longo da competição, marcando 5 gols que foram decisivos para o Brasil conquistar o seu primeiro título mundial. Por seu vigor físico, incrível reflexo e faro de gol, foi chamado de "Leão da Copa". Foi um dos artilheiros da Copa do Mundo de 1962 com 4 gols e bicampeão do mundo.</p>
                      <h3>Ronaldo Fenômeno</h3>
                       <p>Ronaldo Luís Nazário de Lima, mais conhecido como Ronaldo, Ronaldo Fenômeno ou simplesmente Fenômeno, é um empresário e ex-futebolista brasileiro que atuava como atacante, reconhecido como um dos melhores futebolistas de todos os tempos. Foi campeão na copa do Mundo em 1994. Atrás apenas de Pelé e Neymar, é o terceiro maior goleador da história da Seleção Brasileira, com 67 gols, sendo durante 8 anos, o maior goleador da história das Copas, com 15 gols, recorde superado apenas em 2014 pelo alemão Miroslav Klose.</p>
                    </div>
                </div>
            </article>
           
        </div>
        </div>
      </div>
    </div>
  </section>
    
  <!--========== FIM GRANDES JOGADORES ==========-->  
    
  <!--========== INICIO VENCEDORES ==========-->                

  <section class="our-courses" id="courses">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="section-heading">
            <h2>VENCEDORES DE TODAS AS COPAS DO MUNDO</h2>
          </div>
        </div>
        <!-- Copas -->
        <div class="col-lg-12">
          <div class="owl-courses-item owl-carousel">
           <!-- 1 -->
            <div class="item">
              <img src="bandeiras/bandeiraUruguai.png" alt="Course Two">
              <div class="down-content">
                <h4>Copa do Mundo de 1930</h4>
                <h4>Uruguai 4x2 Argentina</h4>
                <div class="info">
                  <div class="row">
                    <div class="col-8">
                      <ul>
                        <li><i class="fa fa-star"></i></li>
                      </ul>
                    </div>
                    <div class="col-4">
                       <span>URU</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- 2 -->
            <div class="item">
              <img src="bandeiras/bandeiraItalia.jpg" alt="Course Two">
              <div class="down-content">
                <h4>Copa do Mundo de 1934</h4>
                <h4>Itália 2x1 Checoslováquia</h4>
                <div class="info">
                  <div class="row">
                    <div class="col-8">
                      <ul>
                        <li><i class="fa fa-star"></i></li>
                      </ul>
                    </div>
                    <div class="col-4">
                       <span>ITA</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- 3 -->
            <div class="item">
              <img src="bandeiras/bandeiraItalia.jpg" alt="">
              <div class="down-content">
                <h4>Copa do Mundo de 1938</h4>
                <h4>Itália 4x2 Hungria</h4>
                <div class="info">
                  <div class="row">
                    <div class="col-8">
                      <ul>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                      </ul>
                    </div>
                    <div class="col-4">
                       <span>ITA</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- 4 -->            
            <div class="item">
              <img src="bandeiras/bandeiraUruguai.png" alt="">
              <div class="down-content">
                <h4>Copa do Mundo de 1950</h4>
                <h4>Uruguai 2x1 Brasil</h4>
                <div class="info">
                  <div class="row">
                    <div class="col-8">
                      <ul>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                      </ul>
                    </div>
                    <div class="col-4">
                       <span>URU</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- 5 -->            
            <div class="item">
              <img src="bandeiras/bandeiraAlemanha.jpg" alt="">
              <div class="down-content">
                <h4>Copa do Mundo de 1954</h4>
                <h4>Alemanha Ocidental 3x2 Hungria</h4>
                <div class="info">
                  <div class="row">
                    <div class="col-8">
                      <ul>
                        <li><i class="fa fa-star"></i></li>
                      </ul>
                    </div>
                    <div class="col-4">
                       <span>ALE</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- 6 -->            
            <div class="item">
              <img src="bandeiras/bandeiraBrasil.jpg" alt="">
              <div class="down-content">
                <h4>Copa do Mundo de 1958</h4>
                <h4>Brasil 5x2 Suécia</h4>
                <div class="info">
                  <div class="row">
                    <div class="col-8">
                      <ul>
                        <li><i class="fa fa-star"></i></li>
                      </ul>
                    </div>
                    <div class="col-4">
                       <span>BRA</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- 7 -->
            <div class="item">
              <img src="bandeiras/bandeiraBrasil.jpg" alt="">
              <div class="down-content">
                <h4>Copa do Mundo de 1962</h4>
                <h4>Brasil 3x1 Checoslováquia</h4>
                <div class="info">
                  <div class="row">
                    <div class="col-8">
                      <ul>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                      </ul>
                    </div>
                    <div class="col-4">
                       <span>BRA</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- 8 -->            
            <div class="item">
              <img src="bandeiras/bandeiraInglaterra.png" alt="">
              <div class="down-content">
                <h4>Copa do Mundo de 1966</h4>
                <h4>Inglaterra 4x2 Alemanha Oc.</h4>
                <div class="info">
                  <div class="row">
                    <div class="col-8">
                      <ul>
                        <li><i class="fa fa-star"></i></li>
                      </ul>
                    </div>
                    <div class="col-4">
                       <span>ING</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- 9 -->            
            <div class="item">
              <img src="bandeiras/bandeiraBrasil.jpg" alt="">
              <div class="down-content">
                <h4>Copa do Mundo de 1970</h4>
                <h4>Brasil 4x1 Itália</h4>
                <div class="info">
                  <div class="row">
                    <div class="col-8">
                      <ul>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                      </ul>
                    </div>
                    <div class="col-4">
                       <span>BRA</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- 10 -->
            <div class="item">
              <img src="bandeiras/bandeiraAlemanha.jpg" alt="">
              <div class="down-content">
                <h4>Copa do Mundo de 1974</h4>
                <h4>Alemanha Ocidental 2x1 Países Baixos</h4>
                <div class="info">
                  <div class="row">
                    <div class="col-8">
                      <ul>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                      </ul>
                    </div>
                    <div class="col-4">
                       <span>ALE</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- 11 -->            
            <div class="item">
              <img src="bandeiras/bandeiraArgetina.jpg" alt="">
              <div class="down-content">
                <h4>Copa do Mundo de 1978</h4>
                <h4>Argentina 3x1 Países Baixos</h4>
                <div class="info">
                  <div class="row">
                    <div class="col-8">
                      <ul>
                        <li><i class="fa fa-star"></i></li>
                      </ul>
                    </div>
                    <div class="col-4">
                       <span>ARG</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- 12 -->        
            <div class="item">
              <img src="bandeiras/bandeiraItalia.jpg" alt="">
              <div class="down-content">
                <h4>Copa do Mundo de 1982</h2>
                <h4>Itália 3x1 Alemanha Ocidental</h4>
                <div class="info">
                  <div class="row">
                    <div class="col-8">
                      <ul>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                      </ul>
                    </div>
                    <div class="col-4">
                       <span>ITA</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- 13 -->      
            <div class="item">
              <img src="bandeiras/bandeiraArgentina.jpg" alt="">
              <div class="down-content">
                <h4>Copa do Mundo de 1986</h4>
                <h4>Argentina 3x2 Alemanha Oc.</h4>
                <div class="info">
                  <div class="row">
                    <div class="col-8">
                      <ul>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                      </ul>
                    </div>
                    <div class="col-4">
                       <span>ARG</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- 14 -->        
            <div class="item">
              <img src="bandeiras/bandeiraAlemanha.jpg" alt="">
              <div class="down-content">
                <h4>Copa do Mundo de 1990</h4>
                <h4>Alemanha Oc. 1x0 Argentina</h4>
                <div class="info">
                  <div class="row">
                    <div class="col-8">
                      <ul>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                      </ul>
                    </div>
                    <div class="col-4">
                       <span>ALE</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- 15 -->        
            <div class="item">
              <img src="bandeiras/bandeiraBrasil.jpg" alt="">
              <div class="down-content">
                <h4>Copa do Mundo de 1994</h4>
                <h4>Brasil 0x0 Itália (3x2 pênaltis)</h4>
                <div class="info">
                  <div class="row">
                    <div class="col-8">
                      <ul>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                      </ul>
                    </div>
                    <div class="col-4">
                       <span>BRA</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- 16 -->        
            <div class="item">
              <img src="bandeiras/bandeiraFrança.png" alt="">
              <div class="down-content">
                <h4>Copa do Mundo de 1998</h4>
                <h4>França 3x0 Brasil</h4>
                <div class="info">
                  <div class="row">
                    <div class="col-8">
                      <ul>
                        <li><i class="fa fa-star"></i></li>
                      </ul>
                    </div>
                    <div class="col-4">
                       <span>FRA</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- 17 -->        
            <div class="item">
              <img src="bandeiras/bandeiraBrasil.jpg" alt="">
              <div class="down-content">
                <h4>Copa do Mundo de 2002</h4>
                <h4>Brasil 2x0 Alemanha</h4>
                <div class="info">
                  <div class="row">
                    <div class="col-8">
                      <ul>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                      </ul>
                    </div>
                    <div class="col-4">
                       <span>BRA</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- 18 -->        
            <div class="item">
              <img src="bandeiras/bandeiraItalia.jpg" alt="">
              <div class="down-content">
                <h4>Copa do Mundo de 2006</h4>
                <h4>Itália 1x1 França (5x3 pênaltis)</h4>
                <div class="info">
                  <div class="row">
                    <div class="col-8">
                      <ul>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                      </ul>
                    </div>
                    <div class="col-4">
                       <span>ITA</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- 19 -->        
            <div class="item">
              <img src="bandeiras/bandeiraEspanha.png" alt="">
              <div class="down-content">
                <h4>Copa do Mundo de 2010</h4>
                <h4>Espanha 1x0 Holanda</h4>
                <div class="info">
                  <div class="row">
                    <div class="col-8">
                      <ul>
                        <li><i class="fa fa-star"></i></li>
                      </ul>
                    </div>
                    <div class="col-4">
                       <span>SPA</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- 20 -->        
            <div class="item">
              <img src="bandeiras/bandeiraAlemanha.jpg" alt="">
              <div class="down-content">
                <h4>Copa do Mundo de 2014</h4>
                <h4>Alemanha 1x0 Argentina</h4>
                <div class="info">
                  <div class="row">
                    <div class="col-8">
                      <ul>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                      </ul>
                    </div>
                    <div class="col-4">
                       <span>ALE</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- 21 -->        
            <div class="item">
              <img src="bandeiras/bandeiraFrança.png" alt="">
              <div class="down-content">
                <h4>Copa do Mundo de 2018</h4> 
                <h4>França 4x2 Croácia</h4>
                <div class="info">
                  <div class="row">
                    <div class="col-8">
                      <ul>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                      </ul>
                    </div>
                    <div class="col-4">
                       <span>FRA</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- 22 -->        
            <div class="item">
              <img src="bandeiras/bandeiraBrasil.jpg" alt="">
              <div class="down-content">
                <h4>Copa do Mundo de 2022</h4>
                <h4>Brasil 20x0 França</h4>
                <div class="info">
                  <div class="row">
                    <div class="col-8">
                      <ul>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                      </ul>
                    </div>
                    <div class="col-4">
                       <span>2022</span>
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
    
  <!--========== FIM VENCEDORES ==========-->                  

    <!-- Plugins JS -->
    
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    
    <!-- Base JS -->    

    <script src="assets/js/isotope.min.js"></script>
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/lightbox.js"></script>
    <script src="assets/js/tabs.js"></script>
    <script src="assets/js/video.js"></script>
    <script src="assets/js/slick-slider.js"></script>
    <script src="assets/js/custom.js"></script>
    
    <script>
      
        //according to loftblog tut
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