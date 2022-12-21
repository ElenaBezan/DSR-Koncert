<?php
require_once('config.php');
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
<div>
<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
      $ime = $_POST['ime'];
      $priimek = $_POST['priimek'];
      $email = $_POST['email'];
      $geslo = $_POST['geslo'];

      /*echo $ime;
      echo $priimek;
      echo $email;
      echo $geslo;*/

    try{
        $shrani = $db->prepare("INSERT INTO uporabnik (ime, priimek, email, geslo) VALUES(?,?,?,?)");
        $result = $shrani->execute([$ime, $priimek, $email, $geslo]);
		if($result){
			//echo 'Successfully saved.';
		}else{
			echo 'There were erros while saving the data.';
		}
    //echo 'hej';
    }catch (PDOException $e) {
    header("HTTP/1.1 401 Unauthorized");
    echo $e->getMessage();
    }

    }
	  ?>	
</div>
    <div class="slider">
        <div class="load">            
        </div>
        <div class="content">
            <nav class="navbar navbar-light">
                <a class="navbar-brand" href="home.html">
                    <img src="Photo/icon.png" width="30" height="30" class="d-inline-block align-top" alt="">
                </a>
                <a class="nav-link mb-0 h5" href="seznam.html">SEZNAM</a>
                <a class="nav-link mb-0 h5" href="login.php">LOGIN</a>
            </nav>
            <div class="principal">
                    <div class="container h-100">
                      <div class="row d-flex justify-content-center align-items-center h-100">
                        <div class="col-lg-12 col-xl-11">
                          <div class="card text-black" style="border-radius: 25px;">
                            <div class="card-body p-md-5">
                              <div class="row justify-content-center">
                                <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">
                                  <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Sign up</p>
                  
                                  <!--FORM-->
                                  <form class="mx-1 mx-md-4" action="registracija.php" method="post">
                  
                                    <div class="d-flex flex-row align-items-center mb-4">
                                      <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                                      <div class="form-outline flex-fill mb-0">
                                        <input type="text" id="ime" class="form-control" name="ime"/>
                                        <label class="form-label" for="ime">Ime</label>
                                      </div>
                                    </div>

                                    <div class="d-flex flex-row align-items-center mb-4">
                                        <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                                        <div class="form-outline flex-fill mb-0">
                                          <input type="text" id="priimek" class="form-control" name="priimek"/>
                                          <label class="form-label" for="priimek">Priimek</label>
                                        </div>
                                      </div>
                  
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
                                      <input type="submit" class="btn btn-primary btn-lg" name="registracija"/>
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