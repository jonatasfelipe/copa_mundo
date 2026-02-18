<!DOCTYPE html>
<html>

<head>
    <title>Jogos</title>
</head>

<body>
    <h1>Lista de Jogos</h1>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Seleção Mandante</th>
            <th>Seleção Visitante</th>
            <th>Data / Hora</th>
            <th>Estádio</th>
            <th>Grupo</th>
        </tr>
        <?php while ($row = $dados->fetch(PDO::FETCH_ASSOC)): ?>
            <tr>
                <td><?= $row['id'] ?></td>
                <td><?= $row['selecao_mandante'] ?></td>
                <td><?= $row['selecao_visitante'] ?></td>
                <td><?= $row['data_hora'] ?></td>
                <td><?= $row['estadio'] ?></td>
                <td><?= $row['grupo'] ?></td>
            </tr>
        <?php endwhile; ?>
    </table>
</body>

</html>