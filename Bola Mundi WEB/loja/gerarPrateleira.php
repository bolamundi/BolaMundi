<?php 
require '../conexao.php';

$sql="SELECT * FROM produtos";
$result=$conn->query($sql);
while($row=$result->fetch_assoc()){

    ?>
    <div class="product_box">
            <div class="product_img-box">
              <img src="images/<?php echo $row['Imagem']; ?>" alt="" />
            </div>
            <div class="product_detail-box">
              <span>
                BM$ <?php echo $row['Preco']; ?>
              </span>
              <p><?php echo $row['Nome']; ?></p>
                              <a href="comprar.php?prod=<?php echo $row['Id']; ?>">Comprar</a>
                            
            </div>
          </div>
    
    <?php ;
    //Pode ter erro ali no action do form
}



?>