<?php
//Aca hacemos toda la conexion del arduino con la aplicacion Web, estan definidos los metodos para setear los parametros, enviar a la db y extraer de la db

class ArduinoModel extends Model
{

    /* public function __construct()
    {
        parent::__construct();
    } */

    /* private $totalVotes;//conteo de numero de votos */
    private $temperatura;
    private $humedad;
    private $fechaTemp;
    private $etapa;
    private $valor1;
    private $valor2;

    public function setParametros($parametro1, $parametro2)//eta fuincion guarda la opcion que elegi
    {
        $this->temperatura = $parametro1;
        $this->humedad = $parametro2;
    }

    public function envio()//enviar los datos a la bd
    {
        $query = $this->db->connect()->prepare('INSERT INTO `parametros`(`temperatura`, `humedad`) VALUES (:temp, :hum)');
        $query->execute(['temp' => $this->temperatura, 'hum' => $this->humedad]);
    }

    public function getTemp()//extraer los datos de la bd
    {
        //seleciona el maximo id de la tabla y regresa un objeto PDO este valor lo guarda para usarlo luego
        $query = $this->db->connect()->query('SELECT MAX(id) AS id_max FROM `parametros`');
        $id_maximo = $query->fetch(PDO::FETCH_OBJ)->id_max;

        //Con el id_maximno obtenido se hace una busqueda en la tabla donde la humedad se la mas actual
        $query = $this->db->connect()->query('SELECT `humedad` FROM `parametros` WHERE id = ' . $id_maximo);
        $valor_deseado = $this->humedad = $query->fetch(PDO::FETCH_OBJ)->humedad;

        //Con el id_maximno obtenido se hace una busqueda en la tabla donde la humedad se la mas actual
        $query = $this->db->connect()->query('SELECT `temperatura` FROM `parametros` WHERE id = ' . $id_maximo);
        $y = $this->temperatura = $query->fetch(PDO::FETCH_OBJ)->temperatura;

        $query = $this->db->connect()->query('SELECT UNIX_TIMESTAMP(fecha) AS fechaTemp FROM parametros WHERE id = ' . $id_maximo);
        $fechaUnix = $this->fechaTemp = $query->fetch(PDO::FETCH_OBJ)->fechaTemp;

        // setea una cabecera JSON
        header("Content-type: text/json");
        // el valor de la x es el tiempo en este moemento en formato unix multiplicado x 1000
        $x = (time() - (60 * 60 * 4)) * 1000;
        
        // Crea un arreglo PHP y al hacer el echo parece un JSON
        $ret = array($x, $y);
        echo json_encode($ret);

    }

    public function getHumd()
    {
        $query = $this->db->connect()->query('SELECT MAX(id) AS id_max FROM `parametros`');
        $id_maximo = $query->fetch(PDO::FETCH_OBJ)->id_max;

        //Con el id_maximno obtenido se hace una busqueda en la tabla donde la humedad se la mas actual
        $query = $this->db->connect()->query('SELECT `humedad` FROM `parametros` WHERE id = ' . $id_maximo);
        $y = $this->humedad = $query->fetch(PDO::FETCH_OBJ)->humedad;
        
        $x = (time() - (60 * 60 * 4)) * 1000;
        
        /* $y = rand(0, 100); */
        // Crea un arreglo PHP y al hacer el echo parece un JSON
        $ret = array($x, $y);
        echo json_encode($ret);
    }

    public function getConfiguracion()
    {
        $query = $this->db->connect()->query('SELECT MAX(id) AS id_max FROM `configuracion`');
        $id_maximo = $query->fetch(PDO::FETCH_OBJ)->id_max;

        $query = $this->db->connect()->query('SELECT `etapa` FROM `configuracion` WHERE id = ' . $id_maximo);
        $valor_deseado = $this->etapa = $query->fetch(PDO::FETCH_OBJ)->etapa;

        
        $query = $this->db->connect()->query('SELECT `valor1` FROM `configuracion` WHERE id = ' . $id_maximo);
        $valor_deseado2 = $this->valor1 = $query->fetch(PDO::FETCH_OBJ)->valor1;

        echo $valor_deseado . '*' . $valor_deseado2 . '*';
    }


    public function getTotal($parametro, $fechaInicio, $fechaFin)
    {
        $query = $this->db->connect()->query('SELECT SUM(' . $parametro . ') AS votos_totales FROM lenguajes WHERE fecha BETWEEM ' . $fechaInicio . ' AND ' . $fechaFin);
        $this->totalVotes = $query->fetch(PDO::FETCH_OBJ)->votos_totales;
        return $this->totalVotes;
    }   

    public function getPercentage($votes)
    {
        return round(($votes / $this->totalVotes) * 100, 0);
    }
}
 ?>
