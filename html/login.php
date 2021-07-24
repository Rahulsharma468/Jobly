<!DOCTYPE html>
<html lang="en">
<head>
    <!-- S-s -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script 
        src="https://kit.fontawesome.com/5353301a4d.js" 
        crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="../css/main.css">
    <script src="https://www.gstatic.com/firebasejs/8.0.0/firebase-app.js"></script>
    <link rel="icon" href="../svg/main.png">
    <title>Login</title>
</head>
<body>
	<?php require_once 'login_backend.php'; ?>
    <div class="container">
        <div class="forms-container">
            <div class="signin">
                <form action="login_backend.php" method="POST" name="f1" class="sign-in-form" >
                    <h2 class="title">Sign In</h2>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="name" name="username" id="userSIEmail" class="uname" placeholder="Enter username" required>
                    </div>

                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" name="password" id="password" placeholder="Enter Password" required>
                    </div>
                    <label><input type="checkbox" onclick="myFunction()" autocomplete="off"  />Show Password</label>
                    <input type="submit" value="Login" class="btn solid" name="but_submit">

                </form>
            </div>
        </div>

        <div class="panels-container">
            <div class="panel left-panel">
                <div class="content">
                    <h2>New Here?</h2>
                    <h2>Have some technical stuff to be done with?? 
                        Or simply want be a part of this website ??
                        Click on the link below to get started with us....
                    </h2>
                    <button class="btn transparent" id="sign-up-btn" onclick="window.location.href='register.php'">Sign Up</button>
                </div>
                
                <img src="../svg/logo.svg" alt="logo" class="image" >

            </div>
        </div>
    </div>
        <script>  
            function validation()  
            {  
                var id=document.f1.email.value;  
                var ps=document.f1.password.value;  
                if(id.length=="" && ps.length=="") {  
                    alert("User Name and Password fields are empty");  
                    return false;  
                }  
                else  
                {  
                    if(id.length=="") {  
                        alert("User Name is empty");  
                        return false;  
                    }   
                    if (ps.length=="") {  
                    alert("Password field is empty");  
                    return false;  
                    }  
                }                             
            }  
        </script>  

<script type="text/javascript">
   function myFunction() {
  const x = document.getElementById("password");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>
</body>
</html>