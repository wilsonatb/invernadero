<?php
include_once 'models/usuario.php';

class AdminModel extends Model
{
    public function __construct()
    {
        parent::__construct();
    }
// el metodo insert hace la conexion con la base de datos, hace la preparacion de la peticion y la ejecuta para evitar inytecccion de datos, en caso de que no se logre la solicitud en este caso x id repetida se indica con un echo, y se regresa el valor false que retornara al controlador nuevo
    public function get()
    {
        $items = [];

        try 
        {
            $query = $this->db->connect()->query("SELECT*FROM usuarios");

            while($row = $query->fetch())
            {
                $item = new Usuario();
                $item->id = $row['id'];
                $item->rol = $row['rol'];
                $item->nombre = $row['nombre'];
                $item->username = $row['username'];
                $item->password = $row['password'];

                array_push($items, $item);// ingresa nueva informacion al arreglo items
            }
            
            return $items;
        } 
        catch (PDOException $e) 
        {
            return [];
        }
    }

    public function getById($id)
    {
        $item = new Usuario();

        $query = $this->db->connect()->prepare("SELECT * FROM usuarios WHERE id = :id");

        try {
            $query->execute(['id' => $id]);

            while ($row = $query->fetch()) {
                $item->id = $row['id'];
                $item->rol = $row['rol'];
                $item->nombre = $row['nombre'];
                $item->username = $row['username'];
                $item->password = $row['password'];
            }

            return $item;
        } catch (PDOException $e) {
            return null;
        }
    }

    public function update($item)
    {
        $query = $this->db->connect()->prepare("UPDATE usuarios SET rol = :rol, nombre = :nombre, username = :username, password = :password  WHERE id = :id");

        try {
            $query->execute([
                'id'       => $item['id'],
                'rol'       => $item['rol'],
                'nombre'    => $item['nombre'],
                'username'  => $item['username'],
                'password'  => $item['password']
            ]);
            return true;
        } catch (PDOException $e) {
            return false;
        }
    }

    public function delete($id)
    {
        $query = $this->db->connect()->prepare("DELETE FROM usuarios WHERE id = :id");

        try {
            $query->execute(['id' => $id]);
            return true;
        } catch (PDOException $e) {
            return false;
        }
    }

    public function insert($datos)
    {
    
            $query = $this->db->connect()->prepare('SELECT * FROM usuarios WHERE username = :user');
            $query->execute(['user' => $datos['username']]);
    
            $row = $query->fetch(PDO::FETCH_NUM);

            if($row) {
                return false;
            } else {
                //insertar datos en la base de datos
                try {
                    $query = $this->db->connect()->prepare('INSERT INTO usuarios (rol, nombre, username, password) VALUES (:rol, :nombre, :username, :password)');
                    $query->execute(['rol' => $datos['rol'], 'nombre' => $datos['nombre'], 'username' => $datos['username'], 'password' => $datos['password']]);
                    return true;
                } catch (PDOException $e) {
                    return false;
                }
            }

        
        /* try 
        {
            $query = $this->db->connect()->prepare('INSERT INTO usuarios (rol, nombre, username, password) VALUES (:rol, :nombre, :username, :password)');
            $query->execute(['rol' => $datos['rol'], 'nombre' => $datos['nombre'], 'username' => $datos['username'], 'password' => $datos['password']]);
            return true;
        } catch (PDOException $e) 
        {
            return false;
        } */
        
    }


}
  
?>