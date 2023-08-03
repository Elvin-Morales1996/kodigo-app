<?php
//vamos a definir como viene y como luce mi informacion
require_once './config.php';
class Bootcamp{
private $conn;
public function __construct(){
    //siempre hacer esto
    $this->conn =new mysqli(DB_HOST,DB_USER,DB_PASS,DB_NAME);
    if($this->conn->connect_error){

    die("connection failed: ".$this->conn->connect_error);
    }else{
        echo "conexion a la base de datos";
    }

}
//obtiene todos los bootcam
public function get_bootcamp(){
    $sql= "SELECT * FROM bootcamps";
    $result =$this->conn->query($sql);
    $bootcamp = array();
    if ($result->num_rows >0) {
        while ($row=$result->fetch_assoc()) {
           $bootcamp[] = $row;
        }
       

    }
    return $bootcamp;

}
//agregar un bootcam
public function add_bootcamp($titulo, $descripcion, $star_bootcamp, $end_bootcamp, $modulos){

//crear la consulta

$sql = "INSERT INTO bootcamps (title, description,start_bootcamp,end_bootcamp,modules)
    VALUES('$titulo','$descripcion', '$star_bootcamp', '$end_bootcamp', '$modulos')
";

//ejecutar la consulta
$result = $this->conn->query($sql);


//procesamos
if ($result) {
    echo "nuevo bootcamp agregado";
}else{
    echo "error al agregar datos...";
}

}


}






?>