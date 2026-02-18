<!DOCTYPE html>
<html>

<head>
    <title>Grupos</title>
</head>

<body>
    <h1>Lista de Grupos</h1>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nome</th>
        </tr>
        <?php while ($row = $dados->fetch(PDO::FETCH_ASSOC)): ?>
            <tr>
                <td><?= $row['id'] ?></td>
                <td><?= $row['nome'] ?></td>
            </tr>
        <?php endwhile; ?>
    </table>
</body>

</html>