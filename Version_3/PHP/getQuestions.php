 <?php  
include 'connectDB.php';
?>

<?php
mysqli_query($conn,'set character set UTF8');
mysqli_query($conn,"SET NAMES 'utf8'");

$query = "SELECT * FROM questions";
$result = mysqli_query($conn,$query);
$rows = array();
while($r = mysqli_fetch_assoc($result)) {
    $rows[] = $r;
}

echo json_encode($rows);
 


$conn->close();
?> 