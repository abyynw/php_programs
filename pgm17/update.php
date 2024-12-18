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
        <div>
            <br><br>
            <nav>
                <div><a href="delete.php">DELETE</a>
                <a href="insert.php">INSERT</a>
                <a href="search.php">SEARCH</a>
                <a href="update.php">UPDATE</a></div>
            </nav>
        </div>
        <br><br>
        <div>
            <form method="post" action="update.php">
                <label>ENTER BOOK ID TO BE UPDATED : </label>,<br>
                <input type="number" id="searchid" name="searchid">
                <input type="submit" name="submit" value="GET DETAILS"><br><br>
            </form>
        </div>
        <div>
            <form method="post" action="update.php">
                <table>
                    <tr>
                        <td><label>BOOK ID</label></td>
                        <td><input type="number" id="bookid" name="bookid"></td>
                    </tr>
                    <tr>
                        <td><label>TITLE</label></td>
                        <td><input type="text" id="title" name="title"></td>
                    </tr>
                    <tr>
                        <td><label>AUTHOR</label></td>
                        <td><input type="text" id="author" name="author"></td>
                    </tr>
                    <tr>
                        <td><label>EDITION</label></td>
                        <td><input type="text" id="edition" name="edition"></td>
                    </tr>
                    <tr>
                        <td><label>PUBLISHER</label></td>
                        <td><input type="text" id="publisher" name="publisher"></td>
                    </tr>
                    <tr>
                        <th colspan="2"><input type="submit" name="update" value="UPDATE"></th>
                    </tr>
                </table>
            </form>
        </div>
    </center>
</body>
<?php
if(isset($_POST['searchid'])){
    $searchid = $_POST['searchid'];
    $sql = "SELECT * FROM `library` WHERE bookid= $searchid";
    $result = mysqli_query($conn, $sql);
    if($result && mysqli_affected_rows($conn)>0){
        $row = mysqli_fetch_assoc($result);
        echo "<script>document.getElementById('bookid').value='{$row['bookid']}'</script>";
        echo "<script>document.getElementById('title').value='{$row['title']}'</script>";
        echo "<script>document.getElementById('author').value='{$row['author']}'</script>";
        echo "<script>document.getElementById('edition').value='{$row['edition']}'</script>";
        echo "<script>document.getElementById('publisher').value='{$row['publisher']}'</script>";
    }
}
?>
<?php
if(isset($_POST['update'])){
    if(isset($_POST['bookid']) && isset($_POST['title']) && isset($_POST['author']) && isset($_POST['edition']) && isset($_POST['publisher'])){
    $bookid = $_POST['bookid'];
    $title = $_POST['title'];
    $author = $_POST['author'];
    $edition = $_POST['edition'];
    $publisher = $_POST['publisher'];
    $sql = "UPDATE `library` SET `title`='$title',`author`='$author',`edition`='$edition',`publisher`='$publisher' WHERE bookid='$bookid'";
    $result = mysqli_query($conn,$sql);
    if($result){
        echo "<script>alert('Successfully updated ...')</script>";
    }
    else{
        echo "<script>alert('Something went Wrong !!!')</script>";
    }
}
}
?>
<?php
mysqli_close($conn);
?>
</html>