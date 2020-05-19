

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SEND EMAIL</title>
    <style>
        .submit:hover{

            background-color: red;
            
        }
    </style>
</head>
<body>
        <form action="proccess.php" method="POST">
            
            <div class="warrap" style="border: 1px solid ; width:600px; margin: 150px auto">
                <div class="content" style="padding: 20px; font-size:20px">
                    <div >
                        <label for="">Email</label> </br>
                        <input type="text" placeholder="Enter Email" name="email">
                    </div>
                    <div>
                        <label for="">Subject</label> </br>
                        <input type="text" placeholder="Enter Subject" name="subject">
                    </div>
                    <div>
                        <label for="">Content</label> </br>
                        <textarea  cols="63" rows="10"  placeholder="Enter Content" name="content"></textarea>
                    </div>
                    <input  class="submit" name="submit" style="margin-top:5px ;font-size: 20px;" type="submit" value="Send">
                </div>
            </div>
        </form>
</body>
</html>