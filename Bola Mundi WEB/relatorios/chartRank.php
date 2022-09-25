<?php 
include "contarRanks.php";

?>

var ctx2 = document.getElementById('chartRank');

var quantidades = [<?php echo $numMestre; ?>, <?php echo $numDiamante; ?>,<?php echo $numOuro; ?>, <?php echo $numPrata; ?>,<?php echo $numBronze; ?>];
var acessos = ['Mestre','Diamante','Ouro','Prata','Bronze'];

var pieChart= new Chart(ctx2, {
    type: "pie",
    data: {labels: acessos , 
    datasets: [
{
label:"Ranks",
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