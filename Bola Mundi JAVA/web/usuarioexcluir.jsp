<%@ page import="dao.Dao"%>
<jsp:useBean id="u" class="classes.Usuario"></jsp:useBean>
<jsp:setProperty property="*" name="u" />
    
<%
    int i = Dao.excluirUsuario(u);
    if(i>0){
        response.sendRedirect("usuarioscontrolar.jsp?pag=1");
    }else{
        response.sendRedirect("usuarioserro.jsp");        
    }
%>