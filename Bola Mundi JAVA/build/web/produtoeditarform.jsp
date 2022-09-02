<%@ page import="dao.Dao, classes.Produto, java.util.*"%>
<%@page contentType="text/html" pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" href="./css/estilo.css">
        <title>Editar Produto</title>
    </head>
    <body>
        <%
            String id = request.getParameter("id");
            Produto produto = Dao.getProdutoById(Integer.parseInt(id));
        %>
        <form action="produtoeditar.jsp" method="post">
            <h3>Editar Produto Id: <%=produto.getId()%></h3>
            <input type="hidden" name="id" value="<%=produto.getId()%>">
            <input type="text" name="nome" value="<%=produto.getNome()%>" placeholder="Seu nome..." required>	
            <input type="text" name="numero_vendas" value="<%=produto.getNumero_vendas()%>" placeholder="Seu número de vendas..." required>	               
            <input type="text" name="preco" value="<%=produto.getPreco()%>" placeholder="Seu preço..." required>	     
            <input type="submit" value="Editar">
        </form>
    </body>
</html>