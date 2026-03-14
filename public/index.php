<?php
require_once '../app/models/Cidade.php';

try {
    $cidade = new cidade("itapira", "sp");
    $cidade->setid(1);

    echo "<h2> dados da cidade</h2>";
    echo "id: " . $cidade->getid() . "<br>";
    echo "nome: " . $cidade->getnome() . "<br>";
    echo "estado:" . $cidade->getestado() . "<br>";

} catch (Exception $e) { 
    echo "erro:" . $e->getmessage();
}
