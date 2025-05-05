<?php

    define("DB_HOST", "localhost");
    define("CucinareDatabase", "");
    define("DB_CHARSET", "utf8");
    define("DB_USER", "root");
    define("DB_PASSWORD", "");
    
    
    $error = NULL;
    try 
    {
      $pdo = new PDO(
        "mysql:host=" . DB_HOST . ";charset=" . DB_CHARSET . ";dbname=" . "CucinareDatabase",
        DB_USER, DB_PASSWORD, 
        [ 
          PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
          PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]
      );
    } catch (Exception $ex) 
    { 
        $error = $ex->getMessage(); 
    
    }


    if (is_null($error)) 
    {
      try 
      {
        $stmt = $pdo->prepare("INSERT INTO `survey` (`email`, `name`, `color`) VALUES (?, ?, ?)");
        $stmt->execute([$_POST["email"], $_POST["name"], $_POST["color"]]);
      } 
      catch (Exception $ex) 
      { 
          $error = $ex->getMessage(); 
          
      }
    }
    echo is_null($error) ? "OK" : $error ;
?>
