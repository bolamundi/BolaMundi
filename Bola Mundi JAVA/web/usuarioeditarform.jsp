<%@ page import="dao.Dao, classes.Usuario, java.util.*"%>
<%@page contentType="text/html" pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" href="./css/estilo.css">
        <title>Editar Usuário</title>
        
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

<div class="content">

        <%
            String id = request.getParameter("id");
            Usuario usuario = Dao.getUsuarioById(Integer.parseInt(id));
        %>
        <form action="usuarioeditar.jsp" method="post">
            <h3>Editar Usuário Id: <%=usuario.getId()%></h3>
            <hr>
            <input type="hidden" name="id" value="<%=usuario.getId()%>">
            <p>Nome do usuário</p>
            <input type="text" name="nome" value="<%=usuario.getNome()%>" placeholder="Seu nome..." required>
            <p>E-mail do usuário</p>
            <input type="email" name="email" value="<%=usuario.getEmail()%>" placeholder="Seu e-mail..." required>	     
        <% if (usuario.getAcesso().equals("Admin")){%>
            <input type="radio" name="acesso" value="Comum" required><label>Comum</label>
            <input type="radio" name="acesso" value="Admin" checked="true"><label>Admin</label>        
        <%}else{%>
            <input type="radio" name="acesso" value="Comum" required checked="true"><label>Comum</label>
            <input type="radio" name="acesso" value="Admin"><label>Admin</label>        
        <%}%>       
            <input type="submit" value="Editar">
        </form>
            
</div>
    </body>
</html>
