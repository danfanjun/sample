<?php

function get_db_config(){
    if(getevn('IS_IN_HEROKU')){
         $url = parse_url(getenv("DATABASE_URL"));
        return $db_config= [
            'connection' => 'pgsql',
            'host'       => $url["host"],
            'database'   => substr($url["path"], 1),
            'username'   => $url["user"],
            'password'   => $url["pass"],
         ];
    }else{
        return $db_config= [
            'connection' => evn('DB_CONNECTION' , 'mysql'),
            'host'       => evn('DB_HOST' , 'localhost'),
            'database'   => evn('DB_DATABASE' , 'forge'),
            'username'   => evn('DB_USERNAME' , 'forge'),
            'password'   => evn('DB_PASSWORD', ''),
        ];
    }
}