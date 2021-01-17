<?php
include "connection.php";
$invalidMessage = '';
if(isset($_POST["login"]))
{
    $user_id = $_POST["user_id"];
    $password = $_POST["password"];

    $sql = "SELECT * FROM member_info WHERE user_id='$user_id' AND password='$password' ";
    $result = mysqli_query($connection, $sql);

    

    if (!$row=$result->fetch_assoc()) {
        $invalidMessage = "Username or password is invalid";
    }
    else
    {
        session_start();
        $_SESSION['user_id'] = $row['user_id'];
        $_SESSION['name'] = $row['name'];
        $_SESSION['mem_exp'] = $row['mem_exp'];
        $_SESSION['user_type'] = $row['user_type'];
        $_SESSION['login'] = true;

        //echo $row['name'];
        if($row['user_type'] == 1) {
            header("Location: ./Admin_Panel.php");
        } else {
            header("Location: ./member.php");
        }
        
    }
    
}

?>


<!DOCTYPE html>

<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Online Library</title>
    <link rel="stylesheet" type="text/css" href="Login_Style.css">
</head>

<body>
    <div class="center">
        <h1>Login</h1>
        
        <form method="post" action="index.php">
            <?php if($invalidMessage != '') { ?>
            <div class="alert-danger"><?php echo $invalidMessage; ?></div>
            <?php } ?>
            <div class="txt_field">
                <input name="user_id"  type="text" required>
                <span></span>
                <label>User ID</label>
            </div>
            <div class="txt_field">
                <input name="password" type="password" required>
                <span></span>
                <label>Password</label>
            </div>

            <button type="submit" name="login">Login</button>


            <div class="signup_link">
                Not a member? <a href="create_new_account.php">Signup</a>
            </div>
        </form>
    </div>


</body>

</html>