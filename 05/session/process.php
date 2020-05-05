<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Process</h1>
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
            if(isset($_POST['username']) && isset($_POST['password']))
            {
                $username  = $_POST['username'] ;
                $password  = md5($_POST['password']);
                $file = parse_ini_file('file.ini') ;
                $userInfo= explode('|',$file[$username]) ;// tách chuối thàng mảng.
                if($userInfo[0] == $username && $userInfo[1] == $password)
                {
                    if($username == 'admin')
                    {   
                        if(isset($_GET['time']) && isset($_GET['sumbitTime']))
                        {
                            echo $_SESSION['timeout'] = $_GET['time'];
                        }           
                        $_SESSION['fullName'] 		= $userInfo[0];
                        $_SESSION['password']       = $userInfo[1]; 
                        $_SESSION['flag']           = true;
                        // $_SESSION['timeout'] 		= time();	
                        echo '<h3>Xin chào: '.$_SESSION['fullName'].'</h3>';
                        echo '<h3>Mật khẩu: '.$_SESSION['password'].' </h3>';
                    ?>
                        <form action="" method="GET">
                        <input  type="number" name = "time" value = "">
                        <input  type="button" name = "submitTime" value ="Save" >
                        </form>
                    <?php
                      
                        echo "</br>";
                        echo '<a href="logout.php">Đăng xuất</a>';      
                    }
                    else 
                    {
                        $_SESSION['fullName'] 		= $userInfo[2];
                        $_SESSION['flag']           = true;
                       // $_SESSION['timeout'] 		= time();	
                        echo '<h3>Xin chào: '.$_SESSION['fullName'].'</h3>';
                        echo '<a href="logout.php">Đăng xuất</a>';
                    }
                }
                else
                {
                    header('location:login.php');
                }
            }
            else
            {
                header('location:login.php');
            }
        }
    ?>
    
   
    
</body>
</html>