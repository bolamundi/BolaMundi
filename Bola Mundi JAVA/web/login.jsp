<%@page import="classes.Usuario"%>
<%@ page import="dao.Dao, dao.Dao"%>
<%@page contentType="text/html" pageEncoding="UTF-8"%>
<jsp:useBean id="u" class="classes.Usuario"></jsp:useBean>
<jsp:setProperty property="*" name="u" />
    
<%
    String email = request.getParameter("Email");
    String senha = request.getParameter("Senha");
    
    Usuario usuario = Dao.logar(email, senha);
    
    if(usuario!=null){
        request.getSession().setAttribute("Admin", usuario.getAcesso());    
        response.sendRedirect("bolamundi.jsp");
        
    }else{
        response.sendRedirect("index.jsp");
    }
%>

