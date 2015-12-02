<?php
    session_start();

    include 'connect.php';

    // TABLE USERS
    //
    $sql = "create table if not exists users (
            id int(11) unsigned not null auto_increment,
            name varchar(60) not null,
            email varchar(50) not null,
            password varchar(32) not null,
            level_id int(2) unsigned not null default '2',
            status_id int(2) unsigned not null default '0',
            primary key  (id)
        )";
    $query = mysql_query($sql) or die(mysql_error());

    $sql = "truncate users";
    $query = mysql_query($sql);

    $sql = "insert into users(name, email, password, level_id, status_id)
            values('AZWAR ABD HAMID', 'azwar@gmail.com', md5('azwar'), '1', '1')";
    $query = mysql_query($sql) or die(mysql_error());

    $sql = "insert into users(name, email, password, level_id, status_id)
            values('AHMAD BIN ABDULLAH', 'ahmad@gmail.com', md5('ahmad'), '2', '1')";
    $query = mysql_query($sql) or die(mysql_error());

    // TABLE LEVEL
    //

    $sql = "create table if not exists level (
            id int(2) unsigned not null auto_increment,
            name varchar(20) not null,
            primary key (id)
      )";
    $query = mysql_query($sql);

    $sql = "truncate level";
    $query = mysql_query($sql);

    $sql = "insert into level(name) values('ADMIN')";
    $query = mysql_query($sql) or die(mysql_error());

    $sql = "insert into level(name) values('MEMBER')";
    $query = mysql_query($sql) or die(mysql_error());

    // TABLE STATUS
    //

    $sql = "create table if not exists status (
                id int(2) unsigned not null auto_increment,
                name varchar(20) not null,
                primary key (id)
          )";
    $query = mysql_query($sql);

    $sql = "truncate status";
    $query = mysql_query($sql);

    $sql = "insert into status(name) values('ACTIVE')";
    $query = mysql_query($sql) or die(mysql_error());

    $sql = "insert into status(name) values('INACTIVE')";
    $query = mysql_query($sql) or die(mysql_error());



    // NOTIFICATIONS MESSAGE
    //
    $_SESSION['msg'] = "SUCCESS. Database has been populated";

    header('location: index.php');
