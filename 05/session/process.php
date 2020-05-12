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
                echo $username  = $_POST['username'] ;
                $password       =  ($_POST['password']);
                $file = file_get_contents('user.json') ;
                $JSON = json_decode($file,true) ;
                foreach($JSON as $key => $value)
                {
                    foreach($value as $keyOne =>$valueOne)
                    {   
                        echo "<pre>" ;
                        print_r($$valueOne['username']) ;
                        echo "</pre>" ;  
                        echo "<pre>" ;
                        print_r($$valueOne['password']) ;
                        echo "</pre>" ; 
                        // if($valueOne['username'] == $username &&  $valueOne['password'] == $password)
                        // {
                        //     if($username == 'admin')
                        //     {      
                        //         $_SESSION['fullName'] 		= $valueOne['fullname'];
                        //         $_SESSION['password']       =  $valueOne['password']; 
                        //         $_SESSION['flag']           = true;
                        //         // $_SESSION['timeout'] 		= time();	
                        //         echo '<h3>Xin chào: '.$_SESSION['fullName'].'</h3>';
                        //         echo '<h3>Mật khẩu: '.$_SESSION['password'].' </h3>';             
                        //         echo "</br>";
                        //         echo '<a href="logout.php">Đăng xuất</a>';      
                        //     }
                        //     else 
                        //     {
                        //         $_SESSION['fullName'] 		= $valueOne['fullname'];
                        //         $_SESSION['flag']           = true;
                        //         // $_SESSION['timeout'] 		= time();	
                        //         echo '<h3>Xin chào: '.$_SESSION['fullName'].'</h3>';
                        //         echo '<a href="logout.php">Đăng xuất</a>';
                        //     }
                        // }
                        // else
                        // {
                        //     header('location:login.php');
                        // }    
                    }
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