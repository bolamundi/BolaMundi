
<?php include "puxardata.php";
?>

var ctx = document.getElementById('chartPorTempo');

var quantidades = <?php echo json_encode($usuarios);?>;
var semanas=[];
for (var i=1;i<=52 ; i++){
semanas[i-1]="Semana " +i+ " de "+<?php echo $year; ?>;

}

var pieChart= new Chart(ctx, {
    type: 'bar',
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
    "rgba(245, 40, 145, 0.8)",
    "rgba(245, 255, 145, 0.8)",
    "rgba(69, 255, 159, 0.8)",
    "rgba(0, 0, 159, 0.8)",
    "rgba(127, 0, 159, 0.8)",
    "rgba(127, 90, 159, 0.8)",
    "rgba(127, 90, 41, 0.8)",
    "rgba(127, 0, 41, 1)",
    "rgba(255, 0, 186, 0.48)",
    "rgba(84, 183, 186, 0.48)",
    "rgba(0, 255, 17, 0.48)",
    "rgba(0, 255, 255, 0.48)",
    "rgba(34, 185, 185, 1)",
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