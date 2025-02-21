
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
    <form action="includes/signup.inc.php" method="POST">
        <div class="error-txt">Create New User</div>
        <div class="name_details">
            <div class="field input">
                <label>First Name</label>
                <input type="text" name="Fname" placeholder="First Name">
            </div>
            <div class="field input">
                <label>Last Name</label>
                <input type="text" name="Lname" placeholder="Last Name">
            </div>
        </div>
            <div class="field input">
                <label>Email Address</label>
                <input type="text" name="mail" placeholder="Email Address">
            </div>
            <div class="field input">
                <label>Username</label>OOOOO
                <input type="text" name="Uname" placeholder="Username">
            </div>
            <div class="field input">
                <label>Password</label>
                <input type="password" name="Pword" placeholder="Password">
                <i class="fa-solid fa-eye"></i>
            </div>
            
            <div class="field button">
                <input type="submit" name="submit" value="Sign Up">
            </div>
        
    </form>
    <div class="link">Already signed up? <a href="index.php">Login now</a></div>
    </div>
    </div>

   

    <script src="javascript/pass_hide.js"></script>
</body>
</html>