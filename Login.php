<?php


    session_start();

    $user="lolita";
    $pass="123";
    //No nosso caso o valor do user e da pass seriam comparados com os que estão na base de dados, para decidir se entra ou não

    if (isset($_SESSION["dentro"]) && $_SESSION["dentro"]==true){
        header("Location: logged.php");
    }
    if (isset($_POST["user"])&& isset($_POST["pass"])){
        if($_POST["user"]==$user && $_POST["pass"]==$pass){
            $_SESSION["dentro"]=true;
            header("Location: logged.php");
        }
    }


?>