<!DOCTYPE html>
<html>

<head>
    <title>Classificação</title>
</head>

<body>
    <h1>Lista de Classificação</h1>
    <table border="1">
        <tr>
            <th>Nome</th>
            <th>Cidade</th>
            <th>País</th>
        </tr>
        <?php while ($row = $dados->fetch(PDO::FETCH_ASSOC)): ?>
            <tr>
                <td><?= $row['nome'] ?></td>
                <td><?= $row['cidade'] ?></td>
                <td><?= $row['pais'] ?></td>
            </tr>
        <?php endwhile; ?>
    </table>
</body>

</html>