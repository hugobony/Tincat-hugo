<?php

$DB_HOST = "localhost";
$DB_NAME = "tincat";
$DB_USER = "root";
$DB_PASSWORD = "root";


//connect a la base de donnée 
try {
    $db = new PDO("mysql:host=$DB_HOST;dbname=$DB_NAME", $DB_USER, $DB_PASSWORD);
} catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage() . "<br/>";
    die();
}


//Vérification que tout les champs sont bien complétés

$req = $db->prepare("INSERT INTO users (pseudo, email, password) VALUES(:pseudo, :email, :password)");


    if($_POST["pseudo"] == "" || $_POST["password"] == "" || $_POST["email"] == ""){
    echo "Veuillez renseigner tous les champs.";
   
    header("Location: ../register.php?inputNone=Veuillez renseigner tous les champs.");
    }
    else {
        $req->bindParam(":pseudo", $_POST["pseudo"]);
    }

    if($_POST["password"] === $_POST["confirm-password"]){
        $req->bindParam(":password", $_POST["password"]);
    }
    else{
        echo "Les mots de passe de correspondent pas.";
        header("Location: ../register.php?errorPassword=Les mots de passe de correspondent pas.");
    }



    
$req->bindParam(":email", $_POST["email"]);

var_dump($_POST);

hugo 