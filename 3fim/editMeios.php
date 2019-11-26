<html>
<head><link rel="stylesheet" href="styles.css"></head>
    <body>
<?php

    $numMeio = $_REQUEST['numMeio'];
    $nomeEntidade = $_REQUEST['nomeEntidade'];
    $nomeMeio = $_REQUEST['nomeMeio'];
    try
    {
        $host = "db.ist.utl.pt";
        $user ="ist187679";
        $password = "ola123456";
        $dbname = $user;
        $db = new PDO("pgsql:host=$host;dbname=$dbname", $user, $password);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = "UPDATE Meio SET nomeMeio = :nomeMeio WHERE numMeio = :numMeio and nomeEntidade = :nomeEntidade;";

        $result = $db->prepare($sql);
        $result->execute([':numMeio' => $numMeio, ':nomeEntidade' => $nomeEntidade, ':nomeMeio' => $nomeMeio ]);

        echo("<p>Removido com sucesso</p>");

        $db = null;

        header("Location: /ist187679/formMeioCombate.php");
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