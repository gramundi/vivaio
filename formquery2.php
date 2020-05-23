<?php  require dirname(__FILE__).'/includes/header.php'; ?>
<script type="text/javascript">

</script>
<html>
    <body>
<p><b>Ricerca Pianta Per Stagione</b></p>
<form action="queries.php" method="post">
<table class="form">
<tbody>
<tr>
    <th><label for="Stagione">Stagione Scelta</label></th>
    <td><?php echo "<input type='text'   id='stagione' name='stagione'><br><br>" ?></td>
    
</tr>
<tr>
    <th><label for="Ricerca">Stagione</label></th>
    <td><?php echo "<input type='hidden' name=querytorun value='query2'><br><br>" ?></td>
    <td><?php echo "<input type='submit' value='Submit'>" ?></td>
    <td><button><a href="/">Home Page</a></button></td>
</tr>
</tbody>
</table>
</form>
</html>

<?php  require dirname(__FILE__).'/includes/footer.php'; ?>