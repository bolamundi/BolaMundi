<%@ page import="dao.Dao"%>
<jsp:useBean id="u" class="classes.Usuario"></jsp:useBean>
<jsp:setProperty property="*" name="u" />
    
<%
    int i = Dao.editarUsuario(u);
     if(i>0){
        response.sendRedirect("usuarioscontrolar.jsp");
    }else{
        response.sendRedirect("usuarioeditarerro.jsp");        
    }
%>
