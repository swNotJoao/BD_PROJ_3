<html>
<head><link rel="stylesheet" href="styles.css"></head>
    <body>
<?php
    $local1 = $_REQUEST['local1'];
    $local2 = $_REQUEST['local2'];
    try
    {
        $host = "db.ist.utl.pt";
        $user ="ist190732";
        $password = "12345678";
        $dbname = $user;
        $db = new PDO("pgsql:host=$host;dbname=$dbname", $user, $password);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = "SELECT * FROM anomalia NATURAL JOIN incidencia NATURAL JOIN item NATURAL JOIN local_publico;";

        $result = $db->prepare($sql);
        $result->execute([':idToRemove' => $id]);

        echo("<p>Removido com sucesso</p>");

        $db = null;

        header("Location: /ist190732/gerirItems.php");
        exit;
    }
    catch (PDOException $e)
    {
        echo("<p><a href=\"home.php\">< Home</a></p>");
        echo("<p>ERROR: Nao foi possivel efetuar a operacao.</p>");
    }
?>
    </body>
</html>
