<%@ page import="dao.Dao"%>
<jsp:useBean id="p" class="classes.Produto"></jsp:useBean>
<jsp:setProperty property="*" name="p" />
    
<%
    int i = Dao.excluirProduto(p);
    if(i>0){
        response.sendRedirect("produtoscontrolar.jsp?pag=1");
    }else{
        response.sendRedirect("usuarioserro.jsp");        
    }
%>
