<html>
<head><link rel="stylesheet" href="styles.css"></head>
    <body>
        <h3>Editar Correcao</h3>
        <form action="editCorrecao.php" method="post">
	  <p><input type="hidden" name="origMail" value="<?=$_REQUEST['mailToEdit']?>"/</p>
	  <p><input type="hidden" name="origNro" value="<?=$_REQUEST['nroToEdit']?>"/</p>
	  <p><input type="hidden" name="origa_id" value="<?=$_REQUEST['a_idToEdit']?>"/</p>
	  <p>E-mail: <input type="text" name="mail"/></p>
	  <p>Numero: <input type="text" name="num"/></p>
          <p>ID Anomalia: <input type="text" name="a_id"/></p>
          <p><input type="submit" value="Submit"/></p>
        </form>

    </body>
</html>
