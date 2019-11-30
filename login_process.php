<?php

// check if the request methodi post
if($_SERVER['REQUEST_METHOD']=='POST'){
    $un = $_POST['un'];
    $p = $_POST['p'];
    // Validation
    if(isset($un) && !empty($un) && isset($p) && !empty($p)){
        // require the connection file
        require('./connect.php');
        $stmt = $conn->prepare('SELECT * FROM users WHERE username=:username AND password=:password LIMIT 1');
        $stmt->execute([
            'username'=>$un,
            'password'=>$p
        ]);
        if($stmt->rowCount() > 0){
            // die(print_r($stmt->fetch(PDO::FETCH_ASSOC)));
            // user have been found
            // set a session with the user details
            $_SESSION['user'] = $stmt->fetch(PDO::FETCH_ASSOC);
            
            // Send logged in message
            $_SESSION['success_msg']="Welcome back {$un}";

            // redirect to home page.
            header("Location:".URLROOT);

        }else{
            // user not found in the database
            // send error message that credentials incorrect
            $_SESSION['error_msg']="username or password incrroect.";
            // redirect baclk to login page to affect the message
            header("Location:".URLROOT.'login.php');
        }
    }
}else{
    // the request method is not post then redirect to home
    header('Location:'.URLROOT);
}