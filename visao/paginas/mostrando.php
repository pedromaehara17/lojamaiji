 <?php

   foreach ($produtos as $produto): ?>
    <tr>
        <td><?=$produto['nomeproduto']?></td>
        <td><?=$produto['preco']?></td>
        <td><img src="./publico/imagens/<?=$produto['imagem']?>" id="imagem"></td>
    </tr>
    <?php endforeach; ?>