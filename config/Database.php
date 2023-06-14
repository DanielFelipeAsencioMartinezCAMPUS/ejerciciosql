<?php 
    namespace app;
    class Database{
        private $conn;  
        protected static $connection = array(
            'driver' => 'sql',
            'host' => 'localhost',
            'username' => 'root',
            'password' => '',
            'database' => 'shop',
            'collation' => 'utf8',
            'flags' => [
                   // Turn off persistent connections
                   \PDO::ATTR_PERSISTENT => false,
                   // Enable exceptions
                   \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION,
                   // Emulate prepared statements
                   \PDO::ATTR_EMULATE_PREPARES => true,
                   // Set default fetch mode to array
                   \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC,
                   // Set character set
                   \PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8mb4 COLLATE utf8mb4_unicode_ci'
            ]
        );

        public function __construct($args = []){
            $this-> conn = $args['conn'] ?? null;
        }
        public function get_Connection($dbkey) {
            $dbConfig = self::$connection[$dbkey];
            $this->conn = null;
            $dsn = "{$dbConfig['driver']}:host={$dbConfig['host']};dbname={$dbConfig['database']}";
            try {

            }
           catch (\PDOException $e) {
            echo "Error: " . $e->getMessage();
           }
           return $this->conn;
        }
       
    }

?>