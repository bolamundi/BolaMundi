<!DOCTYPE html>
<html lang="pt-br">
<head>
<title>Bola Mundi</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" type="image/x-icon" href="imagens/favicon.png" />

<style>
             .content {
                background-color: white;
                position:absolute;
                border-radius: 20px;
                font-family: Arial;
                margin-left: 20%;
                margin-top: 3%;
                width: 60%;
                box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
                margin-bottom: 3%;
            }
            
            table {                   
                font-family: Arial, Helvetica, sans-serif;
                border-collapse: collapse;
                width: 97%;
                margin-left: 1.5%;
                margin-right: 1.5%;
                overflow: hidden;
                border: solid white 3px;
                 -webkit-border-radius: 25px;
                     -moz-border-radius: 25px;
                          border-radius: 25px;
              }

              td, th {
                padding: 7px;
                text-align: center;
              }


              th {
                padding-top: 12px;
                padding-bottom: 12px;
                background-color: #e60000;
                color: white;
              }

              td {
                  background-color: white;
              }
              
              .content h1 {
                margin-top: 25px;
                color: red;
                text-align: center;
            }
            
            .content hr {
                margin-top: 15px;
                border: 0.5px solid  #f2f2f2;
                margin-bottom: 25px;
            }
            
            #gfg {
                background-position: 10px 10px;
                background-repeat: no-repeat;
                width: 95%;
                font-size: 16px;
                padding: 12px 20px 12px 40px;
                border: 1px solid #ddd;
                margin-bottom: 12px;
              }

</style>

</head>
<body>
    

<div class="topnav">
    <%@include file="menu.jsp"%>
</div>

