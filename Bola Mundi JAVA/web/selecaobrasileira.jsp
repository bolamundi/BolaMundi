<%@ taglib uri="http://java.sun.com/jsp/jstl/core" prefix="c" %>
<%@ page import="dao.Dao, classes.Usuario, java.util.*, classes.Comentario"%>
<!DOCTYPE html>
<html>
    
 <head> 
 <meta charset="UTF-8">
    <link  rel="stylesheet" href="css/selecaobrasileira.css">
    <link rel="shortcut icon" type="image/x-icon" href="imagens/favicon.png" />
   




 </head>

 <body>
    <div class="topnav">
    <%@include file="menu.jsp"%>
</div> 
  <section>
  
   <h1>SELEÇÃO BRASILEIRA</h1>
  

  
   
   <div class="tbl-header">
    <table cellpadding="0" cellspacing="0" border="0">
     <thead>
      <tr>
      <tr>
        <th>Jogador</th>
        <th>Número</th>
        <th>Posição</th>
        <th>Avaliação</th>
      </tr>
      </thead>
    </table>
  </div>
  
  <div class="tbl-content">
    <table cellpadding="0" cellspacing="0" border="0">
      <tbody>
        <tr>
          <td>Alisson</td>
          <td>1</td>
          <td>Goleiro</td>
          <td ></td>
        </tr>
        <tr>
          <td>Weverton</td>
          <td>12</td>
          <td>Goleiro</td>
          <td></td>
        </tr>
        <tr>
          <td>Ederson</td>
          <td>23</td>
          <td>Goleiro</td>
          <td>-</td>
        </tr>
        <tr>
          <td>Raphinha</td>
          <td>19</td>
          <td>Atacante</td>
          <td></td>
        </tr>
        <tr>
         <td>Marquinhos</td>
         <td>13</td>
         <td>Zagueiro</td>
        <td></td>
        </tr>

  <tr>
    <td>Casemiro</td>
    <td>5</td>
    <td>Meia</td>
    <td></td>
  </tr>
  
  <tr>
    <td>p</td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td>a</td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td>s</td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td>d</td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  
  <tr>
    <td>f</td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td>g</td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td>h</td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td>j</td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  
  <tr>
    <td>k</td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td>l</td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td>ç</td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td>z</td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  
  <tr>
    <td>o</td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td>x</td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td>c</td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td>v</td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  
  <tr>
    <td>b</td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td>n</td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td>m</td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td>q</td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  
  <tr>
    <td>w</td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td>e</td>
    <td></td>
    <td></td>
    <td></td>
      </tbody>
    </table>
  </div>

</section>

<h3 id="h3">O que achou? Comente aqui!</h3>
<form class="form" action="cadastrarcomentario.jsp" method="post" id="form">
<textarea   class="texto" name="texto" id="texto" cols="50" rows="7" placeholder="Digite aqui seu comentário" style="resize:none;" required></textarea>

<input type="submit" class="enviar" id="enviar" value="Enviar"   >
    
  
</form>

<div  class="coments" >
  <%
                List<Comentario> list = Dao.getComentario();
                request.setAttribute("list", list);
            %>
 
               <c:forEach items="${list}" var="comentario">
                
                       
                   <h4>${comentario.getNome_usuario()} </h4> 
                   <p>${comentario.getTexto()}</p>          
             
               
                </c:forEach>
            

</div>
