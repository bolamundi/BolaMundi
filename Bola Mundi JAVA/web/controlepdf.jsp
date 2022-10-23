<%@ taglib uri="http://java.sun.com/jsp/jstl/core" prefix="c" %>
<%@ page import="dao.Dao, classes.Usuario, java.util.*"%>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" href="./css/tabela.css">
        <link rel="shortcut icon" type="image/x-icon" href="imagens/favicon.png" />
        <title>Lista de Usuários</title>
                <link rel="stylesheet" href="./css/tabela.css">
<style>
            .content {
                background-color: white;
                position:absolute;
                left:50%;
                top:50%;
                transform: translate(-50%, -50%);
                border-radius: 20px;
                font-family: Arial;
                box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
            }
            
        </style>    
        <!-- PDF II - Arquivo com o código para gerar PDF -->
        <script src="./scripts/pdf.js"></script>
        
        
        <!-- PDF I - Bibliotecas para gerar PDF -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.4.1/jspdf.debug.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/2.3.4/jspdf.plugin.autotable.min.js"></script>
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
                   
            <h1 style="text-align:center;">Lista de Usuários</h1>
            <table>
            <tr><th>Id</th><th>Nome</th><th>Email</th><th>Acesso</th></tr>
                <c:forEach items="${list}" var="usuario">
                <tr>
                    <td>${usuario.getId()}</td>
                    <td>${usuario.getNome()}</td>
                    <td>${usuario.getEmail()}</td>            
                    <td>${usuario.getAcesso()}</td> 
            
                </tr>
                </c:forEach>
            </table>
        
         
              
        <!-- PDF III - Botão que aciona a função getPDF() no arquivo pdf.js -->
        <form style="margin-top:2%;"><input type="button" value="Gerar PDF" onclick="getPDF()"></form>
                    </div>
                </div>
   
     
    </body>
</html>
   
        