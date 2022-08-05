<?php 
	function conectar(){
		$host = "ec2-44-206-214-233.compute-1.amazonaws.com";
        $dbname = "d7i47886qe2c3v";
        $username = "odhlexmnvkjejz";
        $password = "b54d34f1660204593cd377be6605db669debe2d34a9964a38fd499a82fb160e2";
        try{
			$conn = pg_connect("host =$host dbname = $dbname user = $username password = $password");
		} catch (Exception $exp) {
            echo("no se pudo conectar a la base de datos $exp");
        }
        return $conn;
	}

?>