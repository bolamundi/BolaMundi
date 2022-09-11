<?php 


require '../conexao.php';


$sql="SELECT * FROM produtos";
$result=$conn->query($sql);
if ($result->num_rows>0){
while($row=$result->fetch_assoc()){

    
  echo ' <div class="product_box">
            <div class="product_img-box">
              <img src="images/'.$row["Imagem"].'" alt="" />
            </div>
            <div class="product_detail-box">
              <span>
                BM$ '.$row["Preco"].'
              </span>
              <p>'.$row["Nome"].'</p>
                              <a href="comprar.php?prod='.$row["Id"].'">Comprar</a>
                            
            </div>
          </div>';
    

   
}}
    




?>