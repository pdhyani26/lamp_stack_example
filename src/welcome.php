<html>
<body>
<?php

#echo "hello php";

$mysqli=new mysqli('practice-db',getenv("MYSQL_USER"),getenv("MYSQL_PASSWORD"),'dhyani');
echo "in welcome.php";

if ($mysqli->connect_error) {
  die("Database connection failed: " . $mysqli->connect_error);
}
if(isset($_POST['submit'])) {
  $fname=$_POST['fname'];
  $lname=$_POST['lname'];
  $country=$_POST['country'];
  $subject=$_POST['subject'];
  }

echo $fname, $lname, $country, $subject;
$query = "INSERT INTO Form_Registration
  VALUES ('$fname', '$lname', '$country', '$subject')";


 if (!mysqli_query($mysqli, $query)) {
        die('An error occurred when submitting your review.');
    }else {
      echo "Data inserted successfully";
}
?>
</body>
</html>
