<?php

class Home extends Controller
{
    // Default methodm it sends some variables to index view
    public function index($name = "", $email = "")
    {   
        $user = $this->model("User");
        $user->name = $name;
        $user->email = $email;
        
        // accessing index.php view
        $this->view("index", ["name" => $user->name, "email" => $user->email]);
    }
    
    // Create user method example accessed by (home/create/username/user_email)
    public function create($username = "", $email = "")
    {
        $user = $this->model("User");
        $user->create(["username" => $username, "email" => $email]);
    }
    
}