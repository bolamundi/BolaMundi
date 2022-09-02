<%@ taglib uri="http://java.sun.com/jsp/jstl/core" prefix="c" %>
<%@ page import="dao.Dao, classes.Jogador, java.util.*"%>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" href="./css/tabela.css">
        <link rel="shortcut icon" type="image/x-icon" href="imagens/favicon.png" />
        <title>Lista de Jogadores</title>
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
        
            <h1>Lista de Jogadores</h1>
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
        <a href="jogadorcadastrarform.html"><img src="./imagens/incluir.png" alt="Incluir Jogador"></a>
    </div>
</body>
</html>