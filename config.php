<?php

// mysql connection variables
$_hostname = "enter_your_mysql_address";
$_username = "enter_your_mysql_username";
$_password = "enter_your_mysql_password";
$_database = "enter_the_name_of_lichat_database";

date_default_timezone_set('Europe/Vilnius');
error_reporting(0);


class CON
{
    protected static $_instance = null;
    
    public function load()
    {
        if(!isset(self::$_instance))
        {
            self::$_instance = new CON();
        }
        return self::$_instance;
    }

    public function createConnection()
    {
        global $_hostname, $_username, $_password, $_database;
        return new mysqli($_hostname, $_username, $_password, $_database);
    }
    
    // use this to only execute mysql statement
    public function executeStatement()
    {
        
    }
    
    // use this to execute and get response
    public function parseStatement()
    {

    }
}

