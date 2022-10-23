<%@ taglib uri="http://java.sun.com/jsp/jstl/core" prefix="c" %>
<%@ page import="dao.Dao, classes.Usuario, java.util.*"%>
<!DOCTYPE html>
<html>
    
    <head>
        
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" href="./css/tabela.css">
        <link rel="shortcut icon" type="image/x-icon" href="imagens/favicon.png" />
        <title>Lista de Usuários</title>
        
        <style>
            
            .content {
                background-color: white;
                position:absolute;
                border-radius: 20px;
                font-family: Arial;
                margin-left: 30%;
                margin-top: 10%;
                width: 40%;
                box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
            }
            
            .content h1 {
                margin-top: 25px;
                color: red;
                text-align: center;
            }
            
            .content hr {
                margin-top: 15px;
                border: 0.5px solid  #f2f2f2;
                margin-bottom: 25px;
            }
            
            .pagination {
                margin-left: 2.35%;
            }

            .pag {
                    display: inline-block;
                    background-color: #e60000;
                    color: white;
                    border-radius: 5px;
                    padding: 2px 12px 5px;
                    margin-right: 0.5%;
                    margin-bottom: 1.5%;
            }

            

            
        </style>    
        
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
                   
            <h1 style ="text-align: center;">Lista de Usuários</h1>
            <hr>
            <table>
            <tr><th>Id</th><th>Nome</th><th>Email</th><th>Acesso</th><th colspan="2">Ações</th></tr>
                <c:forEach items="${list}" var="usuario">
                <tr>
                    <td>${usuario.getId()}</td>
                    <td>${usuario.getNome()}</td>
                    <td>${usuario.getEmail()}</td>            
                    <td>${usuario.getAcesso()}</td> 
                    <td><a href="usuarioeditarform.jsp?id=${usuario.getId()}"><img src="./imagens/editar.png" alt="Editar Usuário"></a></td>
                 <td><a href="usuarioexcluir.jsp?id=${usuario.getId()}"><img src="./imagens/excluir.png" alt="Excluir Usuário"></a></td>            
                                <td><a href="usuariobloquear.jsp?id=${usuario.getId()}"><img src="./imagens/bloquear.png" alt="Bloquear Usuário"></a></td>            
                </tr>
                </c:forEach>
            </table>
            
             <div class="pagination">
                    <% for(i=1; i <= contagem; i++) {%>
                            <a href="usuarioscontrolar.jsp?pag=<%=i%>"><%=i%></a>
                    <% } %>
                
        <a href="usuariocadastrarform.html"><img src="./imagens/incluir.png" alt="Incluir Usuário" style="margin-left: 80%;"></a>
             </div>    
                        </div>
                
              
                
         
    
    </body>
</html>
   
    