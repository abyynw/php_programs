<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="pgm12.php" method="post">
        <center>
            <table>
                <tr>
                    <td><label for="username">Username:</label></td>
                    <td><input type="text" id="username" name="username" ></td>
                </tr>
                <tr>
                    <td><label for="email">Email:</label></td>
                    <td><input type="email" id="email" name="email" ></td>
                </tr>
                <tr>
                    <td><label for="password">Password:</label></td>
                    <td><input type="password" id="password" name="password" ></td>
                </tr>
                <tr>
                    <td><label for="confirm_password">Confirm Password:</label></td>
                    <td><input type="password" id="confirm_password" name="confirm_password" ></td>
                </tr>
                <tr>
                    <td><label for="mobile">Mobile Number:</label></td>
                    <td><input type="tel" id="mobile" name="mobile" placeholder="1234567890"></td>
                </tr>
                <tr>
                    <td colspan="1"><input type="submit" value="Register"></td>
                </tr>
            </table>
        </center>
    </form>
    <?php
    if(isset($_POST["username"]) && isset($_POST["email"]) && isset($_POST["password"]) && isset($_POST["confirm_password"]) && isset($_POST["mobile"])){
        $username = trim($_POST["username"]);
        $email = trim($_POST["email"]);
        $password = trim($_POST["password"]);
        $c_password = trim($_POST["confirm_password"]);
        $mobile = trim($_POST["mobile"]);
        $errors = [];
        $username_exp = "/^[a-zA-Z0-9\.]+$/";
        $email_exp = "/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/";
        $mobile_exp = "/^(\+91-|\+91|0)?\d{10}$/";
        
        if($username == "" || $email == "" || $password == "" || $c_password == "" || $mobile == ""){
            $errors[] = "<h2>E-Mail format is Incorrect</h2>";
        }
        if(!preg_match($username_exp,$username)){
            $errors[] = "<h2>Username is Incorrect</h2>";
        }
        if(!preg_match($email_exp,$email)){
            $errors[] = "<h2>E-Mail format is Incorrect</h2>";
        }
        if(!preg_match($mobile_exp,$mobile)){
            $errors[] = "<h2>Mobile Number is Incorrect</h2>";
        }
        if(strlen($password) < 8){
            $errors[] = "<h2>Password should have atleast  8 character</h2>";
        }
        if($password != $c_password){
            $errors[] = "<h2>Password & Confirm Password are Incorrect</h2>";
        }
        
        if(!empty($errors)){
            foreach($errors as $error)
            echo "<li>{$error}</li>";
        }
        else{
            echo "<h1> REGISTERED SUCESSFULLY</h1>";
        }
    }
    
    ?>
</body>

</html>