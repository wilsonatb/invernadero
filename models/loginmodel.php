<?php

/* include_once 'database.php'; */

class LoginModel extends Model
{
    private $nombre;
    private $username;

    public function userExists($user, $pass) //revisa si el usuario existe en la base de datos
    {
        $md5pass = $pass;

        $query = $this->db->connect()->prepare('SELECT * FROM usuarios WHERE username = :user AND password = :pass');
        $query->execute(['user' => $user, 'pass' => $md5pass]);

        if($query->rowCount()) //si encuentra una fila entonces existe usuario
        {
            return true;
        }else {
            return false;
        }
    }

    public function setUser($user)
    {
        $query = $this->db->connect()->prepare('SELECT * FROM usuarios WHERE username = :user');
        $query->execute(['user' => $user]);

        foreach ($query as $currentUser)
        {
            $this->nombre = $currentUser['nombre'];
            $this->username = $currentUser['username'];
        }
        return $this->nombre;
    }

    public function getNombre()//permite obtener el nombre del usuario activo
    {
        return $this->nombre;
    }


    public function setParametros($parametro1)//eta fuincion guarda la opcion que elegi
    {
        $this->etapa = $parametro1;
    }
// el metodo insert hace la conexion con la base de datos, hace la preparacion de la peticion y la ejecuta para evitar inytecccion de datos, en caso de que no se logre la solicitud en este caso x matricula repetida se indica con un echo, y se regresa el valor false que retornara al controlador nuevo
    public function insert()
    {
        //insertar datos en la base de datos
        try 
        {
            $query = $this->db->connect()->prepare('INSERT INTO configuracion (etapa) VALUES (:etapa)');
            $query->execute(['etapa' => $this->etapa]);

            return true;
        } catch (PDOException $e) 
        {
            return false;
        }
        
    }

    public function getConfiguracion()
    {
        $query = $this->db->connect()->query('SELECT MAX(id) AS id_max FROM `configuracion`');
        $id_maximo = $query->fetch(PDO::FETCH_OBJ)->id_max;

        $query = $this->db->connect()->query('SELECT `etapa` FROM `configuracion` WHERE id = ' . $id_maximo);
        $valor_deseado = $this->etapa = $query->fetch(PDO::FETCH_OBJ)->etapa;

        return $valor_deseado;

    }
}

 ?>