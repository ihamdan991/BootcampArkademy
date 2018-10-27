<?php 
class Fungsi{
	
	private $user ="root" , $pass = "" , $server = "localhost", $db_name = "db_arka";
  	protected $koneksi ;

    function __construct(){
        try {
            $this->koneksi = new PDO("mysql:host=".$this->server.";dbname=".$this->db_name , $this->user ,$this->pass);
            $this->koneksi->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo $e->getMessage();
        }

    }

    function sql($sql, $metode){
        $fetch = $this->koneksi->query($sql);
        switch ($metode) {
        	case 'all':
        		$result = $fetch->fetchAll(PDO::FETCH_OBJ);
        		return $result;
        		break;
        	case 'one':
        		$result = $fetch->fetch(PDO::FETCH_OBJ);
        		return $result;
        		break;
            case 'run':
                return $fetch;
                break;
        }
        return false;
  	}
}
$fungsi = new Fungsi();
function  base($url = ""){
	return "http://".$_SERVER['HTTP_HOST']."/BootcampArkademy/soal7/".$url;
}
function input($txt){
	return strip_tags(stripcslashes(htmlentities($txt, ENT_QUOTES)));
}
?>