<div class="content" id="proximosjogos">
    <div class="tabela">
        <h1>Próximos Jogos</h1>
        <hr> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
                      
        <center>
            <b> <input id="gfg" type="text"placeholder="Pesquise aqui"> </b>
        	<br>
        	<br>
                    <table id="table">
            		<tr>
               		    <th>Seleções</th>
               		    <th>Data</th>
			    <th>Horário</th>
               		    <th>Local</th>
			    <th>Status</th>
			    <th>Vencedor</th>
			</tr> 
            		    <tbody id="informacoes">
            		        <tr>
                                    <td>Senegal X Holanda</td>
            			    <td>21/11</td>
				    <td>07:00</td>
				    <td>Al Thumama</td>
				    <td>Não realizado</td>
            			    <td>Sem informação</td>
		    	        </tr>
            		        <tr>
				    <td>Inglaterra X Irã</td>
           			    <td>21/11</td>
				    <td>10:00</td>
				    <td>Khalifa</td>
				    <td>Não realizado</td>
      				    <td>Sem informação</td>
				</tr>
    				<tr>
				    <td>Catar X Equador</td>
      				    <td>21/11</td>
				    <td>13:00</td>
				    <td>Al Bayt Stadium</td>
				    <td>Não realizado</td>
      				    <td>Sem informação</td>
				</tr>
				<tr>
				    <td>Estados Unidos x Gales</td>
      				    <td>21/11</td>
				    <td>16:00</td>
				    <td>Ahmad Bin Ali </td>
				    <td>Não realizado</td>
      				    <td>Sem informação</td>
				</tr>
				<tr>
                                    <td>Argentina x Arábia Saudita</td>
                                    <td>22/11</td>
                                    <td>07:00</td>
                                    <td>Lusail</td>
                                    <td>Não realizado</td>
                                    <td>Sem informação</td>
                                </tr>
                                <tr>
                                    <td>Dinamarca x Tunísia</td>
                                    <td>22/11</td>
                                    <td>10:00</td>
                                    <td>Education City</td>
                                    <td>Não realizado</td>
      				    <td>Sem informação</td>
                                </tr>
                                <tr>
                                    <td>México x Polônia</td>
                                    <td>22/11</td>
                                    <td>13:00</td>
                                    <td>Porto de Doha</td>
                                    <td>Não realizado</td>
                                    <td>Sem informação</td>
                                </tr>
                                <tr>
                                    <td>França x A confirmar</td>
                                    <td>22/11</td>
                                    <td>16:00</td>
                                    <td>Al Janoub</td>
                                    <td>Não realizado</td>
                                    <td>Sem informação</td>
                                </tr>
                                <tr>
                                    <td>Marrocos x Croácia</td>
                                    <td>23/11</td>
                                    <td>07:00</td>
                                    <td>Al Bayt</td>
                                    <td>Não realizado</td>
                                    <td>Sem informação</td>
                                </tr>
                                <tr>
                                    <td>Alemanha x Japão</td>
                                    <td>23/11</td>
                                    <td>10:00</td>
                                    <td> Khalifa</td>
                                    <td>Não realizado</td>
                                    <td>Sem informação</td>
                                </tr>
                                <tr>
                                    <td>Espanha x A confirmar</td>
                                    <td>23/11</td>
                                    <td>13:00</td>
                                    <td>Al Thumama</td>
                                    <td>Não realizado</td>
                                    <td>Sem informação</td>
                                </tr>
                                <tr>
                                    <td>Bélgica x Canadá</td>
                                    <td>23/11</td>
                                    <td>16:00</td>
                                    <td>Ahmad Bin Ali </td>
                                    <td>Não realizado</td>
                                    <td>Sem informação</td>
                                </tr>
                                <tr>
                                    <td>Suíça x Camarões</td>
                                    <td>24/11</td>
                                    <td>07:00</td>
                                    <td>Al Janoub</td>
                                    <td>Não realizado</td>
                                    <td>Sem informação</td>
                                </tr>
                                <tr>
                                    <td>Uruguai x Coreia do Sul</td>
                                    <td>24/11</td>
                                    <td>10:00</td>
                                    <td>Education City</td>
                                    <td>Não realizado</td>
                                    <td>Sem informação</td>
                                </tr>
                                <tr>
                                    <td>Portugal x Gana</td>
                                     <td>24/11</td>
                                    <td>13:00</td>
                                    <td>Porto de Doha</td>
                                    <td>Não realizado</td>
                                    <td>Sem informação</td>
                                </tr>
                                <tr>
                                    <td>Brasil x Sérvia</td>
                                    <td>24/11</td>
                                    <td>16:00</td>
                                    <td>Lusail</td>
                                    <td>Não realizado</td>
                                    <td>Sem informação</td>
                                </tr>
                                <tr>
                                    <td>Irã x País de Gales</td>
                                    <td>25/11</td>
                                    <td>07:00</td>
                                    <td>Ahmad Bin Ali </td>
                                    <td>Não realizado</td>
                                    <td>Sem informação</td>
                                </tr>
                                <tr>
                                    <td>Catar x Senegal</td>
                                    <td>25/11</td>
                                    <td>10:00</td>
                                    <td>Al Thumama</td>
                                    <td>Não realizado</td>
                                    <td>Sem informação</td>
                                </tr>
                                <tr>
                                    <td>Holanda x Equador</td>
                                    <td>25/11</td>
                                    <td>13:00</td>
                                    <td>Khalifa</td>
                                    <td>Não realizado</td>
                                    <td>Sem informação</td>
                                </tr>
                                <tr>
                                    <td>Inglaterra x Estados Unidos</td>
                                    <td>25/11</td>
                                    <td>16:00</td>
                                    <td>Al Bayt</td>
                                    <td>Não realizado</td>
                                    <td>Sem informação</td>
                                </tr>
                                <tr>
                                    <td>Tunísia x A confirmar</td>
                                    <td>26/11</td>
                                    <td>07:00</td>
                                    <td>Al Janoub </td>
                                    <td>Não realizado</td>
                                    <td>Sem informação</td>
                                </tr>
                                <tr>
                                    <td>Polônia x Arábia Saudita</td>
                                    <td>26/11</td>
                                    <td>10:00</td>
                                    <td>Education City</td>
                                    <td>Não realizado</td>
                                    <td>Sem informação</td>
                                </tr>
                                <tr>
                                    <td>França x Dinamarca</td>
                                    <td>26/11</td>
                                    <td>13:00</td>
                                    <td>Porto de Doha</td>
                                    <td>Não realizado</td>
                                    <td>Sem informação</td>
                                </tr>
                                <tr>
                                    <td>Argentina x México</td>
                                    <td>26/11</td>
                                    <td>16:00</td>
                                    <td>Lusail</td>
                                    <td>Não realizado</td>
                                    <td>Sem informação</td>
                                </tr>     
                                <tr>
                                    <td>Japão x A confirmar</td>
                                    <td>27/11</td>
                                    <td>07:00</td>
                                    <td>Ahmad Bin Ali</td>
                                    <td>Não realizado</td>
                                    <td>Sem informação</td>
                                </tr>
                                <tr>
                                    <td>Bélgica x Marrocos</td>
                                    <td>27/11</td>
                                    <td>10:00</td>
                                    <td>Al Thumama</td>
                                    <td>Não realizado</td>
                                    <td>Sem informação</td>
                                </tr>
                                <tr>
                                    <td>Croácia x Canadá</td>
                                    <td>27/11</td>
                                    <td>13:00</td>
                                    <td> Khalifa</td>
                                    <td>Não realizado</td>
                                    <td>Sem informação</td>
                                </tr>
                                <tr>
                                    <td>Espanha x Alemanha</td>
                                    <td>27/11</td>
                                    <td>16:00</td>
                                    <td>Al Bayt</td>
                                    <td>Não realizado</td>
                                    <td>Sem informação</td>
                               </tr>
                               <tr>
                                    <td>Camarões x Sérvia</td>
                                    <td>28/11</td>		
                                    <td>07:00</td>
                                    <td>Al Janoub </td>
                                    <td>Não realizado</td>
                                    <td>Sem informação</td>
                                </tr>
                                <tr>
                                    <td>Coreia do Sul x Gana</td>
                                    <td>28/11</td>
                                    <td>10:00</td>
                                    <td>Education City</td>
                                    <td>Não realizado</td>
                                    <td>Sem informação</td>
                                </tr>
                                <tr>
                                    <td>Brasil x Suíça</td>
                                    <td>28/11</td>
                                    <td>13:00</td>
                                    <td>Porto de Doha</td>
                                    <td>Não realizado</td>
                                    <td>Sem informação</td>
                                </tr>
                                <tr>
                                    <td>Portugal x Uruguai</td>
                                    <td>28/11</td>
                                    <td>16:00</td>
                                    <td>Lusail</td>
                                    <td>Não realizado</td>
                                    <td>Sem informação</td>
                                </tr>
                                <tr>
                                    <td>Holanda x Catar</td>
                                    <td>29/11</td>	
                                    <td>12:00</td>
                                    <td>Al Bayt </td>
                                    <td>Não realizado</td>
                                    <td>Sem informação</td>
                                </tr>
                                <tr>
                                    <td>Equador x Senegal</td>
                                    <td>29/11</td>
                                    <td>12:00</td>
                                    <td>Khalifa</td>
                                    <td>Não realizado</td>
                                    <td>Sem informação</td>
                                </tr>
                                <tr>
                                    <td>Inglaterra x País de Gales</td>
                                    <td>29/11</td>
                                    <td>16:00</td>
                                    <td>Al Rayyan</td>
                                    <td>Não realizado</td>
                                    <td>Sem informação</td>
                                </tr>
                                <tr>
                                    <td> Irã x Estados Unidos</td>
                                    <td>29/11</td>
                                    <td>16:00</td>
                                    <td> Al Thumama</td>
                                    <td>Não realizado</td>
                                    <td>Sem informação</td>
                                </tr>
                                <tr>
                                    <td>Tunísia x França</td>
                                    <td>30/11 </td>
                                    <td>12:00</td>
                                    <td>Education City </td>
                                    <td>Não realizado</td>
                                    <td>Sem informação</td>
                                </tr>
                                <tr>
                                    <td>Dinamarca x A confirmar</td>
                                    <td>30/11 </td>
                                    <td>12:00</td>
                                    <td>Al Janoub</td>
                                    <td>Não realizado</td>
                                    <td>Sem informação</td>
                                </tr>
                                <tr>
                                    <td>Polônia x Argentina</td>
                                    <td>30/11 </td>
                                    <td>16:00</td>
                                    <td>Porto de Doha</td>
                                    <td>Não realizado</td>
                                    <td>Sem informação</td>
                                </tr>
                                <tr>
                                    <td>Arábia Saudita x México</td>
                                    <td>30/11 </td>
                                    <td>16:00</td>
                                    <td>Lusail</td>
                                    <td>Não realizado</td>
                                    <td>Sem informação</td>
                                </tr>
                                <tr>
                                    <td>Croácia x Bélgica</td>
                                    <td>1/12</td>
                                    <td>12:00</td>
                                    <td>Al Rayyan</td>
                                    <td>Não realizado</td>
                                    <td>Sem informação</td>
                                </tr>
                                <tr>
                                    <td>Canadá x Marrocos</td>
                                    <td>1/12</td>
                                    <td>12:00</td>
                                    <td>Al Thumama</td>
                                    <td>Não realizado</td>
                                    <td>Sem informação</td>
                                </tr>
                                <tr>
                                    <td>Japão x Espanha</td>
                                    <td>1/12</td>
                                    <td>16:00</td>
                                    <td>Khalifa</td>
                                    <td>Não realizado</td>
                                    <td>Sem informação</td>
                                </tr>
                                <tr>
                                    <td>Alemanha x A confirmar</td>
                                    <td>1/12</td>
                                    <td>16:00</td>
                                    <td>Al Bayt</td>
                                    <td>Não realizado</td>
                                    <td>Sem informação</td>
                                </tr>
                                <tr>
                                    <td>Coreia do Sul x Portugal</td>
                                    <td>2/12 </td>
                                    <td>12:00</td>
                                    <td>Education City </td>
                                    <td>Não realizado</td>
                                    <td>Sem informação</td>
                                </tr>
                                <tr>
                                    <td>Gana x Uruguai</td>
                                    <td>2/12 </td>
                                    <td>12:00</td>
                                    <td>Al Janoub</td>
                                    <td>Não realizado</td>
                                    <td>Sem informação</td>
                                </tr>
                                <tr>
                                    <td>Camarões x Brasil</td>
                                    <td>2/12 </td>
                                    <td>16:00</td>
                                    <td> Lusail</td>
                                    <td>Não realizado</td>
                                    <td>Sem informação</td>
                                </tr>
                                <tr>
                                    <td>Sérvia x Suíça</td>
                                    <td>2/12 </td>
                                    <td>16:00</td>
                                    <td>Porto de Doha</td>
                                    <td>Não realizado</td>
                                    <td>Sem informação</td>
                                </tr>
                              
           		</tbody>
              </table> 
        </center>
    </div>
</div>

<script>
      $(document).ready(function() {
                $("#gfg").on("keyup", function() {
                    var value = $(this).val().toLowerCase();
                    $("#informacoes tr").filter(function() {
                        $(this).toggle($(this).text()
                        .toLowerCase().indexOf(value) > -1)
                    });
                });
            });
</script>





</div>                                          
</body>
</html>

