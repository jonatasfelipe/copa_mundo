<?php
require_once 'C:/xampp/htdocs/copa_mundo/app/models/Jogo.php';

class JogoController
{

    public function index()
    {
        $model = new Jogo();

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
            include 'C:/xampp/htdocs/copa_mundo/app/views/jogo/form.php';
            return;
        }

        $dados = $model->listar();
        include 'C:/xampp/htdocs/copa_mundo/app/views/jogos.php';
    }
    public function insert()
    {
        $model = new Jogo();
        $model->insert($_POST);
        header('Location: ?controller=Jogo');
    }

    public function update($id)
    {
        $model = new Jogo();
        $model->update($id, $_POST);
        header('Location: ?controller=Jogo');
    }

    public function delete($id)
    {
        $model = new Jogo();
        $model->delete($id);
        header('Location: ?controller=Jogo');
    }
}
