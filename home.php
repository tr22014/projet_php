<?php
session_start();
$_SESSION["prenom"] = "Amine";
$_SESSION["nom"] = "Ze";
$_SESSION["email"] = "am@gmail.com";
?>

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">WebSiteName</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li><a href="loogin.php">Log out</a></li>
      <li><a href="siignup.php">sign up</a></li>
      <li><a href="#">Page 3</a></li>
    </ul>
  </div>
</nav>
  
<div class="container">
</div>
<?php
    echo '<p> Hi '. $_SESSION['prenom']. ' 
'.$_SESSION['nom']. ' you are in home page </p>';
 ?>
<?php
    if (isset($_POST['login'])) {
        $uservalue = $_POST['email'];
        $passwordvalue = $_POST['password'];
        if (empty($uservalue) || empty($passwordvalue)) {
            echo 'Empty values';
        } else {
            echo 'Welcome, your informations are : <br>';
            echo "Email: $uservalue <br>";
            echo "Password: $passwordvalue <br>";
        }
    } else {
        echo 'Please log in';
    }
    ?> 
</body>
</html>
