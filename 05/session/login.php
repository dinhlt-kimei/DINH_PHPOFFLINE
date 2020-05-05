<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
  
    <h1>Login</h1>
            <?php
            session_start();
            if(isset($_SESSION['flag']) && $_SESSION['flag'] == true)
            {
                if( $_SESSION['fullName'] == 'admin' )
                {
                    echo '<h3>Xin chào: '.$_SESSION['fullName'].'</h3>';
                    echo '<h3>Mật khẩu: '.$_SESSION['password'].' </h3>';
                    echo '<input  type="number" name = "time" value = "">' ;
                    echo '<input  type="button" name = "submitTime" value ="Save" >' ;
                    echo "<br>";
                    echo '<a href="logout.php">Đăng xuất</a>';
                }
                else
                {
                    echo '<h3>Xin chào: '.$_SESSION['fullName'].'</h3>';
                    echo '<a href="logout.php">Đăng xuất</a>';
                }
            }    
            else
            {           
            ?>
                <form action="process.php" method="POST">
                    <div class="form" >
                        <p>Username</p>
                        <input class="input" type="text" name = "username" placeholder="Username">
                        <p>Password</p>
                        <input class="input" type="password" name="password" placeholder="Password"> <br> <br>
                        <input type="submit" name="submit" value="Save">

                    </div>
            <?php
            }
            ?> 
                </form>
</body>
</html>