<%@page import="classes.Usuario"%>
<%@ page import="dao.Dao"%>
<jsp:useBean id="u" class="classes.Usuario"></jsp:useBean>
<jsp:setProperty property="*" name="u" />

<%@include file="acessoadm.jsp"%>

<%
    int i = Usuario.bloquearUsuario(u);
    
    if(i>0){
        response.sendRedirect("usuarioscontrolar.jsp?pag=1");
    }else{
        response.sendRedirect("usuariobloquear-erro.jsp");        
    }
%>