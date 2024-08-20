<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deletar</title>
    <link rel="stylesheet" href="styles/style2.css">
</head>
<body>
    <h1>Deletar</h1>
    <?php
        include('includes/conexao.php');
        $id = $_GET['id'];
        $sql = "DELETE FROM fluxo_caixa WHERE id_fluxo_caixa = $id";
        $result = mysqli_query($con, $sql);
        if($result){
            echo "<h2>Dados deletados com sucesso!</h2>";
        }else{
            echo "<h2>Erro ao deletar dados: ".mysqli_error($con)."</h2>";
        }
    ?>
    <a href="Listar_fluxo_caixa.php">Voltar</a>
</body>
</html>