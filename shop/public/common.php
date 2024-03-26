<?php
  session_start();
  const DB_HOST = 'mysql:dbname=shop';
  const DB_USER = 'testuser';
  const DB_PASSWORD = 'mysqlpass';
  
  function connect() {
    try {
        $pdo = new PDO( DB_HOST, DB_USER, DB_PASSWORD, [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_EMULATE_PREPARES =>false
	]);
    } catch (PDOException $e) {
        echo 'ERROR: Could not connect.'.$e->getMessage()."\n";
        exit();    
    }
    return $pdo;
  }
?>
