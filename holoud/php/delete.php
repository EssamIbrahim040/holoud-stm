<?php


$host = 'localhost';
$user = 'root';
$password = '';
$dbName = 'holoud';

$conn =   mysqli_connect($host, $user, $password, $dbName);
$sql = "DELETE FROM data WHERE id=1";

if (mysqli_query($conn, $sql)) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . mysqli_error($conn);
}

mysqli_close($conn);
?>