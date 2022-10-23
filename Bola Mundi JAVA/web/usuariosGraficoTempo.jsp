        <%@  
        
 taglib uri="http://java.sun.com/jsp/jstl/core" prefix="c" %>
  <%@ page import="dao.Dao, classes.Usuario, java.util.*, org.json.simple.JSONObject"%>
        <%               
	                int[] diasemana = Dao.getUsuarioTempo();
	                request.setAttribute("semanasAno", diasemana);  
	
	
	JSONObject jo = new JSONObject();
	jo.put("status", true);
	jo.put("dados", diasemana);
	
	            %>
	<%=jo%>
