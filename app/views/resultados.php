<!DOCTYPE html>
<html>

<head>
    <title>Resultados</title>
</head>

<body>
    <h1>Lista de Resultados</h1>
    <table border="1">
        <tr>
            <th>ID do Jogo</th>
            <th>Gols Mandante</th>
            <th>Gols Visitante</th>
        </tr>
        <?php while ($row = $dados->fetch(PDO::FETCH_ASSOC)): ?>
            <tr>
                <td><?= $row['jogo_id'] ?></td>
                <td><?= $row['gols_mandante'] ?></td>
                <td><?= $row['gols_visitante'] ?></td>
            <?php endwhile; ?>
    </table>
</body>

</html>