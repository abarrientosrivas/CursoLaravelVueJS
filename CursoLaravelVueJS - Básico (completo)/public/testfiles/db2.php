<?php
$servername = "localhost";
$username  = "admin";
$password = "howtoforge";

  try {
      $conn = new PDO("mysql:host=$servername;dbname=webapps", $username, $password);

      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

      $sql = "INSERT INTO MyGuests (firstname, lastname, email) 
      VALUES ('Alexis', 'Barrientos', 'altomail@gmail')";

        $conn->exec($sql);
        echo "Agregado correctamente";
  }
  catch(PDOException $e){
    echo $sql . "<br>" . $e->getMessage();
  }
?>