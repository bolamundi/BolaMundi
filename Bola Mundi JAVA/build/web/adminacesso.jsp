    <%

       String tipo = (String) request.getSession().getAttribute("Acesso"); 
   
        if (tipo.equals("Admin")) {
           
        }
        else {
            response.sendRedirect("index.jsp");
        }
        
    %>
