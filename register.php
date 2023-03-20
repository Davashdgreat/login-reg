<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up</title>
    <link rel="stylesheet" href="style.css">
    <link href="favicon.ico" rel="icon" type="image/x-icon" />
    <link href="data:image/x-icon;base64,AAABAAEAEBAQAAEABAAoAQAAFgAAACgAAAAQAAAAIAAAAAEABAAAAAAAgAAAAAAAAAAAAAAAEAAAAAAAAAAAAAAAhIS0AP///wBgU10A2dnZAF1PWgBOP0sAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAiAAAAAAAAAREQAAAAAAIRYxEgAAAiIhFjESIiAiIiERERIiIhERERERERERARFjERFlERABEWIRESMREAAREREREREAABEREREREQAAERERERERAABEEREREUQAAERBEREURAAARBEAABFEAABBEAAAARQAABAAAAAAAQD+fwAA/D8AAPAPAACAAQAAAAAAAAAAAACAAQAAgAEAAMADAADAAwAAwAMAAMADAADAAwAAw8MAAMfjAADf+wAA" rel="icon" type="image/x-icon" />

</head>
<body>
    <section>

        <div class="signup">

            <div class="formvalue">

               <form action="" method="post">

                <?php
                    require_once('sanitize.php');
                    require_once('config.php');
        
                    if(isset($_POST['Register']))
                    {
                        $uname = check($_POST['uname']);
                        $pwd = check($_POST['pwd']);
                        $fname = check($_POST['pwd']);
                        $email = check($_POST['pwd']);
        
        
                        if(!$uname){
                        $errUname = '<span class="error">Please, Enter your Userame</span>';
                    }
                        if(!$pwd){
                        $errPwd = '<span class="error">Please, Enter your password</span>';
                    }
                        if(!$email){
                        $errEmail = '<span class="error">Please, Enter your Email</span>';
                    }
                        if(!$fname){
                        $errFname = '<span class="error">Please, Enter your Email</span>';
                    }
        
                        if( $uname && $pwd && $email && $fname ){
                            echo ' <h4>Succesfully Registered</h4> ';
                        
                            $sql_insert = mysqli_query($link,"INSERT INTO `users`(`ID`, `fname`, `uname`, `pwd`, `email`) VALUES (null,'$uname','$pwd','$email','$fname')");
                        
                        
                        }
        
                        else {
                            echo '<p class="error"> Please fill all the missing field(s)</p>';
                        }
        
        
                    }
       ?>

                    <h2>Sign Up</h2>

                    <div class="inputbox">

                        <ion-icon name="clipboard"></ion-icon>
                        <input type="text" required name="fname">
                        <label for="">Username</label>

                    </div>
                    <div class="inputbox">

                        <ion-icon name="mail-outline"></ion-icon>
                        <input type="email" required name="email">
                        <label for="">Email</label>

                    </div>
                    <div class="inputbox">

                        
                        <ion-icon name="person"></ion-icon>
                        <input type="text" required name="uname">
                        <label for="">Username</label>

                    </div>

                    <div class="inputbox">                        

                        <ion-icon name="lock-closed-outline"></ion-icon>
                        <input type="password" required name="pwd">
                        <label for="">Password</label>

                    </div>

                    <div class="agree">
                        <input type="checkbox" required> I have agreed to the <a href="#">Terms</a> and <a href="#">Conditions</a>
                    </div>

                   

                    <button class="regbtn" name="Register">Sign up</button> 

                    

               </form>

            </div>

        </div>
    </section>

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>