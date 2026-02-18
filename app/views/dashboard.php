<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Dashboard - Copa 2026</title>
  <link rel="stylesheet" href="../../public/assets/css/dashboard.css">

</head>

<body>
  <nav>
    <ul>
      <li><a href="?controller=Classificacao">Classificação</a></li>
      <li><a href="?controller=Estadio">Estádios</a></li>
      <li><a href="?controller=Grupo">Grupos</a></li>
      <li><a href="?controller=Jogo">Jogos</a></li>
      <li><a href="?controller=Resultado">Resultados</a></li>
      <li><a href="?controller=Selecao">Seleções</a></li>
      <li><a href="?controller=Usuario">Usuários</a></li>
    </ul>
  </nav>

  <?php
  if (isset($_GET['controller'])) {
    echo "<div class='conteudoDinamico'>";
    $opcao = $_GET['controller'];
    $nomeController = $opcao . 'Controller.php';
    require_once __DIR__ . '/../controllers/' . $nomeController;

    $action = isset($_GET['action']) ? $_GET['action'] : 'index';

    $nomeClass = $opcao . 'Controller';
    $controller = new $nomeClass();
    $controller->$action();
    echo "</div>";
  }
  ?>
</body>

</html>