<?php 
session_start();
include 'config.php';
/*if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(empty($_POST['email']) || empty($_POST['geslo'])){
        echo "Email or password field is empty!";
    }
    else{
        
    }
}*/
//if(isset($_POST["uporabnik"])){
if($_SERVER["REQUEST_METHOD"] == "POST"){
    if($_POST['email']=="" or $_POST['geslo']==""){
        echo "Email or password field is empty!";
    }
    else{
        $email = $_POST['email'];
        $geslo = $_POST['geslo'];
        $query = $db->prepare("SELECT * FROM uporabnik WHERE email=? AND geslo=?");
        $query->execute(array($email,$geslo));
        $control=$query->fetch(PDO::FETCH_OBJ);
        if($control>0){
            $_SESSION["email"]=$email;
            header("Location:index.php");
        }
        echo "Email or password is incorrect!";
    }
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
    <title>Iconcert - Login</title>
</head>
<body>
    <div class="slider">
        <div class="load">            
        </div>
        <div class="content">
            <nav class="navbar navbar-light">
                <a class="navbar-brand" href="home.html">
                    <img src="Photo/icon.png" width="30" height="30" class="d-inline-block align-top" alt="">
                </a>
                <a class="nav-link mb-0 h5" href="seznam.html">SEZNAM</a>
                <a class="nav-link mb-0 h5" href="registracija.php">REGISTRACIJA</a>
            </nav>
            <div class="principal">
                    <div class="container h-100">
                      <div class="row d-flex justify-content-center align-items-center h-100">
                        <div class="col-lg-12 col-xl-11">
                          <div class="card text-black" style="border-radius: 25px;">
                            <div class="card-body p-md-5">
                              <div class="row justify-content-center">
                                <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">
                  
                                  <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Prijavi se!</p>   
                                  
                                  <form class="mx-1 mx-md-4" action="login.php" method="post">
                  
                                    <div class="d-flex flex-row align-items-center mb-4">
                                      <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                                      <div class="form-outline flex-fill mb-0">
                                        <input type="email" id="email" class="form-control" name="email"/>
                                        <label class="form-label" for="email">Email</label>
                                      </div>
                                    </div>
                  
                                    <div class="d-flex flex-row align-items-center mb-4">
                                      <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                                      <div class="form-outline flex-fill mb-0">
                                        <input type="password" id="geslo" class="form-control" name="geslo"/>
                                        <label class="form-label" for="geslo">Geslo</label>
                                      </div>
                                    </div>
                  
                                    <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                                      <button type="submit" class="btn btn-primary btn-lg">Prijava</button>
                                    </div>
                  
                                  </form>
                  
                                </div>
                                <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">
                  
                                  <img src="Photo/login.png"
                                    class="img-fluid" alt="Sample image">
                  
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
            </div>
        </div>
    </div>
            <!-- Option 1: Bootstrap Bundle with Popper -->
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>