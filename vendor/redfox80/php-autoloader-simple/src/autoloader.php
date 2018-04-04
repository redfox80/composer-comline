<?php

namespace redfox80\Autoloader;

class Autoloader {

    public function __construct()
    {

        //Autoload magic
        spl_autoload_register(function ($class_path) {
            //Get class name
            $temp = explode('\\', $class_path);

            $class_name = end($temp);

            //Get path to class folder-------------
            $bt = debug_backtrace();

            $par = explode(DIRECTORY_SEPARATOR, $bt[1]['file']);

            array_pop($par);

            $path = "";
            $pb = false;

            foreach($par as $p)
            {
                
                if($pb == true)
                {
                    $path .= DIRECTORY_SEPARATOR;
                } else {
                    $pb = true;
                }

                $path .= $p;
            }
            //End get path to class folder--------
        
            
            include $path . DIRECTORY_SEPARATOR . $class_name . '.php';
        });

    }

    //Function for testing that this actually works
    public function test()
    {
        
        echo "Hello world!";

    }

}