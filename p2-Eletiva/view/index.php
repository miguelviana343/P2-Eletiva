<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar_Jogos</title>
</head>
<body>
    <form action="processamento.php" method="POST">
        <label for="inputNome">Nome do jogo</label>
        <input type="text" name="inputNome" id="inputNome">
        <label for="inputprecoOriginal">Preco Original</label>
        <input type="number" name="inputprecoOriginal" id="inputprecoOriginal">
        <label for="inputprecoPromocional">Preco Promocional</label>
        <input type="number" name="inputprecoPromocional" id="inputprecoOriginal">
        <label for="inputCadastrar">Cadastar Jogo</label>
        <input type="button" name="inputCadastrar" id="inputCadastrar">
    </form>


    <h2>Exibir jogos</h2>
    <?php
        require "../processamento/funcoesBD.php";
        $JogosGeral = listarJogos();
    ?>
    
    <?php
       while ($JogosGeral = mysqli_fetch_assoc($JogosGeral)){
            echo "Nome:" .$nome['Nome'];
            echo "Preco Original:" .$preco_original['PrecoOriginal'];
            echo "Preco Promocional: " .$preco_promocional['PrecoPromocional'];
       }
    ?>
</body>
</html>