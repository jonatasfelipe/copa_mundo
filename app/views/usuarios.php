<!DOCTYPE html>
<html>

<head>
    <title>Usuários</title>
</head>

<body>
    <h1>Lista de Usuários</h1>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Idade</th>
            <th>Seleção Representante</th>
            <th>Cargo</th>
        </tr>
        <?php while ($row = $dados->fetch(PDO::FETCH_ASSOC)): ?>
            <tr>
                <td><?= $row['id'] ?></td>
                <td><?= $row['nome'] ?></td>
                <td><?= $row['idade'] ?></td>
                <td><?= $row['selecao_id'] ?></td>
                <td><?= $row['cargo'] ?></td>
            </tr>
        <?php endwhile; ?>
    </table>
</body>

</html>