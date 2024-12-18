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
                <div><a href="delete.php">DELETE</a>
                <a href="insert.php">INSERT</a>
                <a href="search.php">SEARCH</a>
                <a href="update.php">UPDATE</a></div>
            </nav>
        </div>
        <br><br>
        <div>
            <form method="post" action="insert.php">
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
                        <td><input type="submit" name="submit" value="INSERT"></td>
                    </tr>
                </table>
            </form>
        </div>
    </center>
</body>
<?php
if(isset($_POST['bookid']) && isset($_POST['title']) && isset($_POST['author']) && isset($_POST['edition']) && isset($_POST['publisher'])){
    $bookid = $_POST['bookid'];
    $title = $_POST['title'];
    $author = $_POST['author'];
    $edition = $_POST['edition'];
    $publisher = $_POST['publisher'];
    $sql = "INSERT INTO `library`(`bookid`, `title`, `author`, `edition`, `publisher`) VALUES ('$bookid','$title','$author','$edition','$publisher')";
    $result = mysqli_query($conn,$sql);
    if($result){
        echo "<script>alert('Successfully inserted ...')</script>";
    }
    else{
        echo "<script>alert('Something went Wrong !!!')</script>";
    }
}
?>
<?php
mysqli_close($conn);
?>
</html>