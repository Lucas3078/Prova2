<?php
    include('includes/conexao.php');
    $id = $_GET['id'];
    $sql = "SELECT * FROM fluxo_caixa WHERE id_fluxo_caixa=$id";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($result);
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
    <form action="AlteraAnimalExe.php" method="post">
    <fieldset>
        <legend>Alterar Cadastro</legend>
        <div>
            <label for="data">Data: </label>
            <input type="date" name="data" id="data"
                    value="<?php echo $row['data'] ?>">
        </div>

        <div>
            <label for="tipo">Tipo: </label>
            <input type="radio" name="entrada" value="0">
            <input type="radio" name="saida" value="1"
                    <?php echo $row['tipo'] ? 'checked' : '' ?>>
        </div>

        <div>
            <label for="valor">Valor: </label>
            <input type="number" name="valor" id="valor"
                    value="<?php echo $row['valor'] ?>">
        </div>

        <div>
            <label for="historico">Histórico: </label>
            <input type="text" name="text" id="text"
                    value="<?php echo $row['historico'] ?>">
        </div>

        <div>
            <label for="cheque">Cheque</label>
            <input type="hidden" name="cheque" value="0">
            <input type="checkbox" name="cheque" value="1"
                    <?php echo $row['cheque'] ? 'checked' : '' ?>>
        </div><p></p>

        <div>
            <button type="submit">Alterar</button>
        </div>
        <div>
            <input type="hidden" name="id_fluxo_caixa" value="<?php echo $row['id_fluxo_caixa'] ?>">
        </div>
    </fieldset>
    </form>
    <a href="Listar_fluxo_caixa.php">Voltar</a>
</body>
</html>
