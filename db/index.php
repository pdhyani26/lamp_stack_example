<?php
echo "hello";
$mysqli = new mysqli('practice-db',getenv("MYSQL_USER"),getenv("MYSQL_PASSWORD"),'information_schema');
if ($mysqli->connect_error) {
  die("Database connection failed: " . $mysqli->connect_error);
} else {
	echo ".. you succeeded";
}
?>
