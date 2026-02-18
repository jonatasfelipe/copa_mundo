<!DOCTYPE html>
<html>
<head>
    <title>Seleções</title>
</head>
<body>
    <h1>Lista de Seleções</h1>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Continente</th>
        </tr>
        <?php while($row = $dados->fetch(PDO::FETCH_ASSOC)): ?>
        <tr>
            <td><?= $row['id'] ?></td>
            <td><?= $row['nome'] ?></td>
            <td><?= $row['continente'] ?></td>
        </tr>
        <?php endwhile; ?>
    </table>
</body>
</html>
