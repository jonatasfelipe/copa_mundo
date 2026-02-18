<?php
require_once 'C:/xampp/htdocs/copa_mundo/app/models/Usuario.php';

class UsuarioController
{

  public function index()
  {
    $model = new Usuario();

    if (isset($_GET['action'])) {
      $action = $_GET['action'];
      if ($action === 'insert' && $_SERVER['REQUEST_METHOD'] === 'POST') {
        $this->insert();
        return;
      }
      if ($action === 'update' && $_SERVER['REQUEST_METHOD'] === 'POST') {
        $this->update($_POST['id']);
        return;
      }
      if ($action === 'delete' && isset($_GET['id'])) {
        $this->delete($_GET['id']);
        return;
      }
    }

    if (isset($_GET['form'])) {
      include 'C:/xampp/htdocs/copa_mundo/app/views/usuario/form.php';
      return;
    }

    $dados = $model->listar();
    include 'C:/xampp/htdocs/copa_mundo/app/views/usuarios.php';
  }
  public function insert()
  {
    $model = new Usuario();
    $model->insert($_POST);
    header('Location: ?controller=Usuario');
  }

  public function update($id)
  {
    $model = new Usuario();
    $model->update($id, $_POST);
    header('Location: ?controller=Usuario');
  }

  public function delete($id)
  {
    $model = new Usuario();
    $model->delete($id);
    header('Location: ?controller=Usuario');
  }
}
