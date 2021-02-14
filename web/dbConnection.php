<?php
function get_db(){
    $db = NULL;

    try {
        $dbUrl = getenv('DATABASE_URL');
        if(!isset($dbURL) || empty($dbURL)){
            $dbURL = "" //not sure how to do this quite yet.
        }

        $dbopts = parse_url($dbURL);
        $dbHost = $dbopts["host"];
        $dbPort = $dbopts["port"];
        $dbUser = $dbopts["user"];
        $dbPassword = $dbopts["pass"];
        $dbName = ltrim($dbopts["path"],'/');

        $db = new PDO("pgsql:host=$dbHost;port=$dbPort;dbname=$dbName", $dbUser, $dbPassword);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    catch(PDOException $ex){
        echo "Error connecting to DB. Details: $ex";
        die();
    }
    return $db;
}