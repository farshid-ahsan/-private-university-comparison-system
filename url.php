<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project";
//include('index.html');
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM university";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
    echo "
    <div class='column'>
      <a class='nav-link' href='".$row['subject']."' target='_blank'>".$row['university']. $row['url']."</a><br>
     
    
    </div>
    ";
    }
} else {
    echo "0 results";
}

mysqli_close($conn);
?>