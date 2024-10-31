<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body { margin: 0; padding: 0; font-family: sans-serif; background: linear-gradient(to right, #b92b27, #1565c0); height: 100vh; display: flex; align-items: center; justify-content: center; }
        .card { margin-bottom: 20px; border: none; }
        .box { width: 500px; padding: 40px; background: #191919; text-align: center; transition: 0.25s; border-radius: 10px; }
        .box input[type="text"], .box input[type="password"], .box input[type="email"] { border: 0; background: none; display: block; margin: 20px auto; text-align: center; border: 2px solid #3498db; padding: 10px; width: 250px; outline: none; color: white; border-radius: 24px; transition: 0.25s; }
        .box h1 { color: white; text-transform: uppercase; font-weight: 500; }
        .box input[type="text"]:focus, .box input[type="password"]:focus, .box input[type="email"]:focus { width: 300px; border-color: #2ecc71; }
        .box input[type="submit"] { border: 0; background: none; display: block; margin: 20px auto; text-align: center; border: 2px solid #2ecc71; padding: 14px 40px; outline: none; color: white; border-radius: 24px; transition: 0.25s; cursor: pointer; }
        .box input[type="submit"]:hover { background: #2ecc71; }
        .forgot { text-decoration: underline; color: white; }
        .social-network { list-style: none; display: inline; margin-left: 0 !important; padding: 0; }
        .social-network li { display: inline; margin: 0 5px; }
        .social-circle li a { display: inline-block; position: relative; margin: 0 auto; border-radius: 50%; text-align: center; width: 50px; height: 50px; font-size: 20px; }
        .social-circle li i { margin: 0; line-height: 50px; text-align: center; color: #fff; transition: all 0.8s; }
        .text-muted { color: white; }
        .x { 
            color :white;
        }
    </style>
</head>
<body>
    <div class="container"> 
        <div class="row"> 
            <div class="col-md-6"> 
                <div class="card">
                    <form action="home.php" method="POST" class="box" onsubmit="return validateForm()"> 
                        <h1>Login</h1>
                        <p class="text-muted">Please enter your login details!</p>
                        
                        <label for="email" class="x">Email</label>
                        <input type="email" id="email" name="email" placeholder="Email" required>

                        <label for="password" class="x">Password</label>
                        <input type="password" id="password" name="password" placeholder="Password" required>
                        
                        <input type="checkbox" id="showPassword" onclick="togglePassword()">
                        <label for="showPassword" class="text-muted">Show password</label>
                        
                        <br>
                        <a class="forgot text-muted" href="#">Forgot password?</a> 
                        <input type="submit" name="login" value="Login">
                        
                        <p class="text-muted">Not registered? <a href="siignup.php" style="text-decoration: none;">Create an account</a></p>
                        
                        <div class="col-md-12">
                            <ul class="social-network social-circle">
                                <li><a href="https://web.facebook.com/" class="icoFacebook" title="Facebook"><i class="fab fa-facebook-f"></i></a></li> 
                                <li><a href="https://x.com/" class="icoTwitter" title="Twitter"><i class="fab fa-twitter"></i></a></li> 
                                <li><a href="https://www.google.com/" class="icoGoogle" title="Google"><i class="fab fa-google-plus"></i></a></li> 
                            </ul>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        function togglePassword() {
            const passwordInput = document.getElementById('password');
            passwordInput.type = passwordInput.type === 'password' ? 'text' : 'password';
        }

        function validateForm() {
            const emailPattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
            const emailInput = document.getElementById('email').value;
            const passwordInput = document.getElementById('password').value;

            if (!emailPattern.test(emailInput)) {
                alert("Invalid email address. Please try again.");
                return false; 
            }

            if (!validatePassword(passwordInput)) {
                alert("Password must be at least 8 characters long and include uppercase letters, lowercase letters, numbers, and special characters.");
                return false; 
            }

            return true; 
        }

        function validatePassword(password) {
            const regex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[.,!@#$%^&*()_+|~\-=`;:'"<>\?])[A-Za-z\d.,!@#$%^&*()_+|~\-=`;:'"<>\?]{8,}$/;
            return regex.test(password);
        }
    </script>
</body>
</html>
