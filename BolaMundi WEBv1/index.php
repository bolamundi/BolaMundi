<?php 
session_start();

if(isset($_SESSION['acesso'])){
 
  $logado=$_SESSION['acesso'];
  //Recebe o nome do arquivo login.php e vai para a var logado
}

?>

<html lang="pt-br">
    

 <head>
     
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">

     <title>Bola Mundi</title>
     
     <link rel="shortcut icon" href="login2/images/icons/bolamundilogo.ico"/>
     <link rel="preconnect" href="https://fonts.googleapis.com">
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
     <link href="https://fonts.googleapis.com/css2?family=Karla:ital,wght@0,300;0,400;0,600;1,300&display=swap" rel="stylesheet">
	 
     <link href="css/bootstrap.min.css" rel="stylesheet">
     <link href="css/bootstrap-icons.css" rel="stylesheet">
     <link href="css/magnific-popup.css" rel="stylesheet">
     <link href="css/tooplate-tween-agency.css" rel="stylesheet">
     
       <script src="js/jquery.min.js"></script>
        <script src="js/popper.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.backstretch.min.js"></script>
        <script src="js/jquery.magnific-popup.min.js"></script>
        <script src="js/magnific-popup-options.js"></script>
        <script src="js/click-scroll.js"></script>
        <script src="js/custom.js"></script>

     
 </head>

 <body>

  

     <nav class="navbar fixed-top navbar-expand-lg">
     <div class="container">
        <a href="index.html" class="navbar-brand">
         <i class="bi-layers"></i>Bola Mundi
        </a>
		
	 	

     <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-lg-5">
           <li class="nav-item">
               <a class="nav-link" href="#section_1">Início</a>
           </li>

           <li class="nav-item">
                <a class="nav-link" href="#section_2">História</a>
           </li>

           <li class="nav-item">
                <a class="nav-link" href="#section_3">Seleções</a>
           </li>

           <li class="nav-item">
                 <a class="nav-link" href="#section_4">Partidas</a>
           </li>

           <li class="nav-item">
                 <a class="nav-link" href="#section_5">Classificação</a>
           </li>

           <li class="nav-item">
                 <a class="nav-link" href="friendsarena.php">Friends Arena</a>
           </li>
           
           
           <li class="nav-item">
                 <a class="nav-link" href="#loja.php">Loja</a>
           </li>
           
        </ul>
        
             <a href="login2/index.html" id="login"  style="color:white; float: right;">Login</a>
        <a  href="login2/deslogar.php" id="deslogar"  style="color:white; float: right; display:none;">Deslogar </a>
       
       
       </div>
	   
      </div>
	  
     </nav>

     
	 
        <main>

           <section class="hero d-flex justify-content-center align-items-center" id="section_1">
		   
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-12">
                            <div class="heroText">
                                <h1 class="text-white mb-lg-5 mb-4">Bola Mundi...algo profundo</h1>
                                <a href="https://www.youtube.com/watch?v=AYaHuZ4BB6Y" class="popup-youtube play-icon-wrap d-flex align-items-center">
                                    <i class="bi-play play-icon"></i>
                                    <small>1:49 Minutes</small>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="overlay"></div>
				
            </section>
			
            
		 
            <section class="about section-padding" id="section_2">
			
                <div class="container">
                    <div class="row">

             
                  <div class="quemsomos"> 

                     <h2>Quem somos?</h2>
                     <div class="objetivo">O Bola Mundi é um site que tem como objetivo melhorar a interação dos torcedores com a Copa do Mundo de 2022, integrando todos os detalhes sobre a competição. Além de contribuir com a indicação de ONGs esportivas confiáveis. Você pode conferir essa lista clicando em "Friends Arena".</div>
                
                 </div>
                    
                
                
                        <div  class="col-lg-6 col-12" >
                            <h2>História da Copa</h2>
                        </div>
                      </div>
                     
                        <div class="col-lg-4 col-12 ms-lg-auto mb-5 mb-lg-0">
                            <nav>
                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                    <button class="nav-link active" id="nav-intro-tab" data-bs-toggle="tab" data-bs-target="#nav-intro" type="button" role="tab" aria-controls="nav-intro" aria-selected="true">Introdução</button>
                                   

                                    <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Todos os Vencedores</button>

                                    <button class="nav-link" id="nav-faq-tab" data-bs-toggle="tab" data-bs-target="#nav-faq" type="button" role="tab" aria-controls="nav-faq" aria-selected="false">Grandes Jogadores</button>
                                    
                                  
                                    
                                </div>
                            </nav>
                        </div>


                        <div class="col-12">
                            <div class="tab-content" id="nav-tabContent">
                                <div class="tab-pane fade show active" id="nav-intro" role="tabpanel" aria-labelledby="nav-intro-tab">
                                    <div class="row">
                                        <div class="col-lg-6 col-12 mb-lg-0 mb-4">
                                            <img src="images/historiaCopa1.jpg" class="img-fluid" alt="">
                                        </div>

                                        <div class="col-lg-5 col-12 m-auto">

                                            <h3 class="mb-3">Início</h3>

                                            <div class="objetivo"> A primeira Copa do Mundo, realizada no Uruguai em 1930, foi resultado de um esforço de longo prazo da FIFA para criar a competição. A FIFA é naturalmente responsável pela profissionalização e popularização do futebol mundial, e a Copa do Mundo teve um papel muito importante nisso. A FIFA surgiu no início do século XX, em 1904, com os seguintes países: Bélgica, Dinamarca, França, Holanda, Espanha, Suécia e Suíça.</div> <br>
                                            

