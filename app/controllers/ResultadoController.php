<?php
require_once 'C:/xampp/htdocs/copa_mundo/app/models/Resultado.php';

class ResultadoController
{

    public function index()
    {
        $model = new Resultado();

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
            include 'C:/xampp/htdocs/copa_mundo/app/views/resultado/form.php';
            return;
        }

        $dados = $model->listar();
        include 'C:/xampp/htdocs/copa_mundo/app/views/resultados.php';
    }
    public function insert()
    {
        $model = new Resultado();
        $model->insert($_POST);
        header('Location: ?controller=Resultado');
    }

    public function update($id)
    {
        $model = new Resultado();
        $model->update($id, $_POST);
        header('Location: ?controller=Resultado');
    }

    public function delete($id)
    {
        $model = new Resultado();
        $model->delete($id);
        header('Location: ?controller=Resultado');
    }
}
