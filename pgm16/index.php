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