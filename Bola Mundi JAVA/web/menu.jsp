<!DOCTYPE html>

<html lang="pt-br" dir="ltr">
    
  <head>
      
    <meta charset="UTF-8">
    
    <link rel="stylesheet" href="c.css">
    
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     
     <style>
         
         /* Google Font Link */
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
        *{
          margin: 0;
          padding: 0;
          box-sizing: border-box;
          font-family: "Poppins" , sans-serif;
        }

        body{
          height: 100vh;
          width: 100vw;
          background-color: #f0f1f6;

        }

        .sidebar{
          position: fixed;
          height: 100vh;
          width: 78px;
          background: #fff;
          border-top-right-radius: 15px;
          border-bottom-right-radius: 15px;
          z-index: 99;
          transition: width .5s;
        }

        .sidebar.open{
          width: 250px;
          transition: width .5s;
        }

        .sidebar .logo{
          display: flex;
          height: 90px;
          justify-content: space-between;
          align-items: center;
        }

        .sidebar .logo #logo_img{
          position: absolute;
          top: 25px;
          left: 19px;
          height: 40px;
        }

      .sidebar .logo #btn{
          color: white;
          margin-right: 30px;
          font-size: 30px;
          width: 1%;
          opacity: 0;
          transform: translateX(-250px);
          transition: .5s;
        }

        .sidebar.open .logo #btn{
          opacity: 1;
          transform: translateX(0);
          transition: .5s;
        }

        ul{
          border-bottom: solid rgba(0, 0, 0, 0.1) 1px;
        }

        ul li{
          display: flex;
          align-items: center;
          margin: 30px 0;
        }

        ul li a,
        .logout a{
          display: flex;
          align-items: center;
          text-decoration: none;

        }

        ul li a i,
        .logout a i{
          position: relative;
          color: #575F66;
          font-size: 25px;
          margin-left: calc((78px - 25px)/2);
          z-index: 10;
        }

        .sidebar ul li a .links_name,
        .sidebar .logout a .links_name{
          color: #575F66;
          margin: auto 30px;
          width: 110px;
          transform: translateX(-250px);
          opacity: 0;
        }

        .sidebar.open ul li a .links_name,
        .sidebar.open .logout a .links_name{
          transform: translateX(0);
          opacity: 1;
          transition: .5s;
        }

        ul li a:hover i, 
        ul li a:hover .links_name{
          color: #4D6FFF;
          transition: .5s;
        }

        .sidebar ul li .tooltip,
        .sidebar .logout .tooltip{
          color: #575F66;
          background: #fff;
          width: 110px;
          padding: 6px 12px;
          border-radius: 5px;
          box-shadow: 0 5px 10px rgba(0, 0, 0, 0.3);
          opacity: 0;
          position: absolute;
          left: 0px;
          z-index: 8;
          transition: .5s;
        }

        .sidebar ul li:hover .tooltip,
        .sidebar .logout:hover .tooltip{
          opacity: 1;
          left: 85px;
          transition: .5s;
        }

        .sidebar.open ul li .tooltip,
        .sidebar.open .logout .tooltip{
          display: none;
        

        .sidebar .info{
          position: relative;
          margin-top: 10px;
        }

        .sidebar .info a .avatar{
          position: relative;
          width: 78px;
          z-index: 10;
          transition: .5s;
        }

        .sidebar.open .info a .avatar{
          transform: translateX(86px);
          transition: .75s;
        }

        .sidebar .info a .table{
          position: absolute;
          z-index: 8;
          top: 30px;
          width: 70%;
          left: 15%;
          height: 0;
          margin: 0px auto;
          color: #fff;
          background: linear-gradient(60deg, #4D6FFF, #AA6DEB);
          border-radius: 20px;
          opacity: 1;
          transition: .5s;
        }

        .sidebar.open .info a .table{
          opacity: 1;
          height: 150px;
          transition: .5s;
        }

        .sidebar .info .tooltip{
          color: #575F66;
          background: #fff;
          font-size: 15px;
          width: 150px;
          padding: 6px 12px; 
          border-radius: 5px;
          box-shadow: 0 5px 10px rgba(0, 0, 0, 0.3);
          opacity: 0;
          position: absolute;
          left: 0px;
          top: 0px;
          z-index: 8;
          transition: .5s;
        }

        .sidebar .info:hover .tooltip{
          opacity: 1;
          left: 85px;
          transition: .5s;
        }

        .sidebar.open .info .tooltip{
          display: none;
        }

        .sidebar .info .table_text{
          margin: 40px 10px 0px;
          text-align: center;
          font-size: 0px;
          line-height: 25px;
          opacity: 0;
        }

        .sidebar.open .info .table_text{
          font-size: 13px;
          opacity: 1;
          transition: .5s;
        }

        .table_text span{
          font-size: 14px;
          font-weight: bold;
        }

        .name{
          font-weight: bolder;
        }

        .country{
          font-size: 13px;
        }

        .logout{
          position: absolute;
          bottom: 30px;
          display: flex;
          align-items: center;
        }

        .logout a:hover i, 
        .logout a:hover .links_name{
          color: #4D6FFF;
          transition: .5s;
        }

        .Home_section{
          position: relative;
          min-height: 100vh;
          top: 0;
          left: calc(78px - 20px);
          width: 100vw;
          z-index: 2;
          transition: all 0.5s ease;
        }

        .sidebar.open ~ .Home_section{
          left: calc(250px - 20px);;
          transition: all 0.5s ease;
        }

        .Home_section .text{
          display: inline-block;
          color: #fff;
          font-size: 25px;
          font-weight: 500;
          margin: 30px;
          margin-left: 40px;
        }
        
     </style>
     
   </head>
   
<body>
    
  <div class="sidebar">
    <div class="logo">
      <img src="imagens/BolaMundi.png" alt="logo" id="logo_img">
      <i class='bx bx-menu-alt-right' id="btn" ></i>
    </div>

    <div class="nav_list">
      <ul>
        <li>
          <a href="bolamundi.jsp">
            <i class='bx bx-grid-alt'></i>
            <span class="links_name">Dashboard</span>
          </a>
          <span class="tooltip">Dashboard</span>
        </li>

        <li>
          <a href="graficos.jsp">
            <i class='bx bx-bar-chart'></i>
            <span class="links_name">Gráficos</span>
          </a>
          <span class="tooltip">Gráficos</span>
        </li>

        <li>
          <a href="usuarioscontrolar.jsp?pag=1">
            <i class='bx bx-user'></i>
            <span class="links_name">Usuários</span>
          </a>
          <span class="tooltip">Usuários</span>
        </li>

        <li>
          <a href="produtoscontrolar.jsp?pag=1">
            <i class='bx bx-coin' ></i>
            <span class="links_name">Produtos</span>
          </a>
          <span class="tooltip">Produtos</span>
        </li>

        <li>
          <a href="jogadorescontrolar.jsp?pag=1"">
            <i class='bx bx-football' ></i>
            <span class="links_name">Jogadores</span>
          </a>
          <span class="tooltip">Jogadores</span>
        </li>
        
        <li>
          <a href="escreveremail.jsp">
            <i class='bx bx-message' ></i>
            <span class="links_name">E-mail</span>
          </a>
          <span class="tooltip">E-mail</span>
        </li>
        
        <li>
          <a href="controlepdf.jsp">
            <i class='bx bx-table' ></i>
            <span class="links_name">PDF</span>
          </a>
          <span class="tooltip">PDF</span>
        </li>
        
      </ul>

      
    </div>
  </div>

  <script>
      
    const sidebar = document.querySelector(".sidebar");
    const btn = document.querySelector("#btn");
    logo_img.onclick = function(){
      if (!x.matches){
        sidebar.classList.toggle('open');
      }
    }
    btn.onclick = function(){
      if (!x.matches){
        sidebar.classList.remove('open');
      }
    }

    function myFunction(x) {
      if (x.matches) { 
        sidebar.classList.remove('open');
      } 
    }

    var x = window.matchMedia("(max-width: 700px)")
    myFunction(x) 
    x.addListener(myFunction) 
    
  </script>
  
</body>


</html>