<?php

class Request {

    static function get($nombre) {
        if (isset($_GET[$nombre])) {
            return $_GET[$nombre];
        }
        return null;
    }

    static function post($nombre) {
        if (isset($_POST[$nombre])) {
            return $_POST[$nombre];
        }
        return null;
    }

    static function req($nombre) {
        if (Server::isPost()) {
            if (self::post($nombre) != null) {
                return self::post($nombre);
            }
        }
        return self::get($nombre);
    }
    
    

    /*static function request2($nombre) {
        if (Server::isPost()) {
            if (self::post($nombre) != null) {
                return self::post($nombre);
            
            } else {
            return self::get($nombre);
        }

        return self::get($nombre)
    }*/

}
