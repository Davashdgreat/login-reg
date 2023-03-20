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

               <form action=""  method="post">

                <?php
                    require_once('sanitize.php');
                    require_once('config.php');
        
                    if(isset($_POST['Recover']))
                    {
                        $email = check($_POST['email']);
        
        
                        
                        if(!$email){
                        $errEmail = '<span class="error">Please, Enter your Email</span>';
                    }
        
                        if( $email ){
                           
                            
                        
                        }
        
                        else {
                            echo '<p class="error"> Please fill all the missing field(s)</p>';
                        }
        
        
                    }
       ?>


                    <h2>Recover your Account</h2>

                    <p class="recotxt">Type your email so we send you a recovery link</p>

                    <div class="inputbox">

                        <ion-icon name="mail-outline"></ion-icon>
                        <input type="email" required name="email">
                        <label for="">Email</label>

                    </div>


                    <button name="Recover">Send link</button> 

               </form>

            </div>

        </div>
    </section>

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>