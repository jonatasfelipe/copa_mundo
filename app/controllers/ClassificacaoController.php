<?php
require_once 'C:/xampp/htdocs/copa_mundo/app/models/Classificacao.php';

class ClassificacaoController
{

    public function index()
    {
        $model = new Classificacao();
        $dados = $model->listar();
        include 'C:/xampp/htdocs/copa_mundo/app/views/classificacao.php';
    }

    public function insert()
    {
        $model = new Classificacao();
        $model->insert($_POST);
        header('Location: ?controller=Classificacao');
    }

    public function update($id)
    {
        $model = new Classificacao();
        $model->update($id, $_POST);
        header('Location: ?controller=Classificacao');
    }

    public function delete($id)
    {
        $model = new Classificacao();
        $model->delete($id);
        header('Location: ?controller=Classificacao');
    }
}
