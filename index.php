<!-- <?php
echo "Welcome to php   functions <br>";

// Connecting to the Database
$servername = "localhost";
$username = "root";
$password = "";
$database = "function";

// Create a connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Die if connection was not successful
if (!$conn) {
    die("Sorry we failed to connect: " . mysqli_connect_error());
} else {
    echo "Connection was successful<br>";
}

// Sql query to be executed
$sql = "INSERT INTO `student` (`sno`, `name`, `age`, `marks`) VALUES ('so', 'name', 'age', 'makrs')";
$result = mysqli_query($conn, $sql);

// Add a new trip to the Trip table in the database
if ($result) {
    echo "The record has been inserted successfully successfully!<br>";
} else {
    echo "The record was not inserted successfully because of this error ---> " . mysqli_error($conn);
}




function insert_into(int $a, int $b) {
  return $a + $b;
}
echo insert_into(5, 20);
?> -->