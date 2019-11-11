<?php

class Database{
    private $host;
    private $db;
    private $user;
    private $password;
    private $charset;

    public function __construct()
    {
        $this->host = constant('HOST');
        $this->db = constant('DB');
        $this->user = constant('USER');
        $this->password = constant('PASSWORD');
        $this->charset = constant('CHARSET');
    }

    public function connect()
    {
        try //permite validar y si existe un error se ejetuca catch
        {
            $connection = "mysql:host=" . $this->host . ";dbname=" . $this->db . ";chatset=" . $this->charset;
//ayuda a ver los errores   //Opciones de la conexión
            $options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                        PDO::ATTR_EMULATE_PREPARES => false];
//Objeto PDO, Controlador de BD, IP del servidor o localhost, nombre de la BD, usuario y contraseña

            $pdo = new PDO($connection, $this->user, $this->password, $options);

            return $pdo;
        }
        catch (PDOException $e)
        {
            print_r("Error connection: " . $e->getMessage());
        }

    }
}

?>