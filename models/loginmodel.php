<?php

/* include_once 'database.php'; */
include_once 'models/avgtempdiario.php';

class LoginModel extends Model
{
    private $nombre;
    private $username;

    public function userExists($user, $pass) //revisa si el usuario existe en la base de datos
    {
        $md5pass = $pass;

        $query = $this->db->connect()->prepare('SELECT * FROM usuarios WHERE username = :user AND password = :pass');
        $query->execute(['user' => $user, 'pass' => $md5pass]);

        $row = $query->fetch(PDO::FETCH_NUM);

        if($row == true) //si encuentra una fila entonces existe usuario
        {
            $rol = $row[1];
            $nombre = $row[2];
            $_SESSION['rol'] = $rol;
            $_SESSION['nombre'] = $nombre;
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
    /* Consulta para promedios diarios */
    public function getPromedioDiario()
    {
        $sql = 'SELECT CAST(fecha AS DATE) AS Dia, AVG(temperatura) AS Promedio_Temp, AVG(humedad) AS Promedio_humed, AVG(humedad_suelo) AS Promedio_humed_suelo, COUNT(id) AS total FROM parametros WHERE CAST(fecha AS DATE) BETWEEN DATE_SUB(CURDATE(), INTERVAL 10 DAY) AND DATE_SUB(CURDATE(), INTERVAL -1 DAY) GROUP BY CAST(fecha AS DATE)';


        $items = [];

        try 
        {
            $query = $this->db->connect()->query($sql);

            while($row = $query->fetch())
            {
                $item = new AvgTempDiario();
                $item->dia = $row['Dia'];
                $item->promedioTemp = $row['Promedio_Temp'];
                $item->promedioHR = $row['Promedio_humed'];
                $item->promedioHum = $row['Promedio_humed_suelo'];
                $item->total = $row['total'];

                array_push($items, $item);// ingresa nueva informacion al arreglo items
            }
            
            /* echo '<pre>'; var_dump($items); echo '</pre>'; */
            return $items;
        } 
        catch (PDOException $e) 
        {
            return [];
        }
    }

    public function getPromedioMensual()
    {
        $sql = 'SELECT MONTH(fecha) AS Mes, YEAR(fecha) AS Ano, AVG(temperatura) AS Promedio_Temp, AVG(humedad) AS Promedio_HR, AVG(humedad_suelo) AS Promedio_humedad, COUNT(id) AS total FROM parametros WHERE CAST(fecha AS DATE) BETWEEN DATE_SUB(CURDATE(), INTERVAL 7 MONTH) AND DATE_SUB(CURDATE(), INTERVAL -1 MONTH) GROUP BY Ano, Mes';        


        $items = [];

        try 
        {
            $query = $this->db->connect()->query($sql);

            while($row = $query->fetch())
            {
                $item = new AvgTempDiario();
                $item->dia = $row['Mes'];
                $item->ano = $row['Ano'];
                $item->promedioTemp = $row['Promedio_Temp'];
                $item->promedioHR = $row['Promedio_HR'];
                $item->promedioHum = $row['Promedio_humedad'];
                $item->total = $row['total'];

                array_push($items, $item);// ingresa nueva informacion al arreglo items
            }
            
            return $items;
        } 
        catch (PDOException $e) 
        {
            return [];
        }
    }
}

 ?>