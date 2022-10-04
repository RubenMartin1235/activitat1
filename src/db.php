<?php
	function connectMysql(string $dsn,string $dbuser,string $passdb){
        try{
            $db = new PDO($dsn, $dbuser, $passdb);
            $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);

        }catch(PDOException $e){
            die( $e->getMessage());
            
        }
        return $db;
    }

    function auth(string $db, string $email, string $passwd):bool {

    }
?>