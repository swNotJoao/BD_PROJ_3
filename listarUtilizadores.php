<html>
<head><link rel="stylesheet" href="styles.css"></head>
    <body>
<?php
  
    try
    {
        $host = "db.ist.utl.pt";
        $user ="ist190732";
        $password = "12345678";
        $dbname = $user;


        $db = new PDO("pgsql:host=$host;dbname=$dbname", $user, $password);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = "SELECT email FROM utilizador";
        $result = $db->prepare($sql);
        $result->execute();
        
        echo("<p><a href=\"home.php\">< Home</a></p>");
	echo("<h1> Utilizadores <h1>");
        echo("<table border=\"1\">\n");
        echo("<tr><td>E-mail</td></tr>\n");
        foreach($result as $row)
        {
            echo("<tr><td>");
            echo($row[0]);
            echo("</td></tr>");
        }
        echo("</table>\n");

        $db = null;

    }
    catch (PDOException $e)
    {
        echo("<p><a href=\"home.php\">< Home</a></p>");
        echo("<p>ERROR: Nao foi possivel efetuar a operacao.</p>");
    }
?>
    </body>
</html>
