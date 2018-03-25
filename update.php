<?php 
$conn = mysqli_connect('localhost','root' ,'','class1');

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "UPDATE php3 SET occupation='UI developer' WHERE id=5";

if (mysqli_query($conn, $sql)) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . mysqli_error($conn);
}

mysqli_close($conn);
?>