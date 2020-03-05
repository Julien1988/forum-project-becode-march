<?php
require_once('DatabaseManager.php');
require_once('UserGateway.php');

const USER = "email";
const PWD = "mdp";

if ($_SERVER["REQUEST_METHOD"] = "POST") {
    $input = (array) json_decode(file_get_contents('php://input'), true);
    $email = $input[USER];
    $pwd = $input[PWD];

    if (isset($email) && isset($pwd) && ($email = filter_var($email, FILTER_VALIDATE_EMAIL))) {
        if (checkdb($email, $pwd)) {
            $_SESSION['ID'] =
                header('http/1.1 200 OK');
            header('Location: redirect.php');
        } else {
            header('http/1.1 401');
        }
        exit();
    } else {
        header('http/1.1 401 Unauthorized');
        exit();
    }
}

function checkdb($email, $pwd)
{
    $userGate = new UserGateway();
    if ($dbPWD = $userGate->getPwdFrom($email)) {
        return (password_verify($pwd, $dbPWD));
    }
}
