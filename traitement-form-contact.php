<?php
require_once 'includes/database/database.php';
$errors=[];
if($_SERVER['REQUEST_METHOD'] == 'POST'){
 if(empty($_POST['name'])){
    $errors[] = "Le nom est requis";
 }elseif(strlen($_POST['name']) < 3){
    $errors[] = "Le nom doit contenir au moins 3 caractères";
 }elseif(strlen($_POST['name']) > 50){
    $errors[] = "Le nom ne doit pas dépasser 50 caractères";
    } else{
        $name = htmlspecialchars(trim($_POST['name']));
     }


   
    if(empty($_POST['email'])){
            $errors[] = "L'email est requis";
    }elseif(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
        $errors[] = "L'email n'est pas valide";
    }else{
        $email = htmlspecialchars(trim($_POST['email']));
    }
    //message
    if(empty($_POST['message'])){
        $errors[] = "Le message est requis";
    }elseif(strlen($_POST['message']) < 10){
        $errors[] = "Le message doit contenir au moins 10 caractères";
    }elseif(strlen($_POST['message']) > 500){
        $errors[] = "Le message ne doit pas dépasser 500 caractères";
    }else{
        $message = htmlspecialchars(trim($_POST['message']));
    }
    //si il n'y a pas d'erreurs
    if(empty($errors)){
        //on insere les données dans la base de données
        $stmt = $db->prepare("INSERT INTO contact (name, email, message) VALUES (:name, :email, :message)");
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':message', $message);
        if($stmt->execute()){
            header('Location: index.php');
            exit;
        }else{
            header('Location: index.php');
            exit;
        }
    }else{
        //on affiche les erreurs
        foreach($errors as $error){
            echo '<div class="alert alert-danger">'.$error.'</div>';
        }
    }
}

// } else {

?>