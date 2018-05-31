<? 

include "connect.php";


class Database{

public $connection;


public function __construct(){


$this->connection= mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

return $this->connection;

}

}

$database= new Database();
?>