<?php
/**
 * Created by PhpStorm.
 * User: Erendiro Pedro
 * Date: 25/07/2017
 * Time: 04:17
 */

    session_start();
    if (!isset($_SESSION['dentro'])||$_SESSION['dentro']==false){
        header("Location: Login.html");
    }


?>


<h1>Estás na página!!!</h1>

