
<?php include "puxardata.php";
?>

var ctx = document.getElementById('chartPorTempo');

var quantidades = <?php echo json_encode($usuarios);?>;
var semanas=[];
for (var i=1;i<=52 ; i++){
semanas[i-1]="Semana " +i+ " de "+<?php echo $year; ?>;

}

var pieChart= new Chart(ctx, {
    type: "pie",
    data: {labels: semanas , 
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
    "rgba(153, 102, 255, 1)",
    "rgba(153, 102, 255, 1)",
    "rgba(153, 102, 255, 1)",
    "rgba(153, 102, 255, 1)",
    "rgba(153, 102, 255, 1)",
    "rgba(153, 102, 255, 1)",
    "rgba(153, 102, 255, 1)",
    "rgba(153, 102, 255, 1)",
    "rgba(153, 102, 255, 1)",
    "rgba(153, 102, 255, 1)",
    "rgba(153, 102, 255, 1)",
    "rgba(153, 102, 255, 1)",
    "rgba(153, 102, 255, 1)",
    "rgba(153, 102, 255, 1)",
    "rgba(153, 102, 255, 1)",
    "rgba(153, 102, 255, 1)",
    "rgba(153, 102, 255, 1)",
    "rgba(153, 102, 255, 1)",
    "rgba(153, 102, 255, 1)",
    "rgba(153, 102, 255, 1)",
    "rgba(153, 102, 255, 1)",
    "rgba(153, 102, 255, 1)",
    "rgba(153, 102, 255, 1)",
    "rgba(153, 102, 255, 1)",
    "rgba(153, 102, 255, 1)",
    "rgba(153, 102, 255, 1)",
    "rgba(153, 102, 255, 1)",
    "rgba(153, 102, 255, 1)",
    "rgba(153, 102, 255, 1)",
    "rgba(153, 102, 255, 1)",
    "rgba(153, 102, 255, 1)",
    "rgba(153, 102, 255, 1)",
    "rgba(153, 102, 255, 1)",
    "rgba(153, 102, 255, 1)",
    "rgba(153, 102, 255, 1)",
    "rgba(153, 102, 255, 1)",
    "rgba(153, 102, 255, 1)",
    "rgba(153, 102, 255, 1)",
"rgba(153, 102, 255, 1)",
"rgba(153, 102, 255, 1)",
"rgba(153, 102, 255, 1)",
"rgba(153, 102, 255, 1)",
"rgba(153, 102, 255, 1)",
"rgba(153, 102, 255, 1)",
"rgba(153, 102, 255, 1)",
"rgba(153, 102, 255, 1)",
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