
<?php  require dirname(__FILE__).'/includes/header.php'; ?>
<script type="text/javascript">
document.addEventListener('DOMContentLoaded', function () {

//console.log("<?php print_r($_POST["querytorun"]) ?>");
id="<?php print_r($_POST["querytorun"]) ?>"



var queries = ['query1', 'query2', 'query3','query4','query5'];
var x;

for (x of queries) {
  console.log(x);
  if (x == id){
    document.getElementById(x).style.display  ="block";
  }
  else {
    document.getElementById(x).style.display="none"
  }
}

});

</script>
<?php
 if ($_POST["querytorun"]) == 'query1'{
    $nrrows = $conn->query("SELECT count(*) FROM piante WHERE nome = '".$_POST["nomepianta"]."'")->fetchColumn(); 
 }
 if ($_POST["querytorun"]) == 'query2'{
     $sql= "SELECT Nome FROM piante WHERE Stagione ='".$_POST["stagione"]."'";

    
 }
 
?>

<table class="form" id="query1" style="display:none;">
<tbody>
<tr>
    <th><?php echo "Quantita di".$_POST["nomepianta"]."presenti nel vivaio sono: ".$nrrows ?></th>
</tr>
<tr>
    <td><button><a href="/">Home Page</a></button></td>
    <td><button><a href="/formquery1.php">Ricerca altra Pianta</button></td>
</tr>

</tbody>
</table>

<table class="form" id="query2" style="display:none;">
<tbody>
<tr>
    <th><?php echo "Quantita di".$_POST["nomepianta"]."presenti nel vivaio sono: ".$nrrows ?></th>
</tr>
<tr>
    <td><button><a href="/">Home Page</a></button></td>
    <td><button><a href="/formquery1.php">Ricerca altra Pianta</button></td>
</tr>

</tbody>
</table>

<table class="form" id="query3" style="display:none;">
<tbody>
<tr>
    <th><?php echo "Quantita di".$_POST["nomepianta"]."presenti nel vivaio sono: ".$nrrows ?></th>
</tr>
<tr>
    <td><button><a href="/">Home Page</a></button></td>
    <td><button><a href="/formquery1.php">Ricerca altra Pianta</button></td>
</tr>

</tbody>
</table>

<table class="form" id="query4" style="display:none;">
<tbody>
<tr>
    <th><?php echo "Quantita di".$_POST["nomepianta"]."presenti nel vivaio sono: ".$nrrows ?></th>
</tr>
<tr>
    <td><button><a href="/">Home Page</a></button></td>
    <td><button><a href="/formquery1.php">Ricerca altra Pianta</button></td>
</tr>

</tbody>
</table>

<table class="form" id="query5" style="display:none;">
<tbody>
<tr>
    <th><?php echo "Quantita di".$_POST["nomepianta"]."presenti nel vivaio sono: ".$nrrows ?></th>
</tr>
<tr>
    <td><button><a href="/">Home Page</a></button></td>
    <td><button><a href="/formquery1.php">Ricerca altra Pianta</button></td>
</tr>

</tbody>
</table>



</html>

<?php  require dirname(__FILE__).'/includes/footer.php'; ?>

