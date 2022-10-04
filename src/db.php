<?php
	function connectMysql(string $dsn,string $dbuser,string $passdb){
        try{
            $db = new PDO($dsn, $dbuser, $passdb);

            $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);

        }catch(PDOException $e){
            die( $e->getMessage());
            
        }
        return $db;
    }

    function auth(PDO $db, string $email, string $passwd):bool {
        $stmt = $db->prepare(
            "SELECT * FROM users WHERE email = :email LIMIT 1;"
        );
        $stmt->execute([
            ':email' => $email
        ]);

        if ($stmt) {
            $row = $stmt->fetch();
            if (
                $stmt->rowCount() == 1 &&
                password_verify($passwd, ($row->passwd))
            ) {
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }
?>