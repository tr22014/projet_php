<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: sans-serif;
            background: linear-gradient(to right, #b92b27, #1565c0);
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .card {
            margin-bottom: 20px;
            border: none;
        }

        .box {
            width: 500px;
            padding: 40px;
            background: #191919;
            text-align: center;
            transition: 0.25s;
            border-radius: 10px;
        }

        .box input[type="text"],
        .box input[type="email"],
        .box input[type="password"] {
            border: 0;
            background: none;
            display: block;
            margin: 20px auto;
            text-align: center;
            border: 2px solid #3498db;
            padding: 10px;
            width: 250px;
            outline: none;
            color: white;
            border-radius: 24px;
            transition: 0.25s;
        }

        .box h1 {
            color: white;
            text-transform: uppercase;
            font-weight: 500;
        }

        .box input[type="text"]:focus,
        .box input[type="email"]:focus,
        .box input[type="password"]:focus {
            width: 300px;
            border-color: #2ecc71;
        }

        .box input[type="submit"] {
            border: 0;
            background: none;
            display: block;
            margin: 20px auto;
            text-align: center;
            border: 2px solid #2ecc71;
            padding: 14px 40px;
            outline: none;
            color: white;
            border-radius: 24px;
            transition: 0.25s;
            cursor: pointer;
        }

        .box input[type="submit"]:hover {
            background: #2ecc71;
        }

        .text-muted {
            color: white;
        }

        ul.social-network {
            list-style: none;
            display: inline;
            margin-left: 0 !important;
            padding: 0;
        }

        ul.social-network li {
            display: inline;
            margin: 0 5px;
        }

        .social-network a.icoFacebook:hover {
            background-color: #3B5998;
        }

        .social-network a.icoTwitter:hover {
            background-color: #33ccff;
        }

        .social-network a.icoGoogle:hover {
            background-color: #BD3518;
        }

        .social-circle li a {
            display: inline-block;
            position: relative;
            margin: 0 auto;
            border-radius: 50%;
            text-align: center;
            width: 50px;
            height: 50px;
            font-size: 20px;
        }

        .social-circle li i {
            margin: 0;
            line-height: 50px;
            text-align: center;
            color: #fff;
            transition: all 0.8s;
        }
        .x{
            color:white;
        }
    </style>
</head>
<body>
    <div class="container"> 
        <div class="row"> 
            <div class="col-md-6"> 
                <div class="card">
                    <form action="your-signup-endpoint.php" method="POST" class="box"> 
                        <h1>Sign Up</h1>
                        <p class="text-muted">Please fill in the details to create an account!</p>
                        <label for="signup-email" class="x">Email</label>
                        <input type="email" id="signup-email" name="email" placeholder="Email" required>
                        <label for="signup-password" class="x">Password</label>
                        <input type="password" id="signup-password" name="password" placeholder="Password" required>
                        <label for="signup-confirm-password" class="x">Confirm Password</label>
                        <input type="password" id="signup-confirm-password" name="confirm-password" placeholder="Confirm Password" required>
                        <input type="submit" name="signup" value="Sign Up">
                        <p class="text-muted">Already have an account? <a href="loogin.php" style="text-decoration: none;">Login</a></p>
                        <div class="col-md-12">
                            <ul class="social-network social-circle">
                                <li><a href="https://web.facebook.com/?_rdc=1&_rdr" class="icoFacebook" title="Facebook">
                                    <i class="fab fa-facebook-f"></i>
                                </a></li> 
                                <li><a href="https://x.com/" class="icoTwitter" title="Twitter">
                                    <i class="fab fa-twitter"></i>
                                </a></li> 
                                <li><a href="https://www.google.com/" class="icoGoogle" title="Google">
                                    <i class="fab fa-google-plus"></i>
                                </a></li> 
                            </ul>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
