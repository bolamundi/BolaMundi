<%@ page import="dao.Dao"%>
<jsp:useBean id="u" class="classes.Usuario"></jsp:useBean>
<jsp:setProperty property="*" name="u" />
    
<%
    int i = Dao.cadastrarUsuario(u);
    
    if(i>0){
        response.sendRedirect("usuarioscontrolar.jsp");
    }else{
        response.sendRedirect("usuariocadastrarerro.jsp");        
    }
%>