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

    function auth(PDO $db, string $email, string $passwd):bool {
        $stmt = $db->prepare(
            "SELECT * FROM users WHERE email = :email;"
        );
        $stmt->execute([
            ':email' => $email
        ]);

        if ($stmt) {
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
            var_dump($row);
            return true;
        } else {
            return false;
        }
    }
?>