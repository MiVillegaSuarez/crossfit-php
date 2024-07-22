<?php
namespace Models;

use mysqli;

class Model {
    protected $db_host = DB_HOST;
    protected $db_user = DB_USER;
    protected $db_pass = DB_PASS;
    protected $db_name = DB_NAME;

    protected $connection;
    protected $query;
    protected $table;

    public function __construct() {
        $this->connection();
    }
    
    public function connection() {
        $this->connection = new mysqli($this->db_host, $this->db_user, $this->db_pass, $this->db_name);

        if($this->connection->connect_error) {
            die('Error en la conexión' . $this->connection->connect_error);
        }
    }

    public function query($sql, $data = [], $params = null) {
        if($data) {

            if($params == null){
                $params = str_repeat('s', count($data));
            }

            $stmt = $this->connection->prepare($sql);
            $stmt->bind_param($params, ...$data);
            $stmt->execute();

            $this->query = $stmt->get_result();
        } else {
            $this->query = $this->connection->query($sql);
        }
        
        return $this;
    }

    public function first() {
        return $this->query->fetch_assoc();
    }

    public function get() {
        return $this->query->fetch_all(MYSQLI_ASSOC);
    }

    // Seleciconar Registros
    public function all() {
        // SELECT * FROM cf_users
        $sql = "SELECT * FROM {$this->table}";
        return $this->query($sql)->get();
    }

    public function find($id) {
        // SELECT * FROM cf_users WHERE id = 1
        $sql = "SELECT * FROM {$this->table} WHERE id_user = ?";
        return $this->query($sql, [$id], 'i')->first();
    }

    public function where($colum, $operator, $value = null) {
        if($value == null) {
            $value = $operator;
            $operator = '=';
        }

        // SELECT * FROM cf_users WHERE first_name = ?
        $sql = "SELECT * FROM {$this->table} WHERE {$colum} {$operator} ?";

        $this->query($sql, [$value]);

        return $this;
    }

    //Insertar Registros
    public function create($data) {
        // INSERT INTO cf_users (first_name, last_name, email) VALUES (?, ?, ?)
        $columns = array_keys($data);
        $columns = implode(', ', $columns);
        $values = array_values($data);

        $sql = "INSERT INTO {$this->table} ({$columns}) VALUES (" . str_repeat('?, ', count($values) - 1) . "?)";
        $this->query($sql, $values);        

        $insert_id = $this->connection->insert_id;
        return $this->find($insert_id);
    }

    //Actualizar Registros
    public function update($id, $data) {
        // UPDATE cf_users SET first_name = ?, last_name = ?, email = ? WHERE id_user = 2
        
        $fields = [];
        foreach($data as $key => $value) {
            $fields[] = "{$key} = ?";
        }

        $fields = implode(', ', $fields);

        $sql = "UPDATE {$this->table} SET {$fields} WHERE id_user = ?";
        $values = array_values($data);
        $values[] = $id;

        $this->query($sql, $values);

        return $this->find($id);
    }

    //Eliminar Registros
    public function delete($id) {
        //DELETE FROM cf_users WHERE id_user = 3
        $sql = "DELETE FROM {$this->table} WHERE id_user = ?";
        $this->query($sql, [$id], 'i');
    }
}

