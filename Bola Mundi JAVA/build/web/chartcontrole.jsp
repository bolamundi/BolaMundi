<%@ taglib uri="http://java.sun.com/jsp/jstl/core" prefix="c" %>
<%@ page import="dao.Dao, java.util.*"%>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" href="./css/tabela.css">
        <link href="css/grafico.css" rel="stylesheet" type="text/css"/>
        <link href="css/menu.css" rel="stylesheet" type="text/css"/>
        <link href="css/padrao.css" rel="stylesheet" type="text/css"/>
        <script src="./scripts/filtrar.js"></script>
        <title>Relatório de Usuários</title>
    </head>
    <body>
            <%--<%@include file="acessoadm.jsp"%>--%>
        
            <div class="topnav">
                <%@include file="menu.jsp"%>
            </div>
<%--<%@page contentType="text/html" pageEncoding="UTF-8"%>
<%@ page import="dao.Dao, java.util.*"%>--%>
<script>
  //  var numpart= Dao.getParticipante();
      //  var numadm= Dao.getAdm();
       //var numpart= 6;
     // var numadm= 8;
        
var ctx = document.getElementById('myChart');

//var quantidades = [numpart,numadm];
//var acessos = ['Administradores','Usuários'];
var ctx = document.getElementById('myChart');
var stars = [12, 19, 3, 5, 2];
var frameworks = ["React", "Angular", "Vue", "Hyperapp", "Omi"];

var pieChart= new Chart(ctx, {
    type: "bar",
    data: {labels: frameworks , 
    datasets: [
{
label:"frameworks",
data: stars,
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
);
    
    
    
    
    
</script>