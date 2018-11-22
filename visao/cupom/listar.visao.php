<br><br><br><br><br><br>
<h2>Listar cupons</h2>

<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>NOME</th>
          <th>VALOR</th>
            <th>EDIT</th>
            <th>DELETE</th>
        </tr>
    </thead>
    <?php foreach ($cupons as $cupom): ?>
    <tr>
        <td><?=$cupom['idcupom']?></td>
        <td><?=$cupom['nomecupom']?></td>
        <td><?=$cupom['valorcupom']?></td>

        <td><a href="./cupom/editar/<?=$cupom['idcupom']?>" class="btn btn-info">edit</a></td>
        <td><a href="./cupom/deletar/<?=$cupom['idcupom']?>" class="btn btn-danger">del</a></td>
    </tr>
    <?php endforeach; ?>
</table>


<a href="./cupom/adicionar" class="btn btn-primary">Adicionar novo cupom</a>

