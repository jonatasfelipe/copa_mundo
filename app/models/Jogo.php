<?php
require_once 'C:/xampp/htdocs/copa_mundo/config/database.php';

class Jogo
{
    private $conn;
    private $table = "jogos";

    public function __construct()
    {
        $database = new Database();
        $this->conn = $database->connect();
    }

    public function listar()
    {
        $query = "SELECT 
            j.id,
            sm.nome AS selecao_mandante,
            sv.nome AS selecao_visitante,
            DATE_FORMAT(j.data_hora, '%d/%m/%Y %H:%i') AS data_hora,
            e.nome AS estadio,
            g.nome AS grupo
        FROM " . $this->table . " j
        LEFT JOIN selecoes sm ON sm.id = j.selecao_mandante_id
        LEFT JOIN selecoes sv ON sv.id = j.selecao_visitante_id
        LEFT JOIN estadios e ON e.id = j.estadio_id
        LEFT JOIN grupos g ON g.id = j.grupo_id";
        return $this->conn->query($query);
    }
    public function insert($data)
    {
        $fields = [];
        $placeholders = [];
        $params = [];
        foreach ($data as $c => $val) {
            if ($c === 'id') continue;
            $fields[] = $c;
            $placeholders[] = ':' . $c;
            $params[':' . $c] = $val;
        }
        $sql = "INSERT INTO " . $this->table . " (" . implode(',', $fields) . ") VALUES (" . implode(',', $placeholders) . ")";
        $stmt = $this->conn->prepare($sql);
        return $stmt->execute($params);
    }

    public function update($id, $data)
    {
        $set = [];
        $params = [];
        foreach ($data as $c => $val) {
            if ($c === 'id') continue;
            $set[] = "$c = :$c";
            $params[':' . $c] = $val;
        }
        $params[':id'] = $id;
        $sql = "UPDATE " . $this->table . " SET " . implode(',', $set) . " WHERE id = :id";
        $stmt = $this->conn->prepare($sql);
        return $stmt->execute($params);
    }

    public function delete($id)
    {
        $stmt = $this->conn->prepare("DELETE FROM " . $this->table . " WHERE id = :id");
        return $stmt->execute([':id' => $id]);
    }
}
