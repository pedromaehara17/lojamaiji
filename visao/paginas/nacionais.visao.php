<style>
#gi{
  height: 250px;
  width: 200px;

}
</style>





<div class="block-31" style="position: relative;">
  <div class="owl-carousel loop-block-31 ">
    <div class="block-30 item" style="background-image: url('./publico/imagens/pipi.png');" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-7">
            <h2 class="heading">MAIJI -  a maior livraria online do Brasil</h2>
          </div>
        </div>
      </div>
    </div>
    
  </div>
</div>




    <?php foreach ($produtos as $produto): ?>
      <center>
    <tr>
<a href="./produto/visualizar/<?=$produto['idproduto']?>">
        <td><?=$produto['nomeproduto']?></td><br>

    <td><img src="./publico/imagens/<?=$produto['imagem']?>" id="gi">  </a> </td><br>

<td>Preço: R$<?=$produto['preco']?></td><br>
<br><br>
    </tr>
    </center>
    <?php endforeach; ?>
</table>