<div class="objetivo"> O primeiro esforço para sediar a Copa do Mundo foi realizado por um holandês chamado Karl Anton Wilhelm Hirschmann. No entanto, o maior responsável por tornar a Copa do Mundo possível é o francês Jules Rimet, que foi presidente da FIFA por mais de 30 anos.</div> <br>

<div class="objetivo"> Os fatores que determinaram a probabilidade de sediar a Copa do Mundo foram o sucesso dos jogos de futebol masculino nas Olimpíadas de 1924 e 1928 (ambos vencidos pelo Uruguai). Essas partidas olímpicas de futebol são organizadas em parceria pela FIFA e pelo Comitê Olímpico Internacional (COI).</div> <br>

 <div class="objetivo"> A decisão de organizar a Copa do Mundo ocorreu em duas conferências: uma em Amsterdã (Holanda) e outra em Zurique (Suíça), ambas em 1928, e a escolha da sede foi feita em 1929. A candidatura uruguaia superou largamente uma série de candidatos europeus, de fato, os uruguaios concordaram em pagar os inscritos, além de autorizar a construção de um enorme estádio para o evento.</div> <br>

 <div class="objetivo"> No entanto, a primeira Copa do Mundo foi severamente prejudicada pela crise de 1929, também conhecida como Grande Depressão. A crise econômica que varre o mundo fez com que vários times europeus relutassem em jogar. Assim, a primeira Copa contou com a presença de treze seleções: Europa - Bélgica, Romênia, Iugoslávia e França, América do Norte - Estados Unidos e México, e América do Sul - Argentina, Bolívia, Brasil, Chile, Paraguai, Peru e Uruguai.</div> <br>

