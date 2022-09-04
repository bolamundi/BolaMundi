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
    
  <div class = "tabela">   
  
   <h1>SELEÇÃO BRASILEIRA</h1>
  
    <table id="jogadores">
      <tr>
        <th>Jogador</th>
        <th>Número</th>
        <th>Posição</th>
      </tr>
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
      </table>

  
  
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
