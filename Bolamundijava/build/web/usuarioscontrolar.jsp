<%@ taglib uri="http://java.sun.com/jsp/jstl/core" prefix="c" %>
<%@ page import="dao.Dao, classes.Usuario, java.util.*"%>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" href="./css/tabela.css">
        <link rel="shortcut icon" type="image/x-icon" href="imagens/favicon.png" />
        <title>Lista de Usuários</title>
    </head>
    <body>
            <div class="topnav">
                <%@include file="menu.jsp"%>
            </div>
            <div class="content">     
                <%
                String pag = request.getParameter("pag");
                int id = Integer.parseInt(pag);
                
                //Quantidade de Registros da Página
                int total = 5;
                
                if(id!=1){
                    id = id -1;
                    id = id * total + 1;
                }
                
                 int contagem = Dao.getContagem();
                int i;
                request.setAttribute("contagem", contagem);
                if(contagem%total==0){
                    contagem=contagem/total;
                }else{
                    contagem=contagem/total + 1;    
                }
                
                List<Usuario> list = Dao.getUsuarios(id, total);
                request.setAttribute("list", list);
                int numadm = Dao.getAdm();
                  request.setAttribute("numadm", numadm);
                  int numpart=Dao.getParticipante();
                  request.setAttribute("numpart", numpart);
            %>
        
            <h1>Lista de Usuários</h1>
            <table>
            <tr><th>Id</th><th>Nome</th><th>Email</th><th>Senha</th><th>Acesso</th><th colspan="2">Ações</th></tr>
                <c:forEach items="${list}" var="usuario">
                <tr>
                    <td>${usuario.getId()}</td>
                    <td>${usuario.getNome()}</td>
                    <td>${usuario.getEmail()}</td>            
                    <td>${usuario.getSenha()}</td>    
                    <td>${usuario.getAcesso()}</td> 
                    <td><a href="usuarioeditarform.jsp?id=${usuario.getId()}"><img src="./imagens/editar.png" alt="Editar Usuário"></a></td>
                    <td><a href="usuarioexcluir.jsp?id=${usuario.getId()}"><img src="./imagens/excluir.png" alt="Excluir Usuário"></a></td>            
                </tr>
                </c:forEach>
            </table>
             <div class="pagination">
                    <% for(i=1; i <= contagem; i++) {%>
                            <a href="usuarioscontrolar.jsp?pag=<%=i%>"><%=i%></a>
                    <% } %>
                </div>  
        <a href="usuariocadastrarform.html"><img src="./imagens/incluir.png" alt="Incluir Usuário"></a>
    </div>
         
              <div class="wrapper">
        
                 <canvas id="myChart" height='100'></canvas>       
                 </div> 
     <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js"
     ></script>
   
     <script type="text/javascript">
        var ctx = document.getElementById("myChart");
        var valores = [<%=numadm%>, <%=numpart%>];
        var tipos = ["ADM", "Comum"];
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
                  "rgba(153, 102, 255, 0.2)",
                ]
              }
            ]
          }
        }); 
    </script>           
    
    </body>
</html>
   
             <%--
var ctx = document.getElementById('myChart');
var stars = [12, 19, 3, 5, 2];
var frameworks = ["React", "Angular", "Vue", "Hyperapp", "Omi"];

var pieChart= new Chart(ctx, {
    type: "bar",
    data: {labels: frameworks , 
    datasets: [
{
label:"frameworks",
data: stars,
backgroundColor:[
    "rgba(255, 99, 132, 1)",
    "rgba(54, 162, 235, 1)",
    "rgba(255, 206, 86, 1)",
    "rgba(75, 192, 192, 1)",
    "rgba(153, 102, 255, 1)",
    ],
    borderWidth: 5 // afeta a cor e a largura da borda 


}

    ]
    }       
<%--<script src="chartcontrole.jsp"></script>--%>