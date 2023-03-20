<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
    <link href="favicon.ico" rel="icon" type="image/x-icon"/>
    <link href="data:image/x-icon;base64,AAABAAEAEBAQAAEABAAoAQAAFgAAACgAAAAQAAAAIAAAAAEABAAAAAAAgAAAAAAAAAAAAAAAEAAAAAAAAAAAAAAAhIS0AP///wBgU10A2dnZAF1PWgBOP0sAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAiAAAAAAAAAREQAAAAAAIRYxEgAAAiIhFjESIiAiIiERERIiIhERERERERERARFjERFlERABEWIRESMREAAREREREREAABEREREREQAAERERERERAABEEREREUQAAERBEREURAAARBEAABFEAABBEAAAARQAABAAAAAAAQD+fwAA/D8AAPAPAACAAQAAAAAAAAAAAACAAQAAgAEAAMADAADAAwAAwAMAAMADAADAAwAAw8MAAMfjAADf+wAA" rel="icon" type="image/x-icon" />

</head>
<body>
    <section>

        <div class="formbox">

            <div class="formvalue">

               <form action="" method="post">

                <?php
                    require_once('sanitize.php');
                    require_once('config.php');

                    if(isset($_POST['Login']))
                    {
                        $email = check($_POST['email']);
                        $pwd = check($_POST['pwd']);


                        if(!$email){
                        $errEmail = '<span class="error">Please, Enter your Email</span>';
                        }
                        if(!$pwd){
                            $errSname = '<span class="error">Please, Enter your password</span>';
                        }

                        if( $email && $pwd  ){
                            
                            // write code to open new window here
                            
                            // <p> login Succesfully </p>
                            
                        
                            }

                        else {
                            echo '<p class="error"> Please fill all the missing field(s)</p>';
                        }


         }
?>
         
                    <h2>Login</h2>

                    <div class="inputbox">

                        <ion-icon name="mail-outline"></ion-icon>
                        <input type="email" required  name="email">
                        <label for="">Email</label>

                    </div>

                    <div class="inputbox">                        

                        <ion-icon name="lock-closed-outline"></ion-icon>
                        <input type="password" required name="pwd">
                        <label for="">Password</label>

                    </div>

                    <div class="forget">
                        
                        <label for="">

                            <input type="checkbox" required id="fginput">Remember me

                            <a href="recovery.php">Forgotten Password?</a>

                        </label>
                    </div>

                    <button name="Login">Log in</button> 

                    <div class="register">
                        Dont have an account? <a href="register.php"> Register</a>
                    </div>

               </form>

            </div>

        </div>
    </section>

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>