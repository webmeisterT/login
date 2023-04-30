<?php
session_start();

$message = "";
function sanitizeAll(){
    $postRequest = [];
    //sanitize post data
    foreach ($_POST as $key => $value) {
        $postRequest[$key] = filter_input(INPUT_POST, $key, FILTER_SANITIZE_SPECIAL_CHARS);

    }
    return $postRequest;   
}

$users = [
    [
        'username' => 'Admin',
        'password' => 'AdminPassowrd',
    ],
    [
        'username' => 'Worker',
        'password' => 'WorkerPassowrd',
    ],
    [
        'username' => 'Technician',
        'password' => 'TechnicianPassowrd',
    ],
];

if ($_SERVER["REQUEST_METHOD"] === "POST" && !empty($_POST)) {
    $res = sanitizeAll();
    
        if (array_search($res,$users)) {
            $_SESSION['signed_in'] = true;
            $_SESSION['user'] = $res['username'];

            $message = "Welcome ". $res['username']. "! You have signed in successfully.";           
        } else {
            $message = "Please enter a valid credentials";
            // header('location:login.html');
        }
}
echo $message;
?>