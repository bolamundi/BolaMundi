<!DOCTYPE html>
<html>

<head>
    
  <meta charset="utf-8" />
  
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />

  <title>Loja - Bola Mundi</title>

  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <link href="https://fonts.googleapis.com/css?family=Dosis:400,500|Poppins:400,700&display=swap" rel="stylesheet" />
  <link href="css/style.css" rel="stylesheet" />
  <link href="css/responsive.css" rel="stylesheet" />
  
</head>

<body>
  <div class="hero_area">
    <!-- HEADER -->
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container">
          <a class="navbar-brand" href="../index.php">
            <span>
              Bola Mundi
            </span>
          </a>

          <div class="navbar-collapse" id="">
            <div class="container">
              <div class=" mr-auto flex-column flex-lg-row align-items-center">
                <ul class="navbar-nav justify-content-between ">
                  <div class=" d-none d-lg-flex">
                  </div>
                </ul>
              </div>
            </div>

            <div class="custom_menu-btn">
              <button onclick="openNav()"></button>
            </div>
            <div id="myNav" class="overlay">
              <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
              <div class="overlay-content">
                <a href="https://bolamundi2022.000webhostapp.com/">INDEX</a>
                <a href="https://bolamundi2022.000webhostapp.com/historiadacopa.php">HISTÓRIA DA COPA</a>
                <a href="https://bolamundi2022.000webhostapp.com/friendsarena.php">FRIENDS ARENA</a>
                <a href="https://bolamundi2022.000webhostapp.com/perfil/perfil.php">PERFIL</a>
              </div>
            </div>
          </div>
        </nav>
      </div>
    </header>
    <!-- SLIDE -->
    <section class=" slider_section position-relative">
      <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="slider_item-box">
              <div class="slider_item-container">
                <div class="container-fluid">
                  <div class="row">
                    <div class="offset-md-2 col-md-4">
                      <div class="slider_item-detail">
                        <div>
                          <h2 class="slider_heading">
                            Bem-Vindo a<br />
                          loja do bola mundi!</h2>
                          <p>
                             
                          </p>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="hero_img-box">
                        <img src="images/hero.png" alt="" />
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="slider_item-box">
              <div class="slider_item-container">
                <div class="container-fluid">
                  <div class="row">
                    <div class="offset-md-2 col-md-4">
                      <div class="slider_item-detail">
                        <div>
                          <h2 class="slider_heading">
                           Personalize seu perfil<br />
                        com itens exclusivos</h2>
                          <p>
                            
                          </p>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="hero_img-box">
                        <img src="images/hero.png" alt="" />
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        </a>
      </div>
    </section>

  </div>

  <!-- CONTEUDO -->
  <section class="detail_section">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-3">
          <div class="detail_img-box">
            <img src="images/detail.png" alt="" class="w-100" />
          </div>
        </div>
        <div class=" col-lg-7">
          <div class="detail_container">
            <div class="detail-box d-box-1">
              <a href="">
                <div class="detail-content">
                  <img src="images/d-1.png" alt="" />
                  <h5>CAMISA</h5>
                </div>
              </a>
            </div>
            <div class="detail-box d-box-2">
              <a href="">
                <div class="detail-content">
                  <img src="images/d-2.png" alt="" />
                  <h5>SÍMBOLOS</h5>
                </div>
              </a>
            </div>
            <div class="detail-box d-box-3">
              <a href="">
                <div class="detail-content">
                  <img src="images/d-3.png" alt="" />
                  <h5>MASCOTES</h5>
                </div>
              </a>
            </div>
            <div class="detail-box d-box-4">
              <a href="">
                <div class="detail-content">
                  <img src="images/d-4.png" alt="" />
                  <h5>MEMES</h5>
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- PRODUTOS -->
  <section class="products_section">
    <div class="heading_container">
      <h2></h2>
      <p></p>
    </div>
    <div class="container layout_padding">
      <div class="product_container">
       <?php include 'gerarPrateleira.php';?>
      </div>
    </div>
  </section>


  <section class="find_section layout_padding-bottom">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-6 col-md-8 offset-md-2">
          <div class="find_container">
            <div class="row">
              <div class="col-sm-6">
                <div class="find_container-img">
                  <img src="images/find-img.png" alt="" />
                </div>
              </div>
              <div class="col-sm-6">
                <h3>
                  Continue interagindo com<br />
o site para conseguir mais moedas!            </h3>
                <p>
Volte sempre!             </p>
              </div>
            </div>
          </div>
          <div class="shop_container">
            <div class="row">
              <div class="col-sm-6">
                <div class="shoe_img-box">
                  <img src="images/shoes.png" alt="" />
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="find_img-box">
            <img src="images/find-hero.png" alt="" />
          </div>
        </div>
      </div>
    </div>
  </section>
  

  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>

  <script>
    function openNav() {
      document.getElementById("myNav").style.width = "100%";
    }

    function closeNav() {
      document.getElementById("myNav").style.width = "0%";
    }
  </script>
</body>

</html>