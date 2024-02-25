<?php 
    $firstName = $_POST['fname'];
    $lastName = $_POST['lname'];
    $kraj = $_POST['kraj'];
    $email = $_POST['email'];
    $preveri =$_POST['preveri'];
    $zadeva = $_POST['zadeva'];
    $sporocilo = $_POST['sporocilo'];
    
    //povezava
    $povezava = new mysqli('localhost','root','','obrazec');
    if($povezava->connect_error){
        die('Connection Failed : '.$povezava->connect_error);
    }
    else{
        $vnos = $povezava->prepare("insert into obrazec (ime, priimek, kraj,email, spam, zadeva, sporocilo)
        values(?,?,?,?,?,?,?)");
        $vnos->bind_param("sssssss", $firstName, $lastName, $kraj, $email,$preveri, $zadeva,$sporocilo);
        $vnos->execute();
        echo "Uspešno poslano...";
        $vnos->close();
        $povezava->close();
    }

    ?>
