<?php
require_once 'C:/xampp/htdocs/copa_mundo/app/models/Grupo.php';

class GrupoController
{

    public function index()
    {
        $model = new Grupo();

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
            include 'C:/xampp/htdocs/copa_mundo/app/views/grupo/form.php';
            return;
        }

        $dados = $model->listar();
        include 'C:/xampp/htdocs/copa_mundo/app/views/grupos.php';
    }
    public function insert()
    {
        $model = new Grupo();
        $model->insert($_POST);
        header('Location: ?controller=Grupo');
    }

    public function update($id)
    {
        $model = new Grupo();
        $model->update($id, $_POST);
        header('Location: ?controller=Grupo');
    }

    public function delete($id)
    {
        $model = new Grupo();
        $model->delete($id);
        header('Location: ?controller=Grupo');
    }
}
