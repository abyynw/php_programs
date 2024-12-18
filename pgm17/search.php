<?php
include("database.php");
$sql = "select * from library";
$result = mysqli_query($conn, $sql);
echo "<table border=1>";
echo "<th>BOOK ID</th>";
echo "<th>TITLE</th>";
echo "<th>AUTHOR</th>";
echo "<th>EDITION</th>";
echo "<th>PUBLISHER</th>";
while($row = mysqli_fetch_assoc($result)){
    echo "<tr>";
    echo "<td>{$row['bookid']}</td>";
    echo "<td>{$row['title']}</td>";
    echo "<td>{$row['author']}</td>";
    echo "<td>{$row['edition']}</td>";
    echo "<td>{$row['publisher']}</td>";
    echo "</tr>";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
        <nav>
            <div><a href="delete.php">DELETE</a>
            <a href="insert.php">INSERT</a>
            <a href="search.php">SEARCH</a>
            <a href="update.php">UPDATE</a></div>
        </nav>
    </center>
</body>
<?php
include("database.php");
?>
</html>