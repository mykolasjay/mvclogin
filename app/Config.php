<?php namespace App;

use App\Helpers\Session;

class Config {

    public static function get()
    {
        //turn on output buffering
        ob_start();

        //turn on sessions naudojamas init is session.php
        Session::init();

        return [
            //set the namespace for routing
            'namespace' => 'App\Controllers\\',

            //set default controller kur pirmiausia atkeliauja useris
            'default_controller' => 'admin',

            //set default method
            'default_method' => 'index',

            //database
            'db_type'     => 'mysql',
            'db_host'     => 'localhost',
            'db_name'     => 'test1',
            'db_username' => 'root',
            'db_password' => '',
        ];
    }
}
