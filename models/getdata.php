<?php 
 namespace data;

 class usedata{
    private $conn;
    protected static $columnstbl = ['id_producto', 'name_producto'];
    private $id_producto;
    private $name_producto;

    public function __construct($args = []){    
    
        $this-> id_producto = $args=['id_producto'];
        $this->name_producto = $args['name_producto'];
    }
    public function saveData($data){
        $delimiter = ":";
        $dataBd = $this->sanitizarAttributos();
        $valCols = $delimiter . join(',:',array_keys($data));
        $cols = join(',',array_keys($data));
        $sql = "INSERT INTO countries ($cols) VALUES ($valCols)";
        $stmt= self::$conn->prepare($sql);
        try {
            $stmt->execute($data);
            $response=[[
                'id_producto' => self::$conn->lastInsertId(),
                'name_producto' => $data['name_producto']
            ]];
        }catch(\PDOException $e) {
            return $sql . "<br>" . $e->getMessage();
        }
        return json_encode($response);
    }       
    public function loadAllData(){
        $sql = "SELECT id_producto,name_producto FROM countries";
        $stmt= self::$conn->prepare($sql);
        $stmt->execute();
        $countries = $stmt->fetchAll(\PDO::FETCH_ASSOC);
        return $countries;
    }
    public function deleteData($id){
        $sql = "DELETE FROM countries where id_country = :id";
        $stmt= self::$conn->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
    }
    public static function setConn($connBd){
        self::$conn = $connBd;
    }
    public function atributos(){
        $atributos = [];
        foreach (self::$columnstbl as $columna){
            if($columna === 'id_country') continue;
            $atributos [$columna]=$this->$columna;
         }
         return $atributos;
    }
    public function sanitizarAttributos(){
        $atributos = $this->atributos();
        $sanitizado = [];
        foreach($atributos as $key => $value){
            $sanitizado[$key] = self::$conn->quote($value);
        }
        return $sanitizado;
    }
}
?>