

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/signup.css">
    <link rel="stylesheet" href="css/icons/fonts/all.css">
</head>
<body>
<div class="wrapper">
        <div class="form signup">
    <form action="includes/login_inc.php" method="POST">
        <div class="error-txt">Login User</div>
            <div class="field input">
                <label>Username</label>
                <input type="text" name="Uname" placeholder="Username">
            </div>
            <div class="field input">
                <label>Password</label>
                <input type="password" name="Pword" placeholder="Password">
                <i class="fa-solid fa-eye"></i>
            </div>
           
            <div class="field button">
                <input type="submit" name="login_submit" value="Login">
            </div>
        
    </form>
   
   
    </div>
    </div>
    <script src="javascript/pass_hide.js"></script>
    
</body>
</html>