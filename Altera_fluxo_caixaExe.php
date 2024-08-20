<?php
    include('includes/conexao.php');
    $id = $_POST['id_fluxo_caixa'];
    $data = $_POST['data'];
    $tipo = isset($_POST['tipo']) ? 1 : 0;
    $valor = $_POST['valor'];
    $historico = $_POST['historico'];
    $cheque = isset($_POST['cheque']) ? 1 : 0;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterar</title>
    <link rel="stylesheet" href="">
</head>
<body>
    <h1>Alterar</h1>
    <?php
    echo "<p>Código: $codigo</p>";
    echo "<p>Data: $data</p>";
    echo "<p>Tipo: " . ($tipo ? 'Entrada' : 'Saida') . "</p>";
    echo "<p>Valor: $valor</p>";
    echo "<p>Histórico: $historico</p>";
    echo "<p>Cheque: " . ($cheque ? 'Sim' : 'Não') . "</p>";
    
    $sql = "UPDATE fluxo_caixa SET
                data = '$data',
                tipo = '$tipo',
                valor = '$valor',
                historico = '$historico',
                cheque = '$cheque',
            WHERE id_fluxo_caixa = '$id'";
    
    $result = mysqli_query($con, $sql);
    if($result)
        echo "<p>Dados atualizados com sucesso!</p>";
    else
        echo "<p>Erro ao atualizar dados: ".mysqli_error($con)."</p>";
    ?>
    <p></p>
    <a href="Listar_fluxo_caixa.php">Voltar</a>
</body>
</html>
