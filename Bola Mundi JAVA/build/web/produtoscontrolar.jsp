<%@ taglib uri="http://java.sun.com/jsp/jstl/core" prefix="c" %>
<%@ page import="dao.Dao, classes.Produto, java.util.*"%>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" href="./css/tabela.css">
        <link rel="shortcut icon" type="image/x-icon" href="imagens/favicon.png" />
        <title>Lista de Produtos</title>
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
                
                 int contagem = Dao.getContagemProdutos();
                int i;
                request.setAttribute("contagem", contagem);
                 List<Produto> list = Dao.getProdutos(id, total);
                request.setAttribute("list", list);
                if(contagem%total==0){
                    contagem=contagem/total;
                }else{
                    contagem=contagem/total + 1;    
                }
            %>
        
            <h1>Lista de Produtos</h1>
            <table>
                <tr><th>Id</th><th>Nome</th><th>Preço</th><th>Número de Vendas</th><th colspan="2">Ações</th></tr>
                <c:forEach items="${list}" var="produto">
                <tr>
                    <td>${produto.getId()}</td>
                    <td>${produto.getNome()}</td>
                    <td>${produto.getPreco()}</td>            
                    <td>${produto.getNumero_vendas()}</td>    
                    <td><a href="produtoeditarform.jsp?id=${produto.getId()}"><img src="./imagens/editar.png" alt="Editar Produto"></a></td>
                    <td><a href="produtoexcluir.jsp?id=${produto.getId()}"><img src="./imagens/excluir.png" alt="Excluir Produto"></a></td>            
                </tr>
                </c:forEach>
            </table>
             <div class="pagination">
                    <% for(i=1; i <= contagem; i++) {%>
                            <a href="produtoscontrolar.jsp?pag=<%=i%>"><%=i%></a>
                    <% } %>
                </div>  
        <a href="produtocadastrarform.html"><img src="./imagens/incluir.png" alt="Incluir Produto"></a>
    </div>
</body>
</html>