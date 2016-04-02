<?php

class User
{   
    public $name;
    public $email;


    public function create($data)
    {
        // Here you would user CON::load()->executeStatement($sql) to create user
        echo "Create user " . $data["username"] . " " . $data["email"];
    }
}

