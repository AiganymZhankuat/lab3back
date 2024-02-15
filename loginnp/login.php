<?php

session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
   
    $username = isset($_POST['username']) ? $_POST['username'] : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';

    
    if ($username === "page1" && $password === "alpha") {
        
        $_SESSION['username'] = $username;
        header('Location: page1.php');
        exit;
    } 
    if ($username === "page2" && $password === "beta") {
    
        $_SESSION['username'] = $username;
        header('Location: page2.php');
        exit;
    }
    if ($username === "page3" && $password === "gamma") {
    
        $_SESSION['username'] = $username;
        header('Location: page3.php');
        exit;
    }
    else {
       header('Location: error.php');
    }
}
?>

