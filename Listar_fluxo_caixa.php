<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta de Cadastros</title>
    <link rel="stylesheet" href="">
</head>
<body>
    <?php
        include('includes/conexao.php');
        $sql = "SELECT * FROM fluxo_caixa";
        
        // Executa a consulta
        $result = mysqli_query($con, $sql);
    ?>

    <div class="container">
        <h1>Consulta de Cadastros</h1>
        <a href="Cadastro_fluxo_caixa.html">Cadastrar</a><br>
        <a href="index.html">Voltar para a Tela Inicial</a>

        <table class="city-table">
            <tr>
                <th>Data</th>
                <th>Tipo</th>
                <th>Valor</th>
                <th>Histórico</th>
                <th>Cheque</th>
                <th>Alterar</th>
                <th>Deletar</th>
            </tr>
            <?php
                while ($row = mysqli_fetch_array($result)) {
                    $tipo = $row['tipo'] ? "Entrada" : "Saida";
                    $cheque = $row['cheque'] ? "Sim" : "Não";
                    echo "<tr>";
                    echo "<td>".$row['id']."</td>";
                    echo "<td>".$row['data']."</td>";
                    echo "<td>".$row['tipo']."</td>";
                    echo "<td>".$row['valor']."</td>";
                    echo "<td>".$row['historico']."</td>";
                    echo "<td>".$tipo."</td>";
                    echo "<td>".$cheque."</td>";
                    echo "<td><a href='Altera_fluxo_caixa.php?id=".$row['id']."'>Alterar</a></td>";
                    echo "<td><a href='Excluir_fluxo_caixa.php?id=".$row['id']."'>Deletar</a></td>";
                    echo "</tr>";
                }
            ?>
        </table>
    </div>
</body>
</html>
