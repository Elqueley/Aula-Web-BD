<?php
try{
    $conexao = new PDO("mysql:host=localhost; dbname=web2","root","");
}catch(PDOException $e){
    die("Ocorreu um erro inesperado " . $e->getMessage());
}

$nomeArea = $_POST['nomeArea'];

try{
    $sql = "insert into area (nomeArera) values ('$nomeArea')";
    $conexao->exec($sql);
    echo "Salvo com sucesso !!!";
}catch(PDOException $e){
    die("Ocorreu um erro " . $e->getMessage());
}

header('Location: ../../view/area/buscarArea.php');

?>