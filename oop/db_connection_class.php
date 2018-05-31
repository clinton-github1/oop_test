<? 

include "connect.php";


class Database{

public $connection;


public function db_connect(){


$this->connection= mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

if (!$this->connection) {
	# code...

	echo ("wrong connection" . mysqli_error());
}

else{

	echo "connection successful";
}

}

}

$database= new Database();
$database->db_connect();

?>