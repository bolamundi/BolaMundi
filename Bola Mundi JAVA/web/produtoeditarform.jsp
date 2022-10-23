<%@ page import="dao.Dao, classes.Produto, java.util.*"%>
<%@page contentType="text/html" pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" href="./css/estilo.css">
        <title>Editar Produto</title>
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
            
            .content h3 {
                margin-top: 25px;
                color: red;
                text-align: center;
            }
            
            .content hr {
                margin-top: 15px;
                border: 0.5px solid  #f2f2f2;
                margin-bottom: 25px;
            }
            
            input[type=text] {
                width: 90%;
                padding: 12px 20px;
                margin: 8px 0;
                display: block;
                border: 1px solid #ccc;
                border-radius: 4px;
                box-sizing: border-box;
                font-family: Arial;
                margin-left: 5%;
            }
            
            input[type=email] {
                width: 90%;
                padding: 12px 20px;
                margin: 8px 0;
                display: block;
                border: 1px solid #ccc;
                border-radius: 4px;
                box-sizing: border-box;
                font-family: Arial;
                margin-left: 5%;
            }
            input[type=radio] {
                font-family: Arial;
                margin-left: 5%;
            }
            
            input[type=submit] {
                width: 90%;
                background-color: red;
                color: white;
                padding: 14px 20px;
                margin: 8px 0;
                border: none;
                border-radius: 4px;
                cursor: pointer;
                font-family: Arial;
                margin-left: 5%;                
              }
              
              p {
                  margin-left: 5%;
              }  
            
    </style> 
    </head>
    <body>
        
        <div class="topnav">
    <%@include file="menu.jsp"%>
</div>
        <%
            String id = request.getParameter("id");
            Produto produto = Dao.getProdutoById(Integer.parseInt(id));
        %>
        
        <div class ="content">
        <form action="produtoeditar.jsp" method="post">
            <h3>Editar Produto Id: <%=produto.getId()%></h3>
            <input type="hidden" name="id" value="<%=produto.getId()%>">
            <p>Nome do produto</p>            
            <input type="text" name="nome" value="<%=produto.getNome()%>" placeholder="Seu nome..." required>	
            <p>Número de vendas do produto</p>            
            <input type="text" name="numero_vendas" value="<%=produto.getNumero_vendas()%>" placeholder="Seu número de vendas..." required>
            <p>Preço do produto</p>  
            <input type="text" name="preco" value="<%=produto.getPreco()%>" placeholder="Seu preço..." required>	     
            <input type="submit" value="Editar">
        </form>
        </div>    
    </body>
</html>