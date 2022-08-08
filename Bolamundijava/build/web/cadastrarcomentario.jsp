<%@ page import="dao.Dao"%>
<jsp:useBean id="c" class="classes.Comentario"></jsp:useBean>
<jsp:setProperty property="*" name="c" />
    
<%
    int i = Dao.cadastrarComentario(c);
    
    if(i>0){
        response.sendRedirect("selecaobrasileira.jsp");
    }else{
        response.sendRedirect("cadastrarcomentarioerro.jsp");        
    }
%>
