<?php 

$conn = new mysqli('db', getenv('MYSQL_USER'), getenv('MYSQL_PASSWORD'), 'testdb');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo 'MySQLi Connected Succesfully<br>';

$sql = "INSERT INTO tasks (title)
VALUES ('test data')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully<br>";
} else {    
    die("Error: " . $sql . "<br>" . $conn->error);
}

$sql = "SELECT * FROM tasks";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "task_id: " . $row["task_id"] . " title: " . $row["title"] . "<br>";
    }
} else {
    echo "0 results";
}

$conn->close();

?>