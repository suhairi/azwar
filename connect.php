<?php

    $conn   = mysql_connect('localhost', 'root', 'zxsw@34rfv');
    $db     = mysql_select_db('eshop');

    if (!$db)
    {
        $sql = 'CREATE DATABASE eshop';
        $query = mysql_query($sql);
    }