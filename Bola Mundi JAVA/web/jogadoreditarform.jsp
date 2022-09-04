<%@ page import="dao.Dao, classes.Jogador, java.util.*"%>
<%@page contentType="text/html" pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" href="./css/estilo.css">
        <title>Editar Jogador</title>
    </head>
    <body>
        <%
            String id = request.getParameter("id");
            Jogador jogador = Dao.getJogadorById(Integer.parseInt(id));
        %>
        <form action="jogadoreditar.jsp" method="post">
            <h3>Editar Jogador Id: <%=jogador.getId()%></h3>
            <input type="hidden" name="id" value="<%=jogador.getId()%>">
            <input type="text" name="nome" value="<%=jogador.getNome()%>" placeholder="Seu nome..." required>		
            <input type="text" name="pais" value="<%=jogador.getPais()%>" placeholder="Seu país..." required>	     
            <input type="text" name="numero" value="<%=jogador.getNumero()%>" placeholder="Seu número..." required>	     
            <input type="text" name="posicao" value="<%=jogador.getPosicao()%>" placeholder="Sua posicao..." required>	     
            <input type="text" name="idselecao" value="<%=jogador.getIdselecao()%>" placeholder="Id do seu país..." required>	     
          
            <input type="submit" value="Editar">
        </form>
    </body>
</html>