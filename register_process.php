<?php

// check if the request method is post
if($_SERVER['REQUEST_METHOD']=='POST'){
    $un = $_POST['un'];
    $p = $_POST['p'];
    // Validation
    if(isset($un) && !empty($un) && isset($p) && !empty($p)){
        require('./connect.php');
        $stmt = $conn->prepare('INSERT INTO users (username, password) VALUES(:username, :password)');
        $stmt->execute([
            'username'=>$un,
            'password'=>$p
        ]);
        // send success message
        $_SESSION['success_msg']="You have been registered successfully!";
        header("Location:".URLROOT.'login.php');
    }else{
        $_SESSION['error_msg'] = 'You must fill all feidls.';
    }
}else{
    $_SESSION['err'] = 'You cant get this url.';
    header("Location:".URLROOT);
}