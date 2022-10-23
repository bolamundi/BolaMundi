<%@page contentType="text/html" pageEncoding="UTF-8"%>
<%@ page import="dao.Dao, classes.Produto, java.util.*"%>
<%@ page import="dao.Dao, classes.Usuario, java.util.*"%>


<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.0 Frameset//EN" "http://www.w3.org/TR/REC-html40/frameset.dtd">
<html>
    
    <head>
        
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Bola Mundi - Gráficos</title>
        
        <style>
            
            .contentchart {
                background-color: white;
                position:absolute;
                border-radius: 20px;
                font-family: Arial;
                margin-top: 10%;
                width: 40%;
                height: 55%;
                box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;           
            }
            
            .contentchart h1 {
                margin-top: 25px;
                color: red;
                text-align: center;
            }
            
            .contentchart hr {
                margin-top: 15px;
                border: 0.5px solid  #f2f2f2;

            }
        </style>
        
    </head>
    
    <body>
        
       <div class="topnav">
            <%@include file="menu.jsp"%>
        </div>
        
        <div class="contentchart" style="margin-left: 10%;">
                <%
                
                  int numadm = Dao.getAdm();
                  request.setAttribute("numadm", numadm);
                  int numpart=Dao.getParticipante();
                  request.setAttribute("numpart", numpart);
   
                 
                %>
            <h1>Tipos de Usuários</h1>
            <hr>
            <div class="wrapper">
                <canvas id="tipos" height='160' style ="margin-left: 2%; margin-right: 2%;"></canvas>       
           </div> 
            
        </div> 
        
        <div class="contentchart" style="margin-left: 55%;">
            <%
                
                
                 int amarelaNeymar = Dao.getAmarelaNeymar();
                  request.setAttribute("amarelaNeymar", amarelaNeymar);
                  
                  int azulNeymar = Dao.getAzulNeymar();
                  request.setAttribute("azulNeymar", azulNeymar);
                  
                  int amarelaJesus = Dao.getAmarelaJesus();
                  request.setAttribute("amarelaJesus", amarelaJesus);
                  
                 int amarelaRaphinha = Dao.getAmarelaRaphinha();
                  request.setAttribute("amarelaRaphinha", amarelaRaphinha);
                 
                
                
            %>
               
            <h1>Produtos mais vendidos</h1>
            <hr>
            
            <div class="wrapper">
                <canvas id="produtos" height='170' style ="margin-left: 2%; margin-right: 2%"></canvas>       
           </div> 
        </div>
            
       <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js"></script>
       
        <script>
            
            var ctx = document.getElementById("produtos");
            var valores = [<%=amarelaNeymar%>,<%=azulNeymar%>,<%=amarelaJesus%>,<%=amarelaRaphinha%>];
             var tipos = ["Amarela Neymar","Azul Neymar","Amarela Gabriel Jesus","Amarela Raphinha"];
            var myChart = new Chart(ctx, {
              type: "pie",
              data: {
                labels: tipos,
                datasets: [
                  {
                    label: "Usuarios",
                    data: valores,
                    backgroundColor: [
                      "rgba(255, 99, 132, 0.2)",
                      "rgba(54, 162, 235, 0.2)",
                      "rgba(255, 206, 86, 0.2)",
                      "rgba(75, 192, 192, 0.2)",
                      "rgba(153, 102, 255, 0.2)"
                    ]
                  }
                ]
              }
            }); 
            
            var ctx = document.getElementById("tipos");
            var valores = [<%=numadm%>, <%=numpart%>];
            var tipos = ["ADM", "Comum"];
            var myChart = new Chart(ctx, {
              type: "bar",
              data: {
                labels: tipos,
                datasets: [
                  {
                    label: "Usuarios",
                    data: valores,
                    backgroundColor: [
                      "rgba(255, 99, 132, 0.2)",
                      "rgba(54, 162, 235, 0.2)",
                      "rgba(255, 206, 86, 0.2)",
                      "rgba(75, 192, 192, 0.2)",
                      "rgba(153, 102, 255, 0.2)"
                    ]
                  }
                ]
              }
            }); 
            
            
        
                                
        </script>
        
        
        
    </body>
    
</html>
