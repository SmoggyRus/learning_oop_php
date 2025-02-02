<?php
$config = include "config.php";
include 'database/QueryBuilder.php';
include 'database/Connection.php';

return new QueryBuilder(
    Connection::makeConnection($config['database'])
);