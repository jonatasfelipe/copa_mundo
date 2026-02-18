<!DOCTYPE html>
<html>

<head>
    <title>Classificação</title>
</head>

<body>
    <h1>Lista de Classificação</h1>
    <table border="1">
        <tr>
            <th>Seleção</th>
            <th>Grupo</th>
            <th>Pontos</th>
            <th>Jogos</th>
            <th>Vitórias</th>
            <th>Empates</th>
            <th>Derrotas</th>
            <th>Gols Marcados</th>
            <th>Gols Sofridos</th>
            <th>Saldo de Gols</th>
        </tr>
        <?php while ($row = $dados->fetch(PDO::FETCH_ASSOC)): ?>
            <tr>
                <td><?= $row['nome_selecao'] ?></td>
                <td><?= $row['nome_grupo'] ?></td>
                <td><?= $row['pontos'] ?></td>
                <td><?= $row['jogos'] ?></td>
                <td><?= $row['vitorias'] ?></td>
                <td><?= $row['empates'] ?></td>
                <td><?= $row['derrotas'] ?></td>
                <td><?= $row['gols_marcados'] ?></td>
                <td><?= $row['gols_sofridos'] ?></td>
                <td><?= $row['saldo_gols'] ?></td>
            </tr>
        <?php endwhile; ?>
    </table>
</body>

</html>