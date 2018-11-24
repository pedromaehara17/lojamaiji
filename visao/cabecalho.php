<head>
<meta charset="UTF-8">
</head>
<style>
#txtBusca{
	  border-radius: 8px;
	  border: 2px solid #9bd9c0;
}
</style>
<nav class="navbar navbar-expand-lg " id="ftco-navbar">
    <div class="container">
      <a class="navbar-brand" href="./paginas">Maiji</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
      </button>
	  
	  
	  
	  
	  <form action="./produto/search/" method="post">
			  <input type="text" id="txtBusca"  name="pesquisa" placeholder="Buscar..."/>
			   <input type="submit" class="btn btn-primary" id="a" placeholder="Enviar"/><br>
			   
			</form>

      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active"><a href="./paginas/" class="nav-link">Home</a></li>
          <li class="nav-item active"><a href="./paginas/exibirHq" class="nav-link">Hqs</a></li>
          <li class="nav-item active"><a href="./paginas/exibirInfantis" class="nav-link">Infantis</a></li>
          <li class="nav-item active"><a href="./paginas/exibirnacionais" class="nav-link">Nacionais</a></li>

<?php 
            if (isset($_SESSION["auth"]) and ($_SESSION["auth"]["role"]) == "admin")  :
              ?>


             <li class="nav-item"><a href="./produto" class="nav-link">Todos os Produtos</a></li> 
             <li class="nav-item"><a href="./cupom" class="nav-link">Cupom</a></li> 
              <li class="nav-item"><a href="./administrador" class="nav-link">Relatórios</a></li>
          
            <?php endif ; ?>



        <?php 
            if (isset($_SESSION["auth"]) and ($_SESSION["auth"]["role"]) == "user") :
              ?>
             <li class="nav-item"><a href="./usuario" class="nav-link">Usuario</a></li> 
             <li class="nav-item"><a href="./carrinho/" class="nav-link">Carrinho</a></li> 
              <li class="nav-item"><a href="./pedido/index" class="nav-link">Meus Pedidos</a></li> 
           <?php else : ?>
             
            <?php endif ; ?>





            <?php 
            if (!isset($_SESSION["auth"])) :
              ?>
             <li class="nav-item"><a href="./login" class="nav-link">Entrar</a></li> 
           <?php else : ?>
              <li class="nav-item"><a href="./login/logout" class="nav-link">Logout</a></li>
            <?php endif ; ?>

            

            
        </ul>
      </div>
    </div>
  </nav>
  <!-- END nav -->