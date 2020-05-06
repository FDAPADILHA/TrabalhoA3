<?php
    $action = "salvar";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="estilo.css">
    <title>Jogos</title>
</head>
<body>

    <?php require_once "menu.php";?>

    <h1>Bem-vindo a nossa Loja - Jogos</h1>

    <form method="POST" action="salvarJogos.php?<?php echo $action;?>">
        <label for="platform">Plataforma:</label>
        <input type="text" name="platform" required />
        <label for="company">Empresa:</label>
        <input type="text" name="company" />
        <label for="name">Nome:</label>
        <input type="text" name="name" required />
        <br><br>
        <input type="submit" value="Salvar" />
        <input type="reset" value="Limpar" />
    </form>
    <hr>
    <table id="tbl_jogos">
        <tr>
            <th>Código</th>
            <th>Plataforma</th>
            <th>Empresa</th>
            <th>Nome</th>
        </tr>
        <?php
            include_once "clsConexao.php";
            $query = "SELECT * FROM jogos";
            $result = Conexao::consultar($query);
            while($jogo = mysqli_fetch_array($result)){
                echo '<tr>';
                echo '  <td>'.$jogo['id'].'</td>';
                echo '  <td>'.$jogo['plataforma'].'</td>';
                echo '  <td>'.$jogo['empresa'].'</td>';
                echo '  <td>'.$jogo['nome'].'</td>';
                echo '</tr>';
            }
        ?>
    </table>
</body>
</html>