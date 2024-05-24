<?php
    

    /*
        Chamada ao código no "config.php"
    */

    require_once '../config.php';
    
    $gestor = new PDO(
        "mysql:host=" . MYSQL_HOST . ";" . 
        "dbname=" . MYSQL_DATABASE . "; charset=utf8", 
        MYSQL_USER, 
        MYSQL_PASS
    );

    $dados = $gestor->query("SELECT * FROM fornecedores");

    $fornecedores = $dados->fetchALL(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CONEXAO BD</title>
</head>
<body>
    <h3>Fornecedores</h3>
    <hr>
    <table border='8'>
        <thead>
            <tr>
                <th>Fornecedores</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Endereço</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($fornecedores as $fornec): ?>
            <tr>
                <td>&nbsp; <?= $fornec["cdfornecedor"] ?> &nbsp;</td>
                <td>&nbsp; <?= $fornec["nmfornecedor"] ?> &nbsp;</td>
                <td>&nbsp; <?= $fornec["nmemailfornecedor"] ?> &nbsp;</td>
                <td>&nbsp; <?= $fornec["nmendereco"] ?> &nbsp;</td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <p>Total Fornecedores <strong><?= count($fornecedores) ?></p>
    <hr>
</body>
</html><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>