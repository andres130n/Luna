<ul class="dropdown menu" data-dropdown-menu>
  <li>
  <?php if(!isset($_SESSION["user_id"])):?>
  	  <li><a href="./index.php">Principal</a></li>
    <?php else:?>
      <li class="nav-item"> <a class="nav-link active" href="mesatrabajo.php">Principal</a> </li>
      <li class="nav-item"><a class="nav-link" href="./php/logout.php">Salir</a></li>
    <?php endif;?>
</ul>