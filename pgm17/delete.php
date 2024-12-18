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
            <form method="post" action="delete.php">
                <table>
                    <tr>
                        <td><label>ENTER THE BOOK ID TO BE DELETED : </label></td>
                        <td><input type="number" id="bookid" name="bookid"></td>
                    </tr>
                    
                    <tr>
                        <th colspan="2"><input type="submit" name="submit" value="DELETED"></th>
                    </tr>
                </table>
            </form>
        </div>
    </center>
</body>
<?php
if(isset($_POST['bookid'])){
    $bookid = $_POST['bookid'];
    
    $sql = "DELETE FROM `library` WHERE bookid = '$bookid'";
    $result = mysqli_query($conn,$sql);
    if($result){
        echo "<script>alert('Successfully DELETED ...')</script>";
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