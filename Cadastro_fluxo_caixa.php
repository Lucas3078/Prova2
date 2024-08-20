<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Fluxo do Caixa</title>
    <link rel="stylesheet" href="">
</head>
<body>
    <?php
        include('includes/conexao.php');

        $data =$_POST['data'];
        $tipo =$_POST['tipo'];
        $valor =$_POST['valor'];
        $historico =$_POST['historico'];
        $cheque = $_POST['cheque'] ;


        echo "<h1>Dados do Cadastro</h1>";
        echo "Data: $data<br>";
        echo "Tipo: " . $tipo. "<br>";
        echo "Valor: $valor<br>";
        echo "Histórico: $historico<br>";
        echo "Cheque: " . ($cheque ? "Sim" : "Não") . "<br>";


        $sql = "INSERT INTO fluxo_caixa (data, tipo, valor, historico, cheque) 
                VALUES ('$data', '$tipo', '$valor', '$historico', $cheque)";
        echo $sql;
        $result = mysqli_query($con, $sql);
        if ($result) {
            echo "<h2>Dados cadastrados com sucesso!</h2>";
        } else {
            echo "<h2>Erro ao cadastrar</h2>";
            echo mysqli_error($con);
        }
    ?>
    <h3><a href="Listar_fluxo_caixa.php">Ver na Tabela</a></h3>
    <h3><a href="index.php">Voltar</a></h3>
</body>
</html>
