<?php
// define variables and set to empty values
$name = $firstname = $email = $phone = $object = $message = "";

if ($_SERVER["REQUEST_METHOD"] ==  "POST") {
    if (empty($_POST['user_name'])) {
        $nameErr = 'Name is required, come back please';
        echo $nameErr;
        return;
    } else {
        $name = test_input($_POST["user_name"]);
    }
    if (empty($_POST['first_name'])) {
        $nameErr = 'Firstname is required, come back please';
        echo $nameErr;
        return;
    } else {
        $firstname = test_input($_POST["first_name"]);
    }
    if (empty($_POST['user_email'])) {
        $nameErr = 'Email is required, come back please';
        echo $nameErr;
        return;
    } else {
        $email = test_input($_POST["user_email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = 'Invalid email format';
            echo $emailErr;
            return;
        };
    }
    if (empty($_POST['phone_number'])) {
        $nameErr = 'Phone number is required, come back please';
        echo $nameErr;
        return;
    } else {
        $phone = test_input($_POST["phone_number"]);
    }
    if (empty($_POST['object'])) {
        $nameErr = 'Object is required, come back please';
        echo $nameErr;
        return;
    } else {
        $object = test_input($_POST["object"]);
    }
    if (empty($_POST['user_message'])) {
        $nameErr = 'Message is required, come back please';
        echo $nameErr;
        return;
    } else {
        $message = test_input($_POST["user_message"]);
    }
};

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}


/*var_dump($firstname);*/

echo  'Merci ' . $firstname . ' ' . $name . ' de nous avoir contacté à propos "' . $object . '". Un de nos conseillers vous contactera soit à l’adresse "' . $email . '" soit par téléphone au ' . $phone . ', dans les plus brefs délais pour traiter votre demande : <br>' ;

echo $message ;

?>
