<!-- conexão com o banco -->

<?php 


define('HOST','localhost');
define('DATABASENAME','crudwyndb');
define('USER','root');
define('PASSWORD','');

class connect{
    protected $connection;
    
    function __construct(){
        $this -> connectDatabase();
    }

    function connectDatabase(){
        try{
            $this -> new PDO(){
                
            }
        }
    }
        
    
}


?>