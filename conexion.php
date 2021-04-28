<?php

    function conectarBD() : mysqli{
        $db = new mysqli('localhost', 'root', '', 'bim');
        if(!$db){
            echo "error, no se conectó";
            exit;
        }
        return $db;
    }

?>