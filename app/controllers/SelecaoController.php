<?php
require_once 'C:/xampp/htdocs/copa_mundo/app/models/Selecao.php';

class SelecaoController
{

    public function index()
    {
        $model = new Selecao();

        // ações: insert (POST), update (POST), delete (GET id)
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

        // exibir formulário estático (criar/editar)
        if (isset($_GET['form'])) {
            $form = $_GET['form']; // expected 'create' or 'edit'
            include 'C:/xampp/htdocs/copa_mundo/app/views/selecao/form.php';
            return;
        }

        $dados = $model->listar();
        include 'C:/xampp/htdocs/copa_mundo/app/views/selecoes.php';
    }
    public function insert()
    {
        $model = new Selecao();
        $model->insert($_POST);
        header('Location: ?controller=Selecao');
    }

    public function update($id)
    {
        $model = new Selecao();
        $model->update($id, $_POST);
        header('Location: ?controller=Selecao');
    }

    public function delete($id)
    {
        $model = new Selecao();
        $model->delete($id);
        header('Location: ?controller=Selecao');
    }
}
