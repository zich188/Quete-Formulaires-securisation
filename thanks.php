<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    foreach ($_POST as $key => $value) {
        $data[$key] = trim($value);
    }

    $name = $_POST ["name"];
    $menud = $_POST["menud"];
    $email = $_POST ["email"];
    $phone = $_POST ["phone"];
    $message = $_POST ["message"];
    $valider = $_POST["valider"];

//$data = array_map('trim', $_POST);

    $error = [];

    if (empty($data["name"] && isset($data["name"]))) {
        $errors[] = "Entrez un prenom";
    }

    if (empty($data["phone"] && isset($data["phone"]))) {
        $errors[] = "Entrez un numéro de téléphone";
    }

    if (empty($data["message"] && isset($data["message"]))) {
        $errors[] = "Entrez un message";
    }

    if (empty($data["menud"] && isset($data["menud"]))) {
        $errors[] = "Choisir un thème";
    }

    if (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
        $errors[] = "L'email n'est pas valable.";
    }

    if (!empty($errors)) {
    foreach ($errors as $error) {
        echo  "<li>$error</li>";
    }
}

    if (empty($errors)) {
        echo htmlentities( "Merci " . $name . " de nous avoir contacté à propos d' " . $menud) ."<br/>";
        echo htmlentities(" Un de nos conseiller vous contactera soit à l’adresse " . $email . " ou par téléphone au " . $phone);
        echo " dans les plus brefs délais pour traiter votre demande : .<br/><br/> " . htmlentities($message);

        echo "<br/>";
        echo "<br/>";
    }

}









