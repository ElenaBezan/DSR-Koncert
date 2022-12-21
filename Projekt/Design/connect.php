<?php
include "config.php";

    $ime = $_POST['ime'];
    $priimek = $_POST['priimek'];
    $email = $_POST['email'];
    $geslo = $_POST['geslo'];

    try{
        $shrani = $db->prepare("INSERT INTO uporabnik (ime, priimek, email, geslo) VALUES('$ime', '$priimek', '$email', '$geslo')");
        $result = $shrani->execute([$ime, $priimek, $email, $geslo]);
		if($result){
			echo 'Successfully saved.';
		}else{
			echo 'There were erros while saving the data.';
		}
    }catch (PDOException) {
        header("HTTP/1.1 401 Unauthorized");
    }






    /*$ime = $_POST['ime'];
    $priimek = $_POST['priimek'];
    $email = $_POST['email'];
    $geslo = $_POST['geslo'];

    //Database
    $conn = new mysqli('localhost','root','','koncert');
    if($conn->connect_error){
        die('Connection Failed : '.$conn->connect_error);
    }else{
        $stmt = $conn->prepare("insert into uporabnik(ime, priimek, email, geslo) values(?, ?, ?, ?)");
		$stmt->bind_param("ssss", $ime, $priimek, $email, $email, $geslo);
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();
    }
    */
    
?>