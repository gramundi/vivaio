<?php

/*
 * Gestione Vivaio
 *
 * Author:
 *	Ramundi Mattia <http://www.mattiaramundi.it>
 */
?>
<?php  //require dirname(__FILE__).'/includes/header.php'; ?>


<div class="sin">

        <h5>APPLICAZIONI</h5>
        <div>
        <button>Menu1</button>
        </div>
        <br>
        <h5>STRUMENTI</h5>

</div>
<div class="mid">

 <h4>DISPLAY CONTENT <h4>
 <?php 
  /*echo "<table style='border: solid 1px black;'>";
  echo "<tr class=rowel><th>Nome Pianta</th><th>Descrizione</th><th>Actions</th></tr>";
  
  $stmt = $conn->prepare("SELECT nome,descrizione FROM piante");
  $stmt->execute();

  // set the resulting array to associative
  $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
  $piante=$stmt->fetchAll();
  foreach ($piante as $pi) {
        echo "<tr>";
        echo "<td>".$pi['nome']."</td>";
        echo "<td>".$pi['descrizione']."</td>";
        echo "<td><button>recipes</button></td><tr></br>";
  }
  $conn = null;
echo "</table>";
*/ ?>
</div>
<div class="des">

        <h5>APPLICAZIONI</h5>
        <div>
        <button>Menu1</button>
        </div>
        <br>
        <h5>STRUMENTI</h5>

</div>
        



<?php  require dirname(__FILE__).'/includes/footer.php'; ?>
