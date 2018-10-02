<?php
$servername = "localhost";
$username  = "admin";
$password = "howtoforge";

  try {
      $conn = new PDO("mysql:host=$servername;dbname=webapps", $username, $password);

      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      echo "connected succesfully";

      $sql = "CREATE TABLE MyGuests (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        firstname VARCHAR(30) NOT NULL,
        lastname VARCHAR(30) NOT NULL,
        email VARCHAR(50),
        reg_date TIMESTAMP
        )";

        $conn->exec($sql);
  }
  catch(PDOException $e){
    echo $sql . "<br>" . $e->getMessage();
  }
?>