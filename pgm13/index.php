<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
        <form action="index.php" method="post">
            <label for="">Enter the units</label>
            <input type="text" id="units" name="units" required><br><br>
            <label for="">Total Amount is : </label>
            <input type="text" id="amount" name="amount" readonly><br><br>
            <button>Submit</button>
        </form>
    </center>
    <?php
    if (isset($_POST["units"])){
        $units = $_POST["units"];
        if($units > 200){
            $rate = 5;
        }
        elseif($units >100){
            $rate = 4;
        }
        else{
            $rate = 3;
        }
        $amount = $rate * $units;
        echo "<script>document.getElementById('amount').value=$amount</script>";
    }
    
    ?>
</body>
</html>