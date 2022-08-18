package org.apache.jsp;

import javax.servlet.*;
import javax.servlet.http.*;
import javax.servlet.jsp.*;
import dao.Dao;
import java.util.*;

public final class chartcontrole_jsp extends org.apache.jasper.runtime.HttpJspBase
    implements org.apache.jasper.runtime.JspSourceDependent {

  private static final JspFactory _jspxFactory = JspFactory.getDefaultFactory();

  private static java.util.List<String> _jspx_dependants;

  private org.glassfish.jsp.api.ResourceInjector _jspx_resourceInjector;

  public java.util.List<String> getDependants() {
    return _jspx_dependants;
  }

  public void _jspService(HttpServletRequest request, HttpServletResponse response)
        throws java.io.IOException, ServletException {

    PageContext pageContext = null;
    HttpSession session = null;
    ServletContext application = null;
    ServletConfig config = null;
    JspWriter out = null;
    Object page = this;
    JspWriter _jspx_out = null;
    PageContext _jspx_page_context = null;

    try {
      response.setContentType("text/html;charset=UTF-8");
      pageContext = _jspxFactory.getPageContext(this, request, response,
      			null, true, 8192, true);
      _jspx_page_context = pageContext;
      application = pageContext.getServletContext();
      config = pageContext.getServletConfig();
      session = pageContext.getSession();
      out = pageContext.getOut();
      _jspx_out = out;
      _jspx_resourceInjector = (org.glassfish.jsp.api.ResourceInjector) application.getAttribute("com.sun.appserv.jsp.resource.injector");

      out.write("\n");
      out.write("\n");
      out.write("\n");
      out.write("\n");
      out.write("<script>\n");
      out.write("  //  var numpart= Dao.getParticipante();\n");
      out.write("      //  var numadm= Dao.getAdm();\n");
      out.write("       var numpart= 6;\n");
      out.write("      var numadm= 8;\n");
      out.write("        \n");
      out.write("var ctx = document.getElementById('myChart');\n");
      out.write("\n");
      out.write("//var quantidades = [numpart,numadm];\n");
      out.write("//var acessos = ['Administradores','Usuários'];\n");
      out.write("\n");
      out.write("var stars = [12, 19, 3, 5, 2, 3];\n");
      out.write("var frameworks = [\"React\", \"Angular\", \"Vue\", \"Hyperapp\", \"Omi\"];\n");
      out.write("\n");
      out.write("var pieChart= new Chart(ctx, {\n");
      out.write("    type: \"bar\",\n");
      out.write("    data: {labels: frameworks , \n");
      out.write("    datasets: [\n");
      out.write("{\n");
      out.write("label:\"frameworks\",\n");
      out.write("data: stars,\n");
      out.write("backgroundColor:[\n");
      out.write("    \"rgba(255, 99, 132, 1)\",\n");
      out.write("    \"rgba(54, 162, 235, 1)\",\n");
      out.write("    \"rgba(255, 206, 86, 1)\",\n");
      out.write("    \"rgba(75, 192, 192, 1)\",\n");
      out.write("    \"rgba(153, 102, 255, 1)\",\n");
      out.write("    ],\n");
      out.write("    borderWidth: 5 // afeta a cor e a largura da borda \n");
      out.write("\n");
      out.write("\n");
      out.write("}\n");
      out.write("\n");
      out.write("    ]\n");
      out.write("    }\n");
      out.write("    \n");
      out.write("    \n");
      out.write("    \n");
      out.write("    \n");
      out.write("  //  options: {\n");
      out.write("//maintainAspectRatio: false ,//para fazer ele siguir a altura q tu botou na tag\n");
      out.write("//responsive: false//para fazer ele seguir a largura q tu botou na  tag html\n");
      out.write("  //  } // this is optional\n");
      out.write("//configuration object which allows you specify the chart type, data and \n");
      out.write("//chart options.\n");
      out.write(" }\n");
      out.write(");\n");
      out.write("    \n");
      out.write("    \n");
      out.write("    \n");
      out.write("    \n");
      out.write("    \n");
      out.write("</script>");
    } catch (Throwable t) {
      if (!(t instanceof SkipPageException)){
        out = _jspx_out;
        if (out != null && out.getBufferSize() != 0)
          out.clearBuffer();
        if (_jspx_page_context != null) _jspx_page_context.handlePageException(t);
        else throw new ServletException(t);
      }
    } finally {
      _jspxFactory.releasePageContext(_jspx_page_context);
    }
  }
}
