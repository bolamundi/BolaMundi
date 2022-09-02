<%@ taglib uri="http://java.sun.com/jsp/jstl/core" prefix="c" %>
<%@ page import="dao.Dao, classes.Usuario, java.util.*"%>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" href="./css/tabela.css">
        <link rel="shortcut icon" type="image/x-icon" href="imagens/favicon.png" />

        <script src="scripts/filtrar.js" type="text/javascript"></script>
        <title>Lista de Usuários</title>
    </head>
    <body>
            <div class="topnav">
                <%@include file="menu.jsp"%>
            </div>
            
            <%    
	            List<Usuario> list = Dao.getRelatorio();
	             request.setAttribute("list", list);
	                
	            %>
                    
                    <h1>Relatório de Usuários</h1>
	            
	            		<input type="text" id="filtrarnomes" onkeyup="filtrar('filtrarnomes', 1)" placeholder="Busca de nomes">
				<input type="text" id="filtraremails" onkeyup="filtrar('filtraremails', 2)" placeholder="Busca de emails">
                    
            <h1>Lista de Usuários</h1>
            <table id="myTable">
                <tr><th>Id</th><th>Nome</th><th>Email</th></tr>
                <c:forEach items="${list}" var="usuario">
                <tr>
                    <td>${usuario.getId()}</td>
                    <td>${usuario.getNome()}</td>
                    <td>${usuario.getEmail()}</td>            
                    <td>${usuario.getSenha()}</td>       
                </tr>
                </c:forEach>
            </table>