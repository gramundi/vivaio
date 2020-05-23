<?php  require dirname(__FILE__).'/includes/header.php'; ?>
<script type="text/javascript">

</script>
<html>
    <body>
<p><b>Ricerca Quantita Pianta</b></p>
<form action="queries.php" method="post">
<table class="form">
<tbody>
<tr>
    <th><label for="Nome Ente">Nome Pianta</label></th>
    <td><?php echo "<input type='text'   id='nomepianta' name='nomepianta'><br><br>" ?></td>
    
</tr>
<tr>
    <th><label for="Ricerca">Trova Quantita</label></th>
    <td><?php echo "<input type='hidden' name=querytorun value='query1'><br><br>" ?></td>
    <td><?php echo "<input type='submit' value='Submit'>" ?></td>
    <td><button><a href="/">Home Page</a></button></td>
</tr>
</tbody>
</table>
</form>
</html>

<?php  require dirname(__FILE__).'/includes/footer.php'; ?>

