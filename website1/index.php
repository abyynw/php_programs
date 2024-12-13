<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
        <form method="post" action="index.php">
            <label for="">Username</label>
            <input type="text" id="uname" name="uname"><br>
            <label for="">Password</label>
            <input type="password" id="pass" name="pass"><br>
            <input type="Submit">
        </form>
    </center>
    
    <?php
    // check whether number is positive ,Zero , Negative.
    // 
    // $x=0;
    // if($x==0)
    // echo "number is Zero {$x}";
    // elseif($x<0)
    // echo "Number is negative {$x}";
    // else
    // echo"Number is Positive {$x}";
    // 
    // Use while loop to print all numbers upto 10
    // 
    // $x=1;
    // while ($x<=10)
    // {
    //     echo "{$x}<br>";
    //     $x++;
    // }
    // 
    // Use for loop to print all numbers upto 10
    // 
    // for ($x=1;$x<=10;$x++)
    // {
    //     echo "{$x}<br>";
    // }
    // 
    // Add numbers using function in Php
    // 
    // $x=10;
    // $y=20;
    // function addnumbers($x,$y){
    //     echo $x+$y;
    // }
    // addnumbers($x,$y);
    // 
    // Use return method and assign to variable and print the sum
    // $x=10;
    // $y=20;
    // function addnumbers($x,$y){
    //     return ($x+$y);
    // }
    // $z=addnumbers($x,$y);
    // echo "Sum is {$z}"
    // 
    // Use "print_r" method to print array
    // $colors=["red","green","blue"];
    // print_r($colors);
    // echo"<br>";
    // $colors[]="purple";
    // print_r($colors);
    // echo"<br>";
    // unset($colors[2]);
    // print_r($colors);
    // echo"<br>";
    // 
    // 
    // $fav_color = ['weeknd' => 'red','scoobdoo' => 'green','sia' => 'blue','Justin' => 'orange','Eminem' => 'black'];
    // $fav_color['Bille']="grey";
    // print_r($fav_color);
    // unset($fav_color['scoobdoo']);
    // print_r($fav_color);
    // 
    // 
    // $colors=["red","green","blue"];
    // foreach($colors as $x){
    //     echo $x;
    // }
    // 
    // 
    $uname = $_POST["uname"];
    $pass = $_POST["pass"];
    echo "{$uname}<br>";
    echo $pass;
    ?>
</body>
</html>