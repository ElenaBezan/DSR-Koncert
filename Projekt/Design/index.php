<?php session_start();
if (!isset($_SESSION["email"])){
    header("location:login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Iconcert - Registracija</title>
</head>
<body>
<div class="slider">
        <div class="load">            
        </div>
        <div class="content">
            <nav class="navbar navbar-dark">
                <a class="navbar-brand" href="home.html">
                    <img src="Photo/icon.png" width="30" height="30" class="d-inline-block align-top" alt="">
                </a>
                <a class="nav-link mb-0 h5" href="seznam.html">SEZNAM</a>
                <a class="nav-link mb-0 h5" href="login.php">LOGIN</a>
            </nav><br><br>
            <div class="d-flex justify-content-center">
                <h1>Pozdravljen <?php echo $_SESSION["email"];?></h1>
                
            </div>
            <div class="d-flex justify-content-center">
                <h2><a href="logout.php">Odjava</a></h2>
            </div>
        </div>
</div>
</body>
</html>