<?php
class Database
{

    private $host = "localhost";

    private $db_name = "db_rry";

    private $username = "root";

//change to "root" for mac use :) //
    private $password = "root";
//--------------------------------//

    private static $instance = null;
    public $conn;

    private function __construct(){

        $db_dsn = array(
            'host'    => $this->host,
            'dbname'  => $this->db_name,
            'charset' => 'utf8',
        );

        try {
            $dsn        = 'mysql:' . http_build_query($db_dsn, '', ';');
            $this->conn = new PDO($dsn, $this->username, $this->password);
        } catch (PDOException $exception) {
            echo json_encode(
                array(
                    'error'   => 'Database connection failed',
                    'message' => $exception->getMessage(),
                )
            );
            exit;
        }

    }

    public static function getInstance(){
        if(!self::$instance){
            self::$instance = new Database();
        }

        return self::$instance;
    }
    // get the database connection
    public function getConnection()
    {
        return $this->conn;
    }
}

?>