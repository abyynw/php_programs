<?php
include("database.php");
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
        <br><br>
        <div>
            <nav>
                <div>
                    <a href="delete.php">DELETE</a>
                    <a href="insert.php">INSERT</a>
                    <a href="search.php">SEARCH</a>
                    <a href="update.php">UPDATE</a>
                </div>
            </nav>
        </div>
        <br><br>
        <div>
            <form method="post" action="search.php">
                <table>
                    <tr>
                        <td><label>ENTER THE BOOK ID TO BE SEARCH : </label></td>
                        <td><input type="number" id="bookid" name="bookid"></td>
                    </tr>
                    
                    <tr>
                        <th colspan="2"><input type="submit" name="submit" value="SEARCH"></th>
                    </tr>
                </table>
            </form>
        </div>
    </center>
    <br><br>
</body>
<?php
if(isset($_POST['bookid'])){
    $bookid = $_POST['bookid'];
    $sql = "SELECT * FROM `library` WHERE bookid = $bookid";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    echo "<script>alert('BOOKID:{$row['bookid']} TITLE:{$row['title']} AUTHOR:{$row['author']} EDITION:{$row['edition']} PUBLISHER:{$row['publisher']}')</script>";

}

?>

<?php
include("database.php");
$sql = "select * from library";
$result = mysqli_query($conn, $sql);
echo "<center><table border=1>";
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
</html>