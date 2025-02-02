<?php

class Connection{
   public static function makeConnection($config)
    {
        return new PDO("{$config['connection']};dbname={$config['dbname']}",
            $config['username'],
            $config['password']);
    }
}