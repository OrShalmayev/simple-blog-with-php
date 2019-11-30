<?php

function isLoggedIn(){
    if(isset($_SESSION['user']) && !empty($_SESSION['user'])){
        return true;
    }else{
        return false;
    }
}

function redirectLoggedInUsers(){
    // if the user is already logged in then redirect to home page
    if(isLoggedIn()){
        header("Location:".URLROOT);
    }
}