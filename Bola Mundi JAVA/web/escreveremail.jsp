<html>
    
<head>
    
	<meta charset="utf-8">
	<title>Redijir emails</title>
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- Font-->
	<link rel="stylesheet" type="text/css" href="css/opensans-font.css">
	<link rel="stylesheet" type="text/css" href="fonts/line-awesome/css/line-awesome.min.css">
	<!-- Jquery -->
	<link rel="stylesheet" href="https://jqueryvalidation.org/files/demo/site-demos.css">
	<!-- Main Style Css -->
        <link rel="stylesheet" href="css/enviaremails.css"/>
        
        <style>
            body {
                background-color: #f2f2f2;
            }

            form {
                background-color: white;
                border-radius: 25px;
                position:absolute;
                border-radius: 20px;
                font-family: Arial;
                box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
            }

            h2 {
                 margin-top: 25px;
                 color: red;
                 text-align: center;
            }

            input[type=text], select, textarea {
              width: 80%;
              padding: 12px;
              margin-left: 10%;
              border: 1px solid #ccc;
              border-radius: 4px;
              resize: vertical;
            }

            .col-25 {
              width: 25%;
              margin-left: 10%;
            }

            input[type=submit] {
              width: 80%;
              background-color:  #ff4d4d;
              color: white;
              border: none;
              border-radius: 25px;
              cursor: pointer;
              margin-top: 1%;
              margin-left: 10%;
            }

            input[type=submit]:hover {
              background-color: #45a049;
            }

            img {
              margin: auto;
              display: block;
            }

            hr {
               margin-top: 15px;
               border: 0.5px solid  #f2f2f2;
                margin-bottom: 25px; 
            }

            
        </style>    
            
    
</head>

<body class="form">
    
<div class="topnav">
    <%@include file="menu.jsp"%>
</div>
    
	<div class="page-content">
		<div class="form-v4-content">
			<div class="form">
                            <form class="form-detail"  action="javaemail.jsp" method="post">
                                    <h2>Redija emails promocionais</h2>
                                    <hr>
                                    <img src="imagens/BolaMundi.png">
                                    <div class="form-group">
                                            <div class="form-row form-row-1">
                                                    <div class="col-25">
                                                        <label for="fname">E-mails</label>
                                                      </div>
                                                    <input type="text" name="assunto" size="45" class="input-text">
                                            </div>

                                    </div>
                                    <div class="form-group">
                                            <div class="form-row form-row-1 ">
                                            <div class="col-25">
                                                <label for="fname">Mensagem</label>
                                            </div>
                                            <textarea name="comenta" class="input-text" cols="50" rows="10"> </textarea>
                                    </div>


                                    </div>
                                    <div class="form-row-last">
                                            <input type="submit" name="Submit" class="register" value="Enviar emails">
                                    </div>
                             </form>
		        </div>
	        </div>
	
	</div>
    
</body>

</html>

