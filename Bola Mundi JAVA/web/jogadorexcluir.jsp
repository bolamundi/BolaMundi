<%@ page import="dao.Dao"%>
<jsp:useBean id="j" class="classes.Jogador"></jsp:useBean>
<jsp:setProperty property="*" name="j" />
    
<%
    int i = Dao.excluirJogador(j);
    if(i>0){
        response.sendRedirect("jogadorescontrolar.jsp?pag=1");
    }else{
        response.sendRedirect("usuarioserro.jsp");        
    }
%>
