<?php session_start(); ?>
<?php
if (!function_exists('connect_to_database')) {
    function connect_to_database($servername, $username, $password, $dbname) {
        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        } 

        // Return the connection object
        return $conn;
    }
}

// Usage example:

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "large-scale-php-project";

$conn = connect_to_database($servername, $username, $password, $dbname);
//echo "Connected successfully";
?>
