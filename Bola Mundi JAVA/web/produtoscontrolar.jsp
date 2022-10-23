<%@ taglib uri="http://java.sun.com/jsp/jstl/core" prefix="c" %>
<%@ page import="dao.Dao, classes.Produto, java.util.*"%>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" href="./css/tabela.css">
        <link rel="shortcut icon" type="image/x-icon" href="imagens/favicon.png" />
        <title>Lista de Produtos</title>
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
                int total = 10;
                
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
        
            <h1 style="text-align:center;">Lista de Produtos</h1>
            <hr>
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
        <a href="produtocadastrarform.html" style="margin-left: 92%;"><img src="./imagens/incluir.png" alt="Incluir Produto"></a>
    </div>
                

 
</body>
</html>