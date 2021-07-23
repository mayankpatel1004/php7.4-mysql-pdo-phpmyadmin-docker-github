<?php
   ini_set('display_errors','1');
   echo "This is a PHP-MySQL demo application - Created by cloudswiftsolutions.com.";
?>

<?php
$servername = "cloudswift-mysql-app";
$username = "cloudswiftuser";
$password = "cloudswiftpass";

try {
  $conn = new PDO("mysql:host=$servername;dbname=cloudswift_db", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}

try {
   $stmt = $conn->prepare("SELECT * FROM user");
   $stmt->execute();
   $result = $stmt->fetchAll();
   echo "<pre>";
   print_r($result);
 } catch(PDOException $e) {
   echo "Error: " . $e->getMessage();
 }
?>