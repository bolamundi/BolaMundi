<%-- 
    Document   : index
    Created on : 15/10/2022, 22:20:26
    Author     : carol
--%>

<%@page contentType="text/html" pageEncoding="UTF-8"%>
<!DOCTYPE html>

<html>
    
    <head>
        
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link  rel="stylesheet" href="css/login.css">
        <title>Login Administrador - Bola Mundi</title>
        
    </head>
    
    <body>
        
        <div class="container" >
            
                <form class = "form" action="login.jsp" method="post">
                    
                    <h2>Login do Administrador</h2>
                    
                    <img src="imagens/BolaMundi.png" alt="Minha Figura">

                        <label class="label-input">
                            
                                <input type="text" name="Email" placeholder="Email">
                                
                        </label>
                    
                        <label class="label-input">
                            
                                <input type="password" name="Senha" placeholder="Senha">
                                
                        </label>
                    
                    <button type="submit" value="Entrar" class="btn btn-second" style=" width: 100%;background-color:  #ff4d4d;color: white;padding: 14px 20px;margin: 8px 0;border: none;border-radius: 15px;cursor: pointer;">Login</button> 
                </form>
            
        </div>
              
    </body>
    
</html>
