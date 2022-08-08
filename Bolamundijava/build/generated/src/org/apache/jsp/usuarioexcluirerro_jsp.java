package org.apache.jsp;

import javax.servlet.*;
import javax.servlet.http.*;
import javax.servlet.jsp.*;

public final class usuarioexcluirerro_jsp extends org.apache.jasper.runtime.HttpJspBase
    implements org.apache.jasper.runtime.JspSourceDependent {

  private static final JspFactory _jspxFactory = JspFactory.getDefaultFactory();

  private static java.util.List<String> _jspx_dependants;

  static {
    _jspx_dependants = new java.util.ArrayList<String>(1);
    _jspx_dependants.add("/menu.jsp");
  }

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
      out.write("<!DOCTYPE html>\n");
      out.write("<html>\n");
      out.write("    <head>\n");
      out.write("        <meta content=\"text/html; charset=UTF-8\">\n");
      out.write("        <title>Erro detectado</title>\n");
      out.write("    </head>\n");
      out.write("    <body>\n");
      out.write("        \n");
      out.write("         <div class=\"topnav\">\n");
      out.write("    ");
      out.write("<head>\n");
      out.write("<meta charset=\"utf-8\">\n");
      out.write("<link rel=\"stylesheet\" href=\"css/cssmenu.css\"  >\n");
      out.write("</head>\n");
      out.write("<body>\n");
      out.write("<ul>\n");
      out.write("  <li><a href=\"index.jsp\">Início</a></li>\n");
      out.write("  <li><a href=\"historia.jsp\">História</a></li>\n");
      out.write("  <li><a href=\"selecaobrasileira.jsp\">Seleção brasileira</a></li>\n");
      out.write("\n");
      out.write("<li class='dropdown'><a href='javascript:void(0)' class='dropbtn'>Usuários</a>\n");
      out.write("<div class='dropdown-content'></a><a href='usuarioscontrolar.jsp'>Controlar Usuários</a><a href='usuariocadastrarform.html'>Cadastrar Usuário</a></div></li>\n");
      out.write("\n");
      out.write("</ul>\n");
      out.write("\n");
      out.write("</body>");
      out.write("\n");
      out.write("</div>\n");
      out.write("        <h1>Erro ao conectar com o banco de dados </h1>  \n");
      out.write("    </body>\n");
      out.write("    <script>\n");
      out.write("      \n");
      out.write("            ");

               
    //  response.sendRedirect("usuarioscontrolar.jsp");
          //criar um metodo aqui dentro ou colocar dentro de uma func do javascript  
       
      out.write("\n");
      out.write("           \n");
      out.write("           \n");
      out.write("           \n");
      out.write("           \n");
      out.write("    \n");
      out.write("      \n");
      out.write("    //  const myTimeout = setTimeout(myGreeting, 3000);\n");
      out.write("\n");
      out.write("//function myGreeting() {\n");
      out.write("   \n");
      out.write("//}\n");
      out.write("        </script>\n");
      out.write("   \n");
      out.write("</html>\n");
      out.write("\n");
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
