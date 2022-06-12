
<?php 
 // Parâmetros para criar a conexão
 
  $servername = "localhost";
  $username = "sdzpyvni_bolamundi2022";
  $password = "B0l4mund1";
  $dbname = "sdzpyvni_bolamundi";

  // Criando a conexão
 
  $conn = new mysqli($servername, $username, $password, $dbname);

  // Checando a conexão
 
  if ($conn->connect_error) {
    die("Você se deu mal: " . $conn->connect_error);
  }
 
//Para ver o número de adms e comuns
$sql="SELECT count(*) as adm FROM usuarios WHERE Acesso='Admin'";
$resultcont=$conn->query($sql);
$row = $resultcont->fetch_assoc();

   $numadm =  $row['adm'];  
    $sql2="SELECT count(*) as usuario FROM usuarios WHERE Acesso='Usuario'";
$resultcont2=$conn->query($sql2);
$row2 = $resultcont2->fetch_assoc();

 $numusuario= $row2['usuario'];

   
    
    


?>

var ctx = document.getElementById('myChart');

var quantidades = [<?php echo $numadm; ?>, <?php echo $numusuario; ?>];
var acessos = ['Administradores','Usuários'];

var pieChart= new Chart(ctx, {
    type: "pie",
    data: {labels: acessos , 
    datasets: [
{
label:"Acessos",
data: quantidades,
backgroundColor:[
    "rgba(255, 99, 132, 1)",
    "rgba(54, 162, 235, 1)",
    "rgba(255, 206, 86, 1)",
    "rgba(75, 192, 192, 1)",
    "rgba(153, 102, 255, 1)",
    ],
    borderWidth: 5 // afeta a cor e a largura da borda 


}

    ]
    }
    
    
    
    
  //  options: {
//maintainAspectRatio: false ,//para fazer ele siguir a altura q tu botou na tag
//responsive: false//para fazer ele seguir a largura q tu botou na  tag html
  //  } // this is optional
//configuration object which allows you specify the chart type, data and 
//chart options.
 }
)