<div class="objetivo"> Na edição de 1930, os uruguaios confirmaram a preferência e venceram a partida com quatro vitórias. O uruguaio venceu Peru, Romênia, Iugoslávia e enfrentou a Argentina na final, vencendo por 4x2. A participação dos brasileiros tem sido bastante baixa, principalmente devido à divisão entre jogadores do São Paulo boicotando a seleção brasileira. O Brasil perdeu para a Iugoslávia por 2x1 na primeira fase e a Bolívia por 4x0.</div> <br> 
                                            
                        
                                        </div>
                                    </div>
                                </div>


                        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                            <div class="row">
                                <div class="col-lg-5 col-12 m-auto">
                                    
                                    <h3 class="mb-3">Copas Anteriores</h3>
                                     
                                     <style>
                                         table, th, td{
                                         border: 2px solid black;} </style>
                                     <body>
                                     
                                    <table style="width:100%">
                                         <tr> <th>Ano</th>
                                             <th>País-Sede</th>
                                             <th>Jogo da Final</th>
                                         </tr>
                                          <tr>
                                              <td> 1930 </td>
                                              <td> Uruguai </td>
                                              <td><b>Uruguai</b> 4x2 Argentina</td>
                                          </tr>
                                          <tr>
                                              <td> 1934 </td>
                                              <td> Itália </td>
                                              <td><b>Itália</b> 2x1 Checoslováquia</td>
                                          </tr>
                                           <tr>
                                              <td> 1938 </td>
                                              <td> França </td>
                                              <td><b>Itália</b> 4x2 Hungria</td>
                                          </tr>
                                           <tr>
                                              <td> 1950 </td>
                                              <td> Brasil </td>
                                              <td><b>Uruguai</b> 2x1 Brasil</td>
                                          </tr>
                                        <tr>
                                              <td> 1954 </td>
                                              <td> Suíça </td>
                                              <td><b>Alemanha Ocidental </b> 3x2 Hungria</td>
                                          </tr>
                                           <tr>
                                              <td> 1958 </td>
                                              <td> Suécia </td>
                                              <td><b>Brasil </b> 5x2 Suécia</td>
                                          </tr>
                                          <tr>
                                              <td> 1962 </td>
                                              <td> Chile</td>
                                              <td><b>Brasil </b> 3x1 Checoslováquia</td>
                                          </tr>
                                          <tr>
                                              <td> 1966 </td>
                                              <td>Inglaterra </td>
                                              <td><b>Inglaterra</b> 4x2 Alemanha Oc.</td>
                                          </tr>
                                          <tr>
                                              <td> 1970</td>
                                              <td>México </td>
                                              <td><b>Brasil</b> 4x1 Itália</td>
                                          </tr>
                                          <tr>
                                              <td> 1974 </td> 
                                              <td> Alemanha Oc.</td>
                                              <td><b>Alemanha Ocidental</b> 2x1 Holanda</td>
                                              </tr>
                                          <tr>
                                              <td> 1978  </td>
                                              <td>Argentina </td>
                                              <td><b>Argentina</b> 3x1 Holanda</td>
                                          </tr>
                                          <tr>
                                              <td> 1982 </td>
                                              <td>Espanha </td>
                                              <td><b>Itália</b> 3x1 Alemanha Ocidental</td>
                                          </tr>
                                          <tr>
                                              <td> 1986 </td>
                                              <td> México </td>
                                              <td><b>Argentina</b> 3x2 Alemanha Oc.</td>
                                          </tr>
                                          <tr>
                                              <td> 1990 </td>
                                              <td> Itália</td>
                                              <td><b>Alemanha Oc.</b> 1x0 Argentina</td>
                                          </tr>
                                         
                                          <tr>
                                              <td> 1994 </td>
                                              <td>EUA </td>
                                              <td><b>Brasil</b>0x0 Itália (3x2 pênaltis)</td>
                                          </tr>
                                          <tr>
                                              <td> 1998 </td>
                                              <td>França </td>
                                              <td><b>França</b> 3x0 Brasil</td>
                                          </tr>
                                          <tr>
                                              <td> 2002 </td>
                                              <td>Japão e Coreia do Sul </td>
                                              <td><b>Brasil</b> 2x0 Alemanha</td>
                                          </tr>
                                          
                                          <tr>
                                              <td> 2006 </td>
                                              <td> Alemanha</td>
                                              <td><b>Itália</b> 1x1 França (5x3 pênaltis)</td>
                                          </tr>
                                          
                                          <tr>
                                              <td> 2010 </td>
                                              <td> África do Sul</td>
                                              <td><b>Espanha</b> 1x0 Holanda</td>
                                          </tr>
                                          <tr>
                                              <td> 2014 </td>
                                              <td>Brasil</td>
                                              <td><b>Alemanha</b> 1x0 Argentina</td>
                                          </tr>
                                         <tr>
                                              <td> 2018 </td>
                                              <td>Rússia</td>
                                              <td><b>França</b> 4x2 Croácia</td>
                                          </tr>
                                          
                                     </table>
                                     
                                     
                                      <p></p>
                                      <div class="a">Legenda: Países vencedores em negrito.</div>
                                      <p></p>
                                      
                                    </body>

                                </div>
                        
                                        <div class="col-lg-6 col-12 mt-lg-0 mt-4">
                                            <img src="images/8.jpg" class="img-fluid" alt="">
                                        </div>
                                    </div>
                        </div>
						

                        <div class="tab-pane fade" id="nav-faq" role="tabpanel" aria-labelledby="nav-faq-tab">
                            <div class="row">
                                <div class="col-lg-6 col-12 mb-lg-0 mb-4">
                                        <img src="images/1.png" class="img-fluid" alt="">
                                </div>

                                     <div class="col-lg-5 col-12 m-auto">
                                          <h3 class="mb-3"> Grandes Jogadores </h3>

                                          <div class="accordion" id="accordionGeneral">
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header" id="headingOne">
                                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accordionGeneralOne" aria-expanded="true" aria-controls="accordionGeneralOne">
                                                        Mundiais
                                                        </button>
                                                    </h2>

                                                    <div id="accordionGeneralOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionGeneral">

                                                        <div class="accordion-body">
                                                                                                             <h4> Maradona</h4>
         <div class="objetivo"> Diego Armando Maradona, foi um atacante argentino. Considerado um dos maiores futebolistas do mundo. Sua primeira convocação para a Seleção Argentina foi em 1977, aos 17 anos. Em 1979 foi eleito o melhor jogador do torneio. Liderou a vitória da Copa do Mundo de 1986, marcando o Gol do Século.</div><br>
         <h4> Franz Beckenbauer</h4>
         <div class="objetivo"> Franz Anton Albert Beckenbauer é um ex-futebolista alemão que atuava como zagueiro, líbero, volante e meia. Venceu 2 Bolas de Ouro, 1972 e 1976. Participou de 3 Copas do Mundo e levantou a taça em 1974 junto com a seleção alemã. </div><br>
          <h4 > Gerd Müller</h4>
         <div class="objetivo"> Gerhard Müller, foi um futebolista alemão. É considerado o maior centro-avante da história do futebol europeu, e um dos maiores do futebol mundial. Tendo como diferencial a sua velocidade de movimentos em pequenos espaços e seu chute preciso. Esteve nas edições da Copa do Mundo de 1970 e 1974, em duas Copas somou 14 gols sendo considerado o maior goleador de todas as Copas do Mundo, até que aparecesse Ronaldo Fenômeno. </div><br>
         
         <h4>Johan Cruijff</h4>
         <div class="objetivo">Hendrik Johannes Cruijff, mais conhecido como Johan Cruijff, Johan Cruyff, ou simplesmente Cruijff foi um futebolista e técnico neerlandês que atuava como meia e atacante. É considerado pela IFFHS (Federação Internacional de História e Estatísticas do Futebol) como melhor futebolista europeu do século XX e um dos maiores jogadores da história do futebol. Implementou na Seleção Holandesa um esquema em que os jogadores faziam muitas funções no campo sem prejudicar a original (esquema tático do “carrossel”), um dos motivos para a seleção ser chamada de Laranja Mecânica. </div><br>
        
        <h4>Just Fontaine </h4>
        <div class="objetivo">Just Fontaine é um ex-futebolista francês nascido no Marrocos, então colônia da França. Atuava como  atacante e se tornou muito importante na Copa do Mundo de 1958, sendo o único jogador que marcou 13 gols em uma única Copa do Mundo. Ele tinha como maiores características sua velocidade, dribles curtos, chutes certeiros e, embora não fosse um jogador muito alto, um ótimo cabeceio.</div><br>
       
       <h4>Miroslav Klose</h4>
         <div class="objetivo">Miroslav Josef Klose, mais conhecido como Miroslav Klose, ou simplesmente Klose, é um ex-futebolista que nasceu na Polônia, mas se naturalizou alemão e que atuava como atacante. Atualmente é o maior artilheiro da Copa do Mundo, com 16 gols pela Alemanha. Ronaldo Fenômeno, o segundo maior artilheiro da Copa do Mundo, com 15 gols pelo Brasil. Pelé marcou 12 gols para o Brasil na competição.</div><br>
         
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="accordion-item">
                                                    
                                                    <h2 class="accordion-header" id="headingTwo">
                                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accordionGeneralTwo" aria-expanded="false" aria-controls="accordionGeneralTwo">
                                                        Brasileiros
                                                        </button>
                                                    </h2>

                                                    <div id="accordionGeneralTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionGeneral">

                                                        <div class="accordion-body">

                                                            <h4> Pelé</h4>
                                                                <div class="objetivo"> Edson Arantes do Nascimento, mais conhecido como o Rei Pelé, atuava como atacante. Ele é amplamente considerado como um dos maiores joagadores de futebol do mundo. Participou de 3 das 5 Copas do Mundo que o Brasil ganhou até então, que são as de 1958, 1962 e a de 1970 e fez mais de mil gols em toda a sua carreira.</div><br>
                                                                
                                                                <h4>Mané Garrincha</h4>
                                                                <div class="objetivo"> Manoel Francisco dos Santos, o Mané Garrincha ou simplesmente Garrincha foi um futebolista brasileiro. É considerado por muitos o mais célebre ponta-direita e o melhor driblador da história do futebol. Participou das edições da Copa do Mundo de 1958 e de 1962, saindo vitorioso com a seleção brasileira.</div><br>
                                                                
                                                                <h4>Zagallo</h4>
                                                                <div class="objetivo"> Mário Jorge Lobo Zagallo é um ex-treinador e ex-futebolista brasileiro que atuava como ponta-esquerda. Já vitorioso pela seleção brasileira como jogador em 1958 e 1962, ganhou a Copa do Mundo como treinador em 1970 (sendo, até hoje, uma das três únicas pessoas a conquistarem a competição como jogador e como treinador) e depois como coordenador técnico em 1994, totalizando quatro conquistas em três funções diferentes.</div><br>
                                                                
                                                                <h4>Nilton Santos</h4>
                                                               <div class="objetivo">Nilton dos Santos, mais conhecido como Nilton Santos, foi um futebolista brasileiro que atuava como lateral-esquerdo. Em 2000, foi eleito pela FIFA como o melhor lateral-esquerdo de todos os tempos. Participou da Seleção Brasileira nos campeonatos mundiais de 1950, 1954, 1958 e 1962, sendo bicampeão nas duas últimas. Era chamado de "A Enciclopédia" por conta dos conhecimentos sobre o futebol e por ser completo como jogador, foi o pioneiro em arriscar subidas ao ataque através da lateral do campo. Inovou a posição de lateral-esquerdo.</div><br>

