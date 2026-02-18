<?php
require_once 'C:/xampp/htdocs/copa_mundo/app/models/Estadio.php';

class EstadioController
{

    public function index()
    {
        $model = new Estadio();
        $dados = $model->listar();
        include 'C:/xampp/htdocs/copa_mundo/app/views/estadios.php';
    }
    public function insert()
    {
        $model = new Estadio();
        $model->insert($_POST);
        header('Location: ?controller=Estadio');
    }

    public function update($id)
    {
        $model = new Estadio();
        $model->update($id, $_POST);
        header('Location: ?controller=Estadio');
    }

    public function delete($id)
    {
        $model = new Estadio();
        $model->delete($id);
        header('Location: ?controller=Estadio');
    }
}
