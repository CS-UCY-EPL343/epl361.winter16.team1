 <?php  
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "efollowme";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

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