<h4>Vavá</h4>
<div class="objetivo">Edvaldo Izídio Neto, conhecido por Vavá, foi um futebolista brasileiro 
que atuava como atacante. Também apelidado de Peito de Aço por sua forma corajosa 
de jogar. Na Copa do Mundo de 1958 começou como reserva, mas substituiu Mazzola ao longo da 
competição, marcando 5 gols que foram decisivos para o Brasil conquistar o seu 
primeiro título mundial. Por seu vigor físico, incrível reflexo e faro de gol, 
foi chamado de "Leão da Copa". Foi um dos artilheiros da Copa do Mundo de 1962 com 
4 gols e bicampeão do mundo.</div><br>

<h4>Ronaldo Fenômeno</h4>
<div class="objetivo">Ronaldo Luís Nazário de Lima, mais conhecido como Ronaldo, Ronaldo Fenômeno 
ou simplesmente Fenômeno, é um empresário e ex-futebolista brasileiro que atuava 
como atacante, reconhecido como um dos melhores futebolistas de todos 
os tempos. Foi campeão na copa do Mundo em 1994. Atrás apenas de Pelé e Neymar, é o 
terceiro maior goleador da história da Seleção Brasileira, com 67 gols, sendo durante 
8 anos, o maior goleador da história das Copas, com 15 gols, recorde superado apenas em 
2014 pelo alemão Miroslav Klose.</div><br>
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
                        </div>
            </section>
			
		

            <section class="services section-padding" id="section_3">
                <div class="container">
                    <div class="row">

                        <h2 class="mb-5 text-center">Seleções</h2>
                        
                         <div class="col-lg-4 col-12 d-flex bg-primary p-0">
                                <img src="images/seleções/brasil.jpg" class="img-fluid services-image" alt="">
                            </div>
                            
                          <div class="col-lg-4 col-12 d-flex bg-warning p-0">
                                <img src="images/seleções/dez.jpg" class="img-fluid services-image" alt="">
                            </div>    
                            
                             <div class="col-lg-4 col-12 d-flex bg-success p-0 order-lg-0 order-sm-4">
                                <img src="images/seleções/todas.jpg" class="img-fluid services-image" alt="">
                            </div>

                            <div class="col-lg-4 col-12 p-0">
                                <div class="services-info custom-icon-left paddingText">
                                
                                    <h4 class="">SELEÇÃO BRASILEIRA</h4>

                                    <a class="custom-btn custom-bg-dark btn" href="/selecoes/selecaobrasileira.php">Clique aqui</a>
                                </div>
                            </div>

                           

                            <div class="col-lg-4 col-12 p-0 order-lg-0 order-sm-5">
                          
                                <div class="services-info custom-icon-right paddingText order-lg-0 order-sm-2">
                                
                                    <h4 class="">SELEÇÕES MANDANTES</h4>

                                  

                                    <a class="custom-btn custom-bg-dark btn" href="#">Clique aqui</a>
                                </div>
                            </div>

                           

                            <div class="col-lg-4 col-12 p-0">

                                <div class="services-info custom-icon-top paddingText">
                            
                                    <h4 class="">TODAS AS SELEÇÕES</h4>

                                    <a class="custom-btn custom-bg-dark btn" href="/Sof/bandeiras.html">Clique aqui</a>
                                </div>
                            </div>

                    </div>
                </div>
            </section>
			
		

            <section class="work section-padding" id="section_4">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h2 class="mb-5 text-center">Partidas</h2>
                        </div>

                    </div>
                </div>
            </section>
			
	

            <section class="pricing section-padding" id="section_5">
                <div class="container">
                    <div class="row">

                        <div class="col-12">
                            <h2 class="text-white mb-5 text-center">Classificação</h2>
                        </div>

                        <div class="col-lg-6 col-12">
                            <div class="pricing-plan bg-white">
                                <div class="d-flex flex-wrap align-items-center pricing-header">
                                    
                                    <div class="tabela">
                                        <h4>Tabela:</h4>
                                    </div>


                                    <small class="pricing-recommend">Atualizada</small>
                                </div>

                                <div class="tabela_google">
                                    <h5 class="mb-3">----</h5>
                                </div>
                            </div>
                        </div>

    

                    </div>
                </div>
                <div class="overlay dark-overlay"></div>
            </section>

        </main>

    </body>
    
    <?php


if(isset($_SESSION['acesso'])){
 echo "logado";
echo "
<script>
document.getElementById('login')
document.getElementById('deslogar')
login.style.display='none'
deslogar.style.display='block'
</script>



";


}

if(isset($_SESSION['deslogar'])){
    
echo "deslogar";
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