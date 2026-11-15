<?php
// code comes from both:
// https://dev.to/satellitebots/create-a-web-server-and-save-form-data-into-mysql-database-using-php-beginners-guide-fah
// https://dev.to/ehtesham_ali_abc367f36a5b/dockerize-your-php-and-mysql-application-a-step-by-step-guide-to-multi-container-apps-4g4g

$servername = "mysql";
$username = "root";
$password = "root";
$database = "dev_to";
$conn = null;

try {
  // new connection
  $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
  
  // error mode
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  
  echo "connected successful!";
  
} catch (PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}

function saveData($name, $email, $message) {
  global $conn;
  $query = "INSERT INTO test(name, email, message) VALUES( :name, :email, :message)";
  
  $callToDb = $conn->prepare( $query );
  $name = htmlspecialchars(strip_tags($name));
  $email = htmlspecialchars(strip_tags($email));
  $message = htmlspecialchars(strip_tags($message));
  $callToDb->bindParam(":name", $name);
  $callToDb->bindParam(":email", $email);
  $callToDb->bindParam(":message", $message);
  
  if ($callToDb->execute()) {
    return '<h3 style="text-align:center;">We will get back to you very shortly!</h3>';
  } else {
    return '<h3 style="text-align:center;">Oh no! An error!</h3>';
  }
}

if( isset($_POST['submit'])) {
  $name = htmlentities($_POST['name']);
  $email = htmlentities($_POST['email']);
  $message = htmlentities($_POST['message']);
  
  // set? let's use them in a function
  $result = saveData($name, $email, $message);
  echo $result;
} else {
  echo '<h3 style="text-align:center;">Error message -- woah, the tutorial uses ( ͡° ͜ʖ ͡°). haven\'t seen that in years</h3>';
}

?>








