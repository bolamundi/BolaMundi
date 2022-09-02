<!DOCTYPE html>
<html lang="pt-br">
<head>
<title>Bola Mundi</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" type="image/x-icon" href="imagens/favicon.png" />

</head>
<body>

<div class="topnav">
    <%@include file="menu.jsp"%>
</div>

<header>
  <img src="./imagens/header.png" alt="Bola Mundi" width="100%" height="80%">
  <div class="headertext">
    <h1>Bola Mundi</h1>
  </div>
</header>

<div class="content" id="quemsomos">
   <h2>Quem somos?</h2>
   <p style="background-color: white; width: 1460px; border: 1px dashed red; padding: 50px; margin-left: 205px;">O Bola Mundi � um site que tem como objetivo melhorar a intera��o dos torcedores com a Copa do Mundo de 2022, integrando todos os detalhes sobre a competi��o. Al�m de contribuir com a indica��o de ONGs esportivas confi�veis. Voc� pode conferir essa lista clicando em "Friends Arena".</p>
</div>

<div class="content" id="proximosjogos">
    <div class="tabela">
        <h2>Pr�ximos Jogos</h2>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
                      
        <center>
            <b> <input id="gfg" type="text"placeholder="Search here"> </b>
        	<br>
        	<br>
                    <table id="table">
            		<tr>
               		    <th>Sele��es</th>
               		    <th>Data</th>
			    <th>Hor�rio</th>
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
				    <td>N�o realizado</td>
            			    <td>Sem informa��o</td>
		    	        </tr>
            		        <tr>
				    <td>Inglaterra X Ir�</td>
           			    <td>21/11</td>
				    <td>10:00</td>
				    <td>Khalifa</td>
				    <td>N�o realizado</td>
      				    <td>Sem informa��o</td>
				</tr>
    				<tr>
				    <td>Catar X Equador</td>
      				    <td>21/11</td>
				    <td>13:00</td>
				    <td>Al Bayt Stadium</td>
				    <td>N�o realizado</td>
      				    <td>Sem informa��o</td>
				</tr>
				<tr>
				    <td>Estados Unidos x Gales</td>
      				    <td>21/11</td>
				    <td>16:00</td>
				    <td>Ahmad Bin Ali </td>
				    <td>N�o realizado</td>
      				    <td>Sem informa��o</td>
				</tr>
				<tr>
                                    <td>Argentina x Ar�bia Saudita</td>
                                    <td>22/11</td>
                                    <td>07:00</td>
                                    <td>Lusail</td>
                                    <td>N�o realizado</td>
                                    <td>Sem informa��o</td>
                                </tr>
                                <tr>
                                    <td>Dinamarca x Tun�sia</td>
                                    <td>22/11</td>
                                    <td>10:00</td>
                                    <td>Education City</td>
                                    <td>N�o realizado</td>
      				    <td>Sem informa��o</td>
                                </tr>
                                <tr>
                                    <td>M�xico x Pol�nia</td>
                                    <td>22/11</td>
                                    <td>13:00</td>
                                    <td>Porto de Doha</td>
                                    <td>N�o realizado</td>
                                    <td>Sem informa��o</td>
                                </tr>
                                <tr>
                                    <td>Fran�a x A confirmar</td>
                                    <td>22/11</td>
                                    <td>16:00</td>
                                    <td>Al Janoub</td>
                                    <td>N�o realizado</td>
                                    <td>Sem informa��o</td>
                                </tr>
                                <tr>
                                    <td>Marrocos x Cro�cia</td>
                                    <td>23/11</td>
                                    <td>07:00</td>
                                    <td>Al Bayt</td>
                                    <td>N�o realizado</td>
                                    <td>Sem informa��o</td>
                                </tr>
                                <tr>
                                    <td>Alemanha x Jap�o</td>
                                    <td>23/11</td>
                                    <td>10:00</td>
                                    <td> Khalifa</td>
                                    <td>N�o realizado</td>
                                    <td>Sem informa��o</td>
                                </tr>
                                <tr>
                                    <td>Espanha x A confirmar</td>
                                    <td>23/11</td>
                                    <td>13:00</td>
                                    <td>Al Thumama</td>
                                    <td>N�o realizado</td>
                                    <td>Sem informa��o</td>
                                </tr>
                                <tr>
                                    <td>B�lgica x Canad�</td>
                                    <td>23/11</td>
                                    <td>16:00</td>
                                    <td>Ahmad Bin Ali </td>
                                    <td>N�o realizado</td>
                                    <td>Sem informa��o</td>
                                </tr>
                                <tr>
                                    <td>Su��a x Camar�es</td>
                                    <td>24/11</td>
                                    <td>07:00</td>
                                    <td>Al Janoub</td>
                                    <td>N�o realizado</td>
                                    <td>Sem informa��o</td>
                                </tr>
                                <tr>
                                    <td>Uruguai x Coreia do Sul</td>
                                    <td>24/11</td>
                                    <td>10:00</td>
                                    <td>Education City</td>
                                    <td>N�o realizado</td>
                                    <td>Sem informa��o</td>
                                </tr>
                                <tr>
                                    <td>Portugal x Gana</td>
                                     <td>24/11</td>
                                    <td>13:00</td>
                                    <td>Porto de Doha</td>
                                    <td>N�o realizado</td>
                                    <td>Sem informa��o</td>
                                </tr>
                                <tr>
                                    <td>Brasil x S�rvia</td>
                                    <td>24/11</td>
                                    <td>16:00</td>
                                    <td>Lusail</td>
                                    <td>N�o realizado</td>
                                    <td>Sem informa��o</td>
                                </tr>
                                <tr>
                                    <td>Ir� x Pa�s de Gales</td>
                                    <td>25/11</td>
                                    <td>07:00</td>
                                    <td>Ahmad Bin Ali </td>
                                    <td>N�o realizado</td>
                                    <td>Sem informa��o</td>
                                </tr>
                                <tr>
                                    <td>Catar x Senegal</td>
                                    <td>25/11</td>
                                    <td>10:00</td>
                                    <td>Al Thumama</td>
                                    <td>N�o realizado</td>
                                    <td>Sem informa��o</td>
                                </tr>
                                <tr>
                                    <td>Holanda x Equador</td>
                                    <td>25/11</td>
                                    <td>13:00</td>
                                    <td>Khalifa</td>
                                    <td>N�o realizado</td>
                                    <td>Sem informa��o</td>
                                </tr>
                                <tr>
                                    <td>Inglaterra x Estados Unidos</td>
                                    <td>25/11</td>
                                    <td>16:00</td>
                                    <td>Al Bayt</td>
                                    <td>N�o realizado</td>
                                    <td>Sem informa��o</td>
                                </tr>
                                <tr>
                                    <td>Tun�sia x A confirmar</td>
                                    <td>26/11</td>
                                    <td>07:00</td>
                                    <td>Al Janoub </td>
                                    <td>N�o realizado</td>
                                    <td>Sem informa��o</td>
                                </tr>
                                <tr>
                                    <td>Pol�nia x Ar�bia Saudita</td>
                                    <td>26/11</td>
                                    <td>10:00</td>
                                    <td>Education City</td>
                                    <td>N�o realizado</td>
                                    <td>Sem informa��o</td>
                                </tr>
                                <tr>
                                    <td>Fran�a x Dinamarca</td>
                                    <td>26/11</td>
                                    <td>13:00</td>
                                    <td>Porto de Doha</td>
                                    <td>N�o realizado</td>
                                    <td>Sem informa��o</td>
                                </tr>
                                <tr>
                                    <td>Argentina x M�xico</td>
                                    <td>26/11</td>
                                    <td>16:00</td>
                                    <td>Lusail</td>
                                    <td>N�o realizado</td>
                                    <td>Sem informa��o</td>
                                </tr>     
                                <tr>
                                    <td>Jap�o x A confirmar</td>
                                    <td>27/11</td>
                                    <td>07:00</td>
                                    <td>Ahmad Bin Ali</td>
                                    <td>N�o realizado</td>
                                    <td>Sem informa��o</td>
                                </tr>
                                <tr>
                                    <td>B�lgica x Marrocos</td>
                                    <td>27/11</td>
                                    <td>10:00</td>
                                    <td>Al Thumama</td>
                                    <td>N�o realizado</td>
                                    <td>Sem informa��o</td>
                                </tr>
                                <tr>
                                    <td>Cro�cia x Canad�</td>
                                    <td>27/11</td>
                                    <td>13:00</td>
                                    <td> Khalifa</td>
                                    <td>N�o realizado</td>
                                    <td>Sem informa��o</td>
                                </tr>
                                <tr>
                                    <td>Espanha x Alemanha</td>
                                    <td>27/11</td>
                                    <td>16:00</td>
                                    <td>Al Bayt</td>
                                    <td>N�o realizado</td>
                                    <td>Sem informa��o</td>
                               </tr>
                               <tr>
                                    <td>Camar�es x S�rvia</td>
                                    <td>28/11</td>		
                                    <td>07:00</td>
                                    <td>Al Janoub </td>
                                    <td>N�o realizado</td>
                                    <td>Sem informa��o</td>
                                </tr>
                                <tr>
                                    <td>Coreia do Sul x Gana</td>
                                    <td>28/11</td>
                                    <td>10:00</td>
                                    <td>Education City</td>
                                    <td>N�o realizado</td>
                                    <td>Sem informa��o</td>
                                </tr>
                                <tr>
                                    <td>Brasil x Su��a</td>
                                    <td>28/11</td>
                                    <td>13:00</td>
                                    <td>Porto de Doha</td>
                                    <td>N�o realizado</td>
                                    <td>Sem informa��o</td>
                                </tr>
                                <tr>
                                    <td>Portugal x Uruguai</td>
                                    <td>28/11</td>
                                    <td>16:00</td>
                                    <td>Lusail</td>
                                    <td>N�o realizado</td>
                                    <td>Sem informa��o</td>
                                </tr>
                                <tr>
                                    <td>Holanda x Catar</td>
                                    <td>29/11</td>	
                                    <td>12:00</td>
                                    <td>Al Bayt </td>
                                    <td>N�o realizado</td>
                                    <td>Sem informa��o</td>
                                </tr>
                                <tr>
                                    <td>Equador x Senegal</td>
                                    <td>29/11</td>
                                    <td>12:00</td>
                                    <td>Khalifa</td>
                                    <td>N�o realizado</td>
                                    <td>Sem informa��o</td>
                                </tr>
                                <tr>
                                    <td>Inglaterra x Pa�s de Gales</td>
                                    <td>29/11</td>
                                    <td>16:00</td>
                                    <td>Al Rayyan</td>
                                    <td>N�o realizado</td>
                                    <td>Sem informa��o</td>
                                </tr>
                                <tr>
                                    <td> Ir� x Estados Unidos</td>
                                    <td>29/11</td>
                                    <td>16:00</td>
                                    <td> Al Thumama</td>
                                    <td>N�o realizado</td>
                                    <td>Sem informa��o</td>
                                </tr>
                                <tr>
                                    <td>Tun�sia x Fran�a</td>
                                    <td>30/11 </td>
                                    <td>12:00</td>
                                    <td>Education City </td>
                                    <td>N�o realizado</td>
                                    <td>Sem informa��o</td>
                                </tr>
                                <tr>
                                    <td>Dinamarca x A confirmar</td>
                                    <td>30/11 </td>
                                    <td>12:00</td>
                                    <td>Al Janoub</td>
                                    <td>N�o realizado</td>
                                    <td>Sem informa��o</td>
                                </tr>
                                <tr>
                                    <td>Pol�nia x Argentina</td>
                                    <td>30/11 </td>
                                    <td>16:00</td>
                                    <td>Porto de Doha</td>
                                    <td>N�o realizado</td>
                                    <td>Sem informa��o</td>
                                </tr>
                                <tr>
                                    <td>Ar�bia Saudita x M�xico</td>
                                    <td>30/11 </td>
                                    <td>16:00</td>
                                    <td>Lusail</td>
                                    <td>N�o realizado</td>
                                    <td>Sem informa��o</td>
                                </tr>
                                <tr>
                                    <td>Cro�cia x B�lgica</td>
                                    <td>1/12</td>
                                    <td>12:00</td>
                                    <td>Al Rayyan</td>
                                    <td>N�o realizado</td>
                                    <td>Sem informa��o</td>
                                </tr>
                                <tr>
                                    <td>Canad� x Marrocos</td>
                                    <td>1/12</td>
                                    <td>12:00</td>
                                    <td>Al Thumama</td>
                                    <td>N�o realizado</td>
                                    <td>Sem informa��o</td>
                                </tr>
                                <tr>
                                    <td>Jap�o x Espanha</td>
                                    <td>1/12</td>
                                    <td>16:00</td>
                                    <td>Khalifa</td>
                                    <td>N�o realizado</td>
                                    <td>Sem informa��o</td>
                                </tr>
                                <tr>
                                    <td>Alemanha x A confirmar</td>
                                    <td>1/12</td>
                                    <td>16:00</td>
                                    <td>Al Bayt</td>
                                    <td>N�o realizado</td>
                                    <td>Sem informa��o</td>
                                </tr>
                                <tr>
                                    <td>Coreia do Sul x Portugal</td>
                                    <td>2/12 </td>
                                    <td>12:00</td>
                                    <td>Education City </td>
                                    <td>N�o realizado</td>
                                    <td>Sem informa��o</td>
                                </tr>
                                <tr>
                                    <td>Gana x Uruguai</td>
                                    <td>2/12 </td>
                                    <td>12:00</td>
                                    <td>Al Janoub</td>
                                    <td>N�o realizado</td>
                                    <td>Sem informa��o</td>
                                </tr>
                                <tr>
                                    <td>Camar�es x Brasil</td>
                                    <td>2/12 </td>
                                    <td>16:00</td>
                                    <td> Lusail</td>
                                    <td>N�o realizado</td>
                                    <td>Sem informa��o</td>
                                </tr>
                                <tr>
                                    <td>S�rvia x Su��a</td>
                                    <td>2/12 </td>
                                    <td>16:00</td>
                                    <td>Porto de Doha</td>
                                    <td>N�o realizado</td>
                                    <td>Sem informa��o</td>
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
</body>
</html>

