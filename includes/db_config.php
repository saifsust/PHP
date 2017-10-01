<?php

class DbConfig {

    private $USER_NAME = "root";
    private $PASSWORD = "root";
    private $HOST = "localhost";
    private $DB_NAME = "myblog";
    public static $connection = null;

    public function __construct() {
        try {

            self::$connection = mysqli_connect($this->HOST, $this->USER_NAME, $this->PASSWORD, $this->DB_NAME);
            print 'DB connection complete<br>';
            
        } catch (Exception $ex) {
            print $ex->getMessage() . "<br>";
        }
    }

    public static function close() {
        try {

            mysqli_close(self::$connection);
        } catch (Exception $ex) {
            print $ex->getMessage() . "<br>";
        }
    }

}



