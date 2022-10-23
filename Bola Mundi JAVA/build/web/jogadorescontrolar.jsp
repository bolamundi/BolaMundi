<%@ taglib uri="http://java.sun.com/jsp/jstl/core" prefix="c" %>
<%@ page import="dao.Dao, classes.Jogador, java.util.*"%>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" href="./css/tabela.css">
        <link rel="shortcut icon" type="image/x-icon" href="imagens/favicon.png" />
        <title>Lista de Jogadores</title>
        <style>
            .content {
                background-color: white;
                position:absolute;
                border-radius: 20px;
                font-family: Arial;
                margin-left: 25%;
                margin-top: 5%;
                width: 50%;
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
                int total = 7;
                
                if(id!=1){
                    id = id -1;
                    id = id * total + 1;
                }
                
                 int contagem = Dao.getContagemJogadores();
                int i;
                request.setAttribute("contagem", contagem);
                 List<Jogador> list = Dao.getJogadores(id, total);
                request.setAttribute("list", list);
                if(contagem%total==0){
                    contagem=contagem/total;
                }else{
                    contagem=contagem/total + 1;    
                }
            %>
        
            <h1 style="text-align: center;">Lista de Jogadores</h1>
            <hr>
            <table>
            <tr><th>Id</th><th>Nome</th><th>País</th><th>Número</th><th>Posição</th><th>Id_seleção</th><th>Acesso</th><th colspan="2">Ações</th></tr>
                <c:forEach items="${list}" var="jogador">
                <tr>
                    <td>${jogador.getId()}</td>
                    <td>${jogador.getNome()}</td>
                    <td>${jogador.getPais()}</td>            
                    <td>${jogador.getNumero()}</td>    
                    <td>${jogador.getPosicao()}</td> 
                    <td>${jogador.getIdselecao()}</td> 
                    <td><a href="jogadoreditarform.jsp?id=${jogador.getId()}"><img src="./imagens/editar.png" alt="Editar Jogador"></a></td>
                    <td><a href="jogadorexcluir.jsp?id=${jogador.getId()}"><img src="./imagens/excluir.png" alt="Excluir Jogador"></a></td>            
                </tr>
                </c:forEach>
            </table>
             <div class="pagination">
                    <% for(i=1; i <= contagem; i++) {%>
                            <a href="jogadorescontrolar.jsp?pag=<%=i%>"><%=i%></a>
                    <% } %>
                </div>  
        <a href="jogadorcadastrarform.html" style="margin-left: 91%;"><img src="./imagens/incluir.png" alt="Incluir Jogador"></a>
    </div>
</body>
</html>