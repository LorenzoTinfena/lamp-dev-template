
<?php
try {
    $conn = new PDO("mysql:host=$_ENV[DB_HOST];dbname=$_ENV[DB_NAME]", "$_ENV[DB_USER]", "$_ENV[DB_PASSWORD]");
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully! All works!";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
