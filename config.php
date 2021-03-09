<?php
class Connect extends PDO{
    public function __construct(){
        parent::__construct("mysql:host=localhost;dbname=bs_BestSellers", 'rdoherty48', 'Wvmqbr1KkwxTw636',
        array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")); 
        $this->setAttribute(PDO::ATR_ERRMODE< PDO::ERRMODE_EXCEPTION);
        $this->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
    }
}

?>